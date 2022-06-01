<?php include('style.php')?>
<?php include('monster-factory.php')?>


<section class='one'>
    
    <?php

    include('monster-factory.php');

    foreach ($monsters as $monster){

        $story = $monster['name'] . " is " . $monster['age'] . " years old and favorite food is " . $monster['favoriteFood'] . ".";
    
        $template = "<p id=" . $monster['id'] . ">" . $story . "</p>";
        
        echo $template;
    };

    ?>
    </section>

<section class="three">
    <ol class='monster-list'>

    <?php foreach ($monsters as $monster){
    
            $name = $monster["name"];
            $id = $monster["id"];
            $story = "My favorite food is " . $monster['favoriteFood'] . " and  I am " . $monster['age'] . " years old.";
            $portrait = $monster['portrait'];
            $status = $monster['adopted'];

                // Set human readable status
            if ($status == 1){
                $status = "Adopted!";
            } else {
                $status = "Needs a home! ";
            }?>


        <li class='monster'>
    
            <article class='<?=$id?>'>
                <div class='monster-card' id ='<?=$id?> '>
                    <picture class ='<?=$monster['portrait']?> >
                        <img src= '<?=$monster['portrait']?>' width='200'>
                    </picture>

                    <div class="info-wrapper">
                        <h2 class='name'> <?=$monster['name']?> </h2>
                        <p class= 'story'> <?=$story?> </p>
                        <p class= 'status'> <?=$status?>  </p>
                    </div>

                </div>
            </article>

        </li>
        <?php } ?>

    </ol>;
</section>