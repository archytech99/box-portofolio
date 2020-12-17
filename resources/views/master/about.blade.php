@extends('master.main', ['mkey'=> 'about'])

@section('title', 'Box personal portfolio Template')

@section('content')

    <!-- Top bar -->
    <div class="top-bar">
        <h1>About Me</h1>
        <p><a href="{{ route('master.home') }}">Home</a> / About me</p>
    </div>
    <!-- end Top bar -->

    <!-- Main container -->
    <div class="container main-container clearfix">
        <div class="col-md-6">
            <img src="http://placehold.it/1200x800" class="img-responsive" alt="" />
        </div>
        <div class="col-md-6">
           <h3 class="uppercase">About Me </h3>
           <h5>Creative & Lorem ipsum dolor sit amet</h5>
           <div class="h-30"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. Tecum optime, deinde etiam cum mediocri amico. Et nemo nimium beatus est; Ac ne plura complectar-sunt enim innumerabilia-, bene laudata virtus voluptatis aditus </p>

            <p>Tum ille: Tu autem cum ipse tantum librorum habeas, quos hic tandem requiris? Esse enim quam vellet iniquus iustus poterat inpune. </p>
            <div class="h-10"></div>
            <ul class="social-ul">
        @php($box = Insight::BOX)
        @foreach ($box as $data)
        <li class="box-social"><a href="{{ url($data[0]) }}" target="_blank"><i class="ion-social-{{ $data[1] }}"></i></a></li>
        @endforeach
    </ul>

        </div>
    </div>
    <!-- end Main container -->

@endsection
