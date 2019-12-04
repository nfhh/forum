<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* confirm_body.html */
class __TwigTemplate_72952be87c5ff068244fbf5fdc979d213af43e43254d4fcda9c6d89684487ed7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((isset($context["S_AJAX_REQUEST"]) ? $context["S_AJAX_REQUEST"] : null)) {
            // line 2
            echo "
\t<h3>";
            // line 3
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3>
\t<p>";
            // line 4
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>

\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "\" class=\"button2\" />&nbsp;
\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 8
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

";
        } else {
            // line 12
            echo "
";
            // line 13
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "confirm_body.html", 13)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 14
            echo "
<form id=\"confirm\" method=\"post\" action=\"";
            // line 15
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\">

<fieldset>
\t<h1>";
            // line 18
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h1>
\t<p>";
            // line 19
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>

\t";
            // line 21
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "

\t<div style=\"text-align: center;\">
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 24
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "\" class=\"button2\" />&nbsp; 
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button2\" />
\t</div>

</fieldset>
</form>

";
            // line 31
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "confirm_body.html", 31)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  99 => 25,  95 => 24,  89 => 21,  84 => 19,  80 => 18,  74 => 15,  71 => 14,  59 => 13,  56 => 12,  49 => 8,  45 => 7,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "confirm_body.html", "");
    }
}
