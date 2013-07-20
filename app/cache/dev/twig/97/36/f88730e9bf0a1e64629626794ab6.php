<?php

/* oswizardForumBundle:Forum:showSection.html.twig */
class __TwigTemplate_9736f88730e9bf0a1e64629626794ab6 extends Twig_Template
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
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "name"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_subtitle($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("subtitle", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "name"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_forum_body($context, array $blocks = array())
    {
        // line 12
        echo "<ul>
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "posts"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 14
            echo "    <li>
        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oswizard_forum_show_post", array("idPost" => $this->getAttribute($this->getContext($context, "post"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
            echo "</a>
    </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo " <li>No posts to show</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>
<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oswizard_forum_add_post", array("idSection" => $this->getAttribute($this->getContext($context, "section"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
    add post
</a>
";
    }

    public function getTemplateName()
    {
        return "oswizardForumBundle:Forum:showSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  81 => 19,  74 => 17,  64 => 15,  61 => 14,  56 => 13,  53 => 12,  50 => 11,  42 => 8,  39 => 7,  33 => 4,  30 => 3,);
    }
}
