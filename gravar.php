<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina!!</title>
    </head>
    <body>
        <?php
$linhas=$_POST['linhas'];
$colunas=$_POST['colunas']; 
$titulo=$_POST['titulo'];
    echo "<table border='1px'>";
    echo "<caption><h3>$titulo</h3></Caption>";
for($l=1;$l<=$linhas;$l++){
    echo "<tr>";
for($c=1;$c<=$colunas;$c++){
    echo "<td> $l /$c</td>"; 
}
    echo "</tr>"; 
}
    echo "</table>";
        ?>       
    </body>
</html>
