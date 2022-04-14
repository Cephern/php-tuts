<?php
// $score = 50;

// echo $score > 40 ? 'high score!' : 'low score :(';

// superglobals
//  $_GET, $_POST
// echo $_SERVER['SERVER_NAME'] . '<br />';
// echo $_SERVER['REQUEST_METHOD'] . '<br />';
// echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
// echo $_SERVER['PHP_SELF'] . '<br />';

if (isset($_POST['submit'])) {
    // cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400); // current time + 1 day in seconds


    session_start();

    $_SESSION['name'] = $_POST['name'];

    echo $_SESSION['name'];

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST" action=<?php echo $_SERVER['PHP_SELF']; ?>>
        <input type="text" name="name">
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="helicopter">Helicopter</option>
        </select>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>