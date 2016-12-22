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
      
      <div id = "gameinfo_content">
      
        <h2> Puzzles </h2>
        
        <p>Willow plays much like the Game Myst, where the player is given minimal guidance through the game and 
        must progress by exploring and interacting with the game world. 
        There are four main puzzle areas in the game: the cabin, well, forest and greenhouse. 
        The first three puzzle areas each correspond to a color. When these areas are completed, that color is unlocked and will be visible in the world.
        At the end of the game, the player must use information found from these areas to solve one last puzzle.</p>
        
        <div class = "thumbnails"> 
          <a href = "media/Cabin.jpg"><img src = "media/Cabin.jpg" /></a> 
          <a href = "media/Well.jpg"><img src = "media/Well.jpg" /></a> 
        </div> 
        
        <h2> Interaction </h2>
        
        <p>The player can interact with a variety of game objects at these puzzle locations.
        The most common is picking items up; whenever a hand icon appears, that item may be picked up.
        The player can also equip items and then use them to interact with other game objects; 
        if an icon of the current selected object appears, that item may be used to interact with whatever the player is looking at.
        The player may also investigate certain items to get more information (only items like diaries that may be read).</p>
        
        <div class = "thumbnails"> 
          <a href = "media/Pickup.jpg"><img src = "media/Pickup.jpg" /></a> 
          <a href = "media/Use.jpg"><img src = "media/Use.jpg" /></a> 
        </div> 
        
      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>