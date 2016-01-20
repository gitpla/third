<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Lerning;
use AppBundle\Entity\Users;
use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Comment;


class ContactController extends Controller
{
	
	/**
	 * @Route("/contact/id/{ids}", name="homepage")
	 */
	public function contactAction($ids, Request $request)
	{
		
		$request = Request::createFromGlobals();
		
		// the URI being requested (e.g. /about) minus any query parameters
		//$request->getPathInfo();
		
		// retrieve GET and POST variables respectively
		//$q = $request->query->all();
		//$d = $request->request->all();
		
		$page = $request->query->get('ids', 1);
		
		//$request = Request::createFromGlobals();
		//var_dump($request->getMethod());

		//$categoryName = $product->getCategory()->getName();
		 
		var_dump($page);
		
		return $this->render('default/index.html.twig', array(
				'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
		));
		
		//return $this->redirectToRoute('homepage');
	}

}
