<?php
// (c) Xavier Nicolay
// Exemple de gï¿½nï¿½ration de devis/facture PDF

require('invoice.php');

$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
$pdf->AddPage();
$pdf->addSociete( "Les secrets de Louise",
                  "MonAdresse\n" .
                  "33454 ARCACHON\n".
                  "R.C.S. BORDEAUX B 000 000 007\n" .
                  "Capital : 18000 " . EURO );
//$pdf->fact_dev( "Facture ", "TEMPO" );
//$pdf->temporaire( "Facture temporaire" );
$pdf->addDate( "03/12/2003");
$pdf->addClient("CL01");
//$pdf->addPageNumber("1");
$pdf->addClientAdresse("Ste\nM. XXXX\n3ème étage\n33, rue d'ailleurs\n75000 PARIS");
$pdf->addReglement("Paypal en ligne");
$pdf->addEcheance("03/12/2003");
$pdf->addNumTVA("FR888777666");
//$pdf->addReference("Facture ... du ....");
$cols=array( 
             "DESIGNATION"  => 89,
             "QUANTITE"     => 22,
             "P.U. HT"      => 26,
             "MONTANT H.T." => 30,
             "TVA"          => 23 );
$pdf->addCols( $cols);
$cols2=array( 
             "DESIGNATION"  => "L",
             "QUANTITE"     => "C",
             "P.U. HT"      => "R",
             "MONTANT H.T." => "R",
             "TVA"          => "C" );
$pdf->addLineFormat($cols2);

$y    = 109;
for ($i = 1; $i < 3; $i++) {
    $line = array( 
        "DESIGNATION"  => "Carte Mère MSI 6378\n" .
        "Processeur AMD 1Ghz\n" .
        "128Mo SDRAM,  Floppy, Carte vidéo",
        "QUANTITE"     => "1",
        "P.U. HT"      => "100,00",
        "MONTANT H.T." => "100.00",
        "TVA"          => "20,00" );
    $size = $pdf->addLine( $y, $line );
    $y   += $size + 2;
    if ($i%8==0) {
        $pdf->AddPage();
        $pdf->addCols( $cols,21);
        $y    = 29;
    }
}


$pdf->addCadreTVAs();
        
// invoice = array( "px_unit" => value,
//                  "qte"     => qte,
//                  "tva"     => code_tva );
// tab_tva = array( "1"       => 19.6,
//                  "2"       => 5.5, ... );
// params  = array( "RemiseGlobale" => [0|1],
//                      "remise_tva"     => [1|2...],  // {la remise s'applique sur ce code TVA}
//                      "remise"         => value,     // {montant de la remise}
//                      "remise_percent" => percent,   // {pourcentage de remise sur ce montant de TVA}
//                  "FraisPort"     => [0|1],
//                      "portTTC"        => value,     // montant des frais de ports TTC
//                                                     // par defaut la TVA = 19.6 %
//                      "portHT"         => value,     // montant des frais de ports HT
//                      "portTVA"        => tva_value, // valeur de la TVA a appliquer sur le montant HT
//                  "AccompteExige" => [0|1],
//                      "accompte"         => value    // montant de l'acompte (TTC)
//                      "accompte_percent" => percent  // pourcentage d'acompte (TTC)
//                  "Remarque" => "texte"              // texte
$tot_prods = array( array ( "px_unit" => 100, "qte" => 1, "tva" => 1 ),
                    array ( "px_unit" => 10, "qte" => 2, "tva" => 1 ));
$tab_tva = array( "1"       => 20.0,
                  "2"       => 5.5);
$params  = array( "RemiseGlobale" => 1,
                      "remise_tva"     => 0,       // {la remise s'applique sur ce code TVA}
                      "remise"         => 0,       // {montant de la remise}
                      "remise_percent" => 10,      // {pourcentage de remise sur ce montant de TVA}
                      "FraisPort"     => 1,
                      "portTTC"        => 10,      // montant des frais de ports TTC
                                                   // par defaut la TVA = 19.6 %
                      "portHT"         => 12,       // montant des frais de ports HT
                      "portTVA"        => 20.0,    // valeur de la TVA a appliquer sur le montant HT
                  "AccompteExige" => 0,
                      "accompte"         => 0,     // montant de l'acompte (TTC)
                      "accompte_percent" => 15,    // pourcentage d'acompte (TTC)
                  "Remarque" => "" );

$pdf->addTVAs( $params, $tab_tva, $tot_prods);
$pdf->addCadreEurosFrancs();
//$filename = "invoice.pdf";
//$pdf->Output($filename, 'F');
$pdf->Output();
?>
