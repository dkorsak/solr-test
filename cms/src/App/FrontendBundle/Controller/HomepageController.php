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
        return $this->render('AppFrontendBundle:Homepage:index.html.twig');
    }
}
