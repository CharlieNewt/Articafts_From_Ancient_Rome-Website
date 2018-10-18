//adapted from example code 'benskitchen.com'
/*
    Switch to display the helmet x3d model
*/

//X3D Model SCENES, adapted from the live site
function helmetScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function ringScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function coinScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function vaseScene(){
    nSwitch = 3;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

//ANIMATION
var spinning = false;

function spin() {
    spinning = !spinning;
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
    document.getElementById('model2__RotationTimer2').setAttribute('enabled', spinning.toString());
    document.getElementById('model3__RotationTimer3').setAttribute('enabled', spinning.toString());   
}

function stopRotation() {
    spinning = false;
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
    document.getElementById('model2__RotationTimer2').setAttribute('enabled', spinning.toString());
    document.getElementById('model3__RotationTimer3').setAttribute('enabled', spinning.toString());
    

}
/*
    This function changes the enabled value to start/stop the rotation of the helmet
*/
function animateModel() {
    if (document.getElementById('model__RotationTimer').getAttribute('enabled') != 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}
/*
    This function changes the enabled value to start/stop the rotation of the ring
*/
function animateModel2() {
    if (document.getElementById('model2__RotationTimer2').getAttribute('enabled') != 'true')
        document.getElementById('model2__RotationTimer2').setAttribute('enabled', 'true');
    else
        document.getElementById('model2__RotationTimer2').setAttribute('enabled', 'false');
}
/*
    This function changes the enabled value to start/stop the rotation of the coin
*/
function animateModel3() {
    if (document.getElementById('model3__RotationTimer3').getAttribute('enabled') != 'true')
        document.getElementById('model3__RotationTimer3').setAttribute('enabled', 'true');
    else
        document.getElementById('model3__RotationTimer3').setAttribute('enabled', 'false');
}

//LIGHTS
var omniLightIntensity = 0.1;
/*
    This function INCREASES the intensity of the omni lights
*/
function increaseOmniIntensity()
{
    if (omniLightIntensity < 0.9)
    {
        omniLightIntensity = (omniLightIntensity + 0.1);
        document.getElementById('model__Omni001').setAttribute('intensity', omniLightIntensity.toString());
        document.getElementById('model__Omni002').setAttribute('intensity',omniLightIntensity.toString());
        document.getElementById('model__Omni003').setAttribute('intensity', omniLightIntensity.toString());
        document.getElementById('model__Omni004').setAttribute('intensity',omniLightIntensity.toString());
        document.getElementById('model__Omni005').setAttribute('intensity', omniLightIntensity.toString());
        document.getElementById('model__Omni006').setAttribute('intensity', omniLightIntensity.toString());
    }
}
/*
    This function DECREASES the intensity of the omni lights
*/
function decreaseOmniIntensity()
{
    if (omniLightIntensity > 0)
    {
        omniLightIntensity = (omniLightIntensity - 0.1);
        document.getElementById('model__Omni001').setAttribute('intensity', omniLightIntensity.toString());
        document.getElementById('model__Omni002').setAttribute('intensity', omniLightIntensity.toString());
        document.getElementById('model__Omni003').setAttribute('intensity', omniLightIntensity.toString());
        document.getElementById('model__Omni004').setAttribute('intensity', omniLightIntensity.toString());
        document.getElementById('model__Omni005').setAttribute('intensity', omniLightIntensity.toString());
        document.getElementById('model__Omni006').setAttribute('intensity', omniLightIntensity.toString());
    }
}

//WIREFRAME
function wireFrame() {
    var e = document.getElementById('wire');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
    
}

//CAMERA
function cameraFront() {
    document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraSide() {
    document.getElementById('model__CameraSide').setAttribute('bind', 'true');
}

function cameraDefault() {
    document.getElementById('model__CameraDefault').setAttribute('bind', 'true');
}

function cameraBack() {
    document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

