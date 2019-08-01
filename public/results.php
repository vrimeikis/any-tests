<?php

declare(strict_types = 1);

use AnyTests\Models\QuizResult;

require_once(__DIR__ . '/../vendor/autoload.php');

include_once __DIR__ . '/partial/menu.php';

$quizResultsModel = new QuizResult();

$resultsArray = $quizResultsModel->get();

function getPercentageResult(string $resultJson): string {
    $resultArray = json_decode($resultJson, true);

    return sprintf('%s %%', $resultArray['result_percentage']);
}

?>

<h3>Results table</h3>

<table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <th>Nr.</th>
        <th>Name</th>
        <th>LastName</th>
        <th>Result (%)</th>
    </tr>

    <?php
    foreach ($resultsArray as $key => $resultItem) {
        ?>

        <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $resultItem['first_name']; ?></td>
            <td><?= $resultItem['last_name']; ?></td>
            <td><?= getPercentageResult($resultItem['result']); ?></td>
        </tr>

        <?php
    }
    ?>

</table>
