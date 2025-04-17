<?php include "../header.php"?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - SimasMod</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../assets/imagem_2025-03-31_122525329-removebg-preview.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
</head>

<body>
    <main class="profile-container">

        <div class="profile-header">
            <div class="profile-avatar">
                <img src="../assets/perfil.jpg" alt="Avatar" style="width:100%;height:100%;object-fit:cover;">
            </div>
            <div class="profile-info">
                <h1>Tayson</h1>
                <p>Entusiasta de carros desde 2004 · São Paulo, SP</p>
                <p>Amador de carro desde quando nasceu</p>
            </div>
            <div class="profile-stats">
                <div class="stat-item">
                    <div class="stat-number">3</div>
                    <div>Projetos</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">240</div>
                    <div>Seguindo</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">354</div>
                    <div>Seguidores</div>
                </div>
            </div>
        </div>
        </div>
        <div class="profile-tabs">
            <div class="tab active" data-tab="projects">Projetos</div>
            <div class="tab" data-tab="activity">Atividade</div>
            <div class="tab" data-tab="garage">Minha Garagem</div>
            <div class="tab" data-tab="settings">Configurações</div>
        </div>
        <div id="projects" class="tab-content active">
            <h2>Projetos em Destaque</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image"><img src="../assets/3c848f4f13cb8e7b024c9eefc797fef0.jpg"
                            alt="Gol GTI Turbo" style="width:100%; height:100%; object-fit:cover;"></div>
                    <div class="project-info">
                        <h3>Gol GTI Turbo</h3>
                        <p>Preparação completa 1.8 16v</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 65%;"></div>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image"><img src="../assets/accbf15e00e8429f0a1b353548d1c10f.jpg"
                            alt="Gol GTI Turbo" style="width:100%; height:100%; object-fit:cover;"></div>
                    <div class="project-info">
                        <h3>Honda Civic Type-R</h3>
                        <p>Conversão estética FK8</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 30%;"></div>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image"><img src="../assets/0a11fbc6300e4c59aa92dc1cf70ba768.jpg"
                            alt="Gol GTI Turbo" style="width:100%; height:100%; object-fit:cover;"></div>
                    <div class="project-info">
                        <h3>Porsche 911</h3>
                        <p>Preparação para Pista</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="activity" class="tab-content">
            <h2>Minha Atividade</h2>
            <div class="activity-item">
                <div class="activity-icon">💬</div>
                <div>
                    <p>Você comentou no tópico "Melhor suspensão para track day"</p>
                    <small>2 horas atrás</small>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">🛒</div>
                <div>
                    <p>Comprou um Turbo Garrett GTX3071R no Marketplace</p>
                    <small>Ontem</small>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">📝</div>
                <div>
                    <p>Atualizou o progresso do projeto Gol GTI Turbo para 65%</p>
                    <small>3 dias atrás</small>
                </div>
            </div>
        </div>
        <div id="garage" class="tab-content">
            <h2>Minha Garagem</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image"><img src="../assets/3c848f4f13cb8e7b024c9eefc797fef0.jpg"
                            alt="Gol GTI Turbo" style="width:100%; height:100%; object-fit:cover;"></div>
                    <div class="project-info">
                        <h3>Volkswagen Gol GTI </h3>
                        <p>1.8 16v Turbo - 280cv</p>
                        <div class="project-stats">
                            <span>65% completo</span>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image"><img src="../assets/accbf15e00e8429f0a1b353548d1c10f.jpg"
                            alt="Honda Civic" style="width:100%; height:100%; object-fit:cover;"></div>
                    <div class="project-info">
                        <h3>Honda Civic Type-R </h3>
                        <p>2.0 Aspirado - Projeto Type-R</p>
                        <div class="project-stats">
                            <span>30% completo</span>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image"><img src="../assets/0a11fbc6300e4c59aa92dc1cf70ba768.jpg" alt="911"
                            style="width:100%; height:100%; object-fit:cover;"></div>
                    <div class="project-info">
                        <h3>Porsche 911 </h3>
                        <p> 3.0L VVT Turbo - Porsche 911</p>
                        <div class="project-stats">
                            <span>80% completo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="settings" class="tab-content">
            <h2>Configurações da Conta</h2>
            <div class="activity-item">
                <div class="form-group">
                    <form class="settings-form">
                        <label>Nome: </label>
                        <input type="text" value="Tayson">
                </div>
                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="email" value="usuario@tunner.com">
                </div>
                <div class="form-group">
                    <label>Localização:</label>
                    <input type="text" value="São Paulo, SP">
                </div>
                <div class="form-group">
                    <label>Biografia:</label>
                    <textarea rows="3">Amador de carro desde quando nasceu</textarea>
                </div>
                <div class="form-group">
                    <label>Alterar Senha:</label>
                    <input type="password" placeholder="Nova senha">
                    <P></P>
                    <input type="password" placeholder="Confirmar nova senha" style="margin-top: 0.5rem;">
                </div>
                <button type="submit" class="btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../script.js"></script>

</body>

</html>
<?php include "../footer.php"?>