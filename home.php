<?php 

    include('config.php');  
    require_once ('repository/LivroRepository.php');
    $titulo = filter_input(INPUT_GET, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);

?>

<!doctype html>

<html lang="pt_BR">

  <head>
 
    <title>Livraria Online</title>
    
    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />   
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

    
    <link rel="stylesheet" href="css/menu-superior.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/home.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/livreta.css" type="text/css" media="screen" />
    
   
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">  
      


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <div id="banner">
   
  <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/banner1.jpeg" data-thumb="images/banner1.jpeg" alt="" title="Livraria" />
                <img src="images/banner2.jpeg" data-thumb="images/banner2.jpeg" alt="" title="Livraria" />
                <img src="images/banner3.jpeg" data-thumb="images/banner3.jpeg" alt="" title="Livraria" data-transition="slideInLeft" />
                
            </div>            
        </div>
    </div><!-- Fim banner-->

    <div id="anuncioproduto">

        Aqui você encontrará a maior variedade de livros.

    </div><!-- Fim Anúncio Produto-->   
  <body>
    <?php include('navbar.php'); ?>

    <link rel="stylesheet" href="css/estilo.css">

    <div class="col-10 offset-1 mt-5">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Livraria Online</h1>
                <p class="col-md-15 fs-4">Escolha o livro desejado e clique no link para fazer o download gratuito.<br> </p>
            </div>
        </div>
    </div>

      <?php foreach(fnLocalizaLivroPorNome($titulo) as $livro): ?>

        <div class="card-vitrine">
            <img src="<?= $livro->foto ?>" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $livro->titulo ?></h5>
                <p class="card-text">Autor: <?= $livro->autor ?></p>
            </div>
            <p class="card-text">Editora: <?= $livro->editora ?></p>
            
            <td class="download"><a href="<?= $livro->arquivo ?>" download="">Faça Download Aqui</a></td>
            <br> 
        </div> 

  <?php endforeach; ?> 

    <?php include("rodape.php"); ?>
  </body>

</html>