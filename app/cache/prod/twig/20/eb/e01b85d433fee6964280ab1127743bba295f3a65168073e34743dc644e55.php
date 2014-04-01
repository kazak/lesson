<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_20ebe01b85d433fee6964280ab1127743bba295f3a65168073e34743dc644e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu_before' => array($this, 'block_sonata_nav_menu_before'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'sonata_top_bar_search' => array($this, 'block_sonata_top_bar_search'),
            'sonata_nav_menu_after' => array($this, 'block_sonata_nav_menu_after'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'notice' => array($this, 'block_notice'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta charset=\"UTF-8\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
        <title>
            ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 86
        if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
        if ((!twig_test_empty($__title_))) {
            // line 87
            echo "                ";
            if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
            echo $__title_;
            echo "
            ";
        } else {
            // line 89
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 90
                echo "                    -
                    ";
                // line 91
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "breadcrumbs", array(0 => $_action_), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 92
                    echo "                        ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ((!$this->getAttribute($_loop_, "first"))) {
                        // line 93
                        echo "                            &gt;
                        ";
                    }
                    // line 95
                    echo "                        ";
                    if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                ";
            }
            // line 98
            echo "            ";
        }
        // line 99
        echo "        </title>
    </head>
    <body ";
        // line 101
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 103
        echo "
        ";
        // line 104
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 186
        echo "
        <div class=\"container-fluid\">
            ";
        // line 188
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 281
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" media=\"all\">

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" media=\"all\">

            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/x-editable/css/bootstrap-editable.css"), "html", null, true);
        echo "\" media=\"all\">

            ";
        // line 37
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "use_select2"), "method"))) {
            // line 38
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.css"), "html", null, true);
            echo "\" media=\"all\">
                <style>
                    div.select2-container {
                        margin-left: 0px !important;
                    }

                    div.select2-drop ul {
                        margin: 0px !important;
                    }
                </style>
            ";
        }
        // line 49
        echo "
            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" media=\"all\">

        ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 59
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 60
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 61
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 63
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/x-editable/js/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 74
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "use_select2"), "method"))) {
            // line 75
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.min.js"), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 79
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\"></script>";
        }
        // line 80
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 101
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc ";
        if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
        if (twig_test_empty($__side_menu_)) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\"";
    }

    // line 104
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 105
        echo "            <div class=\"navbar navbar-fixed-top\">
                <div class=\"navbar-inner\">
                    <div class=\"container-fluid\">
                        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>

                        ";
        // line 114
        if (array_key_exists("admin_pool", $context)) {
            // line 115
            echo "                            <div class=\"navbar-text pull-right\">";
            if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
            $template = $this->env->resolveTemplate($this->getAttribute($_admin_pool_, "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                            ";
            // line 117
            $this->displayBlock('logo', $context, $blocks);
            // line 123
            echo "
                            ";
            // line 124
            $this->displayBlock('sonata_nav_menu_before', $context, $blocks);
            // line 125
            echo "
                            ";
            // line 126
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 178
            echo "
                            ";
            // line 179
            $this->displayBlock('sonata_nav_menu_after', $context, $blocks);
            // line 180
            echo "
                        ";
        }
        // line 182
        echo "                    </div>
                </div>
            </div>
        ";
    }

    // line 117
    public function block_logo($context, array $blocks = array())
    {
        // line 118
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                    <img src=\"";
        // line 119
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_admin_pool_, "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_pool_, "title"), "html", null, true);
        echo "\">
                                    ";
        // line 120
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_pool_, "title"), "html", null, true);
        echo "
                                </a>
                            ";
    }

    // line 124
    public function block_sonata_nav_menu_before($context, array $blocks = array())
    {
    }

    // line 126
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 127
        echo "                                <div class=\"nav-collapse\">
                                    <ul class=\"nav\">
                                        ";
        // line 129
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 130
        echo "                                        ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 163
        echo "                                        ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 164
        echo "                                    </ul>

                                    ";
        // line 166
        $this->displayBlock('sonata_top_bar_search', $context, $blocks);
        // line 175
        echo "
                                </div>
                            ";
    }

    // line 129
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 130
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 131
        echo "                                            ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 132
            echo "                                                ";
            if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_pool_, "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 133
                echo "                                                    ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context["display"] = (twig_test_empty($this->getAttribute($_group_, "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 134
                echo "                                                    ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                    if ((!$_display_)) {
                        // line 135
                        echo "                                                        ";
                        if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
                        $context["display"] = $this->env->getExtension('security')->isGranted($_role_);
                        // line 136
                        echo "                                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "
                                                    ";
                // line 139
                echo "                                                    ";
                $context["item_count"] = 0;
                // line 140
                echo "                                                    ";
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if ($_display_) {
                    // line 141
                    echo "                                                        ";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                        if (($_item_count_ == 0)) {
                            // line 142
                            echo "                                                            ";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            if (($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method"))) {
                                // line 143
                                echo "                                                                ";
                                if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                                $context["item_count"] = ($_item_count_ + 1);
                                // line 144
                                echo "                                                            ";
                            }
                            // line 145
                            echo "                                                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                                                    ";
                }
                // line 147
                echo "
                                                    ";
                // line 148
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                if (($_display_ && ($_item_count_ > 0))) {
                    // line 149
                    echo "                                                    <li class=\"dropdown\">
                                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 150
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_group_, "label"), array(), $this->getAttribute($_group_, "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                        <ul class=\"dropdown-menu\">
                                                            ";
                    // line 152
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 153
                        echo "                                                                ";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        if (($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method"))) {
                            // line 154
                            echo "                                                                    <li";
                            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($_admin_, "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_admin_, "label"), array(), $this->getAttribute($_admin_, "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 156
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "                                                        </ul>
                                                    </li>
                                                    ";
                }
                // line 160
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                                            ";
        }
        // line 162
        echo "                                        ";
    }

    // line 163
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 166
    public function block_sonata_top_bar_search($context, array $blocks = array())
    {
        // line 167
        echo "                                        ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 168
            echo "                                            <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\"  class=\"navbar-search\">
                                                <div class=\"input-append\">
                                                    <input type=\"text\" name=\"q\" value=\"";
            // line 170
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"input-large search-query\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                </div>
                                            </form>
                                        ";
        }
        // line 174
        echo "                                    ";
    }

    // line 179
    public function block_sonata_nav_menu_after($context, array $blocks = array())
    {
    }

    // line 188
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 189
        echo "                ";
        $this->displayBlock('notice', $context, $blocks);
        // line 192
        echo "
                <div class=\"row-fluid\">
                    ";
        // line 194
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 222
        echo "
                    ";
        // line 223
        if (isset($context["_actions"])) { $__actions_ = $context["_actions"]; } else { $__actions_ = null; }
        if ((!twig_test_empty($__actions_))) {
            // line 224
            echo "                        <div class=\"span4 offset2\">
                            ";
            // line 225
            if (isset($context["_actions"])) { $__actions_ = $context["_actions"]; } else { $__actions_ = null; }
            echo $__actions_;
            echo "
                        </div>
                    ";
        }
        // line 228
        echo "                </div>

                <div class=\"row-fluid\">
                    ";
        // line 231
        if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
        if ((!twig_test_empty($__side_menu_))) {
            // line 232
            echo "                        <div class=\"sidebar span2\">
                            <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 233
            if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
            echo $__side_menu_;
            echo "</div>
                        </div>
                    ";
        }
        // line 236
        echo "
                    <div class=\"content ";
        // line 237
        if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
        echo (((!twig_test_empty($__side_menu_))) ? (" span10") : ("span12"));
        echo "\">
                        ";
        // line 238
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 270
        echo "                    </div>
                </div>

                ";
        // line 273
        $this->displayBlock('footer', $context, $blocks);
        // line 280
        echo "            ";
    }

    // line 189
    public function block_notice($context, array $blocks = array())
    {
        // line 190
        echo "                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 191
        echo "                ";
    }

    // line 194
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 195
        echo "                        ";
        if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
        if (((!twig_test_empty($__breadcrumb_)) || array_key_exists("action", $context))) {
            // line 196
            echo "                            <div class=\"span6\">
                                <ul class=\"breadcrumb\">
                                    ";
            // line 198
            if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
            if (twig_test_empty($__breadcrumb_)) {
                // line 199
                echo "                                        ";
                if (array_key_exists("action", $context)) {
                    // line 200
                    echo "                                            ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "breadcrumbs", array(0 => $_action_), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 201
                        echo "                                                ";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        if ((!$this->getAttribute($_loop_, "last"))) {
                            // line 202
                            echo "                                                    <li>
                                                        ";
                            // line 203
                            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                            if ((!twig_test_empty($this->getAttribute($_menu_, "uri")))) {
                                // line 204
                                echo "                                                            <a href=\"";
                                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "uri"), "html", null, true);
                                echo "\">";
                                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
                                echo "</a>
                                                        ";
                            } else {
                                // line 206
                                echo "                                                            ";
                                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
                                echo "
                                                        ";
                            }
                            // line 208
                            echo "                                                        <span class=\"divider\">/</span>
                                                    </li>
                                                ";
                        } else {
                            // line 211
                            echo "                                                    <li class=\"active\">";
                            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
                            echo "</li>
                                                ";
                        }
                        // line 213
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "                                        ";
                }
                // line 215
                echo "                                    ";
            } else {
                // line 216
                echo "                                        ";
                if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
                echo $__breadcrumb_;
                echo "
                                    ";
            }
            // line 218
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 221
        echo "                    ";
    }

    // line 238
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 239
        echo "
                            ";
        // line 240
        if (isset($context["_preview"])) { $__preview_ = $context["_preview"]; } else { $__preview_ = null; }
        if ((!twig_test_empty($__preview_))) {
            // line 241
            echo "                                <div class=\"sonata-ba-preview\">";
            if (isset($context["_preview"])) { $__preview_ = $context["_preview"]; } else { $__preview_ = null; }
            echo $__preview_;
            echo "</div>
                            ";
        }
        // line 243
        echo "
                            ";
        // line 244
        if (isset($context["_content"])) { $__content_ = $context["_content"]; } else { $__content_ = null; }
        if ((!twig_test_empty($__content_))) {
            // line 245
            echo "                                <div class=\"sonata-ba-content\">";
            if (isset($context["_content"])) { $__content_ = $context["_content"]; } else { $__content_ = null; }
            echo $__content_;
            echo "</div>
                            ";
        }
        // line 247
        echo "
                            ";
        // line 248
        if (isset($context["_show"])) { $__show_ = $context["_show"]; } else { $__show_ = null; }
        if ((!twig_test_empty($__show_))) {
            // line 249
            echo "                                <div class=\"sonata-ba-show\">";
            if (isset($context["_show"])) { $__show_ = $context["_show"]; } else { $__show_ = null; }
            echo $__show_;
            echo "</div>
                            ";
        }
        // line 251
        echo "
                            ";
        // line 252
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if ((!twig_test_empty($__form_))) {
            // line 253
            echo "                                <div class=\"sonata-ba-form\">";
            if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
            echo $__form_;
            echo "</div>
                            ";
        }
        // line 255
        echo "
                            ";
        // line 256
        if (isset($context["_list_table"])) { $__list_table_ = $context["_list_table"]; } else { $__list_table_ = null; }
        if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
        if (((!twig_test_empty($__list_table_)) || (!twig_test_empty($__list_filters_)))) {
            // line 257
            echo "                                <div class=\"row-fluid\">
                                    <div class=\"sonata-ba-list ";
            // line 258
            if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
            if (trim($__list_filters_)) {
                echo "span10";
            } else {
                echo "span12";
            }
            echo "\">
                                        ";
            // line 259
            if (isset($context["_list_table"])) { $__list_table_ = $context["_list_table"]; } else { $__list_table_ = null; }
            echo $__list_table_;
            echo "
                                    </div>
                                    ";
            // line 261
            if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
            if (trim($__list_filters_)) {
                // line 262
                echo "                                        <div class=\"sonata-ba-filter span2\">
                                            ";
                // line 263
                if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
                echo $__list_filters_;
                echo "
                                        </div>
                                    ";
            }
            // line 266
            echo "                                </div>
                            ";
        }
        // line 268
        echo "
                        ";
    }

    // line 273
    public function block_footer($context, array $blocks = array())
    {
        // line 274
        echo "                    <div class=\"row-fluid\">
                        <div class=\"span2 offset10 pull-right\">
                            <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                        </div>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  925 => 274,  922 => 273,  917 => 268,  913 => 266,  906 => 263,  903 => 262,  900 => 261,  894 => 259,  885 => 258,  882 => 257,  878 => 256,  875 => 255,  868 => 253,  865 => 252,  862 => 251,  855 => 249,  852 => 248,  849 => 247,  842 => 245,  839 => 244,  836 => 243,  829 => 241,  826 => 240,  823 => 239,  820 => 238,  816 => 221,  811 => 218,  804 => 216,  801 => 215,  798 => 214,  784 => 213,  777 => 211,  772 => 208,  765 => 206,  749 => 202,  745 => 201,  725 => 200,  719 => 198,  711 => 195,  708 => 194,  701 => 190,  698 => 189,  692 => 273,  687 => 270,  685 => 238,  680 => 237,  677 => 236,  670 => 233,  667 => 232,  649 => 224,  646 => 223,  643 => 222,  626 => 179,  622 => 174,  606 => 168,  589 => 162,  569 => 156,  528 => 147,  511 => 143,  507 => 142,  478 => 135,  470 => 134,  456 => 131,  453 => 130,  439 => 166,  399 => 119,  391 => 117,  378 => 179,  310 => 78,  265 => 61,  242 => 56,  182 => 68,  12 => 34,  419 => 96,  415 => 124,  402 => 92,  398 => 91,  395 => 90,  386 => 88,  368 => 124,  320 => 67,  317 => 66,  306 => 59,  262 => 47,  254 => 45,  139 => 45,  148 => 47,  696 => 193,  683 => 191,  657 => 183,  654 => 182,  648 => 178,  637 => 192,  631 => 188,  618 => 172,  613 => 171,  599 => 166,  593 => 163,  572 => 156,  568 => 143,  565 => 142,  556 => 140,  544 => 152,  541 => 130,  536 => 113,  523 => 111,  518 => 145,  506 => 105,  501 => 104,  454 => 88,  449 => 144,  447 => 129,  432 => 163,  427 => 129,  382 => 123,  374 => 85,  356 => 86,  346 => 83,  323 => 77,  236 => 60,  228 => 39,  218 => 55,  125 => 47,  68 => 25,  812 => 213,  805 => 210,  802 => 209,  799 => 208,  792 => 205,  779 => 204,  773 => 202,  758 => 200,  755 => 204,  752 => 203,  743 => 193,  740 => 192,  723 => 190,  705 => 189,  699 => 187,  694 => 280,  691 => 185,  688 => 184,  682 => 180,  678 => 190,  675 => 177,  669 => 187,  634 => 189,  629 => 172,  621 => 173,  612 => 170,  609 => 167,  604 => 165,  587 => 157,  582 => 155,  579 => 154,  575 => 157,  567 => 131,  555 => 128,  552 => 127,  545 => 149,  535 => 149,  532 => 145,  525 => 146,  519 => 140,  513 => 138,  493 => 136,  489 => 137,  486 => 134,  484 => 127,  461 => 120,  458 => 119,  424 => 113,  411 => 106,  404 => 104,  389 => 100,  385 => 99,  381 => 87,  364 => 88,  361 => 90,  349 => 84,  333 => 83,  326 => 81,  311 => 64,  305 => 75,  278 => 65,  203 => 45,  353 => 114,  341 => 141,  337 => 72,  325 => 68,  313 => 131,  288 => 70,  266 => 62,  258 => 60,  250 => 103,  216 => 90,  175 => 77,  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 199,  715 => 196,  704 => 191,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 231,  662 => 342,  659 => 228,  652 => 225,  647 => 337,  619 => 321,  615 => 319,  607 => 169,  601 => 310,  591 => 307,  586 => 161,  560 => 141,  553 => 154,  547 => 290,  540 => 285,  531 => 148,  520 => 273,  515 => 144,  508 => 267,  504 => 261,  499 => 141,  482 => 136,  480 => 91,  477 => 90,  471 => 116,  436 => 224,  418 => 210,  412 => 94,  396 => 196,  384 => 182,  379 => 187,  373 => 126,  367 => 118,  347 => 143,  339 => 104,  303 => 58,  292 => 72,  275 => 66,  270 => 139,  235 => 52,  210 => 38,  165 => 186,  172 => 62,  153 => 47,  82 => 26,  23 => 12,  170 => 61,  164 => 59,  151 => 48,  135 => 51,  119 => 44,  103 => 33,  641 => 194,  638 => 185,  636 => 330,  628 => 326,  624 => 171,  616 => 169,  608 => 172,  602 => 167,  597 => 169,  594 => 160,  590 => 158,  584 => 164,  580 => 160,  577 => 162,  574 => 302,  566 => 157,  559 => 129,  554 => 153,  533 => 146,  516 => 139,  510 => 106,  503 => 134,  495 => 140,  492 => 139,  485 => 126,  476 => 122,  468 => 115,  462 => 100,  457 => 89,  446 => 113,  443 => 116,  440 => 111,  435 => 164,  428 => 106,  425 => 98,  421 => 112,  397 => 102,  393 => 97,  376 => 93,  363 => 117,  357 => 177,  354 => 79,  345 => 86,  340 => 73,  335 => 81,  316 => 75,  298 => 74,  272 => 113,  260 => 68,  213 => 77,  169 => 188,  159 => 58,  113 => 41,  95 => 89,  79 => 25,  21 => 11,  372 => 94,  370 => 125,  358 => 89,  342 => 105,  336 => 107,  328 => 101,  301 => 75,  297 => 126,  294 => 95,  291 => 93,  268 => 63,  263 => 61,  252 => 61,  246 => 78,  241 => 100,  234 => 59,  205 => 74,  199 => 33,  190 => 30,  184 => 28,  179 => 60,  176 => 64,  168 => 63,  154 => 49,  144 => 44,  407 => 120,  400 => 124,  392 => 135,  387 => 134,  383 => 132,  380 => 180,  377 => 86,  360 => 89,  350 => 84,  343 => 82,  338 => 79,  334 => 139,  331 => 70,  324 => 80,  319 => 76,  314 => 79,  309 => 158,  304 => 109,  290 => 106,  286 => 68,  283 => 68,  280 => 67,  273 => 64,  269 => 63,  267 => 48,  259 => 97,  245 => 57,  230 => 81,  223 => 78,  200 => 51,  191 => 70,  185 => 66,  156 => 101,  123 => 46,  64 => 26,  20 => 11,  315 => 4,  296 => 70,  282 => 89,  248 => 129,  244 => 42,  240 => 72,  233 => 56,  229 => 122,  225 => 82,  220 => 80,  212 => 38,  209 => 37,  188 => 69,  177 => 40,  174 => 62,  128 => 95,  87 => 31,  74 => 56,  42 => 25,  161 => 26,  145 => 46,  126 => 47,  116 => 40,  99 => 37,  94 => 35,  91 => 33,  86 => 25,  83 => 30,  61 => 27,  73 => 31,  549 => 153,  543 => 161,  538 => 150,  530 => 155,  526 => 153,  522 => 141,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 126,  469 => 132,  466 => 133,  460 => 132,  455 => 118,  450 => 117,  444 => 104,  441 => 175,  437 => 133,  434 => 119,  429 => 130,  423 => 127,  420 => 126,  416 => 110,  413 => 125,  408 => 106,  394 => 118,  390 => 103,  375 => 178,  365 => 123,  362 => 117,  359 => 80,  355 => 115,  348 => 76,  344 => 74,  330 => 89,  327 => 88,  321 => 80,  307 => 77,  302 => 74,  295 => 73,  287 => 148,  279 => 67,  256 => 81,  251 => 71,  239 => 84,  231 => 51,  219 => 67,  201 => 56,  143 => 25,  138 => 52,  134 => 43,  131 => 52,  122 => 44,  117 => 48,  108 => 46,  102 => 38,  92 => 37,  84 => 33,  72 => 29,  48 => 20,  35 => 16,  29 => 14,  69 => 28,  54 => 23,  51 => 18,  31 => 15,  312 => 100,  308 => 94,  293 => 72,  285 => 90,  281 => 51,  277 => 66,  274 => 86,  271 => 81,  264 => 98,  261 => 62,  257 => 46,  253 => 77,  249 => 59,  247 => 43,  237 => 99,  204 => 35,  198 => 72,  194 => 49,  150 => 46,  147 => 45,  127 => 42,  112 => 39,  96 => 32,  76 => 82,  71 => 55,  55 => 20,  110 => 40,  89 => 31,  65 => 24,  63 => 18,  58 => 26,  34 => 15,  26 => 13,  24 => 14,  39 => 12,  38 => 18,  57 => 21,  43 => 14,  114 => 44,  109 => 23,  106 => 39,  101 => 91,  85 => 86,  77 => 24,  67 => 27,  47 => 16,  28 => 14,  50 => 15,  227 => 49,  224 => 54,  221 => 53,  207 => 37,  197 => 50,  195 => 32,  192 => 71,  189 => 47,  186 => 67,  181 => 79,  178 => 22,  173 => 53,  162 => 46,  158 => 35,  155 => 53,  152 => 99,  142 => 46,  136 => 55,  133 => 44,  130 => 50,  120 => 92,  105 => 19,  100 => 32,  75 => 31,  60 => 22,  53 => 19,  25 => 13,  19 => 11,  98 => 90,  88 => 87,  80 => 84,  78 => 29,  46 => 21,  44 => 21,  40 => 18,  36 => 16,  32 => 15,  27 => 13,  22 => 12,  232 => 96,  226 => 71,  222 => 56,  215 => 49,  211 => 47,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 29,  183 => 44,  180 => 65,  171 => 281,  166 => 52,  163 => 104,  160 => 103,  157 => 49,  149 => 98,  146 => 97,  140 => 44,  137 => 44,  129 => 42,  124 => 93,  121 => 39,  118 => 38,  115 => 42,  111 => 35,  107 => 38,  104 => 36,  97 => 31,  93 => 42,  90 => 15,  81 => 21,  70 => 33,  66 => 17,  62 => 23,  59 => 24,  56 => 23,  52 => 22,  49 => 17,  45 => 15,  41 => 13,  37 => 11,  33 => 17,  30 => 14,);
    }
}
