<?php

require_once('tcpdf_include.php');
require 'simple_html_dom.php';
try
{   
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $html = file_get_html($_GET['redirect'], NULL, NULL, 400);
    $doc = str_get_html($html);
    $href = $doc->find('.fields_holder')[0];
    $asd = ' <img src="'.$_GET['doc_name'].'" width="550" height="500" />';
    $href .= $asd;

    $pdf->AddPage();
    $pdf->SetFont('dejavusans', 'B', 12);
    $pdf->writeHTML($href, true, false, true, false, '');
    $pdf->Output('document.pdf', 'I');
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>

