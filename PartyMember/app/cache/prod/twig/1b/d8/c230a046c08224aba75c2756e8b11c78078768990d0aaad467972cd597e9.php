<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_1bd8c230a046c08224aba75c2756e8b11c78078768990d0aaad467972cd597e9 extends Twig_Template
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
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : null), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 71,  222 => 81,  215 => 78,  191 => 69,  694 => 412,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 255,  366 => 210,  361 => 208,  331 => 187,  272 => 158,  267 => 156,  232 => 84,  347 => 134,  338 => 130,  319 => 124,  277 => 109,  265 => 99,  262 => 105,  257 => 149,  248 => 100,  239 => 97,  213 => 126,  211 => 81,  253 => 95,  212 => 74,  210 => 75,  202 => 77,  185 => 68,  167 => 48,  137 => 59,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 403,  677 => 199,  675 => 198,  671 => 196,  668 => 395,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 330,  553 => 162,  550 => 326,  521 => 154,  518 => 307,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 132,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 169,  289 => 112,  270 => 4,  256 => 96,  250 => 93,  242 => 140,  228 => 83,  181 => 80,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 355,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 304,  507 => 157,  504 => 302,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 261,  425 => 175,  422 => 250,  420 => 249,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  358 => 139,  346 => 196,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 123,  316 => 121,  308 => 88,  288 => 107,  286 => 80,  274 => 68,  266 => 66,  260 => 98,  251 => 101,  244 => 65,  225 => 87,  205 => 38,  200 => 55,  197 => 70,  194 => 88,  188 => 49,  184 => 30,  178 => 28,  129 => 59,  114 => 71,  77 => 27,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  575 => 170,  573 => 179,  567 => 337,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 306,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 295,  489 => 131,  485 => 143,  481 => 290,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 260,  424 => 254,  418 => 113,  415 => 247,  404 => 126,  401 => 86,  396 => 234,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  329 => 96,  327 => 126,  323 => 125,  320 => 115,  317 => 101,  307 => 82,  304 => 174,  301 => 117,  296 => 77,  281 => 105,  275 => 103,  255 => 71,  237 => 86,  233 => 81,  206 => 71,  198 => 66,  195 => 54,  192 => 64,  174 => 64,  172 => 51,  155 => 38,  148 => 64,  392 => 120,  389 => 103,  383 => 224,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 188,  332 => 85,  326 => 185,  324 => 82,  318 => 122,  315 => 123,  302 => 73,  299 => 112,  293 => 109,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 64,  271 => 108,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  216 => 42,  186 => 83,  180 => 56,  175 => 77,  90 => 20,  83 => 32,  12 => 34,  52 => 21,  160 => 58,  152 => 92,  70 => 23,  20 => 11,  120 => 36,  118 => 28,  170 => 55,  165 => 59,  150 => 55,  146 => 99,  97 => 63,  84 => 39,  126 => 55,  113 => 41,  157 => 104,  153 => 56,  145 => 52,  139 => 31,  124 => 49,  110 => 77,  100 => 36,  65 => 30,  34 => 26,  104 => 67,  37 => 19,  134 => 56,  127 => 56,  81 => 15,  74 => 34,  96 => 90,  76 => 57,  58 => 19,  53 => 10,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 258,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 242,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 141,  362 => 178,  360 => 126,  355 => 124,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 83,  285 => 111,  283 => 166,  278 => 74,  268 => 107,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 80,  214 => 69,  177 => 54,  169 => 74,  140 => 97,  132 => 58,  128 => 47,  111 => 30,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  246 => 99,  243 => 89,  240 => 64,  238 => 139,  235 => 56,  230 => 61,  227 => 134,  224 => 51,  221 => 79,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 81,  131 => 48,  119 => 43,  108 => 39,  102 => 37,  71 => 55,  67 => 28,  63 => 50,  59 => 49,  47 => 21,  38 => 17,  94 => 35,  89 => 40,  85 => 34,  79 => 37,  75 => 31,  68 => 31,  56 => 24,  50 => 20,  29 => 21,  87 => 87,  72 => 56,  55 => 22,  21 => 12,  26 => 20,  98 => 44,  93 => 68,  88 => 60,  78 => 36,  46 => 35,  27 => 8,  40 => 20,  44 => 18,  35 => 16,  31 => 22,  43 => 20,  41 => 18,  28 => 13,  201 => 72,  196 => 65,  183 => 50,  171 => 63,  166 => 100,  163 => 45,  158 => 62,  156 => 57,  151 => 36,  142 => 61,  138 => 50,  136 => 155,  123 => 95,  121 => 53,  117 => 34,  115 => 50,  105 => 47,  101 => 73,  91 => 34,  69 => 50,  66 => 29,  62 => 29,  49 => 9,  24 => 13,  32 => 15,  25 => 12,  22 => 12,  19 => 11,  209 => 82,  203 => 122,  199 => 67,  193 => 33,  189 => 71,  187 => 60,  182 => 69,  176 => 65,  173 => 42,  168 => 60,  164 => 72,  162 => 40,  154 => 67,  149 => 36,  147 => 90,  144 => 33,  141 => 48,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 26,  109 => 69,  106 => 45,  103 => 46,  99 => 91,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 84,  73 => 29,  64 => 28,  60 => 15,  57 => 22,  54 => 153,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
