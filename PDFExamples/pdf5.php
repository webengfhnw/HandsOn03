<?php
include("fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40,10,'This is a PDF document');
$pdf->Ln();

$pdf->SetFont('Helvetica', '', 12);
$pdf->SetTextColor(255,0,0);
$pdf->Write(5,"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.");
$pdf->Ln();

$pdf->SetDrawColor(0,0,0);
$pdf->SetFillColor(192,192,192);
$pdf->SetTextColor(0,0,0);

$pdf->Cell(50,5, "Capital","LTRB",0,"C",1);
$pdf->Cell(50,5, "Interest Rate","LTRB",0,"C",1);
$pdf->Cell(50,5, "Revenue","LTRB",0,"C",1);
$pdf->Ln();

$interestRate = 1.5;

for ($capital = 100; $capital <= 900; $capital = $capital + 100) {
    if (($capital % 200) == 0) {
        $pdf->SetFillColor(204, 204, 204);
    } else {
        $pdf->SetFillColor(255, 255, 255);
    }

    $pdf->Cell(50, 5, $capital, "LR", 0, "C", 1);
    $pdf->Cell(50, 5, $interestRate, "LR", 0, "C", 1);
    $revenue = $capital + $capital * $interestRate / 100;
    $pdf->Cell(50, 5, number_format($revenue, 1), "LR", 0, "C", 1);
    $pdf->Ln();
}
$pdf->Cell(50, 5, "", "T", 0, "C", 1);
$pdf->Cell(50, 5, "", "T", 0, "C", 1);
$pdf->Cell(50, 5, "", "T", 0, "C", 1);
$pdf->Ln();
$pdf->Image('image1.jpg', 50, 100, 20);

$pdf->Output();