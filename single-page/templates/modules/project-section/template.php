<div class="row-container">
    <aside>

        <text-content>
            <h2 class='yell-voice'><?= $section['heading']; ?></h2>

            <p class='intro'><?= $section['intro']; ?></p>
        </text-content>
    </aside>


    <?php
    if ($page == 'home') {
        foreach ($projectsData as $project) { ?>

            <?php if (isset($project['featured'])) { ?>
                <aside>
                    <?php include('templates/modules/project-card/template.php'); ?>
                </aside>
    <?php }
        }
    } ?>

</div>