
<form-grid>
    <nav>
        <ul>    

            <?php foreach ($section['items'] as $forms){?>
                <li><a href="?page=form&id="<?= $forms['id']?>><?= $forms['title'] ?></a></li>

            <?php } ?>
        </ul>
    </nav>

</form-grid>


