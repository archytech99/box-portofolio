@extends('master.main', ['mkey'=> 'services'])

@section('title', 'Box personal portfolio Template')

@section('content')

    <!-- top bar -->
    <div class="top-bar">
        <h1>services</h1>
        <p><a href="{{ route('master.home') }}">Home</a> / Services</p>
    </div>
    <!-- end top bar -->

    <!-- main container -->
    <div class="container main-container">
        <div class="clearfix">

            <!-- service-box -->
            <div class="col-md-4 service-box">
                <i class="ion-android-favorite-outline size-50"></i>
                <h3>Responsive Design</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4 service-box">
                <i class="ion-android-options size-50"></i>
                <h3>Easy Customization</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-android-checkmark-circle size-50"></i>
                <h3>Creative Design</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-ios-pulse-strong size-50"></i>
                <h3>user friendly</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-earth size-50"></i>
                <h3>fully customizible</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-speedometer size-50"></i>
                <h3>retina ready</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

        </div>
    </div>
    <!-- end main container -->

@endsection
