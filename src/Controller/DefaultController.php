<?php
#use Doctrine\ORM\EntityManager;
#use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends AbstractController

{return $this->render('default/index.html.twig');
   # public function index(EntityManagerInterface $em, Request $request): Response
    #{
     #   $cr = $em->getRepository('App:Category');
      #  $categories = $cr->findAll();

       # return $this->render('default/index.html.twig', [
        #    'categories' => $categories,
        #]);

    #} 
}