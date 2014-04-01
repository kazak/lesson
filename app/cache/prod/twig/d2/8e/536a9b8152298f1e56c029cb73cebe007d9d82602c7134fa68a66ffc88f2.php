<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_d28e536a9b8152298f1e56c029cb73cebe007d9d82602c7134fa68a66ffc88f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => $_query_), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <!--
    <div class=\"row-fluid\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        echo twig_escape_filter($this->env, $_query_, "html", null, true);
        echo "\" class=\"input-large search-query\">
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => $_query_), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        if ((array_key_exists("query", $context) && (!($_query_ === false)))) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row-fluid\">

            ";
            // line 34
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_groups_);
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context["display"] = (twig_test_empty($this->getAttribute($_group_, "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                    if ((!$_display_)) {
                        // line 37
                        echo "                    ";
                        if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
                        $context["display"] = $this->env->getExtension('security')->isGranted($_role_);
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if ($_display_) {
                    // line 41
                    echo "                    ";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
                        if ((($_count_ % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row-fluid\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
                        $context["count"] = ($_count_ + 1);
                        // line 47
                        echo "                        ";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        if ((($this->getAttribute($_admin_, "hasroute", array(0 => "create"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" => $_query_, "admin_code" => $this->getAttribute($_admin_, "code"), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  925 => 274,  922 => 273,  917 => 268,  913 => 266,  906 => 263,  903 => 262,  900 => 261,  894 => 259,  885 => 258,  882 => 257,  878 => 256,  875 => 255,  868 => 253,  865 => 252,  862 => 251,  855 => 249,  852 => 248,  849 => 247,  842 => 245,  839 => 244,  836 => 243,  829 => 241,  826 => 240,  823 => 239,  820 => 238,  816 => 221,  811 => 218,  804 => 216,  801 => 215,  798 => 214,  784 => 213,  777 => 211,  772 => 208,  765 => 206,  749 => 202,  745 => 201,  725 => 200,  719 => 198,  711 => 195,  708 => 194,  701 => 190,  698 => 189,  692 => 273,  687 => 270,  685 => 238,  680 => 237,  677 => 236,  670 => 233,  667 => 232,  649 => 224,  646 => 223,  643 => 222,  626 => 179,  622 => 174,  606 => 168,  589 => 162,  569 => 156,  528 => 147,  511 => 143,  507 => 142,  478 => 135,  470 => 134,  456 => 131,  453 => 130,  439 => 166,  399 => 119,  391 => 117,  378 => 179,  310 => 78,  265 => 61,  242 => 56,  182 => 68,  12 => 34,  419 => 96,  415 => 124,  402 => 92,  398 => 91,  395 => 90,  386 => 88,  368 => 124,  320 => 67,  317 => 66,  306 => 59,  262 => 47,  254 => 45,  139 => 45,  148 => 47,  696 => 193,  683 => 191,  657 => 183,  654 => 182,  648 => 178,  637 => 192,  631 => 188,  618 => 172,  613 => 171,  599 => 166,  593 => 163,  572 => 156,  568 => 143,  565 => 142,  556 => 140,  544 => 152,  541 => 130,  536 => 113,  523 => 111,  518 => 145,  506 => 105,  501 => 104,  454 => 88,  449 => 144,  447 => 129,  432 => 163,  427 => 129,  382 => 123,  374 => 85,  356 => 86,  346 => 83,  323 => 77,  236 => 60,  228 => 39,  218 => 55,  125 => 47,  68 => 25,  812 => 213,  805 => 210,  802 => 209,  799 => 208,  792 => 205,  779 => 204,  773 => 202,  758 => 200,  755 => 204,  752 => 203,  743 => 193,  740 => 192,  723 => 190,  705 => 189,  699 => 187,  694 => 280,  691 => 185,  688 => 184,  682 => 180,  678 => 190,  675 => 177,  669 => 187,  634 => 189,  629 => 172,  621 => 173,  612 => 170,  609 => 167,  604 => 165,  587 => 157,  582 => 155,  579 => 154,  575 => 157,  567 => 131,  555 => 128,  552 => 127,  545 => 149,  535 => 149,  532 => 145,  525 => 146,  519 => 140,  513 => 138,  493 => 136,  489 => 137,  486 => 134,  484 => 127,  461 => 120,  458 => 119,  424 => 113,  411 => 106,  404 => 104,  389 => 100,  385 => 99,  381 => 87,  364 => 88,  361 => 90,  349 => 84,  333 => 83,  326 => 81,  311 => 64,  305 => 75,  278 => 65,  203 => 45,  353 => 114,  341 => 141,  337 => 72,  325 => 68,  313 => 131,  288 => 70,  266 => 62,  258 => 60,  250 => 103,  216 => 90,  175 => 77,  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 199,  715 => 196,  704 => 191,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 231,  662 => 342,  659 => 228,  652 => 225,  647 => 337,  619 => 321,  615 => 319,  607 => 169,  601 => 310,  591 => 307,  586 => 161,  560 => 141,  553 => 154,  547 => 290,  540 => 285,  531 => 148,  520 => 273,  515 => 144,  508 => 267,  504 => 261,  499 => 141,  482 => 136,  480 => 91,  477 => 90,  471 => 116,  436 => 224,  418 => 210,  412 => 94,  396 => 196,  384 => 182,  379 => 187,  373 => 126,  367 => 118,  347 => 143,  339 => 104,  303 => 58,  292 => 72,  275 => 66,  270 => 139,  235 => 52,  210 => 38,  165 => 62,  172 => 62,  153 => 47,  82 => 26,  23 => 12,  170 => 61,  164 => 59,  151 => 48,  135 => 51,  119 => 42,  103 => 33,  641 => 194,  638 => 185,  636 => 330,  628 => 326,  624 => 171,  616 => 169,  608 => 172,  602 => 167,  597 => 169,  594 => 160,  590 => 158,  584 => 164,  580 => 160,  577 => 162,  574 => 302,  566 => 157,  559 => 129,  554 => 153,  533 => 146,  516 => 139,  510 => 106,  503 => 134,  495 => 140,  492 => 139,  485 => 126,  476 => 122,  468 => 115,  462 => 100,  457 => 89,  446 => 113,  443 => 116,  440 => 111,  435 => 164,  428 => 106,  425 => 98,  421 => 112,  397 => 102,  393 => 97,  376 => 93,  363 => 117,  357 => 177,  354 => 79,  345 => 86,  340 => 73,  335 => 81,  316 => 75,  298 => 74,  272 => 113,  260 => 68,  213 => 77,  169 => 188,  159 => 58,  113 => 41,  95 => 89,  79 => 34,  21 => 11,  372 => 94,  370 => 125,  358 => 89,  342 => 105,  336 => 107,  328 => 101,  301 => 75,  297 => 126,  294 => 95,  291 => 93,  268 => 63,  263 => 61,  252 => 61,  246 => 78,  241 => 100,  234 => 59,  205 => 74,  199 => 33,  190 => 30,  184 => 28,  179 => 60,  176 => 64,  168 => 63,  154 => 49,  144 => 44,  407 => 120,  400 => 124,  392 => 135,  387 => 134,  383 => 132,  380 => 180,  377 => 86,  360 => 89,  350 => 84,  343 => 82,  338 => 79,  334 => 139,  331 => 70,  324 => 80,  319 => 76,  314 => 79,  309 => 158,  304 => 109,  290 => 106,  286 => 68,  283 => 68,  280 => 67,  273 => 64,  269 => 63,  267 => 48,  259 => 97,  245 => 57,  230 => 81,  223 => 78,  200 => 51,  191 => 70,  185 => 66,  156 => 101,  123 => 43,  64 => 26,  20 => 1,  315 => 4,  296 => 70,  282 => 89,  248 => 129,  244 => 42,  240 => 72,  233 => 56,  229 => 122,  225 => 82,  220 => 80,  212 => 38,  209 => 37,  188 => 69,  177 => 40,  174 => 62,  128 => 95,  87 => 31,  74 => 56,  42 => 25,  161 => 60,  145 => 46,  126 => 47,  116 => 40,  99 => 37,  94 => 35,  91 => 33,  86 => 25,  83 => 30,  61 => 27,  73 => 31,  549 => 153,  543 => 161,  538 => 150,  530 => 155,  526 => 153,  522 => 141,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 126,  469 => 132,  466 => 133,  460 => 132,  455 => 118,  450 => 117,  444 => 104,  441 => 175,  437 => 133,  434 => 119,  429 => 130,  423 => 127,  420 => 126,  416 => 110,  413 => 125,  408 => 106,  394 => 118,  390 => 103,  375 => 178,  365 => 123,  362 => 117,  359 => 80,  355 => 115,  348 => 76,  344 => 74,  330 => 89,  327 => 88,  321 => 80,  307 => 77,  302 => 74,  295 => 73,  287 => 148,  279 => 67,  256 => 81,  251 => 71,  239 => 84,  231 => 51,  219 => 67,  201 => 56,  143 => 25,  138 => 52,  134 => 43,  131 => 52,  122 => 44,  117 => 48,  108 => 46,  102 => 38,  92 => 37,  84 => 35,  72 => 31,  48 => 20,  35 => 15,  29 => 14,  69 => 30,  54 => 23,  51 => 18,  31 => 15,  312 => 100,  308 => 94,  293 => 72,  285 => 90,  281 => 51,  277 => 66,  274 => 86,  271 => 81,  264 => 98,  261 => 62,  257 => 46,  253 => 77,  249 => 59,  247 => 43,  237 => 99,  204 => 35,  198 => 72,  194 => 49,  150 => 46,  147 => 45,  127 => 45,  112 => 39,  96 => 37,  76 => 82,  71 => 55,  55 => 20,  110 => 40,  89 => 31,  65 => 24,  63 => 28,  58 => 26,  34 => 15,  26 => 13,  24 => 14,  39 => 12,  38 => 18,  57 => 21,  43 => 17,  114 => 44,  109 => 23,  106 => 39,  101 => 91,  85 => 86,  77 => 24,  67 => 27,  47 => 19,  28 => 14,  50 => 15,  227 => 49,  224 => 54,  221 => 53,  207 => 37,  197 => 50,  195 => 32,  192 => 71,  189 => 47,  186 => 67,  181 => 79,  178 => 22,  173 => 53,  162 => 46,  158 => 35,  155 => 59,  152 => 58,  142 => 55,  136 => 55,  133 => 47,  130 => 46,  120 => 92,  105 => 19,  100 => 38,  75 => 32,  60 => 22,  53 => 19,  25 => 13,  19 => 11,  98 => 90,  88 => 36,  80 => 84,  78 => 29,  46 => 21,  44 => 21,  40 => 16,  36 => 16,  32 => 15,  27 => 13,  22 => 12,  232 => 96,  226 => 71,  222 => 56,  215 => 49,  211 => 47,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 29,  183 => 44,  180 => 65,  171 => 281,  166 => 52,  163 => 104,  160 => 103,  157 => 49,  149 => 98,  146 => 57,  140 => 44,  137 => 48,  129 => 42,  124 => 93,  121 => 39,  118 => 38,  115 => 42,  111 => 35,  107 => 39,  104 => 36,  97 => 31,  93 => 42,  90 => 15,  81 => 21,  70 => 33,  66 => 17,  62 => 23,  59 => 24,  56 => 23,  52 => 21,  49 => 17,  45 => 15,  41 => 13,  37 => 11,  33 => 17,  30 => 14,);
    }
}
