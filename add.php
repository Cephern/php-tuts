<?php

$errors = ['email' => '', 'title' => '',  'ingredients' => ''];

$email = '';
$title = '';
$ingredients = '';

if (isset($_POST['submit'])) {

    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email must be a valid email adress';
        }
    }

    if (empty($_POST['title'])) {
        $errors['title'] = 'A title is required <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA_Z\s]+$/', $title)) {
            $errors['title'] = 'title must be letters and spaces only';
        }
    }

    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredient is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'ingredients must be a comma separated list';
        }
    }

    if (!array_filter($errors)) {
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('./templates/header.php') ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method="POST" class="white">
        <label for="email">Your Email:</label>
        <input type="text" id="email" name="email" value=<?php echo htmlspecialchars($email) ?>>
        <div class="red-text"><?php echo $errors['email'] ?></div>

        <label for="title">Pizza Title:</label>
        <input type="text" id="title" name="title" value=<?php echo htmlspecialchars($title) ?>>
        <div class="red-text"><?php echo $errors['title'] ?></div>

        <label for="ingredients">Ingredients (comma separated):</label>
        <input type="text" id="ingredients" name="ingredients" value=<?php echo htmlspecialchars($ingredients) ?>>
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>

        <div class="center">
            <input type="submit" value="Submit" name="submit" class="btn brand z-depth-0">
        </div>

    </form>
</section>

<?php include('./templates/footer.php'); ?>

</html>