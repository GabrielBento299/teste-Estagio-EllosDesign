<?php
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px" href="mobile.css">
    <script src="https://kit.fontawesome.com/54b7b426e0.js" crossorigin="anonymous"></script>

</head>

<body>

    <nav id="navbar">

        <div id="navbar-container">
            <h1>MARKETING Ellos design</h1>

            <ul id="navbar-itens">
                <li><a href="#">Inicio</a></li>
                <li><a href="#about-container">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
                <button>Já tem uma conta?</button>
            </ul>
        </div>
    </nav>


    <main>

        <div class="main-text">
            <h2>insreva-se agora <span>Na Ellos design</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Voluptas sapiente ab fugiat repellat, aperiam sit cum sunt esse<br> tempora voluptatum id voluptate at praesentium dolorum quas aliquid ducimus eligendi? Maiores?</p>
            <form method="POST" action="">
                <input type="text" name="nome" placeholder="Digite seu Nome">
                <input type="email" name="email" placeholder="Digites seu Email">
                <input type="number" name="phone" placeholder="Digites seu Telefone">
                <input type="submit" name="submit" value="Enviar">
            </form>

            <?php
            if (!empty($_POST['email']) && !empty($_POST['nome']) && !empty($_POST['phone'])) {
                echo "<h1 style='color:green'>Email Cadastrado Com sucesso do nome $nome e do email $email (: </h1>";
            }
            ?>



        </div>
        <img src="assets/thumbnail_teste2_cricao_ebook.jpg" alt="ebook">


    </main>

    <footer>
        <div class="social-media">
            <h1>2021-Todos os direitos reservados</h1>
            <a href="https://github.com/GabrielBento299/"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/santosgabriel299/"><i class="fab fa-linkedin"></i></a>
        </div>

    </footer>



</body>

</html>