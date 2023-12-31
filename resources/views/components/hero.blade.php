<section class="hero">
    <div class="hero__text">
        <h2 class="hero__title">
            <span class="hero__small">{{ $content['welcome'] }}</span>
            <span class="hero__big">{{ $content['job'] }}</span>
        </h2>
        <p class="hero__subtitle">{{ $content['subtitle'] }}</p>
    </div>
    <figure class="hero__fig">
        <img src="{{ asset(Storage::url($content['image'])) }}" alt="Image of Jonathan">
    </figure>
</section>
