<?php
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('images\logo.jpg',87,5,"C");
$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->Cell(0,10, utf8_decode('_____________________________'),0,1,"C");
$pdf->Cell(0,10, utf8_decode('laboratoire Galaxy Swiss Bourdin'),0,1,"C");
$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->Cell(0,10, utf8_decode(''),0,1);

$pdf->SetFont('Arial','B',11);

$pdf->Cell(0,10,utf8_decode($lstVisiteur['nom']." ".$lstVisiteur['prenom']),0,1);

$pdf->Cell(0,10,utf8_decode("L'etat :" .$lesInfosFicheFrais['libEtat']),0,1);
$pdf->Cell(0,10,utf8_decode("Modifié le :".$lesInfosFicheFrais['dateModif']),0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->Cell(0,10, utf8_decode('Vos frais forfaitisés'),1,0,"C");
$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->SetFont('Arial','B',9);
foreach($fraisforfait as $forfait) {
  $pdf->Cell(50,15, utf8_decode($forfait['libelle'] . " " . $forfait['quantite']), 1, 0);
}
$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->Cell(0,10, utf8_decode(''),0,3);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10, utf8_decode('Vos frais hors forfaitisés'),1,0,"C");
$pdf->Cell(0,10, utf8_decode(''),0,1);

$pdf->SetFont('Arial','B',12);
foreach($fraishorsforfait as $forfait) {
    $pdf->Cell(0,12, utf8_decode($forfait['libelle'] . " " . $forfait['date'].",d'un montant de ".$forfait['montant']), 1, 2);
  }
$pdf->Output();

?>
