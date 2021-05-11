<?php
    include_once "src/UserManager.php";
    include_once "src/User.php";

    $userManager = new UserManager("data.json");
    $users = $userManager->getAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach nguoi dung</title>
    <style>
        table {
            width: 500px;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<a href="view/add.php"><button>Add</button></a>
<hr>
<table border="1">
    <tr>
        <td>Index</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
        <td>Phone numbers</td>
        <td></td>
    </tr>

    <?php foreach ($users as $key => $user): ?>
    <tr>
        <td><?php echo $key + 1 ?></td>
        <td><?php echo $user->getName() ?></td>
        <td><?php echo $user->getAge() ?></td>
        <td><?php echo $user->getAddress() ?></td>
        <td><?php echo $user->getPhone() ?></td>
        <td><a href="view/edit_form.php?index=<?php echo $key ?>"><button>Edit</button></a></td>
        <td><a onclick="return confirm('Are you sure?')" href="action/delete.php?index=<?php echo $key ?>"><button>Delete</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

