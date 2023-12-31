@extends('layout')

@section('content')
    <x-hero :hero="$page->content['hero']" />
    <x-featured-works :works="$page->content['works']"/>
    <x-about :about="$page->content['about']"/>
@endsection
