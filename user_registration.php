<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Body Styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f3f4f6;
        }

        /* Container Styling */
        .container {
            width: 400px;
            padding: 2rem;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            
        }

        .container h2 {
            margin-bottom: 1.5rem;
            color: #333;
            text-align: center;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 1.2rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            color: #555;
            margin-bottom: 0.5rem;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Button Styling */
        .btn {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 1rem;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Link Styling */
        .login-link {
            margin-top: 1rem;
            color: #007bff;
            font-size: 0.9rem;
            text-align: center;
            display: block;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
   
    <div class="container">
       
        <h2>New User Registration</h2>
        <form method="POST" action="user_registration.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="user_username">User Name</label>
                <input type="text" name="user_name" id="user_username" placeholder="Enter your user name" required>
            </div>
            <div class="form-group">
                <label for="user_email">Email</label>
                <input type="email" name="user_email" id="user_email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="user_password">Password</label>
                <input type="password" name="user_password" id="user_password" placeholder="Enter new password" required>
            </div>
            <div class="form-group">
                <label for="conf_user_password">Confirm Password</label>
                <input type="password" name="conf_user_password" id="conf_user_password" placeholder="Confirm your password" required>
            </div>
            <div class="form-group">
                <label for="user_image">Profile Image</label>
                <input type="file" name="user_image" id="user_image" required>
            </div>
            <div class="form-group">
                <label for="user_mobile">Phone Number</label>
                <input type="text" name="user_mobile" id="user_mobile" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="user_address">Address</label>
                <input type="text" name="user_address" id="user_address" placeholder="Enter your address" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
        <p class="login-link">Already have an account? <a href="user_login.php">Login here</a></p>
    </div>
</body>
</html>
