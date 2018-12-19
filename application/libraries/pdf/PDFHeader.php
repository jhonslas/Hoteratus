<?php
require('fpdf.php');

class PDFHeader extends FPDF
{

	private $Logo;




// Cabecera de página
function Header()
{
    // Logo
   //file_exists(base_url()."user_assets/images/Billing/13massage.jpg")
  	 $this->Image(base_url()."uploads/room_photos/noimage.jpg",10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Title',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada


?>