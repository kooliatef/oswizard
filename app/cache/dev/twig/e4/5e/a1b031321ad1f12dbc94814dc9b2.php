<?php

/* oswizardUserBundle:Security:login.html.twig */
class __TwigTemplate_e45ea1b031321ad1f12dbc94814dc9b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'subtitle' => array($this, 'block_subtitle'),
            'body' => array($this, 'block_body'),
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
        echo "Login";
    }

    // line 5
    public function block_subtitle($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("subtitle", $context, $blocks);
        echo " - login
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ($this->getContext($context, "error")) {
            // line 11
            echo "        <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">
            <label for=\"username\">Login :</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
            
            <label for=\"password\">Password :</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
            
            <br />
            
            <input type=\"submit\" value=\"Sign in\">
            
        </form>
";
    }

    public function getTemplateName()
    {
        return "oswizardUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  58 => 13,  52 => 11,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
