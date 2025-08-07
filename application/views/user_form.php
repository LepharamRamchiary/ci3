<!DOCTYPE html>
<html>
<head><title>Add User</title></head>
<body>
    <h1>Add New User</h1>
    <form method="post" action="<?php echo site_url('users/save'); ?>">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
