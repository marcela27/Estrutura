<html>
    <head>
        <title>Opção <?php echo $_GET['opcao']; ?></title>
    </head>
    <body>
        <?php if($_GET['opcao'] == 1){ ?>
            <h1>Opção 1</h1>
            <?php }elseif($_GET['opcao'] == 2) { ?>
                <h1>Opção 2</h1>
            <?php }else{ ?>
                <h1>Opção 3</h1> 
            <?php } ?>
    </body>
</html>