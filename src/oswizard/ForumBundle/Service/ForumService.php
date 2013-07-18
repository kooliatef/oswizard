<?php

namespace oswizard\ForumBundle\Service;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class ForumService {

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
        $repository = $this->container->get('doctrine')
                ->getManager()
                ->getRepository('oswizardForumBundle:Section');
        return $repository->findAll();
    }

    public function findSection($idSection) {
        $repository = $this->container->get('doctrine')
                ->getManager()
                ->getRepository('oswizardForumBundle:Section');
        return $repository->find($idSection);
    }

    public function addSection($section) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($section);
        $em->flush();
    }

    public function findPost($idPost) {
        $repository = $this->container->get('doctrine')
                ->getManager()
                ->getRepository('oswizardForumBundle:Post');
        return $repository->find($idPost);
    }

    public function findPostsBySection($section) {
        $repository = $this->container->get('doctrine')
                ->getManager()
                ->getRepository('oswizardForumBundle:Post');
        return $repository->findBy(array(
                    'section' => $section
                ));
    }

}

?>
