@extends('layouts.app_front_second')
@section('title')
	About
@endsection

@section('content')
  <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">About</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">About</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row  pb-1">
                <div class="col-lg-5">
                    <img class="img-thumbnail p-3" src="{{asset('front_second/img/aboutOld.jpg')}}" alt="about">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Who We Are</small>
                    <h1 class="mt-2 mb-4" align = "center">Немножко о себе</h1>
                    <p class="mb-4" style="text-indent:50px"><i>О себе только правда, одна только правда и ничего кроме правды.</i> 
					<p style="text-indent:50px"> Я очень трудолюбивый. Это видно из фото. Много работаю, немножко устаю, хорошо сплю.))
					<p style="text-indent:50px">
							<p style="text-indent:50px">Кто же я? Мне 50 лет. Весь мой трудовой опыт связан с компьютерами, от ремонта железа и периферии до установки, настройки и обслуживания, а также разработки софта.  Кроме того, уже лет 10 лет работаю на производстве, как инженер-электроник. А это обслуживание промышленного электрооборудования  - электродвигатели постоянного и переменного тока, преобразователи частоты, контроллеры и т.д., и в конечном итоге, ТО и ремонт оборудования, которое работает 24 часа в сутки, 365 дней в году. Шучу, конечно. Не, не 365, понятно. Где-то примерно 362-363 дня в году. И это правда. Только не дней, а суток. При этом приходилось оставаться нередко один на один со всем парком оборудования. А самое неприятное, что это безо всякого обучения по конкретному оборудованию. Еще тот квест, я вам скажу.  Хорошо хоть схемы были. Но такова наша реальность, наша жизнь. Не нравится – никто не держит. Так что я еще имею и  опыт работы с промышленным оборудованием. Какой-никакой.
<p style="text-indent:50px">Помимо этого, моим увлечением, так сказать, хобби, было программирование, Только как хобби, для души  как то не получалось. Все как-то для дела, то сайт себе сделать, то программу для хранения товаров и материалов, потому как 1С тяжелая и платная. То калькулятор для веб или android. 
<p syle="text-indent:50px">Как же я дошел до такой ручки, спросите вы? Отвечаю.
<p syle="text-indent:50px">Программированием я никогда не увлекался - не было ни компа, ни возможностей. Но во время учебы в универе я приобщился к программированию. Учился и закончил я БГУИР. И первым языком был шикарный Фортран, потом  PL/1. После – С++. Дальше веб программирование, а это HTML, CSS, PHP, потом добавилась JS, но с JavaScript  я мало работал. Я его ненавидел. И до сих пор у меня к нему очень непростое отношение. Не из-за самого языка, а за его использование.   Так, как он, ничто так не  затормаживало загрузку страниц. А теперь мощные ПК просто висят, благодаря  работе скриптов JS. Но, сейчас это время JS. Ничего тут не поделаешь. 
<p style="text-indent:50px">C++ обожал и до сих пор жалею, что не ушел работать программистом C++. А теперь уже поздно. Мой поезд ушел. И потому, что я перешел на JAVA. Вот этот язык увлек меня! Тут да. И снова жалею, что не ушел программистом JAVA. А недавно открыл для себя питона.  Python! Язык для инженерных и научных расчетов с поддержкой мощных библиотек  вроде NumPy или PyTorch.  Зачем питон? В последнее время заинтересовался я сперва нейронными сетями, а потом и машинным обучением. Оно мне надо на старости лет?))) А вот и надо! Во-первых, интересно. Во-вторых, полезно для ума (ну не хочу я на старости ходить и песни петь, да врать внукам какой я был крутой или ныть как все плохо, раньше было не так! Не, это не про меня.). В третьих, как то не  очень приятно жить в стране, в которой уже в 45 лет трудно найти работу с достойной более-менее оплатой труда. Так что лишний навык не помешает. Почему раньше не хотел работать программистом? Да нравится мне работа инженера-электроника. Живая, реальная, может как бабах! ))) А программирование это, повторю, хобби! А когда хобби это работа, то это не хобби. Это работа!  Но выхода нет. Если, вдруг, подвернется предложение работать программистом, уйду! И это уже будет навсегда.
<p style="text-indent:50px">Хотя теплится надежда, что может будет предложение работы как разработчик микропроцессорных систем. А то работа с МК типа Attiny или PIC хороша, но времени не хватает! 
<p syle="text-indent:50px">А так, я инженер. Инженер-электроник! Работаю с электротехническим оборудованием.  Когда крутится, вертится, едет, выключается, ломается, чинится, меняется, настраивается и снова работает! Жаль что наша работа оценивается не слишком высоко, ни в финансовом, ни в человеческом отношении! Но, выше голову!
<p style="text-indent:30px">	Ну вот. Немного  о себе рассказал. Без конкретики, но конкретика в проектах.
		        </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">My location</h5>
                            <p class="m-0">220019, Minsk</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Email Me</h5>
                            <p class="m-0">vladimir.boiko@tut.by</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Call Me</h5>
                            <p class="m-0">+375 29 856 87 50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    
@endsection