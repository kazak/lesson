<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_93f43ed46bb939911ae5a9f7ec3de3db58b1db785fd8cce833443440b630adb9 extends Twig_Template
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
        if ((!$this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "hasassociationadmin"))) {
            // line 12
            echo "    ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_value_);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_element_, $this->getAttribute($_sonata_admin_, "field_description")), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" >
            ";
            // line 19
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (($this->getAttribute($_sonata_admin_, "edit") == "inline")) {
                // line 20
                echo "                ";
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (($this->getAttribute($_sonata_admin_, "inline") == "table")) {
                    // line 21
                    echo "                    ";
                    if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($_form_, "children")) > 0)) {
                        // line 22
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 25
                        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(twig_first($this->env, $this->getAttribute($_form_, "children")), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 26
                            echo "                                        ";
                            if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                            if (($_field_name_ == "_delete")) {
                                // line 27
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 29
                                echo "                                            <th ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo (($this->getAttribute($this->getAttribute($_nested_field_, "vars"), "required", array(), "array")) ? ("class=\"required\"") : (""));
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                if (($this->getAttribute($this->getAttribute($this->getAttribute($_nested_field_, "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($_nested_field_, "vars"), "attr", array(), "array"), "hidden", array(), "array"))) {
                                    echo " style=\"display:none;\"";
                                }
                                echo ">
                                                ";
                                // line 30
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_nested_field_, "vars"), "sonata_admin", array(), "array"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($_nested_field_, "vars"), "label")), "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 33
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 37
                        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 38
                            echo "                                    <tr>
                                        ";
                            // line 39
                            if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_nested_group_field_, "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 40
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
                                echo "\"";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                if (($this->getAttribute($this->getAttribute($this->getAttribute($_nested_field_, "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($_nested_field_, "vars"), "attr", array(), "array"), "hidden", array(), "array"))) {
                                    echo " style=\"display:none;\"";
                                }
                                echo ">
                                                ";
                                // line 41
                                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $_field_name_, array(), "array", true, true)) {
                                    // line 42
                                    echo "                                                    ";
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'widget');
                                    echo "

                                                    ";
                                    // line 44
                                    if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                                    $context["dummy"] = $this->getAttribute($_nested_group_field_, "setrendered");
                                    // line 45
                                    echo "                                                ";
                                } else {
                                    // line 46
                                    echo "                                                    ";
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'widget');
                                    echo "
                                                ";
                                }
                                // line 48
                                echo "                                                ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_nested_field_, "vars"), "errors")) > 0)) {
                                    // line 49
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 50
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 53
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 55
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 57
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 60
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($_form_, "children")) > 0)) {
                    // line 61
                    echo "                    ";
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    $context["associationAdmin"] = $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin");
                    // line 62
                    echo "
                    <div>
                        ";
                    // line 64
                    if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "children"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["nested_group_field"]) {
                        // line 65
                        echo "                            <ul class=\"nav nav-tabs\">
                                ";
                        // line 66
                        if (isset($context["associationAdmin"])) { $_associationAdmin_ = $context["associationAdmin"]; } else { $_associationAdmin_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_associationAdmin_, "formgroups"));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                            // line 67
                            echo "                                    <li class=\"";
                            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                            if ($this->getAttribute($_loop_, "first")) {
                                echo "active";
                            }
                            echo "\">
                                        <a href=\"#";
                            // line 68
                            if (isset($context["associationAdmin"])) { $_associationAdmin_ = $context["associationAdmin"]; } else { $_associationAdmin_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_associationAdmin_, "uniqid"), "html", null, true);
                            echo "_";
                            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                            echo "_";
                            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
                            echo "\" data-toggle=\"tab\">
                                            <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                            ";
                            // line 70
                            if (isset($context["associationAdmin"])) { $_associationAdmin_ = $context["associationAdmin"]; } else { $_associationAdmin_ = null; }
                            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                            if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_associationAdmin_, "trans", array(0 => $_name_, 1 => array(), 2 => $this->getAttribute($_form_group_, "translation_domain")), "method"), "html", null, true);
                            echo "
                                        </a>
                                    </li>
                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "                            </ul>

                            <div class=\"tab-content\">
                                ";
                        // line 77
                        if (isset($context["associationAdmin"])) { $_associationAdmin_ = $context["associationAdmin"]; } else { $_associationAdmin_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_associationAdmin_, "formgroups"));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                            // line 78
                            echo "                                    <div class=\"tab-pane ";
                            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                            if ($this->getAttribute($_loop_, "first")) {
                                echo "active";
                            }
                            echo "\" id=\"";
                            if (isset($context["associationAdmin"])) { $_associationAdmin_ = $context["associationAdmin"]; } else { $_associationAdmin_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_associationAdmin_, "uniqid"), "html", null, true);
                            echo "_";
                            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                            echo "_";
                            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
                            echo "\">
                                        <fieldset>
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                            // line 81
                            if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_group_, "fields"));
                            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                                // line 82
                                echo "                                                    ";
                                if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                                $context["nested_field"] = $this->getAttribute($this->getAttribute($_nested_group_field_, "children"), $_field_name_, array(), "array");
                                // line 83
                                echo "                                                    ";
                                if (isset($context["associationAdmin"])) { $_associationAdmin_ = $context["associationAdmin"]; } else { $_associationAdmin_ = null; }
                                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                                if ($this->getAttribute($this->getAttribute($_associationAdmin_, "formfielddescriptions", array(), "any", false, true), $_field_name_, array(), "array", true, true)) {
                                    // line 84
                                    echo "                                                        ";
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'row', array("inline" => "natural", "edit" => "inline"));
                                    // line 87
                                    echo "
                                                        ";
                                    // line 88
                                    if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                                    $context["dummy"] = $this->getAttribute($_nested_group_field_, "setrendered");
                                    // line 89
                                    echo "                                                    ";
                                } else {
                                    // line 90
                                    echo "                                                        ";
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'row');
                                    echo "
                                                    ";
                                }
                                // line 92
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 93
                            echo "                                            </div>
                                        </fieldset>
                                    </div>
                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 97
                        echo "                            </div>

                            ";
                        // line 99
                        if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                        if ($this->getAttribute($_nested_group_field_, "_delete", array(), "array", true, true)) {
                            // line 100
                            echo "                                ";
                            if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_nested_group_field_, "_delete", array(), "array"), 'row');
                            echo "
                            ";
                        }
                        // line 102
                        echo "                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "                    </div>
                ";
                }
                // line 105
                echo "            ";
            } else {
                // line 106
                echo "                ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
                echo "
            ";
            }
            // line 108
            echo "
        </span>

        ";
            // line 111
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (($this->getAttribute($_sonata_admin_, "edit") == "inline")) {
                // line 112
                echo "
            ";
                // line 113
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $_btn_add_)) {
                    // line 114
                    echo "                <span id=\"field_actions_";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 116
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 117
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 119
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 122
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 126
                echo "
            ";
                // line 128
                echo "            ";
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 129
                    echo "                <script type=\"text/javascript\">
                    jQuery('div#field_container_";
                    // line 130
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable({
                        axis: 'y',
                        opacity: 0.6,
                        items: 'tr',
                        stop: apply_position_value_";
                    // line 134
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "
                    });

                    function apply_position_value_";
                    // line 137
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "() {
                        // update the input value position
                        jQuery('div#field_container_";
                    // line 139
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "-";
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "sortable"), "html", null, true);
                    echo "').each(function(index, element) {
                            // remove the sortable handler and put it back
                            jQuery('span.sonata-ba-sortable-handler', element).remove();
                            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
                            jQuery('input', element).hide();
                        });

                        jQuery('div#field_container_";
                    // line 146
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "-";
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "sortable"), "html", null, true);
                    echo " input').each(function(index, value) {
                            jQuery(value).val(index + 1);
                        });
                    }

                    // refresh the sortable option when a new element is added
                    jQuery('#sonata-ba-field-container-";
                    // line 152
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "').bind('sonata.add_element', function() {
                        apply_position_value_";
                    // line 153
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "();
                        jQuery('div#field_container_";
                    // line 154
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable('refresh');
                    });

                    apply_position_value_";
                    // line 157
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "();

                </script>
            ";
                }
                // line 161
                echo "
            ";
                // line 163
                echo "            ";
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 164
                echo "
        ";
            } else {
                // line 166
                echo "            <span id=\"field_actions_";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" >
                ";
                // line 167
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $_btn_add_)) {
                    // line 168
                    echo "                    <a
                        href=\"";
                    // line 169
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 170
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 172
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 175
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 178
                echo "            </span>

            <div style=\"display: none\" id=\"field_dialog_";
                // line 180
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\">

            </div>

            ";
                // line 184
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 185
                echo "        ";
            }
            // line 186
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 186,  638 => 185,  636 => 184,  628 => 180,  624 => 178,  616 => 175,  608 => 172,  602 => 170,  597 => 169,  594 => 168,  590 => 167,  584 => 166,  580 => 164,  577 => 163,  574 => 161,  566 => 157,  559 => 154,  554 => 153,  533 => 146,  516 => 139,  510 => 137,  503 => 134,  495 => 130,  492 => 129,  485 => 126,  476 => 122,  468 => 119,  462 => 117,  457 => 116,  446 => 113,  443 => 112,  440 => 111,  435 => 108,  428 => 106,  425 => 105,  421 => 103,  397 => 99,  393 => 97,  376 => 93,  363 => 90,  357 => 88,  354 => 87,  345 => 83,  340 => 82,  335 => 81,  316 => 78,  298 => 77,  272 => 70,  260 => 68,  213 => 64,  169 => 48,  159 => 45,  113 => 37,  95 => 30,  79 => 27,  21 => 11,  372 => 122,  370 => 92,  358 => 115,  342 => 109,  336 => 107,  328 => 105,  301 => 98,  297 => 96,  294 => 95,  291 => 93,  268 => 84,  263 => 83,  252 => 67,  246 => 78,  241 => 75,  234 => 66,  205 => 61,  199 => 63,  190 => 55,  184 => 58,  179 => 57,  176 => 50,  168 => 52,  154 => 48,  144 => 44,  407 => 102,  400 => 100,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 130,  360 => 89,  350 => 84,  343 => 120,  338 => 119,  334 => 117,  331 => 106,  324 => 104,  319 => 103,  314 => 111,  309 => 110,  304 => 109,  290 => 106,  286 => 105,  283 => 104,  280 => 103,  273 => 101,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 69,  191 => 67,  185 => 66,  156 => 44,  123 => 44,  64 => 23,  20 => 11,  315 => 4,  296 => 108,  282 => 89,  248 => 88,  244 => 73,  240 => 72,  233 => 82,  229 => 66,  225 => 65,  220 => 77,  212 => 60,  209 => 62,  188 => 51,  177 => 47,  174 => 62,  128 => 36,  87 => 29,  74 => 11,  42 => 13,  161 => 50,  145 => 41,  126 => 40,  116 => 36,  99 => 34,  94 => 33,  91 => 20,  86 => 34,  83 => 27,  61 => 21,  73 => 25,  549 => 152,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 128,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 114,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 97,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 99,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 81,  251 => 71,  239 => 84,  231 => 65,  219 => 67,  201 => 56,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 34,  102 => 33,  92 => 25,  84 => 28,  72 => 19,  48 => 18,  35 => 16,  29 => 15,  69 => 9,  54 => 22,  51 => 19,  31 => 15,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 88,  277 => 102,  274 => 86,  271 => 81,  264 => 98,  261 => 81,  257 => 79,  253 => 77,  249 => 79,  247 => 70,  237 => 71,  204 => 57,  198 => 65,  194 => 64,  150 => 57,  147 => 45,  127 => 39,  112 => 28,  96 => 25,  76 => 17,  71 => 25,  55 => 21,  110 => 43,  89 => 32,  65 => 22,  63 => 13,  58 => 21,  34 => 12,  26 => 14,  24 => 12,  39 => 17,  38 => 17,  57 => 10,  43 => 17,  114 => 39,  109 => 25,  106 => 37,  101 => 19,  85 => 29,  77 => 12,  67 => 27,  47 => 8,  28 => 13,  50 => 19,  227 => 70,  224 => 91,  221 => 69,  207 => 71,  197 => 57,  195 => 60,  192 => 72,  189 => 61,  186 => 60,  181 => 64,  178 => 61,  173 => 49,  162 => 46,  158 => 56,  155 => 55,  152 => 55,  142 => 55,  136 => 44,  133 => 41,  130 => 40,  120 => 37,  105 => 41,  100 => 27,  75 => 26,  60 => 81,  53 => 19,  25 => 2,  19 => 11,  98 => 22,  88 => 17,  80 => 23,  78 => 28,  46 => 19,  44 => 7,  40 => 16,  36 => 15,  32 => 16,  27 => 8,  22 => 12,  232 => 72,  226 => 71,  222 => 76,  215 => 68,  211 => 84,  208 => 66,  202 => 60,  196 => 54,  193 => 53,  187 => 62,  183 => 53,  180 => 48,  171 => 44,  166 => 41,  163 => 40,  160 => 49,  157 => 48,  149 => 42,  146 => 37,  140 => 43,  137 => 54,  129 => 51,  124 => 34,  121 => 39,  118 => 38,  115 => 30,  111 => 32,  107 => 28,  104 => 23,  97 => 34,  93 => 18,  90 => 21,  81 => 15,  70 => 25,  66 => 23,  62 => 82,  59 => 21,  56 => 20,  52 => 9,  49 => 9,  45 => 17,  41 => 16,  37 => 17,  33 => 16,  30 => 9,);
    }
}
