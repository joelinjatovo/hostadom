<?php

namespace App\Controller;

// src/Controller/IndexController.php

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;



class IndexController extends Controller
{
    
     /**
     * @Route("/", name="index_no")
     */
    public function index(Request $request)
    {
        $locale = $request->getLocale();
        return $this->redirectToRoute("index", array("_locale"=>$locale));
    }

}