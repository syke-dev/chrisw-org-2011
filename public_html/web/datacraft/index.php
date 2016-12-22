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
      
      <div id = "gamehome_content">
      
        <div id = "column_left">
        
          <h1> Overview </h1>
          
          <p>DataCraft is a database project aimed at using statistics from play-throughs
          to balance a shoot 'em up game. It is meant to speed up the process of game-balancing, 
          by finding problem areas that game developers can focus their efforts towards.</p>
   
          <h1> Balancing </h1>
          
          <p>DataCraft is a two part process, starting with data-mining:
          statistics from all play-throughs of our shoot 'em up game are automatically 
          recorded in our database. These statistics include which ship the player chose, 
          which weapons the players used, how far they got through the game before losing, etc.</p> 
          
          <p>The next step in the DataCraft process would be analyzing the repository of data 
          that is created after players have completed a reasonable amount of games. 
          We could look at the repository for any number of game balance issues.
          For example, we could look for enemies that are too strong;
          if one type of enemy ship has the majority of kills, 
          then we could focus our efforts on balancing that particular ship type.</p>
        
        </div>
        
        <div id = "column_right" style = "text-align: center;">
        
          <a href = "stats.php">
            <img id = "main_video" src = "media/PlayerScores.jpg"></img>
          </a>
          
          <br>
        
          <p><a href = "download.php">Download Game</a></p>

        </div>
        
      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>