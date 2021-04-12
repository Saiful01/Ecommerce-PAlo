@extends('layouts.common')
@section('title','Home')

@section('content')

 @include('common.home.slider')
 @include('common.home.brand')
 @include('common.home.promotions')
 @include('common.home.product')
 @include('common.home.news')
 @include('common.home.video')



@endsection
