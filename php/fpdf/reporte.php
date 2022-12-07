<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      //include '../../recursos/Recurso_conexion_bd.php';//llamamos a la conexion BD


      // $this->Image('logo.png', 185, 5, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('CRUD'), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* UBICACION */
      // $this->Cell(110);  // mover a la derecha
      // $this->SetFont('Arial', 'B', 10);
      // $this->Cell(96, 10, utf8_decode("Ubicación : "), 0, 0, '', 0);
      // $this->Ln(5);

      // /* TELEFONO */
      // $this->Cell(110);  // mover a la derecha
      // $this->SetFont('Arial', 'B', 10);
      // $this->Cell(59, 10, utf8_decode("Teléfono : "), 0, 0, '', 0);
      // $this->Ln(5);

      // /* COREEO */
      // $this->Cell(110);  // mover a la derecha
      // $this->SetFont('Arial', 'B', 10);
      // $this->Cell(85, 10, utf8_decode("Correo : "), 0, 0, '', 0);
      // $this->Ln(5);

      // /* TELEFONO */
      // $this->Cell(110);  // mover a la derecha
      // $this->SetFont('Arial', 'B', 10);
      // $this->Cell(85, 10, utf8_decode("Sucursal : "), 0, 0, '', 0);
      // $this->Ln(10);

      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(228, 100, 0);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE USUARIOS"), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(228, 100, 0); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 9);
      $this->Cell(18, 10, utf8_decode('N°'), 1, 0, 'C', 1);
      $this->Cell(50, 10, utf8_decode('Nombre Completo'), 1, 0, 'C', 1);
      $this->Cell(65, 10, utf8_decode('Corre Electronico'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('Usuario'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('Tipo de Usuario'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      date_default_timezone_set('America/Mexico_City');
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

$conexion=new mysqli('localhost', 'root', '', 'html');

//include '../../recursos/Recurso_conexion_bd.php';
//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
//$consulta_info = $conexion->query(" select *from hotel ");
//$dato_info = $consulta_info->fetch_object();

$pdf = new PDF();
$pdf->AddPage(); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 8);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

$consulta_reporte_usuario = $conexion->query("SELECT * FROM tbl_users INNER JOIN ctg_tipousuario ON tbl_users.id_tipousuario = ctg_tipousuario.id_tipousuario ORDER BY tbl_users.tx_nombre ASC;");

while ($datos_reporte = $consulta_reporte_usuario->fetch_object()) {      
   $i = $i + 1;
   /* TABLA */
   $pdf->Cell(18, 10, utf8_decode($i), 1, 0, 'C', 0);
   $pdf->Cell(50, 10, utf8_decode($datos_reporte->tx_nombre . " " . $datos_reporte->tx_apellidoPaterno ." ". $datos_reporte->tx_apellidoMaterno), 1, 0, 'C', 0);
   $pdf->Cell(65, 10, utf8_decode($datos_reporte->tx_correo), 1, 0, 'C', 0);
   $pdf->Cell(25, 10, utf8_decode($datos_reporte->tx_username), 1, 0, 'C', 0);
   $pdf->Cell(30, 10, utf8_decode($datos_reporte->tx_tipousuario), 1, 1, 'C', 0);
}

$pdf->Output('Reporte_Usuario.pdf', 'I'); //Visor(I->visualizar - D->descargar)
