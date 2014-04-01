<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_f4c303b677f1d9b458ee613d6151a670f0eb38d32156fdc98095b56191d34c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 16
        echo "    ";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_item_, "hasChildren") && (!($this->getAttribute($_options_, "depth") === 0))) && $this->getAttribute($_item_, "displayChildren"))) {
            // line 17
            echo "        <div";
            if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            echo $_macros_->getattributes($_listAttributes_);
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 25
        echo "    ";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if ($this->getAttribute($_item_, "displayed")) {
            // line 26
            echo "        ";
            // line 27
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["classes"] = (((!twig_test_empty($this->getAttribute($_item_, "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($_item_, "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "current")) {
                // line 29
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "currentClass")));
            } elseif ($this->getAttribute($_item_, "currentAncestor")) {
                // line 31
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "ancestorClass")));
            }
            // line 33
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeFirst")) {
                // line 34
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "firstClass")));
            }
            // line 36
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeLast")) {
                // line 37
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "lastClass")));
            }
            // line 39
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["attributes"] = $this->getAttribute($_item_, "attributes");
            // line 40
            if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
            if ((!twig_test_empty($_classes_))) {
                // line 41
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["attributes"] = twig_array_merge($_attributes_, array("class" => twig_join_filter($_classes_, " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (((!twig_test_empty($this->getAttribute($_item_, "uri"))) && ((!$this->getAttribute($_item_, "current")) || $this->getAttribute($_options_, "currentAsLink")))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = twig_array_merge($_childrenClasses_, array(0 => ("menu_level_" . $this->getAttribute($_item_, "level"))));
            // line 52
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            $context["listAttributes"] = twig_array_merge($this->getAttribute($_item_, "childrenAttributes"), array("class" => twig_join_filter($_childrenClasses_, " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "uri"), "html", null, true);
        echo "\"";
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
        echo $this->getAttribute($_macros_, "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute($_item_, "attributes"), $this->getAttribute($_item_, "linkAttributes")), $_attributes_)), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
        echo $this->getAttribute($_macros_, "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute($_item_, "attributes"), $this->getAttribute($_item_, "labelAttributes")), $_attributes_)), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 59,  145 => 57,  126 => 50,  116 => 45,  99 => 39,  94 => 37,  91 => 36,  86 => 34,  83 => 33,  61 => 25,  73 => 29,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 40,  92 => 25,  84 => 21,  72 => 15,  48 => 18,  35 => 5,  29 => 15,  69 => 14,  54 => 14,  51 => 8,  31 => 14,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 44,  96 => 25,  76 => 17,  71 => 17,  55 => 15,  110 => 43,  89 => 16,  65 => 26,  63 => 13,  58 => 10,  34 => 15,  26 => 14,  24 => 4,  39 => 7,  38 => 6,  57 => 20,  43 => 18,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 27,  47 => 6,  28 => 4,  50 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 52,  130 => 42,  120 => 47,  105 => 41,  100 => 27,  75 => 24,  60 => 12,  53 => 19,  25 => 2,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 31,  46 => 19,  44 => 9,  40 => 6,  36 => 16,  32 => 4,  27 => 3,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 53,  129 => 51,  124 => 49,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 28,  66 => 23,  62 => 11,  59 => 24,  56 => 23,  52 => 10,  49 => 9,  45 => 6,  41 => 17,  37 => 17,  33 => 4,  30 => 3,);
    }
}
