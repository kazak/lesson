<?php

/* SonataAdminBundle:CRUD:list_choice.html.twig */
class __TwigTemplate_a811a7dfd3a5761c9c394a8192fd10ea0357fa55abbc909f84a129a3131ced01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
        if ($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 17
            echo "        ";
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if ((($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_field_description_, "options"), "multiple") == true)) && twig_test_iterable($_value_))) {
                // line 18
                echo "
            ";
                // line 19
                $context["result"] = "";
                // line 20
                echo "            ";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                $context["delimiter"] = (($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "delimiter"), ", ")) : (", "));
                // line 21
                echo "
            ";
                // line 22
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_value_);
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 23
                    echo "                ";
                    if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                    if ((!twig_test_empty($_result_))) {
                        // line 24
                        echo "                    ";
                        if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                        if (isset($context["delimiter"])) { $_delimiter_ = $context["delimiter"]; } else { $_delimiter_ = null; }
                        $context["result"] = ($_result_ . $_delimiter_);
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "
                ";
                    // line 27
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "choices", array(), "any", false, true), $_val_, array(), "array", true, true)) {
                        // line 28
                        echo "                    ";
                        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                        if ((!$this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 29
                            echo "                        ";
                            if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                            $context["result"] = ($_result_ . $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "choices"), $_val_, array(), "array"));
                            // line 30
                            echo "                    ";
                        } else {
                            // line 31
                            echo "                        ";
                            if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                            $context["result"] = ($_result_ . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "choices"), $_val_, array(), "array"), array(), $this->getAttribute($this->getAttribute($_field_description_, "options"), "catalogue")));
                            // line 32
                            echo "                    ";
                        }
                        // line 33
                        echo "                ";
                    } else {
                        // line 34
                        echo "                    ";
                        if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                        if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                        $context["result"] = ($_result_ . $_val_);
                        // line 35
                        echo "                ";
                    }
                    // line 36
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
            ";
                // line 38
                if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                $context["value"] = $_result_;
                // line 39
                echo "
        ";
            } elseif (twig_in_filter($_value_, twig_get_array_keys_filter($this->getAttribute($this->getAttribute($_field_description_, "options"), "choices")))) {
                // line 41
                echo "            ";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                if ((!$this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 42
                    echo "                ";
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "choices"), $_value_, array(), "array");
                    // line 43
                    echo "            ";
                } else {
                    // line 44
                    echo "                ";
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "choices"), $_value_, array(), "array"), array(), $this->getAttribute($this->getAttribute($_field_description_, "options"), "catalogue"));
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "        ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_, "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 96,  415 => 95,  402 => 92,  398 => 91,  395 => 90,  386 => 88,  368 => 83,  320 => 67,  317 => 66,  306 => 59,  262 => 47,  254 => 45,  139 => 23,  148 => 47,  696 => 193,  683 => 191,  657 => 183,  654 => 182,  648 => 178,  637 => 175,  631 => 174,  618 => 172,  613 => 171,  599 => 167,  593 => 165,  572 => 156,  568 => 143,  565 => 142,  556 => 140,  544 => 131,  541 => 130,  536 => 113,  523 => 111,  518 => 110,  506 => 105,  501 => 104,  454 => 88,  449 => 144,  447 => 139,  432 => 129,  427 => 126,  382 => 123,  374 => 85,  356 => 86,  346 => 83,  323 => 77,  236 => 60,  228 => 39,  218 => 55,  125 => 41,  68 => 16,  812 => 213,  805 => 210,  802 => 209,  799 => 208,  792 => 205,  779 => 204,  773 => 202,  758 => 200,  755 => 199,  752 => 198,  743 => 193,  740 => 192,  723 => 190,  705 => 189,  699 => 187,  694 => 186,  691 => 185,  688 => 184,  682 => 180,  678 => 190,  675 => 177,  669 => 187,  634 => 173,  629 => 172,  621 => 173,  612 => 168,  609 => 167,  604 => 165,  587 => 157,  582 => 155,  579 => 154,  575 => 133,  567 => 131,  555 => 128,  552 => 127,  545 => 149,  535 => 146,  532 => 145,  525 => 142,  519 => 140,  513 => 138,  493 => 136,  489 => 135,  486 => 134,  484 => 127,  461 => 120,  458 => 119,  424 => 113,  411 => 106,  404 => 104,  389 => 100,  385 => 99,  381 => 87,  364 => 88,  361 => 90,  349 => 84,  333 => 83,  326 => 81,  311 => 64,  305 => 75,  278 => 65,  203 => 45,  353 => 145,  341 => 141,  337 => 72,  325 => 68,  313 => 131,  288 => 121,  266 => 62,  258 => 58,  250 => 103,  216 => 90,  175 => 77,  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 377,  715 => 374,  704 => 367,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 185,  662 => 342,  659 => 341,  652 => 174,  647 => 337,  619 => 321,  615 => 319,  607 => 169,  601 => 310,  591 => 307,  586 => 306,  560 => 141,  553 => 139,  547 => 290,  540 => 285,  531 => 280,  520 => 273,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  482 => 254,  480 => 91,  477 => 90,  471 => 116,  436 => 224,  418 => 210,  412 => 94,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 118,  347 => 143,  339 => 173,  303 => 58,  292 => 72,  275 => 50,  270 => 139,  235 => 124,  210 => 38,  165 => 38,  172 => 62,  153 => 26,  82 => 34,  23 => 18,  170 => 39,  164 => 59,  151 => 48,  135 => 59,  119 => 43,  103 => 40,  641 => 186,  638 => 185,  636 => 330,  628 => 326,  624 => 171,  616 => 169,  608 => 172,  602 => 170,  597 => 169,  594 => 160,  590 => 158,  584 => 164,  580 => 163,  577 => 162,  574 => 302,  566 => 157,  559 => 129,  554 => 153,  533 => 146,  516 => 139,  510 => 106,  503 => 134,  495 => 103,  492 => 102,  485 => 126,  476 => 122,  468 => 115,  462 => 100,  457 => 89,  446 => 113,  443 => 116,  440 => 111,  435 => 101,  428 => 106,  425 => 98,  421 => 112,  397 => 102,  393 => 97,  376 => 93,  363 => 90,  357 => 177,  354 => 79,  345 => 86,  340 => 73,  335 => 81,  316 => 75,  298 => 55,  272 => 113,  260 => 68,  213 => 77,  169 => 27,  159 => 45,  113 => 42,  95 => 32,  79 => 14,  21 => 11,  372 => 94,  370 => 119,  358 => 89,  342 => 109,  336 => 107,  328 => 105,  301 => 127,  297 => 126,  294 => 95,  291 => 93,  268 => 63,  263 => 61,  252 => 61,  246 => 78,  241 => 100,  234 => 59,  205 => 74,  199 => 33,  190 => 55,  184 => 58,  179 => 60,  176 => 59,  168 => 63,  154 => 49,  144 => 44,  407 => 105,  400 => 124,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 86,  360 => 89,  350 => 84,  343 => 82,  338 => 79,  334 => 139,  331 => 70,  324 => 80,  319 => 76,  314 => 65,  309 => 158,  304 => 109,  290 => 106,  286 => 68,  283 => 104,  280 => 67,  273 => 64,  269 => 100,  267 => 48,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 51,  191 => 70,  185 => 66,  156 => 58,  123 => 48,  64 => 27,  20 => 11,  315 => 4,  296 => 70,  282 => 89,  248 => 129,  244 => 42,  240 => 72,  233 => 56,  229 => 122,  225 => 82,  220 => 80,  212 => 54,  209 => 62,  188 => 68,  177 => 40,  174 => 62,  128 => 49,  87 => 35,  74 => 29,  42 => 19,  161 => 26,  145 => 46,  126 => 47,  116 => 36,  99 => 40,  94 => 21,  91 => 23,  86 => 30,  83 => 33,  61 => 24,  73 => 30,  549 => 132,  543 => 161,  538 => 147,  530 => 155,  526 => 153,  522 => 141,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 126,  469 => 132,  466 => 102,  460 => 90,  455 => 118,  450 => 117,  444 => 104,  441 => 103,  437 => 133,  434 => 119,  429 => 99,  423 => 112,  420 => 111,  416 => 110,  413 => 125,  408 => 106,  394 => 101,  390 => 103,  375 => 123,  365 => 82,  362 => 117,  359 => 80,  355 => 124,  348 => 76,  344 => 74,  330 => 89,  327 => 88,  321 => 79,  307 => 76,  302 => 74,  295 => 73,  287 => 148,  279 => 116,  256 => 81,  251 => 71,  239 => 84,  231 => 58,  219 => 67,  201 => 56,  143 => 25,  138 => 49,  134 => 43,  131 => 46,  122 => 44,  117 => 46,  108 => 39,  102 => 40,  92 => 37,  84 => 34,  72 => 27,  48 => 18,  35 => 17,  29 => 15,  69 => 26,  54 => 23,  51 => 22,  31 => 16,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 51,  277 => 66,  274 => 86,  271 => 81,  264 => 98,  261 => 62,  257 => 46,  253 => 77,  249 => 79,  247 => 43,  237 => 99,  204 => 36,  198 => 43,  194 => 49,  150 => 68,  147 => 67,  127 => 47,  112 => 62,  96 => 39,  76 => 28,  71 => 32,  55 => 24,  110 => 40,  89 => 31,  65 => 28,  63 => 30,  58 => 25,  34 => 16,  26 => 14,  24 => 1,  39 => 18,  38 => 18,  57 => 23,  43 => 19,  114 => 44,  109 => 36,  106 => 35,  101 => 34,  85 => 16,  77 => 31,  67 => 31,  47 => 22,  28 => 14,  50 => 23,  227 => 55,  224 => 54,  221 => 53,  207 => 37,  197 => 50,  195 => 42,  192 => 48,  189 => 47,  186 => 67,  181 => 79,  178 => 29,  173 => 58,  162 => 46,  158 => 35,  155 => 53,  152 => 31,  142 => 45,  136 => 22,  133 => 30,  130 => 29,  120 => 45,  105 => 71,  100 => 37,  75 => 32,  60 => 25,  53 => 28,  25 => 12,  19 => 11,  98 => 33,  88 => 36,  80 => 29,  78 => 36,  46 => 14,  44 => 20,  40 => 18,  36 => 17,  32 => 16,  27 => 13,  22 => 12,  232 => 96,  226 => 71,  222 => 56,  215 => 49,  211 => 47,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 46,  183 => 44,  180 => 65,  171 => 38,  166 => 58,  163 => 40,  160 => 56,  157 => 48,  149 => 36,  146 => 35,  140 => 44,  137 => 44,  129 => 42,  124 => 108,  121 => 39,  118 => 38,  115 => 37,  111 => 43,  107 => 42,  104 => 41,  97 => 22,  93 => 45,  90 => 36,  81 => 16,  70 => 33,  66 => 25,  62 => 27,  59 => 29,  56 => 24,  52 => 22,  49 => 21,  45 => 20,  41 => 19,  37 => 18,  33 => 16,  30 => 15,);
    }
}
