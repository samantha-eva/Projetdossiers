<?php
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
foreach($lesVisiteurs as $visiteur){
  $pdf->Cell(0,10,utf8_decode($visiteur['nom']." ".$visiteur['prenom']));
 
}
$pdf->Cell(0,10, utf8_decode(''),0,1);

$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->Cell(0,10, utf8_decode('Voci vos frais forfaitisés'),0,1);
$pdf->Cell(0,10, utf8_decode('_____________________________'),0,1);
$pdf->Cell(0,10, utf8_decode(''),0,1);
foreach($fraisforfait as $forfait) {
  $pdf->Cell(0,10, utf8_decode($forfait['libelle'] . " " . $forfait['quantite']), 0, 1);
}
$pdf->Cell(0,10, utf8_decode(''),0,1);
$pdf->Cell(0,10, utf8_decode('Voci vos frais  hors forfaitisés'),0,1);
$pdf->Cell(0,10, utf8_decode('______________________________________'),0,1);
foreach($fraishorsforfait as $forfait) {
    $pdf->Cell(0,10, utf8_decode($forfait['libelle'] . " " . $forfait['date'].",d'un montant de ".$forfait['montant']), 0, 1);
  }
$pdf->Output();

?>
