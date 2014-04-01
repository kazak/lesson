<?php

/* SonataBlockBundle:Profiler:block.html.twig */
class __TwigTemplate_8aa9aad65b0365f4967591fd549c60a40bd355b4b2c69aeecc1972bb467d8f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">
            <a href=\"";
        // line 6
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $_token_, "panel" => $_name_)), "html", null, true);
        echo "\">
                ";
        // line 7
        echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                <span class=\"sf-toolbar-status\">";
        // line 8
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span> blocks
                ";
        // line 9
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_collector_, "events")) > 0)) {
            echo "<strong>*</strong>";
        }
        // line 10
        echo "            </a>
        </div>
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 15
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_collector_, "realBlocks")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 19
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_collector_, "containers")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total Blocks</b>
                <span>";
        // line 23
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <hr />
                <b>Events</b>
                <span>";
        // line 28
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_collector_, "events")), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        // line 35
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\" /></span>
        <strong>Blocks";
        // line 37
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_collector_, "events")) > 0)) {
            echo "<strong>*</strong>";
        }
        echo "</strong>
        <span class=\"count\">
            <span>";
        // line 39
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 44
    public function block_panel($context, array $blocks = array())
    {
        // line 45
        echo "    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        ";
        // line 54
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "events"));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 55
            echo "            <tr>
                <td>";
            // line 56
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "template_code", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "event_name", array(), "array"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 59
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_event_, "blocks", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 60
                echo "                        ";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_type_, 1), "html", null, true);
                echo " (id:";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_type_, 0), "html", null, true);
                echo ")
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 62
                echo "                        no block returned
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </td>
                <td>
                    ";
            // line 66
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_event_, "listeners", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 67
                echo "                        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo twig_escape_filter($this->env, $_listener_, "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                        no listener registered
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </table>

    <h2>Real Blocks</h2>
    ";
        // line 77
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["blocks"] = $this->getAttribute($_collector_, "realBlocks");
        // line 78
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    <h2>Containers Blocks</h2>
    ";
        // line 81
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["blocks"] = $this->getAttribute($_collector_, "containers");
        // line 82
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    ";
        // line 84
        $this->displayBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 87
    public function block_table($context, array $blocks = array())
    {
        // line 88
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 97
        if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blocks_);
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 98
            echo "
            ";
            // line 99
            $context["rowspan"] = 1;
            // line 100
            echo "            ";
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if ($this->getAttribute($this->getAttribute($_block_, "cache"), "handler")) {
                // line 101
                echo "                ";
                if (isset($context["rowspan"])) { $_rowspan_ = $context["rowspan"]; } else { $_rowspan_ = null; }
                $context["rowspan"] = ($_rowspan_ + 1);
                // line 102
                echo "            ";
            }
            // line 103
            echo "
            ";
            // line 104
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "assets"), "js")) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "assets"), "css")) > 0))) {
                // line 105
                echo "                ";
                if (isset($context["rowspan"])) { $_rowspan_ = $context["rowspan"]; } else { $_rowspan_ = null; }
                $context["rowspan"] = ($_rowspan_ + 1);
                // line 106
                echo "            ";
            }
            // line 107
            echo "            <tr>
                <th style=\"vertical-align: top\" rowspan=\"";
            // line 108
            if (isset($context["rowspan"])) { $_rowspan_ = $context["rowspan"]; } else { $_rowspan_ = null; }
            echo twig_escape_filter($this->env, $_rowspan_, "html", null, true);
            echo "\">";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "</th>
                <td>";
            // line 109
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "type"), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($_block_, "memory_end") - $this->getAttribute($_block_, "memory_start")) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 112
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($_block_, "memory_peak") / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 113
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_block_, "duration"), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 116
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if ($this->getAttribute($this->getAttribute($_block_, "cache"), "handler")) {
                // line 117
                echo "                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>";
                // line 119
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($_block_, "cache"), "keys")), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 120
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($_block_, "cache"), "contextual_keys")), "html", null, true);
                echo "</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: ";
                // line 123
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "cache"), "ttl"), "html", null, true);
                echo "s. <br />
                        Lifetime: ";
                // line 124
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "cache"), "lifetime"), "html", null, true);
                echo "s. <br />
                        Backend: ";
                // line 125
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "cache"), "handler"), "html", null, true);
                echo " <br />
                        Loading from cache: ";
                // line 126
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                if ($this->getAttribute($this->getAttribute($_block_, "cache"), "from_cache")) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                echo " <br />
                    </td>
                </tr>
            ";
            }
            // line 130
            echo "
            ";
            // line 131
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "assets"), "js")) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "assets"), "css")) > 0))) {
                // line 132
                echo "                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>";
                // line 134
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($_block_, "assets"), "js")), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 135
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($_block_, "assets"), "css")), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 139
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Profiler:block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 141,  400 => 139,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 130,  360 => 125,  350 => 123,  343 => 120,  338 => 119,  334 => 117,  331 => 116,  324 => 113,  319 => 112,  314 => 111,  309 => 110,  304 => 109,  290 => 106,  286 => 105,  283 => 104,  280 => 103,  273 => 101,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 69,  191 => 67,  185 => 66,  156 => 59,  123 => 44,  64 => 15,  20 => 11,  315 => 4,  296 => 108,  282 => 83,  248 => 88,  244 => 73,  240 => 72,  233 => 82,  229 => 66,  225 => 65,  220 => 77,  212 => 60,  209 => 59,  188 => 51,  177 => 47,  174 => 62,  128 => 36,  87 => 17,  74 => 11,  42 => 19,  161 => 59,  145 => 56,  126 => 45,  116 => 45,  99 => 34,  94 => 21,  91 => 20,  86 => 34,  83 => 27,  61 => 23,  73 => 29,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 126,  362 => 98,  359 => 97,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 2,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 84,  231 => 68,  219 => 67,  201 => 56,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 35,  92 => 25,  84 => 16,  72 => 19,  48 => 18,  35 => 15,  29 => 15,  69 => 9,  54 => 22,  51 => 21,  31 => 3,  312 => 3,  308 => 94,  293 => 107,  285 => 90,  281 => 88,  277 => 102,  274 => 85,  271 => 81,  264 => 98,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 71,  204 => 57,  198 => 65,  194 => 64,  150 => 57,  147 => 51,  127 => 41,  112 => 28,  96 => 25,  76 => 17,  71 => 17,  55 => 23,  110 => 43,  89 => 28,  65 => 83,  63 => 13,  58 => 10,  34 => 4,  26 => 14,  24 => 4,  39 => 7,  38 => 6,  57 => 10,  43 => 18,  114 => 39,  109 => 25,  106 => 37,  101 => 19,  85 => 22,  77 => 12,  67 => 27,  47 => 8,  28 => 13,  50 => 44,  227 => 92,  224 => 91,  221 => 90,  207 => 71,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 64,  178 => 61,  173 => 58,  162 => 60,  158 => 56,  155 => 55,  152 => 55,  142 => 55,  136 => 44,  133 => 52,  130 => 42,  120 => 47,  105 => 41,  100 => 27,  75 => 24,  60 => 81,  53 => 19,  25 => 2,  19 => 1,  98 => 22,  88 => 17,  80 => 23,  78 => 31,  46 => 19,  44 => 7,  40 => 20,  36 => 16,  32 => 16,  27 => 8,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 74,  211 => 84,  208 => 70,  202 => 68,  196 => 54,  193 => 53,  187 => 62,  183 => 49,  180 => 48,  171 => 44,  166 => 41,  163 => 40,  160 => 49,  157 => 48,  149 => 42,  146 => 37,  140 => 46,  137 => 54,  129 => 51,  124 => 34,  121 => 33,  118 => 31,  115 => 30,  111 => 32,  107 => 28,  104 => 23,  97 => 28,  93 => 18,  90 => 21,  81 => 15,  70 => 28,  66 => 23,  62 => 82,  59 => 24,  56 => 23,  52 => 9,  49 => 9,  45 => 18,  41 => 17,  37 => 17,  33 => 12,  30 => 9,);
    }
}
