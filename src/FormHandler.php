<?php

namespace App;

use TCPDF;

/**
 * FormHandler
 *
 * Generates pdf from request
 *
 * @package App
 */
class FormHandler
{
    public function __construct($request)
    {
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();
        foreach ($request['inputs'] as $key => $input) {
            $pdf->SetFont('dejavusans', 'B', 15);
            $pdf->MultiCell(0, 9, $request['inputs-field'][$key]);

            $pdf->SetFont('dejavusans', '', 12);
            $pdf->MultiCell(0, 7, $input);
        }
        $pdf->Output();
    }
}