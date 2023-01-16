<?php

function showErrors()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
showErrors();

function printQueryString()
{
    return $_SERVER['QUERY_STRING'];
}

function has($array, $item)
{
    if (isset($array[$item])) {
        return true;
    }

    return false;
}

function isLoggedIn($password)
{
    $secretKey = 'StreetFighter';

    if ($password == $secretKey) {
        return true;
    } else {
        return false;
    }
}


function displayEnemies($chosen)
{
    foreach (getFighters() as $fighter) {
        foreach ($chosen['enemy'] as $enemy) {
            if ($enemy == $fighter['id']) {
                displayEnemy($fighter);
            }
        }
    }
}

function displayFriends($chosen)
{
    foreach (getFighters() as $fighter) {
        foreach ($chosen['ally'] as $friend) {
            if ($friend == $fighter['id']) {
                displayFriend($fighter);
            }
        }
    }
}


function displayEnemy($enemy)
{ ?>
    <a href="?page=detail&id=<?= $enemy['id'] ?>">
        <article class="enemy relation">
            <div class="container">
                <h3 class="strict-voice">Arch-nemesis</h3>
                <p> <?= $enemy['name'] ?> </p>
            </div>

            <picture>
                <img src="<?= $enemy['portrait'] ?>" alt="enemy">
            </picture>
        </article>
    </a>
<?php } ?>

<?php

function displayFriend($friend)
{ ?>
    <a href="?page=detail&id=<?= $friend['id'] ?>">
        <article class="friend relation">
            <div class="container">
                <h3 class="strict-voice">Ally In Battle</h3>
                <p> <?= $friend['name'] ?> </p>
            </div>

            <picture>
                <img src="<?= $friend['portrait'] ?>" alt="friend">
            </picture>
        </article>
    </a>
<?php } ?>