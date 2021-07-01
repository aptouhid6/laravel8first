<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preview</title>
</head>
<body>
    <p>Name: <?php echo $name ?></p>
    <p>Email: <?php echo $email ?></p>
    <p>Phone: <?php echo $phone ?></p>
    <a href="<?php echo url('pnt/about/form')?>">Back</a>
</body>
</html>