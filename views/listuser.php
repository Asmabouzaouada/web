<?php
include "../contoller/cruduser.php";

$u = new cruduser();
$tab = $u->listuser();

?>

<center>
    <h1>List of user</h1>
    <h2>
        <a href="adduser.php">Add user</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>Id r</th>
        <th>pseudo</th>
        <th>Email</th>
         <th>password</th>
        <th>role</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


    <?php
    foreach ($tab as $user) {
    ?>




        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['pseudo']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['password']; ?></td>
             <td><?= $user['role']; ?></td>
            <td align="center">
                <form method="POST" action="updateuser.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $user['id']; ?> name="iduser">
                </form>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>