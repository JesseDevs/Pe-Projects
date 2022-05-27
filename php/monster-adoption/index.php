<?php include('header.php') ?>
<?php include('monsters.php')?>

<main>
    <inner-column>

    <?php foreach ($monsters as $monster){
    
        $name = $monster["name"];
        $id = $monster["id"];
        $portrait = $monster['portrait'];
        $status = $monster['adopted'];
        $hue = $monster['hue'];

            // Set human readable status
        if ($status == 1){
            $story ="I am " . $monster['age'] . " years old. I'm excited to be going to a happy home that lets me eat as much " . $monster['favoriteFood'] . " as I want!";
            $status = "Adopted!";
        } else {
            $story ="I am " . $monster['age'] . " years old. I love to " . $monster['hobby'] . "! My favorite thing to eat is " . $monster['favoriteFood'] . ". Yum! Can't get enough.";
            $status = "Needs a home! ";
        }?>

            <article style='background-color: rgb(255 255 255/<?=$hue?>)' class='monster-card <?=$id?>' id ='<?=$id?>'>
                <picture class ='portrait'>
                    <img src='<?=$portrait?>'>
                </picture>
                <div class='info-wrapper'>
                    <h2 class='name'> <?=$name?> </h2> 
                    <p class='story'> <?=$story?></p> 
                    <p class='status'> <?=$status?> </p> 
                </div>
            </article>

    <?php }?>

    </inner-column>
</main>



</body>
</html>

<?php include('footer.php')?>
