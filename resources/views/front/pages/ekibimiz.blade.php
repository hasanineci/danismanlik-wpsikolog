@extends('front.index')
@section('title') Ekibimiz @endsection
@section('header-ekibimiz-active') active @endsection

@section('content')


<main>

    <!-- page title area start -->
    @include('front.ekler.kurumsal-breadcrump')
    <!-- page title area end -->

    <!-- team alanı start -->
    @include('front.ekler.ekip')
    <!-- team alanı end -->

    <!-- referanslar alanı start -->
    @include('front.ekler.referanslar')
    <!-- referanslar alanı end -->

</main>

@endsection