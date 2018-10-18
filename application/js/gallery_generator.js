//JavaSript file

//=======Browser Compatibility=========
function getXMLHttp() {
    var xmlHttp
    try {
        xmlHttp = new XMLHttpRequest ();
    } catch (e) {
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                xmlHttp = newActiveXObject("Microsoft.XMLHTTP");
            }catch (e) {
                return false;
            }                            
        }
    }
    return xmlHttp;
}
//=======Browser Compatibility=========

//obj communicatiing with server
var xmlHttp = getXMLHttp();
//Stores number of horizontalColumns gallery has, if too large it wont fit in browser window
//var numberOfColumns = 1;
//stores newly generated gallery HTML code
var htmlCode = "";
//temporarily stores server response while code is generated
var response;

$(document).ready(function()    {
   // set up the path to the PHP function that reads the image directoryto find the file names
   var send = "../assignment/application/view/hook.php";
   // Open the connection to the web server
   xmlHttp.open("GET", send, true);
   // Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
   xmlHttp.send(null);
   // Check we get a valid sever
    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4) {
            //response handler code
            alert(xmlHttp.responseText);
            // Tokenise the response
            response = xmlHttp.responseText.split("~");
            // Start to write the HTML code into the htmlCode string
            htmlCode += '<tr>';
            // Loop round the response array of tkens, which are the image names ...
            for (var i = 0; i < response.length; i++) {
                //and continue to build the HTML code for the gallery              
                htmlCode += '<a href="' + response[i] +' " data-fancybox data-caption="My 3D model Render" data-fancybox data-animation-effect="false">';
                htmlCode += '<img class="card-img-top img-thumbnail" src="' + response[i] + '"/>';
                htmlCode += '</a>';
            }
            // Return the HTML string to each of the 4 3D App pages
            document.getElementById('gallery').innerHTML = htmlCode;
            
        }
    }
});

