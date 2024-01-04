@extends('layout')

@section('content')
    <section class="works wrapper">
        <h2 class="works__title">My works</h2>
        @foreach ($works as $work)
            <x-work-card :$work />
        @endforeach

        {{ $works->links() }}
    </section>
@endsection
