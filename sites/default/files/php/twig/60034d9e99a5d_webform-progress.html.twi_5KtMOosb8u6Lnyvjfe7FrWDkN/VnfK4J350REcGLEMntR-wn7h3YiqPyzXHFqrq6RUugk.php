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

/* modules/contrib/webform/templates/webform-progress.html.twig */
class __TwigTemplate_72eeadc59bad93dfa0227f39799162c30b255f9786b0a9eaad4570930b77d7d0 extends \Twig\Template
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
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.progress"), "html", null, true);
        echo "

<div class=\"webform-progress\">

  ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bar"] ?? null), 24, $this->source), "html", null, true);
        echo "

  ";
        // line 26
        if ((($context["summary"] ?? null) || ($context["percentage"] ?? null))) {
            // line 27
            echo "    <div class=\"webform-progress__status\">
      ";
            // line 28
            if (($context["summary"] ?? null)) {
                // line 29
                echo "        <span class=\"webform-progress__summary\" data-webform-progress-summary>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 29, $this->source), "html", null, true);
                echo "</span>
        ";
                // line 30
                if (($context["percentage"] ?? null)) {
                    // line 31
                    echo "          <span class=\"webform-progress__percentage\">(<span data-webform-progress-percentage>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["percentage"] ?? null), 31, $this->source), "html", null, true);
                    echo "</span>)</span>
        ";
                }
                // line 33
                echo "      ";
            } else {
                // line 34
                echo "        <span class=\"webform-progress__percentage\" data-webform-progress-percentage>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["percentage"] ?? null), 34, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 36
            echo "    </div>
  ";
        }
        // line 38
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-progress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  80 => 36,  74 => 34,  71 => 33,  65 => 31,  63 => 30,  58 => 29,  56 => 28,  53 => 27,  51 => 26,  46 => 24,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-progress.html.twig", "C:\\xampp\\htdocs\\drupal-project\\modules\\contrib\\webform\\templates\\webform-progress.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26);
        static $filters = array("escape" => 20);
        static $functions = array("attach_library" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
