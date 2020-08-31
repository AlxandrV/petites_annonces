<?php

namespace App;

use Dompdf\Dompdf;

class PdfExport {

    public static function pdf(){
    if(isset($_POST['unique_id'])){
        $unique_id = $_POST['unique_id'];

    //request post data
    $showPost = new ShowPost($unique_id);

    //render template
    $loader = new \Twig\Loader\FilesystemLoader('../application/templates');
    $twig = new \Twig\Environment($loader, [
        'cache' => '../application/cache',
        'debug' => true,
    ]);
    $twig->addExtension(new \Twig\Extension\DebugExtension());

    $temp = $twig->load('pdf.html.twig');

    // Instantiate Dompdf with our options
    $dompdf = new Dompdf();

    $dompdf->loadHtml($temp->render(['post' => $showPost->data[0],]));

    // // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // // Render the HTML as PDF
    $dompdf->render();

    // // Output the generated PDF to Browser
    $dompdf->stream('annonce'.$unique_id.'pdf');
    }
    }
}