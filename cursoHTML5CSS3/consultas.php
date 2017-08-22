<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php">
                    <li>Cadastro</li>
                </a>
                <a href="consultas.php">
                    <li>
                     Consultas
                    </li>
                </a>
            </ul>
        </nav>
        <section>
           
            <h1>Confirmação de Cadastro</h1>
            <hr>
            <br><br>
            
            <?php 
            
                if ($linhas == 1){
                    print "Cadastro efetuado com sucesso!";
                } else {
                    print "Cadastro não efetuado. <br>
                    Já existe um usuario com este E-MAIL.";
                }
            
            ?>
            
        </section>
    </div>
</body>

</html>