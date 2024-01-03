<div class="input {{ $errors->has($name) ? 'input--error' : ''}}">
    <label class="input__label" for="{{ $name }}">{{ $slot }}</label>
    @error($name)
        <p class="input__hint">{{ $message }}</p>
    @enderror
    @if ($type === 'textarea')
        <textarea class="input__input {{ 'input__input--' . $type }}" placeholder="{{ $placeholder }}" name="{{ $name }}" id="{{ $name }}">{{ old($name) }}</textarea>
    @else
        <input class="input__input" placeholder="{{ $placeholder }}" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ @old($name) }}">
    @endif
</div>

