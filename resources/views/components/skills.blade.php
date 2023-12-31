<section class="skills">
    <h2 class="skills__title">{{ $content['title'] }}</h2>
    @foreach ($disciplines as $discipline)
        <a href="{{ $discipline->slug }}" class="skills__discipline-link">{{ $discipline->name }}</a>
    @endforeach

    @foreach ($disciplines as $discipline)
        <article class="skills__discipline" id="{{ $discipline->slug }}">
            <h3 class="skills__discipline-title">{{ $discipline->name }}</h3>
            <ul class="skills__technologies">
                @foreach ($discipline->technologies as $technology)
                    <li class="skills__technology">
                        <a href="{{ $technology->url }}" class="skills__technology-link" target="_blank" rel="noopener noreferrer">
                            {{ $technology->name }}
                        </a>
                        <img src="{{ $technology->getFirstMediaUrl('thumbnails') }}" class="skills__technology-image" alt="{{ $technology->name }} logo">
                    </li>
                @endforeach
            </ul>
        </article>
    @endforeach

</section>
