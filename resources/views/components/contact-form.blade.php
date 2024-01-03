<form action="" class="contact-form {{ $modifier ?? '' }}">
    <h2 class="contact-form__title">Contact me</h2>
    <p class="contact-form__subtitle">I will get back to you as quickly as possible.</p>
    <x-input type="text" name="name" placeholder="John Doe">Full name</x-input>
    <x-input type="email" name="email" placeholder="hello@example.be">E-mail address</x-input>
    <x-input type="textarea" name="email" placeholder="hello@example.be">E-mail address</x-input>
    <button class="button">Contact me</button>
</form>
