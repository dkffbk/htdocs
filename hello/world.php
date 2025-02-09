<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>

<body>
    <h1>Hello PHP</h1>
    <?php
    $today = date("d m Y h:i:s");
    $error = true;
    ?>

    <?php if (!$error) : ?>
        <div style="padding: 20px; background: deeppink">
            Some Error Message
        </div>
    <?php else : ?>
        <div style="padding:20px; background: teal">
            Some Normal Message
        </div>
    <?php endif ?>
</body>

</html>