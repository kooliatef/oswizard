<?php

namespace oswizard\ForumBundle\Service;

class Service {

    public function findAllSections($forumController) {
        $repository = $forumController->getDoctrine()
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
