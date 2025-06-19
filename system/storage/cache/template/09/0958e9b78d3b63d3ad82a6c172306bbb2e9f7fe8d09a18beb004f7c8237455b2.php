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

/* default/template/account/return_form.twig */
class __TwigTemplate_d063d8a87bf4cc1418e706416d80f2c31a155509fd3beca3edd2a99cac012234 extends \Twig\Template
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
<div id=\"account-return\" class=\"container\">
  
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
        echo "  <div class=\"row\"> ";
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
        echo "\"> ";
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
        <fieldset>
          <legend>";
        // line 20
        echo ($context["text_order"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 22
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 24
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 25
        if (($context["error_firstname"] ?? null)) {
            // line 26
            echo "              <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 27
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 30
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 32
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 33
        if (($context["error_lastname"] ?? null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 38
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 40
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 41
        if (($context["error_email"] ?? null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 43
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 46
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 48
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 49
        if (($context["error_telephone"] ?? null)) {
            // line 50
            echo "              <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 51
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 54
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 56
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 57
        if (($context["error_order_id"] ?? null)) {
            // line 58
            echo "              <div class=\"text-danger\">";
            echo ($context["error_order_id"] ?? null);
            echo "</div>
              ";
        }
        // line 59
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 62
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 65
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 73
        echo ($context["text_product"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 75
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 77
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 78
        echo ($context["product_id"] ?? null);
        echo "\" />
              ";
        // line 79
        if (($context["error_product"] ?? null)) {
            // line 80
            echo "              <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
              ";
        }
        // line 81
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 84
        echo ($context["entry_model"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 86
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 87
        if (($context["error_model"] ?? null)) {
            // line 88
            echo "              <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
              ";
        }
        // line 89
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 92
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 94
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 98
        echo ($context["entry_reason"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 100
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 100) == ($context["return_reason_id"] ?? null))) {
                // line 101
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 103);
                echo "\" checked=\"checked\" />
                  ";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 104);
                echo "</label>
              </div>
              ";
            } else {
                // line 107
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 109);
                echo "\" />
                  ";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 110);
                echo "</label>
              </div>
              ";
            }
            // line 113
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "              ";
        if (($context["error_reason"] ?? null)) {
            // line 115
            echo "              <div class=\"text-danger\">";
            echo ($context["error_reason"] ?? null);
            echo "</div>
              ";
        }
        // line 116
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 119
        echo ($context["entry_opened"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 121
        if (($context["opened"] ?? null)) {
            // line 122
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 124
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 126
        echo "                ";
        echo ($context["text_yes"] ?? null);
        echo "</label>
              <label class=\"radio-inline\"> ";
        // line 127
        if ( !($context["opened"] ?? null)) {
            // line 128
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 130
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 132
        echo "                ";
        echo ($context["text_no"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 136
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 138
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 141
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        ";
        // line 143
        if (($context["text_agree"] ?? null)) {
            // line 144
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 145
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-danger\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">";
            // line 146
            echo ($context["text_agree"] ?? null);
            echo "
            ";
            // line 147
            if (($context["agree"] ?? null)) {
                // line 148
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 150
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 152
            echo "            <input type=\"submit\" value=\"";
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 156
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 157
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 159
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 163
        echo "      </form>
      ";
        // line 164
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 165
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 169
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script> 
";
        // line 173
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 173,  490 => 169,  483 => 165,  479 => 164,  476 => 163,  469 => 159,  462 => 157,  459 => 156,  451 => 152,  447 => 150,  443 => 148,  441 => 147,  437 => 146,  431 => 145,  428 => 144,  426 => 143,  421 => 141,  413 => 138,  408 => 136,  400 => 132,  396 => 130,  392 => 128,  390 => 127,  385 => 126,  381 => 124,  377 => 122,  375 => 121,  370 => 119,  365 => 116,  359 => 115,  356 => 114,  350 => 113,  344 => 110,  340 => 109,  336 => 107,  330 => 104,  326 => 103,  322 => 101,  319 => 100,  315 => 99,  311 => 98,  302 => 94,  297 => 92,  292 => 89,  286 => 88,  284 => 87,  278 => 86,  273 => 84,  268 => 81,  262 => 80,  260 => 79,  256 => 78,  250 => 77,  245 => 75,  240 => 73,  227 => 65,  221 => 62,  216 => 59,  210 => 58,  208 => 57,  202 => 56,  197 => 54,  192 => 51,  186 => 50,  184 => 49,  178 => 48,  173 => 46,  168 => 43,  162 => 42,  160 => 41,  154 => 40,  149 => 38,  144 => 35,  138 => 34,  136 => 33,  130 => 32,  125 => 30,  120 => 27,  114 => 26,  112 => 25,  106 => 24,  101 => 22,  96 => 20,  91 => 18,  87 => 17,  83 => 16,  76 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  51 => 7,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/return_form.twig", "");
    }
}
