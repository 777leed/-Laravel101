@extends('layouts.layout')
@section('content')
<div class="navigation">
        <p class="navItem">CRASHED</p>
        <img class="navItem" src="storage/image/menu.png" alt="menu" height="30" width="30">
    </div>
    <div class="whl">
        <div class="header">Hey There, Welcome Again</div>
        <div class="banner">
            <div class="bannerItem">
                <div class="box"> <img src="storage/image/play-button.png" alt="play-button" height="90" width="90"></div>
                <div class="box_title">
                    Resume {{$id}}
                </div>
               
            </div>
            <div class="bannerItem">
                <div class="box">  <img src="storage/image/compass.png" alt="compass" height="90" width="90"></div>
                <div class="box_title">
                    Explore
                </div>
              
            </div>
            <div class="bannerItem">
                <div class="box"> <img src="storage/image/geometrical.png" alt="Library" height="90" width="90">
                   </div>
                   <div class="box_title">
                    Library
                </div>
              
            </div>
        </div>
    </div>
  
       
@endsection  

