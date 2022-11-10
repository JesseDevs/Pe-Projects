<header class='main-tool-bar site-header'>
    <inner-column>
        <ul class='logo-container'>
            <li class="svg-box">
                <?php include("templates/svg.php"); ?>
            </li>
            <li>
                <a class='logo-link' href="?page=home">
                    <h1 class="logo">Jesse&nbsp;Devs</h1>

                </a>
            </li>

        </ul>



        <nav class='main-menu'>
            <ul>

                <li><a href="?page=home" class=" <?php activePage("home") ?>">Home</a></li>
                <li><a href="?page=about" class=" <?php activePage("about") ?>">About</a></li>
                <li><a href="?page=projects" class=" <?php activePage("projects") ?>">Projects</a></li>
                <li class="large-size">
                    <a href="?page=writing " class="<?php activePage("writing") ?>">Writing</a>
                </li>
                <li class="larger-size">
                    <a href="?page=forms " class="<?php activePage("forms") ?>">Forms</a>
                </li>
                <li class="larger-size">
                    <a href="?page=style " class="<?php activePage("style") ?>">Guide</a>
                </li>
            </ul>

        </nav>

        <button class='hamburger-button' id='toggle' rel='hamburger'>
            <div class='menu-bars'></div>
        </button>


        <nav class="burger">
            <a class="small-size" href="?page=home" class=" <?php activePage("home") ?>">Home</a>
            <a class="small-size" href="?page=about" class=" <?php activePage("about") ?>">About</a>
            <a class="small-size" href="?page=projects" class=" <?php activePage("projects") ?>">Projects</a>
            <a href="?page=writing " class="<?php activePage("writing") ?>">Writing</a>

            <a href="?page=forms" class="<?php activePage("forms") ?>">Forms</a>
            <a href="?page=style " class="<?php activePage("style") ?>">Guide</a>
        </nav>



    </inner-column>
</header>