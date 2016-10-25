<?php

include("../mpdf-6.1.2/mpdf.php");

$style_data = file_get_contents("style-en.css");
$frontmatter_data = file_get_contents("frontmatter-en.html");
$html_data = file_get_contents("body-en.html");

// Create new PDF with font subsetting, 210mm wide, 297mm high
$mpdf = new mPDF('s', array(210,297));

// Make it DOUBLE SIDED document with 4mm bleed
$mpdf->mirrorMargins = 1;
$mpdf->bleedMargin = 4;

// Set left to right text
$mpdf->SetDirectionality('ltr');

// Write the stylesheet
$mpdf->WriteHTML($style_data, 1);        // The parameter 1 tells mPDF that this is CSS and not HTML

// Write front matter from another data source 
$mpdf->WriteHTML($frontmatter_data, 2);

// Write the main text 
$mpdf->WriteHTML($html_data, 2);

// Set the metadata
$mpdf->SetTitle("An Example Title");
$mpdf->SetAuthor("Cicero");
$mpdf->SetCreator("mPDF 6.1.2");
$mpdf->SetSubject("Lorem Ipsum");
$mpdf->SetKeywords("Lorem, Ipsum");

// Generate the PDF file
$mpdf->Output('english.pdf','F');

?>


