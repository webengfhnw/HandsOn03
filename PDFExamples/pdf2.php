<?PHP
include("../../php/pear/fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 24);

$pdf->SetTextColor(255, 0, 0);

$pdf->Cell(40, 10, 'This is a red title', 0, 1);

$pdf->SetFontSize(12);

$pdf->SetTextColor(0, 0, 255);
$text = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit";

$pdf->Write(5, $text);
$pdf->Output();