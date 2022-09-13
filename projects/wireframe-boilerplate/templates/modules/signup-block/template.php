<signup-block>

    <text-content>
        <h3 class="heading loud-voice"><?= $section['heading'] ?></h3>

        <p class='intro'> <?= $section["intro"] ?></p>
    </text-content>


    <email-input>

        <input type="email" placeholder="Email Address">


        <a href="#">
            SignUp
        </a>
    </email-input>


    <picture>
        <img src="<?= $section['image'] ?>" alt="">
    </picture>
</signup-block>