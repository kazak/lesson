<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_c518488ec82d311078c798aa66fea401e6072a6dce8fda693fd8b269a81641fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        if (isset($context["revisions"])) { $_revisions_ = $context["revisions"]; } else { $_revisions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_revisions_);
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            if (isset($context["revision"])) { $_revision_ = $context["revision"]; } else { $_revision_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_revision_, "revision"), "rev"), "html", null, true);
            echo " - ";
            if (isset($context["revision"])) { $_revision_ = $context["revision"]; } else { $_revision_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_revision_, "revision"), "username"), "html", null, true);
            echo " - ";
            if (isset($context["revision"])) { $_revision_ = $context["revision"]; } else { $_revision_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_revision_, "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            if (isset($context["revision"])) { $_revision_ = $context["revision"]; } else { $_revision_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_revision_, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                if (isset($context["changedEntity"])) { $_changedEntity_ = $context["changedEntity"]; } else { $_changedEntity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_changedEntity_, "entity"), "html", null, true);
                echo " / ";
                if (isset($context["changedEntity"])) { $_changedEntity_ = $context["changedEntity"]; } else { $_changedEntity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_changedEntity_, "revisionType"), "html", null, true);
                echo " / ";
                if (isset($context["changedEntity"])) { $_changedEntity_ = $context["changedEntity"]; } else { $_changedEntity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_changedEntity_, "className"), "html", null, true);
                echo " - ";
                if (isset($context["changedEntity"])) { $_changedEntity_ = $context["changedEntity"]; } else { $_changedEntity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_changedEntity_, "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 377,  715 => 374,  704 => 367,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 345,  662 => 342,  659 => 341,  652 => 338,  647 => 337,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  560 => 295,  553 => 292,  547 => 290,  540 => 285,  531 => 280,  520 => 273,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  482 => 254,  480 => 250,  477 => 249,  471 => 247,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  347 => 174,  339 => 173,  303 => 156,  292 => 149,  275 => 140,  270 => 139,  235 => 124,  210 => 111,  165 => 90,  172 => 62,  153 => 57,  82 => 57,  23 => 18,  170 => 61,  164 => 59,  151 => 56,  135 => 75,  119 => 46,  103 => 40,  641 => 186,  638 => 185,  636 => 330,  628 => 326,  624 => 178,  616 => 175,  608 => 172,  602 => 170,  597 => 169,  594 => 168,  590 => 167,  584 => 166,  580 => 304,  577 => 163,  574 => 302,  566 => 157,  559 => 154,  554 => 153,  533 => 146,  516 => 139,  510 => 137,  503 => 134,  495 => 258,  492 => 129,  485 => 126,  476 => 122,  468 => 119,  462 => 242,  457 => 116,  446 => 113,  443 => 112,  440 => 111,  435 => 108,  428 => 106,  425 => 105,  421 => 103,  397 => 99,  393 => 97,  376 => 93,  363 => 90,  357 => 177,  354 => 87,  345 => 83,  340 => 82,  335 => 81,  316 => 78,  298 => 77,  272 => 70,  260 => 68,  213 => 77,  169 => 48,  159 => 45,  113 => 44,  95 => 30,  79 => 31,  21 => 11,  372 => 122,  370 => 92,  358 => 115,  342 => 109,  336 => 107,  328 => 105,  301 => 98,  297 => 96,  294 => 95,  291 => 93,  268 => 84,  263 => 136,  252 => 67,  246 => 78,  241 => 126,  234 => 87,  205 => 74,  199 => 72,  190 => 55,  184 => 58,  179 => 57,  176 => 93,  168 => 52,  154 => 57,  144 => 44,  407 => 102,  400 => 100,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 130,  360 => 89,  350 => 84,  343 => 120,  338 => 119,  334 => 117,  331 => 169,  324 => 104,  319 => 103,  314 => 111,  309 => 158,  304 => 109,  290 => 106,  286 => 105,  283 => 104,  280 => 103,  273 => 101,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 69,  191 => 70,  185 => 66,  156 => 58,  123 => 47,  64 => 23,  20 => 11,  315 => 4,  296 => 108,  282 => 89,  248 => 129,  244 => 73,  240 => 72,  233 => 82,  229 => 122,  225 => 82,  220 => 80,  212 => 77,  209 => 62,  188 => 68,  177 => 47,  174 => 62,  128 => 36,  87 => 29,  74 => 50,  42 => 13,  161 => 50,  145 => 54,  126 => 48,  116 => 36,  99 => 34,  94 => 30,  91 => 20,  86 => 27,  83 => 24,  61 => 21,  73 => 29,  549 => 152,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 234,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 97,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 166,  307 => 99,  302 => 84,  295 => 81,  287 => 148,  279 => 78,  256 => 81,  251 => 71,  239 => 84,  231 => 65,  219 => 67,  201 => 56,  143 => 76,  138 => 44,  134 => 32,  131 => 49,  122 => 37,  117 => 36,  108 => 34,  102 => 33,  92 => 25,  84 => 28,  72 => 19,  48 => 18,  35 => 16,  29 => 15,  69 => 23,  54 => 38,  51 => 19,  31 => 14,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 88,  277 => 102,  274 => 86,  271 => 81,  264 => 98,  261 => 81,  257 => 134,  253 => 77,  249 => 79,  247 => 70,  237 => 71,  204 => 74,  198 => 72,  194 => 64,  150 => 57,  147 => 45,  127 => 71,  112 => 27,  96 => 60,  76 => 30,  71 => 25,  55 => 21,  110 => 43,  89 => 32,  65 => 22,  63 => 13,  58 => 20,  34 => 16,  26 => 14,  24 => 12,  39 => 32,  38 => 17,  57 => 20,  43 => 18,  114 => 39,  109 => 25,  106 => 37,  101 => 61,  85 => 53,  77 => 56,  67 => 24,  47 => 35,  28 => 13,  50 => 19,  227 => 70,  224 => 91,  221 => 80,  207 => 71,  197 => 57,  195 => 71,  192 => 70,  189 => 61,  186 => 67,  181 => 64,  178 => 64,  173 => 49,  162 => 46,  158 => 58,  155 => 55,  152 => 81,  142 => 55,  136 => 44,  133 => 41,  130 => 40,  120 => 37,  105 => 26,  100 => 27,  75 => 26,  60 => 40,  53 => 19,  25 => 13,  19 => 11,  98 => 22,  88 => 17,  80 => 52,  78 => 24,  46 => 19,  44 => 7,  40 => 16,  36 => 16,  32 => 22,  27 => 8,  22 => 12,  232 => 72,  226 => 71,  222 => 119,  215 => 68,  211 => 84,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 100,  183 => 53,  180 => 65,  171 => 92,  166 => 60,  163 => 40,  160 => 59,  157 => 48,  149 => 36,  146 => 35,  140 => 43,  137 => 51,  129 => 48,  124 => 34,  121 => 69,  118 => 38,  115 => 67,  111 => 32,  107 => 63,  104 => 23,  97 => 39,  93 => 64,  90 => 36,  81 => 25,  70 => 25,  66 => 22,  62 => 49,  59 => 22,  56 => 20,  52 => 9,  49 => 9,  45 => 33,  41 => 16,  37 => 17,  33 => 15,  30 => 9,);
    }
}
