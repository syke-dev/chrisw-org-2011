<?php
  
  # START OF MAIN
  
  # globals
  $dbh = 1;
  $UNIQUE_ENEMY_TYPES = 2;
  $UNIQUE_PLAYER_WEAPON_TYPES = 3;
  $UNIQUE_ENEMY_WEAPON_TYPES = 3;

  if ($_REQUEST["query"]) {
  
    connect_to_database();  
    
    run_query();
    
    $dbh->close();
    
  } else {
  
    echo 'Invalid parameters';
  }
  
  # END OF MAIN
  
  function connect_to_database() 
  {
    global $dbh;
    include '../../../etc/config/datacraft_config.php';
    
    $dbh = mysqli_init() OR DIE ('mysqli_init() failed!' . '\non line: ' . __LINE__);

    $dbh->real_connect($datacraft_host, $datacraft_user, $datacraft_password, $datacraft_dbname)
    OR DIE ('Failed to connect to database: ' . mysqli_connect_errno() . '\non line: ' . __LINE__);
  }
  
  function run_query()
  {
    $query = $_REQUEST["query"];
    
    if ($query == "enemy_kills")            enemy_kills();
    
    else if ($query == "player_scores")     player_scores();
    
    else if ($query == "enemies_on_board")  enemies_on_board();
    
    else if ($query == "player_wep_freq")   player_wep_freq();
    
    else if ($query == "enemy_wep_freq")    enemy_wep_freq();
  }
  
  function enemy_kills()
  {
    global $dbh;
    
    $query =  "SELECT gamepiece.type, SUM(Kills.kcount) Kills FROM gamepiece, enemy, weapon, " .
              "( SELECT m_owner, COUNT(*) kCount FROM missile  WHERE (target is not null) " .
              "AND (health - dmg <= 0) AND (health > 0) group by m_owner) Kills " .
              "WHERE (weapon.gp_id = Kills.m_owner) AND (enemy.gp_id = weapon.w_owner) " .
              "AND (gamepiece.gp_id = enemy.gp_id) group by gamepiece.type";
       
    $stmt = $dbh->prepare($query) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->execute() OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->bind_result($enemy_type, $kills) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    
    # print xml for the enemy_kills fusion chart
    echo "<chart caption = \"Number of Kills per Enemy Type\" xAxisName=\"Enemy Type\" yAxisName=\"Kills\">";
    
    while ($stmt->fetch())
    {
      echo "<set label=\"" . $enemy_type . "\" value=\"" . $kills . "\" />";
    }
  
    echo "</chart>";
    # print
    
    $stmt->close();
  }
  
  function player_scores()
  {
    global $dbh;
    
    $query = "SELECT played_by, final_score FROM game ORDER BY game.played_by, game.g_id";
              
    $stmt = $dbh->prepare($query) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->execute() OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->bind_result($played_by, $final_score) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    
    # print xml for the player_scores fusion chart
    echo "<chart caption = \"Player Scores Over Time\" xAxisName=\"Game #\" yAxisName=\"Score\" showValues=\"0\">";
    
    if ($stmt->fetch())
    {
      $max_games_played = 0;
      $datasets = "";
      $categories = "<categories>";
    
      # for each UNIQUE user, 
      # create a dataset with all of their game playthrough scores
      $user_number = 1; # instead of displaying ip address, just display user number
      
      do
      {
        $current_user = $played_by;
        $games_played = 1;
        
        #$datasets .= "<dataset seriesName='" . $current_user . "'>";
        $datasets .= "<dataset seriesName='" . "Player #" . $user_number . "'>";
        $user_number += 1;
        
        $datasets .= "<set value ='" . $final_score . "' />";
        
        while ($res = $stmt->fetch())     
        {
          if ($current_user != $played_by) break;
          
          $games_played++;
          $datasets .= "<set value ='" . $final_score . "' />";
        }
        
        if ($games_played > $max_games_played) $max_games_played = $games_played;
        
        $datasets .= "</dataset>";
        
      } while(!is_null($res));
      
      # create the category labels, one for each game
      for ($i = 0; $i < $max_games_played; $i++) 
      {
        $categories .= "<category label='" . $i . "' />";
      }
      $categories .= "</categories>";
    }
    
    echo $categories . $datasets . "</chart>";
    # print
    
    $stmt->close();
  }
  
  function enemies_on_board()
  {
    global $dbh, $UNIQUE_ENEMY_TYPES;
    
    $query =  "SELECT Enemies.used_in, Enemies.type, COUNT(*) num FROM" .
              "( SELECT gamepiece.dead_time, gamepiece.used_in FROM gamepiece, ship " .
              "WHERE (gamepiece.gp_id = ship.gp_id)) ships, " .
              "(SELECT gamepiece.build_time, gamepiece.dead_time, gamepiece.type, gamepiece.used_in " .
              "FROM gamepiece, enemy WHERE (gamepiece.gp_id = enemy.gp_id)) Enemies " .
              "WHERE (Enemies.used_in = ships.used_in) AND (Enemies.build_time <= ships.dead_time) " .
              "AND (Enemies.dead_time >= ships.dead_time) GROUP BY Enemies.used_in, Enemies.type " .
              "ORDER BY Enemies.used_in, Enemies.type";
              
    $stmt = $dbh->prepare($query) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->execute() OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->bind_result($used_in, $type, $num) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    
    # print xml for the enemies_on_board fusion chart
    echo "<chart caption = \"Number of Enemy Types on the Board at the Time of a Player's Death Per Game\" xAxisName=\"Game #\" yAxisName=\"Kills\" legendCaption=\"Enemy Ship Type\" showValues=\"0\">";
    
    if ($stmt->fetch())
    {       
      # each enemy type needs its own dataset
      # !!!! assuming enemy types go from 1 -> UNIQUE_ENEMY_TYPES !!!!
      for($i = 1; $i <= $UNIQUE_ENEMY_TYPES; $i++)
      {
        $datasets[$i] = "<dataset seriesName=\"" . $i . "\">";
      }
    
      $categories = "<categories>";
    
      # for each game played, 
      # create a dataset with all of their game playthrough scores
      do
      { 
        # give default values to all enemy types
        for($i = 1; $i <= $UNIQUE_ENEMY_TYPES; $i++)
        {
          $enemies_on_board[$i] = "0";
        }
        
        $current_game = $used_in;
        
        $categories .= "<category label=\"" . $used_in . "\"/>";
        $enemies_on_board[$type] = $num;
        
        while ($res = $stmt->fetch())     
        {
          if ($current_game != $used_in) break;
          
          $enemies_on_board[$type] = $num;
        }
        
        for($i = 1; $i <= $UNIQUE_ENEMY_TYPES; $i++)
        {
          $datasets[$i] .= "<set value =\"" . $enemies_on_board[$i] . "\" />";
        }
        
      } while(!is_null($res));
      
      $categories .= "</categories>";
    }
    
    echo $categories;
    
    for($i = 1; $i <= $UNIQUE_ENEMY_TYPES; $i++)
    {
      echo $datasets[$i] . "</dataset>";
    }

    echo "</chart>";
    # print
    
    $stmt->close();
  }
  
  function player_wep_freq()
  {
    global $dbh, $UNIQUE_PLAYER_WEAPON_TYPES;
    
    $query =  "SELECT gamepiece.type, ShipWeapons.lvl, COUNT(*) FROM gamepiece, missile, ".
              "( SELECT weapon.gp_id id, weapon.w_level lvl FROM weapon, ship " .
              "WHERE (weapon.w_owner = ship.gp_id)) ShipWeapons " .
              "WHERE (gamepiece.gp_id = ShipWeapons.id) " .
              "AND (missile.m_owner = ShipWeapons.id) " .
              "GROUP BY gamepiece.type, ShipWeapons.lvl " .
              "ORDER BY gamepiece.type, ShipWeapons.lvl";      
        
    $stmt = $dbh->prepare($query) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->execute() OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->bind_result($type, $lvl, $count) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    
    # print xml for the player_wep_freq fusion chart
    echo "<chart caption = \"Player Weapon Use Frequency\" xAxisName=\"Weapon Type\" yAxisName=\"Number of Uses\" legendCaption=\"Weapon Level\" showValues=\"0\">";
    
    if ($stmt->fetch())
    {       
      # each player weapon type needs its own dataset
      # !!!! assuming player weapon types go from 1 -> UNIQUE_PLAYER_WEAPON_TYPES !!!!
      for($i = 1; $i <= $UNIQUE_PLAYER_WEAPON_TYPES; $i++)
      {
        $datasets[$i] = "<dataset seriesName=\"" . $i . "\">";
      }
    
      $categories = "<categories>";
    
      # for each game played, 
      # create a dataset with all of their game playthrough scores
      do
      { 
        # give default values to all enemy types
        for($i = 1; $i <= $UNIQUE_PLAYER_WEAPON_TYPES; $i++)
        {
          $player_weapon_types[$i] = "0";
        }
        
        $current_weapon_type = $lvl;
        
        $categories .= "<category label=\"" . $lvl . "\"/>";
        $player_weapon_types[$lvl] = $count;
        
        while ($res = $stmt->fetch())     
        {
          if ($current_weapon_type != $type) break;
          
          $player_weapon_types[$lvl] = $count;
        }
        
        for($i = 1; $i <= $UNIQUE_PLAYER_WEAPON_TYPES; $i++)
        {
          $datasets[$i] .= "<set value =\"" . $player_weapon_types[$i] . "\" />";
        }
        
      } while(!is_null($res));
      
      $categories .= "</categories>";
    }
    
    echo $categories;
    
    for($i = 1; $i <= $UNIQUE_PLAYER_WEAPON_TYPES; $i++)
    {
      echo $datasets[$i] . "</dataset>";
    }

    echo "</chart>";
    # print
    
    $stmt->close();
  }
  
  function enemy_wep_freq()
  {
    global $dbh, $UNIQUE_ENEMY_WEAPON_TYPES;
    
    $query =  "SELECT gamepiece.type, EnemyWeapons.lvl, COUNT(*) FROM gamepiece, missile, " .
              "( SELECT weapon.gp_id id, weapon.w_level lvl FROM weapon, enemy " .
              "WHERE (weapon.w_owner = enemy.gp_id)) EnemyWeapons " .
              "WHERE (gamepiece.gp_id = EnemyWeapons.id) " .
              "AND (missile.m_owner = EnemyWeapons.id) " .
              "GROUP BY gamepiece.type, EnemyWeapons.lvl " .
              "ORDER BY gamepiece.type, EnemyWeapons.lvl";
    
        
    $stmt = $dbh->prepare($query) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->execute() OR DIE ($dbh->error . '\non line: ' . __LINE__);
    $stmt->bind_result($type, $lvl, $count) OR DIE ($dbh->error . '\non line: ' . __LINE__);
    
    # print xml for the enemy_wep_freq fusion chart
    echo "<chart caption = \"Enemy Weapon Use Frequency\" xAxisName=\"Weapon Type\" yAxisName=\"Number of Uses\" legendCaption=\"Weapon Level\" showValues=\"0\">";
    
    if ($stmt->fetch())
    {       
      # each enemy weapon type needs its own dataset
      # !!!! assuming enemy weapon types go from 1 -> UNIQUE_ENEMY_WEAPON_TYPES !!!!
      for($i = 1; $i <= $UNIQUE_ENEMY_WEAPON_TYPES; $i++)
      {
        $datasets[$i] = "<dataset seriesName=\"" . $i . "\">";
      }
    
      $categories = "<categories>";
    
      # for each game played, 
      # create a dataset with all of their game playthrough scores
      do
      { 
        # give default values to all enemy types
        for($i = 1; $i <= $UNIQUE_ENEMY_WEAPON_TYPES; $i++)
        {
          $enemy_weapon_types[$i] = "0";
        }
        
        $current_weapon_type = $lvl;
        
        $categories .= "<category label=\"" . $lvl . "\"/>";
        $enemy_weapon_types[$lvl] = $count;
        
        while ($res = $stmt->fetch())     
        {
          if ($current_weapon_type != $type) break;
          
          $enemy_weapon_types[$lvl] = $count;
        }
        
        for($i = 1; $i <= $UNIQUE_ENEMY_WEAPON_TYPES; $i++)
        {
          $datasets[$i] .= "<set value =\"" . $enemy_weapon_types[$i] . "\" />";
        }
        
      } while(!is_null($res));
      
      $categories .= "</categories>";
    }
    
    echo $categories;
    
    for($i = 1; $i <= $UNIQUE_ENEMY_WEAPON_TYPES; $i++)
    {
      echo $datasets[$i] . "</dataset>";
    }

    echo "</chart>";
    # print
    
    $stmt->close();
  }
  