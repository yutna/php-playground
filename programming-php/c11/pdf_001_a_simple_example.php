<?php

require('fpdf/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Hello Out There!');
$pdf->Cell(90, 10, 'Hello Out There!', 1, 0, 'C');

$pdf->Output();
