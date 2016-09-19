<?PHP
include("../../php/pear/fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 24);
$pdf->Cell(40, 10, 'Two images');

$pdf->Image("image1.jpg", 10, 30, 45);
$pdf->Image("image2.jpg", 60, 30, 40);

$pdf->Output();