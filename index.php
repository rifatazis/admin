<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="public/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="public/fonts/material-icons/material-icons.css">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/propeller.min.css">


    <title>Brand</title>
</head>

<body>
    <!--  Header starts -->
    <!-- Navbar starts -->
    <nav class="navbar navbar-default navbar-fixed-top pmd-navbar pmd-z-depth">
        <div class="container-fluid">
            <div class="navbar-header">

                <button class="pmd-ripple-effect navbar-toggle pmd-navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" style="padding-left:0px;">
                        <img class="navbar-img" src="public/images/favicon.png" style="height:48px;">
                    </a>
                    <a href="index.php" class="navbar-brand" style="color:#FF4B00;">Brand</a>
                </div>


            </div>
            <div class="collapse navbar-collapse pmd-navbar-sidebar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a class="pmd-ripple-effect" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="pmd-ripple-effect" href="tutorial.php">Tutorial</a>
                    </li>
                    <li>
                        <a class="pmd-ripple-effect" href="references.php">References</a>
                    </li>
                    <li>
                        <a class="pmd-ripple-effect" href="examples.php">Examples</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li style="margin-right:10px;">
                        <button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-sm btn-default"
                            onclick="javascript:window.open('search.php','_self')" title="Search">
                            <i class="material-icons md-dark pmd-sm" style="vertical-align:text-bottom;">search</i>
                        </button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar ends-->

    <!-- Header ends -->
    <!-- Content area starts -->
    div id="main-carousel" class="carousel slide" data- ride="carousel" style="margin-top:65px;">
    <div class="carousel-inner">
        <div class="item active" style="left: 0px;">
            <div
                style="background-image:url(public/images/banner.jpg); height:370px; background-size:cover; background-position: 20% 55%; background-repeat:no-repeat;">
            </div>
            <div class="carousel-caption"></div>
        </div>
    </div>
    <div class="pmd-content" style="padding-bottom:74px;">
        <div class="container-fluid">
            <h1 class="section-title">
                <span>Home</span>
            </h1>

            <ol class="breadcrumb text-left">
                <li><a href="index.php">Home</a></li>
                <li class="active">About</li>
            </ol>

            <p class="lead">Propeller is a front-end responsive
                framework based on Google's Material Design
                Standards & Bootstrap. 25 Components Available.</p>

            <div class="row">
                <!-- card 1 -->
                <div class="col-lg-4 col-md-4">

                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-title">
                            <h2 class="pmd-card-title-text typo-fill-secondary propeller-title">Card 1</h2>
                        </div>
                        <div class="pmd-card-media">
                            <img src="public/images/profile-pic.png" class="img-responsive">
                        </div>
                        <div class="pmd-card-body">
                            <p>A card is a flexible and extensible content container. It includes options for header and
                                footer, a wide variety of content, contextual background colors, and powerful display
                                options.</p>
                            <a class="btn btn-primary pmd-ripple-effect btn-services" href="index.php">Get Started</a>
                        </div>
                    </div>

                </div>
                <!-- card 2 -->
                <div class=" col-lg-4 col-md-4">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-title">
                            <h2 class="pmd-card-title-text typo-fill-secondary propeller-title">Card 1</h2>
                        </div>
                        <div class="pmd-card-media">
                            <img src="public/images/profile-pic.png" class="img-responsive">
                        </div>
                        <div class="pmd-card-body">
                            <p>A card is a flexible and extensible content container. It includes options for header and
                                footer, a wide variety of content, contextual background colors, and powerful display
                                options.</p>
                            <a class="btn btn-primary pmd-ripple-effect btn-services" href="index.php">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="col-lg-4 col-md-4">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-title">
                            <h2 class="pmd-card-title-text typo-fill-secondary propeller-title">Card 1</h2>
                        </div>
                        <div class="pmd-card-media">
                            <img src="public/images/profile-pic.png" class="img-responsive">
                        </div>
                        <div class="pmd-card-body">
                            <p>A card is a flexible and extensible content container. It includes options for header and
                                footer, a wide variety of content, contextual background colors, and powerful display
                                options.</p>
                            <a class="btn btn-primary pmd-ripple-effect btn-services" href="index.php">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content area ends -->
    <!-- Footer starts -->
    <footer style="background-color:white; border-top:solid 1px rgba(0, 0, 0, 0.1); padding:18px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    Brand © <?php echo date("Y"); ?>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer ends -->
    <!-- Scripts starts -->
    <script src="public/js/jquery-1.12.2.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/propeller.min.js"></script>

    <!-- Scripts ends -->
</body>

</html>