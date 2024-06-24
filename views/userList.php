<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>User List</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo htmlspecialchars($user->getName(), ENT_QUOTES, 'UTF-8'); ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
