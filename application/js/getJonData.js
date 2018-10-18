//JavaScript Doc
$(document).ready(function(){

    //AJAX service to get the main text data from the json data store
    $.getJSON("../assignment/index.php/apigetdata", function(jsonObj) {
        console.log(jsonObj);
        //Get the home page main text date
        //Model data
        $('#home_artifact').html("<h2>" + jsonObj[0]['artifact'] + "<h2>")
        $('#home_x3dModelTitle').html("<h3>" + jsonObj[0]['x3dModelTitle'] + "<h3>");
        $('#home_x3dCreationMethod').html("<p>" + jsonObj[0]['x3dCreationMethod'] + "<p>");
        //Artifact data
        $('#home_modelTitle').html("<h2>" + jsonObj[0]['modelTitle'] + "<h2>")
        $('#home_modelSubtitle').html("<h3>" + jsonObj[0]['modelSubtitle'] + "<h3>");
        $('#home_modelDescription').html("<p>" + jsonObj[0]['modelDescription'] + "<p>");

        //Get the homepage left column data
        //Model data
        $('#left_artifact').html("<h2>" + jsonObj[1]['artifact'] + "<h2>")
        $('#left_x3dModelTitle').html("<h3>" + jsonObj[1]['x3dModelTitle'] + "<h3>");
        $('#left_x3dCreationMethod').html("<p>" + jsonObj[1]['x3dCreationMethod'] + "<p>");
        //Artifact data
        $('#left_modelTitle').html("<h2>" + jsonObj[1]['modelTitle'] + "<h2>")
        $('#left_modelSubtitle').html("<h3>" + jsonObj[1]['modelSubtitle'] + "<h3>");
        $('#left_modelDescription').html("<p>" + jsonObj[1]['modelDescription'] + "<p>");

        //Get the homepage centre column data
        //Model data
        $('#centre_artifact').html("<h2>" + jsonObj[2]['artifact'] + "<h2>")
        $('#centre_x3dModelTitle').html("<h3>" + jsonObj[2]['x3dModelTitle'] + "<h3>");
        $('#centre_x3dCreationMethod').html("<p>" + jsonObj[2]['x3dCreationMethod'] + "<p>");
        //Artifact data
        $('#centre_modelTitle').html("<h2>" + jsonObj[2]['modelTitle'] + "<h2>")
        $('#centre_modelSubtitle').html("<h3>" + jsonObj[2]['modelSubtitle'] + "<h3>");
        $('#centre_modelDescription').html("<p>" + jsonObj[2]['modelDescription'] + "<p>");

        //Get the homepage right column data
        //Model data
        $('#right_artifact').html("<h2>" + jsonObj[3]['artifact'] + "<h2>")
        $('#right_x3dModelTitle').html("<h3>" + jsonObj[3]['x3dModelTitle'] + "<h3>");
        $('#right_x3dCreationMethod').html("<p>" + jsonObj[3]['x3dCreationMethod'] + "<p>");
        //Artifact data
        $('#right_modelTitle').html("<h2>" + jsonObj[3]['modelTitle'] + "<h2>")
        $('#right_modelSubtitle').html("<h3>" + jsonObj[3]['modelSubtitle'] + "<h3>");
        $('#right_modelDescription').html("<p>" + jsonObj[3]['modelDescription'] + "<p>");

        //HELMET
        //Model data
        $('#helmet_artifact').html("<h2>" + jsonObj[4]['artifact'] + "<h2>")
        $('#helmet_x3dModelTitle').html("<h3>" + jsonObj[4]['x3dModelTitle'] + "<h3>");
        $('#helmet_x3dCreationMethod').html("<p>" + jsonObj[4]['x3dCreationMethod'] + "<p>");
        //Artifact data
        $('#helmet_modelTitle').html("<h2>" + jsonObj[4]['modelTitle'] + "<h2>")
        $('#helmet_modelSubtitle').html("<h3>" + jsonObj[4]['modelSubtitle'] + "<h3>");
        $('#helmet_modelDescription').html("<p>" + jsonObj[4]['modelDescription'] + "<p>");

        //Ring
        //Model data
        $('#ring_artifact').html("<h2>" + jsonObj[5]['artifact'] + "<h2>")
        $('#ring_x3dModelTitle').html("<h3>" + jsonObj[5]['x3dModelTitle'] + "<h3>");
        $('#ring_x3dCreationMethod').html("<p>" + jsonObj[5]['x3dCreationMethod'] + "<p>");
        //Artifact data
        $('#ring_modelTitle').html("<h2>" + jsonObj[5]['modelTitle'] + "<h2>")
        $('#ring_modelSubtitle').html("<h3>" + jsonObj[5]['modelSubtitle'] + "<h3>");
        $('#ring_modelDescription').html("<p>" + jsonObj[5]['modelDescription'] + "<p>");

        //Coin
        //Model data
        $('#coin_artifact').html("<h2>" + jsonObj[6]['artifact'] + "<h2>")
        $('#coin_x3dModelTitle').html("<h3>" + jsonObj[6]['x3dModelTitle'] + "<h3>");
        $('#coin_x3dCreationMethod').html("<p>" + jsonObj[6]['x3dCreationMethod'] + "<p>");
        //Artifact data
        $('#coin_modelTitle').html("<h2>" + jsonObj[6]['modelTitle'] + "<h2>")
        $('#coin_modelSubtitle').html("<h3>" + jsonObj[6]['modelSubtitle'] + "<h3>");
        $('#coin_modelDescription').html("<p>" + jsonObj[6]['modelDescription'] + "<p>");

        //Vase
        //Model data
        $('#vase_artifact').html("<h2>" + jsonObj[7]['artifact'] + "<h2>")
        $('#vase_x3dModelTitle').html("<h3>" + jsonObj[7]['x3dModelTitle'] + "<h3>");
        $('#vase_x3dCreationMethod').html("<p>" + jsonObj[7]['x3dCreationMethod'] + "<p>");
        //Artifact data
        $('#vase_modelTitle').html("<h2>" + jsonObj[7]['modelTitle'] + "<h2>")
        $('#vase_modelSubtitle').html("<h3>" + jsonObj[7]['modelSubtitle'] + "<h3>");
        $('#vase_modelDescription').html("<p>" + jsonObj[7]['modelDescription'] + "<p>");
        
    });

});