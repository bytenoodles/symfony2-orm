<?php

namespace ByteNoodles\Bundle\Symfony2ORMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ByteNoodlesSymfony2ORMBundle:Default:index.html.twig', array('name' => $name));
    }
}
