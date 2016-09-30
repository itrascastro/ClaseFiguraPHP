<?php if (!$_POST) {
    header("Location: http://localhost:8000/index2.php");
    die();
} ?>

<html>
    <head>
        <title>Otra</title>
    </head>
<body>
<div id="header">
    <ul>
        <li><a href="index2.php">Inicio</a></li>
    </ul>
    <h1>Bienvenido <?php echo $_POST['firstname']; ?></h1>
</div>
<div id="firstName">
    <p><?php echo $_POST['firstname']; ?></p>
</div>
<div id="lastName">
    <p><?php echo $_POST['lastname']; ?></p>
</div>
</body>
</html>
