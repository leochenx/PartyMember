<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_fcde1d4c56d61a72a1abae939106e2eef21ba98d006fbb368a33bbc99ca01e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 134,  338 => 130,  319 => 124,  277 => 109,  265 => 106,  262 => 105,  257 => 103,  248 => 100,  239 => 97,  213 => 82,  211 => 81,  253 => 1,  212 => 74,  210 => 73,  202 => 77,  185 => 59,  167 => 48,  137 => 37,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  521 => 154,  518 => 153,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 132,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 75,  289 => 112,  270 => 4,  256 => 61,  250 => 60,  242 => 59,  228 => 88,  181 => 29,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 192,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 150,  507 => 157,  504 => 148,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 132,  425 => 175,  422 => 134,  420 => 127,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  358 => 139,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 68,  266 => 66,  260 => 104,  251 => 101,  244 => 65,  225 => 87,  205 => 38,  200 => 55,  197 => 74,  194 => 53,  188 => 49,  184 => 30,  178 => 28,  129 => 59,  114 => 50,  77 => 27,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 170,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 152,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 143,  481 => 128,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 126,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  329 => 96,  327 => 126,  323 => 125,  320 => 115,  317 => 101,  307 => 82,  304 => 79,  301 => 117,  296 => 77,  281 => 110,  275 => 73,  255 => 71,  237 => 64,  233 => 81,  206 => 71,  198 => 66,  195 => 54,  192 => 64,  174 => 67,  172 => 51,  155 => 38,  148 => 60,  392 => 120,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 123,  302 => 73,  299 => 116,  293 => 113,  287 => 68,  284 => 72,  282 => 66,  279 => 70,  276 => 64,  271 => 108,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  216 => 42,  186 => 51,  180 => 56,  175 => 53,  90 => 20,  83 => 32,  12 => 34,  52 => 78,  160 => 44,  152 => 38,  70 => 23,  20 => 11,  120 => 36,  118 => 28,  170 => 55,  165 => 64,  150 => 101,  146 => 99,  97 => 47,  84 => 16,  126 => 55,  113 => 44,  157 => 104,  153 => 49,  145 => 53,  139 => 31,  124 => 49,  110 => 25,  100 => 23,  65 => 83,  34 => 4,  104 => 23,  37 => 19,  134 => 56,  127 => 54,  81 => 15,  74 => 23,  96 => 90,  76 => 82,  58 => 19,  53 => 10,  23 => 13,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 141,  362 => 178,  360 => 126,  355 => 124,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 120,  305 => 119,  298 => 91,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 107,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 69,  177 => 54,  169 => 66,  140 => 97,  132 => 57,  128 => 47,  111 => 30,  107 => 52,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  246 => 99,  243 => 98,  240 => 64,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 186,  143 => 59,  135 => 45,  131 => 55,  119 => 93,  108 => 28,  102 => 43,  71 => 55,  67 => 19,  63 => 22,  59 => 23,  47 => 43,  38 => 17,  94 => 35,  89 => 43,  85 => 30,  79 => 37,  75 => 31,  68 => 30,  56 => 23,  50 => 44,  29 => 15,  87 => 87,  72 => 10,  55 => 22,  21 => 11,  26 => 14,  98 => 37,  93 => 21,  88 => 33,  78 => 36,  46 => 19,  27 => 8,  40 => 20,  44 => 18,  35 => 15,  31 => 14,  43 => 14,  41 => 18,  28 => 13,  201 => 56,  196 => 65,  183 => 50,  171 => 61,  166 => 71,  163 => 45,  158 => 62,  156 => 41,  151 => 36,  142 => 58,  138 => 57,  136 => 155,  123 => 95,  121 => 29,  117 => 34,  115 => 33,  105 => 39,  101 => 49,  91 => 34,  69 => 9,  66 => 29,  62 => 24,  49 => 9,  24 => 3,  32 => 14,  25 => 12,  22 => 11,  19 => 11,  209 => 82,  203 => 37,  199 => 67,  193 => 33,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 42,  168 => 44,  164 => 59,  162 => 40,  154 => 40,  149 => 36,  147 => 58,  144 => 33,  141 => 48,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 45,  112 => 26,  109 => 53,  106 => 45,  103 => 50,  99 => 91,  95 => 22,  92 => 19,  86 => 17,  82 => 28,  80 => 84,  73 => 24,  64 => 28,  60 => 15,  57 => 80,  54 => 153,  51 => 22,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 9,);
    }
}
