<?php
session_start();

$email = $_SESSION ['email'];{

    $sql = "SELECT * FROM inicio_login WHERE email_institu = '$email'";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <link rel="stylesheet" href="styles/agenda.css">
</head>
<body>
    <style>
        .email h2{
            margin-top: -20rem;
            
        }
    </style>
    <div class="email">
    <h2><?=$email?></h2>
</div>
    <div class="calendario">
        <div class="header">
            <button onclick="mudarMes(-1)"> < </button>
            <h2 id="titulo"></h2>
            <button onclick="mudarMes(1)"> > </button>
        </div>
        <div class="dias-semana">
            <div>Dom</div>
            <div>Seg</div>
            <div>Ter</div>
            <div>Qua</div>
            <div>Qui</div>
            <div>Sex</div>
            <div>Sab</div>
        </div>
        <div class="dias" id="dias"></div>
    </div>
 <form action="php/agenda.php" method="post" class="criarEventoForm">
        <span onclick="fecharModal()" class="fechar">Criar Evento</span>
    <div class="eventoModal" id="eventoModal">
        <h3>Adicionar Evento</h3>
        <input type="date"   id="data"name="data" required>
        <input type="text" id="evento"name="evento" placeholder="Descrição do Evento" required>
        <button onclick="adicionarEvento()" type="submit" id="enviar" name="enviar">Adicionar</button>
    </div>
</form>

    <script src="javascript/agenda.js"></script>
</body>
</html>