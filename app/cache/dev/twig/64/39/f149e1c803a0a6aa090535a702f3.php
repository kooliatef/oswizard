<?php

/* oswizardForumBundle:Forum:addSection.html.twig */
class __TwigTemplate_6439f149e1c803a0a6aa090535a702f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("oswizardForumBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'subtitle' => array($this, 'block_subtitle'),
            'forum_body' => array($this, 'block_forum_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "oswizardForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Add section";
    }

    // line 5
    public function block_subtitle($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("subtitle", $context, $blocks);
        echo "-add section
";
    }

    // line 9
    public function block_forum_body($context, array $blocks = array())
    {
        // line 10
        $this->env->loadTemplate("oswizardForumBundle:Forum:form.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "oswizardForumBundle:Forum:addSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
