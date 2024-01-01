<section class="hero wrapper">
    <div class="hero__container">
        <div class="hero__text">
            <h2 class="hero__title">
                <span class="hero__small">{{ $content['welcome'] }}</span>
                <span class="hero__big">{{ $content['job'] }}</span>
            </h2>
            <p class="hero__subtitle">{{ $content['subtitle'] }}</p>
            <a href="#" class="button">{{ $content['cta'] }}</a>
        </div>
        <figure class="hero__fig">
            <img class="hero__img" src="{{ asset(Storage::url($content['image'])) }}" alt="Image of Jonathan">
        </figure>
    </div>
</section>
