<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Montserrat', sans-serif;
        }
        .form-container {
            max-width: 500px;
            margin: 80px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-control {
            border-radius: 50px;
            padding: 12px;
        }
        .btn-custom {
            background-color: #4CAF50;
            color: #fff;
            border-radius: 50px;
            padding: 12px;
            width: 100%;
            font-size: 16px;
        }
        .btn-custom:hover {
            background-color: #45a049;
        }
        .parsley-errors-list {
            color: #d9534f;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Register</h2>
    <a href="/pradip/view" class="btn btn-primary mb-3">Users List</a>

    <form action="<?php echo site_url('/userData'); ?>" method="POST" id="registerForm" data-parsley-validate>
        <!-- Full Name -->
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" name="username" class="form-control" id="fullname" name="fullname" required data-parsley-required-message="Full name is required.">
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required data-parsley-type="email" data-parsley-required-message="Valid email is required.">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required data-parsley-length="[6, 20]" data-parsley-required-message="Password is required." data-parsley-length-message="Password must be between 6 and 20 characters long.">
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required data-parsley-equalto="#password" data-parsley-required-message="Please confirm your password." data-parsley-equalto-message="Passwords do not match.">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-custom">Register</button>
    </form>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Parsley JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<!-- Parsley Real-time Validation -->
<script>
    $(document).ready(function() {
        $('#registerForm').parsley();

        // Enable real-time validation
        $('#registerForm').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
        });
    });
</script>

</body>
</html>
    