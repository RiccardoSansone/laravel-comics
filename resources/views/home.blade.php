@extends('layout.app')

@section('page-title', 'home')

@section('content')

<section class="dc_jumbotron">
</section>
<!-- /jumbotron -->

<section class="dc_cards">
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-2">
                <div class="card border-0">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h6 class="pt-2 text-uppercase font-weight-bold fs-6">{{$comic['title']}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection