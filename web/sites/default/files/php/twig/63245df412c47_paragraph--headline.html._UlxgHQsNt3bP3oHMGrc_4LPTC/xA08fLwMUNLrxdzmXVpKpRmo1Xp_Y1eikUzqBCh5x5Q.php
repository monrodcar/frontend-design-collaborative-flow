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

/* themes/custom/DemoDesign/templates/paragraph/paragraph--headline.html.twig */
class __TwigTemplate_a86c29d1f74ee6160c0d8f69c1a25098 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["headline_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["level" =>         // line 3
($context["headline_type"] ?? null), "align" =>         // line 4
($context["headline_alignment"] ?? null)]);
        // line 7
        echo "
<div class=\"container py-5 mb-10 px-3 mx-auto \">
  <dc-headline pretext=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_preheadline", [], "any", false, false, true, 9), 9, $this->source)), "html", null, true);
        echo "\" level=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["headline_attributes"] ?? null), "level", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\" align=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["headline_attributes"] ?? null), "align", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
    ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 10), 10, $this->source))), "html", null, true);
        echo "
  </dc-headline>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/DemoDesign/templates/paragraph/paragraph--headline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  47 => 9,  43 => 7,  41 => 4,  40 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/DemoDesign/templates/paragraph/paragraph--headline.html.twig", "/var/www/html/web/themes/custom/DemoDesign/templates/paragraph/paragraph--headline.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("escape" => 9, "field_value" => 9, "striptags" => 10, "render" => 10);
        static $functions = array("create_attribute" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'field_value', 'striptags', 'render'],
                ['create_attribute']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
