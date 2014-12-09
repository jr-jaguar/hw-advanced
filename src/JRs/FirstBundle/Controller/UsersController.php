<?php

namespace JRs\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Users Controller
 */
class UsersController extends Controller{
    /**
     * Show user
     */
    public function showUserAction($id){
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository('JRsFirstBundle:Users')->find($id);
        if (!$user) {
            throw $this->createNotFoundException('Нет такого пользователя');
        }
        return $this->render('JRsFirstBundle:Users:showUser.html.twig', array(
            'user'=>$user,
        ));
    }

    public function usersListAction(){
        $em=$this->getDoctrine()->getManager();
        $users = $em->getRepository('JRsFirstBundle:Users')->getUsersList();

        return $this->render('JRsFirstBundle:Users:showUsers.html.twig', array(
            'users'=>$users
        ));
    }
} 