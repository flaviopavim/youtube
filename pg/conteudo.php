<?php
$sql="SELECT * FROM conteudo WHERE id=".$_GET['id'];
$query = mysqli_query($cn, $sql);
$dados=mysqli_fetch_assoc($query);
?>
<a href="./">Voltar</a>
<h4><?php echo $dados['titulo']; ?></h4>
<?php
echo $dados['conteudo'];