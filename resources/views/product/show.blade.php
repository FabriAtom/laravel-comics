@extends('app')

@section('metaTitle',$comics['title'])

@section('card')

<div class="wrapper">
    <div class="container">
        <img src="{{$comics['thumb']}}" alt="">
    <h2>{{$comics['title']}}</h2>
    <div class="text">
        <p>{{$comics['price']}}</p>
        <p>{{$comics['description']}}</p>
    </div>   
    </div>
    
</div>
@endsection