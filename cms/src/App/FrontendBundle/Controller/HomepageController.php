<?php

namespace App\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        $query = $this->get('solr')->createQuery('AppDemoBundle:Article');
        $query->queryAllFields('*ąt*');
    
        $result = $result = $query->getResult();
        print_r($result);
        //curl "http://localhost:8082/solr/solr-test/update/extract?literal.id=doc1&uprefix=attr_&fmap.content=attr_content&commit=true" -F "myfile=@/home/danielk/Pulpit/pdfSample.pdf"
        return $this->render('AppFrontendBundle:Homepage:index.html.twig');
    }
}
