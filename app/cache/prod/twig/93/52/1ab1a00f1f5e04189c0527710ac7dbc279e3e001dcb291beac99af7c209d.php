<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_93521ab1a00f1f5e04189c0527710ac7dbc279e3e001dcb291beac99af7c209d extends Twig_Template
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
";
        // line 21
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        $context["associationadmin"] = $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {
        initialize_popup_";
        // line 33
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_";
        // line 52
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').trigger('change');

        field_dialog_";
        // line 63
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".dialog('close');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "  =  function() {

        Admin.log('[";
        // line 69
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").on('click', field_dialog_form_list_link_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_";
        // line 92
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();
                }
            });
        });
    }

    // handle the add link
    var field_dialog_form_list_";
        // line 100
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {

        initialize_popup_";
        // line 102
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 111
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 122
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 124
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

                field_dialog_form_list_handle_action_";
        // line 126
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 129
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 134
        if (isset($context["associationadmin"])) { $_associationadmin_ = $context["associationadmin"]; } else { $_associationadmin_ = null; }
        echo $this->env->getExtension('translator')->trans($this->getAttribute($_associationadmin_, "label"), array(), $this->getAttribute($_associationadmin_, "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 136
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list] close callback, removing js event');

                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 139
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 140
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 148
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {
        initialize_popup_";
        // line 149
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 156
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html('');

        Admin.log('[";
        // line 158
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 166
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

                // populate the popup container
                field_dialog_";
        // line 169
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 173
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").on('click', field_dialog_form_action_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");
                jQuery('form', field_dialog_";
        // line 174
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").on('submit', field_dialog_form_action_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 177
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".dialog({
                    height: 'auto',
                    width: 850,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 183
        if (isset($context["associationadmin"])) { $_associationadmin_ = $context["associationadmin"]; } else { $_associationadmin_ = null; }
        echo $this->env->getExtension('translator')->trans($this->getAttribute($_associationadmin_, "label"), array(), $this->getAttribute($_associationadmin_, "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 185
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_add] dialog closed - removing  events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 187
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 188
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 196
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 208
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 210
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 224
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 234
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 242
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 247
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".dialog('close');

                    ";
        // line 249
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (($this->getAttribute($_sonata_admin_, "edit") == "list")) {
            // line 250
            echo "                        ";
            // line 254
            echo "                        jQuery('#";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').val(data.objectId);
                        jQuery('#";
            // line 255
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').change();

                    ";
        } else {
            // line 258
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 260
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 261
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => $_id_, "subclass" => $this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "code")));
            // line 267
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 272
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 273
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 280
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 285
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 290
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(data);

                Admin.add_pretty_errors(field_dialog_";
        // line 292
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 295
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").submit(field_dialog_form_action_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 302
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = false;

    function initialize_popup_";
        // line 304
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 306
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ") {
            field_dialog_";
        // line 307
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = jQuery(\"#field_dialog_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 310
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

            Admin.log('[";
        // line 312
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 319
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 321
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 326
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 330
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 337
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ") {
        Admin.add_pretty_errors(field_dialog_";
        // line 338
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");
    }

    ";
        // line 341
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (($this->getAttribute($_sonata_admin_, "edit") == "list")) {
            // line 342
            echo "        ";
            // line 345
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 347
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 351
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 355
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 362
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 367
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 374
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 377
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo " option').get(0)) {
                jQuery('#";
            // line 378
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 381
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').val('');
            jQuery('#";
            // line 382
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').trigger('change');

            return false;
        }
        ";
            // line 389
            echo "
        // update the label
        jQuery('#";
            // line 391
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 393
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "] update the label');

            jQuery('#field_widget_";
            // line 395
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 398
            if (isset($context["associationadmin"])) { $_associationadmin_ = $context["associationadmin"]; } else { $_associationadmin_ = null; }
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute($_associationadmin_, "uniqid"), "code" => $this->getAttribute($_associationadmin_, "code"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "link_parameters")));
            // line 403
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 406
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 412
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  793 => 412,  783 => 406,  778 => 403,  774 => 398,  763 => 395,  757 => 393,  751 => 391,  747 => 389,  739 => 382,  734 => 381,  727 => 378,  722 => 377,  715 => 374,  704 => 367,  695 => 362,  684 => 355,  676 => 351,  668 => 347,  664 => 345,  662 => 342,  659 => 341,  652 => 338,  647 => 337,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  560 => 295,  553 => 292,  547 => 290,  540 => 285,  531 => 280,  520 => 273,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  482 => 254,  480 => 250,  477 => 249,  471 => 247,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  347 => 174,  339 => 173,  303 => 156,  292 => 149,  275 => 140,  270 => 139,  235 => 124,  210 => 111,  165 => 90,  172 => 62,  153 => 57,  82 => 57,  23 => 18,  170 => 61,  164 => 59,  151 => 56,  135 => 75,  119 => 46,  103 => 40,  641 => 186,  638 => 185,  636 => 330,  628 => 326,  624 => 178,  616 => 175,  608 => 172,  602 => 170,  597 => 169,  594 => 168,  590 => 167,  584 => 166,  580 => 304,  577 => 163,  574 => 302,  566 => 157,  559 => 154,  554 => 153,  533 => 146,  516 => 139,  510 => 137,  503 => 134,  495 => 258,  492 => 129,  485 => 126,  476 => 122,  468 => 119,  462 => 242,  457 => 116,  446 => 113,  443 => 112,  440 => 111,  435 => 108,  428 => 106,  425 => 105,  421 => 103,  397 => 99,  393 => 97,  376 => 93,  363 => 90,  357 => 177,  354 => 87,  345 => 83,  340 => 82,  335 => 81,  316 => 78,  298 => 77,  272 => 70,  260 => 68,  213 => 77,  169 => 48,  159 => 45,  113 => 44,  95 => 30,  79 => 31,  21 => 11,  372 => 122,  370 => 92,  358 => 115,  342 => 109,  336 => 107,  328 => 105,  301 => 98,  297 => 96,  294 => 95,  291 => 93,  268 => 84,  263 => 136,  252 => 67,  246 => 78,  241 => 126,  234 => 87,  205 => 74,  199 => 72,  190 => 55,  184 => 58,  179 => 57,  176 => 93,  168 => 52,  154 => 57,  144 => 44,  407 => 102,  400 => 100,  392 => 135,  387 => 134,  383 => 132,  380 => 131,  377 => 130,  360 => 89,  350 => 84,  343 => 120,  338 => 119,  334 => 117,  331 => 169,  324 => 104,  319 => 103,  314 => 111,  309 => 158,  304 => 109,  290 => 106,  286 => 105,  283 => 104,  280 => 103,  273 => 101,  269 => 100,  267 => 99,  259 => 97,  245 => 87,  230 => 81,  223 => 78,  200 => 69,  191 => 70,  185 => 66,  156 => 58,  123 => 47,  64 => 22,  20 => 11,  315 => 4,  296 => 108,  282 => 89,  248 => 129,  244 => 73,  240 => 72,  233 => 82,  229 => 122,  225 => 82,  220 => 80,  212 => 77,  209 => 62,  188 => 68,  177 => 47,  174 => 62,  128 => 36,  87 => 29,  74 => 50,  42 => 13,  161 => 50,  145 => 54,  126 => 48,  116 => 36,  99 => 34,  94 => 33,  91 => 20,  86 => 34,  83 => 24,  61 => 21,  73 => 29,  549 => 152,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 234,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 123,  365 => 126,  362 => 117,  359 => 97,  355 => 124,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 166,  307 => 99,  302 => 84,  295 => 81,  287 => 148,  279 => 78,  256 => 81,  251 => 71,  239 => 84,  231 => 65,  219 => 67,  201 => 56,  143 => 76,  138 => 44,  134 => 32,  131 => 49,  122 => 37,  117 => 36,  108 => 34,  102 => 33,  92 => 25,  84 => 28,  72 => 19,  48 => 18,  35 => 16,  29 => 21,  69 => 23,  54 => 38,  51 => 19,  31 => 15,  312 => 100,  308 => 94,  293 => 74,  285 => 90,  281 => 88,  277 => 102,  274 => 86,  271 => 81,  264 => 98,  261 => 81,  257 => 134,  253 => 77,  249 => 79,  247 => 70,  237 => 71,  204 => 74,  198 => 72,  194 => 64,  150 => 57,  147 => 45,  127 => 71,  112 => 27,  96 => 60,  76 => 30,  71 => 25,  55 => 21,  110 => 43,  89 => 32,  65 => 22,  63 => 13,  58 => 20,  34 => 16,  26 => 20,  24 => 12,  39 => 32,  38 => 17,  57 => 20,  43 => 18,  114 => 39,  109 => 25,  106 => 37,  101 => 61,  85 => 53,  77 => 56,  67 => 22,  47 => 35,  28 => 14,  50 => 19,  227 => 70,  224 => 91,  221 => 80,  207 => 71,  197 => 57,  195 => 71,  192 => 70,  189 => 61,  186 => 67,  181 => 64,  178 => 64,  173 => 49,  162 => 46,  158 => 58,  155 => 55,  152 => 81,  142 => 55,  136 => 44,  133 => 41,  130 => 40,  120 => 37,  105 => 26,  100 => 27,  75 => 26,  60 => 40,  53 => 19,  25 => 13,  19 => 11,  98 => 22,  88 => 17,  80 => 52,  78 => 24,  46 => 19,  44 => 7,  40 => 16,  36 => 16,  32 => 22,  27 => 8,  22 => 12,  232 => 72,  226 => 71,  222 => 119,  215 => 68,  211 => 84,  208 => 66,  202 => 107,  196 => 71,  193 => 102,  187 => 100,  183 => 53,  180 => 65,  171 => 92,  166 => 60,  163 => 40,  160 => 59,  157 => 48,  149 => 36,  146 => 35,  140 => 43,  137 => 51,  129 => 48,  124 => 34,  121 => 69,  118 => 38,  115 => 67,  111 => 32,  107 => 63,  104 => 23,  97 => 39,  93 => 64,  90 => 36,  81 => 25,  70 => 25,  66 => 22,  62 => 49,  59 => 21,  56 => 20,  52 => 9,  49 => 9,  45 => 33,  41 => 16,  37 => 17,  33 => 15,  30 => 9,);
    }
}
