<?php

/* oswizardForumBundle:Forum:index.html.twig */
class __TwigTemplate_f05733f2cab72263e48e4c115d8c1b54 extends Twig_Template
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
        echo "Welcome";
    }

    // line 5
    public function block_subtitle($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("subtitle", $context, $blocks);
        echo "-welcome
";
    }

    // line 9
    public function block_forum_body($context, array $blocks = array())
    {
        // line 10
        echo "<h2>list of sections</h2>
<ul>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sections"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 13
            echo "    <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oswizard_forum_show_section", array("idSection" => $this->getAttribute($this->getContext($context, "section"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "name"), "html", null, true);
            echo "</a>
    </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "    <li>No sections to show</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>
";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("oswizard_forum_add_section");
            echo "\" class=\"btn\">
    add section
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "oswizardForumBundle:Forum:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  80 => 20,  77 => 19,  70 => 17,  60 => 14,  57 => 13,  52 => 12,  48 => 10,  45 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
