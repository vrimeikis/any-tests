<?php

declare(strict_types = 1);

use AnyTests\Models\Quiz;

require_once (__DIR__.'/../vendor/autoload.php');

include_once __DIR__ .'/partial/menu.php';

$quizModel = new Quiz();

$categorySlug = (isset($_GET['category']) && !empty($_GET['category'])) ? $_GET['category'] : null;

$quizzes = $quizModel->getByCategory($categorySlug);

?>

<h4>Quiz list</h4>

<ul>

    <?php
    foreach ($quizzes as $quiz) {
        ?>

        <li><a href=""><?= $quiz['quiz'] ?></a></li>

        <?php
    }
    ?>

</ul>
