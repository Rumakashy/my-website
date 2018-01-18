<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Identity;


class IdentityController extends Controller
{
    public function index(RegistryInterface $doctrine)
    {
        $identities = $doctrine->getRepository(Identity::class)->findAll();
        return $this->render('home/index.html.twig', array(
            'identities' => $identities,
        ));
    }
}