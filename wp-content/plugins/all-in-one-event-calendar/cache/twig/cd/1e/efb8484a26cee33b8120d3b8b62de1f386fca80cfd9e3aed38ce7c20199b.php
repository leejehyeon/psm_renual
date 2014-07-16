<?php

/* theme-options/bootstrap_tabs.twig */
class __TwigTemplate_cd1eefb8484a26cee33b8120d3b8b62de1f386fca80cfd9e3aed38ce7c20199b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bootstrap_tabs.twig");

        $this->blocks = array(
            'extra_html' => array($this, 'block_extra_html'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extra_html($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $context["__internal_8b3dfb8c4831126a97948c944d61c901310f570072385d68553ad8c344961d64"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 4
        echo "\t<div class=\"ai1ec-text-right\">
\t\t<div class=\"ai1ec-btn-toolbar\">
\t\t\t";
        // line 6
        if (isset($context["submit"])) { $_submit_ = $context["submit"]; } else { $_submit_ = null; }
        echo $context["__internal_8b3dfb8c4831126a97948c944d61c901310f570072385d68553ad8c344961d64"]->getbutton($this->getAttribute($_submit_, "id"), $this->getAttribute($_submit_, "id"), $this->getAttribute($_submit_, "value"), "submit", $this->getAttribute($_submit_, "args"));
        echo "
\t\t\t";
        // line 7
        if (isset($context["reset"])) { $_reset_ = $context["reset"]; } else { $_reset_ = null; }
        echo $context["__internal_8b3dfb8c4831126a97948c944d61c901310f570072385d68553ad8c344961d64"]->getbutton($this->getAttribute($_reset_, "id"), $this->getAttribute($_reset_, "id"), $this->getAttribute($_reset_, "value"), "submit", $this->getAttribute($_reset_, "args"));
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  43 => 7,  38 => 6,  35 => 5,  32 => 4,  27 => 3,  25 => 2,  41 => 5,  36 => 5,  23 => 2,  20 => 1,  64 => 12,  55 => 10,  47 => 9,  42 => 8,  37 => 7,  33 => 4,  34 => 4,  31 => 3,  28 => 2,);
    }
}
