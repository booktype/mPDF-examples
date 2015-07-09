<?php
# THIS ONE DOES NOT HAVE AddPageByArray ANY MORE :-)

include("../mpdf.php");

$html_data = file_get_contents("body.html");
$html = substr($html_data, 12, strlen($html_data)-27);
$style_data = file_get_contents("style_current.css");
$frontmatter_data = file_get_contents("frontmatter_current.html");

// Create new PDF with font subsetting, 234mm wide, 297mm high
$mpdf = new mPDF('s', array(234,297));

// Make it DOUBLE SIDED document with 4mm bleed
$mpdf->mirrorMargins = 1;
$mpdf->bleedMargin = 4;

$mpdf->h2toc = array(); 

$mpdf->WriteHTML($style_data, 1);

$mpdf->WriteHTML($frontmatter_data, 2);

$mpdf->WriteHTML($html, 2);

$mpdf->SetTitle("An Example Title");
$mpdf->SetAuthor("Aco");
$mpdf->SetCreator("Booktype 2.0 and mPDF 6.0");

$mpdf->Output();

?>


