<article class="work-card">
    <h3 class="work-card__title">{{ $work->name }}</h3>
    <a href="{{ route('work', $work) }}" class="work-card__link">See the work</a>
    <dl class="work-card__disciplines">
        <dt class="sro">Disciplines involved</dt>
        @foreach ($work->disciplines as $discipline)
            <dd class="work-card__discipline">{{ $discipline->name }}</dd>
        @endforeach
    </dl>
    <figure class="work-card__fig">
        <img width="664" height="378" class="work-card__img" src="{{ $work->getFirstMediaUrl('thumbnails') }}" alt="Image representing the {{ $work->name }} work">
    </figure>
</article>
