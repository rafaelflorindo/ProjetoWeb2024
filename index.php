<?php
    $autor = "Rafael Florindo";

    $tutoriais = array(
        0=>array("codigo"=>'1', 
        "titulo"=>"Front-End", 
        "descricao"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "imagem"=>"front-end-developer.png"),
        1=>array("codigo"=>'2', 
        "titulo"=>"Back-End", 
        "descricao"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "imagem"=>"front-end-developer.png"),
        2=>array("codigo"=>'3', 
        "titulo"=>"Banco de Dados", 
        "descricao"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "imagem"=>"front-end-developer.png"),
        3=>array("codigo"=>'4', 
        "titulo"=>"Designer", 
        "descricao"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "imagem"=>"front-end-developer.png"),
    );

    $cursos = array(
        0=>array("codigo"=>'1', 
        "titulo"=>"HTML 5", 
        "descricao"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "imagem"=>"Curso-online.webp"),
        1=>array("codigo"=>'2', 
        "titulo"=>"PHP", 
        "descricao"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "imagem"=>"Curso-online.webp"),
        2=>array("codigo"=>'3', 
        "titulo"=>"React", 
        "descricao"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "imagem"=>"Curso-online.webp"),
        3=>array("codigo"=>'4', 
        "titulo"=>"Angular", 
        "descricao"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "imagem"=>"Curso-online.webp"),
    );
/*echo "<pre>";
print_r($tutoriais);
var_dump($tutoriais);
echo "</pre>";*/
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="main_header">
        <div class="main_header_logo">
            <!--  inserir logo -->
        </div>
        <nav class="main_header_nav">
            <ul>
                <li><a href="index.php#quemSomos">Quem Somos</a></li>
                <li><a href="index.php#tutoriais">Tutoriais</a></li>
                <li><a href="index.php#cursos">Cursos</a></li>
                <li><a href="index.php#contato">Contato</a></li>
            </ul>
        </nav> 
    </header>
    
    <section class="main_quemSomos">
        <header>
            <a name="quemSomos"><h1>Quem Somos</h1></a>
        </header>
        <div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry,
        Lorem Ipsum is simply dummy text of the printing and typesetting industry,
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        <a href="#">Veja mais</a>
        </p>
        </div>
    </section>
    
    <section class="main_tutoriais">
        <header>
            <a name="tutoriais"><h1>Tutoriais</h1></a>
            <p>Aqui você encontrará alguns tutoriais abordados nos cursos! Aproveite!!!</p>
        </header>

        <?php
            foreach($tutoriais as $key => $value){
            ?>
            <article>
                <a href="#">
                    <img src="./img/<?=$value["imagem"];?>" alt="" title="" width="150px"></a>
                <h2><?=$value["titulo"];?></h2>
                <p><?=$value["descricao"];?></p>
            </article>
            <?php
            }
        ?>
        <!--<article>
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
        </article>-->
    </section>
    
    <section class="main_cursos">
        <header>
            <a name="cursos"><h1>Cursos</h1></a>
            <p>Aqui você encontrará alguns cursos sobre Desenvolvimento WEB!!!!</p>
        </header>

        <?php
            foreach($cursos as $key => $value){
            ?>
            <article>
                <a href="#">
                    <img src="./img/<?=$value["imagem"];?>" alt="" title="" width="150px"></a>
                <h2><?=$value["titulo"];?></h2>
                <p><?=$value["descricao"];?></p>
            </article>
            <?php
            }
        ?>
        <!--<article>
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
        </article>-->
    </section>

    <section class="main_contato">
        <header>
        <a name="contato"><h2>Entre em contato a nosso equipe para receber propostas de cursos.</h2></a>
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