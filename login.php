<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(193, 84, 209), rgb(76, 14, 80));
            color: white;
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 5%;
        border-radius: 15px;
        color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: violet;
            border:none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: rgb(153, 86, 216);
            cursor:pointer ;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>
            Login
        </h1>
        <form action="testlogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input  class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>