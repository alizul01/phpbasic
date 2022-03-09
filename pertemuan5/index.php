<?php 
// Cek tombol submit
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        .wrapper {
            width: 350px;
            margin: 0 auto;
        }
        
        * {
            font-family: 'Open Sans', sans-serif;
        }
        
        h1 {
            text-align: center;
        }
        
        label {
            display: block;
        }
        
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            transition: all 0.5s ease;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        input:hover {
            background-color: #ddd;
        }
        
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>Login Sederhana</h1>
        <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Password salah</p>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>