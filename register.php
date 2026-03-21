<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .register-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            width: 340px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 25px;
            color: #333;
        }

        .input-group {
            margin-bottom: 18px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102,126,234,0.5);
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: #667eea;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .register-btn:hover {
            background: #5a67d8;
        }

        .extra {
            margin-top: 15px;
            font-size: 13px;
        }

        .extra a {
            color: #667eea;
            text-decoration: none;
        }

        .extra a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Register</h2>

    <form method="post" action="decisionMaker.php">
        <input type="hidden" name="register"/>

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter username" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required>
        </div>

        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" placeholder="Repeat password" required>
        </div>

        <input type="hidden" name="register" value="1">

        <button type="submit" class="register-btn">Create Account</button>

        <div class="extra">
            Already have an account? <a href="index.php">Login</a>
        </div>

    </form>
</div>

</body>
</html>