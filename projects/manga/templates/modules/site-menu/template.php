<header class='site-header'>
    <inner-column>
        <nav class='main-menu'>
            <ul>
                <li><a class='logo' href="?page=home">The Reads</a></li>
                <li>

                    <button class='toggle-burger' rel="toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <nav class="burger">
                        <a href="?page=home">Home</a>
                        <a href="?page=list">Catalog</a>

                        <button class='close' rel="toggle"></button>
                    </nav>
                </li>
            </ul>
        </nav>
        <nav class='side-bar'>
            <a class='logo' href="?page=home">The Reads</a>
            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=list">Catalog</a></li>
                <li>
                    <span>?<?= printQueryString(); ?></span>
                </li>
            </ul>

        </nav>

    </inner-column>
</header>