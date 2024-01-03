@extends('layout')

@section('content')
    <div class="wrapper">
        <x-contact-form :contact="$page->content['form']" />
    </div>
@endsection
