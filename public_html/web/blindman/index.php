<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  
    <?php require(getenv("CHRISW_HEADER")) ?>
    
    <link rel = "stylesheet" type = "text/css" href = "blindman.css" />
    
    <title> Blind Man's Last Stand </title>
    
  </head>
  
  <body>

    <div id = "global_mainarea">
      
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
    
      <div id = "gamehome_content">
      
        <div id = "column_left">
        
          <h1> Overview </h1>
          
          <p>Blind Man's Last Stand is a zombie survival game that takes place entirely
          on the player's hat. In this game, however, the player cannot see the zombies and 
          must rely on other senses to survive against the never-ending horde of zombies.</p>
 
          <h1> Gameplay </h1>
          
          <p>Zombies approach the player from all directions at regular intervals. 
          The player has to kill the zombies before they reach his position, or else he will take damage. 
          The player cannot move and he cannot see the zombies. 
          Instead, the player must rely on the sense of touch to locate where the zombies are. 
          The player can only attack in a small cone in front of him, so he must rotate in-place in order to face the zombies before attacking. 
          The goal of the game is to last as long as possible, however, zombies will always triumph in the end.</p>
        
        </div>
        
        <div id = "column_right" style = "text-align: center;">
        
          <iframe id = "main_video" src="http://www.youtube.com/embed/YTDlAT7XJSE?hd=1" frameborder="0" allowfullscreen></iframe>
          
          <br>
          
          <p><a href = "BlindMan-Unity.zip">Unity Project</a></p>
          <p><a href = "BlindMan-Arduino.zip">Arduino Code</a></p>
        
        </div>
        
      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>

    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>