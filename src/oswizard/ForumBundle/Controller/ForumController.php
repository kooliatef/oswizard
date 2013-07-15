<?php

namespace oswizard\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use oswizard\ForumBundle\Entity\Section;
use oswizard\ForumBundle\Entity\Post;
use oswizard\ForumBundle\Form\SectionType;

class ForumController extends Controller {

    public function indexAction() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('oswizardForumBundle:Section');
        $sections = $repository->findAll();
        return $this->render('oswizardForumBundle:Forum:index.html.twig', array('sections' => $sections));
    }

    public function showSectionAction($idSection) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('oswizardForumBundle:Section');
        $section = $repository->find($idSection);
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('oswizardForumBundle:Post');
        $posts = $repository->findBy(array(
            'section' => $section
        ));
        return $this->render('oswizardForumBundle:Forum:showSection.html.twig', array(
                    'section' => $section, 'posts' => $posts)
        );
    }

    public function showPostAction($idPost) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('oswizardForumBundle:Post');
        $posts = $repository->findAll();
        return $this->render('oswizardForumBundle:Forum:showPost.html.twig', array(
                    'posts' => $posts)
        );
    }

    public function addSectionAction() {
        $section = new Section();
        $form = $this->createForm(new SectionType(), $section);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($section);
                $em->flush();
                return $this->render('oswizardForumBundle:Forum:showSection.html.twig', array(
                            'section' => $section)
                );
            }
        }
        return $this->render('oswizardForumBundle:Forum:addSection.html.twig', array(
                    'form' => $form->createView()
                ));
    }

    public function addPostAction() {
        
    }

}

?>
