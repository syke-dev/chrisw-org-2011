<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  
    <?php require(getenv("CHRISW_HEADER")) ?>
    <?php require(getenv("UNIT_DISPLAY")) ?>
    
    <link rel = "stylesheet" type = "text/css" href = "http://bloodtide.chrisw.org/bloodtide.css" />
    <link rel = "stylesheet" type = "text/css" href = "http://bloodtide.chrisw.org/units/units.css" />

    <title> Blood Tide </title>
  
  </head>
  
  <body>

    <div id = "global_mainarea">
    
      <img id = "btlogo" src = "../media/Logo.gif" />
      
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
      
      <div id = "human_links">
      
        <center><span class = "unit_name_humans">Humans</span></center><br>
      
        <div class = "unit_link">
          <img src = "bombship/BombshipIcon.png" /><br>
          <a href = "bombship">Bombship</a>
        </div>
        
        <div class = "unit_link">
          <img src = "scubatroop/ScubaTroopIcon.png" /><br>
          <a href = "scubatroop">Scuba Troop</a>
        </div>
        
        <div class = "unit_link">
          <img src = "submarine/SubmarineIcon.jpeg" /><br>
          <a href = "submarine">Submarine</a>
        </div>
        
      </div>
      
      <div id = "piscivian_links">
      
        <center><span class = "unit_name_piscivians">Piscivians</span></center><br>
      
        <div class = "unit_link">
          <img src = "mantaray/MantaRayIcon.png" /><br>
          <a href = "mantaray">Manta Ray</a>
        </div>
        
        <div class = "unit_link">
          <img src = "merman/MermanIcon.jpeg" /><br>
          <a href = "merman">Merman</a>
        </div>
        
        <div class = "unit_link">
          <img src = "turtle/TurtleIcon.jpeg" /><br>
          <a href = "turtle">Turtle</a>
        </div>
        
      </div>
   
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>