<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des puissances de 2</title>
</head>
<body>
<h2>Puissances de 2</h2>
<ol>
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <li><?php echo 2 ** $i; ?></li>
    <?php } ?>
</ol>
</body>
</html>