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

/* themes/custom/DemoDesign/templates/content/node--page--teaser.html.twig */
class __TwigTemplate_766623126bfea4c82cb801d2c980b8e4 extends \Twig\Template
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
        $context["card_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["label" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(        // line 3
($context["label"] ?? null), 3, $this->source)), "has-action" => (( !(null ===         // line 4
($context["url"] ?? null))) ? (true) : (false)), "has-more" => true, "class" => "bg-brand text-white"]);
        // line 9
        echo "
<dc-card ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["card_attributes"] ?? null), 10, $this->source), "html", null, true);
        echo ">

  <div slot=\"media\">
    ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_preview_image", [], "any", false, false, true, 13), 13, $this->source)), "html", null, true);
        echo "
  </div>
  <span class=\"text-3xl\">
    ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_preview_text", [], "any", false, false, true, 16), 16, $this->source)), "html", null, true);
        echo "
  </span>
  <dc-button secondary not-rounded onclick=\"window.open('";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 18, $this->source), "html", null, true);
        echo "');\" slot=\"action\">
    ＋
  </dc-button>

</dc-card>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/DemoDesign/templates/content/node--page--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  58 => 16,  52 => 13,  46 => 10,  43 => 9,  41 => 4,  40 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/DemoDesign/templates/content/node--page--teaser.html.twig", "/var/www/html/web/themes/custom/DemoDesign/templates/content/node--page--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("render" => 3, "escape" => 10, "field_value" => 13);
        static $functions = array("create_attribute" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['render', 'escape', 'field_value'],
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
