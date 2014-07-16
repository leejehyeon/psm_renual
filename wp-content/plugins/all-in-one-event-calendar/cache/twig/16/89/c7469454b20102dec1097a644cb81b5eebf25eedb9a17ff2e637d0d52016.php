<?php

/* select2_multiselect.twig */
class __TwigTemplate_1689c7469454b20102dec1097a644cb81b5eebf25eedb9a17ff2e637d0d52016 extends Twig_Template
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
        echo "<div 
\t";
        // line 2
        if (isset($context["container_class"])) { $_container_class_ = $context["container_class"]; } else { $_container_class_ = null; }
        if (($_container_class_ != false)) {
            // line 3
            echo "\t\tclass=\"";
            if (isset($context["container_class"])) { $_container_class_ = $context["container_class"]; } else { $_container_class_ = null; }
            echo twig_escape_filter($this->env, $_container_class_, "html", null, true);
            echo "\"
\t";
        }
        // line 5
        echo "\t>
\t";
        // line 6
        $context["__internal_18fd52bad3bcbdf7dac0ad94e9af5ecff8a93a2d523bf2955a80cf17f058c0ef"] = $this->env->loadTemplate("form-elements/select.twig");
        // line 7
        echo "\t";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["select2_args"])) { $_select2_args_ = $context["select2_args"]; } else { $_select2_args_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        echo $context["__internal_18fd52bad3bcbdf7dac0ad94e9af5ecff8a93a2d523bf2955a80cf17f058c0ef"]->getselect($_id_, $_name_, $_select2_args_, $_options_);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "select2_multiselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  35 => 6,  32 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
