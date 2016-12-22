<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  
    <?php require(getenv("CHRISW_HEADER")) ?>
    <?php require(getenv("JQUERY_UI")) ?>
    
    <link rel = "stylesheet" type = "text/css" href = "willow.css" />
    
    <script type = "text/javascript">
      $(document).ready(function() {
      
        init_slider("#flowerpots_redslider");
        init_slider("#flowerpots_greenslider");
        init_slider("#well_blueslider");
        init_slider("#fireplace_redslider");
        init_slider("#willow_colorslider");
      });
    </script>

    <title> Willow </title>
  
  </head>
  
  <body>

    <div id = "global_mainarea">
      
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
      
      <div id = "subpage_content">
      
        <h2> Color Shader </h2>
      
        <?php place_slider("flowerpots_redslider", "media/FlowerPots-Gray.jpg", "media/FlowerPots-Red.jpg", "Red Unlocked"); ?>
        <?php place_slider("flowerpots_greenslider", "media/FlowerPots-Gray.jpg", "media/FlowerPots-Green.jpg", "Green Unlocked"); ?>
        <?php place_slider("well_blueslider", "media/Well-Gray.jpg", "media/Well-Blue.jpg", "Blue Unlocked"); ?>
        <?php place_slider("fireplace_redslider", "media/Fireplace-Gray.jpg", "media/Fireplace-Red.jpg", "Red Unlocked"); ?>
        <?php place_slider("willow_colorslider", "media/Willow-Gray.jpg", "media/Willow-Colors.jpg", "Red, Green & Blue Unlocked"); ?>

        <h2> Media </h2>
        
        <div style = "width: 610px; text-align: center;">
        
          <img src="media/Map.jpg" height="410" width="610"/><br>
          
          Map Sketch<br><br>

          <img src="media/MainMenu.jpg" height="410" width="610"/><br>
          
          Main Menu<br><br>
          
        </div>
          
        <h2> Inventory </h2>
        
        <div style = "width: 610px; text-align: center;">
          
          <img src="media/Shovel.jpg" height="160" width="160"/>
          <img src="media/Hammer.jpg" height="160" width="160"/>
          <img src="media/Matches.jpg" height="160" width="160"/>
          <img src="media/Pin_Clover.jpg" height="160" width="160"/>
          <img src="media/Soap.jpg" height="160" width="160"/>
          <img src="media/Log.jpg" height="160" width="160"/>
        
        </div>
  
      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>