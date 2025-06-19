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

/* default/template/affiliate/login.twig */
class __TwigTemplate_d8516005cbfb1cb3aa1ef9eeddd48be4d79916ecb0ecc8c1f31b4f12246b5d5e extends \Twig\Template
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
<div id=\"affiliate-login\" class=\"container\">
  
  ";
        // line 4
        if (($context["success"] ?? null)) {
            // line 5
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 7
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 8
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 10
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 11
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 20
        echo ($context["text_description"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 24
        echo ($context["text_new_affiliate"] ?? null);
        echo "</h2>
            <p>";
        // line 25
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <a class=\"btn btn-primary\" href=\"";
        // line 26
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 30
        echo ($context["text_returning_affiliate"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 31
        echo ($context["text_i_am_returning_affiliate"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 34
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 35
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 38
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 39
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 40
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a> </div>
              <input type=\"submit\" value=\"";
        // line 41
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 42
        if (($context["redirect"] ?? null)) {
            // line 43
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 45
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 49
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 50
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 52
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/affiliate/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 52,  183 => 50,  179 => 49,  173 => 45,  167 => 43,  165 => 42,  161 => 41,  155 => 40,  149 => 39,  145 => 38,  137 => 35,  133 => 34,  128 => 32,  124 => 31,  120 => 30,  111 => 26,  107 => 25,  103 => 24,  96 => 20,  92 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  67 => 12,  65 => 11,  60 => 10,  54 => 8,  51 => 7,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/affiliate/login.twig", "");
    }
}
