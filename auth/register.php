<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimasMod</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon"
        href="../Projeto_Final/assets/imagem_2025-03-31_122525329-removebg-preview.png">
</head>
<body>
    <header>
        <div class="logo"><a href="../index.php"><img src="../assets/imagem_2025-03-31_122525329-removebg-preview.png"
                    alt="SimasMod" style="width: 120px; height:90px; "></div></a>
        <nav>
            <a href="../index.php" class="btn">Voltar</a>
        </nav>
    </header>
    <main class="auth-container">
        <h1>Crie sua conta</h1>
        <form id="registerForm">
            <div class="form-group">
                <label for="username">Nome de usuário</label>
                <input type="text" id="username" required placeholder="NomeUsuario">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" required placeholder="@gmail.com">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" required placeholder="••••••••">
            </div>
            <button type="submit" class="btn-primary">Cadastrar</button>
        </form>
        <p>Já tem uma conta? <a href="login.html">Faça login</a></p>
    </main>
    
</body>

</html>
<?php include "../footer.php"?>