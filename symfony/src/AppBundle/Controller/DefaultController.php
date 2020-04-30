<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return new \Symfony\Component\HttpFoundation\Response("Hello World");
    }

    /**
     * @Route("/bye")
     */
    public function byeAction(Request $request)
    {
        // replace this example code with whatever you need
        return new \Symfony\Component\HttpFoundation\Response("Bye World");
    }
}
