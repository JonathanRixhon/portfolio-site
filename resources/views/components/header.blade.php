<header>
    <h1 class="header__title">{{ $page->getTitle() }}</h1>
    <nav class="nav">
        <h2 class="nav__title">Main Navigation</h2>
        <a href="{{ route('home') }}" class="nav__homeLink">Jonathan Rixhon</a>
        <div>
            <a href="{{ route('home') }}" class="nav__link">Home</a>
            <a href="{{ route('works') }}" class="nav__link">Works</a>
            <a href="{{ route('contact') }}" class="nav__link">Contact</a>
            <a href="#" class="nav__link--icon">Linkedin</a>
            <a href="#" class="nav__link--incon">Github</a>
        </div>
    </nav>
</header>
