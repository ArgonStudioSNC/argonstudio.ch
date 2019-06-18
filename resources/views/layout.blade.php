<!DOCTYPE html>

<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('pageTitle') - Argon Studio - Augmented Reality</title>
  <!-- Bootstrap Core CSS -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" rel="stylesheet" type="text/css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!-- Fonts -->
  <link href="{{ asset('/fonts/overpass/_overpass.css') }}" rel="stylesheet" type="text/css">
  <!-- Custom CSS -->
  <link href="{{ asset('/css/main-layout.css') }}" rel="stylesheet" type="text/css">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#fa7268">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('/js/jquery.paroller.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('/js/jquery.appear.js') }}"></script>

</head>

<header>

  @yield('header', '')

</header>

<body>

	<script>document.body.classList.add('fade-out');</script>

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
			<?php
      $menu_pages = array ('about', 'mobile-app','clients', 'team', 'contact');
			echo "<li class=\"nav-item\">";
			echo "<a id=\"default-link\" class=\"nav-link smooth-scrolling active\" href=\"#$menu_pages[0]\">".$menu_pages[0]."</a>";
			echo "</li>";
			for ( $i = 1; $i < count($menu_pages); ++$i ) {
				echo "<li class=\"nav-item\">";
				echo "<a class=\"nav-link smooth-scrolling\" href=\"#$menu_pages[$i]\">".$menu_pages[$i]."</a>";
				echo "</li>";
			}?>
		</ul>
	</div>
</nav>

  @yield('content')

  <a id="back-top" class="smooth-scrolling" style="display: none;" href="#">
		<i class="fas fa-angle-up fa-2x"></i>
	</a>

  <footer class="fluid-container text-center">
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
              <a href='tel:+41323232503'><i class="fas fa-phone"></i> +41 (0)32 323 25 03</a></p>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.0/js/all.js" integrity="sha384-qD/MNBVMm3hVYCbRTSOW130+CWeRIKbpot9/gR1BHkd7sIct4QKhT1hOPd+2hO8K" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('/js/back-top.js') }}"></script>
    <script src="{{ asset('/js/smooth-scrolling.js') }}"></script>
    <script src="{{ asset('/js/_main.js') }}"></script>

  </body>

  </html>
