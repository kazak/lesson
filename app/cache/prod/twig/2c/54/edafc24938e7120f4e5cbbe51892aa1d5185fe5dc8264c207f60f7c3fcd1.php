<?php

/* knp_menu.html.twig */
class __TwigTemplate_2c54edafc24938e7120f4e5cbbe51892aa1d5185fe5dc8264c207f60f7c3fcd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('list', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('children', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('item', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('linkElement', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('spanElement', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 16
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["listAttributes"] = $this->getAttribute($_item_, "childrenAttributes");
        // line 17
        $this->displayBlock("list", $context, $blocks);
    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        // line 21
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_item_, "hasChildren") && (!($this->getAttribute($_options_, "depth") === 0))) && $this->getAttribute($_item_, "displayChildren"))) {
            // line 22
            echo "    <ul";
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            echo $this->getAttribute($this, "attributes", array(0 => $_listAttributes_), "method");
            echo ">
        ";
            // line 23
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 28
    public function block_children($context, array $blocks = array())
    {
        // line 30
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["currentOptions"] = $_options_;
        // line 31
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["currentItem"] = $_item_;
        // line 33
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((!(null === $this->getAttribute($_options_, "depth")))) {
            // line 34
            if (isset($context["currentOptions"])) { $_currentOptions_ = $context["currentOptions"]; } else { $_currentOptions_ = null; }
            $context["options"] = twig_array_merge($_currentOptions_, array("depth" => ($this->getAttribute($_currentOptions_, "depth") - 1)));
        }
        // line 36
        if (isset($context["currentItem"])) { $_currentItem_ = $context["currentItem"]; } else { $_currentItem_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_currentItem_, "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        if (isset($context["currentItem"])) { $_currentItem_ = $context["currentItem"]; } else { $_currentItem_ = null; }
        $context["item"] = $_currentItem_;
        // line 41
        if (isset($context["currentOptions"])) { $_currentOptions_ = $context["currentOptions"]; } else { $_currentOptions_ = null; }
        $context["options"] = $_currentOptions_;
    }

    // line 44
    public function block_item($context, array $blocks = array())
    {
        // line 45
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if ($this->getAttribute($_item_, "displayed")) {
            // line 47
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["classes"] = (((!twig_test_empty($this->getAttribute($_item_, "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($_item_, "attribute", array(0 => "class"), "method"))) : (array()));
            // line 48
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "current")) {
                // line 49
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "currentClass")));
            } elseif ($this->getAttribute($_item_, "currentAncestor")) {
                // line 51
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "ancestorClass")));
            }
            // line 53
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeFirst")) {
                // line 54
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "firstClass")));
            }
            // line 56
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeLast")) {
                // line 57
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "lastClass")));
            }
            // line 59
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["attributes"] = $this->getAttribute($_item_, "attributes");
            // line 60
            if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
            if ((!twig_test_empty($_classes_))) {
                // line 61
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["attributes"] = twig_array_merge($_attributes_, array("class" => twig_join_filter($_classes_, " ")));
            }
            // line 64
            echo "    <li";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $this->getAttribute($this, "attributes", array(0 => $_attributes_), "method");
            echo ">";
            // line 65
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (((!twig_test_empty($this->getAttribute($_item_, "uri"))) && ((!$this->getAttribute($_item_, "current")) || $this->getAttribute($_options_, "currentAsLink")))) {
                // line 66
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 68
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 71
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 72
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = twig_array_merge($_childrenClasses_, array(0 => ("menu_level_" . $this->getAttribute($_item_, "level"))));
            // line 73
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            $context["listAttributes"] = twig_array_merge($this->getAttribute($_item_, "childrenAttributes"), array("class" => twig_join_filter($_childrenClasses_, " ")));
            // line 74
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 79
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "uri"), "html", null, true);
        echo "\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($_item_, "linkAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 81
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($_item_, "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 83
    public function block_label($context, array $blocks = array())
    {
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (($this->getAttribute($_options_, "allow_safe_labels") && $this->getAttribute($_item_, "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "label");
        } else {
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "label"), "html", null, true);
        }
    }

    // line 1
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (((!(null === $_value_)) && (!($_value_ === false)))) {
                    // line 4
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo sprintf(" %s=\"%s\"", $_name_, ((($_value_ === true)) ? (twig_escape_filter($this->env, $_name_)) : (twig_escape_filter($this->env, $_value_))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 4,  296 => 1,  282 => 83,  248 => 74,  244 => 73,  240 => 72,  233 => 68,  229 => 66,  225 => 65,  220 => 64,  212 => 60,  209 => 59,  188 => 51,  177 => 47,  174 => 45,  128 => 36,  87 => 17,  74 => 11,  42 => 27,  161 => 59,  145 => 57,  126 => 50,  116 => 45,  99 => 39,  94 => 21,  91 => 20,  86 => 34,  83 => 33,  61 => 25,  73 => 29,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 2,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 56,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 40,  92 => 25,  84 => 16,  72 => 10,  48 => 18,  35 => 15,  29 => 15,  69 => 9,  54 => 14,  51 => 8,  31 => 14,  312 => 3,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 81,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 71,  204 => 57,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 28,  96 => 25,  76 => 17,  71 => 17,  55 => 79,  110 => 43,  89 => 16,  65 => 83,  63 => 13,  58 => 10,  34 => 15,  26 => 14,  24 => 4,  39 => 7,  38 => 6,  57 => 80,  43 => 18,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 27,  47 => 43,  28 => 4,  50 => 44,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 52,  130 => 42,  120 => 47,  105 => 41,  100 => 27,  75 => 24,  60 => 81,  53 => 19,  25 => 2,  19 => 1,  98 => 22,  88 => 17,  80 => 15,  78 => 31,  46 => 19,  44 => 9,  40 => 20,  36 => 16,  32 => 14,  27 => 8,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 61,  211 => 84,  208 => 70,  202 => 68,  196 => 54,  193 => 53,  187 => 62,  183 => 49,  180 => 48,  171 => 44,  166 => 41,  163 => 40,  160 => 49,  157 => 48,  149 => 42,  146 => 37,  140 => 46,  137 => 53,  129 => 51,  124 => 34,  121 => 33,  118 => 31,  115 => 30,  111 => 32,  107 => 28,  104 => 23,  97 => 24,  93 => 18,  90 => 21,  81 => 15,  70 => 28,  66 => 23,  62 => 82,  59 => 24,  56 => 23,  52 => 78,  49 => 9,  45 => 28,  41 => 17,  37 => 19,  33 => 4,  30 => 9,);
    }
}
