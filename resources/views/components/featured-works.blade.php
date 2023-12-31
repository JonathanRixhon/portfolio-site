<section class="featured-works">
    <div class="featured-works__header">
        <h2 class="featured-works__title">{{ $content['title'] }}</h2>
        <a href="#">{{ $content['title'] }}</a>
    </div>

    @foreach ($featured as $work)
        <x-work-card :$work />
    @endforeach
</section>
