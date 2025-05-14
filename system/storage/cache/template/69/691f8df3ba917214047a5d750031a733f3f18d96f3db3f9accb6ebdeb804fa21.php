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

/* mail/customer_approve.twig */
class __TwigTemplate_80611c08e2202ee067e8f5b26ae987a925447ee41e97a23297e8aa306bf6e05d extends \Twig\Template
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
        echo ($context["text_welcome"] ?? null);
        echo "

";
        // line 3
        echo ($context["text_login"] ?? null);
        echo "

";
        // line 5
        echo ($context["login"] ?? null);
        echo "

";
        // line 7
        echo ($context["text_service"] ?? null);
        echo "

";
        // line 9
        echo ($context["text_thanks"] ?? null);
        echo "
";
        // line 10
        echo ($context["store"] ?? null);
    }

    public function getTemplateName()
    {
        return "mail/customer_approve.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  57 => 9,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/customer_approve.twig", "");
    }
}
