function createXMLHttpRequest() 
{
  var resObject = null;
 
  try {

    resObject = new ActiveXObject("Mircosoft.XMLHTTP");
  }
  catch (error) 
  {

    try {
      
      resObject = new ActiveXObject("MSXML2.XMLHTTP")
    }
    catch(error) {

      try {

        resObject = new XMLHttpRequest();
				
      }
      catch (error) {

        alert("Failed to create an XMLHttpRequest Object");
      }
    }
  }
 
  return resObject;
}