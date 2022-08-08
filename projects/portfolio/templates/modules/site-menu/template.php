<header class='site-header'>
    <inner-column>

        <nav class='main-menu'>
            <ul>

                <li><a href="?page=home" class=" <?php activePage("home") ?>">Home</a></li>
                <li><a href="?page=about" class=" <?php activePage("about") ?>">About</a></li>
                <li><a href="?page=projects" class=" <?php activePage("projects") ?>">Projects</a></li>
                <li><a href="?page=writing " class="<?php activePage("writing") ?>">Writing</a></li>
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

               <a href="?page=e4p" class="<?php activePage("e4p") ?>">Exercises For Programmers</a>
               <a href="?page=garden" class="<?php activePage("garden") ?>">Layout Garden</a>
           </nav>

       </nav>

   </inner-column>
</header>

