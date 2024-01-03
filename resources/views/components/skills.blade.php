@if ($disciplines->count())
    <section class="skills wrapper" id="skills">
        <div class="skills__container">
            <h2 class="skills__title">{{ $content['title'] }}</h2>
            <div class="skills__discipline-links">
                @foreach ($disciplines as $discipline)
                    <a href="#{{ $discipline->slug }}" class="skills__discipline-link {{ $loop->first ? 'skills__discipline-link--active' : ''}}">{{ $discipline->name }}</a>
                @endforeach
            </div>

            <div class="skills__disciplines">
                @foreach ($disciplines as $discipline)
                    @php
                        $firstDiscipline = $loop->first;
                    @endphp
                    <article class="skills__discipline {{ $firstDiscipline ? 'skills__discipline--active' : ''}}" id="{{ $discipline->slug }}">
                        <h3 class="skills__discipline-title">{{ $discipline->name }}</h3>
                        <ul class="skills__technologies">
                            @foreach ($discipline->technologies as $technology)
                                <li class="skills__technology">
                                    <a href="{{ $technology->url }}" class="skills__technology-link" target="_blank" rel="noopener noreferrer" tabindex="{{ $firstDiscipline ? 0 : -1 }}">
                                        {{ $technology->name }}
                                    </a>
                                    <p aria-hidden="true" class="skills__technology-title">{{ $technology->name }}</p>
                                    <img src="{{ $technology->getFirstMediaUrl('thumbnails') }}" class="skills__technology-image" alt="{{ $technology->name }} logo">
                                </li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>

    </section>
@endif
