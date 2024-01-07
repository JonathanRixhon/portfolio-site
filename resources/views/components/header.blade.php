<header class="header">
    <h1 class="sro">{{ $page->getTitle() }}</h1>
    <nav class="nav wrapper">
        <h2 class="sro">Main Navigation</h2>
        <div class="nav__content">
            <a href="{{ route('home') }}" class="nav__link nav__link--home">Jonathan Rixhon</a>
            <button data-close="close menu" class="nav__toggle">Open menu</button>
            <ul class="nav__items">
                <li class="nav__item">
                    <a href="{{ route('home') }}" class="nav__link {{ request()->routeIs('home') ? 'nav__link--current' : ''}}">Home</a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('works') }}" class="nav__link {{ request()->routeIs('works') ? 'nav__link--current' : ''}}">Works</a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('contact') }}" class="nav__link {{ request()->routeIs('contact') ? 'nav__link--current' : ''}}" data-modal="contact-form">Contact</a>
                </li>
                <li class="nav__item">
                    <a href="{{ env('GITHUB_ACCOUNT') }}" target="_blank" class="nav__link nav__link--icon nav__link--github">Github</a>
                </li>
                <li class="nav__item">
                    <a href="{{ env('LINKEDIN_ACCOUNT') }}" target="_blank" class="nav__link nav__link--icon nav__link--linkedin">Linkedin</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
