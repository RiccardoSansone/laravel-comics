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
                <div id="card_dc" class="card border-0">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h6 class="pt-2 text-uppercase font-weight-bold fs-6">{{$comic['title']}}</h6>
                </div>
            </div>
            @endforeach
        </div>
        <div class="current_series text-uppercase text-white bg-primary text-center">
            current series
        </div>
    </div>
</section>

<section class="dc_info d-flex justify-content-between align-items-center bg-primary">
    <div class="container d-flex align-items-center h-100 w-100 justify-content-between">
        <div class="d-flex align-items-center h-100 gap-2">
            <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
            <span class="text-white fw-bold">DIGITAL COMICS</span>
        </div>
        <div class="d-flex align-items-center h-100 gap-2">
            <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
            <span class="text-white fw-bold">DC MERCHANDISE</span>
        </div>
        <div class="d-flex align-items-center h-100 gap-2">
            <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
            <span class="text-white fw-bold">SUBSCRIPTIONS</span>
        </div>
        <div class="d-flex align-items-center h-100 gap-2">
            <img style="height: 50px; object-fit:contain" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
            <span class="text-white fw-bold">COMIC SHOP LOCATOR</span>
        </div>
        <div class="d-flex align-items-center h-100 gap-2">
            <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
            <span class="text-white fw-bold">DC POWER VISA</span>
        </div>
    </div>
</section>

@endsection