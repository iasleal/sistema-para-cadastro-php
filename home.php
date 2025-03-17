<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | IL</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(193, 84, 209), rgb(76, 14, 80));
            text-align: center;
            color: white; 
        }
        .box{
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid violet;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: violet;
        }
    </style>
</head>
<body>
    <h1>SITE | IL</h1>
    <h2>Selecione uma das opções abaixo:</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>