<?php

/* select2_input.twig */
class __TwigTemplate_27da8c4822c0f08145b8d9bcba2141fdb52d213dbd842c6c265d5608e30f1c62 extends Twig_Template
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
        $context["__internal_703b71a3ad7c651b07810633d743a1b3f374f0e125d0156bedc7e59f47f72b56"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 2
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["select2_args"])) { $_select2_args_ = $context["select2_args"]; } else { $_select2_args_ = null; }
        echo $context["__internal_703b71a3ad7c651b07810633d743a1b3f374f0e125d0156bedc7e59f47f72b56"]->getinput($_id_, $_name_, "", "text", $_select2_args_);
    }

    public function getTemplateName()
    {
        return "select2_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  37 => 7,  35 => 6,  32 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
