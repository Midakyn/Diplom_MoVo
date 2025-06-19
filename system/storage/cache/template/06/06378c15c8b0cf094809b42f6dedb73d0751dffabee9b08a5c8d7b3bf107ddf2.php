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

/* default/template/common/header.twig */
class __TwigTemplate_6af71a74eb657b535af556b6b5d29496e82ae998066ee81a918eeda74a5e2aae extends \Twig\Template
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
        echo "
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 8
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 9
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 10
        if (($context["description"] ?? null)) {
            // line 11
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 13
        if (($context["keywords"] ?? null)) {
            // line 14
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 16
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 23
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 23);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 23);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 23);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 26
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 30);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 30);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 33
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</head>
<body>
<nav id=\"top\">
  <div class=\"container\">";
        // line 38
        echo ($context["currency"] ?? null);
        echo "
    ";
        // line 39
        echo ($context["language"] ?? null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
      <a href=\"http://diplom/index.php?route=common/home\"><i class=\"fa fa-home\"></i></a>
        <li><a href=\"";
        // line 43
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
        <li class=\"dropdown\"><a href=\"";
        // line 44
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 46
        if (($context["logged"] ?? null)) {
            // line 47
            echo "            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 48
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 49
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 50
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 51
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 53
            echo "            <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 54
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 56
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 58
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 59
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 60
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"col-sm-5\">";
        // line 69
        echo ($context["search"] ?? null);
        echo "</div>
      <div class=\"col-sm-3\">";
        // line 70
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
  </div>
</header>
";
        // line 74
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 74,  262 => 70,  258 => 69,  242 => 60,  234 => 59,  226 => 58,  222 => 56,  215 => 54,  208 => 53,  201 => 51,  195 => 50,  189 => 49,  183 => 48,  176 => 47,  174 => 46,  165 => 44,  159 => 43,  152 => 39,  148 => 38,  143 => 35,  135 => 33,  131 => 32,  120 => 30,  116 => 29,  113 => 28,  104 => 26,  100 => 25,  87 => 23,  83 => 22,  75 => 16,  69 => 14,  67 => 13,  61 => 11,  59 => 10,  55 => 9,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
