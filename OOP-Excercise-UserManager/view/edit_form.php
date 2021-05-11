<?php
include_once "../src/User.php";
include_once "../src/UserManager.php";
$index = $_REQUEST['index'];
$usermanage = new UserManager('../data.json');
$users = $usermanage->getAll();
$user = $users[$index];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them moi</title>
</head>
<body>
<form action="../action/edit.php" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $user->getName() ?>"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="age" value="<?php echo $user->getAge() ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $user->getAddress() ?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" value="<?php echo $user->getPhone() ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" >Edit</button>
            </td>
            <td><input type="hidden" name="index" value="<?php echo $index ?>"></td>
        </tr>
    </table>
</form>
</body>
</html>