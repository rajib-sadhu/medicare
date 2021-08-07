<?php

session_start();

//$hs1= $_SESSION['hs'];

?>


<?php
if(isset($_POST['submit']))
{
    
  //  $hs=$_POST['hs'];
    $name = $_SESSION['user'];
    $email = $_SESSION['email'];
    $per=$_SESSION['person'];
    $sex = $_SESSION['gender'];
    $age = $_SESSION['age'];
$beha=$_SESSION['behaviour'];
$exe=$_SESSION['exe'];
$food=$_SESSION['food'];
$inju=$_SESSION['injury'];
$col=$_SESSION['cholesterol'];
$hypo=$_SESSION['hypertension'];
$dia=$_SESSION['diabetes'];
$ow=$_SESSION['ow'];


require("fpdf/fpdf.php");

$pdf=new FPDF();

$pdf-> AddPage();

$pdf->setFont("Arial","B","10");
$pdf->Cell(0,10,"MEDICARE REPORT",1,1,'C');//Cell('width','height','cell show value','borde','nextline(1)/no line(0)','align center (C)')


$pdf->Cell(50,13,"Name:",0,0,'C');
$pdf-> Cell(50,13,$name,0,1,'L');

$pdf->Cell(50,13,"Email:",0,0,'C');
$pdf-> Cell(100,13,$email,0,1,'L');

$pdf->Cell(50,13,"Check up for:",0,0,'C');
$pdf-> Cell(50,13,$per,0,1,'L');

$pdf->Cell(50,13,"Gender:",0,0,'C');
$pdf-> Cell(50,13,$sex,0,1,'L');


$pdf->Cell(50,13,"Age:",0,0,'C');
$pdf-> Cell(50,13,$age,0,1,'L');

$pdf->Cell(0,15,"-------------Health Status-------------",1,1,'C');


$pdf->Cell(50,13,"I smoke cigarettes:",0,0,'C');
$pdf-> Cell(50,13,$beha,0,1,'R');

$pdf->Cell(50,13," Do you do any exercise?:",0,0,'C');
$pdf-> Cell(50,13,$exe,0,1,'R');

$pdf->Cell(50,13," What kind of food do you eat?:",0,0,'C');
$pdf-> Cell(50,13,$food,0,1,'R');

$pdf->Cell(50,13,"I've recently suffered an injury:",0,0,'C');
$pdf-> Cell(50,13,$inju,0,1,'R');

$pdf->Cell(50,13,"I have high cholesterol:",0,0,'C');
$pdf-> Cell(50,13,$col,0,1,'R');

$pdf->Cell(50,13,"I have high hypertension:",0,0,'C');
$pdf-> Cell(50,13,$hypo,0,1,'R');

$pdf->Cell(50,13,"I have diabetes:",0,0,'C');
$pdf-> Cell(50,13,$dia,0,1,'R');

$pdf->Cell(50,13,"Are you overweight or obese?:",0,0,'C');
$pdf-> Cell(50,13,$ow,0,1,'R');

$pdf-> Cell(50,5,"",0,1,'R');
$pdf->setFont("Arial","B","20");
$pdf->Cell(0,20,"Thank You",1,1,'C');

$file = $name.' Medicare report.pdf';

$pdf->output($file,'D');
//  $pdf->output();
}
else{
    echo "ERROR 404 :(";
}
?>
