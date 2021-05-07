<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_import extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('excel_import_model');
  $this->load->library('excel');
 }
 
 function import()
 {
  if(isset($_FILES["file"]["name"]))
  {
   $path = $_FILES["file"]["tmp_name"];
   $object = PHPExcel_IOFactory::load($path);
   foreach($object->getWorksheetIterator() as $worksheet)
   {
    $highestRow = $worksheet->getHighestRow();
    $highestColumn = $worksheet->getHighestColumn();
    for($row=2; $row<=$highestRow; $row++)
    {

     $Ley_pk            = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
     $Fecha             = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
     $FUltReforma       = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
     $FEntradaVigo      = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
     $EstLey            = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
     $ObjLey            = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
     $TipoLey           = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
     $Introduccion      = $worksheet->getCellByColumnAndRow(7, $row)->getValue();

     $Num_Articulo      = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
     $Tipo              = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
     $Titulo            = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
     $Ref_Titulo        = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
     $NomTitulo         = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
     $Capitulo          = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
     $Ref_Capitulo      = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
     $NomCapitulo       = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
     $Fraccion          = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
     $Inciso            = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
     $Parrafo           = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
     $Descripcion       = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
     $UltReforma        = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
     $Concepto          = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
     $Estatus           = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
     $Estado            = $worksheet->getCellByColumnAndRow(23, $row)->getValue();



     $data[] = array(
      'Ley_pk'          => $Ley_pk,
      'Fecha'           => $Fecha,
      'FUltReforma'     => $FUltReforma,
      'FEntradaVigo'    => $FEntradaVigo,
      'EstLey'          => $EstLey,
      'ObjLey'          => $ObjLey,
      'TipoLey'         => $TipoLey,
      'Introduccion'    => $Introduccion,

      'Num_Articulo'    => $Num_Articulo,
      'Tipo'            => $Tipo,
      'Titulo'          => $Titulo,
      'Ref_Titulo'      => $Ref_Titulo,
      'NomTitulo'       => $NomTitulo,
      'Capitulo'        => $Capitulo,
      'Ref_Capitulo'    => $Ref_Capitulo,
      'NomCapitulo'     => $NomCapitulo,
      'Fraccion'        => $Fraccion,
      'Inciso'          => $Inciso,
      'Parrafo'         => $Parrafo,
      'Descripcion'     => $Descripcion,
      'UltReforma'      => $UltReforma,
      'Concepto'        => $Concepto,
      'Estatus'         => $Estatus,
      'Estado'          => $Estado
     );
    }
   }
   $this->excel_import_model->insert($data);
   echo 'Data Imported successfully';
  } 
 }
}

?>
