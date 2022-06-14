<?php include('header.php') ?>

<main>
    <section class="one">

        <inner-column>

            <picture>
                <img src="https://peprojects.dev/images/square.jpg" alt="">
            </picture>
            <article>
                <h2>Hello! This is a ’diptych’</h2>
                <p>You can call it whatever you want. It's a module that has an image and some supporting text. On the smaller screen it works nicely to stack. ON a larger screen, it fits side by side.</p>
            </article>
        </inner-column>
    </section>

    <section class="two">
        <inner-column>

            <article>
                <h2>This module is a "call to action"</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae dolore dolor facere cupiditate illo quis autem veritatis deserunt a est velit, id consectetur impedit neque ipsum aperiam harum atque similique.</p>
                <a href="#">Here's the action!</a>
            </article>

        </inner-column>
    </section>

    <section class="three">
        <inner-column>

            <article>
                <h2>This is an "Article-grid" module. THis is its heading.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia voluptas ad, libero eos praesentium.</p>
            </article>
            <article-grid>

                <?php
                for ($x = 1; $x <= 9; $x++) { ?>
                    <h2>This is an article card</h2>
                    <p>Basically a mini call to action box!</p>
                    <a href="#">Action!</a>
                <?php } ?>
            </article-grid>

        </inner-column>
    </section>

    <section class="two">
        <inner-column>

            <article>
                <h2>This module is a "call to action"</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae dolore dolor facere cupiditate illo quis autem veritatis deserunt a est velit, id consectetur impedit neque ipsum aperiam harum atque similique.</p>
                <a href="#">Here's the action!</a>
            </article>

        </inner-column>
    </section>

</main>

<?php include('footer.php') ?>

</body>

</html>