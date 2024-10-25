<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light background for contrast */
            font-family: 'Arial', sans-serif; /* Custom font */
        }
        .table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            border: none; /* Remove default border */
        }
        .table thead th {
            background-color: #007bff; /* Header background */
            color: white; /* Header text color */
        }
        .table tbody tr:hover {
            background-color: #e2e6ea; /* Row hover effect */
        }
        .btn {
            transition: background-color 0.3s, color 0.3s; /* Smooth transition for buttons */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        .btn-warning:hover {
            background-color: #e0a800; /* Darker shade on hover */
        }
        .btn-danger:hover {
            background-color: #c82333; /* Darker shade on hover */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">User Data</h2>
    <a href="/pradip" class="btn btn-primary mb-3">Home</a>
    
    <?php if (isset($users) && !empty($users)) : ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= esc($user->id) ?></td>
                        <td><?= esc($user->username) ?></td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= esc($user->password) ?></td>
                        <td>
                            <a href="/pradip/edit/<?= esc($user->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="/pradip/delete/<?= esc($user->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No user data available.</p>
    <?php endif; ?>
</div>
</body>
</html>
