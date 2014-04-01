<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_909570f4ad0ea2ff684b955cd991c7bdd84dbe30b6f1110ce39e533c46574950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'list_filters' => array($this, 'block_list_filters'),
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
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        // line 17
        echo "    </div>
";
    }

    // line 20
    public function block_side_menu($context, array $blocks = array())
    {
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($_admin_, "sidemenu", array(0 => $_action_), "method"), array("currentClass" => "active"), "list");
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
        // line 23
        echo "
    ";
        // line 24
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => $_admin_)));
        echo "

    ";
        // line 26
        $this->displayBlock('list_header', $context, $blocks);
        // line 27
        echo "
    ";
        // line 28
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context["batchactions"] = $this->getAttribute($_admin_, "batchactions");
        // line 29
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "datagrid"), "results")) > 0)) {
            // line 30
            echo "        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method")) {
                // line 31
                echo "        <form action=\"";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute($_admin_, "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 32
                if (isset($context["csrf_token"])) { $_csrf_token_ = $context["csrf_token"]; } else { $_csrf_token_ = null; }
                echo twig_escape_filter($this->env, $_csrf_token_, "html", null, true);
                echo "\">
        ";
            }
            // line 34
            echo "            <table class=\"table table-bordered table-striped\">
                ";
            // line 35
            $this->displayBlock('table_header', $context, $blocks);
            // line 71
            echo "
                ";
            // line 72
            $this->displayBlock('table_body', $context, $blocks);
            // line 81
            echo "
                ";
            // line 82
            $this->displayBlock('table_footer', $context, $blocks);
            // line 146
            echo "            </table>
        ";
            // line 147
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method")) {
                // line 148
                echo "        </form>
        ";
            }
            // line 150
            echo "    ";
        } else {
            // line 151
            echo "        <p class=\"notice\">
            ";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 155
        echo "
    ";
        // line 156
        $this->displayBlock('list_footer', $context, $blocks);
        // line 157
        echo "
    ";
        // line 158
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => $_admin_)));
        echo "

";
    }

    // line 26
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 35
    public function block_table_header($context, array $blocks = array())
    {
        // line 36
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 38
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_admin_, "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 39
            echo "                                ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            if (isset($context["batchactions"])) { $_batchactions_ = $context["batchactions"]; } else { $_batchactions_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ((($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($_field_description_, "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, $_batchactions_) > 0))) {
                // line 40
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                    </th>
                                ";
            } elseif (($this->getAttribute($_field_description_, "getOption", array(0 => "code"), "method") == "_select")) {
                // line 44
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                ";
            } elseif ((($this->getAttribute($_field_description_, "name") == "_action") && $this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest"))) {
                // line 46
                echo "                                    ";
                // line 47
                echo "                                ";
            } elseif ((($this->getAttribute($_field_description_, "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest"))) {
                // line 48
                echo "                                    ";
                // line 49
                echo "                                ";
            } else {
                // line 50
                echo "                                    ";
                $context["sortable"] = false;
                // line 51
                echo "                                    ";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                if (($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($_field_description_, "options"), "sortable"))) {
                    // line 52
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 53
                    echo "                                        ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "sortparameters", array(0 => $_field_description_, 1 => $this->getAttribute($_admin_, "datagrid")), "method");
                    // line 54
                    echo "                                        ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    if (isset($context["sort_parameters"])) { $_sort_parameters_ = $context["sort_parameters"]; } else { $_sort_parameters_ = null; }
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), "_sort_by") == $_field_description_) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute($_sort_parameters_, "filter"), "_sort_by")));
                    // line 55
                    echo "                                        ";
                    if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                    $context["sort_active_class"] = (($_current_) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 56
                    echo "                                        ";
                    if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    $context["sort_by"] = (($_current_) ? ($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute($_field_description_, "options"), "_sort_order")));
                    // line 57
                    echo "                                    ";
                }
                // line 58
                echo "
                                    ";
                // line 59
                ob_start();
                // line 60
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_description_, "type"), "html", null, true);
                echo " ";
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo " sonata-ba-list-field-header-order-";
                    if (isset($context["sort_by"])) { $_sort_by_ = $context["sort_by"]; } else { $_sort_by_ = null; }
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $_sort_by_), "html", null, true);
                    echo " ";
                    if (isset($context["sort_active_class"])) { $_sort_active_class_ = $context["sort_active_class"]; } else { $_sort_active_class_ = null; }
                    echo twig_escape_filter($this->env, $_sort_active_class_, "html", null, true);
                }
                echo "\">
                                            ";
                // line 61
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo "<a href=\"";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["sort_parameters"])) { $_sort_parameters_ = $context["sort_parameters"]; } else { $_sort_parameters_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => $_sort_parameters_), "method"), "html", null, true);
                    echo "\">";
                }
                // line 62
                echo "                                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $this->getAttribute($_field_description_, "label"), 1 => array(), 2 => $this->getAttribute($_field_description_, "translationDomain")), "method"), "html", null, true);
                echo "
                                            ";
                // line 63
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo "</a>";
                }
                // line 64
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 66
                echo "                                ";
            }
            // line 67
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 72
    public function block_table_body($context, array $blocks = array())
    {
        // line 73
        echo "                    <tbody>
                        ";
        // line 74
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 75
            echo "                            <tr>
                                ";
            // line 76
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $template = $this->env->resolveTemplate($this->getAttribute($_admin_, "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 77
            echo "                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                    </tbody>
                ";
    }

    // line 82
    public function block_table_footer($context, array $blocks = array())
    {
        // line 83
        echo "                    <tr>
                        <th colspan=\"";
        // line 84
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "list"), "elements")) - (($this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute($_admin_, "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute($_admin_, "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                            <div class=\"form-inline\">
                                ";
        // line 86
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((!$this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest"))) {
            // line 87
            echo "                                    ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["batchactions"])) { $_batchactions_ = $context["batchactions"]; } else { $_batchactions_ = null; }
            if (($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, $_batchactions_) > 0))) {
                // line 88
                echo "                                        ";
                $this->displayBlock('batch', $context, $blocks);
                // line 118
                echo "                                    ";
            }
            // line 119
            echo "
                                    <div class=\"pull-right\">
                                        ";
            // line 121
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ((($this->getAttribute($_admin_, "hasRoute", array(0 => "export"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute($_admin_, "getExportFormats", array(), "method")))) {
                // line 122
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                            ";
                // line 123
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "getExportFormats", array(), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 124
                    echo "                                                <a href=\"";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["format"])) { $_format_ = $context["format"]; } else { $_format_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($_admin_, "datagrid"), 1 => 0), "method") + array("format" => $_format_))), "method"), "html", null, true);
                    echo "\">";
                    if (isset($context["format"])) { $_format_ = $context["format"]; } else { $_format_ = null; }
                    echo twig_escape_filter($this->env, $_format_, "html", null, true);
                    echo "</a>";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ((!$this->getAttribute($_loop_, "last"))) {
                        echo ",";
                    }
                    // line 125
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "
                                            &nbsp;-&nbsp;
                                        ";
            }
            // line 129
            echo "
                                        ";
            // line 130
            $this->displayBlock('pager_results', $context, $blocks);
            // line 133
            echo "                                    </div>
                                ";
        }
        // line 135
        echo "                            </div>
                        </th>
                    </tr>

                    ";
        // line 139
        $this->displayBlock('pager_links', $context, $blocks);
        // line 144
        echo "
                ";
    }

    // line 88
    public function block_batch($context, array $blocks = array())
    {
        // line 89
        echo "                                            <script>
                                                ";
        // line 90
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 100
        echo "                                            </script>

                                            ";
        // line 102
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 115
        echo "                                            
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
    }

    // line 90
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 91
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').click(function () {
                                                            \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked')).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                        \$(\"td.sonata-ba-list-field-batch input[type='checkbox']\").change(function () {
                                                            \$(this).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                    });
                                                ";
    }

    // line 102
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 103
        echo "                                                <label class=\"checkbox\" for=\"";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                    <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 104
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                    ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                     (";
        // line 106
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "nbresults"), "html", null, true);
        echo ")
                                                </label>

                                                <select name=\"action\" style=\"width: auto; height: auto\">
                                                    ";
        // line 110
        if (isset($context["batchactions"])) { $_batchactions_ = $context["batchactions"]; } else { $_batchactions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_batchactions_);
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 111
            echo "                                                        <option value=\"";
            if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
            echo twig_escape_filter($this->env, $_action_, "html", null, true);
            echo "\">";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_options_, "label"), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                                                </select>
                                            ";
    }

    // line 130
    public function block_pager_results($context, array $blocks = array())
    {
        // line 131
        echo "                                            ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $template = $this->env->resolveTemplate($this->getAttribute($_admin_, "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 132
        echo "                                        ";
    }

    // line 139
    public function block_pager_links($context, array $blocks = array())
    {
        // line 140
        echo "                        ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 141
            echo "                            ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $template = $this->env->resolveTemplate($this->getAttribute($_admin_, "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 142
            echo "                        ";
        }
        // line 143
        echo "                    ";
    }

    // line 156
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 162
    public function block_list_filters($context, array $blocks = array())
    {
        // line 163
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "filters")) {
            // line 164
            echo "        <form class=\"sonata-filter-form ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo ((($this->getAttribute($_admin_, "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\">
            ";
            // line 165
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 167
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo (($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 169
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo (($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <div>
                        ";
            // line 171
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 172
                echo "                            <div class=\"clearfix\">
                                <label for=\"";
                // line 173
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_filter_, "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $this->getAttribute($_filter_, "label"), 1 => array(), 2 => $this->getAttribute($_filter_, "translationDomain")), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 174
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_filter_, "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => twig_array_merge((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr"), array())) : (array())), array("class" => trim(((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class"), "")) : ("")) . " span8 sonata-filter-option"))))));
                echo "
                                ";
                // line 175
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_filter_, "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget', array("attr" => twig_array_merge((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "value", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "value", array(), "array", false, true), "vars", array(), "any", false, true), "attr"), array())) : (array())), array("class" => trim(((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "value", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "value", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class"), "")) : ("")) . " span8"))))));
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                    </div>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                    ";
            // line 182
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 183
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">

                    <a class=\"btn\" href=\"";
            // line 187
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                </div>

                ";
            // line 190
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 191
                echo "                    <input type=\"hidden\" name=\"";
                if (isset($context["paramKey"])) { $_paramKey_ = $context["paramKey"]; } else { $_paramKey_ = null; }
                echo twig_escape_filter($this->env, $_paramKey_, "html", null, true);
                echo "\" value=\"";
                if (isset($context["paramValue"])) { $_paramValue_ = $context["paramValue"]; } else { $_paramValue_ = null; }
                echo twig_escape_filter($this->env, $_paramValue_, "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "            </fieldset>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  696 => 193,  683 => 191,  657 => 183,  654 => 182,  648 => 178,  637 => 175,  631 => 174,  618 => 172,  613 => 171,  599 => 167,  593 => 165,  572 => 156,  568 => 143,  565 => 142,  556 => 140,  544 => 131,  541 => 130,  536 => 113,  523 => 111,  518 => 110,  506 => 105,  501 => 104,  454 => 88,  449 => 144,  447 => 139,  432 => 129,  427 => 126,  382 => 123,  374 => 121,  356 => 86,  346 => 83,  323 => 77,  236 => 60,  228 => 57,  218 => 55,  125 => 150,  68 => 20,  812 => 213,  805 => 210,  802 => 209,  799 => 208,  792 => 205,  779 => 204,  773 => 202,  758 => 200,  755 => 199,  752 => 198,  743 => 193,  740 => 192,  723 => 190,  705 => 189,  699 => 187,  694 => 186,  691 => 185,  688 => 184,  682 => 180,  678 => 190,  675 => 177,  669 => 187,  634 => 173,  629 => 172,  621 => 173,  612 => 168,  609 => 167,  604 => 165,  587 => 157,  582 => 155,  579 => 154,  575 => 133,  567 => 131,  555 => 128,  552 => 127,  545 => 149,  535 => 146,  532 => 145,  525 => 142,  519 => 140,  513 => 138,  493 => 136,  489 => 135,  486 => 134,  484 => 127,  461 => 120,  458 => 119,  424 => 113,  411 => 106,  404 => 104,  389 => 100,  385 => 99,  381 => 98,  364 => 88,  361 => 90,  349 => 84,  333 => 83,  326 => 81,  311 => 77,  305 => 75,  278 => 65,  203 => 45,  353 => 145,  341 => 141,  337 => 140,  325 => 135,  313 => 131,  288 => 121,  266 => 62,  258 => 58,  250 => 103,  216 => 90,  175 => 77,  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 377,  715 => 374,  704 => 367,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 185,  662 => 342,  659 => 341,  652 => 174,  647 => 337,  619 => 321,  615 => 319,  607 => 169,  601 => 310,  591 => 307,  586 => 306,  560 => 141,  553 => 139,  547 => 290,  540 => 285,  531 => 280,  520 => 273,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  482 => 254,  480 => 91,  477 => 90,  471 => 116,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 118,  347 => 143,  339 => 173,  303 => 156,  292 => 72,  275 => 140,  270 => 139,  235 => 124,  210 => 88,  165 => 38,  172 => 62,  153 => 26,  82 => 57,  23 => 18,  170 => 39,  164 => 59,  151 => 56,  135 => 59,  119 => 46,  103 => 35,  641 => 186,  638 => 185,  636 => 330,  628 => 326,  624 => 171,  616 => 169,  608 => 172,  602 => 170,  597 => 169,  594 => 160,  590 => 158,  584 => 164,  580 => 163,  577 => 162,  574 => 302,  566 => 157,  559 => 129,  554 => 153,  533 => 146,  516 => 139,  510 => 106,  503 => 134,  495 => 103,  492 => 102,  485 => 126,  476 => 122,  468 => 115,  462 => 100,  457 => 89,  446 => 113,  443 => 116,  440 => 111,  435 => 130,  428 => 106,  425 => 105,  421 => 112,  397 => 102,  393 => 97,  376 => 93,  363 => 90,  357 => 177,  354 => 87,  345 => 86,  340 => 82,  335 => 81,  316 => 75,  298 => 74,  272 => 113,  260 => 68,  213 => 77,  169 => 76,  159 => 45,  113 => 82,  95 => 33,  79 => 14,  21 => 11,  372 => 94,  370 => 119,  358 => 89,  342 => 109,  336 => 107,  328 => 105,  301 => 127,  297 => 126,  294 => 95,  291 => 93,  268 => 63,  263 => 61,  252 => 61,  246 => 78,  241 => 100,  234 => 59,  205 => 74,  199 => 72,  190 => 55,  184 => 58,  179 => 57,  176 => 41,  168 => 52,  154 => 57,  144 => 44,  407 => 105,  400 => 124,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 122,  360 => 89,  350 => 84,  343 => 82,  338 => 79,  334 => 139,  331 => 169,  324 => 80,  319 => 76,  314 => 111,  309 => 158,  304 => 109,  290 => 106,  286 => 68,  283 => 104,  280 => 67,  273 => 64,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 51,  191 => 70,  185 => 66,  156 => 58,  123 => 47,  64 => 183,  20 => 11,  315 => 4,  296 => 70,  282 => 89,  248 => 129,  244 => 101,  240 => 72,  233 => 56,  229 => 122,  225 => 82,  220 => 80,  212 => 54,  209 => 62,  188 => 68,  177 => 40,  174 => 62,  128 => 151,  87 => 43,  74 => 27,  42 => 15,  161 => 36,  145 => 158,  126 => 48,  116 => 36,  99 => 47,  94 => 32,  91 => 31,  86 => 27,  83 => 24,  61 => 18,  73 => 24,  549 => 132,  543 => 161,  538 => 147,  530 => 155,  526 => 153,  522 => 141,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 126,  469 => 132,  466 => 102,  460 => 90,  455 => 118,  450 => 117,  444 => 122,  441 => 135,  437 => 133,  434 => 119,  429 => 114,  423 => 112,  420 => 111,  416 => 110,  413 => 125,  408 => 106,  394 => 101,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 87,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 79,  307 => 76,  302 => 74,  295 => 73,  287 => 148,  279 => 116,  256 => 81,  251 => 71,  239 => 84,  231 => 58,  219 => 67,  201 => 56,  143 => 61,  138 => 44,  134 => 32,  131 => 152,  122 => 37,  117 => 25,  108 => 72,  102 => 33,  92 => 18,  84 => 30,  72 => 26,  48 => 18,  35 => 16,  29 => 15,  69 => 197,  54 => 153,  51 => 24,  31 => 23,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 66,  277 => 66,  274 => 86,  271 => 81,  264 => 98,  261 => 62,  257 => 134,  253 => 77,  249 => 79,  247 => 70,  237 => 99,  204 => 52,  198 => 43,  194 => 49,  150 => 68,  147 => 67,  127 => 28,  112 => 27,  96 => 60,  76 => 13,  71 => 25,  55 => 21,  110 => 81,  89 => 17,  65 => 22,  63 => 23,  58 => 20,  34 => 52,  26 => 14,  24 => 11,  39 => 14,  38 => 24,  57 => 154,  43 => 20,  114 => 24,  109 => 25,  106 => 37,  101 => 61,  85 => 16,  77 => 28,  67 => 184,  47 => 17,  28 => 22,  50 => 19,  227 => 55,  224 => 54,  221 => 53,  207 => 53,  197 => 50,  195 => 42,  192 => 48,  189 => 47,  186 => 67,  181 => 79,  178 => 64,  173 => 49,  162 => 46,  158 => 35,  155 => 55,  152 => 31,  142 => 157,  136 => 44,  133 => 30,  130 => 29,  120 => 26,  105 => 71,  100 => 34,  75 => 39,  60 => 22,  53 => 16,  25 => 13,  19 => 2,  98 => 22,  88 => 31,  80 => 29,  78 => 26,  46 => 14,  44 => 17,  40 => 25,  36 => 14,  32 => 16,  27 => 12,  22 => 7,  232 => 96,  226 => 71,  222 => 56,  215 => 49,  211 => 47,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 46,  183 => 44,  180 => 65,  171 => 38,  166 => 36,  163 => 40,  160 => 72,  157 => 48,  149 => 36,  146 => 35,  140 => 156,  137 => 155,  129 => 48,  124 => 27,  121 => 148,  118 => 147,  115 => 146,  111 => 23,  107 => 22,  104 => 23,  97 => 39,  93 => 45,  90 => 36,  81 => 27,  70 => 33,  66 => 24,  62 => 165,  59 => 164,  56 => 21,  52 => 20,  49 => 15,  45 => 16,  41 => 16,  37 => 53,  33 => 16,  30 => 9,);
    }
}
