<?php

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    @section('meta_head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Авто ткани</title>
    @show
</head>
<body>
    @section('nav')
    <nav class="navbar navbar-inverse navbar-fixed-top"> 
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ $href }}">ИП Пр<i class="glyphicon glyphicon-upload"></i>нин</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">           
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">О нас <span class="sr-only">(current)</span></a></li>
                <li><a href="#catalog">Каталог</a></li>
                <li><a href="#why">Почему неоплан</a></li>
                <li><a href="#parth">Наши партнеры</a></li>
                <li><a href="#form">Контакты</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    @show

    @section('header')
    <div class="header-wrap">
        <div class="container">
            <div class="row centered">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="header-in">
                        <h1>Автобусная ткань Неоплан</h1>
                        <h2>Оригинальная автоткань австрийского производства</h2>
                        <a href="#form" class="btn-default btn-top animated zoomIn">Заказать полный каталог</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @show

    @section('content')
    <div class="phone-row">
        <div class="container">
            <div class="row centered">
                <div class="col-sm-10 col-sm-offset-1">
                    <p class="big-font animated bounce">Звоните 8 921 254 39 16</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row-why centered" id="why">
        <div class="container">
            <h2>Почему Неоплан</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="item centered">
                        <h4>Прочность и износостойкость</h4>
                        <img src="img/garanty.png" alt="">
                        <p> Неоплан хорошо драпируется и обладает высокими теплозащитными свойствами, не деформируется, не выгорает и не линяет, устойчив к различным загрязнениям и повреждениям. Огнеупорен
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="item centered">
                        <h4>Долговечность</h4>
                        <img src="img/garantiya-ikonka-bez-fonu.png" alt="">
                        <p> Неоплан прочен и долговечен – автобусный салон будет иметь первоначальный вид в течение длительного времени  от 10 до 15 лет.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="item centered">
                        <h4>Хорошая цена</h4>
                        <img src="img/coins.png" alt="">
                        <p id="left">При цене сопоставимой с ценой тканей китайского производства. Потребительские качества на порядок лучше. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="catalog centered" id="catalog">
        <div class="container">
            <h2>Каталог</h2>
            <div class="row">
               <div class="col-sm-3">
                    <h4>Неоплан1</h4>
                    <a href="cat.php?id=1"><img src="img/1.jpg" alt=""></a>
                    <p>Ткань на толстой основе</p>
                    <p>Цена <span class="rubl">1330 рублей</span> за кв. метр</p>
               </div>
               <div class="col-sm-3">
                    <h4>Неоплан2</h4>
                    <a href="cat.php?id=2"><img src="img/2.jpg" alt=""></a>
                    <p>Ткань на толстой основе</p>
                    <p>Цена <span class="rubl">1330 рублей</span> за кв. метр</p>
               </div>
               <div class="col-sm-3">
                    <h4>Неоплан3</h4>
                    <a href="cat.php?id=3"><img src="img/3.jpg" alt=""></a>
                    <p>Ткань на тонкой основе</p>
                    <p>Цена <span class="rubl">1100 рублей</span> за кв. метр</p>
               </div>
               <div class="col-sm-3">
                    <h4>Неоплан4</h4>
                    <a href="cat.php?id=4"><img src="img/4.jpg" alt=""></a>
                    <p>Ткань на тонкой основе</p>
                    <p>Цена <span class="rubl">1100 рублей</span> за кв. метр</p>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-3">
                    <h4>Неоплан5</h4>
                    <a href="cat.php?id=5"><img src="img/5.jpg" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
               </div>
               <div class="col-sm-3">
                    <h4>Неоплан6</h4>
                    <a href="cat.php?id=6"><img src="img/6.jpg" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
               </div>
               <div class="col-sm-3">
                    <h4>Неоплан7</h4>
                    <a href="cat.php?id=7"><img src="img/7.jpg" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
               </div>
               <div class="col-sm-3">
                    <h4>Неоплан8</h4>
                    <a href="cat.php?id=8"><img src="img/8.jpg" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
               </div>
            </div><!--row-->
            <div class="row centered">
                <div class="col-sm-6 col-sm-offset-3">
                    <a href="#form" class="btn-default btn-top animated zoomIn">Заказать полный каталог</a>
                </div>
            </div>
        </div><!--container-->
    </div>


    <div class="about centered" id="about">
        <div class="container">
            <h2>О нашей фирме</h2>
            <div class="row">
               <div class="col-sm-5">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/slide1.jpg" alt="...">

                                    <div class="carousel-caption">
                                        
                                    </div>
                                
                            </div>
                            <div class="item">
                                <img src="img/slide2.jpg" alt="...">

                                    <div class="carousel-caption">
                                        
                                    </div>
                                
                            </div>
                            <div class="item active">
                                <img src="img/slide3.jpg" alt="...">

                                    <div class="carousel-caption">
                                        
                                    </div>
                                
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>

               </div><!--col-md-6-->
               <div class="col-sm-7">
                    <p class="p">
                       <b>"Текстиль" ИП Пронин </b> - стабильно развивающееся предприятие на текстильном рынке вологодской области и России в целом.
                       Одним из основных направлений деятельности компании являются оптовые поставки оригинального <b>автобусного велюра Неоплан</b> австрийского производства.
                       Мы предлагаем ткани оптом в очень широком ассортименте, который пользуется большой популярностью среди возрастающей с каждым днем клиентской среды нашей компании, поскольку отвечает всем требованиям качества, модным тенденциям, разнообразию и неповторимости дизайнов. Ведь главная наша особенность и задача - способность удовлетворить любые запросы наших клиентов.
                        Любая продукция – соответствует стандартам ГОСТа. 
                    </p>
               </div>
            </div>
        </div>
    </div>

    <div class="phone-row">
        <div class="container">
            <div class="row centered">
                <div class="col-sm-10 col-sm-offset-1">
                    <p class="big-font animated bounce">Звоните 8 921 254 39 16</p>
                </div>
            </div>
        </div>
    </div>

    <div class="people-voice centered">
        <div class="container">
            <h2>Отзывы</h2>
            <div class="row">
               <div class="col-sm-4">
                    <img src="http://placehold.it/100x100" alt="">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               </div>
               <div class="col-sm-4">
                    <img src="http://placehold.it/100x100" alt="">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               </div>
               <div class="col-sm-4">
                    <img src="http://placehold.it/100x100" alt="">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               </div>
            </div>
        </div>
    </div>


    <div class="partners centered" id='parth'>
        <div class="container">
            <h2>Наши партнеры</h2>
            <div class="row">
               <div class="col-sm-3">
                <h4>Автоколонна</h4>
                <img src="http://placehold.it/100x50" alt="">
               </div>
               <div class="col-sm-3">
                <h4>Аммофос</h4>
                <img src="img/fosagr.png" alt="">
               </div>
               <div class="col-sm-3">
                <h4>Электротранс</h4>
                <img src="http://placehold.it/100x50" alt="">
               </div>
               <div class="col-sm-3">
                <h4>Северсталь</h4>
                <img src="img/severstal.png" alt="">
               </div>
            </div>
        </div>
    </div>


    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h2>Контакты</h2>
                    <div class="cont-top">
                        <h3>ИП Пронин С. В.</h3>
                        <p id="tel">тел: 8-921-254-39-16, (8202)64-39-16</p>
                        <p id="email">E-mail: gfd@kiu.co</p>
                        <p>г. Череповец, ул. Городецкая, д. 11, магазин "Текстиль"</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <h2>Заказать полный каталог</h2>
                    <form action="form.php" id="form" method="POST">
                        <p>Имя</p>
                        <input type="text" name="name" class="form-control" >
                        <p>Email</p>
                        <input type="text" name="mail" class="form-control" >
                        <input class="input-btn" type="submit" value="Заказать каталог">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="phone-row">
        <div class="container">
            <div class="row centered">
                <div class="col-sm-10 col-sm-offset-1">
                    <p class="big-font animated bounce">Звоните 8 921 254 39 16</p>
                </div>
            </div>
        </div>
    </div>
    @show

    @section('footer')
    <div class="footer black">
        <div class="container ">
            <div class="row centered">
                <div class="col-sm-4">
                    <p>@gfgd</p>
                </div>
                <div class="col-sm-4">
                    <p>@dgggg</p>
                </div>
                <div class="col-sm-4">
                    <p>@bbbbb</p>
                </div>
            </div>
        </div>
    </div>
   @show
   
   @section('bottom_scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    @show
</body>
</html>

