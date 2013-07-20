<?php

namespace oswizard\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use oswizard\ForumBundle\Entity\Section;
use oswizard\ForumBundle\Entity\Post;
use oswizard\ForumBundle\Form\SectionType;
use oswizard\ForumBundle\Form\PostType;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class ForumController extends Controller {

    public function indexAction() {
        $service = $this->get('oswizard.forum.forum');
        $sections = $service->findAllSections();
        return $this->render('oswizardForumBundle:Forum:index.html.twig', array('sections' => $sections));
    }

    public function showSectionAction($idSection) {
        $service = $this->get('oswizard.forum.forum');
        $section = $service->findSection($idSection);
        $posts = $service->findPostsBySection(array(
            'section' => $section
                ));
        return $this->render('oswizardForumBundle:Forum:showSection.html.twig', array(
                    'section' => $section, 'posts' => $posts)
        );
    }

    public function showPostAction($idPost) {
        $service = $this->get('oswizard.forum.forum');
        $post = $service->findPost($idPost);
        return $this->render('oswizardForumBundle:Forum:showPost.html.twig', array(
                    'post' => $post)
        );
    }

    public function addSectionAction() {
        $section = new Section();
        $form = $this->createForm(new SectionType(), $section);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $service = $this->get('oswizard.forum.forum');
                $service->addSection($section);
                return $this->redirect($this->generateUrl('oswizard_forum_show_section', array(
                                    'idSection' => $section->getId()
                                )));
            }
        }
        return $this->render('oswizardForumBundle:Forum:addSection.html.twig', array(
                    'form' => $form->createView()
                ));
    }

    public function addPostAction($idSection) {
        $post = new Post();
        $form = $this->createForm(new PostType(), $post);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $service = $this->get('oswizard.forum.forum');
                $post->setUser($service->findUser(1));
                $post->setSection($service->findSection($idSection));
                $service->addPost($post);
                return $this->redirect($this->generateUrl('oswizard_forum_show_post', array(
                                    'idPost' => $post->getId()
                                )));
            }
        }
        return $this->render('oswizardForumBundle:Forum:addPost.html.twig', array(
                    'form' => $form->createView()
                ));
    }

}

?>
