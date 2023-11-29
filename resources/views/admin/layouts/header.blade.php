<header>
    <ul class="header-buttons">
        <li>
            <img class="item-image" src="images/user-icon.PNG" alt="user">
            <a href="">Geschaftspartner</a>
        </li>
        <li>
            <img class="item-image" src="images/user2.PNG" alt="user">
            <a href="">Geschäftsführer</a>
        </li>
        <li>
            <img class="item-image" src="images/info-icon.PNG" alt="info icon">
            <a href="">Informationen</a>
        </li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" class="log-out">
                <img class="log-out-icon" src="images/log-out-icon.png" alt="logout icon">
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</header>
