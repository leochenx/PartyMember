<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_b6c1142472b79c7ff81c650a7ae351f4720c5e7cb31e1d11a66c6f6db1f2a16d extends Twig_Template
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
        // line 12
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-user\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  113 => 42,  157 => 64,  153 => 62,  145 => 59,  139 => 57,  124 => 52,  110 => 41,  100 => 41,  65 => 26,  34 => 18,  104 => 40,  37 => 16,  134 => 66,  127 => 62,  81 => 34,  74 => 26,  96 => 32,  76 => 27,  58 => 22,  53 => 24,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 69,  140 => 55,  132 => 47,  128 => 50,  111 => 37,  107 => 36,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 61,  143 => 56,  135 => 48,  131 => 52,  119 => 57,  108 => 36,  102 => 42,  71 => 29,  67 => 31,  63 => 15,  59 => 6,  47 => 21,  38 => 19,  94 => 39,  89 => 37,  85 => 35,  79 => 28,  75 => 33,  68 => 26,  56 => 21,  50 => 23,  29 => 15,  87 => 25,  72 => 27,  55 => 25,  21 => 2,  26 => 14,  98 => 38,  93 => 28,  88 => 36,  78 => 31,  46 => 14,  27 => 12,  40 => 8,  44 => 21,  35 => 6,  31 => 14,  43 => 8,  41 => 20,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 68,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 56,  123 => 47,  121 => 51,  117 => 50,  115 => 43,  105 => 40,  101 => 32,  91 => 38,  69 => 32,  66 => 15,  62 => 25,  49 => 14,  24 => 13,  32 => 4,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 43,  112 => 47,  109 => 19,  106 => 44,  103 => 36,  99 => 17,  95 => 42,  92 => 31,  86 => 30,  82 => 33,  80 => 29,  73 => 19,  64 => 25,  60 => 24,  57 => 23,  54 => 10,  51 => 22,  48 => 13,  45 => 8,  42 => 16,  39 => 15,  36 => 19,  33 => 13,  30 => 15,);
    }
}
