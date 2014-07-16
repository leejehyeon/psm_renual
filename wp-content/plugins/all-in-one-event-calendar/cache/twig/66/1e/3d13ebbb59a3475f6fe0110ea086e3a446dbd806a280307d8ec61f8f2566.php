<?php

/* setting/input.twig */
class __TwigTemplate_661e3d13ebbb59a3475f6fe0110ea086e3a446dbd806a280307d8ec61f8f2566 extends Twig_Template
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
        echo "<label class=\"ai1ec-control-label ai1ec-col-sm-5\" for=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
\t";
        // line 2
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo $_label_;
        echo "
</label>
";
        // line 4
        if ((array_key_exists("append", $context) || array_key_exists("licence_valid", $context))) {
            // line 5
            echo "\t<div class=\"";
            if (isset($context["group_class"])) { $_group_class_ = $context["group_class"]; } else { $_group_class_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? ($_group_class_) : ("ai1ec-col-sm-3")), "html", null, true);
            echo "\">
\t\t<div class=\"ai1ec-input-group\">
";
        } else {
            // line 8
            echo "\t<div class=\"ai1ec-col-sm-7\">
";
        }
        // line 10
        echo "
\t";
        // line 11
        $context["__internal_63cea7145548336a256292982379c45bc28623e8bddf93113c27768b72d70d5f"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 12
        echo "\t";
        ob_start();
        // line 13
        echo "\t";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if (isset($context["input_args"])) { $_input_args_ = $context["input_args"]; } else { $_input_args_ = null; }
        echo $context["__internal_63cea7145548336a256292982379c45bc28623e8bddf93113c27768b72d70d5f"]->getinput($_id_, $_id_, $_value_, "text", $_input_args_);
        echo "


\t";
        // line 16
        if (array_key_exists("append", $context)) {
            // line 17
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            if (isset($context["append"])) { $_append_ = $context["append"]; } else { $_append_ = null; }
            echo twig_escape_filter($this->env, $_append_, "html", null, true);
            echo "</span>
\t\t</div>
\t";
        } elseif (array_key_exists("licence_valid", $context)) {
            // line 20
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">
\t\t\t\t<i class=\"ai1ec-fa
\t\t\t\t\t";
            // line 22
            if (isset($context["licence_valid"])) { $_licence_valid_ = $context["licence_valid"]; } else { $_licence_valid_ = null; }
            if ($_licence_valid_) {
                // line 23
                echo "\t\t\t\t\t\tai1ec-fa-check ai1ec-text-success
\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\tai1ec-fa-times ai1ec-text-danger
\t\t\t\t\t";
            }
            // line 26
            echo "\">
\t\t\t\t</i>
\t\t\t</span>
\t\t</div>
\t";
        }
        // line 31
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 32
        echo "</div>

";
        // line 34
        if (array_key_exists("help", $context)) {
            // line 35
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
            echo $_help_;
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  102 => 34,  98 => 32,  95 => 31,  88 => 26,  84 => 25,  77 => 22,  65 => 17,  63 => 16,  53 => 13,  48 => 11,  25 => 2,  91 => 30,  80 => 23,  75 => 25,  67 => 21,  62 => 20,  37 => 9,  22 => 2,  191 => 36,  185 => 35,  178 => 33,  165 => 31,  160 => 30,  155 => 29,  152 => 28,  148 => 26,  138 => 24,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 15,  89 => 14,  83 => 13,  73 => 20,  69 => 10,  64 => 9,  59 => 8,  49 => 6,  43 => 4,  35 => 2,  21 => 1,  45 => 10,  32 => 8,  19 => 1,  50 => 12,  46 => 5,  38 => 5,  33 => 5,  27 => 2,  23 => 2,  20 => 1,  58 => 13,  54 => 16,  47 => 7,  44 => 8,  41 => 8,  39 => 3,  34 => 4,  31 => 4,  28 => 2,);
    }
}
