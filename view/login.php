<?php

    require('model/usermanager.php');

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $db = new userManager();
        $login = htmlspecialchars($_POST["username"]);
        $password = hash("whirlpool", $_POST["password"]);
        $id_u = $db->loginUser($login, $password);
        if ($id_u != 0) {
            $_SESSION['user'] = $id_u;
            echo "<div id='success'>Log-in successful !</div>";
        } else {
            echo "<div id='failure'>Log-in failed !</div>";
        }
        
        // header('Location: index.php');
    }        
?>

<h1 class="cam_titles">To access this page, please log-in first !</h1>
<form action="" method="post" class="login_form" autocomplete="on">
    <input type="text" class="login_input" name="username" autocomplete="username"  placeholder="Enter your username" required>
    <input type="password" class="login_input" name="password" autocomplete="current-password" placeholder="Enter your password" required>
    <input type="submit" class="login_submit" value="Submit">
</form>
<h1 class="cam_titles">Not a member yet ? Register <a href="index.php?action=register">here</a></h1>