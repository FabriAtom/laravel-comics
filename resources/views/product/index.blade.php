@extends('app')

@section('metaTitle','comics')

@section('card')

<article class="card">

   <div class="card_wrapper">
    @foreach ($cards as $key => $card)
    <div class="single">
        <a href="{{ route('fumetto',['index' =>$loop->index])}}">
            <img src="{{$card['thumb']}}" alt="">
            <h2>{{$card['title']}}</h2>
        </a> 
    </div>
     @endforeach 
   </div>

</article>

@endsection