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

/* themes/custom/DemoDesign/templates/paragraph/paragraph--text.html.twig */
class __TwigTemplate_5bd073181c00bda57777c5284856c243 extends \Twig\Template
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
        // line 1
        echo "<div class=\"relative bg-brand-dark overflow-hidden\">
  <div class=\" container px-3 mx-auto text-center p-10 sm:px-64 mb-10 z-0\">
    ";
        // line 3
        if ( !twig_test_empty($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pretext", [], "any", false, false, true, 3)))) {
            // line 4
            echo "      <dc-headline light class=\"mb-8\" level=\"h4\">
        ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pretext", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
            echo "
      </dc-headline>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ( !twig_test_empty($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 9)))) {
            // line 10
            echo "      <div class=\"mb-8 text-white z-10\">
        ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 11), 11, $this->source))), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ( !twig_test_empty($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text_title", [], "any", false, false, true, 15)))) {
            // line 16
            echo "      <dc-headline light class=\"mb-8\" level=\"h2\">
        ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text_title", [], "any", false, false, true, 17), 17, $this->source)), "html", null, true);
            echo "
      </dc-headline>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if ( !twig_test_empty($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text_link", [], "any", false, false, true, 21)))) {
            // line 22
            echo "      <dc-button class=\"flex justify-center mt-\" onclick=\"window.open('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text_link", [], "any", false, false, true, 22), 0, [], "any", false, false, true, 22)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 22, $this->source), "html", null, true);
            echo "');\">
        ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text_link", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 23, $this->source), "html", null, true);
            echo "
      </dc-button>
    ";
        }
        // line 26
        echo "
  </div>
  <img class=\"absolute hidden h-full md:block right-0 top-0 z-0\" src=\"../themes/custom/DemoDesign/assets/castle.png\" alt=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/DemoDesign/templates/paragraph/paragraph--text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  98 => 26,  92 => 23,  87 => 22,  85 => 21,  82 => 20,  76 => 17,  73 => 16,  71 => 15,  68 => 14,  62 => 11,  59 => 10,  57 => 9,  54 => 8,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/DemoDesign/templates/paragraph/paragraph--text.html.twig", "/var/www/html/web/themes/custom/DemoDesign/templates/paragraph/paragraph--text.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("field_value" => 3, "escape" => 5, "striptags" => 11, "render" => 11, "t" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['field_value', 'escape', 'striptags', 'render', 't'],
                []
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
