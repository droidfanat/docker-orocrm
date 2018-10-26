<?php

namespace myCallBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
     /**
     * @Route("/click/{name}", name="call_action")
     */
    
    public function callAction()
    {
        return $this->render('myCallBundle:Default:index.html.twig');
    }
}
 