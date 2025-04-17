<?php include "../header.php"?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - SimaMod</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../assets/imagem_2025-03-31_122525329-removebg-preview.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
</head>

<body>
    <main class="marketplace-container">
        <h1>Marketplace</h1>
        <p>Encontre as peças perfeitas para seu projeto</p>
        <div class="search-bar">
            <input type="text" placeholder="Buscar peças...">
            <select>
                <option>Todas categorias</option>
                <option>Motor</option>
                <option>Suspensão</option>
                <option>Interior</option>
                <option>Exterior</option>
                <option>Elétrica</option>
            </select>
            <button class="btn-primary">Buscar</button>
        </div>
        <div class="parts-grid">
            <div class="part-card">
                <div class="part-image"><img src="../assets/roda.jpg" alt="Gol GTI Turbo"
                        style="width:100%; height:100%; object-fit:cover;"></div>
                <div class="part-info">
                    <h3>Jogo de Rodas Aro 17</h3>
                    <p>Rodas esportivas leves, 5x112</p>
                    <div class="part-price">€ 2.800,00</div>
                    <div class="seller-info">
                        <div class="seller-avatar"><img src="../assets/luciel.jpg"></div>
                        <span>FlavinPneu</span>
                    </div>
                </div>
            </div>
            <div class="part-card">
                <div class="part-image"><img src="../assets/turbo.jpg" alt="Gol GTI Turbo"
                        style="width:100%; height:100%; object-fit:cover;"></div>
                <div class="part-info">
                    <h3>Turbo Garrett</h3>
                    <p>Novo na caixa, nunca usado</p>
                    <div class="part-price">€ 6.500,00</div>
                    <div class="seller-info">
                        <div class="seller-avatar"><img src="../assets/cinema.jpg"></div>
                        <span>xTurbos</span>
                    </div>
                </div>
            </div>
            <div class="part-card">
                <div class="part-image"><img src="../assets/body.jpg" alt="Gol GTI Turbo"
                        style="width:100%; height:100%; object-fit:cover;"></div>
                <div class="part-info">
                    <h3>Kit Body Kit Widebody</h3>
                    <p>Para Honda Civic 10ª geração</p>
                    <div class="part-price">€ 3.200,00</div>
                    <div class="seller-info">
                        <div class="seller-avatar"><img src="../assets/real.jpg"></div>
                        <span>ZeDoBody</span>
                    </div>
                </div>
            </div>
            <div class="part-card">
                <div class="part-image"><img src="../assets/farol.jpg" alt="Gol GTI Turbo"
                        style="width:100%; height:100%; object-fit:cover;"></div>
                <div class="part-info">
                    <h3>Farol de LED</h3>
                    <p>Conjunto completo</p>
                    <div class="part-price">€ 1.150,00</div>
                    <div class="seller-info">
                        <div class="seller-avatar"><img src="../assets/thola.jpg"></div>
                        <span>LuiziaLuzes</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../script.js"></script>
   
</body>

</html>
<?php include "../footer.php"?>