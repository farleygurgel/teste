<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="formtable" action="gravar.php" method="POST">

<h2>Gerador de tabelas</h2> 

<p>Titulo: <input type="text" name="titulo" value="" size="15" /> </p>

<p>Linhas: <input type="text" name="linhas" value="" size="5" /> </p>

<p>Colunas: <input type="text" name="colunas" value="" size="5" /> </p>

<input type="submit" value="gerar" name="gerar" />

<input type="reset" value="limpar" name="limpar" />

<?php

?>        
       
    </body>
</html>
