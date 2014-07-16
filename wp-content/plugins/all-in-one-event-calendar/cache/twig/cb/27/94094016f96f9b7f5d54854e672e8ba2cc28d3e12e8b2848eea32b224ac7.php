<?php

/* setting/textarea.twig */
class __TwigTemplate_cb2794094016f96f9b7f5d54854e672e8ba2cc28d3e12e8b2848eea32b224ac7 extends Twig_Template
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
<div class=\"ai1ec-col-sm-7\">
\t";
        // line 5
        if (array_key_exists("append", $context)) {
            // line 6
            echo "\t\t<div class=\"ai1ec-input-group\">
\t";
        }
        // line 8
        echo "
\t";
        // line 9
        $context["__internal_1d861d51297c7b04d62af7119a9855e581883c228d70fc196469a154dbf6ec19"] = $this->env->loadTemplate("form-elements/textarea.twig");
        // line 10
        echo "\t";
        ob_start();
        // line 11
        echo "\t";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if (isset($context["input_args"])) { $_input_args_ = $context["input_args"]; } else { $_input_args_ = null; }
        echo $context["__internal_1d861d51297c7b04d62af7119a9855e581883c228d70fc196469a154dbf6ec19"]->gettextarea($_id_, $_id_, $_value_, $_input_args_);
        echo "

\t";
        // line 13
        if (array_key_exists("append", $context)) {
            // line 14
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            if (isset($context["append"])) { $_append_ = $context["append"]; } else { $_append_ = null; }
            echo twig_escape_filter($this->env, $_append_, "html", null, true);
            echo "</span>
\t\t</div>
\t";
        }
        // line 17
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 18
        echo "</div>

";
        // line 20
        if (array_key_exists("help", $context)) {
            // line 21
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
            echo $_help_;
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  55 => 13,  161 => 37,  156 => 36,  149 => 33,  133 => 29,  122 => 28,  114 => 27,  108 => 25,  72 => 20,  57 => 14,  51 => 12,  40 => 9,  56 => 14,  30 => 7,  183 => 31,  170 => 29,  150 => 25,  147 => 24,  144 => 32,  140 => 22,  136 => 21,  121 => 20,  109 => 17,  103 => 24,  93 => 14,  78 => 11,  68 => 18,  24 => 5,  104 => 35,  102 => 34,  98 => 32,  95 => 31,  88 => 26,  84 => 22,  77 => 19,  65 => 17,  63 => 8,  53 => 6,  48 => 11,  25 => 2,  91 => 30,  80 => 23,  75 => 25,  67 => 21,  62 => 20,  37 => 9,  22 => 2,  191 => 36,  185 => 35,  178 => 33,  165 => 28,  160 => 27,  155 => 26,  152 => 28,  148 => 26,  138 => 30,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 23,  89 => 13,  83 => 13,  73 => 10,  69 => 10,  64 => 9,  59 => 8,  49 => 12,  43 => 10,  35 => 8,  21 => 1,  45 => 10,  32 => 5,  19 => 1,  50 => 5,  46 => 11,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 7,  54 => 16,  47 => 4,  44 => 8,  41 => 9,  39 => 2,  34 => 6,  31 => 4,  28 => 4,);
    }
}
