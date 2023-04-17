<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro para o site Good Search</title>
    <link rel="stylesheet" href="formulario.css" />
</head>
<body>
<form method="POST" action="processa2.php" target="_blank">
<link rel="icon" type="image/x-icon" href="ideia.png">
</head>
<body>
    
    <div class="campo">
        <h1 id="titulo">Good Search</h1>
        <p id="subtitulo">Cadastre-se logo abaixo &#128161;</p>
        </div>
        <br>
<form>
    <fieldset class="grupo">
        <div class="campo">
    <label for="nome"><strong>Nome</strong></label>
    <input type="text" name="nome" id="nome" required>
</div>

<div class="campo">
    <label for="sobrenome"><strong>Sobrenome</strong></label>
    <input type="text" name="sobrenome" id="sobrenome" required>
</div>

<div class="campo">
    <label for="telefone"><strong>Telefone</strong></label>
    <input type="text" name="telefone" id="telefone" required>
    
</div>

    <div class="campo">
        <label for="cpf"><strong>CPF</strong></label>
        <input type="text" pattern="[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}" name="cpf" id="cpf" required>
    </div>

    <div class="campo">
        <label for="rg"><strong>RG</strong></label>
        <input type="text" pattern="[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}" name="rg" id="rg" required>
    </div>

</fieldset>

<fieldset class="grupo">

    <div class="campo">
        <label for="cidade"><strong>Cidade</strong></label>
    <input type="text" name="cidade" id="cidade" required>
    </div>

    <div class="campo">
        <label for="cep"><strong>CEP</strong></label>
        <input type="text" pattern="[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}" name="cep" id="cep" required>
    </div>

    <div class="campo">
        <label for="rua"><strong>Rua</strong></label>
    <input type="text" name="rua" id="rua" required>
    </div>

    <div class="campo">
        <label for="numero"><strong>Número da casa/apto</strong></label>
    <input type="text" name="numero" id="numero" required>
    </div>

    <div class="campo">
        <label for="bairro"><strong>Bairro</strong></label>
    <input type="text" name="bairro" id="bairro" required>
    </div>

    <div class="campo">
        <label for="estado"><strong>Estado</strong></label>
        <select id="estado">
            <option selected disabled value="">Selecione</option>
            <option>Selecione...</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="ES">ES</option>
            <option value="DF">DF</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select>
    </div>

</fieldset>
    

    <div class="campo">
        <label for="email"><strong>Email</strong></label>
        <input type="email" name="email" id="email" required>
    </div>


<div class="campo">
    <label for="sexo"><strong>Sexo</strong></label>
    <select id="sexo">
        <option selected disabled value="">Selecione</option>
        <option>Masculino</option>
        <option>Feminino</option>
        <option>Outro</option>
    </select>
</div>

<div class="campo">
    <label><strong>De qual lado da aplicação você desenvolve?</strong></label>
    <label>
        <input type="radio" name="devweb" value="frontend" checked> Front-end
    </label>
    <label>
        <input type="radio" name="devweb" value="backtnd"> Back-end
    </label>
    <label>
        <input type="radio" name="devweb" value="fullstack"> fullstack
    </label>
</div>

<fieldset class="grupo">
    <div id="check">
        <label><strong>Selecione as tecnologias que você utiliza:</strong></label>
        <br>
        <input type="checkbox" id="tecnologia1" name="tecnologia1" value="HTML">
        <label for="tecnologia1">HTML</label>
        <input type="checkbox" id="tecnologia2" name="tecnologia2" value="CSS">
        <label for="tecnologia2">CSS</label>
        <input type="checkbox" id="tecnologia3" name="tecnologia3" value="Javascript">
        <label for="tecnologia3">Javascript</label>
        <input type="checkbox" id="tecnologia4" name="tecnologia4" value="PHP">
        <label for="tecnologia4">PHP</label>
        <input type="checkbox" id="tecnologi5" name="tecnologia5" value="C#">
        <label for="tecnologia5">C#</label>
        <input type="checkbox" id="tecnologia6" name="tecnologia6" value="Python">
        <label for="tecnologia6">Python</label>
        <input type="checkbox" id="tecnologia7" name="tecnologia7" value="Java">
        <label for="tecnologia7">Java</label>
    </div>
</fieldset>
<div class="campo">
    <br>
    <label><strong> Conte um pouco sobre a sua experiência:</strong></label>
    <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
</div>

<button class="botao" type="submit">Concluído</button>

</form>


    </div>
</body>
</html>
