<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Homepage Controller
 *
 * @Route("/")
 *
 * @category Website
 * @package  Luciflor
 * @author   Bogdan Marcu <marcu.bogdannicolae@gmail.com>
 * @license  www.luciflor.ro Luciflor
 * @link     www.luciflor.ro
 */
class HomeController extends Controller
{
    /**
     * Homepage view
     *
     * @Route("/")
     *
     * @return page
     */
    public function index()
    {
        return $this->render(
            '/views/home.html.twig'
        );
    }
}