<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_599af5929b4f22669f13c4c7bb6d92815985be73b874979300aa1c8e05d5f53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:show_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 49,  925 => 274,  922 => 273,  917 => 268,  913 => 266,  906 => 263,  903 => 262,  900 => 261,  894 => 259,  885 => 258,  882 => 257,  878 => 256,  875 => 255,  868 => 253,  865 => 252,  862 => 251,  855 => 249,  852 => 248,  849 => 247,  842 => 245,  839 => 244,  836 => 243,  829 => 241,  826 => 240,  823 => 239,  820 => 238,  816 => 221,  811 => 218,  804 => 216,  801 => 215,  798 => 214,  784 => 213,  777 => 211,  772 => 208,  765 => 206,  749 => 202,  745 => 201,  725 => 200,  719 => 198,  711 => 195,  708 => 194,  701 => 190,  698 => 189,  692 => 273,  687 => 270,  685 => 238,  680 => 237,  677 => 236,  670 => 233,  667 => 232,  649 => 224,  646 => 223,  643 => 222,  626 => 179,  622 => 174,  606 => 168,  589 => 162,  569 => 156,  528 => 147,  511 => 143,  507 => 142,  478 => 135,  470 => 134,  456 => 131,  453 => 130,  439 => 166,  399 => 119,  391 => 117,  378 => 179,  310 => 78,  265 => 61,  242 => 56,  182 => 68,  12 => 34,  419 => 96,  415 => 124,  402 => 92,  398 => 91,  395 => 90,  386 => 88,  368 => 124,  320 => 67,  317 => 66,  306 => 59,  262 => 47,  254 => 45,  139 => 45,  148 => 47,  696 => 193,  683 => 191,  657 => 183,  654 => 182,  648 => 178,  637 => 192,  631 => 188,  618 => 172,  613 => 171,  599 => 166,  593 => 163,  572 => 156,  568 => 143,  565 => 142,  556 => 140,  544 => 152,  541 => 130,  536 => 113,  523 => 111,  518 => 145,  506 => 105,  501 => 104,  454 => 88,  449 => 144,  447 => 129,  432 => 163,  427 => 129,  382 => 123,  374 => 85,  356 => 86,  346 => 83,  323 => 77,  236 => 60,  228 => 39,  218 => 55,  125 => 39,  68 => 25,  812 => 213,  805 => 210,  802 => 209,  799 => 208,  792 => 205,  779 => 204,  773 => 202,  758 => 200,  755 => 204,  752 => 203,  743 => 193,  740 => 192,  723 => 190,  705 => 189,  699 => 187,  694 => 280,  691 => 185,  688 => 184,  682 => 180,  678 => 190,  675 => 177,  669 => 187,  634 => 189,  629 => 172,  621 => 173,  612 => 170,  609 => 167,  604 => 165,  587 => 157,  582 => 155,  579 => 154,  575 => 157,  567 => 131,  555 => 128,  552 => 127,  545 => 149,  535 => 149,  532 => 145,  525 => 146,  519 => 140,  513 => 138,  493 => 136,  489 => 137,  486 => 134,  484 => 127,  461 => 120,  458 => 119,  424 => 113,  411 => 106,  404 => 104,  389 => 100,  385 => 99,  381 => 87,  364 => 88,  361 => 90,  349 => 84,  333 => 83,  326 => 81,  311 => 64,  305 => 75,  278 => 65,  203 => 45,  353 => 114,  341 => 141,  337 => 72,  325 => 68,  313 => 131,  288 => 70,  266 => 62,  258 => 60,  250 => 103,  216 => 90,  175 => 77,  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 199,  715 => 196,  704 => 191,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 231,  662 => 342,  659 => 228,  652 => 225,  647 => 337,  619 => 321,  615 => 319,  607 => 169,  601 => 310,  591 => 307,  586 => 161,  560 => 141,  553 => 154,  547 => 290,  540 => 285,  531 => 148,  520 => 273,  515 => 144,  508 => 267,  504 => 261,  499 => 141,  482 => 136,  480 => 91,  477 => 90,  471 => 116,  436 => 224,  418 => 210,  412 => 94,  396 => 196,  384 => 182,  379 => 187,  373 => 126,  367 => 118,  347 => 143,  339 => 104,  303 => 58,  292 => 72,  275 => 66,  270 => 139,  235 => 52,  210 => 38,  165 => 62,  172 => 62,  153 => 47,  82 => 25,  23 => 4,  170 => 61,  164 => 59,  151 => 48,  135 => 51,  119 => 42,  103 => 33,  641 => 194,  638 => 185,  636 => 330,  628 => 326,  624 => 171,  616 => 169,  608 => 172,  602 => 167,  597 => 169,  594 => 160,  590 => 158,  584 => 164,  580 => 160,  577 => 162,  574 => 302,  566 => 157,  559 => 129,  554 => 153,  533 => 146,  516 => 139,  510 => 106,  503 => 134,  495 => 140,  492 => 139,  485 => 126,  476 => 122,  468 => 115,  462 => 100,  457 => 89,  446 => 113,  443 => 116,  440 => 111,  435 => 164,  428 => 106,  425 => 98,  421 => 112,  397 => 102,  393 => 97,  376 => 93,  363 => 117,  357 => 177,  354 => 79,  345 => 86,  340 => 73,  335 => 81,  316 => 75,  298 => 74,  272 => 113,  260 => 68,  213 => 77,  169 => 188,  159 => 58,  113 => 41,  95 => 89,  79 => 28,  21 => 11,  372 => 94,  370 => 125,  358 => 89,  342 => 105,  336 => 107,  328 => 101,  301 => 75,  297 => 126,  294 => 95,  291 => 93,  268 => 63,  263 => 61,  252 => 61,  246 => 78,  241 => 100,  234 => 59,  205 => 74,  199 => 33,  190 => 30,  184 => 28,  179 => 60,  176 => 64,  168 => 63,  154 => 49,  144 => 44,  407 => 120,  400 => 124,  392 => 135,  387 => 134,  383 => 132,  380 => 180,  377 => 86,  360 => 89,  350 => 84,  343 => 82,  338 => 79,  334 => 139,  331 => 70,  324 => 80,  319 => 76,  314 => 79,  309 => 158,  304 => 109,  290 => 106,  286 => 68,  283 => 68,  280 => 67,  273 => 64,  269 => 63,  267 => 48,  259 => 97,  245 => 57,  230 => 81,  223 => 78,  200 => 51,  191 => 70,  185 => 55,  156 => 101,  123 => 43,  64 => 16,  20 => 1,  315 => 4,  296 => 70,  282 => 89,  248 => 129,  244 => 42,  240 => 72,  233 => 56,  229 => 122,  225 => 82,  220 => 80,  212 => 38,  209 => 37,  188 => 69,  177 => 40,  174 => 51,  128 => 95,  87 => 26,  74 => 56,  42 => 13,  161 => 60,  145 => 46,  126 => 47,  116 => 40,  99 => 37,  94 => 31,  91 => 33,  86 => 24,  83 => 29,  61 => 19,  73 => 31,  549 => 153,  543 => 161,  538 => 150,  530 => 155,  526 => 153,  522 => 141,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 126,  469 => 132,  466 => 133,  460 => 132,  455 => 118,  450 => 117,  444 => 104,  441 => 175,  437 => 133,  434 => 119,  429 => 130,  423 => 127,  420 => 126,  416 => 110,  413 => 125,  408 => 106,  394 => 118,  390 => 103,  375 => 178,  365 => 123,  362 => 117,  359 => 80,  355 => 115,  348 => 76,  344 => 74,  330 => 89,  327 => 88,  321 => 80,  307 => 77,  302 => 74,  295 => 73,  287 => 148,  279 => 67,  256 => 81,  251 => 71,  239 => 84,  231 => 51,  219 => 67,  201 => 56,  143 => 25,  138 => 52,  134 => 43,  131 => 52,  122 => 44,  117 => 37,  108 => 28,  102 => 38,  92 => 25,  84 => 35,  72 => 27,  48 => 11,  35 => 6,  29 => 4,  69 => 23,  54 => 13,  51 => 18,  31 => 4,  312 => 100,  308 => 94,  293 => 72,  285 => 90,  281 => 51,  277 => 66,  274 => 86,  271 => 81,  264 => 98,  261 => 62,  257 => 46,  253 => 77,  249 => 59,  247 => 43,  237 => 99,  204 => 35,  198 => 72,  194 => 49,  150 => 46,  147 => 45,  127 => 45,  112 => 39,  96 => 27,  76 => 22,  71 => 20,  55 => 10,  110 => 30,  89 => 31,  65 => 24,  63 => 28,  58 => 14,  34 => 7,  26 => 12,  24 => 7,  39 => 12,  38 => 5,  57 => 18,  43 => 17,  114 => 36,  109 => 23,  106 => 34,  101 => 91,  85 => 86,  77 => 24,  67 => 26,  47 => 14,  28 => 3,  50 => 15,  227 => 49,  224 => 54,  221 => 53,  207 => 37,  197 => 50,  195 => 32,  192 => 71,  189 => 47,  186 => 67,  181 => 79,  178 => 22,  173 => 53,  162 => 46,  158 => 47,  155 => 59,  152 => 58,  142 => 43,  136 => 42,  133 => 47,  130 => 40,  120 => 38,  105 => 27,  100 => 27,  75 => 32,  60 => 25,  53 => 19,  25 => 12,  19 => 2,  98 => 29,  88 => 29,  80 => 84,  78 => 29,  46 => 21,  44 => 10,  40 => 8,  36 => 8,  32 => 21,  27 => 5,  22 => 3,  232 => 96,  226 => 71,  222 => 56,  215 => 49,  211 => 47,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 29,  183 => 44,  180 => 52,  171 => 281,  166 => 52,  163 => 48,  160 => 103,  157 => 49,  149 => 46,  146 => 45,  140 => 44,  137 => 48,  129 => 40,  124 => 93,  121 => 38,  118 => 37,  115 => 36,  111 => 35,  107 => 39,  104 => 33,  97 => 31,  93 => 30,  90 => 15,  81 => 21,  70 => 20,  66 => 22,  62 => 23,  59 => 18,  56 => 23,  52 => 12,  49 => 17,  45 => 20,  41 => 9,  37 => 7,  33 => 4,  30 => 2,);
    }
}
