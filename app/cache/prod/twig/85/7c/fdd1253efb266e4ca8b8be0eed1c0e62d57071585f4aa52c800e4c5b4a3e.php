<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_857cfdd1253efb266e4ca8b8be0eed1c0e62d57071585f4aa52c800e4c5b4a3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_element_, "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $_edit_, "html", null, true);
        echo "-";
        if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
        echo twig_escape_filter($this->env, $_inline_, "html", null, true);
        echo " ";
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_field_element_, "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
        if (($_inline_ == "natural")) {
            // line 16
            echo "            ";
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            if ($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($_field_description_, "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 51,  696 => 193,  683 => 191,  657 => 183,  654 => 182,  648 => 178,  637 => 175,  631 => 174,  618 => 172,  613 => 171,  599 => 167,  593 => 165,  572 => 156,  568 => 143,  565 => 142,  556 => 140,  544 => 131,  541 => 130,  536 => 113,  523 => 111,  518 => 110,  506 => 105,  501 => 104,  454 => 88,  449 => 144,  447 => 139,  432 => 129,  427 => 126,  382 => 123,  374 => 121,  356 => 86,  346 => 83,  323 => 77,  236 => 60,  228 => 57,  218 => 55,  125 => 45,  68 => 16,  812 => 213,  805 => 210,  802 => 209,  799 => 208,  792 => 205,  779 => 204,  773 => 202,  758 => 200,  755 => 199,  752 => 198,  743 => 193,  740 => 192,  723 => 190,  705 => 189,  699 => 187,  694 => 186,  691 => 185,  688 => 184,  682 => 180,  678 => 190,  675 => 177,  669 => 187,  634 => 173,  629 => 172,  621 => 173,  612 => 168,  609 => 167,  604 => 165,  587 => 157,  582 => 155,  579 => 154,  575 => 133,  567 => 131,  555 => 128,  552 => 127,  545 => 149,  535 => 146,  532 => 145,  525 => 142,  519 => 140,  513 => 138,  493 => 136,  489 => 135,  486 => 134,  484 => 127,  461 => 120,  458 => 119,  424 => 113,  411 => 106,  404 => 104,  389 => 100,  385 => 99,  381 => 98,  364 => 88,  361 => 90,  349 => 84,  333 => 83,  326 => 81,  311 => 77,  305 => 75,  278 => 65,  203 => 45,  353 => 145,  341 => 141,  337 => 140,  325 => 135,  313 => 131,  288 => 121,  266 => 62,  258 => 58,  250 => 103,  216 => 90,  175 => 77,  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 377,  715 => 374,  704 => 367,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 185,  662 => 342,  659 => 341,  652 => 174,  647 => 337,  619 => 321,  615 => 319,  607 => 169,  601 => 310,  591 => 307,  586 => 306,  560 => 141,  553 => 139,  547 => 290,  540 => 285,  531 => 280,  520 => 273,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  482 => 254,  480 => 91,  477 => 90,  471 => 116,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 118,  347 => 143,  339 => 173,  303 => 156,  292 => 72,  275 => 140,  270 => 139,  235 => 124,  210 => 88,  165 => 38,  172 => 62,  153 => 26,  82 => 57,  23 => 18,  170 => 39,  164 => 59,  151 => 56,  135 => 59,  119 => 43,  103 => 40,  641 => 186,  638 => 185,  636 => 330,  628 => 326,  624 => 171,  616 => 169,  608 => 172,  602 => 170,  597 => 169,  594 => 160,  590 => 158,  584 => 164,  580 => 163,  577 => 162,  574 => 302,  566 => 157,  559 => 129,  554 => 153,  533 => 146,  516 => 139,  510 => 106,  503 => 134,  495 => 103,  492 => 102,  485 => 126,  476 => 122,  468 => 115,  462 => 100,  457 => 89,  446 => 113,  443 => 116,  440 => 111,  435 => 130,  428 => 106,  425 => 105,  421 => 112,  397 => 102,  393 => 97,  376 => 93,  363 => 90,  357 => 177,  354 => 87,  345 => 86,  340 => 82,  335 => 81,  316 => 75,  298 => 74,  272 => 113,  260 => 68,  213 => 77,  169 => 76,  159 => 45,  113 => 42,  95 => 25,  79 => 14,  21 => 11,  372 => 94,  370 => 119,  358 => 89,  342 => 109,  336 => 107,  328 => 105,  301 => 127,  297 => 126,  294 => 95,  291 => 93,  268 => 63,  263 => 61,  252 => 61,  246 => 78,  241 => 100,  234 => 59,  205 => 74,  199 => 72,  190 => 55,  184 => 58,  179 => 60,  176 => 59,  168 => 63,  154 => 57,  144 => 44,  407 => 105,  400 => 124,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 122,  360 => 89,  350 => 84,  343 => 82,  338 => 79,  334 => 139,  331 => 169,  324 => 80,  319 => 76,  314 => 111,  309 => 158,  304 => 109,  290 => 106,  286 => 68,  283 => 104,  280 => 67,  273 => 64,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 51,  191 => 70,  185 => 66,  156 => 58,  123 => 46,  64 => 15,  20 => 11,  315 => 4,  296 => 70,  282 => 89,  248 => 129,  244 => 101,  240 => 72,  233 => 56,  229 => 122,  225 => 82,  220 => 80,  212 => 54,  209 => 62,  188 => 68,  177 => 40,  174 => 62,  128 => 151,  87 => 21,  74 => 29,  42 => 14,  161 => 36,  145 => 158,  126 => 47,  116 => 36,  99 => 36,  94 => 35,  91 => 23,  86 => 33,  83 => 32,  61 => 14,  73 => 24,  549 => 132,  543 => 161,  538 => 147,  530 => 155,  526 => 153,  522 => 141,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 126,  469 => 132,  466 => 102,  460 => 90,  455 => 118,  450 => 117,  444 => 122,  441 => 135,  437 => 133,  434 => 119,  429 => 114,  423 => 112,  420 => 111,  416 => 110,  413 => 125,  408 => 106,  394 => 101,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 87,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 79,  307 => 76,  302 => 74,  295 => 73,  287 => 148,  279 => 116,  256 => 81,  251 => 71,  239 => 84,  231 => 58,  219 => 67,  201 => 56,  143 => 61,  138 => 49,  134 => 47,  131 => 46,  122 => 44,  117 => 42,  108 => 39,  102 => 28,  92 => 18,  84 => 30,  72 => 17,  48 => 18,  35 => 15,  29 => 15,  69 => 197,  54 => 23,  51 => 22,  31 => 15,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 66,  277 => 66,  274 => 86,  271 => 81,  264 => 98,  261 => 62,  257 => 134,  253 => 77,  249 => 79,  247 => 70,  237 => 99,  204 => 52,  198 => 43,  194 => 49,  150 => 68,  147 => 67,  127 => 45,  112 => 41,  96 => 35,  76 => 13,  71 => 25,  55 => 29,  110 => 81,  89 => 34,  65 => 28,  63 => 27,  58 => 25,  34 => 16,  26 => 14,  24 => 11,  39 => 16,  38 => 24,  57 => 154,  43 => 20,  114 => 41,  109 => 40,  106 => 39,  101 => 61,  85 => 16,  77 => 30,  67 => 28,  47 => 25,  28 => 14,  50 => 19,  227 => 55,  224 => 54,  221 => 53,  207 => 53,  197 => 50,  195 => 42,  192 => 48,  189 => 47,  186 => 67,  181 => 79,  178 => 64,  173 => 58,  162 => 46,  158 => 35,  155 => 53,  152 => 31,  142 => 51,  136 => 49,  133 => 30,  130 => 29,  120 => 26,  105 => 71,  100 => 37,  75 => 30,  60 => 25,  53 => 28,  25 => 12,  19 => 2,  98 => 39,  88 => 33,  80 => 19,  78 => 31,  46 => 14,  44 => 24,  40 => 25,  36 => 17,  32 => 16,  27 => 12,  22 => 11,  232 => 96,  226 => 71,  222 => 56,  215 => 49,  211 => 47,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 46,  183 => 44,  180 => 65,  171 => 38,  166 => 58,  163 => 40,  160 => 56,  157 => 48,  149 => 36,  146 => 35,  140 => 156,  137 => 155,  129 => 48,  124 => 44,  121 => 43,  118 => 45,  115 => 42,  111 => 40,  107 => 22,  104 => 38,  97 => 36,  93 => 45,  90 => 36,  81 => 32,  70 => 33,  66 => 24,  62 => 165,  59 => 164,  56 => 24,  52 => 23,  49 => 26,  45 => 20,  41 => 19,  37 => 17,  33 => 16,  30 => 9,);
    }
}
