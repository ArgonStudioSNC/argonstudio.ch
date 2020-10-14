@extends('layouts/master')

@section('pageTitle', 'Get the app !')

@section('content')
    <script type="text/javascript">
    if(navigator.userAgent.match(/Android/i)){
      window.location.href='https://play.google.com/store/apps/details?id=com.argonstudio.xr';
    }
    else if(navigator.userAgent.match(/iPhone/i)){
      window.location.href='https://apps.apple.com/ch/app/argon-xr-mixed-reality/id1530730395';
    }
    else {
      document.write('<p>Utilisez un mobile</p>');
    }
    </script>
@endsection
