<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_1e02f4968a23f4f5e7fb1bb9cc2a01f4497190b5842ca8eacdb4988822f5bdb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_form($context, array $blocks = array())
    {
        // line 24
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 25
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute($_admin_, "id", array(0 => $_object_), "method"), "uniqid" => $this->getAttribute($_admin_, "uniqid"), "subclass" => $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 27
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((!$this->getAttribute($_admin_pool_, "getOption", array(0 => "html5_validate"), "method"))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 28
        echo "              >
        ";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars"), "errors")) > 0)) {
            // line 30
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 31
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
            </div>
        ";
        }
        // line 34
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 39
        if (isset($context["permissions"])) { $_permissions_ = $context["permissions"]; } else { $_permissions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_permissions_);
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 40
            echo "                    <th>";
            if (isset($context["permission"])) { $_permission_ = $context["permission"]; } else { $_permission_ = null; }
            echo twig_escape_filter($this->env, $_permission_, "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 45
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $_user_, "html", null, true);
            echo "</td>
                    ";
            // line 48
            if (isset($context["permissions"])) { $_permissions_ = $context["permissions"]; } else { $_permissions_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_permissions_);
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 49
                echo "                    <td>";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["permission"])) { $_permission_ = $context["permission"]; } else { $_permission_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, ($this->getAttribute($_user_, "id") . $_permission_), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>

        ";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "

        ";
        // line 58
        $this->displayBlock('formactions', $context, $blocks);
        // line 63
        echo "    </form>
";
    }

    // line 58
    public function block_formactions($context, array $blocks = array())
    {
        // line 59
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 51,  696 => 193,  683 => 191,  657 => 183,  654 => 182,  648 => 178,  637 => 175,  631 => 174,  618 => 172,  613 => 171,  599 => 167,  593 => 165,  572 => 156,  568 => 143,  565 => 142,  556 => 140,  544 => 131,  541 => 130,  536 => 113,  523 => 111,  518 => 110,  506 => 105,  501 => 104,  454 => 88,  449 => 144,  447 => 139,  432 => 129,  427 => 126,  382 => 123,  374 => 121,  356 => 86,  346 => 83,  323 => 77,  236 => 60,  228 => 57,  218 => 55,  125 => 150,  68 => 20,  812 => 213,  805 => 210,  802 => 209,  799 => 208,  792 => 205,  779 => 204,  773 => 202,  758 => 200,  755 => 199,  752 => 198,  743 => 193,  740 => 192,  723 => 190,  705 => 189,  699 => 187,  694 => 186,  691 => 185,  688 => 184,  682 => 180,  678 => 190,  675 => 177,  669 => 187,  634 => 173,  629 => 172,  621 => 173,  612 => 168,  609 => 167,  604 => 165,  587 => 157,  582 => 155,  579 => 154,  575 => 133,  567 => 131,  555 => 128,  552 => 127,  545 => 149,  535 => 146,  532 => 145,  525 => 142,  519 => 140,  513 => 138,  493 => 136,  489 => 135,  486 => 134,  484 => 127,  461 => 120,  458 => 119,  424 => 113,  411 => 106,  404 => 104,  389 => 100,  385 => 99,  381 => 98,  364 => 88,  361 => 90,  349 => 84,  333 => 83,  326 => 81,  311 => 77,  305 => 75,  278 => 65,  203 => 45,  353 => 145,  341 => 141,  337 => 140,  325 => 135,  313 => 131,  288 => 121,  266 => 62,  258 => 58,  250 => 103,  216 => 90,  175 => 77,  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 377,  715 => 374,  704 => 367,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 185,  662 => 342,  659 => 341,  652 => 174,  647 => 337,  619 => 321,  615 => 319,  607 => 169,  601 => 310,  591 => 307,  586 => 306,  560 => 141,  553 => 139,  547 => 290,  540 => 285,  531 => 280,  520 => 273,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  482 => 254,  480 => 91,  477 => 90,  471 => 116,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 118,  347 => 143,  339 => 173,  303 => 156,  292 => 72,  275 => 140,  270 => 139,  235 => 124,  210 => 88,  165 => 38,  172 => 62,  153 => 26,  82 => 57,  23 => 18,  170 => 39,  164 => 59,  151 => 56,  135 => 59,  119 => 46,  103 => 40,  641 => 186,  638 => 185,  636 => 330,  628 => 326,  624 => 171,  616 => 169,  608 => 172,  602 => 170,  597 => 169,  594 => 160,  590 => 158,  584 => 164,  580 => 163,  577 => 162,  574 => 302,  566 => 157,  559 => 129,  554 => 153,  533 => 146,  516 => 139,  510 => 106,  503 => 134,  495 => 103,  492 => 102,  485 => 126,  476 => 122,  468 => 115,  462 => 100,  457 => 89,  446 => 113,  443 => 116,  440 => 111,  435 => 130,  428 => 106,  425 => 105,  421 => 112,  397 => 102,  393 => 97,  376 => 93,  363 => 90,  357 => 177,  354 => 87,  345 => 86,  340 => 82,  335 => 81,  316 => 75,  298 => 74,  272 => 113,  260 => 68,  213 => 77,  169 => 76,  159 => 45,  113 => 42,  95 => 33,  79 => 14,  21 => 11,  372 => 94,  370 => 119,  358 => 89,  342 => 109,  336 => 107,  328 => 105,  301 => 127,  297 => 126,  294 => 95,  291 => 93,  268 => 63,  263 => 61,  252 => 61,  246 => 78,  241 => 100,  234 => 59,  205 => 74,  199 => 72,  190 => 55,  184 => 58,  179 => 60,  176 => 59,  168 => 63,  154 => 57,  144 => 44,  407 => 105,  400 => 124,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 122,  360 => 89,  350 => 84,  343 => 82,  338 => 79,  334 => 139,  331 => 169,  324 => 80,  319 => 76,  314 => 111,  309 => 158,  304 => 109,  290 => 106,  286 => 68,  283 => 104,  280 => 67,  273 => 64,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 51,  191 => 70,  185 => 66,  156 => 58,  123 => 46,  64 => 183,  20 => 11,  315 => 4,  296 => 70,  282 => 89,  248 => 129,  244 => 101,  240 => 72,  233 => 56,  229 => 122,  225 => 82,  220 => 80,  212 => 54,  209 => 62,  188 => 68,  177 => 40,  174 => 62,  128 => 151,  87 => 43,  74 => 27,  42 => 19,  161 => 36,  145 => 158,  126 => 47,  116 => 36,  99 => 47,  94 => 38,  91 => 31,  86 => 27,  83 => 24,  61 => 21,  73 => 24,  549 => 132,  543 => 161,  538 => 147,  530 => 155,  526 => 153,  522 => 141,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 126,  469 => 132,  466 => 102,  460 => 90,  455 => 118,  450 => 117,  444 => 122,  441 => 135,  437 => 133,  434 => 119,  429 => 114,  423 => 112,  420 => 111,  416 => 110,  413 => 125,  408 => 106,  394 => 101,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 87,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 79,  307 => 76,  302 => 74,  295 => 73,  287 => 148,  279 => 116,  256 => 81,  251 => 71,  239 => 84,  231 => 58,  219 => 67,  201 => 56,  143 => 61,  138 => 44,  134 => 32,  131 => 48,  122 => 37,  117 => 25,  108 => 72,  102 => 33,  92 => 18,  84 => 30,  72 => 28,  48 => 18,  35 => 16,  29 => 15,  69 => 197,  54 => 153,  51 => 19,  31 => 15,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 66,  277 => 66,  274 => 86,  271 => 81,  264 => 98,  261 => 62,  257 => 134,  253 => 77,  249 => 79,  247 => 70,  237 => 99,  204 => 52,  198 => 43,  194 => 49,  150 => 68,  147 => 67,  127 => 28,  112 => 27,  96 => 60,  76 => 13,  71 => 25,  55 => 21,  110 => 81,  89 => 17,  65 => 22,  63 => 23,  58 => 20,  34 => 16,  26 => 14,  24 => 11,  39 => 18,  38 => 24,  57 => 154,  43 => 20,  114 => 24,  109 => 25,  106 => 37,  101 => 61,  85 => 16,  77 => 28,  67 => 27,  47 => 17,  28 => 14,  50 => 23,  227 => 55,  224 => 54,  221 => 53,  207 => 53,  197 => 50,  195 => 42,  192 => 48,  189 => 47,  186 => 67,  181 => 79,  178 => 64,  173 => 58,  162 => 46,  158 => 35,  155 => 53,  152 => 31,  142 => 157,  136 => 49,  133 => 30,  130 => 29,  120 => 26,  105 => 71,  100 => 34,  75 => 29,  60 => 22,  53 => 24,  25 => 13,  19 => 2,  98 => 39,  88 => 34,  80 => 29,  78 => 30,  46 => 14,  44 => 17,  40 => 25,  36 => 17,  32 => 16,  27 => 12,  22 => 7,  232 => 96,  226 => 71,  222 => 56,  215 => 49,  211 => 47,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 46,  183 => 44,  180 => 65,  171 => 38,  166 => 58,  163 => 40,  160 => 56,  157 => 48,  149 => 36,  146 => 35,  140 => 156,  137 => 155,  129 => 48,  124 => 27,  121 => 148,  118 => 45,  115 => 146,  111 => 23,  107 => 22,  104 => 23,  97 => 39,  93 => 45,  90 => 36,  81 => 31,  70 => 33,  66 => 24,  62 => 165,  59 => 164,  56 => 25,  52 => 20,  49 => 15,  45 => 20,  41 => 17,  37 => 16,  33 => 16,  30 => 9,);
    }
}
