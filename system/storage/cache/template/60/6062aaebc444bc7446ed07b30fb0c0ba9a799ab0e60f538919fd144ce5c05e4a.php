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

/* default/template/account/newsletter.twig */
class __TwigTemplate_bcad325cc2b279ef0a7c09731612b92fe39aad03869b12c014d2e06639fcff31 extends \Twig\Template
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
<div id=\"account-newsletter\" class=\"container\">
  
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
      <form action=\"";
        // line 14
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 17
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 19
        if (($context["newsletter"] ?? null)) {
            // line 20
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
                ";
            // line 22
            echo ($context["text_yes"] ?? null);
            echo " </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" />
                ";
            // line 25
            echo ($context["text_no"] ?? null);
            echo "</label>
              ";
        } else {
            // line 27
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" />
                ";
            // line 29
            echo ($context["text_yes"] ?? null);
            echo " </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
                ";
            // line 32
            echo ($context["text_no"] ?? null);
            echo "</label>
              ";
        }
        // line 34
        echo "            </div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 38
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 40
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 44
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 45
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 47
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  145 => 45,  141 => 44,  134 => 40,  127 => 38,  121 => 34,  116 => 32,  110 => 29,  106 => 27,  101 => 25,  95 => 22,  91 => 20,  89 => 19,  84 => 17,  78 => 14,  74 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/newsletter.twig", "");
    }
}
