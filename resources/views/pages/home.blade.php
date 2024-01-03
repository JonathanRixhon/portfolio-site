@extends('layout')

@section('content')
    <x-hero :content="$page->content['hero']" />
    <x-featured-works :content="$page->content['works']" />
    <x-about :content="$page->content['about']" />
    <x-skills :content="$page->content['skills']" />
    <x-contact :content="$page->content['contact']" />
    <x-modal toggle="contact-form">
        <x-contact-form modifier="contact-form--modal" />
    </x-modal>
@endsection
