<?php

namespace oswizard\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PostType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('title', 'text')
                ->add('content', 'textarea');
    }

    public function getName() {
        return 'oswizard_forumbundle_posttype';
    }

}

?>
