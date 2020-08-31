<?php

namespace App;

use App\Twig;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfExport {

    public static function pdf($unique_id , $template){
        //request post data
    $showPost = new ShowPost($unique_id);
    dump($showPost->data[0]);
    //render template
    $twig = new Twig($template);
    // $pdf = $twig->render(['post' => $showPost->data[0],]);
        // dump($twig->render(['post' => $showPost->data[0],]));
    // Instantiate Dompdf with our options
    // $dompdf = new Dompdf();

    // $dompdf->loadHtml($pdf);

    // // (Optional) Setup the paper size and orientation
    // $dompdf->setPaper('A4', 'landscape');

    // // Render the HTML as PDF
    // $dompdf->render();

    // // Output the generated PDF to Browser
    // $dompdf->stream('annonce'.$unique_id.'pdf');
    }

}