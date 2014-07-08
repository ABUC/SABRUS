<?php

namespace Sabrus\OfflineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $userFrom = $request->request->get('user_from');
        $userType = $request->request->get('user_type');
        $username = $request->request->get('username');
        $email = $request->request->get('email');

        $userfeedback = new UserFeedback();
        $userfeedback->setName($username);
        $userfeedback->setEmail($email);
        $userfeedback->setUserFrom($userFrom);
        $userfeedback->setUserType($userType);

        $em = $this->getDoctrine()->getManager();
        $em->getRepository('OfflineBundle:UserFeedBack')
            ->AddUserFeedBack($userfeedback);

        $type = 'Guest';

        if($userType == 0) {
            $type = 'Host';
        } elseif($userType == 2) {
            $type = 'Host & Guest';
        }

        $body = 'A new client has contacted Sabrus: ' . PHP_EOL;
        $body .= "Email: $email\nName: $username\nFrom: $userFrom\nType: $type";

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

        return new JsonResponse(array('code' => 200, 'success' => true));
    }
}
