<?php

namespace JRs\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class PageController extends Controller{
    public function indexAction(){
        return $this->render('JRsFirstBundle:Page:index.html.twig');
    }
    public function helloAction($name){
        $color="#";
       for ($i=0;  $i<6; $i++){
        $rColor=rand(0,10);
        $color.=$rColor;
    }

        $date=date("d.m.y.H:i");
        return $this->render('JRsFirstBundle:Page:hello.html.twig', array('name' => $name,
        'date'=>$date,
            'color'=>$color
        ));
    }



} 