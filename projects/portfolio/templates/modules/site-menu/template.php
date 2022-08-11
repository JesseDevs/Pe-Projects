<header class='site-header'>
    <inner-column>

        <nav class='main-menu'>
            <ul>

                <li><a href="?page=home" class=" <?php activePage("home") ?>">Home</a></li>
                <li><a href="?page=about" class=" <?php activePage("about") ?>">About</a></li>
                <li><a href="?page=projects" class=" <?php activePage("projects") ?>">Projects</a></li>
                <li><a href="?page=writing " class="<?php activePage("writing") ?>">Writing</a></li>
                <li><a class="mid-size" href="?page=forms " class="<?php activePage("forms") ?>">Forms</a></li>
                <li><a class="mid-size" href="?page=style " class="<?php activePage("style") ?>">Style-Guide</a></li>
            </ul>

        </nav>

        <nav class='burger'>
            <input id="menu-toggle" type="checkbox" />
            <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button'></div>
            </label>
            <nav class="menu">
             <a class="small-size" href="?page=home" class=" <?php activePage("home") ?>">Home</a>
             <a class="small-size" href="?page=about" class=" <?php activePage("about") ?>">About</a>
             <a class="small-size" href="?page=projects" class=" <?php activePage("projects") ?>">Projects</a>
             <a class="small-size" href="?page=writing " class="<?php activePage("writing") ?>">Writing</a>

             <a href="?page=forms" class="<?php activePage("forms") ?>">Exercises</a>
             <a class="mid-size" href="?page=style " class="<?php activePage("style") ?>">Style-Guide</a>
         </nav>

     </nav>

 </inner-column>
</header>

