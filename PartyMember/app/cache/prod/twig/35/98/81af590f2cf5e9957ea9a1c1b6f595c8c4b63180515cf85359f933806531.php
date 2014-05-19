<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_359881af590f2cf5e9957ea9a1c1b6f595c8c4b63180515cf85359f933806531 extends Twig_Template
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
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo (isset($context["id"]) ? $context["id"] : null);
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
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".dialog('close');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();
                }
            });
        });
    }

    // handle the add link
    var field_dialog_form_list_";
        // line 100
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 111
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 122
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 126
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 129
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 134
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 136
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] close callback, removing js event');

                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 139
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 140
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 148
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 149
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 156
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        Admin.log('[";
        // line 158
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 166
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // populate the popup container
                field_dialog_";
        // line 169
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 173
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                jQuery('form', field_dialog_";
        // line 174
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 177
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".dialog({
                    height: 'auto',
                    width: 850,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 183
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 185
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] dialog closed - removing  events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 187
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 188
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 196
        echo (isset($context["id"]) ? $context["id"] : null);
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
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 210
        echo (isset($context["id"]) ? $context["id"] : null);
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
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 234
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 242
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 247
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".dialog('close');

                    ";
        // line 249
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
            // line 250
            echo "                        ";
            // line 254
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 255
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').change();

                    ";
        } else {
            // line 258
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 260
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 261
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => (isset($context["id"]) ? $context["id"] : null), "subclass" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "code")));
            // line 267
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 272
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 273
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 280
            echo (isset($context["id"]) ? $context["id"] : null);
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
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(data);

                Admin.add_pretty_errors(field_dialog_";
        // line 292
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 295
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 302
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;

    function initialize_popup_";
        // line 304
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 306
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
            field_dialog_";
        // line 307
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 310
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

            Admin.log('[";
        // line 312
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 319
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 321
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 326
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 330
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 337
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
        Admin.add_pretty_errors(field_dialog_";
        // line 338
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
    }

    ";
        // line 341
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
            // line 342
            echo "        ";
            // line 345
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 347
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 351
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 355
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 362
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 367
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 374
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 377
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " option').get(0)) {
                jQuery('#";
            // line 378
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 381
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val('');
            jQuery('#";
            // line 382
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 389
            echo "
        // update the label
        jQuery('#";
            // line 391
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 393
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "] update the label');

            jQuery('#field_widget_";
            // line 395
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 398
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "uniqid"), "code" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "code"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "link_parameters")));
            // line 403
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 406
            echo (isset($context["id"]) ? $context["id"] : null);
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
        return array (  694 => 412,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 255,  366 => 210,  361 => 208,  331 => 187,  272 => 158,  267 => 156,  232 => 136,  347 => 134,  338 => 130,  319 => 124,  277 => 109,  265 => 106,  262 => 105,  257 => 149,  248 => 100,  239 => 97,  213 => 126,  211 => 81,  253 => 148,  212 => 74,  210 => 73,  202 => 77,  185 => 59,  167 => 48,  137 => 37,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 403,  677 => 199,  675 => 198,  671 => 196,  668 => 395,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 330,  553 => 162,  550 => 326,  521 => 154,  518 => 307,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 132,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 169,  289 => 112,  270 => 4,  256 => 61,  250 => 60,  242 => 140,  228 => 88,  181 => 29,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 355,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 304,  507 => 157,  504 => 302,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 261,  425 => 175,  422 => 250,  420 => 249,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  358 => 139,  346 => 196,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 183,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 68,  266 => 66,  260 => 104,  251 => 101,  244 => 65,  225 => 87,  205 => 38,  200 => 55,  197 => 119,  194 => 53,  188 => 49,  184 => 30,  178 => 28,  129 => 59,  114 => 71,  77 => 27,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  575 => 170,  573 => 179,  567 => 337,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 306,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 295,  489 => 131,  485 => 143,  481 => 290,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 260,  424 => 254,  418 => 113,  415 => 247,  404 => 126,  401 => 86,  396 => 234,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  329 => 96,  327 => 126,  323 => 125,  320 => 115,  317 => 101,  307 => 82,  304 => 174,  301 => 117,  296 => 77,  281 => 110,  275 => 73,  255 => 71,  237 => 64,  233 => 81,  206 => 71,  198 => 66,  195 => 54,  192 => 64,  174 => 67,  172 => 51,  155 => 38,  148 => 60,  392 => 120,  389 => 103,  383 => 224,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 188,  332 => 85,  326 => 185,  324 => 82,  318 => 90,  315 => 123,  302 => 73,  299 => 116,  293 => 113,  287 => 68,  284 => 72,  282 => 66,  279 => 70,  276 => 64,  271 => 108,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  216 => 42,  186 => 111,  180 => 56,  175 => 53,  90 => 20,  83 => 32,  12 => 34,  52 => 78,  160 => 44,  152 => 92,  70 => 23,  20 => 11,  120 => 36,  118 => 28,  170 => 55,  165 => 64,  150 => 101,  146 => 99,  97 => 63,  84 => 16,  126 => 55,  113 => 44,  157 => 104,  153 => 49,  145 => 53,  139 => 31,  124 => 49,  110 => 25,  100 => 23,  65 => 83,  34 => 4,  104 => 67,  37 => 19,  134 => 56,  127 => 76,  81 => 15,  74 => 52,  96 => 90,  76 => 82,  58 => 19,  53 => 10,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 258,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 242,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 141,  362 => 178,  360 => 126,  355 => 124,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 177,  309 => 120,  305 => 119,  298 => 173,  294 => 83,  285 => 111,  283 => 166,  278 => 74,  268 => 107,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 69,  177 => 54,  169 => 66,  140 => 97,  132 => 57,  128 => 47,  111 => 30,  107 => 52,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  246 => 99,  243 => 98,  240 => 64,  238 => 139,  235 => 56,  230 => 61,  227 => 134,  224 => 51,  221 => 79,  219 => 129,  217 => 75,  208 => 124,  204 => 78,  179 => 107,  159 => 186,  143 => 59,  135 => 81,  131 => 55,  119 => 93,  108 => 28,  102 => 43,  71 => 55,  67 => 19,  63 => 22,  59 => 23,  47 => 43,  38 => 32,  94 => 35,  89 => 43,  85 => 30,  79 => 37,  75 => 31,  68 => 30,  56 => 40,  50 => 44,  29 => 21,  87 => 87,  72 => 10,  55 => 22,  21 => 11,  26 => 20,  98 => 37,  93 => 21,  88 => 60,  78 => 53,  46 => 19,  27 => 8,  40 => 20,  44 => 18,  35 => 15,  31 => 22,  43 => 33,  41 => 18,  28 => 13,  201 => 56,  196 => 65,  183 => 50,  171 => 102,  166 => 100,  163 => 45,  158 => 62,  156 => 93,  151 => 36,  142 => 58,  138 => 57,  136 => 155,  123 => 95,  121 => 75,  117 => 34,  115 => 33,  105 => 39,  101 => 49,  91 => 34,  69 => 50,  66 => 29,  62 => 24,  49 => 9,  24 => 3,  32 => 14,  25 => 12,  22 => 11,  19 => 11,  209 => 82,  203 => 122,  199 => 67,  193 => 33,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 42,  168 => 44,  164 => 59,  162 => 40,  154 => 40,  149 => 36,  147 => 90,  144 => 33,  141 => 48,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 45,  112 => 26,  109 => 69,  106 => 45,  103 => 50,  99 => 91,  95 => 22,  92 => 61,  86 => 17,  82 => 28,  80 => 84,  73 => 24,  64 => 28,  60 => 15,  57 => 80,  54 => 153,  51 => 38,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 9,);
    }
}
