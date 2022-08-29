<header class='site-header'>
    <inner-column>
        <nav class='main-menu'>
            <ul>
                <li><a class='logo' href="?page=home">The Reads</a></li>
                <li>

                    <button rel="toggle">Menu Toggle</button>
                    <nav class="burger">
                        <a href="#">Thing one</a>
                        <a href="#">Thing two</a>
                        <a href="#">Thing three</a>
                        <button rel="toggle">Close Toggle</button>
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