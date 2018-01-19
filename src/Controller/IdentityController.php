<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Identity;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


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