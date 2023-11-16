<?php

include '../Contoller/cruduser.php';
include '../model/user.php';
$error = "";

// create client
$user = null;
// create an instance of the controller
$cruduser = new cruduser();


if (
    isset($_POST["id"]) &&
    isset($_POST["pseudo"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"])&&
    isset($_POST["role"])
) {
    if (
        !empty($_POST['id']) &&
        !empty($_POST["pseudo"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["role"])
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $cruduser= new user(
            null,
            $
                $_POST['id'],
                $_POST['pseudo'],
                $_POST['email'],
                $_POST['password'],
                $_POST['role']
            );
        
        var_dump($user);
        
        $joueurC->updateuser($user, $_POST['iduser']);

        header('Location:listuser.php');
    } else
        $error = "Missing information";
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="listuser.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['iduser'])) {
        $user = $cruduser->showuser($_POST['iduser']);
        
    ?>

        <form action="" method="POST">
        <table>
        <tr>
                <td><label for="id">idf:</label></td>
                <td>
                    <input type="number" id="id" name="id" />
                    <span id="erreur" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="pseudo">pseudo :</label></td>
                <td>
                    <input type="text" id="pseudo" name="pseudo" />
                    <span id="erreurNom" style="color: red"></span>
                </td>
            </tr>
            
            <tr>
                <td><label for="email">Email :</label></td>
                <td>
                    <input type="text" id="email" name="email" />
                    <span id="erreurEmail" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="password">psw:</label></td>
                <td>
                    <input type="text" id="password" name="password" />
                    <span id="erreurPsw" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="role">role :</label></td>
                <td>
                    <input type="number" id="role" name="role" />
                    <span id="erreurrole" style="color: red"></span>
                </td>
            </tr>


            <td>
                <input type="submit" value="Save">
            </td>
            <td>
                <input type="reset" value="Reset">
            </td>
        </table>
        </form>
    <?php
    }
    ?>
</body>

</html>