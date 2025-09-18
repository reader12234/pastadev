<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>edit user</h1>
    <form action="<?=base_url('user/edit/'.$user['id']) ?>" method="post">
        <label for="firstname">First Name</label><br>
        <input type="text" id="firstname" name="firstname" value="<?= $user['firstname']?>"required><br>
        <label for="middlename">Middle Name</label><br>
        <input type="text" id="middlename" name="middlename" value="<?= $user['middlename'] ?>"> <br>
        <label for="lastname">Last Name</label><br>
        <input type="text" id="lastname" name="lastname" value="<?= $user['lastname'] ?>"required><br><br>
        <input type="submit" value="Submit">
        
      </form>
</body>
</html>