<?php include('header.php') ?>

<?php

$projects = [
    'overwatch' => [
        'title' => 'week...',
        'one' => 'Continue practicing PHP and testing my current skills.',
        'two' => 'Write more blog post starting with one about PHP introduction.',
        'three' => 'Start making graphics.',
        'four' => 'Keep an eye on my portfolio page and search for external feedback.',
        'five' => 'Meet with Derek as much as possible.',
    ],
    'we-paint' => [
        'title' => 'month...',
        'one' => 'Practice some creativity and using a graphic design program by creating an image every day of the month.',
        'two' => 'Be able to use PHP comfortably in most scenarios.',
        'three' => 'Develop current projects for display on portfolio.',
        'four' => 'Plan some meditation to avoid burnout.',
    ]

];
?>

<main>
    <section id="projects" class="projects">
        <inner-column>
            <div class="info-wrapper">
                <h2 class="attention-voice">Projects</h2>

                <span>Perpetually growing and learning.</span>

                <article-grid>
                    <article>

                        <picture class="project-image">
                            <a href="https://peprojects.dev/alpha-4/jesse/projects/overwatch/"><img src="images/overwatch.jpg" alt="#"></a>
                        </picture>

                        <div class="container">
                            <h3 class="calm-voice">Overwatch Site&nbsp;Replica</h3>
                            <p>Created a replica of a website that sparked interest based on its layout and design choices. This version focuses on Overwatch, a video game that brings me entertainment.</p>
                            <div class="project-links">

                                <a target="blank" class="calm-voice" href="https://peprojects.dev/alpha-4/jesse/projects/overwatch/">View Project</a>
                                <a target="blank" class="calm-voice" href="https://github.com/JesseDevs/pe-projects/tree/main/projects/client-project">Github</a>
                            </div>
                        </div>

                    </article>
                    <article>

                        <picture class="project-image">
                            <a href="https://peprojects.dev/alpha-4/jesse/projects/client-project/"><img src="images/we-paint.jpg" alt="#"></a>
                        </picture>

                        <div class="container">
                            <h3 class="calm-voice">Client Project: "We&nbsp;Paint"</h3>
                            <p>A project dedicated to a client looking to target a new audience for their company and differentiate themselves from their competitors. This required research, business communication, and design discussion.</p>
                            <div class="project-links">

                                <a target="blank" class="calm-voice" href="https://peprojects.dev/alpha-4/jesse/projects/client-project/">View Project</a>
                                <a target="blank" class="calm-voice" href="https://github.com/JesseDevs/pe-projects/tree/main/projects/overwatch">Github</a>
                            </div>
                        </div>

                    </article>
                    <!--
                        <article>

                            <picture class="project-image">
                                <a href="https://peprojects.dev/alpha-4/jesse/super-responsive-layout-v2/"><img src="images/spider-layout.jpg" alt="#"></a>
                            </picture>
                            
                            <div class="container">
                                <h3 class="calm-voice">Client Project: "We&nbsp;Paint"</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi natus adipisci esse, in nemo similique cum officiis! Quos, recusandae aperiam ut iusto rem expedita iure?</p>
                                <div class="project-links">
                                
                                    <a target="blank" class="calm-voice" href="https://peprojects.dev/alpha-4/jesse/super-responsive-layout-v2/">View Project</a>
                                    <a target="blank" class="calm-voice" href="https://github.com/JesseDevs/pe-projects/tree/main/super-responsive-layout-v2">Github</a>
                                </div>
                            </div>
                            
                        </article>
                        -->

                </article-grid>
            </div>
        </inner-column>
    </section>

</main>
</div>

</body>

</html>