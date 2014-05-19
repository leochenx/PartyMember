<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_6082f49e935e886f150413bb742c9e00ed82a65463826710331902b08360693d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : null), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'widget');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  263 => 55,  234 => 48,  231 => 47,  218 => 43,  216 => 42,  186 => 38,  180 => 36,  175 => 33,  90 => 57,  83 => 22,  12 => 34,  52 => 11,  160 => 59,  152 => 63,  70 => 23,  20 => 1,  120 => 48,  118 => 46,  170 => 55,  165 => 52,  150 => 27,  146 => 47,  97 => 33,  84 => 28,  126 => 25,  113 => 46,  157 => 29,  153 => 49,  145 => 56,  139 => 59,  124 => 49,  110 => 41,  100 => 41,  65 => 26,  34 => 16,  104 => 42,  37 => 24,  134 => 66,  127 => 62,  81 => 27,  74 => 18,  96 => 32,  76 => 28,  58 => 23,  53 => 16,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 109,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 99,  312 => 98,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 58,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 69,  140 => 53,  132 => 47,  128 => 50,  111 => 43,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 51,  243 => 88,  240 => 50,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 45,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  131 => 43,  119 => 22,  108 => 42,  102 => 42,  71 => 17,  67 => 22,  63 => 20,  59 => 18,  47 => 14,  38 => 5,  94 => 39,  89 => 37,  85 => 35,  79 => 35,  75 => 25,  68 => 24,  56 => 25,  50 => 15,  29 => 15,  87 => 29,  72 => 30,  55 => 12,  21 => 11,  26 => 14,  98 => 62,  93 => 58,  88 => 36,  78 => 26,  46 => 8,  27 => 14,  40 => 8,  44 => 21,  35 => 6,  31 => 23,  43 => 7,  41 => 6,  28 => 22,  201 => 92,  196 => 90,  183 => 37,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 106,  101 => 37,  91 => 39,  69 => 16,  66 => 15,  62 => 14,  49 => 14,  24 => 1,  32 => 4,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 62,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 57,  125 => 42,  122 => 23,  116 => 47,  112 => 109,  109 => 108,  106 => 44,  103 => 64,  99 => 17,  95 => 61,  92 => 32,  86 => 30,  82 => 36,  80 => 21,  73 => 24,  64 => 25,  60 => 24,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 4,  33 => 16,  30 => 2,);
    }
}
