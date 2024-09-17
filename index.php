<?php
$arr1 = ['Идиятова', 'Закирова', 'Хусаинов', 'Силантьев',];
$arr2 = [
    "Спортивный" => "Сидоров",
    "Художественный" => "Емелина",
    "Музыкальный" => "Иванова",
    "Литературный" => "Петров",
    "Биологический" => "Антонова"
];
uasort($arr2, function ($a, $b) {
    return strcasecmp($a, $b);
});

$student = [
    'name' => 'Гульшат',
    'surname' => 'Идиятова',
    'group' => '427',
    'hobby' => 'Рукоделие',
    'social' => [
        'VK' => '@gulssshatik',
        'TG' => 'https://t.me/Gulkaaaaaaaaa'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <section>

        <div class="arr1">
            <h1>ЗАДАНИЕ №1</h1>
            <p>В массиве 1 задания <?= count($arr1) ?> фамилий.
                <?php
                if (in_array("Сидоров", $arr1)) {
                    echo "Сидоров есть в массиве";
                } else if (!in_array("Сидоров", $arr1)) {
                    echo "Сидорова нет";
                }
                $expelled = array_pop($arr1);
                ?>
                Последняя фамилия (<?= $expelled ?>) была удалена.
            </p>
        </div>
        <div class="arr2">
            <h1>ЗАДАНИЕ №2</h1>
            <?php
            foreach ($arr2 as $club => $surname) {
                echo "$club - $surname<br>";
            }
            ?>
        </div>
        <div class="arr3">
            <h1>ЗАДАНИЕ №3</h1>
            <p>Студент: <?= $student['name'] ?> <?= $student['surname'] ?></hp>
            <p>Группа: <?= $student['group'] ?></p>
            <p>Хобби: <?= $student['hobby'] ?></p>
            <p>Соцсети:
                <?php
                foreach ($student['social'] as $social => $link) {
                    echo "$social: $link<br>";
                }
                ?>
            </p>
        </div>
    </section>
</body>

</html>