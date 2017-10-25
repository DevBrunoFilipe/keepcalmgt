<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $menu_items = array(
                            array(
                                "title" => "about us",
                                "link" => "#about"
                            ),
                            array(
                                "title" => "recruitment",
                                "link" => "#recruitment"
                            ),
                            array(
                                "title" => "resources",
                                "link" => "#resources"
                            ),
                            array(
                                "title" => "contacts",
                                "link" => "#contacts"
                            ),
                            array(
                                "title" => "login",
                                "link" => "/login"
                            )
                    );

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig',[
                'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
                "menu_items" => $menu_items,
            ]);
    }


    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $menu_items = array(
            array(
                "title" => "return",
                "link" => "../"
            )
        );

        // replace this example code with whatever you need
        return $this->render('default/login.html.twig', array(
            "menu_items" => $menu_items
        ));
    }
}
