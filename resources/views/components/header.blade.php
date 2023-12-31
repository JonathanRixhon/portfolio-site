<header class="header">
    <h1 class="sro">{{ $page->getTitle() }}</h1>
    <nav class="nav wrapper">
        <h2 class="sro">Main Navigation</h2>
        <a href="{{ route('home') }}" class="nav__link nav__link--home">Jonathan Rixhon</a>
        <ul class="nav__items">
            <li class="nav__item">
                <a href="{{ route('home') }}" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('works') }}" class="nav__link">Works</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('contact') }}" class="nav__link">Contact</a>
            </li>
            <li class="nav__item nav__item--icon">
                <a href="#" class="nav__link nav__link--icon">Linkedin</a>
            </li>
            <li class="nav__item nav__item--icon">
                <a href="#" class="nav__link nav__link--icon">Github</a>
            </li>
        </ul>
    </nav>
</header>
