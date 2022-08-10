
<form-grid>
    <nav>
        <ul>    

            <?php foreach ($formData as $form){?>
                <li><a href="?page=form&id=<?= $form["id"]?>"><?= $form['title'] ?></a></li>

            <?php } ?>
        </ul>
    </nav>

</form-grid>


