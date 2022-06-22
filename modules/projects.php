<?php include('header.php') ?>

<?php

$projects = [
    'overwatch' => [
        'title' => 'Overwatch Site&nbsp;Replica',
        'link' => 'https://peprojects.dev/alpha-4/jesse/projects/overwatch/',
        'image' => '/images/overwatch.jpg',
        'details' => 'Created a replica of a website that sparked interest based on its layout and design choices. This version focuses on Overwatch, a video game that brings me entertainment.',
        'github' => 'https://github.com/JesseDevs/pe-projects/tree/main/projects/overwatch'
    ],
    'we-paint' => [
        'title' => 'Client Project: "We&nbsp;Paint',
        'link' => 'https://peprojects.dev/alpha-4/jesse/projects/client-project/',
        'image' => '/images/we-paint.jpg',
        'details' => 'A project dedicated to a client looking to target a new audience for their company and differentiate themselves from their competitors. This required research, business communication, and design discussion.',
        'github' => 'https://github.com/JesseDevs/pe-projects/tree/main/projects/client-project'
    ],
    // 'responsive-garden' => [
    //     'title' => 'Responsive Garden',
    //     'link' => 'https://peprojects.dev/alpha-4/jesse/projects/responsive-garden/',
    //     'image' => 'images/responsive-garden.jpg',
    //     'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi natus adipisci esse, in nemo similique cum officiis! Quos, recusandae aperiam ut iusto rem expedita iure?',
    //     'github' => 'https://github.com/JesseDevs/pe-projects/tree/main/projects/responsive-garden'
    // ],
];
?>

<main>
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
</div>

</body>

</html>