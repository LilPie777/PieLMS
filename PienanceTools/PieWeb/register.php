<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b870970ad8.js" crossorigin="anonymous"></script>
    <style>
        <?php include __DIR__ . "/modules/themes/header-styles.css"; ?>
        p 
        {
            color: red;
        }        

    </style>
    <?php include __DIR__ . "/modules/themes/header.php"; ?>
</head>
<body>
    <div class = "container">
        <form class = "en-form" action="success.php" method="post">
        <p >School username: </p> 
        <input type="text" name="sclusn">
        <br>
        <input type="submit">
        </form>
    </div>
</body>
</html>