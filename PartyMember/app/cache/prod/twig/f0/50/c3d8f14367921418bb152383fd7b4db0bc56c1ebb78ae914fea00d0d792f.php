<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_f050c3d8f14367921418bb152383fd7b4db0bc56c1ebb78ae914fea00d0d792f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (((isset($context["per_page"]) ? $context["per_page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), array("_page" => 1, "_per_page" => (isset($context["per_page"]) ? $context["per_page"] : null))))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["per_page"]) ? $context["per_page"] : null), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  599 => 184,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  533 => 169,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 158,  507 => 157,  504 => 156,  483 => 129,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  448 => 140,  443 => 138,  425 => 135,  422 => 134,  420 => 127,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 113,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 77,  266 => 74,  260 => 70,  251 => 67,  244 => 65,  225 => 58,  205 => 56,  200 => 55,  197 => 54,  194 => 53,  188 => 49,  184 => 47,  178 => 45,  129 => 56,  114 => 50,  77 => 25,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 146,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 96,  327 => 118,  323 => 92,  320 => 115,  317 => 86,  307 => 82,  304 => 86,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  255 => 71,  237 => 64,  233 => 62,  206 => 58,  198 => 55,  195 => 54,  192 => 53,  174 => 47,  172 => 46,  155 => 38,  148 => 35,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 104,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 78,  276 => 64,  271 => 76,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  216 => 42,  186 => 51,  180 => 49,  175 => 43,  90 => 27,  83 => 32,  12 => 34,  52 => 17,  160 => 59,  152 => 38,  70 => 23,  20 => 11,  120 => 46,  118 => 28,  170 => 55,  165 => 52,  150 => 27,  146 => 34,  97 => 41,  84 => 16,  126 => 55,  113 => 46,  157 => 41,  153 => 49,  145 => 53,  139 => 31,  124 => 49,  110 => 25,  100 => 43,  65 => 29,  34 => 52,  104 => 23,  37 => 53,  134 => 66,  127 => 62,  81 => 26,  74 => 29,  96 => 40,  76 => 13,  58 => 19,  53 => 24,  23 => 13,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 136,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 114,  368 => 112,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 89,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 57,  214 => 69,  177 => 48,  169 => 69,  140 => 53,  132 => 57,  128 => 47,  111 => 40,  107 => 24,  61 => 26,  273 => 96,  269 => 75,  254 => 92,  246 => 66,  243 => 88,  240 => 64,  238 => 85,  235 => 63,  230 => 61,  227 => 46,  224 => 60,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  131 => 48,  119 => 44,  108 => 45,  102 => 43,  71 => 29,  67 => 184,  63 => 22,  59 => 164,  47 => 74,  38 => 7,  94 => 40,  89 => 34,  85 => 32,  79 => 31,  75 => 31,  68 => 30,  56 => 25,  50 => 21,  29 => 16,  87 => 17,  72 => 198,  55 => 18,  21 => 11,  26 => 14,  98 => 36,  93 => 39,  88 => 33,  78 => 36,  46 => 19,  27 => 16,  40 => 19,  44 => 21,  35 => 22,  31 => 17,  43 => 20,  41 => 20,  28 => 14,  201 => 56,  196 => 90,  183 => 50,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  123 => 30,  121 => 29,  117 => 45,  115 => 27,  105 => 44,  101 => 37,  91 => 39,  69 => 197,  66 => 23,  62 => 165,  49 => 111,  24 => 3,  32 => 21,  25 => 12,  22 => 11,  19 => 11,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 42,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 36,  147 => 58,  144 => 33,  141 => 48,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 108,  106 => 45,  103 => 38,  99 => 30,  95 => 20,  92 => 19,  86 => 33,  82 => 35,  80 => 31,  73 => 24,  64 => 183,  60 => 26,  57 => 154,  54 => 153,  51 => 23,  48 => 22,  45 => 21,  42 => 13,  39 => 12,  36 => 17,  33 => 16,  30 => 17,);
    }
}
