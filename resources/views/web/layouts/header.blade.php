<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <div>
            <a class="logo" href="{{ route('homepage') }}">
                <img src="{{ asset('assets/images/beurl-logo.png') }}" height="28" alt=""/>
            </a>
        </div>

        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>

        <div id="navigation">
            <ul class="navigation-menu">
                <li>
                    <a href="{{ route('homepage') }}">Anasayfa</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">beurl nedir?</a>
                </li>
            </ul>
        </div>
    </div>
</header>
