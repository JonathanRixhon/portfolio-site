<section class="contact-layout wrapper">
    <div class="contact-layout__container">
        <h2 class="contact-layout__title">{{ $content['title'] }}</h2>
        <div class="contact-layout__body wysiwyg">
            {{ $content['body'] }}
        </div>
        <a href="{{ route('contact') }}" class="button button--big" data-modal="contact-form">{{ $content['cta'] }}</a>
    </div>
</section>
