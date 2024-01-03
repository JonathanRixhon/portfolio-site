<form action="{{ route('contact.send') }}" method="POST" class="contact-form {{ $modifier ?? '' }}">
    <h2 class="contact-form__title">{{ $contact['title'] }}</h2>
    <p class="contact-form__subtitle">{{ $contact['subtitle'] }}</p>
    <x-input type="text" name="name" placeholder="John Doe">Full name</x-input>
    <x-input type="email" name="email" placeholder="hello@example.be">E-mail address</x-input>
    <x-input type="textarea" name="message" placeholder="Dear Jonathan,...">E-mail address</x-input>
    @csrf
    <button class="button" type="submit">{{ $contact['submit'] }}</button>
</form>
