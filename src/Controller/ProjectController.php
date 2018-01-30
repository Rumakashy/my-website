<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Project;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ProjectController extends Controller
{
    /**
     * @Route("/projects", name="project")
     */
    public function index(RegistryInterface $doctrine)
    {
        $projects = $doctrine->getRepository(Project::class)->findAll();
        return $this->render('projects/projects.html.twig', array(
            'projects' => $projects,
        ));
    }
}
