<?php

include("../mpdf.php");

$html_data = file_get_contents("body.html");
$html = substr($html_data, 12, strlen($html_data)-27);
$style_data = file_get_contents("style_with_page_2.css");
$frontmatter_data = file_get_contents("frontmatter_with_page_2.html");

$mpdf = new mPDF();
// Make it DOUBLE SIDED document
$mpdf->mirrorMargins = 1;

$mpdf->bleedMargin = 4;


$mpdf->h2toc = array(); 

$mpdf->WriteHTML($style_data, 1);

// UNCOMMENT THIS AND PAGE NUMBERS ARE GONE
$mpdf->AddPageByArray(array('suppress' => 'off'));

$html = "<sethtmlpagefooter name=\"footer-left\" page=\"E\" value=\"on\" />".$html;
$html = "<sethtmlpagefooter name=\"footer-right\" page=\"O\" value=\"on\" />".$html;

$mpdf->WriteHTML($frontmatter_data, 2);

$mpdf->WriteHTML($html, 2);

$mpdf->SetTitle("Title");
$mpdf->SetAuthor("Author");
$mpdf->SetCreator("Booktype");

$mpdf->Output();

?>


