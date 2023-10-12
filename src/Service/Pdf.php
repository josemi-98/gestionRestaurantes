<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;



class Pdf extends AbstractController {

    public function pdf(): string {
        // Crea una instancia de Dompdf
        $dompdf = new Dompdf();
    
        // // Crea una instancia de Dompdf\Options
        // $options = new Options();
        // $options->set('isHtml5ParserEnabled', true);
        // $options->set('isPhpEnabled', true);
        // $options->set('isPhp7', true);
        // $options->set('isFontSubsettingEnabled', true);
        // // Configura otras opciones aquí según tus necesidades
    
        // // Configura las opciones en Dompdf
        // $dompdf->setOptions($options);
    
        // Carga la vista HTML
        $html = $this->renderView('pdf/myPdf.html.twig', [
            'title' => "Bienvenido a Click&Go"
        ]);
    
        // Carga el HTML en Dompdf
        $dompdf->loadHtml($html);
    
        // Establece el tamaño del papel y la orientación
        $dompdf->setPaper('letter', 'portrait');
    
        // Renderiza el PDF
        $dompdf->render();
    
        // Devuelve el PDF como una cadena
        return $dompdf->output();
    }
    
    // public function generarPdf(Request $request)
    //     {
    //         // Obtener los datos del formulario
    //         $fecha = $request->request->get('fecha');
    //         $hora = $request->request->get('hora');
    //         // Obtén otros campos del formulario según sea necesario

    //         // Renderizar la plantilla Twig con los datos del formulario
    //         $html = $this->renderView('pdf/myPdf.html.twig', [
    //             'fecha' => $fecha,
    //             'hora' => $hora,
    //             // Pasar otros datos del formulario según sea necesario
    //         ]);

    //         // Generar el PDF
    //         $dompdf = new Dompdf();
    //         $dompdf->loadHtml($html);
    //         $dompdf->setPaper('A4', 'portrait');
    //         $dompdf->render();

    //         // Obtener el contenido del PDF generado
    //         $pdfContent = $dompdf->output();

    //         // Enviar el PDF como respuesta al navegador
    //         $response = new Response($pdfContent);
    //         $response->headers->set('Content-Type', 'application/pdf');
    //         $response->headers->set('Content-Disposition', 'attachment;filename="formulario.pdf"');

    //         return $response;
    //     }

}