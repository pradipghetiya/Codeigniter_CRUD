<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit User</h2>
    
    <?php if (isset($user)) : ?>
        <form action="/pradip/update/<?= esc($user->id) ?>" method="post">
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" id="username" name="username" class="form-control" value="<?= esc($user->username) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="<?= esc($user->email) ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" class="form-control" value="<?= esc($user->password) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/pradip/view" class="btn btn-secondary">Cancel</a>
        </form>
    <?php else : ?>
        <p>User data not found.</p>
    <?php endif; ?>
</div>
</body>
</html>
