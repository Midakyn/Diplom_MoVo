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

/* default/template//extension/payment/oplata.twig */
class __TwigTemplate_ef5271150eba10487ef4e1c5f2861c7ee951960f68d5fd6a8b375d70afbc13c2 extends \Twig\Template
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
        if (($context["error_message"] ?? null)) {
            // line 2
            echo "<div class=\"alert alert-warning\">
  ";
            // line 3
            echo ($context["error_message"] ?? null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
</div>
";
        } elseif (        // line 6
($context["fondy_options"] ?? null)) {
            // line 7
            echo "  <link rel=\"stylesheet\" href=\"https://pay.fondy.eu/latest/checkout-vue/checkout.css\">
  <div id=\"checkout-container\"></div>
  <script>
    const initFondyWidget = () => fondy(\"#checkout-container\", ";
            // line 10
            echo ($context["fondy_options"] ?? null);
            echo ");

    if (!document.getElementById('fondy_script')){
      let fondyScript = document.createElement('script');
      fondyScript.src = 'https://pay.fondy.eu/latest/checkout-vue/checkout.js';
      fondyScript.id = 'fondy_script'
      fondyScript.onload = initFondyWidget;
      document.head.appendChild(fondyScript);
    }else initFondyWidget();
  </script>
";
        } else {
            // line 21
            echo "  <div class=\"buttons\">
    <div class=\"pull-right\">
      <a href=\"";
            // line 23
            echo ($context["checkout_url"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_confirm"] ?? null);
            echo "</a>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template//extension/payment/oplata.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  69 => 21,  55 => 10,  50 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template//extension/payment/oplata.twig", "");
    }
}
