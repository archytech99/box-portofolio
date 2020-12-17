@extends('master.main')

@section('title', 'Box personal portfolio Template')

@section('content')

    <!-- top-bar -->
    <div class="top-bar">
        <h1>project title</h1>
        <p><a href="{{ route('master.home') }}">Home</a> / <a href="{{ route('master.portfolio') }}">portfolio</a> / project title</p>
    </div>
    <!-- end top-bar -->

    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-12">
            <img src="http://placehold.it/1920x1080" alt="" class="img-responsive" />
            <div class="h-30"></div>
        </div>

        <div class="col-md-12">
            <h3 class="text-uppercase">project title</h3>
            <h5>Creative & Lorem ipsum dolor sit amet</h5>
            <div class="h-30"></div>
        </div>

        <div class="col-md-9">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. Tecum optime, deinde etiam cum mediocri amico. Et nemo nimium beatus est; Ac ne plura complectar-sunt enim innumerabilia-, bene laudata virtus voluptatis aditus ultimum cum ultimo sapientiae Et nemo nimium beatus est </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. Tecum optime, deinde etiam cum mediocri amico. Et nemo nimium beatus est; Ac ne plura complectar-sunt enim innumerabilia </p>
        </div>

        <div class="col-md-3">
            <ul class="cat-ul">
                <li><i class="ion-ios-circle-filled"></i> Design</li>
                <li><i class="ion-ios-circle-filled"></i> consectetur adipiscing</li>
                <li><i class="ion-ios-circle-filled"></i> et gubernationis</li>
                <li><i class="ion-ios-circle-filled"></i> Aliter enim nosmet</li>
            </ul>
            <div class="h-10"></div>
            <h4>Share</h4>
            <ul class="social-ul">
                <li class="box-social"><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#"><i class="ion-social-dribbble"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end main-container -->

@endsection
