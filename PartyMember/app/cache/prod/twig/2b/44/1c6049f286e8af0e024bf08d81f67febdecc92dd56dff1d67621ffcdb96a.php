<?php

/* IbwPartymemberBundle:Partymember:show.html.twig */
class __TwigTemplate_2b441c6049f286e8af0e024bf08d81f67febdecc92dd56dff1d67621ffcdb96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Partymember</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Stuno</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "StuNo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "Name"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sex</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "Sex"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Class</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "Class"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Join_date</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "joindate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Full_date</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "Fulldate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Branch</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "Branch"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mobpho</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "MobPho"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("ibw_partymember");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_partymember_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "IbwPartymemberBundle:Partymember:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 66,  127 => 62,  81 => 34,  74 => 30,  96 => 32,  76 => 28,  58 => 24,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 50,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 36,  102 => 46,  71 => 19,  67 => 26,  63 => 15,  59 => 6,  47 => 12,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 26,  56 => 9,  50 => 10,  29 => 5,  87 => 25,  72 => 27,  55 => 23,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 38,  78 => 21,  46 => 14,  27 => 4,  40 => 8,  44 => 11,  35 => 6,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 45,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 11,  66 => 15,  62 => 23,  49 => 14,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 50,  106 => 33,  103 => 36,  99 => 31,  95 => 42,  92 => 31,  86 => 30,  82 => 22,  80 => 29,  73 => 19,  64 => 25,  60 => 22,  57 => 11,  54 => 10,  51 => 22,  48 => 13,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 5,);
    }
}
