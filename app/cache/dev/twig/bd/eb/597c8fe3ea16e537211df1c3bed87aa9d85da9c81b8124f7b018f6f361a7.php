<?php

/* LessonStartBundle:Default:index.html.twig */
class __TwigTemplate_bdeb597c8fe3ea16e537211df1c3bed87aa9d85da9c81b8124f7b018f6f361a7 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
        // line 2
        $this->env->loadTemplate("LessonStartBundle:Article:right_menu.html.twig")->display(array_merge($context, array("node" => $this->getContext($context, "right_menu"))));
    }

    public function getTemplateName()
    {
        return "LessonStartBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
