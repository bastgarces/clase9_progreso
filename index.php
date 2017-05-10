<?php include('header.php');?>
<div class="inner cover">
<h2 class="cover-heading">¿A quién le compra Cenabast?</h2>
<p class="lead">La Central Nacional de Abastecimiento (Cenabast) es el organismo que compra los medicamentos para abastecer a los diferentes recintos asistenciales de salud del país, no obstante éstos no están obligados a comprarle de forma exclusiva a Cenabast.</p>
<?php
$json = file_get_contents('data/data_cenabast.json');
$json_data = json_decode($json,true);
?>
<p>Lo que ahora nos interesa saber es: cuántas de las <?php echo $all = count($json_data);?> compras realizadas fueron por trato directo.</p>
</div>
<?php include('footer.php');?>
