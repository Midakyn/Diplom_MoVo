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

/* default/template/information/contact.twig */
class __TwigTemplate_49fca3b652f6027f292b5ab41ae1974459582cbaf9290cf3755b96e09f061216 extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
 
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
      <h3>";
        // line 14
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 18
        if (($context["image"] ?? null)) {
            // line 19
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 21
        echo "            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 23
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 25
        if (($context["geocode"] ?? null)) {
            // line 26
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 28
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 29
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 30
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 32
        if (($context["fax"] ?? null)) {
            // line 33
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 34
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 36
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 38
        if (($context["open"] ?? null)) {
            // line 39
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 40
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 43
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 44
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 45
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 47
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 51
        if (($context["locations"] ?? null)) {
            // line 52
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 55
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 57);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 57);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 59);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 63);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 63);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 63);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 65
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 65);
                echo "</strong><br/>
                  <address>
                  ";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 67);
                echo "
                  </address>
                  ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 70));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 72
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 73
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 74);
                echo "<br/>
                  <br/>
                  ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 78);
                    echo "
                  ";
                }
                // line 80
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 84);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 87
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 89);
                    echo "
                  ";
                }
                // line 91
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "      </div>
      ";
        }
        // line 99
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 101
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 103
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 105
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 106
        if (($context["error_name"] ?? null)) {
            // line 107
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 109
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 112
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 114
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 115
        if (($context["error_email"] ?? null)) {
            // line 116
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 118
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 121
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 123
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 124
        if (($context["error_enquiry"] ?? null)) {
            // line 125
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 127
        echo "            </div>
          </div>
          ";
        // line 129
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 133
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 137
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 138
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 140
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 140,  407 => 138,  403 => 137,  396 => 133,  389 => 129,  385 => 127,  379 => 125,  377 => 124,  373 => 123,  368 => 121,  363 => 118,  357 => 116,  355 => 115,  351 => 114,  346 => 112,  341 => 109,  335 => 107,  333 => 106,  329 => 105,  324 => 103,  319 => 101,  313 => 99,  309 => 97,  298 => 91,  293 => 89,  288 => 88,  285 => 87,  279 => 84,  274 => 83,  272 => 82,  268 => 80,  263 => 78,  258 => 77,  256 => 76,  251 => 74,  247 => 73,  244 => 72,  234 => 70,  232 => 69,  227 => 67,  221 => 65,  211 => 63,  209 => 62,  203 => 59,  196 => 57,  192 => 55,  188 => 54,  182 => 52,  180 => 51,  174 => 47,  169 => 45,  164 => 44,  161 => 43,  155 => 40,  150 => 39,  148 => 38,  144 => 36,  139 => 34,  134 => 33,  132 => 32,  127 => 30,  123 => 29,  120 => 28,  110 => 26,  108 => 25,  103 => 23,  97 => 21,  87 => 19,  85 => 18,  78 => 14,  74 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
