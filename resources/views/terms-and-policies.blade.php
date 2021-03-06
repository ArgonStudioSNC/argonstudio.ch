@extends('layouts/master')

@section('pageTitle', 'Terms and Policies')

@section('content')
<div class="main" role="main">
    <div class="terms-and-policies-heading text-center">
        <div class="section-title">
            <span class="line"></span><span>{{ __('terms-and-policies.heading-lead') }}</span><span class="line"></span>
            <h1 class='slider' style="opacity: 0;transform: translateY(30%);-webkit-transform: translateY(30%);">{{ __('terms-and-policies.heading') }}</h1>
        </div>
    </div>
    <div class="container terms-and-policies">
        <div class="row">
            <div class="d-none d-md-block col-md-4">
                <nav id='terms-and-policies-nav' class="navbar navbar-light position-sticky">
                    <div id="terms-and-policies-accordion" class="accordion">
                        <div id="conditions-generales" class="card">
                            <div id="conditions-generales-heading" class="card-header">
                                <button id="conditions-generales-btn" class="btn btn-link collapsed" aria-controls="conditions-generales-collapse" aria-expanded="false" data-target="#conditions-generales-collapse" data-toggle="collapse" type="button">
                                    {{ __('terms-and-policies.cg-heading') }}
                                </button>
                            </div>
                            <div id="conditions-generales-collapse" class="collapse" data-parent="#terms-and-policies-accordion" data-text-target="conditions-generales">
                                <div class="card-body">
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent active" href="#title-conditions-generales-1">{{ __('terms-and-policies.cg-1-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-2">{{ __('terms-and-policies.cg-2-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-3">{{ __('terms-and-policies.cg-3-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-4">{{ __('terms-and-policies.cg-4-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-5">{{ __('terms-and-policies.cg-5-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-6">{{ __('terms-and-policies.cg-6-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-7">{{ __('terms-and-policies.cg-7-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-8">{{ __('terms-and-policies.cg-8-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-9">{{ __('terms-and-policies.cg-9-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-10">{{ __('terms-and-policies.cg-10-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-11">{{ __('terms-and-policies.cg-11-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-12">{{ __('terms-and-policies.cg-12-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-13">{{ __('terms-and-policies.cg-13-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-14">{{ __('terms-and-policies.cg-14-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-15">{{ __('terms-and-policies.cg-15-heading') }}</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="hr"></div>
                        <div id="politique-de-confidentialite" class="card">
                            <div id="politique-de-confidentialite-heading" class="card-header">
                                <button id="politique-de-confidentialite-btn" class="btn btn-link collapsed" aria-controls="politique-de-confidentialite-collapse" aria-expanded="false" data-target="#politique-de-confidentialite-collapse" data-toggle="collapse" type="button">
                                    {{ __('terms-and-policies.confidentialite-apps-heading') }}
                                </button>
                            </div>
                            <div id="politique-de-confidentialite-collapse" class="collapse" data-parent="#terms-and-policies-accordion" data-text-target="politique-de-confidentialite">
                                <div class="card-body">
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-politique-de-confidentialite-1">{{ __('terms-and-policies.confidentialite-apps-1-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-politique-de-confidentialite-2">{{ __('terms-and-policies.confidentialite-apps-2-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-politique-de-confidentialite-3">{{ __('terms-and-policies.confidentialite-apps-3-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-politique-de-confidentialite-4">{{ __('terms-and-policies.confidentialite-apps-4-heading') }}</a>
                                    </nav>
                                    <nav class="nav">
                                        <a class="nav-link smooth-scrolling silent" href="#title-politique-de-confidentialite-5">{{ __('terms-and-policies.confidentialite-apps-5-heading') }}</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="hr"></div>
                    </div>
                </nav>
            </div>
            <div class="col-md-8">
                <div id="text-conditions-generales">
                    <h2 id="title-conditions-generales-1">1. {{ __('terms-and-policies.cg-1-heading') }}</h2>
                    <p>1.1. {!! __('terms-and-policies.cg-1.1-content') !!}</p>
                    <p>1.2. {{ __('terms-and-policies.cg-1.2-content') }}</p>
                    <h2 id="title-conditions-generales-2">2. {{ __('terms-and-policies.cg-2-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-2-content') }}</p>
                    <h2 id="title-conditions-generales-3">3. {{ __('terms-and-policies.cg-3-heading') }}</h2>
                    <p>3.1. {{ __('terms-and-policies.cg-3.1-content') }}</p>
                    <p>3.2. {{ __('terms-and-policies.cg-3.2-content') }}</p>
                    <h2 id="title-conditions-generales-4">4. {{ __('terms-and-policies.cg-4-heading') }}</h2>
                    <h3>4.1. {{ __('terms-and-policies.cg-4.1-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.1-content') }}</p>
                    <h3>4.2. {{ __('terms-and-policies.cg-4.2-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.2-content') }}</p>
                    <h3>4.3. {{ __('terms-and-policies.cg-4.3-heading') }}</h3>
                    <p>4.3.1. {{ __('terms-and-policies.cg-4.3.1-content') }}</p>
                    <p>4.3.2. {{ __('terms-and-policies.cg-4.3.2-content') }}</p>
                    <h3>4.4. {{ __('terms-and-policies.cg-4.4-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.4-content') }}</p>
                    <h3>4.5. {{ __('terms-and-policies.cg-4.5-heading') }}</h3>
                    <p>4.5.1. {!! __('terms-and-policies.cg-4.5.1-content') !!}</p>
                    <p>4.5.2. {{ __('terms-and-policies.cg-4.5.2-content') }}</p>
                    <p>4.5.3. {{ __('terms-and-policies.cg-4.5.3-content') }}</p>
                    <p>4.5.4. {{ __('terms-and-policies.cg-4.5.4-content') }}</p>
                    <h3>4.6. {{ __('terms-and-policies.cg-4.6-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.6-content') }}</p>
                    <h3>4.7. {{ __('terms-and-policies.cg-4.7-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.7-content') }}</p>
                    <h2 id="title-conditions-generales-5">5. {{ __('terms-and-policies.cg-5-heading') }}</h2>
                    <p>5.1. {{ __('terms-and-policies.cg-5.1-content') }}</p>
                    <p>5.2. {{ __('terms-and-policies.cg-5.2-content') }}</p>
                    <h2 id="title-conditions-generales-6">6. {{ __('terms-and-policies.cg-6-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-6-content') }}</p>
                    <h2 id="title-conditions-generales-7">7. {{ __('terms-and-policies.cg-7-heading') }}</h2>
                    <p>7.1. {{ __('terms-and-policies.cg-7.1-content') }}</p>
                    <p>7.2. {{ __('terms-and-policies.cg-7.2-content') }}</p>
                    <h2 id="title-conditions-generales-8">8. {{ __('terms-and-policies.cg-8-heading') }}</h2>
                    <p>8.1. {{ __('terms-and-policies.cg-8.1-content') }}</p>
                    <p>8.2. {{ __('terms-and-policies.cg-8.2-content') }}</p>
                    <p>8.3. {{ __('terms-and-policies.cg-8.3-content') }}</p>
                    <h2 id="title-conditions-generales-9">9. {{ __('terms-and-policies.cg-9-heading') }}</h2>
                    <p>9.1. {{ __('terms-and-policies.cg-9.1-content') }}</p>
                    <h3>9.2. {{ __('terms-and-policies.cg-9.2-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-9.2-content') }}</p>
                    <p>9.3. {{ __('terms-and-policies.cg-9.3-content') }}</p>
                    <p>9.4. {{ __('terms-and-policies.cg-9.4-content') }}</p>
                    <h3>9.5. {{ __('terms-and-policies.cg-9.5-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-9.5-content') }}</p>
                    <h2 id="title-conditions-generales-10">10. {{ __('terms-and-policies.cg-10-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-10-content') }}</p>
                    <h2 id="title-conditions-generales-11">11. {{ __('terms-and-policies.cg-11-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-11-content') }}</p>
                    <h2 id="title-conditions-generales-12">12. {{ __('terms-and-policies.cg-12-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-12-content') }}</p>
                    <h2 id="title-conditions-generales-13">13. {{ __('terms-and-policies.cg-13-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-13-content') }}</p>
                    <h2 id="title-conditions-generales-14">14. {{ __('terms-and-policies.cg-14-heading') }}</h2>
                    <p>14.1. {{ __('terms-and-policies.cg-14.1-content') }}</p>
                    <p>14.2. {{ __('terms-and-policies.cg-14.2-content') }}</p>
                    <h2 id="title-conditions-generales-15">15. {{ __('terms-and-policies.cg-15-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-15-content') }}</p>
                    <div class="download-link">
                        <a href="{{ Storage::url('uploads/20190305-CG-FR-Version-03-2019.pdf') }}"><i class="fas fa-file-pdf"></i> {{ __('terms-and-policies.cd-pdf-download') }}</a>
                    </div>
                </div>
                <div id="text-politique-de-confidentialite">
                    <h2 id="title-politique-de-confidentialite-1">{{ __('terms-and-policies.confidentialite-apps-1-heading') }}</h2>
                    <p>1.1. {{ __('terms-and-policies.confidentialite-apps-1.1-content') }}</p>
                    <p>1.2. {!! __('terms-and-policies.confidentialite-apps-1.2-content') !!}</p>
                    <h2 id="title-politique-de-confidentialite-2">{{ __('terms-and-policies.confidentialite-apps-2-heading') }}</h2>
                    <p>{{ __('terms-and-policies.confidentialite-apps-2-content') }}</p>
                    <h2 id="title-politique-de-confidentialite-3">{{ __('terms-and-policies.confidentialite-apps-3-heading') }}</h2>
                    <p>{{ __('terms-and-policies.confidentialite-apps-3-content') }}</p>
                    <h2 id="title-politique-de-confidentialite-4">{{ __('terms-and-policies.confidentialite-apps-4-heading') }}</h2>
                    <p>{{ __('terms-and-policies.confidentialite-apps-4-content') }}</p>
                    <h2 id="title-politique-de-confidentialite-5">{{ __('terms-and-policies.confidentialite-apps-5-heading') }}</h2>
                    <p><strong>{{ __('terms-and-policies.confidentialite-apps-5.1-heading') }}</strong> {{ __('terms-and-policies.confidentialite-apps-5.1-content') }}</p>
                    <p><strong>{{ __('terms-and-policies.confidentialite-apps-5.2-heading') }}</strong> {{ __('terms-and-policies.confidentialite-apps-5.2-content') }}</p>
                    <p><strong>{{ __('terms-and-policies.confidentialite-apps-5.3-heading') }}</strong> {{ __('terms-and-policies.confidentialite-apps-5.3-content') }}</p>
                    <p><strong>{{ __('terms-and-policies.confidentialite-apps-5.4-heading') }}</strong> {{ __('terms-and-policies.confidentialite-apps-5.4-content') }}</p>
                    <p><strong>{{ __('terms-and-policies.confidentialite-apps-5.5-heading') }}</strong> {{ __('terms-and-policies.confidentialite-apps-5.5-content') }}</p>
                    <h2 id="title-politique-de-confidentialite-6">{{ __('terms-and-policies.confidentialite-apps-6-heading') }}</h2>
                    <p>{{ __('terms-and-policies.confidentialite-apps-6-content') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SCOLLSPY -->
<script> $('body').scrollspy({target: "#terms-and-policies-nav", offset: 70});</script>

<script>
$(window).on('load', function() {
    // ACTIVE ACCORDION CARD
    $('.collapse').on('show.bs.collapse', function () {
        $(this).parent().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).parent().removeClass('active');
    });

    // PANEL CONTENT
    let a = document.getElementById('conditions-generales-btn');
    let b = document.getElementById('politique-de-confidentialite-btn');
    let c = document.getElementById('text-conditions-generales');
    let d = document.getElementById('text-politique-de-confidentialite');
    a.addEventListener('click', function() {
        if ($( this ).hasClass('collapsed')){
            c.style.display = '';
            d.style.display = 'none';
            $('html,body').scrollTop(0);
            if(window.location.pathname != '/terms-of-services-development') {
                window.history.pushState(null, "terms-of-services-development", '/terms-of-services-development');
            }
        }
    }, false);
    b.addEventListener('click', function() {
        if ($( this ).hasClass('collapsed')){
            c.style.display = 'none';
            d.style.display = '';
            $('html,body').scrollTop(0);
            if(window.location.pathname != '/privacy-policy-apps') {
                window.history.pushState(null, "privacy-policy-apps", '/privacy-policy-apps');
            }
        }
    }, false);

    switch(@json($pathname)) {
        case 'terms-of-services-development':
        a.click()
        break;
        case 'privacy-policy-apps':
        b.click()
        break;
        default:
        a.click();
    }
});
</script>
@endsection
