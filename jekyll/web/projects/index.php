<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  
    <?php require(getenv("CHRISW_HEADER")) ?>

    <link rel = "stylesheet" type = "text/css" href = "projects.css" />
    
    <title> Projects </title>
  
  </head>
  
  <body>

    <div id = "global_mainarea">
    
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
      
      <div class = "project">
        <img src = "http://bloodtide.chrisw.org/media/BloodTideProject.jpg" />
        <div class = "title"> Blood Tide </div>
        <div class = "desc"> 
          Blood Tide is a multiplayer, online, action, real-time strategy game for the PC. 
          The game allows players to experience both the strategic management of an army in command mode and the fast-paced, 
          action-packed combat on the battlefield alongside other troops in field mode.
        </div>
        <a href = "http://bloodtide.chrisw.org" class = "link">More</a>
      </div>
      
      <div class = "project">
        <img src = "http://willow.chrisw.org/media/WillowProject.png" />
        <div class = "title"> Willow </div>
        <div class = "desc"> 
          Willow is an interactive puzzle game with a strong emphasis on story and emotional impact.
          It features a selective color shader that allows for only certain colors to be visible
          in the game world at any given time.<br><br>
        </div>
        <a href = "http://willow.chrisw.org" class = "link">More</a>
      </div>   
      
      <div class = "project">
        <img src = "http://wattbodies.chrisw.org/media/SpaceJunkyard.png" />
        <div class = "title"> Watt Bodies </div>
        <div class = "desc"> 
          Watt Bodies is a multiplayer cooperative puzzle game geared towards children.
          Each player can choose between three different characters that have unique abilities
          required to solve puzzles or assist other players.
        </div>
        <br>
        <a href = "http://wattbodies.chrisw.org" class = "link">More</a>
      </div>
      
      <div class = "project">
        <img src = "http://blindman.chrisw.org/media/ChrisPlaying.jpg" />
        <div class = "title"> Blind Man's Last Stand </div>
        <div class = "desc"> 
          Blind Man's Last Stand is a zombie survival game that takes place entirely
          on the player's hat. In this game, however, the player cannot see the zombies and 
          must rely on other senses to survive against the never-ending horde of zombies.
        </div>
        <br>
        <a href = "http://blindman.chrisw.org" class = "link">More</a>
      </div>   
      
      <div class = "project">
        <img src = "http://datacraft.chrisw.org/media/EnemyWeaponUse.jpg" />
        <div class = "title"> DataCraft </div>
        <div class = "desc"> 
         DataCraft is a database project aimed at using statistics from play-throughs to balance a shoot 'em up game. 
         It is meant to speed up the process of game-balancing, by finding problem areas that game developers can focus their efforts towards.
        </div>
        <br>
        <a href = "http://datacraft.chrisw.org" class = "link">More</a>
      </div>   
      
      <div class = "project">
        <img src = "http://chrisw.org/web/projects/glinda/media/ComputeFarm.jpg" />
        <div class = "title"> Glinda </div>
        <div class = "desc">
          Glinda is a project I implemented for a Distributed Computer Systems course.
          Glinda is a name server that can be used for finding named resources and for sychronization between distributed processes.
          Using my Glinda server, I built a compute farm that performs a distributed summation.
        </div>
        <a href = "http://chrisw.org/web/projects/glinda" class = "link">More</a>
      </div> 
      
      <div class = "project">
        <img src = "http://chrisw.org/web/projects/mailbox/media/LinuxLogo.jpg" />
        <div class = "title"> Kernel Message System </div>
        <div class = "desc"> 
          For an Operating Systems course, I modified the Linux Kernel to include an inter-process messaging system. 
          The task_struct in the Linux Kernel was modified to include a mailbox structure that holds messages for processes.
          The mailboxes are synchronized using spinlocks.
        </div>
        <a href = "http://chrisw.org/web/projects/mailbox" class = "link">More</a>
      </div> 
      
      <div class = "project">
        <img src = "http://chrisw.org/web/projects/unitedwefight/media/UWF.gif" />
        <div class = "title"> United We Fight </div>
        <div class = "desc"> 
          United We Fight is a multiplayer co-operative game. It is a Half-life 2 modification. 
          The game itself is more of an updated engine for mappers to create co-operative maps. 
          The game features improved AI for multiplayer, new weapons, class support, faction support, and more.
        </div>
        <a href = "" class = "link" onclick="return false"><strike>More</strike></a>
      </div> 
      
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>
