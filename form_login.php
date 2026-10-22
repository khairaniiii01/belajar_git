<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>

    <style>
        body {
            font-family: Arial;
            background-color: #baf8ba;
        }

        .form-container {
            width: 300px;
            margin: 80px auto;
            padding: 50px;
            background-color: white;
            border: 2px solid #ddd;
            border-radius: 15px;
        }

        h1 {
            text-align: center;
            color: green;
            font-size: 24px;
        }

        input {
            width: 100%;
            padding: 8px;
        }

        button {
            background-color: green;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <div class="form-container">
        <h1>Form Login </h1>

        <form action="http://localhost/insert/form_proses.php" method="POST">

            <label>Usename</label><br>
            <input type="text" name="username">

            <br><br>

            <label>Password</label><br>
            <input type="password" name="password">

            <br><br>

            <button type="submit">Simpan Data</button>

        </form>
    </div>

</body>
</html>