<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/product/search.twig */
class __TwigTemplate_7104c0d9d35c3a4fc8d458afe94fc2d5252c8c1a3c0280539995969b851aae4a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-search\" class=\"container\">
  
  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <label class=\"control-label\" for=\"input-search\">";
        // line 14
        echo ($context["entry_search"] ?? null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 17
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 21
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 23
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 23) == ($context["category_id"] ?? null))) {
                // line 24
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 24);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 24);
                echo "</option>
            ";
            } else {
                // line 26
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 26);
                echo "</option>
            ";
            }
            // line 28
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 29
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 29) == ($context["category_id"] ?? null))) {
                    // line 30
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 30);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 30);
                    echo "</option>
            ";
                } else {
                    // line 32
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 32);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 32);
                    echo "</option>
            ";
                }
                // line 34
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 35
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 35) == ($context["category_id"] ?? null))) {
                        // line 36
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 36);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 36);
                        echo "</option>
            ";
                    } else {
                        // line 38
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 38);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 38);
                        echo "</option>
            ";
                    }
                    // line 40
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "          </select>
        </div>
        <div class=\"col-sm-3\">
          <label class=\"checkbox-inline\">
            ";
        // line 47
        if (($context["sub_category"] ?? null)) {
            // line 48
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 50
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 52
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>
      </div>
      <p>
        <label class=\"checkbox-inline\">
          ";
        // line 57
        if (($context["description"] ?? null)) {
            // line 58
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 60
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 62
        echo "          ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 64
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
      <h2>";
        // line 65
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 66
        if (($context["products"] ?? null)) {
            // line 67
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 70
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 71
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\">
            <a href=\"";
            // line 76
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
          </div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 81
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 84
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 84) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 85
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 85);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 85);
                    echo "</option>
              ";
                } else {
                    // line 87
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 87);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 87);
                    echo "</option>
              ";
                }
                // line 89
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 95
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 98
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 98) == ($context["limit"] ?? null))) {
                    // line 99
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 99);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 99);
                    echo "</option>
              ";
                } else {
                    // line 101
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 101);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 101);
                    echo "</option>
              ";
                }
                // line 103
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row\">
        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 110
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 112);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 112);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 115);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 115);
                echo "</a></h4>
                <p>";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 116);
                echo "</p>
                ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 117)) {
                    // line 118
                    echo "                <p class=\"price\">
                  ";
                    // line 119
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 119)) {
                        // line 120
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 120);
                        echo "
                  ";
                    } else {
                        // line 122
                        echo "                  <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 122);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 122);
                        echo "</span>
                  ";
                    }
                    // line 124
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 124)) {
                        // line 125
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 125);
                        echo "</span>
                  ";
                    }
                    // line 127
                    echo "                </p>
                ";
                }
                // line 129
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 129)) {
                    // line 130
                    echo "                <div class=\"rating\">
                  ";
                    // line 131
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 132
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 132) < $context["i"])) {
                            // line 133
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 135
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 137
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "                </div>
                ";
                }
                // line 140
                echo "              </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 142);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 142);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 143
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 143);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 144
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 144);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 152
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 153
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 156
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 158
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 159
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 208
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 208,  500 => 159,  495 => 158,  489 => 156,  483 => 153,  479 => 152,  475 => 150,  461 => 144,  455 => 143,  447 => 142,  443 => 140,  439 => 138,  433 => 137,  429 => 135,  425 => 133,  422 => 132,  418 => 131,  415 => 130,  412 => 129,  408 => 127,  400 => 125,  397 => 124,  389 => 122,  383 => 120,  381 => 119,  378 => 118,  376 => 117,  372 => 116,  366 => 115,  354 => 112,  350 => 110,  346 => 109,  339 => 104,  333 => 103,  325 => 101,  317 => 99,  314 => 98,  310 => 97,  305 => 95,  298 => 90,  292 => 89,  284 => 87,  276 => 85,  273 => 84,  269 => 83,  264 => 81,  254 => 76,  246 => 71,  242 => 70,  237 => 67,  235 => 66,  231 => 65,  227 => 64,  221 => 62,  217 => 60,  213 => 58,  211 => 57,  202 => 52,  198 => 50,  194 => 48,  192 => 47,  186 => 43,  180 => 42,  174 => 41,  168 => 40,  160 => 38,  152 => 36,  149 => 35,  144 => 34,  136 => 32,  128 => 30,  125 => 29,  120 => 28,  112 => 26,  104 => 24,  101 => 23,  97 => 22,  93 => 21,  84 => 17,  78 => 14,  74 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/search.twig", "");
    }
}
