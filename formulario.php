<?php
  
    if(isset($_POST['submit']))
    {
      //  print_r('Nome: ' . $_POST['nome']); 
      //  print_r('<br>');
      //  print_r('Email: ' . $_POST['email']);
      //  print_r('<br>');
      //  print_r('Telefone: ' . $_POST['telefone']);
      //  print_r('<br>');
      //  print_r('Genero: ' . $_POST['genero']);
      //  print_r('<br>');
      //  print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
      //  print_r('<br>');
      //  print_r('Cidade: ' . $_POST['cidade']);
      //  print_r('<br>');
      //  print_r('Estado: ' . $_POST['estado']);
      //  print_r('<br>');
      //  print_r('Endereço: ' . $_POST['endereco']);

      include_once('config.php');

      $nome = $_POST['nome'];
      $senha = $_POST['senha'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $sexo = $_POST['genero'];
      $data_nasc = $_POST['data_nascimento'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];
      $endereco = $_POST['endereco'];

      $result =mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nascimento,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

      header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | IL</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(193, 84, 209), rgb(76, 14, 80));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid violet;
        }
        legend{
            border: 1px solid violet;
            padding: 10px;
            text-align: center;
            background-color: violet;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: violet;
        }
        #data_nascimento{
            border: none;
            padding: 6px;
            border-radius: 10px;
            outline: none;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(193, 84, 209), rgb(193, 84, 209));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px; 
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(76, 14, 80),  rgb(76, 14, 80));
        }
    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="passxord" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha:</label>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="nome" class="labelInput">Telefone:</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outros" name="genero" value="outros" required>
                <label for="outros">Outro</label>
                <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço:</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
    </div>
</body>
</html>