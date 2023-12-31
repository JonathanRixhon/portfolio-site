<section class="hero">
    <div class="hero__text">
        <h2 class="hero__title">
            <span class="hero__small">{{ $hero['welcome'] }}</span>
            <span class="hero__big">{{ $hero['job'] }}</span>
        </h2>
        <p class="hero__subtitle">{{ $hero['subtitle'] }}</p>
    </div>
    <figure class="hero__fig">
        <img src="{{ asset(Storage::url($hero['image'])) }}" alt="Image of Jonathan">
    </figure>
</section>
