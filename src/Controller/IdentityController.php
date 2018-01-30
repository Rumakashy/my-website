<?php

namespace App\Controller;

use App\Entity\Project;
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
        $projects = $doctrine->getRepository(Project::class)->findAll();
        return $this->render('home/index.html.twig', array(
            'identities' => $identities,
            'projects' => $projects,
        ));
    }
}