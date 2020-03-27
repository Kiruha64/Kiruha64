<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Штучний інтелект</title>
    <link href="{{URL::asset('css/homepage/home.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/OUR Services.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/features.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/slider2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/portfolio.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/chastunaform.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/header.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/footer.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/ourteams.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/Contacts us.css')}}" rel="stylesheet" type="text/css"/>
    <!--    <link href="width.css" rel="stylesheet" type="text/css"/>-->
    <!--    <link href="phone.css" rel="stylesheet" type="text/css"/>-->
    <!--    <link href="phone2.css" rel="stylesheet" type="text/css"/>-->
    <!--    <link href="phone3.css" rel="stylesheet" type="text/css"/>-->
    <link href="{{URL::asset('css/homepage/stattable.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/pricing_table.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/homepage/btn-up.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/top-basis.css')}}" rel="stylesheet" type="text/css"/>
    <!--  <link href="width21.css" rel="stylesheet" type="text/css"/>
    <link href="width31.css" rel="stylesheet" type="text/css"/>
    <link href="width41.css" rel="stylesheet" type="text/css"/>
    <link href="width51.css" rel="stylesheet" type="text/css"/>
    <link href="width61.css" rel="stylesheet" type="text/css"/>
    <link href="width71.css" rel="stylesheet" type="text/css"/>
    <link href="width81.css" rel="stylesheet" type="text/css"/>
    <link href="width91.css" rel="stylesheet" type="text/css"/>
    <link href="widthlast1.css" rel="stylesheet" type="text/css"/>
    <link href="widthpro1.css" rel="stylesheet" type="text/css"/> -->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://preview.uideck.com/items/helium-1.1/example-template/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>











    <script type="text/javascript">


    </script>









</head>



<body style=" padding-right:0;margin-right:0;overflow-x: hidden">

<div id="top-menu" class=""style="z-index: 100">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top "style="background-color: #333333;z-index: 100">
        <a class="navbar-brand" href="#">AI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                @foreach($menus as $menu)
                <li class="nav-item ">
                    <a class="nav-link" href="{{ $menu->link }}">{{ $menu->link_title }}</a>
                </li>
                @endforeach
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="#service">Вивчення</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="#Portfolio">Напрямки</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="#features-martop">Детально</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="#our-team1">Команда</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="#pricing_1table">Таблиця</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="#contacts1">Связоку</a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </nav>
</div>
<div id="myCarousel" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        @foreach($sliders as $slider)
        <li data-target="#myCarousel" data-slide-to="{{$slider->position}}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">


@foreach($fitstslide as $slid)
        <div class="carousel-item active ">
            <img src="{{ asset('storage/'.$slid->img) }}"class="text-center" width="100%" height="500px"  >
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1 style="color:#EA586F" >{{ $slid->title }}</h1>
                    <p >{{ $slid->text }}</p>
                    <p><a class="btn btn-lg btn-warning" href="{{ $slid->link }}" role="button">{{$slid->link_title}}</a></p>
                </div>
            </div>
        </div>
@endforeach


    @foreach($sliders as $slider)
        <div class="carousel-item">
            <img src="{{ asset('storage/'.$slider->img) }}"   class="text-center" width="100%" height="500px"  >
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1 style="color:#EA586F" >{{ $slider->title }}</h1>
                    <p >{{ $slider->text }}</p>
                    <p><a class="btn btn-lg btn-warning" href="{{ $slider->link }}" role="button">{{$slider->link_title}}</a></p>
                </div>
            </div>
        </div>
    @endforeach



{{--        <div class="carousel-item"style="max-height: 500px">--}}
{{--            <img src="https://uagolos.com/wp-content/uploads/2018/06/858x540-620x330.jpg" class="" width="100%" height="500px" style="max-height: 500px" >--}}
{{--            <div class="container">--}}
{{--                <div class="carousel-caption text-left">--}}
{{--                    <h1 style="color:#EA586F">Штучний інтелект</h1>--}}
{{--                    <p>Дуже молода галузь досліджень, започаткована 1956 року. Її історичний шлях нагадує синусоїду, кожен «зліт» якої ініціювався деякою новою ідеєю.</p>--}}
{{--                    <p><a class="btn btn-lg btn-info" href="https://www.youtube.com/watch?v=yuLbZ5icaN8" role="button">Відео</a></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>



<br>

    <p><h1 class="h1-zagolovok content text-center"style="text-align: center;">@foreach($aboutuspagetitles as $aboutuspagetitle) {{ $aboutuspagetitle->title }} @endforeach</h1></p><br>

<div class="container-fluid">
    <div id="About" class="content row">

@foreach($aboutuses as $aboutus)
        <div id="" class="col-md-3 col-sm-12 text-center">
            {!! $aboutus->text !!}
        </div>
@endforeach


{{--        <div id="About2" class="col-md-3 col-sm-12 text-center">--}}
{{--            <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTkURvVvGQy2bI07cEhlEb_DQxKARaf0rjqAy_q_dZ0Wgb74G_S" id=""  class="img-about"></br>--}}
{{--            <a href="#" id=""  class="a-about"><b>Напрямки</b></a><br>--}}
{{--            <p id="" class="p-about">Штучний інтелект вивчає методи розв'язання задач, для яких не існує способів розв'язання або вони не коректні (через обмеження в часі, пам'яті тощо). Завдяки такому визначенню інтелектуальні алгоритми часто використовуються для розв'язання NP-повних задач, наприклад, задачі комівояжера.</p>--}}

{{--        </div>--}}


{{--        <div id="About3"class="col-md-3 col-sm-12 text-center">--}}
{{--            <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSYs67VmU5qHEP37_mMVUpyO6mdzIWT83x-ntFIcWKAYOcfjwoo" id=""  class="img-about"></br>--}}
{{--            <a href="#" id=""  class="a-about"><b>Трохи деталей</b></a><br>--}}
{{--            <p id="" class="p-about">Останній підхід, що почав розвиватися з 1990-х років, називається агентно-орієнтованим підходом. Цей підхід зосереджує увагу на тих методах і алгоритмах, які допоможуть інтелектуальному агенту виживати в довкіллі під час виконання свого завдання. Тому тут значно краще вивчаються алгоритми пошуку і прийняття рішення.</p>--}}

{{--        </div>--}}


{{--        <div id="About4"class="col-md-3 col-sm-12 text-center">--}}
{{--            <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRIBBEGvhDjmMcrqQNEZqfFOjnrKJgzTxzxz_uGDqYQ16omIrX6" id=""  class="img-about"></br>--}}
{{--            <a href="#" id=""  class="a-about"><b>Мета</b></a><br>--}}
{{--            <p id="" class="p-about">Штучний інтелект — це системи, які можуть оперувати зі знаннями, а найголовніше — навчатися. В першу чергу мова ведеться про те, щоби визнати клас експертних систем (назва походить від того, що вони спроможні замінити «на посту» людей-експертів) інтелектуальними системами.</p>--}}

{{--        </div>--}}


    </div>


</div>






<h1 class="h1-zagolovok content text-center" id="service">@foreach($activitypagetitles as $activitypagetitle) {{ $activitypagetitle->title }} @endforeach</h1><br>


<div class="container-fluid">
    <div class="row">
        @foreach($activities as $activity)
        <div class="col-md-3">
            <div class="col-md-12 col-sm-12 text-center ">
                {!! $activity->text !!}
                </div>
            </div>
        @endforeach
    </div>
</div>

{{--            <div class="col-md-4 col-sm-12"style="float: left">--}}
{{--                <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTEwHx3xNTaBTZlLLQz0lcpTtngTF9v4QxHA4C9kXZF_A3qGAVO" class="services-img"width="50px"height="50px">--}}
{{--                <a class="services-link align-top">Логічний підхід</a>--}}
{{--                <p class="services-p text-center">Основою для вивчення логічного підходу слугує алгебра логіки. Кожен програміст знайомий з нею з того часу, коли він вивчав оператор IF. Свого подальшого розвитку алгебра логіки отримала у вигляді числення предикатів — в якому вона розширена за рахунок введення предметних символів, відношень між ними. Крім цього, кожна така машина має блок генерації цілі, і система виводу намагається довести дану ціль як теорему. Якщо ціль досягнута, то послідовність використаних правил дозволить отримати ланцюжок дій, необхідних для реалізації поставленої цілі (таку систему ще називають експертною системою).</p>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 col-sm-12" style="float: left">--}}
{{--                <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQdCDSUA6H6HsMQM6aa2N9MwLxfExNTwAvMqJ0tOCud1ombwQ9C" class="services-img"width="50px"height="50px">--}}
{{--                <a class="services-link  align-top">Струнктурний підхід</a>--}}
{{--                <p class="services-p text-center">Під структурним підходом ми розуміємо спроби побудови ШІ шляхом моделювання структури людського мозку. Однією з перших таких спроб був перцептрон Френка Розенблатта. Головною моделюючою структурною одиницею в перцептронах (як і в більшості інших варіантах моделювання мозку) є нейрон. Пізніше виникли й інші моделі, відоміші під назвою нейронні мережі (НМ) і їхні реалізації — нейрокомп'ютери. Ці моделі відрізняються за будовою окремих нейронів, за топологією зв'язків між ними і алгоритмами навчання.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <div class="col-md-4 col-sm-12"style="float: left">--}}
{{--                <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSzXsRILNNY8mejOW9tCqd_klwxAoQlq5W2KQnJQlgDEAe0bjyI" class="services-img"width="50px"height="50px">--}}
{{--                <a class="services-link align-top">Еволюційний підхід</a>--}}
{{--                <p class="services-p text-center">Під час побудови системи ШІ за даним методом основну увагу зосереджують на побудові початкової моделі і правилах, за якими вона може змінюватися (еволюціонувати). Причому модель може бути створено за найрізноманітнішими методами, це може бути і НМ, і набір логічних правил, і будь-яка інша модель. Після цього ми вмикаємо комп'ютер і він на основі перевірки моделей відбирає найкращі з них, і за цими моделями за найрізноманітнішими правилами генеруються нові моделі. Серед еволюційних алгоритмів класичним вважається генетичний алгоритм.</p>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 col-sm-12 "style="float: left">--}}
{{--                <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSn9CgSqjPi_dXNxBIcg_b3-vmWdADFxK69hrxBGj1Tqj2ul5G5" class="services-img"width="50px"height="50px">--}}
{{--                <a class="services-link align-top">Імітаційний підхід</a>--}}
{{--                <p class="services-p text-center"> Цей підхід є класичним для кібернетики з одним із її базових понять чорний ящик. Об'єкт, поведінка якого імітується, якраз і являє собою «чорний ящик». Для нас не важливо, які моделі у нього всередині і як він діє, головне, щоби наша модель в аналогічних ситуаціях поводила себе без змін. Таким чином тут моделюється інша властивість людини — здатність копіювати те, що роблять інші, без поділу на елементарні операції і формального опису дій. Часто ця властивість економить багато часу об'єктові, особливо на початку його життя.</p>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 col-sm-12"style="float: left">--}}
{{--                <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2ZxdPtENDbcD3ODITI0lje8i1ydDWc9EzoJl0iomaKSGV7ubc" class="services-img" width="50px"height="50px">--}}
{{--                <a class="services-link align-top">Отже</a>--}}
{{--                <p class="services-p text-center">У рамках гібридних інтелектуальних систем намагаються об'єднати ці напрямки. Експертні правила висновків, можуть генеруватися нейронними мережами, а побіжні правила отримують за допомогою статистичного вивчення. Багатообіцяльний новий підхід, який ще називають підсиленням інтелекту, розглядає досягнення ШІ у процесі еволюційної розробки, як поточний ефект підсилення людського інтелекту технологіями.</p>--}}
{{--            </div>--}}



















<h1 class="h1-zagolovok content" >Напрями досліджень?</h1>

<div id="Portfolio" class="content">

    <div id="but-port"class="content row">
        <div class="col-md-12 text-center">

            <button class="button button-active col-md-2 col-sm-12" id="">Всі</button>

@foreach($file_type as $item)

            <button class="button col-md-2 col-sm-12" onclick="showFiles({{ $item->id }})" >{{ $item->name }}</button>

@endforeach

        </div>
    </div>


    <div class="pictures1 container-fluid mt-5">
        <div class="row text-center">


            <div id="first_imgs" class=""style="width: 100%">

                <div class="img-portfolio activeimg text-center col-md-4 col-sm-11"id="prt1">
                    <div class="display text-center">

                        <div class="img_content text-center">

                            <a class="pro left-link text-center"   href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-link"></i></a>
                            <a class="pro right-link text-center"  href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-heart"></i></a>

                        </div>

                        <a href="#" class="text-center img_link">Машинне мислення </a></br>

                        <p class="text-center imgs_text">Охоплює процеси планування, представлення знань і міркування, пошук та оптимізацію</p>
                    </div>
                </div>


                <div class="img-portfolio activeimg text-center col-md-4 col-sm-11"id="prt2">
                    <div class="display text-center">

                        <div class="img_content text-center">

                            <a class="pro left-link text-center"   href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-link"></i></a>
                            <a class="pro right-link text-center"  href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-heart"></i></a>

                        </div>

                        <a href="#" class="text-center img_link">Машинне навчання </a></br>

                        <p class="text-center imgs_text">Умовно поділяється на глибоке навчання (англ. deep learning) і навчання з підкріпленням</p>
                    </div>
                </div>
                <div class="img-portfolio activeimg text-center col-md-4 col-sm-11"id="prt3">
                    <div class="display text-center">

                        <div class="img_content text-center">

                            <a class="pro left-link text-center"   href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-link"></i></a>
                            <a class="pro right-link text-center"  href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-heart"></i></a>

                        </div>

                        <a href="#" class="text-center img_link">Робототехніка</a></br>

                        <p class="text-center imgs_text">Включає в себе управління, ситуаційне сприйняття, датчики і приводи, а також інтеграцію усіх інших методів</p>
                    </div>
                </div>

                <div id="second_imgs" class=""style="width: 100%">

                    <div class="img-portfolio activeimg text-center col-md-4 col-sm-11"id="prt4">
                        <div class="display text-center">

                            <div class="img_content text-center">

                                <a class="pro left-link text-center"   href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-link"></i></a>
                                <a class="pro right-link text-center"  href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-heart"></i></a>

                            </div>

                            <a href="#" class="text-center img_link">AI</a></br>

                            <p class="text-center imgs_text">Автоматизує постійний процес навчання та пошук за допомогою даних.</p>
                        </div>
                    </div>


                    <div class="img-portfolio activeimg text-center col-md-4 col-sm-11"id="prt5">
                        <div class="display text-center">

                            <div class="img_content text-center">

                                <a class="pro left-link text-center"   href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-link"></i></a>
                                <a class="pro right-link text-center"  href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-heart"></i></a>

                            </div>

                            <a href="#" class="text-center img_link">AI інтелектуалізує продукт</a></br>

                            <p class="text-center imgs_text">AI перетворює стандартні автоматизовані системи на інтелектуальний продукт</p>
                        </div>
                    </div>
                    <div class="img-portfolio activeimg text-center col-md-4 col-sm-11"id="prt6">
                        <div class="display text-center">

                            <div class="img_content text-center">

                                <a class="pro left-link text-center"   href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-link"></i></a>
                                <a class="pro right-link text-center"  href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-heart"></i></a>

                            </div>

                            <a href="#" class="text-center img_link">AI адаптується</a></br>

                            <p class="text-center imgs_text">AI розвивається за допомогою прогресивного навчання і формує дані для подальшого програмування.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
{{--        @foreach ($file_type as $post)--}}
{{--            <tr>--}}
{{--                <td>{{ $post->name }}</td>--}}
{{--                <td>--}}
{{--                    @foreach ($files as $file)--}}
{{--                        <span class="tag">{{ $file->type_id }}</span>--}}
{{--                    @endforeach--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}

    <div class="text-center "style="overflow:hidden;">


        {{--            <button class="button button-active col-md-2 col-sm-12" id="button1">Всі</button>--}}
{{--        @foreach($file_type as $file_typ)--}}

{{--           <button id=""class="button col-md-2 col-sm-12">{{ $file_typ->name }}</button>--}}

{{--        @endforeach--}}
        {{--            <button class="button col-md-2 col-sm-12"id="button3">AI</button>--}}
        {{--            <button class="button col-md-2 col-sm-12"id="button4">Особливість</button>--}}
        {{--            <button class="button col-md-2 col-sm-12" id="button5">Розвиток</button>--}}



    </div>
    <br>
    <div class=""style="overflow:hidden;">

        @foreach($files as $file)
        <div class="img-portfolio activeimg text-center col-md-4 col-sm-11 {{ $file->type_id }}"id="prt5">
            <div class="display text-center">

                <div class="img_content text-center">

                    <a class="pro left-link text-center"   href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-link"></i></a>
                    <a class="pro right-link text-center"  href="https://www.everest.ua/ai-platform/analytics/shtuchnij-intelekt-ai-shho-ce-take-i-chomu-ce-v/"><i class="fa fa-heart"></i></a>

                </div>

                <a href="#" class="text-center img_link">AI інтелектуалізує продукт</a></br>

                <p class="text-center imgs_text">AI перетворює стандартні автоматизовані системи на інтелектуальний продукт</p>
            </div>
        </div>


    @endforeach
    </div>
    <br>


<p><h1 class="h1-zagolovok 4 content" id="features-martop">@foreach($detailpagetitle as $detailpagetitl) {{ $detailpagetitl->title }} @endforeach</h1></p>

<div class="container-fluid">
    <div class="row">
        @foreach($details as $detail)
        {!! $detail->text !!}
        @endforeach
    </div>
</div>

{{--        <div class="text-center col-md-4 col-sm-12" style="float: left">--}}
{{--            <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTu9Wg8C0PQoYJ7zWtA99VLGLwt4fjzexiP3FhYY_chJmvDw-5e" class="features-img" width="50px"height="50px"><br>--}}
{{--            <a href="#" class="featuresa"><h1 class="align-top featuresh1" >Практична реалізація</h1></a>--}}
{{--            <p class="featuresp">Штучний інтелект — технічна (в усіх сучасних випадках спроб практичної реалізації — комп'ютерна) система, що має певні ознаки інтелекту, тобто здатна:--}}

{{--            </p>--}}
{{--        </div>--}}

{{--        <div class="text-center col-md-4 col-sm-12" style="float: left">--}}
{{--            <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRQzjKSz9HvX_kneADUn20HiGUjJzHE40KovcSkyCqMQ2X-2yQk" class="features-img" width="50px"height="50px"><br>--}}
{{--            <a href="#" class="featuresa"><h1 class="align-top featuresh1" >Проблематика моделювання</h1></a>--}}
{{--            <p class="featuresp">проблема «штучного інтелекту» — це фактично цілий комплекс проблем, які характеризуються різним ступенем загальності, абстрактності, складності й розробленості і кожній з яких властиві свої принципові й практичні труднощі. Це такі проблеми, як розпізнавання образів, навчання й самонавчання, евристичне програмування, створення загальної теорії самоорганізовуваних систем, побудова фізичної моделі нейрона та ін.</p>--}}
{{--        </div>--}}


{{--        <div class="text-center col-md-4 col-sm-12" style="float: left">--}}
{{--            <img style="border-radius: 6%" src="img/features/4%20.png" class="features-img" width="50px"height="50px"><br>--}}
{{--            <a href="#" class="featuresa"><h1 class="align-top featuresh1" >Історія</h1></a>--}}
{{--            <p class="featuresp">На початку XVII століття Рене Декарт зробив припущення, що тварина — деякий складний механізм, тим самим сформулював механічну теорію. В 1623 р. Вільгельм Шиккард (нім. Wilhelm Schickard) побудував першу механічну цифрову обчислювальну машину, згодом було створено машини Блеза Паскаля (1643) і Лейбніца (1671). Лейбніц також був першим, хто описав сучасну двійкову систему числення, хоча до нього цією системою періодично захоплювались різні великі вчені[5][6]. В XIX столітті Чарлз Беббідж і Ада Лавлейс працювали над програмованою механічною обчислювальною машиною.</p>--}}
{{--        </div>--}}

{{--        <div class="text-center col-md-4 col-sm-12" style="float: left">--}}
{{--            <img style="border-radius: 6%" src="img/features/5%20.png" class="features-img" width="50px"height="50px"><br>--}}
{{--            <a href="#" class="featuresa"><h1 class="align-top featuresh1" >Перший алгоритм</h1></a>--}}
{{--            <p class="featuresp">Вперше алгоритми AI з'явилися в 1960-х роках.  Пристрої, попередньо запрограмовані для найпростіших міркувань, породили ранні платформи для створення цілих експертних і кваліфікованих прогностичних систем. І, не дивлячись на те, що на початкових етапах роботи з такими системами вчені зіштовхнулися з низкою проблем, які, на перший погляд, було неможливо вирішити, — результати численних досліджень принесли свої плоди.</p>--}}
{{--        </div>--}}

{{--        <div class="text-center col-md-4 col-sm-12" style="float: left">--}}
{{--            <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQcWCRUJqkZLx2222bu1HRx7NRq_M1fjOVwZCbRO1TSfSvwja9R" class="features-img" width="50px"height="50px"><br>--}}
{{--            <a href="#" class="featuresa"><h1 class="align-top featuresh1" >Розвиток і подолання труднощів</h1></a>--}}
{{--            <p class="featuresp">У 1970-80-х роках процес взагалі майже зупинився на фоні фактично повного скорочення належного фінансування.--}}
{{--                Однак, завдяки революційним розробкам у сфері напівпровідникової промисловості відбувся прорив у технологіях зберігання та обробки інформації і, як наслідок, — початок відродження епохи розумних машин припав на 1990-ті роки: з появою обмежених систем машинного навчання.  А 2000-і роки ознаменували вже зовсім нову епоху розвитку систем штучного інтелекту.</p>--}}
{{--        </div>--}}


<p><h1 class="h1-zagolovok content mt-5" id="">@foreach($stattablepagetitles as $stattablepagetitle) {{ $stattablepagetitle->title }} @endforeach</h1></p>

<div class="container-fluid"id="stat_table" style="background-image: url();background-size: cover;">
    <div class="row">



        <div class="col-md-3 col-sm-12 text-center mt-5">
            <img style="border-radius: 6%" src="https://konkurent.in.ua/media/uploads/prev/2018/12/07/00/20/04/0008ef4acf7fe5332a3acdd3981e3adf.png" class="statistic_img">
            <h1 class="statistic_h1">22</h1>
            <p class="statistic_p">Downloads</p>
        </div>



        <div class="col-md-3 col-sm-12 text-center mt-5">
            <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcThK6L_j-4qZxBf3vp-uupHD9tTWka4dDdNR3CnRe1HuZxMJxEY" class="statistic_img">
            <h1 class="statistic_h1">1</h1>
            <p class="statistic_p">Developer</p>
        </div>



        <div class="col-md-3 col-sm-12 text-center mt-5">
            <img  style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTpchIs0pEHx98kTsYprX3maDN9ZprjBbwrI4JNo-IGYyevhVqF" class="statistic_img">
            <h1 class="statistic_h1">9482</h1>
            <p class="statistic_p">Lines of code written</p>
        </div>



        <div class="col-md-3 col-sm-12 text-center mt-5">
            <img style="border-radius: 6%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSm2YpWB3krr-OuWmzOxK3oqVegpEzTjtSLJs3sZD6HGBNgZDjU" class="statistic_img">
            <h1 class="statistic_h1">29</h1>
            <p class="statistic_p">Cups of coffee consumed</p>
        </div>



    </div>
</div>









</div> </br>
</div><br>
<br>
<br>
<br>
<br>






<h1 class="h1-zagolovok content" id="overflow">@foreach($infohoverpagetitles as $infohoverpagetitle) {{ $infohoverpagetitle->title }} @endforeach</h1>

<div class="container-fluid content"id="all-our-team" >
    <div class="row">

        @foreach($infohovers as $infohover)
        <div class="col-sm-12 col-12 col-md-4  text-center mt-3" id="our-team1" style="background:url({{ URL::asset('storage/'.$infohover->img)}})round;color: white;    margin: 0; padding: 0; box-sizing: border-box;">

            <div id="our-team-opacity1" class="col-sm-12 col-md-12 "style="width: 100%;margin: 0;">

                <br><br>
                <h1 class=""><b class="">{{ $infohover->title  }}</b></h1><br>

                <em class="">{{ $infohover->text  }}</em><br>

                <a href="#"><i class="fa fa-facebook mt-5 col-md-2 col-2 our-team-facebook"></i></a>

                <a href="#"><i class="fa fa-twitter mt-5 col-md-2 col-2 our-team-twitter" ></i></a>

                <a href="#"><i class="fa fa-instagram mt-5 col-md-2 col-2 our-team-instagram"></i></a>
            </div>
        </div>
        @endforeach

{{--                <div class="col-sm-12 col-12 col-md-4  text-center mt-3" id="our-team2">--}}


{{--                    <div id="our-team-opacity2">--}}

{{--                        <br><br>--}}
{{--                        <h1 class=""><b class="">Родні Брукс та його роботи</b></h1><br>--}}

{{--                        <em class="">AI Specialist</em><br>--}}

{{--                        <a href="#"><i class="fa fa-facebook mt-5 col-md-2 col-2 our-team-facebook"></i></a>--}}

{{--                        <a href="#"><i class="fa fa-twitter mt-5 col-md-2 col-2 our-team-twitter" ></i></a>--}}

{{--                        <a href="#"><i class="fa fa-instagram mt-5 col-md-2 col-2 our-team-instagram"></i></a>--}}


{{--                    </div>--}}

{{--                </div>--}}


{{--                <div class="col-sm-12 col-12 col-md-4  text-center mt-3" id="our-team3">--}}


{{--                    <div id="our-team-opacity3">--}}

{{--                        <br><br>--}}
{{--                        <h1 class=""><b class="">Родні Брукс та його роботи</b></h1><br>--}}

{{--                        <em class="">AI Specialist</em><br>--}}

{{--                        <a href="#"><i class="fa fa-facebook mt-5 col-md-2 col-2 our-team-facebook"></i></a>--}}

{{--                        <a href="#"><i class="fa fa-twitter mt-5 col-md-2 col-2 our-team-twitter" ></i></a>--}}

{{--                        <a href="#"><i class="fa fa-instagram mt-5 col-md-2 col-2 our-team-instagram"></i></a>--}}


{{--                    </div>--}}

{{--                </div>--}}



    </div>
</div>










<br>






</br>


<h1 class="h1-zagolovok content">Pricing Table</h1>






<div class="container-fluid content">
    <div class="row text-center">
        @foreach($pricingtables as $pricingtable)
        <div class="col-md-4 col-sm-12 text-center mt-3" id="pricing_1table">



                {!! $pricingtable->text !!}




        </div>
        @endforeach
        <div class="col-md-4 col-sm-12 text-center mt-3" id="pricing_2table">

            <h3 class="pricing_h3 mt-3">Хто ж краще?</h3>

            <b class="pricing_b1 mt-3">Всетаки як би це не звучало</b></br>

            <b class="pricing_b2 mt-3">ШІ кращий</b>


            <p class="pricing_p mt-3"> &#10004 Здатний виконувати сотні тисяч функцій за секунду</p>
            <p class="pricing_p mt-3"> &#10004 Виконує все ідеально точно</p>
            <p class="pricing_p mt-3"> &#10004 В рази швидший за людину</p>
            <p class="pricing_p mt-3"> &#10004 Ніякої самодільності</p>

            <a href="https://www.epravda.com.ua/publications/2019/07/15/649648/"><button class="pricing_btn  mt-3 mb-3"id="pricing_btn2">Прогрес ШІ</button></a>


        </div>

        <div class="col-md-4     col-sm-12 text-center mt-3" id="pricing_3table">

            <h3 class="pricing_h3 mt-3">Мозок</h3>

            <b class="pricing_b1 mt-3">Переваги</b></br>

            <b class="pricing_b2 mt-3">Людини</b>


            <p class="pricing_p mt-3"> &#10004 Здатна краще оцінювати ситувції</p>
            <p class="pricing_p mt-3"> &#10004 Здатна на любов</p>
            <p class="pricing_p mt-3"> &#10004 Живі почуття</p>
            <p class="pricing_p mt-3"> &#10004 Може створити щось краще за ШІ</p>

            <a href="https://uk.wikipedia.org/wiki/%D0%9B%D1%8E%D0%B4%D0%B8%D0%BD%D0%B0 "><button class="pricing_btn mt-3 mb-3"id="">Людина</button></a>


        </div>


    </div>
</div></br>









<div id="myCarousel2" class="carousel slide  mt-5" data-ride="carousel">




    <div class="carousel-inner"style="background-image: url(img/logotup/2.jpg);background-size: cover;">


    @foreach($fitstslidesecondslider as $fitstslidesecondslid)

        <div class="carousel-item active">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/HONDA_ASIMO.jpg/375px-HONDA_ASIMO.jpg" class="slider2img "  style="opacity:0">

            <div class="container-fluid">
                <div class="carousel-caption text-center">
                    <img src="{{ asset('storage/'.$fitstslidesecondslid->img) }}" class="slider2img mt-4 col-md-3  col-5">
                    <p><i class="fa fa-user"> </i> <a href="{{ $fitstslidesecondslid->link }}"> {{ $fitstslidesecondslid->title }} </a></p>
                    <p> {{ $fitstslidesecondslid->text }} </p>

                </div>
            </div>
        </div>

        @endforeach
        @foreach($secondsliders as $secondslider)
        <div class="carousel-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/HONDA_ASIMO.jpg/375px-HONDA_ASIMO.jpg" class="slider2img "  style="opacity:0">

            <div class="container">
                <div class="carousel-caption text-center">
                    <img src="{{ asset('storage/'.$secondslider->img) }}" class="slider2img mt-4 col-md-3  col-5">
                    <p><i class="fa fa-user"> </i> Робот <a href="{{ $secondslider->link }}"> {{ $secondslider->title }}</a></p>
                    <p>{{ $secondslider->text }}</p>

                </div>
            </div>
        </div>
        @endforeach


        <div class="carousel-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/HONDA_ASIMO.jpg/375px-HONDA_ASIMO.jpg" class="slider2img "  style="opacity:0">

            <div class="container">
                <div class="carousel-caption text-center">
                    <img src="img/humanbc/img3.jpg" class="slider2img col-md-3  col-5">
                    <p><i class="fa fa-user"> </i> Elon Musk,<a href="#">Експеримент Facebook у 2017</a></p>
                    <p>
                        3 1 серпня 2017 року Facebook вимкнув систему штучного інтелекту через те, що боти винайшли свою мову, якою вони почали спілкуватися між собою. Випробувачі алгоритму схильні вважати, що фрази і навіть самі повторення представляли собою спроби ботів самостійно «зрозуміти» принципи спілкування.[9]

                        За кілька днів перед тим Ілон Маск назвав штучний інтелект найбільшою загрозою, з якою зіткнеться цивілізація, а засновник Facebook Марк Цукерберг активно заперечував йому.[10][11] Чат-боти для Messenger Фейсбук запустив у квітні 2016 року. Боти могли самостійно навчатися</p>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><br>
</div>















    <br>

























    <h1 id="form-marg" class="h1-zagolovok content col-sm-12">@foreach($contactspagetitles as $contactspagetitle) {{ $contactspagetitle->title }} @endforeach</h1>


    <div class="container-fluid">
        <div class="row">

            <div id="contacts1" class="col-md-7 col-12 col-sm-12 float-left mt-3">
                <form class="float-left">
                    <h3>Get in touch</h3><br>


                    <label class="col-md-3 col-12 col-sm-12"><i class="fa fa-address-book-o pt-1"></i>
                        <input class="form-control input "type="text" placeholder="Ім'я"  data-error="Please enter your Subject" required>
                    </label>


                    <label class="col-md-4 col-12 col-sm-12"><i class="fa fa-envelope-o  pt-1"></i>
                        <input class="form-control input "type="email" placeholder="Емеїл"  data-error="Please enter your Subject" required>
                    </label>


                    <label class="col-md-3 col-12 col-sm-12"><i class="fa fa-hand-o-right  pt-1"></i>
                        <input class="form-control input "type="text" placeholder="Причина"  data-error="Please enter your Subject" required>
                    </label><br>

                    <textarea class="col-md-12 col-12 col-sm-12" required data-error="Please enter your message" rows="10"
                              cols="100" placeholder="Your message" style="border: 1px solid black">

            </textarea>
                    <button id="contacts-btn"class="btn col-md-4 col-12 col-sm-12">Відправити</button>
                </form>
            </div>

            <div id="contacts2"class="float-left col-md-5 col-12 col-sm-12 mt-3 ">
                @foreach($contacts as $contact)

                    {!! $contact->text !!}
                @endforeach
{{--                <a href="#" class="contacts-a"> Вул.Виговського 89/42 </a><br>--}}

{{--                <a href="#" class="contacts-a"> +380 97 19 55 120 </a><br>--}}

{{--                <a href="#" class="contacts-a"> topsinpw@gmail.com </a><br>--}}

{{--                <a href="#" class="contacts-a"> Поштовий індекс: 79042</a><br><br>--}}

                <a href="https://www.instagram.com/kiruha_64/?hl=ru" class="col-md-3"><i class="fa fa-facebook " id="contacts_facebook"></i></a>
                <a href="https://www.instagram.com/kiruha_64/?hl=ru" class="col-md-3" ><i class="fa fa fa-twitter " id="contacts_twitter"></i></a>
                <a href="https://www.instagram.com/kiruha_64/?hl=ru" class="col-md-3"><i class="fa fa-instagram " id="contacts_instagram"></i></a>
                <a href="https://www.instagram.com/kiruha_64/?hl=ru" class="col-md-3"><i class="fa fa-linkedin " id="contacts_linkedin"></i></a>



            </div>
        </div>
    </div>







    <!--футер-->












    <div style="background-color: #1D1D1D;color: white;display: block" id="" class="mt-5">
        <div class="container-fluid"  style="background-color: #1D1D1D;color: white;display: block" id="footer">
            <div class="row">

                <div class="mb-4 col-md-12"id="" >

         @foreach($footers as $footer)
                    <div class="col-sm-12 col-md-3  mt-4" style="float: left"id="sotsseti">
                       {!! $footer->text !!}
                    </div>
        @endforeach
                    <div class="col-sm-12 col-md-3 text-center mt-4" style="float: left">
                        <h1 class="footer_h1">Посилання</h1>
                        <a href="https://www.instagram.com/kiruha_64/?hl=ru" class="text-left">Про нас</a><br>
                        <a href="#service" class="text-left">Вивчення</a><br>
                        <a href="#" class="text-left">Наша робота</a><br>
                        <a href="#Portfolio" class="text-left">Дослыдження</a><br>
                        <a href="#form-marg" class="text-left">Контакти</a><br>
                    </div>

                    <div class="col-sm-12 col-md-3 mt-4 text-center" style="float: left">
                        <h1 class="footer_h1">Галерея</h1>
                        <a ><img src="img/portfolio/img1.jpg" class="footer_img mt-1"></a>
                        <a ><img src="img/portfolio/img2.jpg" class="footer_img mt-1"></a>
                        <a ><img src="img/portfolio/img3.jpg" class="footer_img mt-1"></a>
                        <a ><img src="img/portfolio/img4.jpg" class="footer_img mt-1"></a>
                        <a ><img src="img/portfolio/img5.jpg" class="footer_img mt-1"></a>
                        <a ><img src="img/portfolio/img6.jpg" class="footer_img mt-1"></a>


                    </div>

                    <div class="col-sm-12 col-md-3 mt-4 text-center" style="float: left">
                        <h1 class="footer_h1">Підпишіться на нас</h1>
                        <input class="footer_input" placeholder="Введіть ваше ім'я" required ><br>
                        <input class="footer_input mt-2" placeholder="Введіть ваш емейл" required ><br>
                        <a href="#"><button class="mt-3 mb-2 btn col-md-6 text-center"id="footer_btn"><b>Відправити</b></button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div style="background-color: #282828">
        <div class="container-fluid">
            <div class="row">
                <div class="" id="" >

                    <div  class="col-md-12">

                        @foreach($footermenus as $footermenu)<a href="#" class="footer_last_a col-md-3 col-sm-12">{{ $footermenu->link_title }}</a>@endforeach

                        <br>


                    </div>
                </div>
            </div>
        </div>
    </div>



    <a href="#" id="button-up" class="button-up "></a>

    <!--<script type="text/javascript">-->
    <!--// &lt;!&ndash;&ndash;&gt; SLIDER TEST-->



    <!--    // var slideIndex = 1;-->
    <!--    // showSlides(slideIndex);-->
    <!--    //-->
    <!--    // function plusSlides(n) {-->
    <!--    //     showSlides(slideIndex += n);-->
    <!--    // }-->
    <!--    // function showSlides(n) {-->
    <!--    //     var i;-->
    <!--    //     var slides = document.getElementsByClassName("mySlides");-->
    <!--    //     if (n > slides.length) {-->
    <!--    //         slideIndex = 1-->
    <!--    //     }-->
    <!--    //     if (n < 1) {-->
    <!--    //         slideIndex = slides.length-->
    <!--    //     }-->
    <!--    //     for (i = 0; i < slides.length; i++) {-->
    <!--    //         slides[i].style.display = "none";-->
    <!--    //     }-->
    <!--    //     slides[slideIndex-1].style.display = "block";-->
    <!--    // }-->
    <!--    //-->
    <!--    //-->
    <!--    //-->
    <!--    //-->
    <!--    // var slides = document.querySelectorAll('#slides .slide');-->
    <!--    // var currentSlide = 0;-->
    <!--    // var slideInterval = setInterval(nextSlide,3000);-->
    <!--    //-->
    <!--    // function nextSlide() {-->
    <!--    //     slides[currentSlide].className = 'slide';-->
    <!--    //     currentSlide = (currentSlide+1)%slides.length;-->
    <!--    //     slides[currentSlide].className = 'slide showing';-->
    <!--    // }-->





    <!--</script>-->





<script>

</script>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{URL::asset('js/homepage/portfolio.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/homepage/home.js')}}"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
</body>
</html>



