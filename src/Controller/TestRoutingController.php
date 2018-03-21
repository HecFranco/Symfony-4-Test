<?php
// src/Controller/TestRoutingController.php
/* Indicamos el namespace del Bundle                     ******************************************************/
    namespace App\Controller;
/* COMPONENTES BÁSICOS DEL CONTROLADOR ************************************************************************/
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;     // Permite Enrutador
    use Symfony\Component\HttpFoundation\Response;                  // Permite ejecutar Response
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;       // Permite extender el controlador
    // Para usar Twig es necesario extender el controlador
/**************************************************************************************************************/
class TestRoutingController extends Controller {
/* MÉTODO CONTROLADOR CON VARIABLE ****************************************************************************/
    public function showRoutingWithVariable($slug) {
        return new Response('Ejemplo de routing con valor de variable $slug: '.$slug);
    }
/**************************************************************************************************************/
/* MÉTODO CONTROLADOR CON VARIABLE OPCIONAL *******************************************************************/
    public function showRoutingWithVariableRequiredOptional($page) {
        return new Response('Ejemplo de routing con valor de variable $page: '.$page);
    }
/**************************************************************************************************************/
/* MÉTODO CONTROLADOR ROUTING AVANZADO ************************************************************************/
    public function showRoutingAdvanced($_language, $date, $section, $team, $page) {
        return new Response(sprintf(
            'Listado de noticias en idioma=%s, fecha=%s,deporte=%s,equipo=%s, página=%s ', $_language, $date, $section, $team, $page));
    }
/**************************************************************************************************************/ 
/* MÉTODO CONTROLADOR ROUTING AVANZADO ************************************************************************/
    public function testAdvancedRouteLevel1() {
        return new Response('Ejemplo de ruta avanzada 1');
    } 
    public function testAdvancedRouteLevel2() {
        return new Response('Ejemplo de ruta avanzada 2');
    }  
}