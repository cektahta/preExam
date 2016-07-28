
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <script type = "text/javascript" src = "ajax.js"></script>
</head>
<body>
    <form action="server2.php" method="post">
        <input type="text" name="info">
        <input type="submit" value="Submit">
    </form>
    <?php if($condition == true): ?>

    <?php else: ?>
        <?php foreach ($err as $e) : ?>
            <p><?= $e?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>