<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_9c662f215730737ce52b8255db360cd2eab6f30ac28aeadec0362a595827a741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
        if ((($this->getAttribute($_field_description_, "hasassociationadmin") && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_value_);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li><a href=\"";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "name"), 1 => $_element_, 2 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_element_, $_field_description_), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_value_);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li>";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_element_, $_field_description_), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 62,  153 => 57,  82 => 57,  23 => 18,  170 => 61,  164 => 59,  151 => 56,  135 => 50,  119 => 46,  103 => 40,  641 => 186,  638 => 185,  636 => 184,  628 => 180,  624 => 178,  616 => 175,  608 => 172,  602 => 170,  597 => 169,  594 => 168,  590 => 167,  584 => 166,  580 => 164,  577 => 163,  574 => 161,  566 => 157,  559 => 154,  554 => 153,  533 => 146,  516 => 139,  510 => 137,  503 => 134,  495 => 130,  492 => 129,  485 => 126,  476 => 122,  468 => 119,  462 => 117,  457 => 116,  446 => 113,  443 => 112,  440 => 111,  435 => 108,  428 => 106,  425 => 105,  421 => 103,  397 => 99,  393 => 97,  376 => 93,  363 => 90,  357 => 88,  354 => 87,  345 => 83,  340 => 82,  335 => 81,  316 => 78,  298 => 77,  272 => 70,  260 => 68,  213 => 77,  169 => 48,  159 => 45,  113 => 44,  95 => 30,  79 => 31,  21 => 11,  372 => 122,  370 => 92,  358 => 115,  342 => 109,  336 => 107,  328 => 105,  301 => 98,  297 => 96,  294 => 95,  291 => 93,  268 => 84,  263 => 83,  252 => 67,  246 => 78,  241 => 75,  234 => 87,  205 => 74,  199 => 72,  190 => 55,  184 => 58,  179 => 57,  176 => 50,  168 => 52,  154 => 57,  144 => 44,  407 => 102,  400 => 100,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 130,  360 => 89,  350 => 84,  343 => 120,  338 => 119,  334 => 117,  331 => 106,  324 => 104,  319 => 103,  314 => 111,  309 => 110,  304 => 109,  290 => 106,  286 => 105,  283 => 104,  280 => 103,  273 => 101,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 69,  191 => 70,  185 => 66,  156 => 58,  123 => 47,  64 => 22,  20 => 11,  315 => 4,  296 => 108,  282 => 89,  248 => 88,  244 => 73,  240 => 72,  233 => 82,  229 => 66,  225 => 82,  220 => 80,  212 => 77,  209 => 62,  188 => 68,  177 => 47,  174 => 62,  128 => 36,  87 => 29,  74 => 11,  42 => 13,  161 => 50,  145 => 54,  126 => 48,  116 => 36,  99 => 34,  94 => 33,  91 => 20,  86 => 34,  83 => 24,  61 => 21,  73 => 29,  549 => 152,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 128,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 114,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 97,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 99,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 81,  251 => 71,  239 => 84,  231 => 65,  219 => 67,  201 => 56,  143 => 53,  138 => 44,  134 => 32,  131 => 49,  122 => 37,  117 => 36,  108 => 34,  102 => 33,  92 => 25,  84 => 28,  72 => 19,  48 => 18,  35 => 16,  29 => 15,  69 => 23,  54 => 17,  51 => 19,  31 => 15,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 88,  277 => 102,  274 => 86,  271 => 81,  264 => 98,  261 => 81,  257 => 79,  253 => 77,  249 => 79,  247 => 70,  237 => 71,  204 => 74,  198 => 72,  194 => 64,  150 => 57,  147 => 45,  127 => 39,  112 => 27,  96 => 25,  76 => 30,  71 => 25,  55 => 21,  110 => 43,  89 => 32,  65 => 22,  63 => 13,  58 => 20,  34 => 16,  26 => 20,  24 => 12,  39 => 16,  38 => 17,  57 => 20,  43 => 18,  114 => 39,  109 => 25,  106 => 37,  101 => 68,  85 => 29,  77 => 56,  67 => 22,  47 => 35,  28 => 14,  50 => 19,  227 => 70,  224 => 91,  221 => 80,  207 => 71,  197 => 57,  195 => 71,  192 => 70,  189 => 61,  186 => 67,  181 => 64,  178 => 64,  173 => 49,  162 => 46,  158 => 58,  155 => 55,  152 => 55,  142 => 55,  136 => 44,  133 => 41,  130 => 40,  120 => 37,  105 => 26,  100 => 27,  75 => 26,  60 => 21,  53 => 19,  25 => 13,  19 => 11,  98 => 22,  88 => 17,  80 => 23,  78 => 24,  46 => 19,  44 => 7,  40 => 16,  36 => 16,  32 => 16,  27 => 8,  22 => 12,  232 => 72,  226 => 71,  222 => 76,  215 => 68,  211 => 84,  208 => 66,  202 => 60,  196 => 71,  193 => 53,  187 => 62,  183 => 53,  180 => 65,  171 => 44,  166 => 60,  163 => 40,  160 => 59,  157 => 48,  149 => 36,  146 => 35,  140 => 43,  137 => 51,  129 => 48,  124 => 34,  121 => 77,  118 => 38,  115 => 30,  111 => 32,  107 => 28,  104 => 23,  97 => 39,  93 => 64,  90 => 36,  81 => 25,  70 => 25,  66 => 22,  62 => 49,  59 => 21,  56 => 20,  52 => 9,  49 => 9,  45 => 17,  41 => 16,  37 => 17,  33 => 15,  30 => 9,);
    }
}
