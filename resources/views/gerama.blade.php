<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Argon Studio - Gerama 360&deg;</title>
    <meta name="description" content="360&deg; Image Gallery - A-Frame">
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@5/dist/aframe-event-set-component.min.js"></script>
    <script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
    <script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>
    <script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>

    <!-- Image link template to be reused. -->
    <script id="link" type="text/html">
        <a-entity class="link"
        geometry="primitive: plane; height: 1; width: 1"
        material="shader: flat; src: ${thumb}"
        event-set__mouseenter="scale: 1.2 1.2 1"
        event-set__mouseleave="scale: 1 1 1"
        event-set__click="_target: #image-360; _delay: 300; material.src: ${src}"
        proxy-event="event: click; to: #image-360; as: fade"></a-entity>
    </script>
    
</head>
<body>
    <a-scene vr-mode-ui="false">
        <a-assets>
            <img id="25P" crossorigin="anonymous" src="storage/gerama/pano25p.jpg">
            <img id="35P" crossorigin="anonymous" src="storage/gerama/pano35p.jpg">
            <img id="45P" crossorigin="anonymous" src="storage/gerama/pano45p.jpg">
            <img id="55P" crossorigin="anonymous" src="storage/gerama/pano55p.jpg">
            <img id="CHA" crossorigin="anonymous" src="storage/gerama/panocha.jpg">
            <img id="ENF" crossorigin="anonymous" src="storage/gerama/panoenf.jpg">
            <img id="BAI" crossorigin="anonymous" src="storage/gerama/panobai.jpg">
            <img id="DOU" crossorigin="anonymous" src="storage/gerama/panodou.jpg">
            <img id="25P-thumb" crossorigin="anonymous" src="storage/gerama/thumb_25p.jpg">
            <img id="35P-thumb" crossorigin="anonymous" src="storage/gerama/thumb_35p.jpg">
            <img id="45P-thumb" crossorigin="anonymous" src="storage/gerama/thumb_45p.jpg">
            <img id="55P-thumb" crossorigin="anonymous" src="storage/gerama/thumb_55p.jpg">
            <img id="CHA-thumb" crossorigin="anonymous" src="storage/gerama/thumb_cha.jpg">
            <img id="ENF-thumb" crossorigin="anonymous" src="storage/gerama/thumb_enf.jpg">
            <img id="BAI-thumb" crossorigin="anonymous" src="storage/gerama/thumb_bai.jpg">
            <img id="DOU-thumb" crossorigin="anonymous" src="storage/gerama/thumb_dou.jpg">

        </a-assets>

        <!-- 360-degree image. -->
        <a-sky id="image-360" radius="10" src="#25P"
        animation__fade="property: components.material.material.color; type: color; from: #FFF; to: #000; dur: 300; startEvents: fade"
        animation__fadeback="property: components.material.material.color; type: color; from: #000; to: #FFF; dur: 300; startEvents: animationcomplete__fade"></a-sky>

        <!-- Image links. -->
        <a-entity id="links" layout="type: line; margin: 1.5" position="-5 -3 -5 -7">
        <a-entity template="src: #link" data-src="#25P" data-thumb="#25P-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#35P" data-thumb="#35P-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#45P" data-thumb="#45P-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#55P" data-thumb="#55P-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#CHA" data-thumb="#CHA-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#ENF" data-thumb="#ENF-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#BAI" data-thumb="#BAI-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#DOU" data-thumb="#DOU-thumb"></a-entity>
    </a-entity>

    <!-- Camera + cursor. -->
    <a-entity camera look-controls>
        <a-cursor
        id="cursor"
        animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
        animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
        event-set__mouseenter="_event: mouseenter; color: black"
        event-set__mouseleave="_event: mouseleave; color: #fa7268"
        raycaster="objects: .link"
        material="color: #fa7268; shader: flat"></a-cursor>
    </a-entity>
</a-scene>
</body>
</html>
