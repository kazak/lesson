<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig */
class __TwigTemplate_c39028ea458ec18feb35ac1b0e9017f6be29f4dec5f462107ba281efbbc8334e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "hasassociationadmin")) {
            // line 12
            echo "    <div id=\"field_container_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 13
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" >
            ";
            // line 14
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (($this->getAttribute($_sonata_admin_, "edit") == "inline")) {
                // line 15
                echo "                ";
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (($this->getAttribute($_sonata_admin_, "inline") == "table")) {
                    // line 16
                    echo "                    ";
                    if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($_form_, "children")) > 0)) {
                        // line 17
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 20
                        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), 0, array(), "array"), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 21
                            echo "                                        ";
                            if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                            if (($_field_name_ == "_delete")) {
                                // line 22
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 24
                                echo "                                            <th ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo (($this->getAttribute($this->getAttribute($_nested_field_, "vars"), "required", array(), "array")) ? ("class=\"required\"") : (""));
                                echo ">
                                                ";
                                // line 25
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_nested_field_, "vars"), "sonata_admin", array(), "array"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($_nested_field_, "vars"), "label")), "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 28
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 32
                        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 33
                            echo "                                    <tr>
                                        ";
                            // line 34
                            if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_nested_group_field_, "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 35
                                echo "                                            <td class=\"sonata-ba-td-";
                                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                                echo "-";
                                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                                echo twig_escape_filter($this->env, $_field_name_, "html", null, true);
                                echo " control-group";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_nested_field_, "vars"), "errors")) > 0)) {
                                    echo " error";
                                }
                                echo "\">
                                                ";
                                // line 36
                                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                                if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "hasformfielddescriptions", array(0 => $_field_name_), "method", true, true)) {
                                    // line 37
                                    echo "                                                    ";
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'widget');
                                    echo "

                                                    ";
                                    // line 39
                                    if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                                    $context["dummy"] = $this->getAttribute($_nested_group_field_, "setrendered");
                                    // line 40
                                    echo "                                                ";
                                } else {
                                    // line 41
                                    echo "                                                    ";
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'widget');
                                    echo "
                                                ";
                                }
                                // line 43
                                echo "                                                ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_nested_field_, "vars"), "errors")) > 0)) {
                                    // line 44
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 45
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 48
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 50
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 55
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($_form_, "children")) > 0)) {
                    // line 56
                    echo "                    <div>
                        ";
                    // line 57
                    if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "children"));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 58
                        echo "                            ";
                        if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_nested_group_field_, "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 59
                            echo "                                ";
                            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                            if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "hasformfielddescriptions", array(0 => $_field_name_), "method", true, true)) {
                                // line 60
                                echo "                                    ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'row', array("inline" => "natural", "edit" => "inline"));
                                // line 63
                                echo "
                                    ";
                                // line 64
                                if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                                $context["dummy"] = $this->getAttribute($_nested_group_field_, "setrendered");
                                // line 65
                                echo "                                ";
                            } else {
                                // line 66
                                echo "                                    ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'row');
                                echo "
                                ";
                            }
                            // line 68
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                    </div>
                ";
                }
                // line 72
                echo "            ";
            } else {
                // line 73
                echo "                ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
                echo "
            ";
            }
            // line 75
            echo "
        </span>

        ";
            // line 78
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (($this->getAttribute($_sonata_admin_, "edit") == "inline")) {
                // line 79
                echo "
            ";
                // line 80
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $_btn_add_)) {
                    // line 81
                    echo "                <span id=\"field_actions_";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 83
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 84
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 86
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 89
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 93
                echo "
            ";
                // line 95
                echo "            ";
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 96
                echo "
        ";
            } else {
                // line 98
                echo "            <div id=\"field_container_";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" class=\"field-container\">
                <span id=\"field_widget_";
                // line 99
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" >
                    ";
                // line 100
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
                echo "
                </span>

                <span id=\"field_actions_";
                // line 103
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" class=\"field-actions\">
                    ";
                // line 104
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $_btn_add_)) {
                    // line 105
                    echo "                        <a
                            href=\"";
                    // line 106
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                            onclick=\"return start_field_dialog_form_add_";
                    // line 107
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "(this);\"
                            class=\"btn btn-small sonata-ba-action\"
                            title=\"";
                    // line 109
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "\"
                            >
                            <i class=\"icon-plus\"></i>
                            ";
                    // line 112
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 115
                echo "                </span>

                <div style=\"display: none\" id=\"field_dialog_";
                // line 117
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\">
                </div>
            </div>

            ";
                // line 121
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 122
                echo "        ";
            }
            // line 123
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 122,  370 => 121,  358 => 115,  342 => 109,  336 => 107,  328 => 105,  301 => 98,  297 => 96,  294 => 95,  291 => 93,  268 => 84,  263 => 83,  252 => 80,  246 => 78,  241 => 75,  234 => 73,  205 => 65,  199 => 63,  190 => 59,  184 => 58,  179 => 57,  176 => 56,  168 => 52,  154 => 48,  144 => 44,  407 => 141,  400 => 139,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 130,  360 => 125,  350 => 112,  343 => 120,  338 => 119,  334 => 117,  331 => 106,  324 => 104,  319 => 103,  314 => 111,  309 => 110,  304 => 109,  290 => 106,  286 => 105,  283 => 104,  280 => 103,  273 => 101,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 69,  191 => 67,  185 => 66,  156 => 59,  123 => 44,  64 => 15,  20 => 11,  315 => 4,  296 => 108,  282 => 89,  248 => 88,  244 => 73,  240 => 72,  233 => 82,  229 => 66,  225 => 65,  220 => 77,  212 => 60,  209 => 59,  188 => 51,  177 => 47,  174 => 62,  128 => 36,  87 => 17,  74 => 11,  42 => 19,  161 => 50,  145 => 56,  126 => 45,  116 => 36,  99 => 34,  94 => 33,  91 => 20,  86 => 34,  83 => 27,  61 => 23,  73 => 29,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 97,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 99,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 81,  251 => 71,  239 => 84,  231 => 72,  219 => 67,  201 => 56,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 35,  92 => 25,  84 => 29,  72 => 19,  48 => 18,  35 => 15,  29 => 15,  69 => 9,  54 => 22,  51 => 21,  31 => 3,  312 => 100,  308 => 94,  293 => 107,  285 => 90,  281 => 88,  277 => 102,  274 => 86,  271 => 81,  264 => 98,  261 => 81,  257 => 79,  253 => 77,  249 => 79,  247 => 70,  237 => 71,  204 => 57,  198 => 65,  194 => 64,  150 => 57,  147 => 45,  127 => 39,  112 => 28,  96 => 25,  76 => 17,  71 => 25,  55 => 21,  110 => 43,  89 => 32,  65 => 24,  63 => 13,  58 => 10,  34 => 4,  26 => 14,  24 => 4,  39 => 7,  38 => 6,  57 => 10,  43 => 18,  114 => 39,  109 => 25,  106 => 37,  101 => 19,  85 => 22,  77 => 12,  67 => 27,  47 => 8,  28 => 13,  50 => 20,  227 => 70,  224 => 91,  221 => 69,  207 => 71,  197 => 74,  195 => 60,  192 => 72,  189 => 61,  186 => 60,  181 => 64,  178 => 61,  173 => 55,  162 => 60,  158 => 56,  155 => 55,  152 => 55,  142 => 55,  136 => 44,  133 => 41,  130 => 40,  120 => 37,  105 => 41,  100 => 27,  75 => 24,  60 => 81,  53 => 19,  25 => 2,  19 => 11,  98 => 22,  88 => 17,  80 => 23,  78 => 28,  46 => 19,  44 => 7,  40 => 20,  36 => 15,  32 => 16,  27 => 8,  22 => 12,  232 => 72,  226 => 71,  222 => 76,  215 => 68,  211 => 84,  208 => 66,  202 => 64,  196 => 54,  193 => 53,  187 => 62,  183 => 49,  180 => 48,  171 => 44,  166 => 41,  163 => 40,  160 => 49,  157 => 48,  149 => 42,  146 => 37,  140 => 43,  137 => 54,  129 => 51,  124 => 34,  121 => 33,  118 => 31,  115 => 30,  111 => 32,  107 => 28,  104 => 23,  97 => 34,  93 => 18,  90 => 21,  81 => 15,  70 => 28,  66 => 23,  62 => 82,  59 => 22,  56 => 23,  52 => 9,  49 => 9,  45 => 17,  41 => 16,  37 => 17,  33 => 14,  30 => 9,);
    }
}
