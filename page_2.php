<?php include('header.php');?>
<?php $aqui = "En este lugar corresponde algo con PHP"?>
<div class="inner cover">
<h2 class="cover-heading">Más sobre el tema</h2>
<p class="lead"><?php echo $aqui;?></p>
<?php
$json = file_get_contents('data/data_cenabast.json');
$json_data = json_decode($json,true);
?>
<p> Sabemos que hay <?php echo $all = count($json_data);?> compras de mecidamentos</p>
<ol>
    <?php $directo = 0; ?>
    <?php for ($n = 0; $n < $all; $n++){?>
    <?php if (substr_count($json_data[$n]['data']['buyingby']) > 0){?>

        <?php};?>
        <?php};?>

</ol>
</div>

<?php include('footer.php');?>
