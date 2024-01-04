@if ($featured->count())
    <section class="featured-works wrapper">
        <div class="featured-works__header">
            <h2 class="featured-works__title">{{ $content['title'] }}</h2>
            <a  class="button button--secondary" href="{{ route('works') }}">{{ $content['title'] }}</a>
        </div>

        @foreach ($featured as $work)
            <x-work-card :$work />
        @endforeach
    </section>
@endif
