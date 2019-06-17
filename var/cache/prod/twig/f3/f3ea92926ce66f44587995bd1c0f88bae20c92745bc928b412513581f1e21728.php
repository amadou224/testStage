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

/* @EasyAdmin/default/includes/_select2_widget.html.twig */
class __TwigTemplate_c049ac23aec203be4cf2058aea0afeb5981363f6d392dd91f13a0ce1b15cd706 extends \Twig\Template
{
    private $source;

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
        // line 1
        $context["_select2_locales"] = [0 => "ar", 1 => "az", 2 => "bg", 3 => "ca", 4 => "cs", 5 => "da", 6 => "de", 7 => "el", 8 => "en", 9 => "es", 10 => "et", 11 => "eu", 12 => "fa", 13 => "fi", 14 => "fr", 15 => "gl", 16 => "he", 17 => "hi", 18 => "hr", 19 => "hu", 20 => "id", 21 => "is", 22 => "it", 23 => "ja", 24 => "km", 25 => "ko", 26 => "lt", 27 => "lv", 28 => "mk", 29 => "ms", 30 => "nb", 31 => "nl", 32 => "pl", 33 => "pt-BR", 34 => "pt", 35 => "ro", 36 => "ru", 37 => "sk", 38 => "sr-Cyrl", 39 => "sr", 40 => "sv", 41 => "th", 42 => "tr", 43 => "uk", 44 => "vi", 45 => "zh-CN", 46 => "zh-TW"];
        // line 2
        $context["_app_language"] = twig_first($this->env, twig_split_filter($this->env, twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "locale", []), "-")), "_"));
        // line 3
        $context["_select2_locale"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "locale", []), ($context["_select2_locales"] ?? null))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["app"] ?? null), "request", []), "locale", [])) : (((twig_in_filter(        // line 5
($context["_app_language"] ?? null), ($context["_select2_locales"] ?? null))) ? (($context["_app_language"] ?? null)) : ("en"))));
        // line 7
        echo "
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/easyadmin/select2/i18n/" . ($context["_select2_locale"] ?? null)) . ".js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
  \$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it

    function init() {
      \$('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '";
        // line 17
        echo twig_escape_filter($this->env, ($context["_select2_locale"] ?? null), "html", null, true);
        echo "'
      });
    }

    \$(document).on('easyadmin.collection.item-added', init);
    init();
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_select2_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  46 => 8,  43 => 7,  41 => 5,  40 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/includes/_select2_widget.html.twig", "/homepages/15/d190186549/htdocs/Symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_select2_widget.html.twig");
    }
}
