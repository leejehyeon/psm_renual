<?php

/* theme-options/color-picker.twig */
class __TwigTemplate_46e415a13cc0404c6e62ab4c5c9eed60174179ddee97b41cafc5e392ee642225 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_variable($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "<div class=\"ai1ec-col-sm-6 ai1ec-col-xs-9\">
  <div class=\"ai1ec-input-group color colorpickers\"
    data-color=\"";
        // line 7
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_, "html", null, true);
        echo "\"
    data-color-format=\"";
        // line 8
        if (isset($context["format"])) { $_format_ = $context["format"]; } else { $_format_ = null; }
        echo twig_escape_filter($this->env, $_format_, "html", null, true);
        echo "\">
  \t<input type=\"text\" id=\"";
        // line 9
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" name=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"ai1ec-form-control\"
      ";
        // line 10
        if (isset($context["readonly"])) { $_readonly_ = $context["readonly"]; } else { $_readonly_ = null; }
        echo twig_escape_filter($this->env, $_readonly_, "html", null, true);
        echo " value=\"";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_, "html", null, true);
        echo "\">
  \t<span class=\"ai1ec-input-group-addon\">
      <i style=\"background-color: ";
        // line 12
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_, "html", null, true);
        echo "\"></i>
    </span>
  </div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "theme-options/color-picker.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  55 => 10,  47 => 9,  42 => 8,  37 => 7,  33 => 5,  34 => 4,  31 => 4,  28 => 3,);
    }
}
