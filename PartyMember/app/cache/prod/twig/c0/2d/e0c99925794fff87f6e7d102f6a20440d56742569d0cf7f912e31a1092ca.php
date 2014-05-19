<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_c02de0c99925794fff87f6e7d102f6a20440d56742569d0cf7f912e31a1092ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

    ";
        // line 4
        $context["url"] = (((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ((!$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : null)), "method"))) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form class=\"form-horizontal\"
              action=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : null), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 14
            if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 15
            echo "              >
            ";
            // line 16
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "errors")) > 0)) {
                // line 17
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 18
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                </div>
            ";
            }
            // line 21
            echo "
            ";
            // line 22
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 35
            echo "
            ";
            // line 36
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 57
            echo "
            ";
            // line 58
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 61
            echo "
            ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

            ";
            // line 64
            $this->displayBlock('formactions', $context, $blocks);
            // line 106
            echo "        </form>
    ";
        }
        // line 108
        echo "
    ";
        // line 109
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

";
    }

    // line 22
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 23
        echo "                <div class=\"tabbable\">
                    <ul class=\"nav nav-tabs\">
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups"));
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
            // line 26
            echo "                            <li class=\"";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "active";
            }
            echo "\">
                                <a href=\"#";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" data-toggle=\"tab\">
                                    <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "translation_domain")), "method"), "html", null, true);
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
        // line 33
        echo "                    </ul>
            ";
    }

    // line 36
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 37
        echo "                <div class=\"tab-content\">
                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups"));
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
            // line 39
            echo "                        <div class=\"tab-pane ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo " active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\">
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
            // line 42
            if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description") != false)) {
                // line 43
                echo "                                        <p>";
                echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description");
                echo "</p>
                                    ";
            }
            // line 45
            echo "
                                    ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 47
                echo "                                        ";
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                    // line 48
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), 'row');
                    echo "
                                        ";
                }
                // line 50
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                </div>
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
        // line 55
        echo "                </div>
            ";
    }

    // line 58
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 59
        echo "                </div>
            ";
    }

    // line 64
    public function block_formactions($context, array $blocks = array())
    {
        // line 65
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 66
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isxmlhttprequest")) {
            // line 67
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
                // line 68
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 70
                echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">
                        ";
            }
            // line 72
            echo "                    ";
        } else {
            // line 73
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "supportsPreviewMode")) {
                // line 74
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"icon-eye-open\"></i>
                                ";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 79
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
                // line 80
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">

                            ";
                // line 82
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method")) {
                    // line 83
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\">
                            ";
                }
                // line 85
                echo "
                            ";
                // line 86
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 87
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 90
                echo "
                            ";
                // line 91
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 92
                    echo "                                <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 94
                echo "                        ";
            } else {
                // line 95
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "edit"), "method")) {
                    // line 96
                    echo "                                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\">
                            ";
                }
                // line 98
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method")) {
                    // line 99
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_create_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\">
                            ";
                }
                // line 101
                echo "                            <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">
                        ";
            }
            // line 103
            echo "                    ";
        }
        // line 104
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  218 => 43,  216 => 42,  186 => 38,  180 => 36,  175 => 33,  90 => 57,  83 => 22,  12 => 34,  52 => 11,  160 => 59,  152 => 63,  70 => 23,  20 => 1,  120 => 48,  118 => 46,  170 => 55,  165 => 52,  150 => 27,  146 => 47,  97 => 33,  84 => 28,  126 => 25,  113 => 46,  157 => 29,  153 => 49,  145 => 56,  139 => 59,  124 => 49,  110 => 41,  100 => 41,  65 => 26,  34 => 16,  104 => 42,  37 => 16,  134 => 66,  127 => 62,  81 => 27,  74 => 18,  96 => 32,  76 => 28,  58 => 23,  53 => 16,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 109,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 99,  312 => 98,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 58,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 69,  140 => 53,  132 => 47,  128 => 50,  111 => 43,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 51,  243 => 88,  240 => 50,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 45,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  131 => 43,  119 => 22,  108 => 42,  102 => 42,  71 => 17,  67 => 22,  63 => 27,  59 => 18,  47 => 14,  38 => 5,  94 => 39,  89 => 37,  85 => 35,  79 => 35,  75 => 25,  68 => 31,  56 => 25,  50 => 15,  29 => 15,  87 => 29,  72 => 30,  55 => 12,  21 => 2,  26 => 14,  98 => 62,  93 => 58,  88 => 36,  78 => 26,  46 => 8,  27 => 14,  40 => 8,  44 => 21,  35 => 6,  31 => 15,  43 => 7,  41 => 6,  28 => 14,  201 => 92,  196 => 90,  183 => 37,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 106,  101 => 37,  91 => 39,  69 => 16,  66 => 15,  62 => 14,  49 => 14,  24 => 1,  32 => 4,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 62,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 57,  125 => 42,  122 => 23,  116 => 47,  112 => 109,  109 => 108,  106 => 44,  103 => 64,  99 => 17,  95 => 61,  92 => 32,  86 => 30,  82 => 36,  80 => 21,  73 => 24,  64 => 25,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 13,  45 => 20,  42 => 19,  39 => 18,  36 => 4,  33 => 16,  30 => 2,);
    }
}
