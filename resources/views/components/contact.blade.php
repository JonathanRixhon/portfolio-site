<section class="contact">
    <h2 class="contact__title">{{ $content['title'] }}</h2>
    <div class="contact__body">
        {{ $content['body'] }}
    </div>

    <a href="{{ route('contact') }}" class="contact__link">{{ $content['cta'] }}</a>
</section>
