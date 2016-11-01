<!DOCTYPE html>
<html>
<head>
    <title>Campeonato</title>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="soccer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <!-- js -->
</head>
<body>
<!-- header -->
<header>
<div class="header">
    <div class="container">
        <div class="logo">
            <h1><a href="index">CAMPEONATO</a></h1>
        </div>
        <div class="top-menu">
            <span class="menu"></span>
            <ul>
                <li class="active"><a href="index">HOME</a></li>
                <li><a href="classificacao">CLASSIFICAÇÃO</a></li>
                <li><a href="agenda">AGENDA</a></li>
                <li><a href="destaque">DESTAQUES</a></li>
                <li><a href="sobre">SOBRE</a></li>
                <li><a href="contacto">CONTACTO</a></li>
            </ul>
        </div>
        <!-- script-for-menu -->
        <script>
            $("span.menu").click(function(){
                $(".top-menu ul").slideToggle("slow" , function(){
                });
            });
        </script>
        <!-- script-for-menu -->

        <div class="clearfix"></div>
    </div>
</div>
    </header>


<!-- //header -->
<!-- banner -->
<div class="strip">
    <div class="container">
        <div class="search">
            <form>
                <input type="text" value="" placeholder="Search...">
                <input type="submit" value="">
            </form>
        </div>
        <div class="social">
            <a href="#"><i class="facebook"></i></a>
            <a href="#"><i class="twitter"></i></a>
            <a href="#"><i class="dribble"></i></a>
            <a href="#"><i class="google"></i></a>
            <a href="#"><i class="youtube"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

@yield('content')

<!-- banner -->
<div class="banner">
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                speed: 300,
                manualControls: '#slider3-pager',
            });
        });
    </script>

    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider">
                <li>
                    <img src="images/bnr3.jpg" alt="">
                </li>
                <li>
                    <img src="images/bnr2.jpg" alt="">
                </li>
                <li>
                    <img src="images/bnr1.jpg" alt="">
                </li>
            </ul>
        </div>
    </div>
    <!---->

    <!---start-content----->
    <div class="banner-bottom-grids">
        <div class="container">
            <div class="col-md-6 banner-text-info clr1">
                <i class="icon1"></i>
                <div class="bnr-text">
                    <h3>CAMPEONATOS</h3>
                    <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
                </div>
            </div>
            <div class="col-md-6 banner-text-info clr2">
                <i class="icon2"></i>
                <div class="bnr-text">
                    <h3>NEWS & EVENTS</h3>
                    <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-6 banner-text-info clr3 btm">
                <i class="icon3"></i>
                <div class="bnr-text">
                    <h3>JOGOS</h3>
                    <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
                </div>
            </div>
            <div class="col-md-6 banner-text-info clr4 btm">
                <i class="icon4"></i>
                <div class="bnr-text">
                    <h3>FINAL TOURNAMENT</h3>
                    <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //banner -->

<!-- content -->
<div class="content">
    <div class="container">
        <div class="content-grids">
            <div class="col-md-4 content-grid1">
                <img src="images/c1.jpg" alt=""/>
                <h3>Champion's League</h3>

            </div>
            <div class="col-md-4 content-grid1">
                <img src="images/c2.jpg" alt=""/>
                <h3>Women's Cup</h3>
            </div>
            <div class="col-md-4 content-grid1">
                <img src="images/c3.jpg" alt=""/>
                <h3>Final Tournment</h3>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!--footer-->
<div class="footer">
    <div class="container">
        <div class="copywrite">
            <p>© 2016 All Rights Reseverd</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->
</body>
</html>