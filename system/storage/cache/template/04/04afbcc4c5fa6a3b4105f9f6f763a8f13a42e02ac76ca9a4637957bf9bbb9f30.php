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

/* default/template/common/footer.twig */
class __TwigTemplate_7c4226d24e3745caf859696d134137e2392f8a62deb8f73d042478819abce343 extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        if (($context["informations"] ?? null)) {
            // line 5
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 6
            echo ($context["text_service"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
            // line 8
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 9
            echo ($context["return"] ?? null);
            echo "\">";
            echo ($context["text_return"] ?? null);
            echo "</a></li>
        
        </ul>
      </div>
      ";
        }
        // line 14
        echo "      
      <div class=\"col-sm-3\">
        <h5>";
        // line 16
        echo ($context["text_extra"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
         
          <li><a href=\"";
        // line 19
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 20
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 21
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 25
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 27
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 28
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 29
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 30
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
    </div>
   
  </div>
</footer>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 38
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 38);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 38);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 38);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 41
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 43,  155 => 41,  151 => 40,  138 => 38,  134 => 37,  122 => 30,  116 => 29,  110 => 28,  104 => 27,  99 => 25,  90 => 21,  84 => 20,  78 => 19,  72 => 16,  68 => 14,  58 => 9,  52 => 8,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
