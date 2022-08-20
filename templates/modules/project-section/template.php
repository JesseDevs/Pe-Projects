<project-section>

    <h2 class='yell-voice'><?= $section['heading']; ?></h2>
    <text-content>
        <p class='intro'><?= $section['intro']; ?></p>
    </text-content>
    <?php
    if($page == 'home'){
        foreach ($projectsData as $project) { ?>
            <?php if (isset($project['featured'])){ ?>
                <?php include('templates/modules/project-card/template.php'); ?>
            <?php }
        }
    }?>

    <?php if($page == 'projects'){
        foreach ($projectsData as $project) { 
            include('templates/modules/project-card/template.php');  }
        }?>

    </project-section>
