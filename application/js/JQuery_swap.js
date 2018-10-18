// JavaScript source code
// JavaScript Document
$(document).ready(function () {

    selectPage();
    selectModel();

    function selectPage() {

        $('#home').show();
        $('#about').hide();
        $('#models').hide();
        $('#interaction').hide();
        $('#helmetDescription').hide();
        $('#ringDescription').hide();
        $('#coinDescription').hide();
        $('#vaseDescription').hide();


        $('#navHome').click(function () {
            $('#home').show();
            $('#about').hide();
            $('#models').hide();
            $('#interaction').hide();
            $('#helmetDescription').hide();
            $('#ringDescription').hide();
            $('#coinDescription').hide();
            $('#vaseDescription').hide();
        });

        $('#navAbout').click(function () {
            $('#home').hide();
            $('#about').show();
            $('#models').hide();
            $('#interaction').hide();
            $('#helmetDescription').hide();
            $('#ringDescription').hide();
            $('#coinDescription').hide();
            $('#vaseDescription').hide();
        });

        $('#navModels').click(function () {
            //Navbar Directions
            $('#home').hide();
            $('#about').hide();
            $('#models').show();
            //Model intercation menu
            $('#interaction').show();
            //Model descriptions
            $('#helmetDescription').show();
            $('#ringDescription').hide();
            $('#coinDescription').hide();
            $('#vaseDescription').hide();
            //Model Titles (artifacts)
            $('#helmet_artifact').show();
            $('#ring_artifact').hide();
            $('#coin_artifact').hide();
            $('#vase_artifact').hide();
            //X3D creation description
            $('#helmet_x3dCreationMethod').show();
            $('#ring_x3dCreationMethod').hide();
            $('#coin_x3dCreationMethod').hide();
            $('#vase_x3dCreationMethod').hide();
        });
    }

    function selectModel() {

        $('#navHelmet').click(function () {
            //Navebar directions
            $('#helmet').show();
            $('#ring').hide();
            $('#coin').hide();
            $('#vase').hide();
            //Model interaction menu
            $('#interaction').show();
            //model Descriptions
            $('#helmetDescription').show();
            $('#ringDescription').hide();
            $('#coinDescription').hide();
            $('#vaseDescription').hide();
            //Model Titles (artifacts)
            $('#helmet_artifact').show();
            $('#ring_artifact').hide();
            $('#coin_artifact').hide();
            $('#vase_artifact').hide();
            //X3D Creation Descriptions
            $('#helmet_x3dCreationMethod').show();
            $('#ring_x3dCreationMethod').hide();
            $('#coin_x3dCreationMethod').hide();
            $('#vase_x3dCreationMethod').hide();
        });

        $('#navRing').click(function () {
            //Navbar Directions
            $('#helmet').hide();
            $('#ring').show();
            $('#coin').hide();
            $('#vase').hide();
            //Model interaction menu
            $('#interaction').show();
            //Model descriptions
            $('#helmetDescription').hide();
            $('#ringDescription').show();
            $('#coinDescription').hide();
            $('#vaseDescription').hide();
            //Model Titles (artifacts)
            $('#helmet_artifact').hide();
            $('#ring_artifact').show();
            $('#coin_artifact').hide();
            $('#vase_artifact').hide();
            //X3D Creation Descriptions
            $('#helmet_x3dCreationMethod').hide();
            $('#ring_x3dCreationMethod').show();
            $('#coin_x3dCreationMethod').hide();
            $('#vase_x3dCreationMethod').hide();
        });

        $('#navCoin').click(function () {
            //Navbar Directions
            $('#helmet').hide();
            $('#ring').hide();
            $('#coin').show();
            $('#vase').hide();
            //Model intercation menu
            $('#interaction').show();
            //Model descriptions
            $('#helmetDescription').hide();
            $('#ringDescription').hide();
            $('#coinDescription').show();
            $('#vaseDescription').hide();
            //Model Titles (artifacts)
            $('#helmet_artifact').hide();
            $('#ring_artifact').hide();
            $('#coin_artifact').show();
            $('#vase_artifact').hide();
            //X3D Creation Descriptions
            $('#helmet_x3dCreationMethod').hide();
            $('#ring_x3dCreationMethod').hide();
            $('#coin_x3dCreationMethod').show();
            $('#vase_x3dCreationMethod').hide();

        });

        $('#navVase').click(function () {
            //Navbar directions
            $('#helmet').hide();
            $('#ring').hide();
            $('#coin').hide();
            $('#vase').show();
            //Model intercation menu
            $('#interaction').show();
            //Model descriptions
            $('#helmetDescription').hide();
            $('#ringDescription').hide();
            $('#coinDescription').hide();
            $('#vaseDescription').show();
            //Model Titles (artifacts)
            $('#helmet_artifact').hide();
            $('#ring_artifact').hide();
            $('#coin_artifact').hide();
            $('#vase_artifact').show();
            //X3D Creation Descriptions
            $('#helmet_x3dCreationMethod').hide();
            $('#ring_x3dCreationMethod').hide();
            $('#coin_x3dCreationMethod').hide();
            $('#vase_x3dCreationMethod').show();
        });
    }

});