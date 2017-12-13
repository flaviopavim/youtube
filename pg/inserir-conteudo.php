<?php

if (!empty($_POST['titulo'])) {
    
    include '../cn.php';
    
    $sql="INSERT INTO `conteudo` (`titulo`, `conteudo`) VALUES ('".$_POST['titulo']."', '".$_POST['conteudo']."')";
    
    mysqli_query($cn, $sql);
    
    //redirecionamento
    header('Location: ../?pagina=inserir-conteudo');
    //finaliza aplicação
    exit;
}


?>
<form action="pg/inserir-conteudo.php" method="post">
    
    Título
    <br>
    <input type="text" name="titulo">
    <br>
    Conteúdo
    <br>
    <textarea name="conteudo"></textarea>
    <br>
    <button type="submit">Enviar</button>
</form>