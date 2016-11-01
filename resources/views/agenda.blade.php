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
                    <li><a href="/">HOME</a></li>
                    <li class="active"><a href="classificacao">CLASSIFICAÇÃO</a></li>
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
</div>
<br>
<div class="col-md-2"></div>

<div  class="col-md-8 panel panel-info">
    <div class="panel-heading text-center">
        <h4>Proximos Jogos</h4>
    </div>

            <ul>
                <li><span>16:00</span> Germany <span class="color">Vs</span> England</li>
                <li><span>17:30</span> Hungary <span class="color">Vs</span> Croatia</li>
                <li><span>18:45</span> Finland <span class="color">Vs</span> Austria</li>
                <li><span>19:00</span> Poland <span class="color">Vs</span> Spain</li>
                <li><span>20:15</span> Italy <span class="color">Vs</span> France</li>
                <li><span>20:45</span> Portugal <span class="color">Vs</span> Netherlands</li>
            </ul>
</div>

</body>
</html>