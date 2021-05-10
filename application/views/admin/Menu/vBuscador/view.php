
<?php 
    //echo $terminos[0]['pk_Datos_ley'];
    echo '<pre>'; print_r($terminos); echo '</pre>';
?>

    <?php if(!empty($terminos)):?>
        <?php foreach($terminos as $termino):?>
            <div class="panel panel-primary">
      <div class="panel-heading">Ley: <strong><?php echo $termino['Nombre_de_Ley']; ?> </strong></div>
      <div class="panel-body">
        <table>                
          <strong>Titulo: <?php echo $termino['Titulo']; ?></strong>
            <br>
          <strong>Capitulo: <?php echo $termino['Capitulo']; ?></strong>
            <br>
          <strong>Descripcion: <?php echo $termino['Descripcion']; ?></strong>
            <br>
          <strong>fraccion: <?php echo $termino['Fraccion']; ?></strong>
            <br>
          <strong>Inciso: <?php echo $termino['Inciso']; ?></strong>
            <br>
          <strong>Parrafo: <?php echo $termino['Parrafo']; ?>   </strong>
        </table>
      </div>
    </div>
            
                        
        <?php endforeach;?>
    <?php endif;?>

    
<hr>

<button> Gener PDF </button>
<button href="<?php echo base_url();?>Menu/cBuscador" >Volver</button>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3><kbd>Home</kbd></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3><kbd>Menu 1</kbd></h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3><kbd>Menu 2</kbd></h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3><kbd>Menu 3</kbd></h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
  <div class="panel panel-primary">
      <div class="panel-heading">Panel with panel-primary class</div>
      <div class="panel-body">Panel Content</div>
    </div>
</div>


</body>
</html>