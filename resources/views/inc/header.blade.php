<nav class="navbar navbar-expand-lg" style="color: #cc6600;">
    <div class="container">
        <a class="navbar-brand nav-link" href="{{route('home')}}"><i class="fas fa-book"></i> ReadOnline.kz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="">Библиотека</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link ml-3" href="">Подписка</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link ml-3" href="">Контакты</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link ml-3" href="{{route('about')}}">О нас</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item active">
                        <a class="nav-link ml-3" href="{{route('review')}}">Отзывы</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link ml-3" href="{{route('admin_users')}}">{{ Auth::user()->getNameOrLogin() }}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link ml-3" href="{{route('signout')}}">Выйти</a>
                    </li>
                @else
                    <li class="nav-item active">
                        <a class="nav-link ml-3" href="{{route('signin')}}">Войти</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link ml-3" href="{{route('signup')}}">Регистрация</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg mb-3">
    <div class="container">
        <div class="row ml-5" style="width: 100%;">
            <ul class="navbar-nav ml-5">
                <li class="nav-item active">
                    <a type="button" class="btn" href=""><i class="fas fa-headphones-alt"></i> <i class="fab fa-readme"></i> Читай и Слушай</a>
                </li>
                <li class="nav-item active">
                    <a type="button" class="btn" href=""><i class="fas fa-headphones"></i> Аудиокниги</a>
                </li>
                <li class="nav-item active">
                    <a type="button" class="btn" href=""><i class="far fa-thumbs-up"></i> Бесплатные книги</a>
                </li>
                <li class="nav-item active">
                    <a type="button" class="btn" href=""><i class="fas fa-fire"></i> Новинки</a>
                </li>
                <li class="nav-item active">
                    <a type="button" class="btn" href=""><i class="fas fa-heart"></i> Топ книги</a>
                </li>
                <li class="nav-item active">
                    <a type="button" class="btn" href=""><i class="fas fa-headset"></i> Топ аудиокниг</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
