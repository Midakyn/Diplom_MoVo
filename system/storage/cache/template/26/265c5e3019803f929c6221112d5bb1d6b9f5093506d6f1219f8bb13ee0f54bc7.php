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

/* default/template/account/voucher.twig */
class __TwigTemplate_17b473160dbd5af4c7e270b0937f7681d626b21480308f1ece7efa4a195f4275 extends \Twig\Template
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
<div id=\"account-voucher\" class=\"container\">
  
  ";
        // line 4
        if (($context["error_warning"] ?? null)) {
            // line 5
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 7
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 8
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 10
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 14
            echo "    ";
        }
        // line 15
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 17
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form action=\"";
        // line 18
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 20
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 22
        echo ($context["to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\" />
            ";
        // line 23
        if (($context["error_to_name"] ?? null)) {
            // line 24
            echo "            <div class=\"text-danger\">";
            echo ($context["error_to_name"] ?? null);
            echo "</div>
            ";
        }
        // line 26
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 29
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 31
        echo ($context["to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\" />
            ";
        // line 32
        if (($context["error_to_email"] ?? null)) {
            // line 33
            echo "            <div class=\"text-danger\">";
            echo ($context["error_to_email"] ?? null);
            echo "</div>
            ";
        }
        // line 35
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 38
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 40
        echo ($context["from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\" />
            ";
        // line 41
        if (($context["error_from_name"] ?? null)) {
            // line 42
            echo "            <div class=\"text-danger\">";
            echo ($context["error_from_name"] ?? null);
            echo "</div>
            ";
        }
        // line 44
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 47
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 49
        echo ($context["from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\" />
            ";
        // line 50
        if (($context["error_from_email"] ?? null)) {
            // line 51
            echo "            <div class=\"text-danger\">";
            echo ($context["error_from_email"] ?? null);
            echo "</div>
            ";
        }
        // line 53
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\">";
        // line 56
        echo ($context["entry_theme"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
           ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 59
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 59) == ($context["voucher_theme_id"] ?? null))) {
                // line 60
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 62);
                echo "\" checked=\"checked\" />
                ";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 63);
                echo "</label>
            </div>
            ";
            } else {
                // line 66
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 68);
                echo "\" />
                ";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 69);
                echo "</label>
            </div>
            ";
            }
            // line 72
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            ";
        if (($context["error_theme"] ?? null)) {
            // line 74
            echo "            <div class=\"text-danger\">";
            echo ($context["error_theme"] ?? null);
            echo "</div>
            ";
        }
        // line 76
        echo "          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-message\"><span data-toggle=\"tooltip\" title=\"";
        // line 79
        echo ($context["help_message"] ?? null);
        echo "\">";
        echo ($context["entry_message"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" id=\"input-message\" class=\"form-control\">";
        // line 81
        echo ($context["message"] ?? null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 85
        echo ($context["help_amount"] ?? null);
        echo "\">";
        echo ($context["entry_amount"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 87
        echo ($context["amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\" />
            ";
        // line 88
        if (($context["error_amount"] ?? null)) {
            // line 89
            echo "            <div class=\"text-danger\">";
            echo ($context["error_amount"] ?? null);
            echo "</div>
            ";
        }
        // line 91
        echo "          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"> ";
        // line 94
        echo ($context["text_agree"] ?? null);
        echo "
            ";
        // line 95
        if (($context["agree"] ?? null)) {
            // line 96
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 98
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
        }
        // line 100
        echo "            &nbsp;
            <input type=\"submit\" value=\"";
        // line 101
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 105
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 106
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 108
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 108,  310 => 106,  306 => 105,  299 => 101,  296 => 100,  292 => 98,  288 => 96,  286 => 95,  282 => 94,  277 => 91,  271 => 89,  269 => 88,  265 => 87,  258 => 85,  251 => 81,  244 => 79,  239 => 76,  233 => 74,  230 => 73,  224 => 72,  218 => 69,  214 => 68,  210 => 66,  204 => 63,  200 => 62,  196 => 60,  193 => 59,  189 => 58,  184 => 56,  179 => 53,  173 => 51,  171 => 50,  167 => 49,  162 => 47,  157 => 44,  151 => 42,  149 => 41,  145 => 40,  140 => 38,  135 => 35,  129 => 33,  127 => 32,  123 => 31,  118 => 29,  113 => 26,  107 => 24,  105 => 23,  101 => 22,  96 => 20,  91 => 18,  87 => 17,  83 => 16,  76 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  51 => 7,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/voucher.twig", "");
    }
}
