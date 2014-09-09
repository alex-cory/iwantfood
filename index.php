<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iWantFood</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-coffee"></i>  <span class="light">Simply</span> iWantFood
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav text-shadow">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Food</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#reviews">Reviews</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">iWantFood</h1>
                        <p class="intro-text">Healthy, Affordable, & Mouth-Watering Food for Under $6.00<p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About iWantFood</h2>
                <p>iWantFood is Each dish is centered around an item that is high in protein and low in fat, but you'd never be able to tell because it just tastes <a href="http://startbootstrap.com/template-overviews/grayscale/">that</a></p>
                <p>More to come soon!</p>
                <p>No need to pick up the phone. Quick and accurate ordering is here!</p>
            </div>
        </div>
    </section>

    <!-- Food Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2 text-shadow">
                    <h2>Check Out the Food</h2>
                    <p>More coming soon!</p>
                    <!-- <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a> -->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="pull-left">Delicious & Fast</h3>
                            </div>
                            <div class="col-md-3">
                                <!-- Controls -->
                                <div class="controls pull-right hidden-xs">
                                    <a class="left fa fa-chevron-left btn" href="#carousel-example"
                                        data-slide="prev"></a><a class="right fa fa-chevron-right btn" href="#carousel-example"
                                            data-slide="next"></a>
                                </div>
                            </div>
                        </div>

                        <!-- FOOD SLIDERS -->
                        <!-- Small Foods -->
                        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/Lemon-and-Dill-Barbecue-Salmon-Kabobs.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-7">
                                                            <h5 style="font-size: 10pt">Salmon Kabobs</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $5.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-5">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"></i>

                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/eggbites.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-7">
                                                            <h5 style="font-size: 10pt">Egg White Bites</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $5.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-5">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" >Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/turkey-artichoke-sub.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-7">
                                                            <h5 style="font-size: 10pt">
                                                                Sample Product</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $4.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-5">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" >Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/black-bean-burger.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-7">
                                                            <h5 style="font-size: 10pt">
                                                                Sample Product</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $7.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-5">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" >Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/peanut-curry.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-7">
                                                            <h5 style="font-size: 10pt">Peanut Butter Chicken Curry</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $4.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-5">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                            <!-- <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star">
                                                            </i> -->
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" >Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/black-bean-burger.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-7">
                                                            <h5 style="font-size: 10pt">Black Bean Burger</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $5.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-5">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" >Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/creamy-greek.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-7">
                                                            <h5 style="font-size: 10pt">Creamy Greek Mac & Cheese</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $6.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-5">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" >Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/turkey-artichoke-sub.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-7">
                                                            <h5 style="font-size: 10pt">Turkey Basil Artichoke Sub</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $5.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-5">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" >Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SPECIALS --> <!-- Bigger foods -->
                    <div class="row">
                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="pull-left">Specialties for Today</h3>
                            </div>
                            <div class="col-md-3">
                                <!-- Controls -->
                                <div class="controls pull-right hidden-xs">
                                    <a class="left fa fa-chevron-left btn" href="#carousel-example-generic"
                                        data-slide="prev"></a><a class="right fa fa-chevron-right btn" href="#carousel-example-generic"
                                            data-slide="next"></a>
                                </div>
                            </div>
                        </div>
                        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/peanut-curry.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-8">
                                                            <h5>Peanut Butter Chicken Curry</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $19.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-4">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star">
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/black-bean-burger.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-8">
                                                            <h5>Black Bean Burger</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $14.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-4">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/creamy-greek.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-8">
                                                            <h5>Creamy Greek Yogurt Mac & Cheese</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $14.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-4">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/turkey-artichoke-sub.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-8">
                                                            <h5>Turkey, Artichoke, & Basil Sub</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $19.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-4">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/Lemon-and-Dill-Barbecue-Salmon-Kabobs.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-8">
                                                            <h5>Salmon Kabobs</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $14.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-4">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="./img/eggbites.jpg" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-8">
                                                            <h5>Egg White Bites</h5>
                                                            <h5 class="price-text-color" style="color: #7d4702">
                                                                $14.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-4">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">Add to cart</a></p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm" style="font-size: 10pt">More details</a></p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact iWantFood</h2>
                <p>Feel free to email us to provide some feedback on our products, give us suggestions for new dishes and foods, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">team@iwantfood.co</a>
                </p>
                <div class="list-inline banner-social-buttons">
                    <a href="https://www.facebook.com/bootsnipp"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
                </div>
<!--                 <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/iwantfood" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul> -->
            </div>
        </div>
    </section>

    <?php include_once './reviews.php'; ?>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; iWantFood 2014</p>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
