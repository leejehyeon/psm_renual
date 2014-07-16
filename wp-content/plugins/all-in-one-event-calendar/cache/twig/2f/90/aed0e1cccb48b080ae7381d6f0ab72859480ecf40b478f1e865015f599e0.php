<?php

/* setting/select.twig */
class __TwigTemplate_2f90aed0e1cccb48b080ae7381d6f0ab72859480ecf40b478f1e865015f599e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<label class=\"ai1ec-control-label ";
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ((!$_stacked_)) {
            echo "ai1ec-col-sm-5";
        }
        echo "\"
  for=\"";
        // line 2
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
\t";
        // line 3
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo $_label_;
        echo "
</label>
<div ";
        // line 5
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ((!$_stacked_)) {
            echo "class=\"ai1ec-col-sm-7\"";
        }
        echo ">
  ";
        // line 6
        $context["__internal_6b29082e9423a38465af43ead17fdaeb09e1d6e66b17f719540d89d839cf4f47"] = $this->env->loadTemplate("form-elements/select.twig");
        // line 7
        echo "  ";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        echo $context["__internal_6b29082e9423a38465af43ead17fdaeb09e1d6e66b17f719540d89d839cf4f47"]->getselect($_id_, $_name_, $_attributes_, $_options_);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  32 => 3,  19 => 1,  50 => 12,  46 => 9,  38 => 5,  33 => 5,  27 => 2,  23 => 2,  20 => 1,  58 => 13,  54 => 8,  47 => 7,  44 => 8,  41 => 6,  39 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
