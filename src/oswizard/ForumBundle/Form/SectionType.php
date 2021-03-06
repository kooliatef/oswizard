<?php

namespace oswizard\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SectionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', 'text');
        $factory = $builder->getFormFactory();
    }

    public function getName() {
        return 'oswizard_forumbundle_sectiontype';
    }

}

?>
