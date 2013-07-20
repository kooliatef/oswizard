<?php

/* oswizardForumBundle:Forum:form.html.twig */
class __TwigTemplate_3345d01a04d26b401998da9ba2d076e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"well\">
    <form method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
        echo ">
            ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <input type=\"submit\" value=\"OK\" />
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "oswizardForumBundle:Forum:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  22 => 2,  19 => 1,  48 => 10,  45 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
