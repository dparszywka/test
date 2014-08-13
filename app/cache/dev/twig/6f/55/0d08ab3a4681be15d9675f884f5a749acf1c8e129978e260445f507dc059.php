<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_6f550d08ab3a4681be15d9675f884f5a749acf1c8e129978e260445f507dc059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content_header', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('content', $context, $blocks);
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demossss</h1>
    <ul id=\"demo-list\">
        
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_hello", array("imie" => "World", "nazwisko" => "Parszywka")), "html", null, true);
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 14
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  63 => 12,  59 => 11,  54 => 8,  51 => 7,  45 => 5,  39 => 3,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }
}
