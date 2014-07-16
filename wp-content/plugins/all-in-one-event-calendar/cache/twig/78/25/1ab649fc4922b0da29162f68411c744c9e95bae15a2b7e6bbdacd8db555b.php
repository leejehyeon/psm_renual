<?php

/* theme-options/size.twig */
class __TwigTemplate_78251ab649fc4922b0da29162f68411c744c9e95bae15a2b7e6bbdacd8db555b extends Twig_Template
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
        $context["__internal_4c06828f6378b738fbb6669a54b74099e3c9b601592573c60f6dc806fce00e47"] = $this->env->loadTemplate("form-elements/input.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_variable($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"ai1ec-col-sm-6 ai1ec-col-xs-9\">
    ";
        // line 5
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
        echo $context["__internal_4c06828f6378b738fbb6669a54b74099e3c9b601592573c60f6dc806fce00e47"]->getinput($_id_, $_id_, $_value_, "text", $_args_);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/size.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  43 => 7,  38 => 6,  35 => 5,  32 => 4,  27 => 3,  25 => 2,  41 => 5,  36 => 5,  23 => 2,  20 => 1,  64 => 12,  55 => 10,  47 => 9,  42 => 8,  37 => 7,  33 => 4,  34 => 5,  31 => 4,  28 => 3,);
    }
}
