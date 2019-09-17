@extends('layouts/master')

@section('pageTitle', 'Terms and Policies')

@section('content')
<div class="main" role="main">
    <div class="terms-and-policies-heading text-center">
        <h1 class='slider' style="opacity: 0;transform: translateY(30%);-webkit-transform: translateY(30%);">{{ __('terms-and-policies.heading') }}</h1>
    </div>
    <div class="container terms-and-policies">
        <div class="row">
            <div class="d-none d-md-block col-md-4">
                <nav id='navbar' class="navbar-light position-sticky">
                    <div id="terms-and-policies-accordion" class="accordion">
                        <div id="conditions-generales" class="card">
                            <div id="conditions-generales-heading" class="card-header">
                                <button id="conditions-generales-btn" class="collapsed" aria-controls="conditions-generales-collapse" aria-expanded="false" data-target="#conditions-generales-collapse" data-toggle="collapse" type="button">{{ __('terms-and-policies.cg-heading') }}</button>
                            </div>
                            <div id="conditions-generales-collapse" class="collapse" data-parent="#terms-and-policies-accordion" data-text-target="conditions-generales">
                                <div class="card-body">
                                    <ul>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-1">{{ __('terms-and-policies.cg-1-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-2">{{ __('terms-and-policies.cg-2-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-3">{{ __('terms-and-policies.cg-3-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-4">{{ __('terms-and-policies.cg-4-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-5">{{ __('terms-and-policies.cg-5-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-6">{{ __('terms-and-policies.cg-6-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-7">{{ __('terms-and-policies.cg-7-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-8">{{ __('terms-and-policies.cg-8-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-9">{{ __('terms-and-policies.cg-9-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-10">{{ __('terms-and-policies.cg-10-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-11">{{ __('terms-and-policies.cg-11-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-12">{{ __('terms-and-policies.cg-12-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-13">{{ __('terms-and-policies.cg-13-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-14">{{ __('terms-and-policies.cg-14-heading') }}</a></li>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-conditions-generales-15">{{ __('terms-and-policies.cg-15-heading') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div id="politique-de-confidentialite" class="card">
                            <div id="politique-de-confidentialite-heading" class="card-header">
                                <button id="politique-de-confidentialite-btn" class="collapsed" aria-controls="politique-de-confidentialite-collapse" aria-expanded="false" data-target="#politique-de-confidentialite-collapse" data-toggle="collapse" type="button">{{ __('terms-and-policies.confidentialité-heading') }}</button>
                            </div>
                            <div id="politique-de-confidentialite-collapse" class="collapse" data-parent="#terms-and-policies-accordion" data-text-target="politique-de-confidentialite">
                                <div class="card-body">
                                    <ul>
                                        <li><a class="nav-link smooth-scrolling silent" href="#title-politique-de-confidentialite-1">{{ __('terms-and-policies.confidentialité-1-heading') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </nav>
            </div>
            <div class="col-md-8">
                <div id="text-conditions-generales">
                    <h2 id="title-conditions-generales-1">1 {{ __('terms-and-policies.cg-1-heading') }}</h2>
                    <p>1.1 {!! __('terms-and-policies.cg-1.1-content') !!}</p>
                    <p>1.2 {{ __('terms-and-policies.cg-1.2-content') }}</p>
                    <h2 id="title-conditions-generales-2">2 {{ __('terms-and-policies.cg-2-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-2-content') }}</p>
                    <h2 id="title-conditions-generales-3">3 {{ __('terms-and-policies.cg-3-heading') }}</h2>
                    <p>3.1 {{ __('terms-and-policies.cg-3.1-content') }}</p>
                    <p>3.2 {{ __('terms-and-policies.cg-3.2-content') }}</p>
                    <h2 id="title-conditions-generales-4">4 {{ __('terms-and-policies.cg-4-heading') }}</h2>
                    <h3>4.1 {{ __('terms-and-policies.cg-4.1-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.1-content') }}</p>
                    <h3>4.2 {{ __('terms-and-policies.cg-4.2-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.2-content') }}</p>
                    <h3>4.3 {{ __('terms-and-policies.cg-4.3-heading') }}</h3>
                    <p>4.3.1 {{ __('terms-and-policies.cg-4.3.1-content') }}</p>
                    <p>4.3.2 {{ __('terms-and-policies.cg-4.3.2-content') }}</p>
                    <h3>4.4 {{ __('terms-and-policies.cg-4.4-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.4-content') }}</p>
                    <h3>4.5 {{ __('terms-and-policies.cg-4.5-heading') }}</h3>
                    <p>4.5.1 {{ __('terms-and-policies.cg-4.5.1-content') }}</p>
                    <p>4.5.2 {{ __('terms-and-policies.cg-4.5.2-content') }}</p>
                    <p>4.5.3 {{ __('terms-and-policies.cg-4.5.3-content') }}</p>
                    <p>4.5.4 {{ __('terms-and-policies.cg-4.5.4-content') }}</p>
                    <h3>4.6 {{ __('terms-and-policies.cg-4.6-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.6-content') }}</p>
                    <h3>4.7 {{ __('terms-and-policies.cg-4.7-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-4.7-content') }}</p>
                    <h2 id="title-conditions-generales-5">5 {{ __('terms-and-policies.cg-5-heading') }}</h2>
                    <p>5.1 {{ __('terms-and-policies.cg-5.1-content') }}</p>
                    <p>5.2 {{ __('terms-and-policies.cg-5.2-content') }}</p>
                    <h2 id="title-conditions-generales-6">6 {{ __('terms-and-policies.cg-6-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-6-content') }}</p>
                    <h2 id="title-conditions-generales-7">7 {{ __('terms-and-policies.cg-7-heading') }}</h2>
                    <p>7.1 {{ __('terms-and-policies.cg-7.1-content') }}</p>
                    <p>7.2 {{ __('terms-and-policies.cg-7.2-content') }}</p>
                    <h2 id="title-conditions-generales-8">8 {{ __('terms-and-policies.cg-8-heading') }}</h2>
                    <p>8.1 {{ __('terms-and-policies.cg-8.1-content') }}</p>
                    <p>8.2 {{ __('terms-and-policies.cg-8.2-content') }}</p>
                    <p>8.3 {{ __('terms-and-policies.cg-8.3-content') }}</p>
                    <h2 id="title-conditions-generales-9">9 {{ __('terms-and-policies.cg-9-heading') }}</h2>
                    <p>9.1 {{ __('terms-and-policies.cg-9.1-content') }}</p>
                    <h3>9.2 {{ __('terms-and-policies.cg-9.2-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-9.2-content') }}</p>
                    <p>9.3 {{ __('terms-and-policies.cg-9.3-content') }}</p>
                    <p>9.4 {{ __('terms-and-policies.cg-9.4-content') }}</p>
                    <h3>9.5 {{ __('terms-and-policies.cg-9.5-heading') }}</h3>
                    <p>{{ __('terms-and-policies.cg-9.5-content') }}</p>
                    <h2 id="title-conditions-generales-10">10 {{ __('terms-and-policies.cg-10-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-10-content') }}</p>
                    <h2 id="title-conditions-generales-11">11 {{ __('terms-and-policies.cg-11-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-11-content') }}</p>
                    <h2 id="title-conditions-generales-12">12 {{ __('terms-and-policies.cg-12-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-12-content') }}</p>
                    <h2 id="title-conditions-generales-13">13 {{ __('terms-and-policies.cg-13-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-13-content') }}</p>
                    <h2 id="title-conditions-generales-14">14 {{ __('terms-and-policies.cg-14-heading') }}</h2>
                    <p>14.1 {{ __('terms-and-policies.cg-14.1-content') }}</p>
                    <p>14.2 {{ __('terms-and-policies.cg-14.2-content') }}</p>
                    <h2 id="title-conditions-generales-15">15 {{ __('terms-and-policies.cg-15-heading') }}</h2>
                    <p>{{ __('terms-and-policies.cg-15-content') }}</p>
                </div>
                <div id="text-politique-de-confidentialite">
                    <h2 id="title-politique-de-confidentialite-0">{{ __('terms-and-policies.confidentialité-1-heading') }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let cgBtn = document.getElementById('conditions-generales-btn');
let policyBtn = document.getElementById('politique-de-confidentialite-btn');
let cgElem = document.getElementById('text-conditions-generales');
let policyElem = document.getElementById('text-politique-de-confidentialite');

window.onload = init;
function init() {
    cgBtn.addEventListener('click', showCG);
    policyBtn.addEventListener('click', showPolicy);
    window.location.hash == '#privacy-policy' ? policyBtn.click() : cgBtn.click();
}

function showCG(){
    cgElem.style.display = '';
    policyElem.style.display = 'none';
}
function showPolicy(){
    cgElem.style.display = 'none';
    policyElem.style.display = '';
}
</script>
@endsection
