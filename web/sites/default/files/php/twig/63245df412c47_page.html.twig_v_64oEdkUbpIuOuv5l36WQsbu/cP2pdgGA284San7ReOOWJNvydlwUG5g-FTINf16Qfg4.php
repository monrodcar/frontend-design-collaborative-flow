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

/* themes/custom/DemoDesign/templates/layout/page.html.twig */
class __TwigTemplate_a0785c1b4c2ad0c63d72f36e63116684 extends \Twig\Template
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
        // line 53
        echo "<div id=\"page-wrapper\">
  <div
    id=\"page\">

    ";
        // line 58
        echo "    <header class=\"container pt-4 px-3 mx-auto\" role=\"banner\">
      <div class=\"flex flex-col sm:flex-row justify-between items-center section layout-container clearfix\">
        <a href=\"#\" rel=\"home\" slot=\"branding\">
          <img src=\" ../themes/custom/DemoDesign/assets/Logo-talks.png\" alt=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "\"/>
        </a>
        <div class=\"flex items-center gap-5 order-last\">
          <a href=\"#\" class=\"text-black\" rel=\"home\" slot=\"branding\">
            Speakers
          </a>
          <a href=\"#\" class=\"text-black\" rel=\"home\" slot=\"branding\">
            Agenda
          </a>
          <a href=\"#\" class=\"text-black\" rel=\"home\" slot=\"branding\">
            FAQ
          </a>
          <dc-button>
            Register
          </dc-button>
        </div>
      </div>
    </header>

    ";
        // line 81
        echo "    <div class=\"bg-background\">
      ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
      <div id=\"main\" class=\"layout-main clearfix\">
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section>
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
          </section>
        </main>

      </div>
    </div>

    ";
        // line 95
        echo "    <footer class=\"container px-3 mx-auto\">
      <div class=\"flex flex-col sm:flex-row justify-between layout-container\">
        <a href=\"";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" rel=\"home\" slot=\"branding\">
          <img class=\"py-10 max-w-xs\" src=\" ../themes/custom/DemoDesign/assets/drupalcon-logo.png\"/>
        </a>
        <a href=\"https://www.1xinternet.de/en\" rel=\"home\" slot=\"branding\">
          <img class=\"py-10 max-w-xs\" src=\" ../themes/custom/DemoDesign/assets/logo.png\" alt=\"";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "\"/>
        </a>
      </div>
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/DemoDesign/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 101,  97 => 97,  93 => 95,  83 => 87,  75 => 82,  72 => 81,  50 => 61,  45 => 58,  39 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/DemoDesign/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/DemoDesign/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 61, "escape" => 82);
        static $functions = array("path" => 97);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t', 'escape'],
                ['path']
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
