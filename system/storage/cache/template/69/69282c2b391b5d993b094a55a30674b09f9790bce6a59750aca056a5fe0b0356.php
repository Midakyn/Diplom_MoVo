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

/* extension/payment/oplata.twig */
class __TwigTemplate_afa3af50225d1e4665a78efbc87cfc6f2d758396244ad48bcf9994cb78fb247b extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <img src=\"view/image/payment/oplata.png\" alt=\"Fondy\" style=\"height:25px; margin-top:-5px;\"/>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 21
        echo ($context["text_edit"] ?? null);
        echo "</h3>
                <div class=\"pull-right text-muted\">ver.";
        // line 22
        echo ($context["extension_version"] ?? null);
        echo "</div>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 25
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\"
                      class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-order-status\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_order_status"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-style\" id=\"nav-tab-style\" class=\"hidden\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_style"] ?? null);
        echo "</a></li>
                    </ul>

                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">
                                    <span data-toggle=\"tooltip\"
                                          title=\"";
        // line 38
        echo ($context["tooltip_entry_status"] ?? null);
        echo "\">";
        echo ($context["entry_status"] ?? null);
        echo "</span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 42
        if (($context["payment_oplata_status"] ?? null)) {
            // line 43
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 44
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 46
            echo "                                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 49
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-environment\">
                                    <span data-toggle=\"tooltip\"
                                          title=\"";
        // line 56
        echo ($context["tooltip_entry_environment"] ?? null);
        echo "\">";
        echo ($context["entry_env"] ?? null);
        echo "</span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_environment\" class=\"form-control\"
                                            id=\"input-environment\">
                                        <option value=\"live\" ";
        // line 61
        echo (((($context["payment_oplata_environment"] ?? null) == "live")) ? ("selected") : (""));
        echo ">
                                            Live
                                        </option>
                                        <option value=\"test\" ";
        // line 64
        echo (((($context["payment_oplata_environment"] ?? null) == "test")) ? ("selected") : (""));
        echo ">
                                            Test
                                        </option>
                                    </select>
                                    <small id=\"input-environment-help-text\"
                                           class=\"form-text text-muted ";
        // line 69
        echo (((($context["payment_oplata_environment"] ?? null) != "test")) ? (" hidden") : (""));
        echo "\"
                                    >";
        // line 70
        echo ($context["help_entry_environment"] ?? null);
        echo "</small>
                                </div>
                            </div>

                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-merchant\">
                                    <span data-toggle=\"tooltip\"
                                          title=\"";
        // line 77
        echo ($context["tooltip_entry_merchant"] ?? null);
        echo "\">";
        echo ($context["entry_merchant"] ?? null);
        echo "</span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"payment_oplata_merchant\"
                                           value=\"";
        // line 81
        echo ($context["payment_oplata_merchant"] ?? null);
        echo "\"
                                           id=\"input-merchant\" class=\"form-control\" required/>
                                    ";
        // line 83
        if (($context["error_merchant"] ?? null)) {
            // line 84
            echo "                                        <span class=\"error\">";
            echo ($context["error_merchant"] ?? null);
            echo "</span>
                                    ";
        }
        // line 86
        echo "                                </div>
                            </div>

                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-secretkey\">
                                    <span data-toggle=\"tooltip\"
                                          title=\"";
        // line 92
        echo ($context["tooltip_entry_secretkey"] ?? null);
        echo "\">";
        echo ($context["entry_secretkey"] ?? null);
        echo "</span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"payment_oplata_secretkey\"
                                           value=\"";
        // line 96
        echo ($context["payment_oplata_secretkey"] ?? null);
        echo "\"
                                           id=\"input-secretkey\" class=\"form-control\" required/>
                                    ";
        // line 98
        if (($context["error_secretkey"] ?? null)) {
            // line 99
            echo "                                        <span class=\"error\">";
            echo ($context["error_secretkey"] ?? null);
            echo "</span>
                                    ";
        }
        // line 101
        echo "                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-process-payment-type\">
                                    <span data-toggle=\"tooltip\"
                                          title=\"";
        // line 107
        echo ($context["tooltip_entry_process_payment_type"] ?? null);
        echo "\">";
        echo ($context["entry_process_payment_type"] ?? null);
        echo "</span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_process_payment_type\" id=\"input-process-payment-type\"
                                            class=\"form-control\">
                                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["process_payment_types"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["pp_type"]) {
            // line 113
            echo "                                            <option value=\"";
            echo $context["key"];
            echo "\"
                                                    ";
            // line 114
            echo (((($context["payment_oplata_process_payment_type"] ?? null) == $context["key"])) ? ("selected") : (""));
            echo "
                                            >";
            // line 115
            echo $context["pp_type"];
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['pp_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-payment-type\">
                                    <span data-toggle=\"tooltip\"
                                          title=\"";
        // line 124
        echo ($context["tooltip_entry_payment_type"] ?? null);
        echo "\">";
        echo ($context["entry_payment_type"] ?? null);
        echo "</span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_type\" id=\"input-payment-type\" class=\"form-control\">
                                        <option value=\"common\" ";
        // line 128
        echo (((($context["payment_oplata_type"] ?? null) == "common")) ? (" selected") : (""));
        echo ">";
        echo ($context["entry_common_type"] ?? null);
        echo "</option>
                                        <option value=\"preauth\" ";
        // line 129
        echo (((($context["payment_oplata_type"] ?? null) == "preauth")) ? (" selected") : (""));
        echo ">";
        echo ($context["entry_preauth_type"] ?? null);
        echo "</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 135
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                                        <option value=\"0\">";
        // line 138
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 140
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 140);
            echo "\"
                                                    ";
            // line 141
            echo (((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 141) == ($context["payment_oplata_geo_zone_id"] ?? null))) ? ("selected") : (""));
            echo "
                                            >";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 142);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-sort-order\">";
        // line 150
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"payment_oplata_sort_order\"
                                           value=\"";
        // line 153
        echo ($context["payment_oplata_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\"
                                           id=\"input-sort-order\" class=\"form-control\"/>
                                </div>
                            </div>
                        </div><!-- /#-tab-general -->

                        <div class=\"tab-pane\" id=\"tab-order-status\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-order-status\">";
        // line 162
        echo ($context["entry_order_success_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_order_success_status_id\" id=\"input-order-status\"
                                            class=\"form-control\">
                                        ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 167
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 167);
            echo "\"
                                                    ";
            // line 168
            echo (((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 168) == ($context["payment_oplata_order_success_status_id"] ?? null))) ? ("selected") : (""));
            echo "
                                            >";
            // line 169
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 169);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-order-status\">";
        // line 177
        echo ($context["entry_order_cancelled_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_order_cancelled_status_id\" id=\"input-order-status\"
                                            class=\"form-control\">
                                        ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 182
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 182);
            echo "\"
                                                    ";
            // line 183
            echo (((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 183) == ($context["payment_oplata_order_cancelled_status_id"] ?? null))) ? ("selected") : (""));
            echo "
                                            >";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 184);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-order-status\">";
        // line 192
        echo ($context["entry_order_process_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_order_process_status_id\" id=\"input-order-status\"
                                            class=\"form-control\">
                                        ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 197
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 197);
            echo "\"
                                                    ";
            // line 198
            echo (((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 198) == ($context["payment_oplata_order_process_status_id"] ?? null))) ? ("selected") : (""));
            echo "
                                            >";
            // line 199
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 199);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-order-reverse-status\">";
        // line 207
        echo ($context["entry_order_reverse_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_order_reverse_status_id\"
                                            id=\"input-order-reverse-status\" class=\"form-control \">
                                        ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 212
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 212);
            echo "\"
                                                    ";
            // line 213
            echo (((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 213) == ($context["payment_oplata_order_reverse_status_id"] ?? null))) ? ("selected") : (""));
            echo "
                                            >";
            // line 214
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 214);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "                                    </select>
                                </div>
                            </div>
                        </div><!-- /#tab-order-status -->

                        <div class=\"tab-pane\" id=\"tab-style\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-style-type\">";
        // line 223
        echo ($context["entry_style_theme"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_style_type\" id=\"input-style-type\" class=\"form-control\">
                                        <option value=\"light\" ";
        // line 226
        echo (((($context["payment_oplata_style_type"] ?? null) == "light")) ? (" selected") : (""));
        echo ">";
        echo ($context["entry_light"] ?? null);
        echo "</option>
                                        <option value=\"dark\" ";
        // line 227
        echo (((($context["payment_oplata_style_type"] ?? null) == "dark")) ? (" selected") : (""));
        echo ">";
        echo ($context["entry_dark"] ?? null);
        echo "</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-style-preset\">";
        // line 233
        echo ($context["entry_style_preset"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payment_oplata_style_preset\" id=\"input-style-preset\" class=\"form-control\">
                                        ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_presets"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["style_preset"]) {
            // line 237
            echo "                                            <option value=\"";
            echo $context["key"];
            echo "\"
                                                    ";
            // line 238
            echo (((($context["payment_oplata_style_preset"] ?? null) == $context["key"])) ? ("selected") : (""));
            echo "
                                            >";
            // line 239
            echo $context["style_preset"];
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['style_preset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                                    </select>
                                </div>
                            </div>
                        </div><!-- /#tab-style -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    \$(() => {
        let \$inputProcessPaymentType = \$('#input-process-payment-type');
        let \$navTabStyle = \$('#nav-tab-style');

        if (\$inputProcessPaymentType.val() === 'built_in_checkout')
            \$navTabStyle.removeClass(\"hidden\");

        \$inputProcessPaymentType.on('change', function () {
            if (this.value === 'built_in_checkout'){
                \$navTabStyle.removeClass(\"hidden\");
            } else \$navTabStyle.addClass(\"hidden\");
        });


        \$('#input-environment').on('change', function () {
            let \$helpTextBlock = \$('#input-environment-help-text');

            if (this.value === 'test') {
                \$helpTextBlock.removeClass(\"hidden\");
            } else \$helpTextBlock.addClass(\"hidden\");
        })
    })
</script>
";
        // line 275
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/oplata.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 275,  576 => 241,  568 => 239,  564 => 238,  559 => 237,  555 => 236,  549 => 233,  538 => 227,  532 => 226,  526 => 223,  517 => 216,  509 => 214,  505 => 213,  500 => 212,  496 => 211,  489 => 207,  481 => 201,  473 => 199,  469 => 198,  464 => 197,  460 => 196,  453 => 192,  445 => 186,  437 => 184,  433 => 183,  428 => 182,  424 => 181,  417 => 177,  409 => 171,  401 => 169,  397 => 168,  392 => 167,  388 => 166,  381 => 162,  367 => 153,  361 => 150,  353 => 144,  345 => 142,  341 => 141,  336 => 140,  332 => 139,  328 => 138,  322 => 135,  311 => 129,  305 => 128,  296 => 124,  287 => 117,  279 => 115,  275 => 114,  270 => 113,  266 => 112,  256 => 107,  248 => 101,  242 => 99,  240 => 98,  235 => 96,  226 => 92,  218 => 86,  212 => 84,  210 => 83,  205 => 81,  196 => 77,  186 => 70,  182 => 69,  174 => 64,  168 => 61,  158 => 56,  149 => 49,  144 => 47,  139 => 46,  134 => 44,  129 => 43,  127 => 42,  118 => 38,  107 => 30,  103 => 29,  99 => 28,  93 => 25,  87 => 22,  83 => 21,  75 => 15,  64 => 13,  60 => 12,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/oplata.twig", "");
    }
}
