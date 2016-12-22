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
    
      <img id = "btlogo" src = "http://bloodtide.chrisw.org/media/Logo.gif" />
      
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
      
      <?php 
      
        display_merman();

      ?>
        
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>