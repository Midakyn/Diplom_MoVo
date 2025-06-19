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

/* default/template/extension/module/banner.twig */
class __TwigTemplate_9bc5fb463d86cdf1d7bb4f6bab56970480c7d325e327e51c36c8145e69babdb2 extends \Twig\Template
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
<script type=\"text/javascript\"><!--
\$('#banner";
        // line 3
        echo ($context["module"] ?? null);
        echo "').swiper({
\teffect: 'fade',
\tautoplay: 2500,
    autoplayDisableOnInteraction: false
});
--></script> ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/banner.twig", "");
    }
}
