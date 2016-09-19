<?PHP
include("../../php/pear/fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Helvetica', 'B', 11);
$pdf->SetLineWidth(0.2);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFillColor(192, 192, 192);

$pdf->Cell(30, 5, "Capital", "LTR", 0, "C", 1);
$pdf->Cell(50, 5, "Interest Rate [%]:", "LTR", 0, "C", 1);
$pdf->Cell(70, 5, "Revenue:", "LTR", 0, "C", 1);
$pdf->Ln();

$pdf->SetFont('Helvetica', '', 11);
$interestRate = 1.5;

for ($capital = 100; $capital <= 800; $capital = $capital + 100) {
    $pdf->Cell(30, 5, $capital, "LR", 0, "C", 1);
    $pdf->Cell(50, 5, $interestRate, "LR", 0, "C", 1);
    $revenue = $capital + $capital * $interestRate / 100;
    $pdf->Cell(70, 5, number_format($revenue, 1), "LR", 0, "C", 1);
    $pdf->Ln();
}

$pdf->Output();
