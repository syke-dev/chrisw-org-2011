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
      
      <div id = "gameinfo_content">
      
        <h2> Robots </h2>
        
        <p>Players can choose to play as one of three robots. Players are free to change between the robots at anytime, 
        so long as no other player is currently using it. This allows the game to be played with less than 3 players.<p>
          
        <div class = "info_robot">
          <div class = "info_robot_image"><img src="media/Zoomoid.png" /><br>Zoomoid</div><br>
          Equipped with wheels, Zoomoid can move very fast and has the ability to run through conveyor belts. 
          This robot, however, cannot jump very high.<br>
        </div>
        
        <div class = "info_robot">
          <div class = "info_robot_image"><img src="media/Hoveroid.png" /><br>Hoveroid</div><br>
           Equipped with jet boots, Hoveroid can hover over the ground. This ability can be used to get to high areas the other robots can not reach. 
           This robot, however, is slower than Zoomoid.<br>
        </div>  
   
        <div class = "info_robot">
          <div class = "info_robot_image"><img src="media/Dousoid.png" /><br>Dousoid</div><br>
          Dousoid is the slowest and biggest of the three robots. It has a landing pad on its head that Hoveroid can use as a platform to jump higher. 
          This robot, however, is the slowest and since it is so large, it cannot fit into small spaces.<br>
        </div>
        
      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>