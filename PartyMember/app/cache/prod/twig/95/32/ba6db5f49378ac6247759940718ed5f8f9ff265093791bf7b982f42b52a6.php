<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_9532ba6db5f49378ac6247759940718ed5f8f9ff265093791bf7b982f42b52a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : null)), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"));
            // line 24
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"));
            // line 25
            echo "
        ";
            // line 26
            if (((isset($context["isEditable"]) ? $context["isEditable"] : null) && (isset($context["xEditableType"]) ? $context["xEditableType"] : null))) {
                // line 27
                echo "            ";
                $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")));
                // line 28
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 29
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 32
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "</td>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
    }

    // line 28
    public function block_field_span_attributes($context, array $blocks = array())
    {
        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : null), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label"), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "translationDomain")), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  255 => 71,  237 => 64,  233 => 62,  206 => 58,  198 => 55,  195 => 54,  192 => 53,  174 => 47,  172 => 46,  155 => 38,  148 => 35,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  216 => 42,  186 => 51,  180 => 49,  175 => 33,  90 => 57,  83 => 22,  12 => 34,  52 => 20,  160 => 59,  152 => 63,  70 => 23,  20 => 1,  120 => 48,  118 => 46,  170 => 55,  165 => 52,  150 => 27,  146 => 47,  97 => 69,  84 => 28,  126 => 25,  113 => 46,  157 => 29,  153 => 49,  145 => 56,  139 => 59,  124 => 49,  110 => 144,  100 => 70,  65 => 26,  34 => 16,  104 => 42,  37 => 24,  134 => 66,  127 => 62,  81 => 20,  74 => 28,  96 => 32,  76 => 35,  58 => 22,  53 => 27,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 70,  214 => 69,  177 => 48,  169 => 69,  140 => 53,  132 => 44,  128 => 152,  111 => 41,  107 => 143,  61 => 29,  273 => 96,  269 => 94,  254 => 92,  246 => 66,  243 => 88,  240 => 65,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 60,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  131 => 153,  119 => 148,  108 => 42,  102 => 79,  71 => 27,  67 => 32,  63 => 16,  59 => 29,  47 => 17,  38 => 21,  94 => 39,  89 => 37,  85 => 35,  79 => 30,  75 => 25,  68 => 24,  56 => 28,  50 => 15,  29 => 15,  87 => 28,  72 => 19,  55 => 12,  21 => 11,  26 => 14,  98 => 38,  93 => 58,  88 => 36,  78 => 21,  46 => 8,  27 => 14,  40 => 24,  44 => 20,  35 => 17,  31 => 23,  43 => 25,  41 => 19,  28 => 22,  201 => 56,  196 => 90,  183 => 50,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 80,  101 => 37,  91 => 39,  69 => 26,  66 => 17,  62 => 14,  49 => 28,  24 => 12,  32 => 19,  25 => 12,  22 => 11,  19 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 62,  147 => 58,  144 => 49,  141 => 48,  133 => 154,  130 => 57,  125 => 42,  122 => 149,  116 => 147,  112 => 145,  109 => 108,  106 => 44,  103 => 64,  99 => 17,  95 => 35,  92 => 34,  86 => 25,  82 => 31,  80 => 21,  73 => 34,  64 => 24,  60 => 15,  57 => 14,  54 => 26,  51 => 26,  48 => 25,  45 => 24,  42 => 23,  39 => 14,  36 => 20,  33 => 16,  30 => 13,);
    }
}
