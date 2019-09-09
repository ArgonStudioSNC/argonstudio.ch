@extends('layouts/master')

@section('header')

<div class="wrapper-home">
  <div id='bgimage'></div>
  <video playsinline autoplay muted loop poster="{{ asset('/media/images/intro-static-bg.jpg') }}" id='bgvid'>
    <source src="{{ asset('/media/videos/intro-video-bg.webm') }}" type="video/webm">
    <source src="{{ asset('/media/videos/intro-video-bg.ogg') }}" type="video/ogg">
    <source src="{{ asset('/media/videos/intro-video-bg.mp4') }}" type="video/mp4">
  </video>
</div>

@endsection

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
			<?php
      /*
			$current_lang = Languages::getLanguage();
			$url = explode ( '?', $_SERVER ['REQUEST_URI'], 2 ) [0];
			foreach ( Languages::LANGS as $lang ) {
				if ($current_lang == $lang) {
					echo "<li class=\"nav-item icon-hexagon\"><span><a class=\"nav-link active\" href=\"$url?" . Util::set_param__current_url ( 'lang', $lang ) . "\">$lang</a></span></li>";
				} else {
					echo "<li class=\"nav-item\"><span><a class=\"nav-link\" href=\"$url?" . Util::set_param__current_url ( 'lang', $lang ) . "\">$lang</a></span></li>";
				}
			}
      */
      ?>
		</ul>
		<ul class="navbar-nav menu-nav ml-auto">
      @php
      $menu_pages = array ('about', 'mobile-app','clients', 'team', 'contact');
      @endphp
      <li class="nav-item">
        <a id="default-link" class="nav-link smooth-scrolling active" href="#{{ $menu_pages[0] }}">
          {{ __("navigation.".$menu_pages[0]) }}
        </a>
      </li>
			@for ( $i = 1; $i < count($menu_pages); ++$i )
			<li class="nav-item">
		      <a class="nav-link smooth-scrolling" href="#{{ $menu_pages[$i] }}">
            {{ __("navigation.".$menu_pages[$i]) }}
          </a>
			</li>
			@endfor
		</ul>
	</div>
</nav>

@endsection