<?php require('data.php') ?>

<main class="<?= $page ?>">
    <section id="projects" class="projects">
        <inner-column>
            <div class="info-wrapper">
                <h2 class="attention-voice">Projects</h2>

                <span>Perpetually growing and learning.</span>

                <article-grid>
                    <?php
                    foreach ($projects as $project) {
                    ?>


                        <article>

                            <picture class="project-image">
                                <a href="<?= $project['link'] ?>"><img src="<?= $project['image'] ?>" alt="#"></a>
                            </picture>

                            <div class="container">
                                <h3 class="calm-voice"><?= $project['title'] ?></h3>
                                <p><?= $project['details'] ?></p>
                                <div class="project-links">

                                    <a target="blank" class="calm-voice" href="<?= $project['link'] ?>">View Project</a>
                                    <a target="blank" class="calm-voice" href="<?= $project['github'] ?>">Github</a>
                                </div>
                            </div>

                        </article>

                    <?php } ?>

                </article-grid>
            </div>
        </inner-column>
    </section>

</main>