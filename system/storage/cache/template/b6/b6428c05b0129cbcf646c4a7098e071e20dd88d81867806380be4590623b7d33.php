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

/* default/template/account/wishlist.twig */
class __TwigTemplate_194c6bba648b5c7163568766c90cc3cf1eeb332f83c6465b41c709bad771e6ee extends \Twig\Template
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
<div id=\"account-wishlist\" class=\"container\">
  
  ";
        // line 4
        if (($context["success"] ?? null)) {
            // line 5
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 9
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 19
        if (($context["products"] ?? null)) {
            // line 20
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 24
            echo ($context["column_image"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 25
            echo ($context["column_name"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 26
            echo ($context["column_model"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 27
            echo ($context["column_stock"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 28
            echo ($context["column_price"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 29
            echo ($context["column_action"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 35
                echo "          <tr>
            <td class=\"text-center\">";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 36);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                    echo "\" /></a>";
                }
                echo "</td>
            <td class=\"text-left\"><a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "</a></td>
            <td class=\"text-left\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 38);
                echo "</td>
            <td class=\"text-right\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 39);
                echo "</td>
            <td class=\"text-right\">";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "              <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 41)) {
                        // line 42
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 42);
                        echo "
                ";
                    } else {
                        // line 43
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 43);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43);
                        echo "</s> ";
                    }
                    echo " </div>
              ";
                }
                // line 44
                echo "</td>
            <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 45);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
              <a href=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 46);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 54
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 56
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 57
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 59
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 60
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 62
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 62,  228 => 60,  224 => 59,  217 => 57,  214 => 56,  208 => 54,  201 => 49,  190 => 46,  184 => 45,  181 => 44,  171 => 43,  165 => 42,  162 => 41,  160 => 40,  156 => 39,  152 => 38,  146 => 37,  132 => 36,  129 => 35,  125 => 34,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  91 => 20,  89 => 19,  85 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  58 => 10,  53 => 9,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/wishlist.twig", "");
    }
}
