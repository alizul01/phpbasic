<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <style>
        form {
            margin-top: 20px;
        }

        form label, form input {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        form input {
            /* design input */
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #fafafa;
            color: #333;
        }

        form button {
            /* design button */
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #fafafa;
            color: #333;
            cursor: pointer;
            transition: 0.3s;
        }

        form button:hover {
            background-color: #eee;
        }

        ::selection {
            background-color: #fafafa;
            color: #333;
        }
    </style>
</head>
<body>
    <form action="latihan4.php" method="$_POST" type="text" name="nama">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Alamat</label>
        <input type="text" name="alamat">
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>