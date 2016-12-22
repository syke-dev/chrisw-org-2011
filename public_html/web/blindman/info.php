<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  
    <?php require(getenv("CHRISW_HEADER")) ?>
    <?php require(getenv("HIGHSLIDE")) ?>

    <link rel = "stylesheet" type = "text/css" href = "blindman.css" />
    
    <script type="text/javascript">
      hs.outlineType = 'beveled';
    </script>

    <title> Blind Man's Last Stand </title>
  
  </head>
  
  <body>

    <div id = "global_mainarea">
      
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
      
      <div id = "gameinfo_content">
      
        <h2> Arduino Components </h2>
        
        <a class="highslide" href="media/VibrationMotors.jpg" onclick="return hs.expand(this, { headingText: 'Vibration Motors' })">
           <img src="media/VibrationMotors.jpg" height="100" width="100"/>
        </a>
        <div class = 'highslide-caption'>
          There are five vibration motors attached to the inside of the hat. 
          When the player dons the hat, there will be three motors resting on the front of the player's head and two motors that will be on the back / sides of the player's head.
          When zombies approach, the motor in the direction of the zombie will begin to vibrate. 
          The closer the zombie gets, the more the motor will vibrate. 
          If a zombie is positioned in-between two motors, the total power will be distributed between them. 
          This allows the player to perceive where the zombies are around him and how close they are to him.
        </div>
      
        <a class="highslide" href="media/Gyro.jpg" onclick="return hs.expand(this, { headingText: 'Gyro' })">
           <img src="media/Gyro.jpg" height="100" width="100"/>
        </a>
        <div class = 'highslide-caption'>
          There is a 1-axis gyro located on the top-middle of the hat. 
          It allows us to measure the rotation of the player's head. 
          This allows the player to rotate his avatar in the game world.
        </div>
  
        <a class="highslide" href="media/Nunchuk.jpg" onclick="return hs.expand(this, { headingText: 'Nunchuk' })">
           <img src="media/Nunchuk.jpg" height="100" width="100"/>
        </a>
        <div class = 'highslide-caption'>
          A nunchuk is used for attacking monsters. 
          The player can swing the nunchuck, which initiations an attack in the direction the player is facing.
        </div>
  
        <a class="highslide" href="media/TenSegmentDisplay.jpg" onclick="return hs.expand(this, { headingText: 'Ten Segment Display' })">
           <img src="media/TenSegmentDisplay.jpg" height="100" width="100"/>
        </a>
        <div class = 'highslide-caption'>
          A ten-segment display is attached to the rim of the hat. 
          It is used primarily to display the health of the player. 
          It is also used to display cool effects when the game is starting up and the player is dying.
        </div>

        <a class="highslide" href="media/Buzzer.jpg" onclick="return hs.expand(this, { headingText: 'Buzzer' })">
           <img src="media/Buzzer.jpg" height="100" width="100"/>
        </a>
        <div class = 'highslide-caption'>
          A buzzer is used to provide audio cues when the player kills a monster, takes damage and dies.       
        </div>
        
        <h2>Unity Game</h2>
        
        <p>The Arduino and the components connected to it handle all of the input and output for the game,
        however, all of the game logic resides in the Unity game shown below. The Arduino is connected
        to a PC or laptop by USB. The Unity game keeps track of all of the world state and
        polls the Arduino for input from the nunchuk and gyro. The Unity game also controls the LEDs,
        motors and buzzer.</p>
        
        <div class = "thumbnails">
          <a href = "media/GameInUnity.jpg"><img src = "media/GameInUnity.jpg" /></a>
          <a href = "media/Schematic.png"><img src = "media/Schematic.png" /></a>
        </div>
        
        <p>The user interface for the Unity game is there for testing and so that other players
        can see what it happening in the game. The 5 white spheres represent the 5 vibration motors
        on the hat. The player's avatar is the black cylinder in the middle. Right now, the player
        is attacking, which is displayed via the yellow cone in front of the player. The black dot
        approaching from the player's left is a zombie.

      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>