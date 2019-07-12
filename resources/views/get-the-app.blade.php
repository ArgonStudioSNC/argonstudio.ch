@extends('layouts/default')

@section('pageTitle', 'Get the app !')

@section('content')
    <script type="text/javascript">
    if(navigator.userAgent.match(/Android/i)){
      window.location.href='https://play.google.com/store/apps/details?id=com.ThirdDimensionMedia.MixedReality';
    }
    else if(navigator.userAgent.match(/iPhone/i)){
      window.location.href='https://itunes.apple.com/us/app/3dm-xr-mixed-reality/id1437366723?l=fr&ls=1&mt=8';
    }
    else {
      document.write('<p>Utilisez un mobile</p>');
    }
    </script>
@endsection
