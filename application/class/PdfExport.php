<?php

namespace App;

use App\Twig;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfExport {

    public static function pdf($unique_id , $template){
        //request post data
    $showPost = new ShowPost($unique_id);
    // dump($showPost);
    //render template
    $loader = new \Twig\Loader\FilesystemLoader('../application/templates');
        $twig = new \Twig\Environment($loader, [
            'cache' => '../application/cache',
            'debug' => true,
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());

        $temp = $twig->load($template);
        
    // Instantiate Dompdf with our options
    $dompdf = new Dompdf();

    $dompdf->loadHtml($temp->render(['post' => $showPost->data[0],]));

    // // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // // Render the HTML as PDF
    $dompdf->render();

    // // Output the generated PDF to Browser
    $dompdf->stream('annonce'.$unique_id.'pdf');
    }

}