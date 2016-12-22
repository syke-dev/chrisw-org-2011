var request = false;
var xmlDoc = false;
var xmlString = "";
var cgiURL = "query.php";

function desc(s) 
{
  descBox = document.getElementById("page_queries_desc");
  descBox.innerText = s;
  descBox.textContent = s;
}

function desc_default() 
{
  descBox = document.getElementById("page_queries_desc");
  descBox.innerText = "Select a Query from the Left";
  descBox.textContent = "Select a Query from the Left";
}

function run_sql_query(query, callback) 
{
  request = createXMLHttpRequest();
  if (request == null) {

    alert("Failed to create XML Http Request");
    return;
  }

  escape(query);

  cgiScript = cgiURL + "?query=" + query;

  request.open("GET", cgiScript, true);
  request.onreadystatechange = callback;
  request.send(null);
}

function updateFusionChart() 
{
  if (request.readyState == 4) 
  {
    xmlText = request.responseText;
   
    error_div = document.getElementById('page_fusion_chart');
    unhandled = true;

    try 
    {

      if (window.DOMParser)
      {
        parser=new DOMParser();
        xmlDoc=parser.parseFromString(xmlText,"text/xml");
      }
      else // Internet Explorer
      {
        xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
        xmlDoc.async="false";
        xmlDoc.loadXML(xmlText);
      }

    }
  
    /////////// CHECK FOR ANY PARSING ERRORS ///////////
    
    catch (error)
    {
      unhandled = false;
      error_div.innerText = "Error: " + error.message;
      return null;
    }

    // Chrome
    if (unhandled && xmlDoc.documentElement.nodeName == 'html')
    {
      error_div.innerText = "Error: Failure to parse XML from datacraft2.pl";
      return null;
    }

    // Firefox
    if (unhandled && xmlDoc.documentElement.nodeName == "parsererror")
    {
      error_div.textContent = "Error: " + xmlDoc.documentElement.childNodes[0].nodeValue;
      return null;
    }

    /////////// NOW CHECK TO SEE IF THE XML RESPONSE IS AN ERROR ///////////
    if (xmlDoc.documentElement.nodeName == "error") 
    {
      error_string = xmlDoc.documentElement.getAttributeNode('title').nodeValue + "---> ";
      error_string += xmlDoc.documentElement.childNodes[0].nodeValue;
   
      error_string = unescapeXML(error_string);

      error_div.innerText = error_string;
      error_div.textContent = error_string;

      return null;
    }

    return xmlDoc;
  }

  return null;
}

function unescapeXML(xmlString)
{
  xmlString = xmlString.replace(/&quot;/g, "\"");
  xmlString = xmlString.replace(/&apos;/g, "\'");
  xmlString = xmlString.replace(/&amp;/g, "&");
  xmlString = xmlString.replace(/&lt;/g, "<");
  xmlString = xmlString.replace(/&gt;/g, ">");
  xmlString = xmlString.replace(/\\\\/g, "\\");
  
  return xmlString;
}