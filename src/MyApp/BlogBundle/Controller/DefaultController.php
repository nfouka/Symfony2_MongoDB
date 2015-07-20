<?php

namespace MyApp\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\BlogBundle\Document\Product;

class DefaultController extends Controller
{
    public function indexAction()
    {

    $product = new Product();
    for($i=0 ; $i<100; $i++) {
    $product->setName('Foo Bar  : '.rand(0,100));
    $product->setPrice(rand(0,1000));

    $dm = $this->get('doctrine_mongodb')->getManager();
    $dm->persist($product);
    $dm->flush();
}


 			$foaf =  \EasyRdf_Graph::newAndLoad('http://njh.me/foaf.rdf') ; 
    		$me = $foaf->primaryTopic() ; 
        
        
            \EasyRdf_Namespace::set('category', 'http://dbpedia.org/resource/Category:');
            \EasyRdf_Namespace::set('dbpedia', 'http://dbpedia.org/resource/');
            \EasyRdf_Namespace::set('dbo', 'http://dbpedia.org/ontology/');
            \EasyRdf_Namespace::set('dbp', 'http://dbpedia.org/property/');

    
    
            $sparql = new \EasyRdf_Sparql_Client('http://dbpedia.org/sparql');
            
            $result = $sparql->query(

			        'SELECT * WHERE {'.
			        '  ?country rdf:type dbo:Country .'.
			        '  ?country rdfs:label ?label .'.
			        '  ?country dc:subject category:Member_states_of_the_United_Nations .'.
			        '  FILTER ( lang(?label) = "en" )'.
			        '} ORDER BY ?label'

    		);

            $repository = $this->get('doctrine_mongodb')
                        ->getManager()
                        ->getRepository('MyAppBlogBundle:Product');

        	return $this->render('MyAppBlogBundle:Default:index.html.twig', 
        	 		array(
                        'name' => $result , 'count' => $result->numRows() , 
                        'products' => $repository->findAll()
                        )
        	);
    }
}
