@extends('layouts.app')

@section('title', 'Welcome')

<style type="text/css">
    /* Show it is fixed to the top */
    body {
    min-height: 75rem;
    padding-top: 2.5rem;
    }

    * {
    box-sizing: border-box;
    }

    .slider {
    width: 70%;
    margin: 100px auto;
    }

    .slick-slide {
    margin: 0px 10px;
    }

    .slick-slide img {
    width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
    color: rgb(92, 5, 114);
    }

    .slick-slide {
    transition: all ease-in-out .3s;
    opacity: .2;
    }
    
    .slick-active {
    opacity: .5;
    }

    .slick-current {
    opacity: 1;
    }
</style>

@section('content')



@endsection