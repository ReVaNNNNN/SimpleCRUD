<?php

namespace App\Controller;

use App\Entity\User;
use App\Services\GiftService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     * @param GiftService $gifts
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(GiftService $gifts)
    {
        $em = $this->getDoctrine()->getManager();

        // $user = new User();
        // $user->setName('Fiona');
        // $em->persist($user);
        // $em->flush();

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users,
            'gifts' => $gifts->gifts
        ]);
    }
}
