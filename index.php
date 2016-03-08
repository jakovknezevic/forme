<!DOCTYPE html>
<html>
<head>
    <title>Naslov</title>
    <meta charset="UTF-8">
</head>

<body>
<h1>Prvi</h1>

<p>
    <?php
    echo('Pozdrav iz PHP-a');
    echo('<br>');
    echo(date('d.m.Y.'));
    ?>
</p>
<p>

    <?php
    $date1 = date('Y-m-d');
    $date2 = date('2016-03-18');
    $diff = date_diff($date1,$date2);
    echo('Do praznika je ostalo još: <b>' . $diff . '</b>');
    ?>

</p>
</body>
</html>
