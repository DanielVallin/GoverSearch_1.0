
<<<<<<< HEAD
<?php 
    //echo $terminos[0]['pk_Datos_ley'];
    //echo '<pre>'; print_r($terminos); echo '</pre>';
?>
    <?php foreach ($terminos as $termino):?>

        <br>
        <?php echo $termino['pk_Datos_ley']; ?>
        <?php echo $termino['termino']; ?>
        <?php echo $termino['ley']; ?>
        <?php echo $termino['Articulo']; ?>
        <?php echo $termino['Descripcion']; ?>
        <br>

    <?php endforeach;?>
    

=======
<p><strong>Nombre de la Ley: </strong> <?php echo $terminos->ley; ?></p>
<p><strong>Termino de la Ley: </strong> <?php echo $terminos->termino; ?></p>
<p><strong>Articulo de la Ley: </strong> <?php echo $terminos->Articulo; ?></p>
>>>>>>> master

<button> Gener PDF </button>
<button href="<?php echo base_url();?>Menu/cBuscador" >Volver</button>

