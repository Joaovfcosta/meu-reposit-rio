<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../login/login.html");
    exit();
}
$usuario = $_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loja X</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>


<header>
  <div class="logo">JLER</div>
  <div class="cart-nav">
    <a href="carrinho.php">🛒</a>
    <a href="../login/logout.php" class="logout-btn">Sair</a>
  </div>
</header>


<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="produtos.php">Produtos</a></li>
  <li><a href="../estoque/index.php">Estoque</a></li>
</ul>


<div class="hero">
  <h2>Design que transforma ambientes</h2>
  <p>Escolha móveis modernos, minimalistas e feitos para durar. Estilo e conforto para cada espaço da sua casa.</p>
</div>


<section class="produtos"></section>


<footer>
  <p>© 2025 JLER Móveis — Todos os direitos reservados.</p>
</footer>

</body>
</html>
