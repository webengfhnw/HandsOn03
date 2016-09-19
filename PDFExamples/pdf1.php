<?PHP
include("../../php/pear/fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'This is a PDF file!');
$pdf->Output();