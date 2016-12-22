<?php

  function write_unit_info($stats, $unitstats, $abilities, $class)
  {
    # Includes (place in actual page) #
    echo "<script type='text/javascript' src='http://www.chrisw.org/web/jwplayer/jwplayer.js'></script>";
    echo "<script type='text/javascript' src='http://www.chrisw.org/web/bloodtide/units/units.js'></script>";
    echo "<script type='text/javascript' src='http://www.chrisw.org/web/shared/jquery.js'></script>";
    
    # Unit #
    
    echo "<div id = \"unit\">";
    
      # Unit Top #
      
      echo "<div id = \"unit_top\">";
    
        # Unit Left #
      
        echo "<div id = \"unit_left\">";
        echo "<span class = \"unit_name" . $class . "\">" . $stats["name"] . "</span><br><br>";
        echo "<img src = \"" . $stats["icon"] . "\" />";
        echo "</div>";
        
        # Unit Right #
      
        echo "<div id = \"unit_right\">";
          
          # Commander Stats #
          
          echo "<div id = \"unit_stats" . $class . "\">";
          
            echo "<span class = \"stats_title \">Commander Stats" . "</span><br>";
          
            echo "<div class = \"left\">";
            echo "Health:" . "<br>";
            echo "Strength:" . "<br>";
            echo "Armor:" . "<br>";
            echo "Move Speed:" . "<br>";
            echo "Faction:" . "<br>";
            echo "</div>";
            
            echo "<div class = \"right\">";
            echo $stats["hp"] . "<br>";
            echo $stats["str"] . "<br>";
            echo $stats["arm"] . "<br>";
            echo $stats["move"] . "<br>";
            echo $stats["fac"] . "<br>";
            echo "</div>";
          
          echo "</div>";
          
          # Unit Stats #
          
          echo "<div id = \"unit_stats" . $class . "\">";
          
            echo "<span class = \"" . "stats_title" . "\">Unit Stats" . "</span><br>";
          
            echo "<div class = \"left\">";
            echo "Health:" . "<br>";
            echo "Strength:" . "<br>";
            echo "Armor:" . "<br>";
            echo "Move Speed:" . "<br>";
            echo "Attack Range:" . "<br>";
            echo "</div>";
            
            echo "<div class = \"right\">";
            echo $unitstats["hp"] . "<br>";
            echo $unitstats["str"] . "<br>";
            echo $unitstats["arm"] . "<br>";
            echo $unitstats["move"] . "<br>";
            echo $unitstats["rng"] . "<br>";
            echo "</div>";
          
          echo "</div><br>";
        
          # Commander Ability Videos #
          
          echo "<div id = \"unit_video\">";
          
            echo "<div id='jwplayer'></div>";
            
            $ability = $abilities[1];
            
            echo "<script type='text/javascript'>
                  jwplayer('jwplayer').setup({
                    'flashplayer': 'http://www.chrisw.org/web/jwplayer/player.swf',
                    'file': '" . $ability["url"] ."',
                    'image': '" . $ability["img"] ."',
                    'controlbar': 'none',
                    'dock': 'false',
                    'width': '480',
                    'height': '270'
                  }); 
                  </script>"; 
                  
          echo "</div>";   
          
          echo "<div id = \"unit_buttons\">";

            for ($i = 1; $i <= 3; $i++) 
            {     
              $ability = $abilities[$i];
              
              echo "<img id = \"ability" . $i . "\" src = \"" . $ability["icon"] . "\"";
              echo "onclick = \"changevideo('#ability" . $i . "','" . $ability["url"] . "','" . $ability["img"] . "');\"" . "/>";
              echo "<br>";
            }  
            
            $ability = $abilities[1];

            echo "<script type='text/javascript'>
                    updateicon('#ability1','" . $ability["url"] . "','" . $ability["img"] . "');
                  </script>";

          echo "</div>";
            
        # /Unit Right #
          
        echo "</div>";
        
      # Unit Top #
      
      echo "</div>";
      
      # Unit Abilities #
        
      echo "<div id = \"unit_abilities\">";
      
      echo "<span id = \"title" . $class . "\">Abilities" . "</span><br><hr>";
   
      for ($i = 1; $i <= 3; $i++) 
      {     
        $ability = $abilities[$i];
        
        echo "<div class = \"ability\">";
        echo "<img src = \"" . $ability["icon"] . "\"/>";
        echo "<div class = \"ability_desc\">";
        echo "<span class = \"name" . $class . "\">" . $ability["name"] . "</span> - " . $ability["desc"] . "<br>" . "<br>";
        echo "<div class = \"left\">cooldown:<br>range:</div>"; 
        echo "<div class = \"left\">" . $ability["cool"] . "<br>". $ability["rng"] . "</div>"; 
        echo "<div class = \"break\"></div>";
        echo "</div>";
        echo "</div>";
      }
      
      
      
      echo "</div>";

    # /Unit #
    
    echo "</div><br>"; 
  }

  function display_bombship()
  {
    $URL = "http://bloodtide.chrisw.org/units/bombship/";
  
    $stats = array("name" => "Bombship",
                   "icon" => $URL . "Bombship.png",
                   "hp" => "280",
                   "str" => "35",
                   "arm" => "30",
                   "move" => "6",
                   "fac" => "Humans"
                   );
                   
    $unitstats = array("hp" => "125", "str" => "25", "arm" => "15", "move" => "3.5", "rng" => "10.0");
                   
    $ability1 = array("name" => "Cannon",
                      "icon" => $URL . "CannonIcon.png",
                      "desc" => "Fires an explosive cannon ball that deals 60 damage upon impact.",
                      "url" => $URL . "Cannon.mp4",
                      "img" => $URL . "CannonPreview.png",
                      "cool" => "4 seconds",
                      "rng" => "20 meters"
                      );
                      
    $ability2 = array("name" => "Depth Charge",
                      "icon" => $URL . "DepthChargeIcon.png",
                      "desc" => "Plants a bomb that will explode and stun enemies after 2 seconds. The explosion deals 50 damage to all units within 10 meters, leaving them stunned for 2 seconds.",
                      "url" => $URL . "DepthCharge.mp4",
                      "img" => $URL . "DepthChargePreview.png",
                      "cool" => "15 seconds",
                      "rng" => "10 meters"
                      );
                      
    $ability3 = array("name" => "Recovery Units",
                      "icon" => $URL . "RecoveryUnitsIcon.png",
                      "desc" => "An AOE heal that heals all allies within 10 meters of the bombship for 40 hit points. Affected units also receive a strength buff of 10 points that lasts for 7 seconds.",
                      "url" => $URL . "RecoveryUnits.mp4",
                      "img" => $URL . "RecoveryUnitsPreview.png",
                      "cool" => "12 seconds",
                      "rng" => "10 meters"
                      );
                 
    $abilities = array("1" => $ability1, "2" => $ability2, "3" => $ability3);
                   
    write_unit_info($stats, $unitstats, $abilities, "_humans");
  }
  
  function display_scubatroop()
  {
    $URL = "http://bloodtide.chrisw.org/units/scubatroop/";
    
    $stats = array("name" => "Scuba Troop",
                   "icon" => $URL . "ScubaTroop.png",
                   "hp" => "320",
                   "str" => "30",
                   "arm" => "25",
                   "move" => "6.75",
                   "fac" => "Humans"
                   );
                   
    $unitstats = array("hp" => "100", "str" => "35", "arm" => "30", "move" => "4.25", "rng" => "2.0 (melee)");
                   
    $ability1 = array("name" => "Hand Blade",
                      "icon" => $URL . "HandBladeIcon.png",
                      "desc" => "Basic attack with spinning propeller blade that deals 60 damage.",
                      "url" => $URL . "HandBlade.mp4",
                      "img" => $URL . "HandBladePreview.png",
                      "cool" => "3 seconds",
                      "rng" => "Melee"
                      );
                      
    $ability2 = array("name" => "Toxic Dagger",
                      "icon" => $URL . "ToxicDaggerIcon.png",
                      "desc" => "Fires a hand blade that poisons the enemy for 10 seconds, dealing 50 damage total.",
                      "url" => $URL . "ToxicDagger.mp4",
                      "img" => $URL . "ToxicDaggerPreview.png",
                      "cool" => "5 seconds",
                      "rng" => "20 meters"
                      );
                      
    $ability3 = array("name" => "Blade Counter",
                      "icon" => $URL . "BladeCounterIcon.png",
                      "desc" => "Returns 50% of the damage inflicted on the scuba troop back to the attacker.",
                      "url" => $URL . "BladeCounter.mp4",
                      "img" => $URL . "BladeCounterPreview.png",
                      "cool" => "12 seconds",
                      "rng" => "N/A"
                      );
                 
    $abilities = array("1" => $ability1, "2" => $ability2, "3" => $ability3);
                   
    write_unit_info($stats, $unitstats, $abilities, "_humans");
  }
  
  function display_submarine()
  {
    $URL = "http://bloodtide.chrisw.org/units/submarine/";
    
    $stats = array("name" => "Submarine",
                   "icon" => $URL . "Submarine.png",
                   "hp" => "300",
                   "str" => "30",
                   "arm" => "35",
                   "move" => "7.25",
                   "fac" => "Humans"
                   );
                   
    $unitstats = array("hp" => "75", "str" => "15", "arm" => "25", "move" => "4.75", "rng" => "15.0");
                   
    $ability1 = array("name" => "Torpedo",
                      "icon" => $URL . "TorpedoIcon.png",
                      "desc" => "Fires a torpedo that deals 50 damage upon impact.",
                      "url" => $URL . "Torpedo.mp4",
                      "img" => $URL . "TorpedoPreview.png",
                      "cool" => "5 seconds",
                      "rng" => "20 meters"
                      );
                      
    $ability2 = array("name" => "Stealth",
                      "icon" => $URL . "StealthIcon.png",
                      "desc" => "Turns the submarine invisible to all enemy units for 10 seconds.",
                      "url" => $URL . "Stealth.mp4",
                      "img" => $URL . "StealthPreview.png",
                      "cool" => "20 seconds",
                      "rng" => "N/A"
                      );
                      
    $ability3 = array("name" => "Barrage",
                      "icon" => $URL . "BarrageIcon.png",
                      "desc" => "Fires 10 torpedos in a 50 degree arc in front of the submarine that each deal 10 damage upon impact.",
                      "url" => $URL . "Barrage.mp4",
                      "img" => $URL . "BarragePreview.png",
                      "cool" => "10 seconds",
                      "rng" => "20 meters"
                      );
                 
    $abilities = array("1" => $ability1, "2" => $ability2, "3" => $ability3);
                   
    write_unit_info($stats, $unitstats, $abilities, "_humans");
  }
  
  function display_mantaray()
  {
    $URL = "http://bloodtide.chrisw.org/units/mantaray/";
    
    $stats = array("name" => "Manta Ray",
                   "icon" => $URL . "MantaRay.png",
                   "hp" => "300",
                   "str" => "30",
                   "arm" => "30",
                   "move" => "7.75",
                   "fac" => "Piscivians"
                   );
                   
    $unitstats = array("hp" => "75", "str" => "15", "arm" => "15", "move" => "5.25", "rng" => "3.0 (melee)");
                   
    $ability1 = array("name" => "Tail Whip",
                      "icon" => $URL . "TailWhipIcon.png",
                      "desc" => "The manta will spin around whipping a unit with its tail.",
                      "url" => $URL . "TailWhip.mp4",
                      "img" => $URL . "TailWhipPreview.png",
                      "cool" => "1 second",
                      "rng" => "Melee"
                      );
                      
    $ability2 = array("name" => "Riptide",
                      "icon" => $URL . "RiptideIcon.png",
                      "desc" => "Hides from enemy site for a limited time and increases speed of nearby allies.",
                      "url" => $URL . "Riptide.mp4",
                      "img" => $URL . "RiptidePreview.png",
                      "cool" => "10 seconds",
                      "rng" => "10 meters"
                      );
                      
    $ability3 = array("name" => "Whirlpool",
                      "icon" => $URL . "WhirlpoolIcon.jpeg",
                      "desc" => "Creates an underwater tornado that damages surrounding enemies.",
                      "url" => $URL . "Whirlpool.mp4",
                      "img" => $URL . "WhirlpoolPreview.png",
                      "cool" => "5 seconds",
                      "rng" => "Melee"
                      );
                 
    $abilities = array("1" => $ability1, "2" => $ability2, "3" => $ability3);
                   
    write_unit_info($stats, $unitstats, $abilities, "_piscivians");
  }
  
  function display_merman()
  {
    $URL = "http://bloodtide.chrisw.org/units/merman/";
    
    $stats = array("name" => "Merman",
                   "icon" => $URL . "Merman.png",
                   "hp" => "320",
                   "str" => "25",
                   "arm" => "30",
                   "move" => "6.75",
                   "fac" => "Piscivians"
                   );
                   
    $unitstats = array("hp" => "100", "str" => "25", "arm" => "35", "move" => "4.25", "rng" => "2.0 (melee)");
                   
    $ability1 = array("name" => "Trident",
                      "icon" => $URL . "TridentIcon.jpeg",
                      "desc" => "Basic melee attack with trident.",
                      "url" => $URL . "Trident.mp4",
                      "img" => $URL . "TridentPreview.png",
                      "cool" => "4 seconds",
                      "rng" => "Melee"
                      );
                      
    $ability2 = array("name" => "Laser Trident",
                      "icon" => $URL . "LaserTridentIcon.jpeg",
                      "desc" => "A magic beam of light fires from trident and stuns enemies.",
                      "url" => $URL . "LaserTrident.mp4",
                      "img" => $URL . "LaserTridentPreview.png",
                      "cool" => "2 seconds",
                      "rng" => "30 meters"
                      );
                      
    $ability3 = array("name" => "Serenade",
                      "icon" => $URL . "SerenadeIcon.jpeg",
                      "desc" => "An AOE tribal song that gives large healing bonuses.",
                      "url" => $URL . "Serenade.mp4",
                      "img" => $URL . "SerenadePreview.png",
                      "cool" => "10 seconds",
                      "rng" => "10 meters"
                      );
                 
    $abilities = array("1" => $ability1, "2" => $ability2, "3" => $ability3);
                   
    write_unit_info($stats, $unitstats, $abilities, "_piscivians");
  }

  function display_turtle()
  {
    $URL = "http://bloodtide.chrisw.org/units/turtle/";
    
    $stats = array("name" => "Turtle",
                   "icon" => $URL . "Turtle.png",
                   "hp" => "350",
                   "str" => "15",
                   "arm" => "40",
                   "move" => "6.5",
                   "fac" => "Piscivians"
                   );
                   
    $unitstats = array("hp" => "115", "str" => "15", "arm" => "30", "move" => "4.0", "rng" => "18.0");
                   
    $ability1 = array("name" => "Wave Cannon",
                      "icon" => $URL . "WaveCannonIcon.jpeg",
                      "desc" => "Fires a wave with a long cool-down.",
                      "url" => $URL . "WaveCannon.mp4",
                      "img" => $URL . "WaveCannonPreview.png",
                      "cool" => "3 seconds",
                      "rng" => "30 meters"
                      );
                      
    $ability2 = array("name" => "Shell Barrier",
                      "icon" => $URL . "ShellBarrierIcon.jpeg",
                      "desc" => "Nullifies all damage done to the turtle for a short period of time.",
                      "url" => $URL . "ShellBarrier.mp4",
                      "img" => $URL . "ShellBarrierPreview.png",
                      "cool" => "10 seconds",
                      "rng" => "N/A"
                      );
                      
    $ability3 = array("name" => "Bite",
                      "icon" => $URL . "BiteIcon.jpeg",
                      "desc" => "A fast, strong bite attack that pierces through enemy defense.",
                      "url" => $URL . "Bite.mp4",
                      "img" => $URL . "BitePreview.png",
                      "cool" => "10 seconds",
                      "rng" => "Melee"
                      );
                 
    $abilities = array("1" => $ability1, "2" => $ability2, "3" => $ability3);
                   
    write_unit_info($stats, $unitstats, $abilities, "_piscivians");
  }
?>