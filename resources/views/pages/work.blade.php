@extends('layout')

@section('content')
    <section class="work wrapper">
        <div class="work__container">
            <div class="work__sidebar">
                <h2 class="work__title">{{ $work->name }}</h2>
                <p class="work__description">{{ $work->description }}</p>
                @if ($work->technologies->count())
                    <h3 class="sro">Technologies involved</h3>
                    <ul class="work__technologies">
                        @foreach ($work->technologies as $technology)
                            <li class="work__technology">{{ $technology->name }}</li>
                        @endforeach
                    </ul>
                @endif

                @if ($work->url)
                    <a href="{{ $work->url }}" target="_blank" class="button">Check online</a>
                @endif
            </div>
            <div class="work__content-wrapper">
                <figure class="work__fig">
                    <img class="work__img" src="{{ $work->getFirstMediaUrl('thumbnails') }}" alt="Image representing the {{ $work->name }} work">
                </figure>
                <div class="work__content wysiwyg">
                    {!! $work->body !!}
                </div>
            </div>
        </div>
        <div class="work__back-wrapper">
            <a href="{{ url()->previous() }}" class="work__back">Go back</a>
        </div>

    </section>
@endsection
