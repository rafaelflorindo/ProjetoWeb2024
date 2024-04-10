<?php
    $autor = "Rafael Florindo";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Web - 2024</title>
    <link href="./css/boot.css" rel="stylesheet" type = "text/css">
    <link href="./css/style.css" rel="stylesheet" type = "text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div>
            <!--  inserir logo -->
        </div>
       <nav>
            <ul>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Tutoriais</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav> 
    </header>
    
    <section>
        <header>
            <h1>Quem Somos</h1>
        </header>
        <div>
            Texto do Quem Somos
        </div>
    </section>
    
    <section>
        <header>
            <h1>Tutoriais</h1>
            <p>Aqui você encontrará alguns tutoriais abordados nos cursos! Aproveite!!!</p>
        </header>

        <article>
            <a href="#"><img src="#" alt="" title=""></a>
            <h2>Front-End</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </article>
        <article>
            <a href="#"><img src="#" alt="" title=""></a>
            <h2>Back-End</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </article>
        <article>
            <a href="#"><img src="#" alt="" title=""></a>
            <h2>Banco de Dados</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </article>
        <article>
            <a href="#"><img src="#" alt="" title=""></a>
            <h2>Designer</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </article>
    </section>
    
    <section>
        <header>
            <h1>Cursos</h1>
            <p>Aqui você encontrará alguns cursos sobre Desenvolvimento WEB!!!!</p>
        </header>

        <article>
            <a href="#"><img src="#" alt="" title=""></a>
            <h2>HTML 5</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </article>
        <article>
            <a href="#"><img src="#" alt="" title=""></a>
            <h2>PHP</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </article>
        <article>
            <a href="#"><img src="#" alt="" title=""></a>
            <h2>React</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </article>
        <article>
            <a href="#"><img src="#" alt="" title=""></a>
            <h2>Angular</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </article>
    </section>

    <section>
        <header>
            <h2>Entre em contato a nosso equipe para receber propostas de cursos.</h2>
            <form action="#" method="POST">
                <input type="text" name="nome" placeholder="Informe seu nome."><span>*</span>
                <input type="email" name="email" placeholder="Informe seu principal e-mail." required><span>*</span>
                <input type="submit" value="Enviar">
            </form>
        </header>
    </section>

    <footer>
        <div>
            <!--  inserir logo -->
        </div>
        <div>
            <ul>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Tutoriais</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        <div>Desenvolvido por: <?=$autor;?></div>
        <div>Redes sociais
            <!-- https://fontawesome.com/ -->
            <a href="#"><img src="./img/facebook.svg"></a>
            <a href="#"><img src="./img/instagram.svg"></a>
            <a href="#"><img src="./img/linkedin.svg"></a>
            <a href="#"><img src="./img/twitter.svg"></a>
        </div>
    </footer>
</body>
</html>