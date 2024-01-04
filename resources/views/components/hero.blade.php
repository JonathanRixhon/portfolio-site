<section class="hero wrapper">
    <div class="hero__container">
        <div class="hero__text">
            <h2 class="hero__title">
                <span class="hero__small">{!! strip_tags(Str::markdown($content['welcome']), ['strong']) !!}</span>
                <span class="hero__big">{{ $content['job'] }}</span>
            </h2>
            <p class="hero__subtitle">{{ $content['subtitle'] }}</p>
            <a href="{{ route('contact') }}" class="button" data-modal="contact-form">{{ $content['cta'] }}</a>
        </div>
        <figure class="hero__fig">
            @if (isset($content['image']))
                <img class="hero__img" src="{{ asset(Storage::url($content['image'])) }}" alt="Image of Jonathan">
            @endif
        </figure>
    </div>
</section>
