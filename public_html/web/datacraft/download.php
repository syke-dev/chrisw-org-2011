<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  
    <?php require(getenv("CHRISW_HEADER")) ?>

    <link rel = "stylesheet" type = "text/css" href = "datacraft.css" />

    <title> DataCraft </title>
  
  </head>
  
  <body>

    <div id = "global_mainarea">
      
      <?php require(getenv("CHRISW_TITLE")) ?>
      <?php require(getenv("CHRISW_NAVBAR")) ?>
      
      <div id = "gamedownload_content">
      
        <h2> Installation </h2>
        
        DataCraft requires the Microsoft XNA Framework Redistributable 4.0 and the .NET Framework 4.0 Redistributable to be installed.
        <br><br>
        The XNA Framework can be downloaded here: <a href = "http://www.microsoft.com/download/en/details.aspx?id=20914">"http://www.microsoft.com/download/en/details.aspx?id=20914</a><br>
        The .NET Framework can be downloaded here: <a href = "http://msdn.microsoft.com/en-us/netframework/aa569263.aspx">http://msdn.microsoft.com/en-us/netframework/aa569263.aspx</a>
        <br><br>
        For more information on running XNA games visit <a href = "http://msdn.microsoft.com/en-us/library/bb464156.aspx">http://msdn.microsoft.com/en-us/library/bb464156.aspx</a>
        <br><br>
        <a href = "DataCraft.zip">DataCraft.zip</a>

      </div>
      
      <?php require(getenv("PROJECT_NAV")) ?>
    
    </div>
    
    <?php require(getenv("CHRISW_FOOTER")) ?>
    
  </body>

</html>