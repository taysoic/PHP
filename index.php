<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimasMod - Plataforma de Modificação Automotiva</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon"
        href="../Projeto_Final/assets/imagem_2025-03-31_122525329-removebg-preview.png">
</head>
<body>
<header>
        <div class="logo"><a href="index.php"><img
                    src="..\PHP\assets\imagem_2025-03-31_122525329-removebg-preview.png" alt="SimasMod"
                    style="width: 120px; height:90px; "></div></a>
        <nav>
            <a href="sobre.php">Sobre</a>
            <a href="auth/login.php">Login</a>
            <a href="auth/register.php" class="btn-primary">Cadastre-se</a>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>Transforme seu veículo na plataforma definitiva de tuning</h1>
            <p>Conecte-se com entusiastas, encontre peças e compartilhe seus projetos</p>
            <a href="auth/register.html" class="btn-primary">Comece Agora</a>
        </section>
        <section id="features" class="features">
            <h2>O que oferecemos?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <h3>Marketplace</h3></a>
                    <p>Compre e venda peças novas e usadas</p>
                </div>
                <div class="feature-card">
                    <h3>Comunidade</h3></a>
                    <p>Conecte-se com outros entusiastas</p>
                </div>
                <div class="feature-card">
                    <h3>Ferramentas</h3></a>
                    <p>Simule modificações e calcule desempenho</p>
                </div>
            </div>
            <hr class="nohr">
            <h2>Galeria Projetos</h2>
            <hr class="nohr">
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/3c848f4f13cb8e7b024c9eefc797fef0.jpg" alt="Gol GTI Turbo"
                            style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div class="project-info">
                        <h3>Gol GTI Turbo</h3>
                        <p>Projeto completo de preparação 1.8 16v</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image"><img src="assets/accbf15e00e8429f0a1b353548d1c10f.jpg"
                            alt="Civic" style="width:100%; height:100%; object-fit:cover;"></div>
                    <div class="project-info">
                        <h3>Civic Type-R</h3>
                        <p>Conversão estética para FK8</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image"><img src="assets/0a11fbc6300e4c59aa92dc1cf70ba768.jpg"
                            alt="911" style="width:100%; height:100%; object-fit:cover;"></div>
                    <div class="project-info">
                        <h3>Porsche 911</h3>
                        <p>Preparação para Pista</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
   
</body>

</html>
<?php include "footer.php"?>