<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of Users</h1>
    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>firstname</th>
            <th>middlename</th>
            <th>lastname</th>
            <th>Action</th>
        </tr>
        <?php if (!empty($users) && is_array($users)): ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['id']) ?></td>
                    <td><?= esc($user['firstname']) ?></td>
                     <td><?= esc($user['middlename']) ?></td>
                      <td><?= esc($user['lastname']) ?></td>
                      <td>
                        <a href="<?= base_url('user/edit/' . $user['id']) ?>"onclick="return confirm('sge edit na');">Edit</a>
                            <a href="<?= base_url('user/delete/'. $user['id']) ?>"onclick="return confirm('sge delete na');">Delete</a>
                        </td>
                </tr> 
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">No users found.</td>
            </tr>
        <?php endif; ?>
</body>
</html>