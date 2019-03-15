@extends('layouts.header')

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

@section('content')
<div class="main">
    <section id="clients">
      <div class="container section-header text-center">
        <div class ="section-title">
          <span class="line"></span><span>Happy</span><span class="line"></span>
          <h1 class='slider' style="opacity: 0;transform: translateY(30%);-webkit-transform: translateY(30%);">CLIENTS</h1>
        </div>
        <p class="lead">Ils ont fait appel à Argon pour réaliser une solution en réalité augmentée</p>
      </div>
      <div class="container section-content element-line">
        <p>Bricks Development</p>
        <p>IMJU SA</p>
        <p>HEIA Fribourg</p>
      </div>
    </section>

    <section id="team">
      <div class="container section-header text-center">
        <div class ="section-title">
          <span class="line"></span><span>Découvre notre</span><span class="line"></span>
          <h1 class='slider' style="opacity: 0;transform: translateY(30%);-webkit-transform: translateY(30%);">ÉQUIPE</h1>
        </div>
        <p class="lead"></p>
      </div>
      <div class="container section-content">
        <div class="row">
          <div class="col-md-6 text-md-left">
            <div class="element-line">
              <h1>Loïc Charrière</h1>
              <p>Co-Fondateur<br>
                1992 Né à Bienne<br>
                2008 - 2011 Maturité gymnasiale au Gymnase français de Bienne<br>
                2013 - 2016 Études d’informatique à l’École Polytechnique Fédérale de Lausanne<br>
                2016 - 2018 Bachelor of Science Bern University of Applied Sciences BFH in Computer Science with specialisation in “Computer Perception and Virtual Reality”<br>
                > 2019 Co-Directeur chez Argon
              </p>
            </div>
          </div>
          <div class="col-md-6 text-md-left">
            <div class="element-line">
              <h1>Nathan Boder</h1>
              <p>Co-Fondateur<br>
                1990 Né à Bienne<br>
                2006 - 2010 Apprentissage de dessinateur en bâtiment chez Pierre Liechti, Bienne<br>
                2007 - 2010 Maturité professionnelle technique intégrée<br>
                2010 - 2013 Bachelor of Arts in Architecture HES, Fribourg<br>
                2014 Service civil au sein du service d'urbanisme et d'architecture, Fribourg<br>
                2015 Architecte chez Kistler Vogt Architectes<br>
                > 2015 Directeur chez 3DM<br>
                > 2018 Chargé de cours en expression informatique à la Haute école d'ingénierie et d'architecture Fribourg
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container section-header text-center">
        <div class ="section-title">
          <h1 class='slider' style="opacity: 0;transform: translateY(30%);-webkit-transform: translateY(30%);">NOUS CONTACTER</h1>
        </div>
        <p class="lead">Nous avons éveillé ton intérêt ? Fais nous part de tes idées de projets et nous t’apportons la solutions adaptée.</p>
      </div>
      <div class="container section-content">
        <div class="row">
          <div class="col-md-6 text-md-left">
            <div class="element-line">
              <h1>Bureau</h1>
              <p>Argon Studio<br>
                Rue du Contrôle 28<br>
                2503 Biel/Bienne<br>
                <a href='mailto:contact@argonstudio.ch' target='_top'>contact@argonstudio.ch</a><br>
                <a href='tel:+41323232503'>+41 (0)32 323 25 03</a>
              </p>
            </div>
          </div>
          <div class="col-md-6 text-md-left">
            <div class="element-line">
              <h1>Réseaux sociaux</h1>
              <p><a href='https://www.instagram.com/argonstudio/' target='_blank'><i class="fab fa-instagram"></i> Instagram</a><br><a href='https://www.linkedin.com/company/argonstudio' target='_blank'><i class="fab fa-linkedin-in"></i> LinkedIn</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection
