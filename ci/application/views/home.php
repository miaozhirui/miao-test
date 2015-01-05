<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>这是一个home.php文件</h1>
    <?php foreach($name as $v): ?>
        <span><?php echo $v; ?></span>
    <?php endforeach?>
</body>
</html>