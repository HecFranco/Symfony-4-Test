<?php
// src/Controller/FristController.php
/* Indicamos el namespace del Bundle                     ******************************************************/
    namespace App\Controller;
/* COMPONENTES BÁSICOS DEL CONTROLADOR ************************************************************************/
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;     // Permite Enrutador
    use Symfony\Component\HttpFoundation\Response;                  // Permite ejecutar Response
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;       // Permite extender el controlador
    // Para usar Twig es necesario extender el controlador
/**************************************************************************************************************/
class TestFristController extends Controller {
/* MÉTODO INICIO **********************************************************************************************/
    public function fristPage() {
        return new Response('Mi primera pagina en Symfony!');
    }    
/* MÉTODO NUMBER **********************************************************************************************/
    public function fristPageNumber() {
        $number = mt_rand(0, 100);
        return new Response(
            '<html><body>Frist number: '.$number.'</body></html>'
        );
    }
/**************************************************************************************************************/
/* MÉTODO NUMBER USING TWIG ***********************************************************************************/
    // Para usar TWIG necesitamos extender el controlador.
    public function fristPageNumberUsingTwig() {
        $number = mt_rand(0, 100);
        // templates/test/number.html.twig
        return $this->render('test/testNumber.html.twig', array(
            'number' => $number,
        ));
    }
/**************************************************************************************************************/
}