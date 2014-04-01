<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_a4f2e7f44ef9b025ae472b76163079350e8d39594d62289502ea749d9807159e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('form_row', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('sonata_type_immutable_array_widget', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('sonata_type_immutable_array_widget_row', $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if ((!($_label_ === false))) {
            // line 16
            echo "        ";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => ((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class"), "")) : ("")) . " control-label")));
            // line 17
            echo "
        ";
            // line 18
            if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
            if ((!$_compound_)) {
                // line 19
                echo "            ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("for" => $_id_));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                // line 22
                echo "            ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class"), "")) : ("")) . " required"))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (twig_test_empty($_label_)) {
                // line 26
                echo "            ";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($_name_));
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (isset($context["in_list_checkbox"])) { $_in_list_checkbox_ = $context["in_list_checkbox"]; } else { $_in_list_checkbox_ = null; }
            if (((array_key_exists("in_list_checkbox", $context) && $_in_list_checkbox_) && array_key_exists("widget", $context))) {
                // line 30
                echo "            <label";
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_attr_);
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                    echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                    echo "=\"";
                    if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                    echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 31
                if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
                echo $_widget_;
                echo "
                <span>
                    ";
                // line 33
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ((!$this->getAttribute($_sonata_admin_, "admin"))) {
                    // line 34
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
                } else {
                    // line 36
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "html", null, true);
                }
                // line 38
                echo "                </span>
            </label>
        ";
            } else {
                // line 41
                echo "            <label";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_label_attr_);
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                    echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                    echo "=\"";
                    if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                    echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 42
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ((!$this->getAttribute($_sonata_admin_, "admin"))) {
                    // line 43
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
                } else {
                    // line 45
                    echo "                    ";
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "trans", array(0 => $_label_, 1 => array(), 2 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 47
                echo "            </label>
        ";
            }
            // line 49
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        ob_start();
        // line 55
        echo "        id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"
        ";
        // line 56
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
            echo "=\"";
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            if (($_attrname_ == "class")) {
                echo "unstyled ";
            }
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (!twig_in_filter("class", $_attr_)) {
            echo "class=\"unstyled\"";
        }
        // line 58
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 65
            echo "            <li>
                ";
            // line 66
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
            echo "
                ";
            // line 67
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 74
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 75
        ob_start();
        // line 76
        echo "    ";
        if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
        if ($_compound_) {
            // line 77
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 78
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 79
                echo "            <li>
                ";
                // line 80
                ob_start();
                // line 81
                echo "                    ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 83
                echo "                ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["form_widget_content"])) { $_form_widget_content_ = $context["form_widget_content"]; } else { $_form_widget_content_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label', array("in_list_checkbox" => true, "widget" => $_form_widget_content_) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($_child_, "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_child_, "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </ul>
    ";
        } else {
            // line 88
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
            if ($_multiple_) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 89
            if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
            if ((!(null === $_empty_value_))) {
                // line 90
                echo "            <option value=\"\">
                ";
                // line 91
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ((!$this->getAttribute($_sonata_admin_, "admin"))) {
                    // line 92
                    if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
                    if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $_translation_domain_), "html", null, true);
                } else {
                    // line 94
                    if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "html", null, true);
                }
                // line 96
                echo "            </option>
        ";
            }
            // line 98
            echo "        ";
            if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
            if ((twig_length_filter($this->env, $_preferred_choices_) > 0)) {
                // line 99
                echo "            ";
                if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
                $context["options"] = $_preferred_choices_;
                // line 100
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 101
                if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
                if ((twig_length_filter($this->env, $_choices_) > 0)) {
                    // line 102
                    echo "                <option disabled=\"disabled\">";
                    if (isset($context["separator"])) { $_separator_ = $context["separator"]; } else { $_separator_ = null; }
                    echo twig_escape_filter($this->env, $_separator_, "html", null, true);
                    echo "</option>
            ";
                }
                // line 104
                echo "        ";
            }
            // line 105
            echo "        ";
            if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
            $context["options"] = $_choices_;
            // line 106
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 112
    public function block_form_row($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        if (isset($context["sonata_admin_enabled"])) { $_sonata_admin_enabled_ = $context["sonata_admin_enabled"]; } else { $_sonata_admin_enabled_ = null; }
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ((((!array_key_exists("sonata_admin", $context)) || (!$_sonata_admin_enabled_)) || (!$this->getAttribute($_sonata_admin_, "field_description")))) {
            // line 114
            echo "        <div class=\"control-group ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                echo " error";
            }
            echo "\">
            ";
            // line 115
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($_label_, null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls ";
            // line 116
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (($_label_ === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 117
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            echo "
                ";
            // line 118
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                // line 119
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 120
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
                echo "
                    </div>
                ";
            }
            // line 123
            echo "            </div>
        </div>
    ";
        } else {
            // line 126
            echo "        <div class=\"control-group";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\">
            ";
            // line 127
            $this->displayBlock('label', $context, $blocks);
            // line 134
            echo "
            ";
            // line 135
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) || (!($_label_ === false)));
            // line 136
            echo "            <div class=\"controls sonata-ba-field sonata-ba-field-";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "edit"), "html", null, true);
            echo "-";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "inline"), "html", null, true);
            echo " ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if (isset($context["has_label"])) { $_has_label_ = $context["has_label"]; } else { $_has_label_ = null; }
            if ((!$_has_label_)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 138
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            echo "

                ";
            // line 140
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                // line 141
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 142
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
                echo "
                    </div>
                ";
            }
            // line 145
            echo "
                ";
            // line 146
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if ($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "help")) {
                // line 147
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                echo $this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 149
            echo "            </div>
        </div>
    ";
        }
    }

    // line 127
    public function block_label($context, array $blocks = array())
    {
        // line 128
        echo "                ";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 129
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 131
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($_label_, null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 133
        echo "            ";
    }

    // line 154
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 155
        ob_start();
        // line 156
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 157
        if (isset($context["allow_delete"])) { $_allow_delete_ = $context["allow_delete"]; } else { $_allow_delete_ = null; }
        if ($_allow_delete_) {
            // line 158
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"icon-remove\"></i></a>
        ";
        }
        // line 160
        echo "        ";
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 165
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 166
        ob_start();
        // line 167
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 168
            echo "        ";
            if (isset($context["prototype"])) { $_prototype_ = $context["prototype"]; } else { $_prototype_ = null; }
            $context["child"] = $_prototype_;
            // line 169
            echo "        ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["prototype"])) { $_prototype_ = $context["prototype"]; } else { $_prototype_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute($_prototype_, "vars"), "name"), "class" => (($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : (""))));
            // line 170
            echo "    ";
        }
        // line 171
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 172
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
        ";
        // line 173
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 174
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        ";
        // line 177
        if (isset($context["allow_add"])) { $_allow_add_ = $context["allow_add"]; } else { $_allow_add_ = null; }
        if ($_allow_add_) {
            // line 178
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"icon-plus\"></i></a></div>
        ";
        }
        // line 180
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 184
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 185
        echo "    ";
        ob_start();
        // line 186
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 187
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "

            ";
        // line 189
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 190
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "
            ";
        // line 193
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 198
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 199
        echo "    ";
        ob_start();
        // line 200
        echo "        <div class=\"control-group";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "-";
        if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
        echo twig_escape_filter($this->env, $_key_, "html", null, true);
        echo "\">

            ";
        // line 202
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label');
        echo "

            <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 204
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "edit"), "html", null, true);
        echo "-";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "inline"), "html", null, true);
        echo " ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 205
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
        echo "
            </div>

            ";
        // line 208
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 209
            echo "                <div class=\"help-inline sonata-ba-field-error-messages\">
                    ";
            // line 210
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
            echo "
                </div>
            ";
        }
        // line 213
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  812 => 213,  805 => 210,  802 => 209,  799 => 208,  792 => 205,  779 => 204,  773 => 202,  758 => 200,  755 => 199,  752 => 198,  743 => 193,  740 => 192,  723 => 190,  705 => 189,  699 => 187,  694 => 186,  691 => 185,  688 => 184,  682 => 180,  678 => 178,  675 => 177,  669 => 176,  634 => 173,  629 => 172,  621 => 170,  612 => 168,  609 => 167,  604 => 165,  587 => 157,  582 => 155,  579 => 154,  575 => 133,  567 => 131,  555 => 128,  552 => 127,  545 => 149,  535 => 146,  532 => 145,  525 => 142,  519 => 140,  513 => 138,  493 => 136,  489 => 135,  486 => 134,  484 => 127,  461 => 120,  458 => 119,  424 => 113,  411 => 106,  404 => 104,  389 => 100,  385 => 99,  381 => 98,  364 => 91,  361 => 90,  349 => 88,  333 => 83,  326 => 81,  311 => 77,  305 => 75,  278 => 65,  203 => 45,  353 => 145,  341 => 141,  337 => 140,  325 => 135,  313 => 131,  288 => 121,  266 => 62,  258 => 58,  250 => 103,  216 => 90,  175 => 77,  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 377,  715 => 374,  704 => 367,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 345,  662 => 342,  659 => 341,  652 => 174,  647 => 337,  619 => 321,  615 => 319,  607 => 166,  601 => 310,  591 => 307,  586 => 306,  560 => 295,  553 => 292,  547 => 290,  540 => 285,  531 => 280,  520 => 273,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  482 => 254,  480 => 250,  477 => 249,  471 => 247,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 92,  347 => 143,  339 => 173,  303 => 156,  292 => 124,  275 => 140,  270 => 139,  235 => 124,  210 => 88,  165 => 75,  172 => 62,  153 => 69,  82 => 57,  23 => 18,  170 => 61,  164 => 59,  151 => 56,  135 => 59,  119 => 46,  103 => 21,  641 => 186,  638 => 185,  636 => 330,  628 => 326,  624 => 171,  616 => 169,  608 => 172,  602 => 170,  597 => 169,  594 => 160,  590 => 158,  584 => 156,  580 => 304,  577 => 163,  574 => 302,  566 => 157,  559 => 129,  554 => 153,  533 => 146,  516 => 139,  510 => 137,  503 => 134,  495 => 258,  492 => 129,  485 => 126,  476 => 122,  468 => 123,  462 => 242,  457 => 116,  446 => 113,  443 => 116,  440 => 111,  435 => 108,  428 => 106,  425 => 105,  421 => 112,  397 => 102,  393 => 97,  376 => 93,  363 => 90,  357 => 177,  354 => 87,  345 => 86,  340 => 82,  335 => 81,  316 => 78,  298 => 77,  272 => 113,  260 => 68,  213 => 77,  169 => 76,  159 => 45,  113 => 52,  95 => 19,  79 => 14,  21 => 11,  372 => 94,  370 => 92,  358 => 89,  342 => 109,  336 => 107,  328 => 105,  301 => 127,  297 => 126,  294 => 95,  291 => 93,  268 => 63,  263 => 61,  252 => 57,  246 => 78,  241 => 100,  234 => 87,  205 => 74,  199 => 72,  190 => 55,  184 => 58,  179 => 57,  176 => 41,  168 => 52,  154 => 57,  144 => 44,  407 => 105,  400 => 100,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 96,  360 => 89,  350 => 84,  343 => 120,  338 => 119,  334 => 139,  331 => 169,  324 => 80,  319 => 133,  314 => 111,  309 => 158,  304 => 109,  290 => 106,  286 => 67,  283 => 104,  280 => 103,  273 => 64,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 86,  191 => 70,  185 => 66,  156 => 58,  123 => 47,  64 => 183,  20 => 11,  315 => 4,  296 => 70,  282 => 89,  248 => 129,  244 => 101,  240 => 72,  233 => 56,  229 => 122,  225 => 82,  220 => 80,  212 => 77,  209 => 62,  188 => 68,  177 => 47,  174 => 62,  128 => 36,  87 => 43,  74 => 50,  42 => 61,  161 => 34,  145 => 54,  126 => 48,  116 => 36,  99 => 47,  94 => 30,  91 => 20,  86 => 27,  83 => 24,  61 => 21,  73 => 29,  549 => 152,  543 => 161,  538 => 147,  530 => 155,  526 => 153,  522 => 141,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 126,  469 => 132,  466 => 131,  460 => 130,  455 => 118,  450 => 117,  444 => 122,  441 => 121,  437 => 115,  434 => 119,  429 => 114,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 101,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 97,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 79,  307 => 76,  302 => 74,  295 => 125,  287 => 148,  279 => 116,  256 => 81,  251 => 71,  239 => 84,  231 => 65,  219 => 67,  201 => 56,  143 => 61,  138 => 44,  134 => 32,  131 => 49,  122 => 37,  117 => 25,  108 => 34,  102 => 33,  92 => 18,  84 => 28,  72 => 198,  48 => 18,  35 => 16,  29 => 11,  69 => 197,  54 => 153,  51 => 24,  31 => 14,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 66,  277 => 102,  274 => 86,  271 => 81,  264 => 98,  261 => 81,  257 => 134,  253 => 77,  249 => 79,  247 => 70,  237 => 99,  204 => 87,  198 => 43,  194 => 64,  150 => 68,  147 => 67,  127 => 28,  112 => 27,  96 => 60,  76 => 13,  71 => 25,  55 => 21,  110 => 43,  89 => 17,  65 => 22,  63 => 13,  58 => 20,  34 => 52,  26 => 14,  24 => 12,  39 => 60,  38 => 17,  57 => 154,  43 => 20,  114 => 24,  109 => 25,  106 => 37,  101 => 61,  85 => 16,  77 => 56,  67 => 184,  47 => 74,  28 => 13,  50 => 19,  227 => 55,  224 => 54,  221 => 53,  207 => 71,  197 => 85,  195 => 42,  192 => 70,  189 => 82,  186 => 67,  181 => 79,  178 => 64,  173 => 49,  162 => 46,  158 => 33,  155 => 55,  152 => 31,  142 => 55,  136 => 44,  133 => 30,  130 => 29,  120 => 26,  105 => 49,  100 => 20,  75 => 39,  60 => 40,  53 => 19,  25 => 13,  19 => 11,  98 => 22,  88 => 17,  80 => 52,  78 => 40,  46 => 21,  44 => 73,  40 => 16,  36 => 16,  32 => 13,  27 => 8,  22 => 12,  232 => 96,  226 => 71,  222 => 119,  215 => 49,  211 => 47,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 100,  183 => 53,  180 => 65,  171 => 38,  166 => 36,  163 => 40,  160 => 72,  157 => 48,  149 => 36,  146 => 35,  140 => 60,  137 => 51,  129 => 48,  124 => 27,  121 => 56,  118 => 38,  115 => 67,  111 => 23,  107 => 22,  104 => 23,  97 => 39,  93 => 45,  90 => 36,  81 => 15,  70 => 33,  66 => 22,  62 => 165,  59 => 164,  56 => 20,  52 => 112,  49 => 111,  45 => 33,  41 => 16,  37 => 53,  33 => 15,  30 => 9,);
    }
}
