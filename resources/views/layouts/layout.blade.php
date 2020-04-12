<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Транспортная компания</title><meta charset="UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/css/uniform.css" />
    <link rel="stylesheet" href="/css/select2.css" />
    <link rel="stylesheet" href="/css/maruti-style.css" />
    <link rel="stylesheet" href="/css/maruti-media.css" class="skin-color" />
    <link rel="stylesheet" href="/css/main.css"/>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <div id="header">
    <h1><a href="dashboard.html">Транспортная компания</a></h1>
    </div>

    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>


    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            @if (Auth::guest())
                <li>
                    <a href="{{ url('/login') }}">
                        <span class="text">Авторизация</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/register') }}">
                        <span class="text">Регистрация</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="icon icon-share-alt"></i>
                        <span class="text">Выход</span>
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif
        </ul>
    </div>

        <div id="sidebar">
            <ul>
                <li class="active">
                    <a href="{{ url('/') }}">
                        <i class="icon icon-home"></i> 
                        <span>Перевозки</span>
                    </a> 
                </li>
                @if(!Auth::guest())
                    <li>
                        <a href="{{ url('/drivers') }}">
                            <i class="icon icon-user"></i>
                            <span>Водители</span>
                        </a> 
                    </li>
                    <li>
                        <a href="{{ url('/cars') }}">
                            <i class="icon icon-inbox"></i>
                            <span>Автомобили</span>
                        </a> 
                    </li>
                    <li>
                        <a href="{{ url('/brands') }}">
                            <i class="icon icon-tag"></i>
                            <span>Марки</span>
                        </a> 
                    </li>
                @endif
            </ul>
        </div>

    <div id="content">
        @yield('content')
    </div>
    <div class="row-fluid">
        <div id="footer" class="span12"> 2020 &copy; Поддержка транспортной компании. Сергеев Дмитрий. Группа КТ-41-16</a> </div>
    </div>
    <script src="/js/jquery.min.js"></script> 
    <script src="/js/jquery.ui.custom.js"></script> 
    <script src="/js/bootstrap.min.js"></script> 
    <script src="/js/jquery.uniform.js"></script> 
    <script src="/js/select2.min.js"></script> 
    <script src="/js/jquery.dataTables.min.js"></script> 
    <script src="/js/maruti.js"></script> 
    <script src="/js/maruti.tables.js"></script>
</body>

</html>
