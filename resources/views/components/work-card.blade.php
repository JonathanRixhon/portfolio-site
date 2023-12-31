<article class="work-card">
    <h3 class="work-card__title">{{ $work->name }}</h3>
    <dl>
        <dt class="sro">Disciplines involved</dt>
        @foreach ($work->disciplines as $discipline)
            <dd class="work-card__definition">{{ $discipline->name }}</dd>
        @endforeach
    </dl>
    <figure class="work-card__fig">
        <img src="{{ $work->getFirstMediaUrl('thumbnails') }}" alt="Image representing the {{ $work->name }} work">
    </figure>
</article>
