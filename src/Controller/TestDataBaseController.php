<?php
// src/Controller/TestDataBaseController.php
/* Indicamos el namespace del Bundle                     ******************************************************/
namespace App\Controller;
/* COMPONENTES BÁSICOS DEL CONTROLADOR ************************************************************************/
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;     // Permite Enrutador
	use Symfony\Component\HttpFoundation\Response;                  // Permite ejecutar Response
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;       // Permite extender el controlador
/**************************************************************************************************************/  
/* CARGO ENTIDADES A UTILIZAR *********************************************************************************/
	use App\Entity\Product;     // Permite Enrutador
/**************************************************************************************************************/ 
class TestDataBaseController extends Controller{
    public function create() {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
        return new Response('Created product id '.$product->getId());
    }
    public function show($id) {
        $em = $this->getDoctrine()->getManager();
        $product_repo = $em->getRepository(Product::class);
        $product = $product_repo->find($id);
        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id );
        }
        var_dump($product->getName());die();
    // ... (pasar el objeto $product a una plantilla)
    }
    public function update($id) {
        $em = $this->getDoctrine()->getManager();
        $product_repo = $em->getRepository(Product::class);
        $product = $product_repo->find($id);
        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }
        $product->setName('New product name!');
        $em->flush();
        return $this->redirectToRoute('example_database_fetching',['id'=>$product->getId()]);
    }  
    public function remove($id) {
        $em = $this->getDoctrine()->getManager();
        $product_repo = $em->getRepository(Product::class);
        $product = $product_repo->find($id);        
        $em->remove($product);
        $em->flush();
        return $this->redirectToRoute('example_database_fetching',['id'=>$product->getId()]);        
    }
    public function findAllOrderedByName() {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository(Product::class)
         ->findAllOrderedByName();
        var_dump($products);die();        
    }        
}