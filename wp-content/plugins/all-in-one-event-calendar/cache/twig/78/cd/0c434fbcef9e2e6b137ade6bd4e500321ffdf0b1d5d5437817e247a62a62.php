<?php

/* theme-options/font.twig */
class __TwigTemplate_78cd0c434fbcef9e2e6b137ade6bd4e500321ffdf0b1d5d5437817e247a62a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("theme-options/base_option.twig");

        $this->blocks = array(
            'variable' => array($this, 'block_variable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "theme-options/base_option.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_13912b056cc62dcd3ab38e82f76f85bb4c96cf9ee9b0507fe6f9b25a1617a69d"] = $this->env->loadTemplate("form-elements/select.twig");
        // line 3
        $context["__internal_e75971941ab32fc1ed509176eceb3839c01f8434b702c12a0fa8480128a08c18"] = $this->env->loadTemplate("form-elements/input.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_variable($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"ai1ec-col-sm-6 ai1ec-col-xs-9\">
    ";
        // line 6
        if (isset($context["select"])) { $_select_ = $context["select"]; } else { $_select_ = null; }
        echo $context["__internal_13912b056cc62dcd3ab38e82f76f85bb4c96cf9ee9b0507fe6f9b25a1617a69d"]->getselect($this->getAttribute($_select_, "id"), $this->getAttribute($_select_, "id"), $this->getAttribute($_select_, "args"), $this->getAttribute($_select_, "options"));
        echo "
    ";
        // line 7
        if (isset($context["input"])) { $_input_ = $context["input"]; } else { $_input_ = null; }
        echo $context["__internal_e75971941ab32fc1ed509176eceb3839c01f8434b702c12a0fa8480128a08c18"]->getinput($this->getAttribute($_input_, "id"), $this->getAttribute($_input_, "id"), $this->getAttribute($_input_, "value"), "text", $this->getAttribute($_input_, "args"));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/font.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  38 => 6,  35 => 5,  32 => 4,  27 => 3,  25 => 2,  41 => 5,  36 => 6,  23 => 2,  20 => 1,  64 => 12,  55 => 10,  47 => 9,  42 => 8,  37 => 7,  33 => 5,  34 => 5,  31 => 4,  28 => 3,);
    }
}
