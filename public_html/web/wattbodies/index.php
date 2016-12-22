<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  
    <?php require(getenv("CHRISW_HEADER")) ?>
    
    <link rel = "stylesheet" type = "text/css" href = "wattbodies.css" />

    <title> Watt Bodies </title>
  
  </head>
  
  <body>

    <div id = "global_mainarea">
      
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
      
      <div id = "gamehome_content">
      
        <div id = "column_left">
        
          <h1> Overview </h1>
        
          <p>Watt Bodies is a multiplayer cooperative puzzle game geared towards children.
          Each player can choose between three different characters that have unique abilities
          required to solve puzzles or assist other players.</p>
          
          <h1> Gameplay </h1>
          
          <p>The players are stuck on an alien space station and have to find their way to the escape pod. 
          Getting to the escape pod involves answering multiple choice questions and solving several puzzles, 
          which reflect all of the robot's unique abilities. The questions and puzzles get increasingly harder 
          and require the robots to cooperate and use their abilities to aide each other.</p>
        
        </div>
        
        <div id = "column_right" style = "text-align: center;">
        
          <iframe id = "main_video" src="http://www.youtube.com/embed/uZajpLD29Ko?hd=1" frameborder="0" allowfullscreen></iframe>
        
          <br>
        
          <p><a href = "download.php">Download Game</a></p>

        </div>
        
      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>