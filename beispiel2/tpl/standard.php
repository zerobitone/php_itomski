<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <?php foreach($pages as $p) { ?>
                <li>
                    <a href="index.php?a=<?= $p->getAction() ?>"><?= $p->getLabel() ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <main>
        <?php include $subtemplate ?>
    </main>
</body>
</html>