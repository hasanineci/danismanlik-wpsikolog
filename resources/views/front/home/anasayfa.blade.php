@extends('front.index')
@section('title') Yüzyüze terapi ve Online Terapi Merkezi @endsection
@section('header-home-active') active @endsection

@section('content')

@include('front.sidebar.sidebar')
@include('front.ekler.hizmetler')
@include('front.ekler.kisa-hakkimda')
@include('front.ekler.kisa-servislerimiz')
@include('front.ekler.psikolog')
@include('front.ekler.randevu-al')
@include('front.ekler.referanslar')
@include('front.ekler.kisa-iletisim')
@include('front.ekler.sertifikalarimiz')





@endsection