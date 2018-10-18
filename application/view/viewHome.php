<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
        crossorigin="anonymous" />
    <!-- Custom bootsrap override -->
    <link rel="stylesheet" href="../assignment/css/custom2.css" />
    <!-- Fonts script -->
    <script src="../assignment/js/fontawesome-all.min.js"></script>
    <!-- Fonts links -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Gallery -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../assignment/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../assignment/application/js/gallery_generator.js"></script>
    
    <!-- FANCYBOX CSS -->
    <link rel="stylesheet" href="../assignment/application/css/jquery.fancybox.min.css" type="text/css" media="screen" />

    <!-- X3D link -->
    <link rel="stylesheet" type="text/css" href="../assignment/css/x3dom.css" />
    <script type="text/javascript" src="http://www.x3dom.org/x3dom/release/x3dom.js"></script>

    <title>Ancient Rome</title>



</head>

<body>


    <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <!-- Brand -->
        <div class="logo">
            <a class="navbar-brand" href="#">
                <h1>ARTIFACTS </h1> 
                <h2> FROM </h2> 
                <h9> ANCIENT  ROME</h9> <br> <br>
                <p>A colection of artifacts from the Roman Empire</p>
            </a>
        </div>


        <!-- Navbar Menu Icon -->
        <button type="button" class="navbar-toggler bg-dark navbar-dark" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Link Menu Icon button to the links class navbar-collapse selector -->
        <div class="collapse navbar-collapse">
            <!-- Navbar Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a id="navAbout" class="nav-link" href="#">About</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item">
                    <a id="navModels" class="nav-link" href="#">Artifacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding
            cards in a row for the 3 images and associated texts -->
    <!-- This is the home page contents -->
    <div class="main_contents" id="home">


        <!-- A row for the main 3d image theme - could make this a jumbotron with a carousel -->
        <div class="row">
            ...
        </div>
        <div class="carousel-container">
            <div class="container">
                <div class="homeCarousel">
                    <div class="col-sm-12">

                        <div class="card .home-carousel">

                            <div class="card-body">
                                <div class="homeCarousel_inner">
                                    <!-- =================Carousel Test================= -->
                                    <!-- https://v4-alpha.getbootstrap.com/components/carousel/ -->
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">

                                            <div class="home_carousel_items">
                                                <div class="carousel-item active">
                                                    <img src="../assignment/application/assets/images/carousel_images/forum.jpeg" alt="First image">
                                                    <div class="carousel-caption">
                                                        <h1>Welcome</h1>
                                                        <p>The artifacts from ancient Rome museum is designed to give you some insight into life in the Roman Empire </p>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="../assignment/application/assets/images/carousel_images/amphitheater-leptis-magna-P.jpeg" alt="Second image">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="../assignment/application/assets/images/carousel_images/via-de-mercurio-P.jpeg" alt="Third image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#myCarousel" data-slide="pre" role="button">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" data-slide="next" , role="button">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid"> -->
            <div class="home-buttons">

                <nav class="navbar navbar-expand-sm navbar_home_buttons">
                    
                    <div class="collapse navbar-buttons-collapse">
                        
                    </div>


                </nav>
            </div>
        <!-- </div> -->
        <!-- =================Carousel Test================= -->
        <!-- A row to hold three cards for the coke, sprite and pepper contents -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <a href="#" data-fancybox data-caption="My 3D Helmet Render" class="thumbnail">
                        <img class="card-img-top img-fluid img-thumbnail" src="../assignment/application/assets/images/roman_army.jpg" alt="Army">
                    </a>
                    <div class="card-body">
                        <div id="left_artifact" class="card-title homeText"></div>
                        <div id="left_x3dModelTitle" class="card-subtitle homeText"></div>
                        <div id="left_x3dCreationMethod" class="card-text homeText"></div>
                        <a href="https://www.historyonthenet.com/the-romans-the-roman-army/" class="btn btn-primary">Find out More...</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <a href="#" data-fancybox data-caption="My 3D Ring Render" class="thumbnail">
                        <img class="card-img-top img-fluid img-thumbnail" src="../assignment/application/assets/images/roman_posh.jpg" alt="Elite">
                    </a>
                    <div class="card-body">
                        <div id="centre_artifact" class="card-title homeText"></div>
                        <div id="centre_x3dmodelTitle" class="card-subtitle homeText"></div>
                        <div id="centre_x3dCreationMethod" class="card-text homeText"></div>
                        <a href="https://en.wikipedia.org/wiki/Social_class_in_ancient_Rome" class="btn btn-primary">Find out More...</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <a href="#" data-fancybox data-caption="My 3D Coin Render" class="thumbnail">
                        <img class="card-img-top img-fluid img-thumbnail" src="../assignment/application/assets/images/roman_currency.jpg" alt="Currency">
                    </a>
                    <div class="card-body">
                        <div id="right_artifact" class="card-title homeText"></div>
                        <div id="right_x3dModelTitle" class="card-subtitle homeText"></div>
                        <div id="right_x3dCreationMethod" class="card-text homeText"> </div>
                        <a href="http://www.britishmuseum.org/explore/themes/money/the_origins_of_coinage.aspx" class="btn btn-primary">Find out More...</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- End of home page contents -->
    <!--Start of About section-->
    <div id="about" class="main_contents" style="display:none;">
        insert about contents
    </div>
    <!--End of About section-->
    <!--This is the context for X3D models and 3D image gallery-->
    <div id="models" class="main_contents" style="display:none;">
        <!--Row to hold two cards, 1) the x3d model, and 2) the gallery-->
        <div class="row">
            <!--X3D model-->
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">

                    
                       <ul class="nav nav-tabs card-header-tabs pull-right">
                            <li class="nav-item">
                                <a id="navHelmet" class="btn btn-success btn-responsive" onclick="helmetScene();">Helmet</a>
                            </li>
                            <li class="nav-item">
                                <a id="navRing" class="btn btn-success btn-responsive" onclick="ringScene();">Ring</a>
                            </li>
                            <li class="nav-item">
                                <a id="navCoin" class="btn btn-success btn-responsive" onclick="coinScene();">Coin</a>
                            </li>
                            <li class="nav-item">
                                <a id="navVase" class="btn btn-success btn-responsive" onclick="vaseScene();">Vase</a>
                            </li>
                        </ul> 
                    </div>
                    <div class="card-body">
                        <!--Helmet 3D model-->
                        <div id="model3D">
                            <!-- <div id="title_helm_model" class="card-title helmText">Roman Warrior Helmet</div> -->
                            <div id="helmet_artifact" class="card-title"></div>
                            <div id="ring_artifact" class="card-title homeText"></div>
                            <div id="coin_artifact" class="card-title homeText"></div>
                            <div id="vase_artifact" class="card-title homeText"></div>
                            <!--Place the X3D code here-->
                            <!-- <div class="model3D"> -->
                                <x3d id="wire">
                                    <scene>
                                        <Switch whichChoice="0" id="SceneSwitch">
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFtoID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/helmet.x3d"></inline>   
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model2" mapDEFtoID="true" onclick="animateModel2();" url="../assignment/application/assets/x3d/ring.x3d"></inline>   
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model3" mapDEFtoID="true" onclick="animateModel3();" url="../assignment/application/assets/x3d/coin.x3d"></inline>   
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model4" mapDEFtoID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/vase.x3d"></inline>   
                                            </transform>
                                        </Switch>                                                                                                                                 
                                    </scene>
                                </x3d>
                            </div>
                            <!-- ADAPTED FROM https://www.w3schools.com/bootstrap4/bootstrap_collapse.asp -->
                            <button type="button" class="btn btn-2-g" data-toggle="collapse" data-target="#collapse">X3D Model Creation Method</button>
                            <div id="collapse" class="collapse">
                                <div id="helmet_x3dCreationMethod" class="card-text homeText"></div>  
                                <div id="ring_x3dCreationMethod" class="card-text homeText"></div>  
                                <div id="coin_x3dCreationMethod" class="card-text homeText"></div>  
                                <div id="vase_x3dCreationMethod" class="card-text homeText"></div>  
                            </div>    
                                         
                        <!-- </div> -->
                        
                    </div>
                </div>
            </div>

            <!--3D image gallery-->
            <div class="col-sm-4">
                <div class="card gallery-card">
                <div class="card-body">
                        <h5 class="card-title">3D Gallery</h5>
                        <div class="gallery" id="gallery"></div>
                        <p class="card-text">3D images rendered in 3DS Max 2017</p>
                    </div>
                </div>
            </div>
            <!--End gallery column-->
        </div>
        <!--End row for the X3D model and gallery-->
    </div>

    <!--Row to hold the interaction panels-->
    <div id="interaction" class="row" style="display:none;">
        
        <div class="card">
            <div class="card-header gcamera-header">
                X3D model Viewports
            </div>
            <div class="gcamera-buttons">
                <div class="btn-group">

                    <a href="#" class="btn btn-2-g" onclick="cameraFront();">Front</a>
                    <a href="#" class="btn btn-2-g" onclick="cameraBack();">Back</a>
                    <a href="#" class="btn btn-2-g" onclick="cameraSide();">Side</a>
                    <a href="#" class="btn btn-2-g" onclick="spin();">Spin</a>
                    <a href="#" class="btn btn-2-g" onclick="stopRotation();">Off</a>
                    <a href="#" class="btn btn-2-g" onclick="wireFrame();" >Wire</a>
                    <a href="#" class="btn btn-2-g" onclick="increaseOmniIntensity();" >Omni+</a>
                    <a href="#" class="btn btn-2-g" onclick="decreaseOmniIntensity();" >Omni-</a>
                    
                </div>
            </div>
        </div>
    </div>
    <!--End of interactions panel row-->
    <!--Row to hold one card to hold the helmet descriptive text, etc-->
    <div id="helmetDescription" class="row" style="display:none;">
        <div class="col-sm-8">
            <div class="card">
                <div id="helmet_modelDescription" class2"card-text"></div>                              
            </div>
        </div>
    </div>
    <div id="ringDescription" class="row" style="display:none;">
        <div class="col-sm-8">
            <div class="card">
                <div id="ring_modelDescription" class2"card-text"></div>                              
            </div>
        </div>
    </div>
    <div id="coinDescription" class="row" style="display:none;">
        <div class="col-sm-8">
            <div class="card">
                <div id="coin_modelDescription" class2"card-text"></div>                              
            </div>
        </div>
    </div>
    <div id="vaseDescription" class="row" style="display:none;">
        <div class="col-sm-8">
            <div class="card">
                <div id="vase_modelDescription" class2"card-text"></div>                              
            </div>
        </div>
    </div>
    <!-- End 3D APP SPA contents -->



    <div class="navbar navbar-expand-sm footer">
        <div class="container-fluid">
            <div class="navbar-text float-left copyright">
                <p>
                    <span class="align-baseline"></span> &copy 2018 Mobile Web 3D Applications
                </p>
            </div>
            <a href="../application/downloads/vrml.zip">VRML</a>
            <a href="../application/downloads/Code_Document.pdf">CODE DOCUMENT</a>
            <a href="../application/downloads/CodeBase.zip">CODEBASE</a>
            <div class="navbar-text float-right">
                <a href="#">
                    <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="#">
                    <i class="fab fa-google-plus fa-2x"></i>
                </a>
                <a href="#">
                    <i class="fab fa-github-square fa-2x"></i>
                </a>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="../assignment/js/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
            crossorigin="anonymous"></script>
    <!-- JQUERY 3.3.1 FROM JS FOLDER -->
    <script src="../assignment/js/jquery-3.2.1.js"></script>
    <!-- Text Json -->
    <script src="../assignment/application/js/getJonData.js"></script>
    <!-- Swap script -->
    <script src="../assignment/application/js/JQuery_swap.js"></script>
    <!--model button scripts-->
    <script src="../assignment/application/js/model_Interaction.js"></script>
    <!-- FANCYBOX SCRIPT -->
    <script src="../assignment/application/js/jquery.fancybox.min.js"></script>

</body>

</html>