<!DOCTYPE html>
<html>
<head><title>User List</title></head>
<body>
    <h1>Users</h1>
    <a href="<?php echo site_url('users/add'); ?>">Add New User</a>
    <ul>
        <?php foreach ($user as $u): ?>
            <li><?php echo $u->name . ' - ' . $u->email; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
