@extends('layouts.app')

@section('metaTitle')
    prima section - home page
@endsection

@section('content')

    @foreach($fumetti as $fumetto) 
        <a href=""> <img src="{{$fumetto['thumb']}}" alt=""></a>
    @endforeach
@endsection
