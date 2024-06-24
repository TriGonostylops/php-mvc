<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advertisement List</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>Advertisement List</h1>
<ul>
    <?php foreach ($ads as $ad): ?>
        <li>
            <strong><?php echo htmlspecialchars($ad->getTitle(), ENT_QUOTES, 'UTF-8'); ?></strong>
            by <?php echo htmlspecialchars($ad->getUserName(), ENT_QUOTES, 'UTF-8'); ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
