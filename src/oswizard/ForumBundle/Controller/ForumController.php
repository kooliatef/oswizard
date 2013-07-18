<?php

namespace oswizard\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use oswizard\ForumBundle\Entity\Section;
use oswizard\ForumBundle\Entity\Post;
use oswizard\ForumBundle\Form\SectionType;

class ForumController extends Controller {

    public function indexAction() {
        $service = $this->get('oswizard_forum.service');
        $sections = $service->findAllSections();
        return $this->render('oswizardForumBundle:Forum:index.html.twig', array('sections' => $sections));
    }

    public function showSectionAction($idSection) {
        $service = $this->get('oswizard_forum.service');
        $section = $service->findSection($idSection);
        $posts = $service->findPostsBySection(array(
            'section' => $section
        ));
        return $this->render('oswizardForumBundle:Forum:showSection.html.twig', array(
                    'section' => $section, 'posts' => $posts)
        );
    }

    public function showPostAction($idPost) {
        $service = $this->get('oswizard_forum.service');
        $post = $service->findPost($idPost);
        return $this->render('oswizardForumBundle:Forum:showPost.html.twig', array(
                    'post' => $post)
        );
    }

    public function addSectionAction() {
        $service = $this->get('oswizard_forum.service');
        $section = new Section();
        $form = $this->createForm(new SectionType(), $section);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $service->addSection($section);
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
