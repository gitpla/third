<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Lerning;
use AppBundle\Entity\Users;
use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Comment;


class DefaultController extends Controller
{
    /**
     * @Route("/dupa//id/{id}", name="homepage")
     */
    public function indexAction(Request $request)
    {
    	//$req = $request->query->all();
    	
    	$request = Request::createFromGlobals();
    	var_dump($request->getMethod());
    	
    	//$request->query->get('myParam'); // get a $_GET parameter
    	//$request->request->get('myParam'); // get a $_POST parameter
    	//printf("%d", $id); echo "dupa";
    	
    	try {

    		$id = 1;
    		$em = $this->getDoctrine();
        	//$posts = $em->getRepository('AppBundle:Post')->findLatest();
    		
    		$comment = $this->getDoctrine()
    					->getRepository('AppBundle:Comment');
    		
    		$res1 = $comment->find($id);
    		
    		//var_dump($res1);
    		
    	/*
	    	$em = $this->getDoctrine()->getManager();
	    		
	    		//print_r($posts);
	        $post = new Post();
	        $post->setAuthorEmail("swieta@waea.com");
	        $post->setContent("komentarz");
	        $post->setSlug('jakis-adres');
	        $post->setTitle("Tytuł postu");
	        $post->setPublishedat(new \DateTime());
	        
	        $em->persist($post);
	        
	        $comment = new Comment();
	        $comment->setContent("swieta_1");
	        $comment->setAuthoremail("dd@ddd.pl");
	        $comment->setPublishedat(new \DateTime());
	        $comment->setPost($post);
	        
	        $em->persist($comment);
        	$em->flush();
    		*/
    		
    	} catch (\Exception $e) {
    		echo $e->getMessage();
    	}
    	
    	
    	
    	//$categoryName = $product->getCategory()->getName();
    	
    	
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
