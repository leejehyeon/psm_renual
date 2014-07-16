<?php

/* theme-options/base_option.twig */
class __TwigTemplate_0bd388a85bb68b745b5e73ca5011222d96138f2276d185902b3bcacb55e79eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'variable' => array($this, 'block_variable'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"ai1ec-form-group\">
\t<label for=\"";
        // line 2
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"ai1ec-col-sm-4 ai1ec-col-xs-12 ai1ec-control-label\">
    ";
        // line 3
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo twig_escape_filter($this->env, $_label_, "html", null, true);
        echo "
  </label>
\t";
        // line 5
        $this->displayBlock('variable', $context, $blocks);
        // line 6
        echo "</div>
";
    }

    // line 5
    public function block_variable($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "theme-options/base_option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  36 => 6,  23 => 2,  20 => 1,  64 => 12,  55 => 10,  47 => 9,  42 => 8,  37 => 7,  33 => 5,  34 => 5,  31 => 4,  28 => 3,);
    }
}
