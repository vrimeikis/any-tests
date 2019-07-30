<?php

declare(strict_types = 1);

use AnyTests\Models\Question;

require_once (__DIR__.'/../vendor/autoload.php');

include_once __DIR__ .'/partial/menu.php';

// Get quiz slug value from &_GET
$quizSlug = (isset($_GET['quiz']) && !empty($_GET['quiz'])) ? $_GET['quiz'] : null;

if ($quizSlug === null) {
    echo 'No quiz slug';
    die(404);
}

// Get questions by quiz slug
$questionModel = new Question();
$questions = $questionModel->getByQuizSlug((string)$quizSlug);

?>

<form action="" method="post">

    <?php
    // Loop and display questions
    foreach ($questions as $key => $question) {
        ?>

        <p><?= $key + 1 ?> <?= $question['question'] ?></p>

        <?php

        // display each question choices

        ?>

        <?php
    }

    ?>

    <input type="submit" name="submit_quiz" value="Submit">
</form>
