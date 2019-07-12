@extends('layouts/home')

@section('pageTitle', 'Home')

@section('content')

<div class="main">
  <section id="about" class="text-center">
    <div class="container section-header">
      <div class="section-title">
        <span class="line"></span><span>Technologie, Soucis du détail</span><span class="line"></span>
        <h1 class='slider' style="opacity: 0;transform: translateY(30%);-webkit-transform: translateY(30%);">Innovation</h1>
      </div>
      <p class="lead">Argon est une entreprise suisse spécialisée dans la réalisation d’applications en réalité augmentée et réalité virtuelle. Nos compétences en programmation et en modélisation 3D, ainsi que notre expérience dans les domaines de l’architecture, des arts et de l’informatique visuelle nous permettent de saisir les enjeux de chaque projet pour y apporter une dimension nouvelle. Notre équipe de jeunes ingénieurs et architectes HES diplômés saura repousser les frontières des interactions imaginables entre un projet et ses intervenants.</p>
    </div>

    <div class="container section-content">
      <div class="row">
        <div class="col-md-6 order-md-2 text-md-right my-auto">
          <div class="element-line position-relative">
              <img class="img-fluid position-absolute" src="{{ asset('/media/illustrations/AR_foreground.svg') }}">
              <svg class="position-absolute" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1252.08 1149" xml:space="preserve">
                <defs>
                  <g>
                  <clipPath id="clip">
                    <rect fill="#ffffff" x="538" y="98" width="413" height="635" transition="x 0.5s ease"/>
                  </clipPath>
                  </g>
                </defs>
                <g clip-path="url(#clip)" >
                  <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="{{ asset('/media/illustrations/AR_augmentation.svg') }}" height=100% width=100%>
                </g>
              </svg>
              <img class="img-fluid" src="{{ asset('/media/illustrations/AR_background.svg') }}" style="max-height: 400px">
          </div>
        </div>
        <div class="col-md-6 text-md-left my-auto">
          <div class="element-line">
            <h1>Réalité augmentée</h1>
            <p class='slider' style="opacity: 0;transform: translateX(-30%);-webkit-transform: translateX(-30%);">Une fusion entre l’imaginaire et la réalité. Avec les techniques de réalité augmentée, le monde prend l’aspect que tu lui donnes. Cette dimension nouvelle multiplie les possibilités d’interactions entre les clients et ton projet et te permet de visualiser concrètement ce qui n’est potentiellement encore qu’un rêve ou une esquisse .</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container section-content">
      <div class="row">
        <div class="col-md-6 text-md-left my-auto">
          <div class="element-line position-relative">
            <img class="img-fluid position-absolute" src="{{ asset('/media/illustrations/VR_foreground.svg') }}">
            <img class="img-fluid" src="{{ asset('/media/illustrations/VR_background.svg') }}" style="max-height: 300px">
          </div>
        </div>
        <div class="col-md-6 text-md-right my-auto">
          <div class="element-line">
            <h1>Réalité virtuelle</h1>
            <p class='slider' style="opacity: 0;transform: translateX(30%);-webkit-transform: translateX(30%);">Une immersion réaliste au cœur d’un environnement virtuel. Les lunettes et casques de réalité virtuelle permettent une fantastique expérience en trois dimensions. Visiter une autre époque, un autre lieu ou un espace inexistant avant même sa réalisation : les limites sont celles que tu fixes à ton esprit.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container section-content">
      <div class="row">
        <div class="col-md-6 order-md-2 text-md-right my-auto">
          <div class="element-line">
            <img class="img-fluid" src="{{ asset('/media/illustrations/urbanisme_background.svg') }}" style="max-height: 300px">
          </div>
        </div>
        <div class="col-md-6 text-md-left my-auto">
          <div class="element-line">
            <h1>Architecture et urbanisme</h1>
            <p class='slider' style="opacity: 0;transform: translateX(-30%);-webkit-transform: translateX(-30%);">Sortir les murs du sol. Un plan de construction établit des mesures, une image transmet une atmosphère et une émotion, Argon brise la glace et te permet d’interagir avec le bâtiment. Découvre-le sous tous ses angles, tous ses éclairages et à toutes les saisons. Un clic suffit à déplacer une terrasse, ajouter un laurier ou recouvrir une façade de bois.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container section-content">
      <div class="row">
        <div class="col-md-6 text-md-left my-auto">
          <div class="element-line">
            <img class="img-fluid" src="{{ asset('/media/illustrations/art_background.svg') }}" style="max-height: 300px">
          </div>
        </div>
        <div class="col-md-6 text-md-right my-auto">
          <div class="element-line">
            <h1>Expression artistique</h1>
            <p class='slider' style="opacity: 0;transform: translateX(30%);-webkit-transform: translateX(30%);">Un creuset des arts, une réunion des sens. La technologie se met au service de l’artiste pour lui permettre de mixer les genres. Grâce à la réalité augmentée, une œuvre statique prend vie. Comme extension du réel ou entièrement virtuelle, l’œuvre créée ainsi réagit au visiteur, se meut, produit un son ou même une odeur ? S’exprimer à travers l’art, autrement.</p>
          </div>
        </div>
      </div>
    </section>

  <div class="container-fluid paroller" style="background: url({{ URL::asset('/media/images/3dm_4.png') }}) no-repeat center; background-size: cover; height: 400px" data-paroller-factor="0.2"></div>

    <section id="mobile-app" class="text-center">
      <div class="container section-header">
        <div class ="section-title">
          <span class="line"></span><span>Plusieurs projets</span><span class="line"></span>
          <h1 class='slider' style="opacity: 0;transform: translateY(30%);-webkit-transform: translateY(30%);">Une plateforme</h1>
        </div>
        <p class="lead">La meilleure façon de découvrir une technologie reste de l’essayer par soi-même. La plupart de nos projets en lien avec l’architecture sont disponibles sur notre application mobile 3DM XR.</p>
      </div>
      <div class="container section-content">
        <div class="row">
          <div class="col-md-6 text-md-left my-auto">
            <div class="element-line">
              <img class="img-fluid" src="{{ asset('/media/logo/logo_color_alpha.png') }}" style="max-height: 500px">
            </div>
          </div>
          <div class="col-md-6">
            <div class="element-line">
              <div class="row text-right">
                <div class="col-9">
                  <h1>3DM XR - Mixed Reality</h1>
                  <p>Disponible gratuitement sur smartphone et tablette</p>
                </div>
                <div class="col-3">
                  <img class="img-fluid 3dm-logo" alt="3DM XR logo" src="{{ asset('/media/logo/3DMXR_IconRond192.png') }}" style="border-radius: 50%;">
                </div>
              </div>
            </div>
            <div class="element-line">
              <div class="row">
                <div class="col-lg-5 download-badge">
                  <a href='https://play.google.com/store/apps/details?id=com.ThirdDimensionMedia.MixedReality&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target='_blank'>
                    <img class="img-fluid" alt='Disponible sur Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/fr_badge_web_generic.png'>
                  </a>
                </div>
                <div class="col-lg-5 download-badge">
                  <a href='https://itunes.apple.com/us/app/3dm-xr-mixed-reality/id1437366723?l=fr&ls=1&mt=8' target='_blank'>
                    <img class="img-fluid" alt="Télécharger dans l'App Store" src="{{ asset('/media/logo/Download_on_the_App_Store_Badge_FR.png') }}">
                  </a>
                </div>
                <div class="col-lg-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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

    <div class="container-fluid paroller" style="background: url({{ URL::asset('/media/images/3dm_3.jpg') }}) no-repeat center; background-size: cover; height: 400px" data-paroller-factor="0.5"></div>

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
        <div class="row">
          <div class="col-md-12 text-md-left">
            <div class="element-line">
              <h1>3DM - Visualisation architecturale</h1>
              <p>Précision et qualité des modèles 3D. Argon travaille en étroite collaboration avec 3DM pour la création et le rendu de modèles en trois dimensions. Depuis 2015, cette entreprise réalise des images et media pour la visualisation architecturale et a acquis une importante expérience pratique en la matière. Les modèles 3D et textures générés par 3DM sont intégrées à nos applications pour obtenir un rendu détaillé et réaliste.
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
        <p class="lead">Notre équipe apprécie se mettre au défi pour que notre créativité s’adapte parfaitement à tes besoins et à ceux de ton public cible. À travers un développement agile ainsi qu’une communication étroite avec nos clients, nous apportons à chaque projet une réponse sur mesure.</p>
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
