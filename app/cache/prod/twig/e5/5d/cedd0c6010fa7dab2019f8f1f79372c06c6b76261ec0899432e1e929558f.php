<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_e55dcedd0c6010fa7dab2019f8f1f79372c06c6b76261ec0899432e1e929558f extends Twig_Template
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
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "code"), "elementId" => $_id_, "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = jQuery(\"#field_widget_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 57,  23 => 18,  170 => 61,  164 => 59,  151 => 56,  135 => 50,  119 => 46,  103 => 40,  641 => 186,  638 => 185,  636 => 184,  628 => 180,  624 => 178,  616 => 175,  608 => 172,  602 => 170,  597 => 169,  594 => 168,  590 => 167,  584 => 166,  580 => 164,  577 => 163,  574 => 161,  566 => 157,  559 => 154,  554 => 153,  533 => 146,  516 => 139,  510 => 137,  503 => 134,  495 => 130,  492 => 129,  485 => 126,  476 => 122,  468 => 119,  462 => 117,  457 => 116,  446 => 113,  443 => 112,  440 => 111,  435 => 108,  428 => 106,  425 => 105,  421 => 103,  397 => 99,  393 => 97,  376 => 93,  363 => 90,  357 => 88,  354 => 87,  345 => 83,  340 => 82,  335 => 81,  316 => 78,  298 => 77,  272 => 70,  260 => 68,  213 => 64,  169 => 48,  159 => 45,  113 => 44,  95 => 30,  79 => 31,  21 => 11,  372 => 122,  370 => 92,  358 => 115,  342 => 109,  336 => 107,  328 => 105,  301 => 98,  297 => 96,  294 => 95,  291 => 93,  268 => 84,  263 => 83,  252 => 67,  246 => 78,  241 => 75,  234 => 88,  205 => 61,  199 => 63,  190 => 55,  184 => 58,  179 => 57,  176 => 50,  168 => 52,  154 => 57,  144 => 44,  407 => 102,  400 => 100,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 130,  360 => 89,  350 => 84,  343 => 120,  338 => 119,  334 => 117,  331 => 106,  324 => 104,  319 => 103,  314 => 111,  309 => 110,  304 => 109,  290 => 106,  286 => 105,  283 => 104,  280 => 103,  273 => 101,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 69,  191 => 70,  185 => 66,  156 => 44,  123 => 47,  64 => 22,  20 => 11,  315 => 4,  296 => 108,  282 => 89,  248 => 88,  244 => 73,  240 => 72,  233 => 82,  229 => 66,  225 => 83,  220 => 80,  212 => 77,  209 => 62,  188 => 51,  177 => 47,  174 => 62,  128 => 36,  87 => 29,  74 => 11,  42 => 13,  161 => 50,  145 => 41,  126 => 28,  116 => 36,  99 => 34,  94 => 33,  91 => 20,  86 => 34,  83 => 24,  61 => 20,  73 => 29,  549 => 152,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 128,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 114,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 97,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 99,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 81,  251 => 71,  239 => 84,  231 => 65,  219 => 67,  201 => 56,  143 => 53,  138 => 44,  134 => 32,  131 => 31,  122 => 37,  117 => 36,  108 => 34,  102 => 33,  92 => 25,  84 => 28,  72 => 19,  48 => 18,  35 => 16,  29 => 15,  69 => 23,  54 => 17,  51 => 40,  31 => 15,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 88,  277 => 102,  274 => 86,  271 => 81,  264 => 98,  261 => 81,  257 => 79,  253 => 77,  249 => 79,  247 => 70,  237 => 71,  204 => 74,  198 => 72,  194 => 64,  150 => 57,  147 => 45,  127 => 39,  112 => 27,  96 => 25,  76 => 30,  71 => 25,  55 => 21,  110 => 73,  89 => 32,  65 => 22,  63 => 13,  58 => 18,  34 => 26,  26 => 20,  24 => 12,  39 => 16,  38 => 17,  57 => 20,  43 => 17,  114 => 39,  109 => 25,  106 => 37,  101 => 68,  85 => 29,  77 => 56,  67 => 50,  47 => 35,  28 => 14,  50 => 19,  227 => 70,  224 => 91,  221 => 69,  207 => 71,  197 => 57,  195 => 71,  192 => 72,  189 => 61,  186 => 67,  181 => 64,  178 => 64,  173 => 49,  162 => 46,  158 => 58,  155 => 55,  152 => 55,  142 => 55,  136 => 44,  133 => 41,  130 => 40,  120 => 37,  105 => 26,  100 => 27,  75 => 26,  60 => 21,  53 => 19,  25 => 13,  19 => 11,  98 => 22,  88 => 17,  80 => 23,  78 => 28,  46 => 19,  44 => 7,  40 => 16,  36 => 15,  32 => 16,  27 => 8,  22 => 12,  232 => 72,  226 => 71,  222 => 76,  215 => 68,  211 => 84,  208 => 66,  202 => 60,  196 => 54,  193 => 53,  187 => 62,  183 => 53,  180 => 48,  171 => 44,  166 => 41,  163 => 40,  160 => 49,  157 => 48,  149 => 36,  146 => 35,  140 => 43,  137 => 54,  129 => 48,  124 => 34,  121 => 77,  118 => 38,  115 => 30,  111 => 32,  107 => 28,  104 => 23,  97 => 39,  93 => 64,  90 => 36,  81 => 15,  70 => 25,  66 => 22,  62 => 49,  59 => 21,  56 => 20,  52 => 9,  49 => 9,  45 => 17,  41 => 16,  37 => 17,  33 => 15,  30 => 9,);
    }
}
