<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  
    <?php require(getenv("CHRISW_HEADER")) ?>
    
    <link rel = "stylesheet" type = "text/css" href = "willow.css" />
    
    <title> Willow </title>
    
  </head>
  
  <body>

    <div id = "global_mainarea">
      
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
    
      <div id = "gamehome_content">
      
        <div id = "column_left">
        
          <h1> Overview </h1>
          
          <p>Willow is an interactive puzzle game with a strong emphasis on story and emotional impact. 
          It features a selective color shader that allows for only certain colors to be visible in the game world at any given time.</p>
          
          <h1> Gameplay </h1>
          
          <p>The player takes control of a depressed man stuck in a dream world. 
          His depression is manifested by the lack of colors in the dream. 
          The player must solve puzzles which symbolize important aspects of the man's life, 
          in order to help him overcome his feelings of despair. 
          As the man's happiness returns, color will gradually return to the world, 
          providing not just aesthetic effect, but also allowing the player to solve future puzzles.</p>
        
        </div>
        
        <div id = "column_right" style = "text-align: center;">

          <iframe id = "main_video" src="http://www.youtube.com/embed/2sr9vGQvTcQ" frameborder="0" allowfullscreen></iframe>
        
          <br>
        
          <p><a href = "download.php">Download Game</a></p>
        
        </div>
        
      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>