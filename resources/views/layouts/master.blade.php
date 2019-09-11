@extends('layouts/app')

@section('navbar')
<nav id='navigation' class="navbar navbar-expand-sm navbar-dark navbar-custom" role ="navigation">
    <!-- Brand -->
    <a class="navbar-brand smooth-scrolling" href="#">
        <img src="{{ asset('/media/logo/argon_banner_trimed.png') }}" alt="Argon logo"/>
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapsibleNavbar" data-target="#collapsibleNavbar">
        <i class="fas fa-bars fa-2x"></i>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav lang-nav">
            <?php /*
            $current_lang = Languages::getLanguage();
            $url = explode ( '?', $_SERVER ['REQUEST_URI'], 2 ) [0];
            foreach ( Languages::LANGS as $lang ) {
                if ($current_lang == $lang) {
                    echo "<li class=\"nav-item icon-hexagon\"><span><a class=\"nav-link active\" href=\"$url?" . Util::set_param__current_url ( 'lang', $lang ) . "\">$lang</a></span></li>";
                } else {
                    echo "<li class=\"nav-item\"><span><a class=\"nav-link\" href=\"$url?" . Util::set_param__current_url ( 'lang', $lang ) . "\">$lang</a></span></li>";
                }
            }
            */ ?>
        </ul>
        <ul class="navbar-nav menu-nav ml-auto">
            @php
            $menu_pages = array ('about', 'mobile-app','clients', 'team', 'contact');
            @endphp
            @for ( $i = 0; $i < count($menu_pages); ++$i )
            <li class="nav-item">
                <a class="nav-link" href="/#{{ $menu_pages[$i] }}">
                    {{ __("navigation.".$menu_pages[$i]) }}
                </a>
            </li>
            @endfor
        </ul>
    </div>
</nav>
@endsection

@section('footer')
<footer class="footer mt-auto container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 social-links order-md-2 text-md-right">
                <div class="element-line">
                    <a class="icon-hexagon" href="https://www.instagram.com/argonstudio/" target= "_blank">
                        <span><i class="fab fa-instagram"></i></span>
                    </a>
                    <a class="icon-hexagon" href="https://www.linkedin.com/company/argonstudio" target= "_blank">
                        <span><i class="fab fa-linkedin-in"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-md-left">
                <div class="element-line">
                    <p class="muted-text">
                        <a href='mailto:contact@argonstudio.ch' target='_top'><i class="fas fa-envelope"></i> contact@argonstudio.ch</a>
                        <br>
                        <a href='tel:+41323232503'><i class="fas fa-phone"></i> +41 (0)32 323 25 03</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-end">
            <div class="col-md-6 order-md-2 text-md-right">
                <div class="element-line">
                    <p>Copyright &copy <?php echo date("Y"); ?> Argon Studio snc. All rights reserved<br><a>Legal mention</a> - <a>Cookies policy</a></p>
                </div>
            </div>
            <div class="col-md-6 text-md-left">
                <div class="element-line">
                    <p>Proudly made by Argon</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection
