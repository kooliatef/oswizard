<?php

namespace oswizard\ForumBundle\Service;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Service {

    /**
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface 
     */
    protected $container;
    
    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    
    public function findAllSections() {
        $repository = $this->container->getDoctrine()
                ->getManager()
                ->getRepository('oswizardForumBundle:Section');
        return $repository->findAll();
    }

    public function findSection($forumController, $idSection) {
        $repository = $forumController->getDoctrine()
                ->getManager()
                ->getRepository('oswizardForumBundle:Section');
        return $repository->find($idSection);
    }

    public function addSection($forumController, $section) {
        $em = $forumController->getDoctrine()->getManager();
        $em->persist($section);
        $em->flush();
    }

    public function findPost($forumController, $idPost) {
        $repository = $forumController->getDoctrine()
                ->getManager()
                ->getRepository('oswizardForumBundle:Post');
        return $repository->find($idPost);
    }

    public function findPostsBySection($forumController, $section) {
        $repository = $forumController->getDoctrine()
                ->getManager()
                ->getRepository('oswizardForumBundle:Post');
        return $repository->findBy(array(
                    'section' => $section
                ));
    }

}

?>
