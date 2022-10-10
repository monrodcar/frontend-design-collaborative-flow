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

/* themes/custom/DemoDesign/templates/paragraph/paragraph--image-text.html.twig */
class __TwigTemplate_fc91d426d0eb7c5cbd3e895cae6d0075 extends \Twig\Template
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
        $context["image_align"] = ["image_left" => false, "image_right" => "right"];
        // line 6
        echo "
";
        // line 8
        $context["image_text_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["image-align" => (($__internal_compile_0 =         // line 9
($context["image_align"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["data_position"] ?? null)] ?? null) : null)]);
        // line 12
        echo "
<div class=\"container py-5 mb-10 px-3 mx-auto \">
  <dc-image-text ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_text_attributes"] ?? null), 14, $this->source), "html", null, true);
        echo ">
    <div slot=\"media\">
      ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 16), 16, $this->source)), "html", null, true);
        echo "
    </div>

    ";
        // line 19
        if ( !twig_test_empty($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 19)))) {
            // line 20
            echo "      <dc-headline pretext=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pretitle", [], "any", false, false, true, 20), 20, $this->source)), "html", null, true);
            echo "\" level=\"h2\">
        ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 21), 21, $this->source)), "html", null, true);
            echo "
      </dc-headline>
    ";
        }
        // line 24
        echo "
    <div class=\"text-default mt-5 mb-10\">
      ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
        echo "
    </div>

    ";
        // line 29
        if ( !twig_test_empty($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 29)))) {
            // line 30
            echo "      <dc-button rounded onclick=\"window.open('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 30), 0, [], "any", false, false, true, 30)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#url"] ?? null) : null), 30, $this->source), "html", null, true);
            echo "');\">
        ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 31), 0, [], "any", false, false, true, 31)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 31, $this->source), "html", null, true);
            echo "
      </dc-button>
    ";
        }
        // line 34
        echo "  </dc-image-text>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/DemoDesign/templates/paragraph/paragraph--image-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  92 => 31,  87 => 30,  85 => 29,  79 => 26,  75 => 24,  69 => 21,  64 => 20,  62 => 19,  56 => 16,  51 => 14,  47 => 12,  45 => 9,  44 => 8,  41 => 6,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/DemoDesign/templates/paragraph/paragraph--image-text.html.twig", "/var/www/html/web/themes/custom/DemoDesign/templates/paragraph/paragraph--image-text.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 19);
        static $filters = array("escape" => 14, "field_value" => 16);
        static $functions = array("create_attribute" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'field_value'],
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
