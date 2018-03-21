<?php
// src/Controller/ControllerController.php
namespace App\Controller;
// Permite usar el método response, genera una respuesta que se mostrará en pantalla que contiene código html.
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
// Permite utilizar el enrutamiento mediante Anotación
    use Symfony\Component\Routing\Annotation\Route;
/****************************************************************************************************************/
class TestControllerController {
//...
/* MÉTODO CONTROLLER ********************************************************************************************/
    public function showControllerWithVariable($slug) {
        return new Response('Ejemplo de controller con valor de variable $slug: '.$slug);
    } 
/****************************************************************************************************************/
/* MÉTODO CONTROLLER CON VARIABLE CON VALOR POR DEFECTO *********************************************************/
    public function showControllerWithVariableDefault($fristName, $lastName, $color, $foo = 1) {
        return new Response('Ejemplo de controlador con tres variables, dos por ruta: '.$fristName.' y '.$lastName.', y una por defecto '.$color);
    }
/****************************************************************************************************************/    
/* MÉTODO UPDATE ************************************************************************************************/
    public function update(Request $request) {
        // $form = $this->createForm(...);
        // $form->handleRequest($request);
        // ...
    }    
}