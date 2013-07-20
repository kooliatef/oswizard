<?php

/* ::layout.html.twig */
class __TwigTemplate_8856d393c39ea6f2a512a69af3ac3d8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'subtitle' => array($this, 'block_subtitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        
    </head>
    <body>
        <div class=\"container\">
            <h1>";
        // line 19
        $this->displayBlock('subtitle', $context, $blocks);
        echo "</h1>
            <div class=\"content\">
                ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "            </div>
            
            <hr>
            
            <footer>
                <p>The world is fucked up © 2013 and beyond.</p>
            </footer>
        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "oswizard";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 19
    public function block_subtitle($context, array $blocks = array())
    {
        echo "oswizard";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "                ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  102 => 21,  96 => 19,  90 => 13,  87 => 12,  84 => 11,  77 => 8,  74 => 7,  68 => 5,  55 => 23,  53 => 21,  48 => 19,  42 => 15,  40 => 11,  37 => 10,  35 => 7,  24 => 1,  64 => 15,  58 => 13,  52 => 11,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 5,);
    }
}
