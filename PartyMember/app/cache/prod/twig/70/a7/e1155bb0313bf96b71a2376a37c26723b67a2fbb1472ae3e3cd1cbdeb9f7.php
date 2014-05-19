<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig */
class __TwigTemplate_70a7e1155bb0313bf96b71a2376a37c26723b67a2fbb1472ae3e3cd1cbdeb9f7 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "hasassociationadmin")) {
            // line 12
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" >
            ";
            // line 14
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "inline")) {
                // line 15
                echo "                ";
                if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline") == "table")) {
                    // line 16
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children")) > 0)) {
                        // line 17
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 20
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), 0, array(), "array"), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 21
                            echo "                                        ";
                            if (((isset($context["field_name"]) ? $context["field_name"] : null) == "_delete")) {
                                // line 22
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 24
                                echo "                                            <th ";
                                echo (($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "required", array(), "array")) ? ("class=\"required\"") : (""));
                                echo ">
                                                ";
                                // line 25
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "sonata_admin", array(), "array"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "label")), "method"), "html", null, true);
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
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 33
                            echo "                                    <tr>
                                        ";
                            // line 34
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 35
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true);
                                echo " control-group";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "errors")) > 0)) {
                                    echo " error";
                                }
                                echo "\">
                                                ";
                                // line 36
                                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "hasformfielddescriptions", array(0 => (isset($context["field_name"]) ? $context["field_name"] : null)), "method", true, true)) {
                                    // line 37
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'widget');
                                    echo "

                                                    ";
                                    // line 39
                                    $context["dummy"] = $this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "setrendered");
                                    // line 40
                                    echo "                                                ";
                                } else {
                                    // line 41
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'widget');
                                    echo "
                                                ";
                                }
                                // line 43
                                echo "                                                ";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "errors")) > 0)) {
                                    // line 44
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 45
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'errors');
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
                } elseif ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children")) > 0)) {
                    // line 56
                    echo "                    <div>
                        ";
                    // line 57
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 58
                        echo "                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 59
                            echo "                                ";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "hasformfielddescriptions", array(0 => (isset($context["field_name"]) ? $context["field_name"] : null)), "method", true, true)) {
                                // line 60
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'row', array("inline" => "natural", "edit" => "inline"));
                                // line 63
                                echo "
                                    ";
                                // line 64
                                $context["dummy"] = $this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "setrendered");
                                // line 65
                                echo "                                ";
                            } else {
                                // line 66
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'row');
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
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            ";
            }
            // line 75
            echo "
        </span>

        ";
            // line 78
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "inline")) {
                // line 79
                echo "
            ";
                // line 80
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 81
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 84
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-container\">
                <span id=\"field_widget_";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                    ";
                // line 100
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
                </span>

                <span id=\"field_actions_";
                // line 103
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-actions\">
                    ";
                // line 104
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 105
                    echo "                        <a
                            href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                            onclick=\"return start_field_dialog_form_add_";
                    // line 107
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                            class=\"btn btn-small sonata-ba-action\"
                            title=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                            >
                            <i class=\"icon-plus\"></i>
                            ";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 115
                echo "                </span>

                <div style=\"display: none\" id=\"field_dialog_";
                // line 117
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
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
        return array (  222 => 81,  215 => 78,  191 => 69,  694 => 412,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 255,  366 => 210,  361 => 208,  331 => 187,  272 => 158,  267 => 156,  232 => 84,  347 => 134,  338 => 130,  319 => 124,  277 => 109,  265 => 99,  262 => 105,  257 => 149,  248 => 100,  239 => 97,  213 => 126,  211 => 81,  253 => 95,  212 => 74,  210 => 75,  202 => 77,  185 => 68,  167 => 48,  137 => 37,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 403,  677 => 199,  675 => 198,  671 => 196,  668 => 395,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 330,  553 => 162,  550 => 326,  521 => 154,  518 => 307,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 132,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 169,  289 => 112,  270 => 4,  256 => 96,  250 => 93,  242 => 140,  228 => 83,  181 => 29,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 355,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 304,  507 => 157,  504 => 302,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 261,  425 => 175,  422 => 250,  420 => 249,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  358 => 139,  346 => 196,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 123,  316 => 121,  308 => 88,  288 => 107,  286 => 80,  274 => 68,  266 => 66,  260 => 98,  251 => 101,  244 => 65,  225 => 87,  205 => 38,  200 => 55,  197 => 70,  194 => 53,  188 => 49,  184 => 30,  178 => 28,  129 => 59,  114 => 71,  77 => 27,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  575 => 170,  573 => 179,  567 => 337,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 306,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 295,  489 => 131,  485 => 143,  481 => 290,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 260,  424 => 254,  418 => 113,  415 => 247,  404 => 126,  401 => 86,  396 => 234,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  329 => 96,  327 => 126,  323 => 125,  320 => 115,  317 => 101,  307 => 82,  304 => 174,  301 => 117,  296 => 77,  281 => 105,  275 => 103,  255 => 71,  237 => 86,  233 => 81,  206 => 71,  198 => 66,  195 => 54,  192 => 64,  174 => 64,  172 => 51,  155 => 38,  148 => 60,  392 => 120,  389 => 103,  383 => 224,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 188,  332 => 85,  326 => 185,  324 => 82,  318 => 122,  315 => 123,  302 => 73,  299 => 112,  293 => 109,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 64,  271 => 108,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  216 => 42,  186 => 111,  180 => 56,  175 => 53,  90 => 20,  83 => 32,  12 => 34,  52 => 78,  160 => 58,  152 => 92,  70 => 23,  20 => 11,  120 => 36,  118 => 28,  170 => 55,  165 => 59,  150 => 55,  146 => 99,  97 => 63,  84 => 16,  126 => 55,  113 => 41,  157 => 104,  153 => 56,  145 => 52,  139 => 31,  124 => 49,  110 => 40,  100 => 36,  65 => 83,  34 => 4,  104 => 67,  37 => 19,  134 => 56,  127 => 76,  81 => 15,  74 => 52,  96 => 90,  76 => 82,  58 => 19,  53 => 10,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 258,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 242,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 141,  362 => 178,  360 => 126,  355 => 124,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 83,  285 => 111,  283 => 166,  278 => 74,  268 => 107,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 80,  214 => 69,  177 => 54,  169 => 66,  140 => 97,  132 => 57,  128 => 47,  111 => 30,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  246 => 99,  243 => 89,  240 => 64,  238 => 139,  235 => 56,  230 => 61,  227 => 134,  224 => 51,  221 => 79,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 186,  143 => 59,  135 => 81,  131 => 48,  119 => 43,  108 => 39,  102 => 37,  71 => 55,  67 => 28,  63 => 22,  59 => 23,  47 => 21,  38 => 17,  94 => 35,  89 => 35,  85 => 34,  79 => 37,  75 => 31,  68 => 30,  56 => 24,  50 => 22,  29 => 21,  87 => 87,  72 => 10,  55 => 22,  21 => 12,  26 => 13,  98 => 37,  93 => 21,  88 => 60,  78 => 32,  46 => 19,  27 => 8,  40 => 20,  44 => 18,  35 => 16,  31 => 22,  43 => 20,  41 => 18,  28 => 13,  201 => 72,  196 => 65,  183 => 50,  171 => 63,  166 => 100,  163 => 45,  158 => 62,  156 => 57,  151 => 36,  142 => 58,  138 => 50,  136 => 155,  123 => 95,  121 => 75,  117 => 34,  115 => 33,  105 => 39,  101 => 49,  91 => 34,  69 => 50,  66 => 29,  62 => 24,  49 => 9,  24 => 3,  32 => 15,  25 => 12,  22 => 11,  19 => 11,  209 => 82,  203 => 122,  199 => 67,  193 => 33,  189 => 71,  187 => 60,  182 => 69,  176 => 65,  173 => 42,  168 => 60,  164 => 59,  162 => 40,  154 => 40,  149 => 36,  147 => 90,  144 => 33,  141 => 48,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 26,  109 => 69,  106 => 45,  103 => 50,  99 => 91,  95 => 22,  92 => 61,  86 => 17,  82 => 33,  80 => 84,  73 => 29,  64 => 28,  60 => 15,  57 => 80,  54 => 153,  51 => 38,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 14,);
    }
}
