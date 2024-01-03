<footer class="footer wrapper">
    <div class="footer__container">
        <div class="footer__header">
            <h2 class="sro">Footer</h2>
            <a href="{{ route('home') }}" class="footer__home-link">Jonathan Rixhon</a>
            <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}" class="footer__mailto">{{ env('MAIL_FROM_ADDRESS') }}</a>
        </div>
        <div class="footer__links">
            <a href="{{ route('home') }}" class="footer__link">Home</a>
            <a href="{{ route('works') }}" class="footer__link">Works</a>
            <a href="{{ route('contact') }}"  data-modal="contact-form" class="footer__link">Contact</a>
            {{-- <a href="#" class="footer__link footer__link--icon">Linkedin</a>
            <a href="#" class="footer__link footer__link--icon">Github</a> --}}
        </div>
    </div>
</footer>
