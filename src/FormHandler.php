<?php

namespace App;

use FPDF;

/**
 * FormHandler
 *
 * Generates pdf from request
 *
 * @package App
 */
class FormHandler
{
    public function __construct($request) {
        $pdf = new FPDF();
        $pdf->AddPage();
        foreach ($request['inputs'] as $key => $input) {
            $pdf->SetFont('Arial','B',16);
            $pdf->MultiCell(0, 17, $request['inputs-field'][$key]);

            $pdf->SetFont('Arial','',14);
            $pdf->MultiCell(0, 15, $input);
        }
        $pdf->Output();
    }
}