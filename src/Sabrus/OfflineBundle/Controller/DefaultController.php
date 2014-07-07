<?php

namespace Sabrus\OfflineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\Request;
use Sabrus\OfflineBundle\Entity\UserFeedback;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OfflineBundle:Default:index.html.twig', array('msg' => 'Offline', 'user_from' => ""));
    }

    public function getUserFeedbackAction()
    {
        $request = $this->get('request');
        $this->get('session')->getFlashBag()->add('user_from',$request->request->get('user_from'));
        $this->get('session')->getFlashBag()->add('user_type',$request->request->get('user_type'));

        $response = array('code' => 200, 'success' => true);
        $response = json_encode($response);
        return new HttpFoundation\Response($response);
    }

    public function sendUserFeedbackAction()
    {
        $userFrom = $this->get('session')->getFlashBag()->get('user_from');
        $userType = $this->get('session')->getFlashBag()->get('user_type');

        $request = $this->get('request');

        $username = $request->get('name');
        $email = $request->get('email');

        $userfeedback = new UserFeedback();
        $userfeedback->setName($username);
        $userfeedback->setEmail($email);
        $userfeedback->setUserFrom($userFrom[0]);
        $userfeedback->setUserType($userType[0]);

        $em = $this->getDoctrine()->getManager();
        $em->getRepository('OfflineBundle:UserFeedBack')
            ->AddUserFeedBack($userfeedback);

        /*
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Thank you for your feedback. We will keep in touch with you.'
        );
        */

        $type = 'Guest';
        if($userType[0] == 0) {
            $type = 'Host';
        } elseif($userType[0] == 2) {
            $type = 'Host & Guest';
        }

        $body = 'A new client has contacted Sabrus: ' . PHP_EOL;
        $body .= "Email: $email\nName: $username\nFrom: {$userFrom[0]}\nType: $type";

        $message = \Swift_Message::newInstance()
            ->setSubject('SABRUS - A new message from ' . $username)
            ->setFrom('info@sabrus.ch')
            ->setTo('ptorres@abuc.ch')
            ->setBody($body);

        try {
            $this->get('mailer')->send($message);
        } catch (\Exception $e) {
            // ignore SwiftMailer exceptions
        }

        $response = array('code' => 200, 'success' => true);
        $response = json_encode($response);
        return new HttpFoundation\Response($response);
    }
}
