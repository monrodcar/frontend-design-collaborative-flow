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

/* themes/custom/DemoDesign/templates/paragraph/paragraph--cards.html.twig */
class __TwigTemplate_aca1f07e16f9cf8012f0768d063d5070 extends \Twig\Template
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
        echo "<div class=\"grid sm:grid-cols-2 md:grid-cols-4 gap-10 py-5 mb-10 container px-3 mx-auto\">
  <dc-card variant=\"compact\" highlight label=\"20-23\">
    September
  </dc-card>
  <dc-card variant=\"compact\" label=\"60+\">
    Speaker
  </dc-card>
  <dc-card variant=\"compact\" label=\"800+\">
    Summits & Training
  </dc-card>
  <dc-card variant=\"compact\" label=\"3\">
    Workshops
  </dc-card>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/DemoDesign/templates/paragraph/paragraph--cards.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/DemoDesign/templates/paragraph/paragraph--cards.html.twig", "/var/www/html/web/themes/custom/DemoDesign/templates/paragraph/paragraph--cards.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
