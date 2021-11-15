<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilos_login.css">
    <link rel="stylesheet" href="../css/estilos_denuncia.css">
    <link rel="stylesheet" href="../css/estilos_cad.css">
    <title>Zero Dengue</title>
    <style>
        
.exibe_conteudo{
    width:1000px;
    height: 500px;
    background-color: #fff;
    padding: 2vw;
    overflow:auto;
    display:flex;
    justify-content:center;
    /* align-items:center; */
    border-radius:1vw
}

    </style>
</head>
<body>
    <header class="topo">
        <ul>
            <a href="/index.php"><li>Home</li></a>
            <a href="#"><li>Feedback</li></a>
            <a href="#"><li>Sobre o projeto</li></a>
        </ul>
        <div class="cad">
            <a href="conteudo.php?file=login"><button>Login</button></a>
            <a href="conteudo.php?file=cadastro"><button>Cadastrar</button></a>
        </div>
    </header>

    <section class="banner">
        <section class="exibe_conteudo">
           
        <?php 
             
             include("{$_GET['file']}.php")

        ?>
        </section>
    </section>
</body>
</html>