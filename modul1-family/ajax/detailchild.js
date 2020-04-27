/*
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
var xmlHttp = createXmlHttpRequestObject();

// Create XMLHttpRequest
function createXmlHttpRequestObject(){
    var xmlHttp;
    if(window.ActiveXObject){
        try{
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e)  {
            xmlHttp = false;
        }
    }
     // jika mozilla atau yang lain
     else {
        try{
            xmlHttp = new XMLHttpRequest();
        }catch (e){
            xmlHttp = false;
        }
    }
    if (!xmlHttp)
        alert("Error creating the XMLHttpRequest object.");
    else{
        return xmlHttp;
    }
  }

//Memanggil file *.php Secara Asingkron
function process(id){
     if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0){ 
        //id
        xmlHttp.open("GET", "ajax/php/family.details.php?id="+id, true);
        xmlHttp.onreadystatechange = handleServerResponse;
        xmlHttp.send(null);
    } else{
        //setTimeout(process(id), 1000);
    }
}
//di eksekusi otomati jika pesan diterima
function handleServerResponse() {
    ///jika rewuest complete
    if (xmlHttp.readyState == 4){
        if (xmlHttp.status == 200) {
          // extract  XML yang diterima
          var xmlResponse = xmlHttp.responseText;
          //var xmlDocumentElement = xmlResponse.documentElement;
  
          //mengambil element yang memuat hasil
          document.getElementById("ajaxcontent").innerHTML = xmlResponse;
          //setTimeout(process(idd), 1000);
        }
        else {
          alert("ERROR: " + xmlHttp.statusText);
      }
   }
}