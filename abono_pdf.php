<?php
require 'libraries\FPDFv1.81\fpdf.php';
$pdf = new FPDF('P','cm','Letter');
$pdf->SetMargins(3,3,3);
$pdf->AddPage();
$pdf->SetFont('times','', 15);
$pdf->Text(3,3,'Abono');



$pdf -> Output();
?>