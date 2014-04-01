<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_66e0579a89c69a193b91ea686959a7bcc992e7c0f2a0812d9e1ecb64878cdd9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if (isset($context["forceStyle"])) { $_forceStyle_ = $context["forceStyle"]; } else { $_forceStyle_ = null; }
        if ($_forceStyle_) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if (isset($context["forceStyle"])) { $_forceStyle_ = $context["forceStyle"]; } else { $_forceStyle_ = null; }
        if ($_forceStyle_) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 4,  296 => 1,  282 => 83,  248 => 74,  244 => 73,  240 => 72,  233 => 68,  229 => 66,  225 => 65,  220 => 64,  212 => 60,  209 => 59,  188 => 51,  177 => 47,  174 => 45,  128 => 36,  87 => 17,  74 => 11,  42 => 19,  161 => 59,  145 => 57,  126 => 50,  116 => 45,  99 => 39,  94 => 21,  91 => 20,  86 => 34,  83 => 27,  61 => 23,  73 => 29,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 2,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 56,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 40,  92 => 25,  84 => 16,  72 => 10,  48 => 18,  35 => 15,  29 => 15,  69 => 9,  54 => 22,  51 => 21,  31 => 14,  312 => 3,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 81,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 71,  204 => 57,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 28,  96 => 25,  76 => 17,  71 => 17,  55 => 23,  110 => 43,  89 => 16,  65 => 83,  63 => 13,  58 => 10,  34 => 15,  26 => 14,  24 => 4,  39 => 7,  38 => 18,  57 => 80,  43 => 18,  114 => 22,  109 => 25,  106 => 24,  101 => 19,  85 => 22,  77 => 12,  67 => 27,  47 => 20,  28 => 4,  50 => 44,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 52,  130 => 42,  120 => 47,  105 => 41,  100 => 27,  75 => 24,  60 => 81,  53 => 19,  25 => 2,  19 => 1,  98 => 22,  88 => 17,  80 => 24,  78 => 31,  46 => 19,  44 => 9,  40 => 20,  36 => 16,  32 => 16,  27 => 8,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 61,  211 => 84,  208 => 70,  202 => 68,  196 => 54,  193 => 53,  187 => 62,  183 => 49,  180 => 48,  171 => 44,  166 => 41,  163 => 40,  160 => 49,  157 => 48,  149 => 42,  146 => 37,  140 => 46,  137 => 53,  129 => 51,  124 => 34,  121 => 33,  118 => 31,  115 => 30,  111 => 32,  107 => 28,  104 => 23,  97 => 28,  93 => 18,  90 => 21,  81 => 15,  70 => 28,  66 => 23,  62 => 82,  59 => 24,  56 => 23,  52 => 22,  49 => 9,  45 => 18,  41 => 17,  37 => 17,  33 => 4,  30 => 9,);
    }
}
