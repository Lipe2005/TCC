<?php
if (!isset($_GET['busca'])){
    header("Location: produtos.php");
    exit;
}

$marca = "%".trim($_GET['busca'])."%";

$db = "produtos";

$sth = $dbh->produtos('SELECT * FROM 'produtos' where 'marca' LIKE :marca');
$sth->bindParam(':marca', $marca, PDO::PARAM_STR);

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado)
?>

<!DOCTYPE html>
<html>
    <head>
        <titel>Resultado da pesquisa</titel>
    </head>
    <body>
        <h2>Resultado</h2>
        <?php
        if (count($resultado)){
            foreach($resultado as $Resultado){
        ?>
        <label> <?php echo $Resultado['marca']; ?>
        <?php } else { ?>
        <label>.Não foram encontrados resultados pelo termo buscado.</label>
        <?php }?>
    </body>
</html>