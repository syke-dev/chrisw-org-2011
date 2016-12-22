<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  
    <?php require(getenv("CHRISW_HEADER")) ?>

    <link rel = "stylesheet" type = "text/css" href = "datacraft.css" />

    <title> DataCraft </title>
  
  </head>
  
  <body>

    <div id = "global_mainarea">
      
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
      
      <div id = "gameinfo_content">
      
        <h2> DataCraft the Game </h2>
        
        <p>DataCraft the Game is a shoot 'em up built on top of XNA 4.0.
        The player has access to three different types of missiles.
        The first missile type has low damage, but high fire rate; the second has medium
        damage and medium fire rate; and the third has a high fire rate, but slow fire rate.
        The player battles against never-ending waves of enemies. Each wave of enemies that spawns constitutes a level.
        Each level is progressively harder than the last: featuring more enemies and eventually harder enemy types.
        The player has 50 health for the entire game. Once the player loses all his health, the game is over.
        When this happens, the player's stats are automatically uploaded to our servers and the game restarts from level 1.<p>
        
        <div class = "thumbnails">
          <a href = "media/DataCraftGame.jpg"><img src = "media/DataCraftGame.jpg" /></a>
          <a href = "media/DataCraftGame2.jpg"><img src = "media/DataCraftGame2.jpg" /></a>
        </div>
        
        <h2> Tracked Stats </h2>
        
        <div class = "nopad">
          <ul>
            <li>Player:</li>
              <ul><li>IP address</li></ul>
            <li>Game:</li>
              <ul><li>Final Score</li><li>Runtime</li><li>Date</li><li>Version</li></ul>
            <li>Enemy Ships:</li>
              <ul><li>Build Time</li><li>Death Time</li><li>Ship Type</li><li>Level</li></ul>
            <li>Missiles:</li>
              <ul><li>Build Time</li><li>Death Time</li><li>Damage</li><li>Target</li><li>Owner</li></ul>
          </ul>
        </div>

      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>