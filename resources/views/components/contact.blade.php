<section class="contact wrapper">
    <div class="contact__container">
        <h2 class="contact__title">{{ $content['title'] }}</h2>
        <div class="contact__body wysiwyg">
            {{ $content['body'] }}
        </div>
        <a href="{{ route('contact') }}" class="button button--big" data-modal="contact-form">{{ $content['cta'] }}</a>
    </div>
</section>
