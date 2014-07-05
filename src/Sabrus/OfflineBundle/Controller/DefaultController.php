<?php

namespace Sabrus\OfflineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Sabrus\OfflineBundle\Entity\UserFeedBackRepository;
use Sabrus\OfflineBundle\Entity\UserFeedback;

class DefaultController extends Controller
{
    private $userFrom = ""; //Country of the user
    private $userType = 0; //If is guest, host, or guest/host

    public function indexAction()
    {
        return $this->render('OfflineBundle:Default:index.html.twig', array('msg' => 'Offline', 'user_from' => ""));
    }

    public function getUserFeedbackAction()
    {
//        $request = Request::createFromGlobals();
//        $this->userFrom = $request->get('where-you-from-input');
        return $this->render('OfflineBundle:Default:index.html.twig', array('msg' => 'Offline', 'info' => ""));
    }

    public function sendUserFeedbackAction()
    {
//        $request = Request::createFromGlobals();
//        $this->userFrom = $request->get('user_from_hidden');
//
//        die(var_dump($request->get('user_from_hidden')));
//
//        $username = $request->get('username');
//        $email = $request->get('email');
//
//        $userfeedback = new UserFeedback();
//        $userfeedback->setName($username);
//        $userfeedback->setEmail($email);
//        $userfeedback->setCountry($this->userFrom);
//        $userfeedback->setMiles('blah blah blah');
//
//        $em = $this->getDoctrine()->getManager();
//        $em->getRepository('OfflineBundle:UserFeedBack')
//            ->AddUserFeedBack($userfeedback);
//
//        /*
//        $message = \Swift_Message::newInstance()
//            ->setSubject('You have a new message from '.$username)
//            ->setFrom('aygonzalez@uci.cu')
//            ->setTo('aygonzalez@uci.cu')
//            ->setBody('This is the body of the message...');
//
//        $info = $this->get('mailer')->send($message);
//        */
        return $this->render('OfflineBundle:Default:index.html.twig', array('msg' => 'Offline', 'info' => ""));
    }
}
