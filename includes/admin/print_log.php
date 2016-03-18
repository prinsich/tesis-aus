<?php
include_once("classes/class.Log.php");
require_once('configs/tcpdf/tcpdf.php');

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        $this->MultiCell(55, 5, "Fecha de impresion: ".date("d/m/Y g:i a"), 0, 'L', 0, 0, '', '', true);
        $this->MultiCell(55, 5, "", 0, 'C', 0, 0, '', '', true);
        $this->MultiCell(75, 5, 'Pagina '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, 'R', 0, 0, '', '', true);

    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Casa San Francisco", "Log del sistema");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
////////////////////////////////////////////////////////////////////////////////
$datos = filter_input_array(INPUT_POST);

global $db, $smarty;
$log =  new Log($db);

$registros = $log->ver_log($datos["hidden_usr"], $datos["hidden_desde"], $datos["hidden_hasta"], $datos["hidden_accion"], $datos["hidden_clase"]);

$smarty->assign("log", $registros);

////////////////////////////////////////////////////////////////////////////////
$html = $smarty->fetch("templates/admin/print_log.tpl");

$pdf->AddPage('L');
$pdf->SetFont('helvetica', '', 8);

$pdf->writeHTML($html, true, 0, 0, 0);
$pdf->Output('print_log_'.date("d/m/Y g:i a"), 'D');


?>
