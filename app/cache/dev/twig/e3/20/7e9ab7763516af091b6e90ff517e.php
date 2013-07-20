<?php

/* oswizardForumBundle::layout.html.twig */
class __TwigTemplate_e3207e9ab7763516af091b6e90ff517e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'subtitle' => array($this, 'block_subtitle'),
            'body' => array($this, 'block_body'),
            'forum_body' => array($this, 'block_forum_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Forum
";
    }

    // line 7
    public function block_subtitle($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("subtitle", $context, $blocks);
        echo " - forum
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <hr>
    ";
        // line 13
        $this->displayBlock('forum_body', $context, $blocks);
    }

    public function block_forum_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    public function getTemplateName()
    {
        return "oswizardForumBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 13,  49 => 11,  42 => 8,  34 => 4,  31 => 3,  82 => 21,  80 => 20,  77 => 19,  70 => 17,  60 => 14,  57 => 13,  52 => 12,  48 => 10,  45 => 9,  39 => 7,  36 => 5,  30 => 3,);
    }
}
