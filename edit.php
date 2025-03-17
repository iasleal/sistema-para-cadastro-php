<?php

    include_once('config.php');

    if(!empty($_GET['id']))
    {

      $id = $_GET['id'];

      $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

      $result = $conexao->query($sqlSelect);

      if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $data_nascimento = $user_data['data_nascimento'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
        }
    }
    else
    {
        header('Location: sistema.php');
    }

    }
    else
    {
        header('Location: sistema.php');
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
        #update{
            background-image: linear-gradient(to right, rgb(193, 84, 209), rgb(193, 84, 209));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px; 
        }
        #update:hover{
            background-image: linear-gradient(to right, rgb(76, 14, 80),  rgb(76, 14, 80));
        }
    </style>
</head>
<body>
<a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="passxord" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha:</label>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">E-mail:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                    <label for="nome" class="labelInput">Telefone:</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outros" name="genero" value="outros" <?php  echo ($sexo == 'outros') ? 'checked' : '' ?> required>
                <label for="outros">Outro</label>
                <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nascimento ?>" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
                    <label for="cidade" class="labelInput">Cidade:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>" required>
                    <label for="estado" class="labelInput">Estado:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                    <label for="endereco" class="labelInput">Endereço:</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="update">
            </fieldset>
    </div>
</body>
</html>