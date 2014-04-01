<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_e64e8e40df300ab7f91350006f3c8aecd065ef2e5ce35c8688885400d01e31e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($_admin_, "sidemenu", array(0 => $_action_), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 28
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => $_admin_, "object" => $_object_)));
        echo "

        ";
        // line 30
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 31
            echo "            <table class=\"table table-bordered\">
                ";
            // line 32
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if ($_name_) {
                // line 33
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 35
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $_name_), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 39
            echo "
                ";
            // line 40
            if (isset($context["view_group"])) { $_view_group_ = $context["view_group"]; } else { $_view_group_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_view_group_, "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 41
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 42
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                if ($this->getAttribute($_elements_, $_field_name_, array(), "array", true, true)) {
                    // line 43
                    echo "                            ";
                    if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                    if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                    if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($_elements_, $_field_name_, array(), "array"), $_object_);
                    echo "
                        ";
                }
                // line 45
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        ";
        // line 50
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => $_admin_, "object" => $_object_)));
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 96,  415 => 95,  402 => 92,  398 => 91,  395 => 90,  386 => 88,  368 => 83,  320 => 67,  317 => 66,  306 => 59,  262 => 47,  254 => 45,  139 => 23,  148 => 51,  696 => 193,  683 => 191,  657 => 183,  654 => 182,  648 => 178,  637 => 175,  631 => 174,  618 => 172,  613 => 171,  599 => 167,  593 => 165,  572 => 156,  568 => 143,  565 => 142,  556 => 140,  544 => 131,  541 => 130,  536 => 113,  523 => 111,  518 => 110,  506 => 105,  501 => 104,  454 => 88,  449 => 144,  447 => 139,  432 => 129,  427 => 126,  382 => 123,  374 => 85,  356 => 86,  346 => 83,  323 => 77,  236 => 60,  228 => 39,  218 => 55,  125 => 45,  68 => 16,  812 => 213,  805 => 210,  802 => 209,  799 => 208,  792 => 205,  779 => 204,  773 => 202,  758 => 200,  755 => 199,  752 => 198,  743 => 193,  740 => 192,  723 => 190,  705 => 189,  699 => 187,  694 => 186,  691 => 185,  688 => 184,  682 => 180,  678 => 190,  675 => 177,  669 => 187,  634 => 173,  629 => 172,  621 => 173,  612 => 168,  609 => 167,  604 => 165,  587 => 157,  582 => 155,  579 => 154,  575 => 133,  567 => 131,  555 => 128,  552 => 127,  545 => 149,  535 => 146,  532 => 145,  525 => 142,  519 => 140,  513 => 138,  493 => 136,  489 => 135,  486 => 134,  484 => 127,  461 => 120,  458 => 119,  424 => 113,  411 => 106,  404 => 104,  389 => 100,  385 => 99,  381 => 87,  364 => 88,  361 => 90,  349 => 84,  333 => 83,  326 => 81,  311 => 64,  305 => 75,  278 => 65,  203 => 45,  353 => 145,  341 => 141,  337 => 72,  325 => 68,  313 => 131,  288 => 121,  266 => 62,  258 => 58,  250 => 103,  216 => 90,  175 => 77,  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 377,  715 => 374,  704 => 367,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 185,  662 => 342,  659 => 341,  652 => 174,  647 => 337,  619 => 321,  615 => 319,  607 => 169,  601 => 310,  591 => 307,  586 => 306,  560 => 141,  553 => 139,  547 => 290,  540 => 285,  531 => 280,  520 => 273,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  482 => 254,  480 => 91,  477 => 90,  471 => 116,  436 => 224,  418 => 210,  412 => 94,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 118,  347 => 143,  339 => 173,  303 => 58,  292 => 72,  275 => 50,  270 => 139,  235 => 124,  210 => 38,  165 => 38,  172 => 62,  153 => 26,  82 => 34,  23 => 18,  170 => 39,  164 => 59,  151 => 56,  135 => 59,  119 => 43,  103 => 40,  641 => 186,  638 => 185,  636 => 330,  628 => 326,  624 => 171,  616 => 169,  608 => 172,  602 => 170,  597 => 169,  594 => 160,  590 => 158,  584 => 164,  580 => 163,  577 => 162,  574 => 302,  566 => 157,  559 => 129,  554 => 153,  533 => 146,  516 => 139,  510 => 106,  503 => 134,  495 => 103,  492 => 102,  485 => 126,  476 => 122,  468 => 115,  462 => 100,  457 => 89,  446 => 113,  443 => 116,  440 => 111,  435 => 101,  428 => 106,  425 => 98,  421 => 112,  397 => 102,  393 => 97,  376 => 93,  363 => 90,  357 => 177,  354 => 79,  345 => 86,  340 => 73,  335 => 81,  316 => 75,  298 => 55,  272 => 113,  260 => 68,  213 => 77,  169 => 27,  159 => 45,  113 => 42,  95 => 37,  79 => 14,  21 => 11,  372 => 94,  370 => 119,  358 => 89,  342 => 109,  336 => 107,  328 => 105,  301 => 127,  297 => 126,  294 => 95,  291 => 93,  268 => 63,  263 => 61,  252 => 61,  246 => 78,  241 => 100,  234 => 59,  205 => 74,  199 => 33,  190 => 55,  184 => 58,  179 => 60,  176 => 59,  168 => 63,  154 => 57,  144 => 44,  407 => 105,  400 => 124,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 86,  360 => 89,  350 => 84,  343 => 82,  338 => 79,  334 => 139,  331 => 70,  324 => 80,  319 => 76,  314 => 65,  309 => 158,  304 => 109,  290 => 106,  286 => 68,  283 => 104,  280 => 67,  273 => 64,  269 => 100,  267 => 48,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 51,  191 => 70,  185 => 66,  156 => 58,  123 => 48,  64 => 27,  20 => 11,  315 => 4,  296 => 70,  282 => 89,  248 => 129,  244 => 42,  240 => 72,  233 => 56,  229 => 122,  225 => 82,  220 => 80,  212 => 54,  209 => 62,  188 => 68,  177 => 40,  174 => 62,  128 => 49,  87 => 35,  74 => 29,  42 => 19,  161 => 26,  145 => 158,  126 => 47,  116 => 36,  99 => 40,  94 => 21,  91 => 23,  86 => 33,  83 => 33,  61 => 26,  73 => 30,  549 => 132,  543 => 161,  538 => 147,  530 => 155,  526 => 153,  522 => 141,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 126,  469 => 132,  466 => 102,  460 => 90,  455 => 118,  450 => 117,  444 => 104,  441 => 103,  437 => 133,  434 => 119,  429 => 99,  423 => 112,  420 => 111,  416 => 110,  413 => 125,  408 => 106,  394 => 101,  390 => 103,  375 => 123,  365 => 82,  362 => 117,  359 => 80,  355 => 124,  348 => 76,  344 => 74,  330 => 89,  327 => 88,  321 => 79,  307 => 76,  302 => 74,  295 => 73,  287 => 148,  279 => 116,  256 => 81,  251 => 71,  239 => 84,  231 => 58,  219 => 67,  201 => 56,  143 => 25,  138 => 49,  134 => 49,  131 => 46,  122 => 44,  117 => 46,  108 => 39,  102 => 40,  92 => 37,  84 => 34,  72 => 30,  48 => 18,  35 => 16,  29 => 15,  69 => 19,  54 => 23,  51 => 22,  31 => 15,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 51,  277 => 66,  274 => 86,  271 => 81,  264 => 98,  261 => 62,  257 => 46,  253 => 77,  249 => 79,  247 => 43,  237 => 99,  204 => 36,  198 => 43,  194 => 49,  150 => 68,  147 => 67,  127 => 47,  112 => 62,  96 => 39,  76 => 13,  71 => 32,  55 => 24,  110 => 40,  89 => 34,  65 => 28,  63 => 30,  58 => 25,  34 => 16,  26 => 14,  24 => 1,  39 => 18,  38 => 18,  57 => 154,  43 => 20,  114 => 44,  109 => 42,  106 => 39,  101 => 61,  85 => 16,  77 => 31,  67 => 31,  47 => 22,  28 => 14,  50 => 23,  227 => 55,  224 => 54,  221 => 53,  207 => 37,  197 => 50,  195 => 42,  192 => 48,  189 => 47,  186 => 67,  181 => 79,  178 => 29,  173 => 58,  162 => 46,  158 => 35,  155 => 53,  152 => 31,  142 => 51,  136 => 22,  133 => 30,  130 => 29,  120 => 45,  105 => 71,  100 => 37,  75 => 32,  60 => 25,  53 => 28,  25 => 12,  19 => 11,  98 => 39,  88 => 36,  80 => 32,  78 => 36,  46 => 14,  44 => 20,  40 => 25,  36 => 17,  32 => 14,  27 => 13,  22 => 12,  232 => 96,  226 => 71,  222 => 56,  215 => 49,  211 => 47,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 46,  183 => 44,  180 => 65,  171 => 38,  166 => 58,  163 => 40,  160 => 56,  157 => 48,  149 => 36,  146 => 35,  140 => 44,  137 => 50,  129 => 48,  124 => 108,  121 => 43,  118 => 64,  115 => 41,  111 => 43,  107 => 42,  104 => 41,  97 => 22,  93 => 45,  90 => 36,  81 => 16,  70 => 33,  66 => 24,  62 => 27,  59 => 29,  56 => 24,  52 => 24,  49 => 23,  45 => 20,  41 => 19,  37 => 16,  33 => 16,  30 => 15,);
    }
}
