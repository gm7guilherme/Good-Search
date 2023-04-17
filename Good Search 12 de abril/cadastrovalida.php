<?php
session_start();
?>
<html lang='pt-br'>
    <head>
        <meta charset= 'UTF-8'>
        <title>Cadastro</title>
    </head>
    <body>
        <h1> <div style="text-align:center">cadastro </h1><br><br>
        
        <form method="POST" action="conexao.php">


            <label> <div style="text-align:center">nome:</label>
            <input type="text" name="nome" placeholder="Nome"><br><br>

           <label> <div style="text-align:center">Sobrenome:</label>
            <input type="text" name="sobrenome" placeholder="Sobrenome"><br><br>


           <label> <div style="text-align:center">telefone:</label>
            <input type="number" name="telefone" placeholder="Telefone"><br><br>


            <label> <div style="text-align:center">cpf:</label>
            <input type="text" name="cpf" placeholder="Digite seu cpf."><br><br>


            <label><div style="text-align:center">RG:</label>
            <input type="text" name="RG"  min="7" max="17"  ><br><br>


            <label><div style="text-align:center">Rua: </label>
            <input type="text" name="Rua" required><br><br>
			
			
            <label><div style="text-align:center">Numero: </label>
            <input type="text" name="Numero" required><br><br>
			
			
            <label><div style="text-align:center">Bairro: </label>
            <input type="text" name="Bairro" required><br><br>
			
			
            <label><div style="text-align:center">Estado: </label>
            <input type="text" name="Estado" required><br><br>
			
			
            <label><div style="text-align:center">cidade: </label>
            <input type="text" name="Cidade" required><br><br>
			
			
            <label><div style="text-align:center">ponto de referência: </label>
            <input type="text" name="ponto_de_referencia" required><br><br>
			
			
            <label><div style="text-align:center">cep: </label>
            <input type="text" name="cep" required><br><br>
			
			
            <label> <div style="text-align:center">email:</label>
            <input type="email" name="email" placeholder="Digite um email válido."><br><br>


            <label><div style="text-align:center">Login: </label>
            <input type="text" name="login" required><br><br>


            <label><div style="text-align:center">Senha: </label>
            <input type="password" name="Senha" required><br><br>


            <label><div style="text-align:center">lembrete_da_senha: </label>
            <input type="text" name="lembrete_da_senha" required><br><br>

            <label><div style="text-align:center">redesocial: </label>
            <input type="text" name="redesocial" required><br><br>






            

            <br>
            <br>
            <input type="submit" value="Cadastrar">
        </form>

        <?php 
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>

    </body>

    </html>