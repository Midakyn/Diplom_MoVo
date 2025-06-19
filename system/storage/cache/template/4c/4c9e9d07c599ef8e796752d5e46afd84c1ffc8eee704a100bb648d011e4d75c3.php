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

/* default/template/checkout/checkout.twig */
class __TwigTemplate_b887d5c79341b9be8118bc4b775ffa69b163af533187b842072a6b99d11bfbc0 extends \Twig\Template
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
<div id=\"checkout-checkout\" class=\"container\">
  
  ";
        // line 4
        if (($context["error_warning"] ?? null)) {
            // line 5
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 9
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 22
        echo ($context["text_checkout_option"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        // line 28
        if (( !($context["logged"] ?? null) && (($context["account"] ?? null) != "guest"))) {
            // line 29
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 31
            echo ($context["text_checkout_account"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        } else {
            // line 38
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 40
            echo ($context["text_checkout_payment_address"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 47
        echo "        ";
        if (($context["shipping_required"] ?? null)) {
            // line 48
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 50
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 58
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 65
        echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 67
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 75
        echo ($context["text_checkout_confirm"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
      </div>
      ";
        // line 82
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 83
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$(document).on('change', 'input[name=\\'account\\']', function() {
\tif (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 89
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 91
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t}
\t} else {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 95
        echo ($context["text_checkout_account"] ?? null);
        echo "');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 97
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');
\t\t}
\t}
});

";
        // line 102
        if ( !($context["logged"] ?? null)) {
            // line 103
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           \$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 110
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        } else {
            // line 120
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 127
            echo ($context["text_checkout_payment_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        }
        // line 137
        echo "
// Checkout
\$(document).delegate('#button-account', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
        dataType: 'html',
        beforeSend: function() {
        \t\$('#button-account').button('loading');
\t\t},
        complete: function() {
\t\t\t\$('#button-account').button('reset');
        },
        success: function(html) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            \$('#collapse-payment-address .panel-body').html(html);

\t\t\tif (\$('input[name=\\'account\\']:checked').val() == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 156
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 158
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t}

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Login
\$(document).delegate('#button-login', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/login/save',
        type: 'post',
        data: \$('#collapse-checkout-option :input'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-login').button('loading');
\t\t},
        complete: function() {
            \$('#button-login').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'email\\']').parent().addClass('has-error');
\t\t\t\t\$('input[name=\\'password\\']').parent().addClass('has-error');
\t\t   }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Register
\$(document).delegate('#button-register', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/register/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-register').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-register').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 238
        if (($context["shipping_required"] ?? null)) {
            // line 239
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 253
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 262
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

   \t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 266
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 267
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 268
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 281
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 285
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 286
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 287
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 295
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 301
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 305
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 312
        echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-register').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 322
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$(document).delegate('#button-payment-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-payment-address').button('loading');
\t\t},
        complete: function() {
\t\t\t\$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                ";
        // line 373
        if (($context["shipping_required"] ?? null)) {
            // line 374
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/shipping_address',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 380
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 384
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 385
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 386
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
                ";
        } else {
            // line 404
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 410
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 414
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});\t\t\t\t
\t\t\t\t});
                ";
        }
        // line 432
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$(document).delegate('#button-shipping-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-address').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 485
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 489
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 490
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
\t\t\t\t\t\t
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest
\$(document).delegate('#button-guest', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
       \t\t\$('#button-guest').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 562
        if (($context["shipping_required"] ?? null)) {
            // line 563
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 580
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t    \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 589
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 593
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 594
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 610
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 614
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 615
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 616
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 624
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 633
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 637
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 644
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest Shipping
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-guest-shipping').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest-shipping').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 697
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 701
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 702
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-shipping-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-shipping-method').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-method').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 746
        echo ($context["text_checkout_payment_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 750
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-payment-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_method/save',
        type: 'post',
        data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
         \t\$('#button-payment-method').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-payment-method').button('reset');
                
                if (json['error']['warning']) {
                    \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/confirm',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-payment-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-checkout-confirm .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 794
        echo ($context["text_checkout_confirm"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
\t\t\t\t\t},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 810
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1081 => 810,  1062 => 794,  1015 => 750,  1008 => 746,  961 => 702,  957 => 701,  950 => 697,  895 => 644,  885 => 637,  878 => 633,  867 => 624,  856 => 616,  852 => 615,  848 => 614,  841 => 610,  822 => 594,  818 => 593,  811 => 589,  799 => 580,  780 => 563,  778 => 562,  703 => 490,  699 => 489,  692 => 485,  637 => 432,  616 => 414,  609 => 410,  601 => 404,  580 => 386,  576 => 385,  572 => 384,  565 => 380,  557 => 374,  555 => 373,  501 => 322,  489 => 312,  479 => 305,  472 => 301,  464 => 295,  453 => 287,  449 => 286,  445 => 285,  438 => 281,  422 => 268,  418 => 267,  414 => 266,  407 => 262,  395 => 253,  379 => 239,  377 => 238,  294 => 158,  289 => 156,  268 => 137,  255 => 127,  246 => 120,  233 => 110,  224 => 103,  222 => 102,  214 => 97,  209 => 95,  202 => 91,  197 => 89,  188 => 83,  184 => 82,  174 => 75,  163 => 67,  159 => 65,  149 => 58,  138 => 50,  134 => 48,  131 => 47,  121 => 40,  117 => 38,  107 => 31,  103 => 29,  101 => 28,  92 => 22,  85 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  58 => 10,  53 => 9,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/checkout.twig", "");
    }
}
