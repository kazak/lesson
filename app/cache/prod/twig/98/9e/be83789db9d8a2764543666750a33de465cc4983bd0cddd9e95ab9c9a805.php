<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig */
class __TwigTemplate_989ebe83789db9d8a2764543666750a33de465cc4983bd0cddd9e95ab9c9a805 extends Twig_Template
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
        echo "    ";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if ($_value_) {
            // line 16
            echo "        ";
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            if ((($this->getAttribute($_field_description_, "hasAssociationAdmin") && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "name"), 1 => $_value_, 2 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_value_, $_field_description_), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_value_, $_field_description_), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 11,  372 => 122,  370 => 121,  358 => 115,  342 => 109,  336 => 107,  328 => 105,  301 => 98,  297 => 96,  294 => 95,  291 => 93,  268 => 84,  263 => 83,  252 => 80,  246 => 78,  241 => 75,  234 => 73,  205 => 65,  199 => 63,  190 => 59,  184 => 58,  179 => 57,  176 => 56,  168 => 52,  154 => 48,  144 => 44,  407 => 141,  400 => 139,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 130,  360 => 125,  350 => 112,  343 => 120,  338 => 119,  334 => 117,  331 => 106,  324 => 104,  319 => 103,  314 => 111,  309 => 110,  304 => 109,  290 => 106,  286 => 105,  283 => 104,  280 => 103,  273 => 101,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 69,  191 => 67,  185 => 66,  156 => 59,  123 => 44,  64 => 23,  20 => 11,  315 => 4,  296 => 108,  282 => 89,  248 => 88,  244 => 73,  240 => 72,  233 => 82,  229 => 66,  225 => 65,  220 => 77,  212 => 60,  209 => 59,  188 => 51,  177 => 47,  174 => 62,  128 => 36,  87 => 29,  74 => 11,  42 => 13,  161 => 50,  145 => 56,  126 => 45,  116 => 36,  99 => 34,  94 => 33,  91 => 20,  86 => 34,  83 => 27,  61 => 22,  73 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 97,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 99,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 81,  251 => 71,  239 => 84,  231 => 72,  219 => 67,  201 => 56,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 35,  92 => 25,  84 => 28,  72 => 19,  48 => 18,  35 => 16,  29 => 15,  69 => 9,  54 => 22,  51 => 19,  31 => 15,  312 => 100,  308 => 94,  293 => 107,  285 => 90,  281 => 88,  277 => 102,  274 => 86,  271 => 81,  264 => 98,  261 => 81,  257 => 79,  253 => 77,  249 => 79,  247 => 70,  237 => 71,  204 => 57,  198 => 65,  194 => 64,  150 => 57,  147 => 45,  127 => 39,  112 => 28,  96 => 25,  76 => 17,  71 => 25,  55 => 21,  110 => 43,  89 => 32,  65 => 24,  63 => 13,  58 => 21,  34 => 12,  26 => 14,  24 => 12,  39 => 17,  38 => 17,  57 => 10,  43 => 18,  114 => 39,  109 => 25,  106 => 37,  101 => 19,  85 => 22,  77 => 12,  67 => 27,  47 => 8,  28 => 14,  50 => 19,  227 => 70,  224 => 91,  221 => 69,  207 => 71,  197 => 74,  195 => 60,  192 => 72,  189 => 61,  186 => 60,  181 => 64,  178 => 61,  173 => 55,  162 => 60,  158 => 56,  155 => 55,  152 => 55,  142 => 55,  136 => 44,  133 => 41,  130 => 40,  120 => 37,  105 => 41,  100 => 27,  75 => 24,  60 => 81,  53 => 19,  25 => 2,  19 => 11,  98 => 22,  88 => 17,  80 => 23,  78 => 28,  46 => 19,  44 => 7,  40 => 20,  36 => 15,  32 => 16,  27 => 8,  22 => 12,  232 => 72,  226 => 71,  222 => 76,  215 => 68,  211 => 84,  208 => 66,  202 => 64,  196 => 54,  193 => 53,  187 => 62,  183 => 49,  180 => 48,  171 => 44,  166 => 41,  163 => 40,  160 => 49,  157 => 48,  149 => 42,  146 => 37,  140 => 43,  137 => 54,  129 => 51,  124 => 34,  121 => 33,  118 => 31,  115 => 30,  111 => 32,  107 => 28,  104 => 23,  97 => 34,  93 => 18,  90 => 21,  81 => 15,  70 => 24,  66 => 23,  62 => 82,  59 => 21,  56 => 23,  52 => 9,  49 => 9,  45 => 17,  41 => 16,  37 => 17,  33 => 16,  30 => 9,);
    }
}
