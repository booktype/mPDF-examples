<?php

include("../mpdf.php");

$html_data = file_get_contents("body-cn.html");
$style_data = file_get_contents("style-cn.css");

// Create new PDF with font subsetting, 210mm wide, 297mm high
$mpdf = new mPDF('s', array(210,297));

// Make it a double sided document with 4mm bleed
$mpdf->mirrorMargins = 1;
$mpdf->bleedMargin = 4;

// Set left to right text
$mpdf->SetDirectionality('ltr');

// Generate the table of contents from H3 elements
$mpdf->h2toc = array('H3'=>0);

// Write the stylesheet
$mpdf->WriteHTML($style_data, 1);        // The parameter 1 tells mPDF that this is CSS and not HTML

// Write the main text 
$mpdf->WriteHTML($html_data, 2);

// Set the metadata
$mpdf->SetTitle("An Example Title");
$mpdf->SetAuthor("Cicero");
$mpdf->SetCreator("mPDF 6.1.2");
$mpdf->SetSubject("Lorem Ipsum");
$mpdf->SetKeywords("Lorem, Ipsum");

// Generate the PDF file
$mpdf->Output('chinese.pdf','F');

// Stop mPDF
exit;

?>


