<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Acme\StoreBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function createAction(){
        $category = new Category();
        $category->setName('Jednodniowe');
        
        $product = new Product();
        $product->setDescription('Jestem sobie opisem');
        $product->setName('Jestem nazwa');
        $product->setPrice('23.99');
        $product->setCategory($category);
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();
        
        return new Response('Zapisane id='.$product->getId(). ' and category '.$category->getId());
    }
    
    public function showAction($id){
        //$test = $this->getDoctrine()->getRepository('AcmeStoreBundle:Product')->findAllOrderedByName();
        $product = $this->getDoctrine()->getRepository('AcmeStoreBundle:Product')->find($id);
        // test
        $nazwaKategorii = $product->getCategory()->getName();
        if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
        }
        return new Response('Nazwa jest '.$product->getName());
    }
    
    public function updateAction($id){
        $product = $this->getDoctrine()->getRepository('AcmeStoreBundle:Product')->find($id);
        if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
        }
        $product->setName('Nowa nazwa '.date('y-m-d h:s'));
        $em = $this->getDoctrine()->getManager();
        //$em->persist($product);
        $em->flush();
        return new Response('Nazwa jest '.$product->getName());
    }
    
    public function removeAction($id){
        
        
        $product = $this->getDoctrine()->getRepository('AcmeStoreBundle:Product')->find($id);
        if(!$product){
            throw $this->createNotFoundException('No product found for id '.$id);
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();
        return new Response();
    }
}
