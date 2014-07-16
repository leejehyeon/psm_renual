<?php

/* setting/checkbox.twig */
class __TwigTemplate_40217280081297a226609de01908ba95588652851e7b394809de163088e4f664 extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
\t<div class=\"checkbox\">
\t\t<label for=\"";
        // line 3
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
\t\t\t";
        // line 4
        $context["__internal_d8158c3597b547943e637d2608103c7255562317dc11ce894ac0f5957039653f"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 5
        echo "\t\t\t";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
        echo $context["__internal_d8158c3597b547943e637d2608103c7255562317dc11ce894ac0f5957039653f"]->getinput($_id_, $_id_, 1, "checkbox", $_attributes_);
        echo "

\t\t\t";
        // line 7
        if (isset($context["renderer"])) { $_renderer_ = $context["renderer"]; } else { $_renderer_ = null; }
        echo $this->getAttribute($_renderer_, "label");
        echo "

\t\t</label>
\t</div>
\t";
        // line 11
        if (isset($context["renderer"])) { $_renderer_ = $context["renderer"]; } else { $_renderer_ = null; }
        if ($this->getAttribute($_renderer_, "help", array(), "any", true, true)) {
            // line 12
            echo "\t\t<div class=\"ai1ec-help-block\">";
            if (isset($context["renderer"])) { $_renderer_ = $context["renderer"]; } else { $_renderer_ = null; }
            echo $this->getAttribute($_renderer_, "help");
            echo "</div>
\t";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "setting/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  30 => 5,  183 => 31,  170 => 29,  150 => 25,  147 => 24,  144 => 23,  140 => 22,  136 => 21,  121 => 20,  109 => 17,  103 => 16,  93 => 14,  78 => 11,  68 => 9,  24 => 1,  104 => 35,  102 => 34,  98 => 32,  95 => 31,  88 => 26,  84 => 12,  77 => 22,  65 => 17,  63 => 8,  53 => 6,  48 => 11,  25 => 2,  91 => 30,  80 => 23,  75 => 25,  67 => 21,  62 => 20,  37 => 9,  22 => 2,  191 => 36,  185 => 35,  178 => 33,  165 => 28,  160 => 27,  155 => 26,  152 => 28,  148 => 26,  138 => 24,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 15,  89 => 13,  83 => 13,  73 => 10,  69 => 10,  64 => 9,  59 => 8,  49 => 12,  43 => 3,  35 => 2,  21 => 1,  45 => 10,  32 => 8,  19 => 1,  50 => 5,  46 => 11,  38 => 7,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 7,  54 => 16,  47 => 4,  44 => 8,  41 => 8,  39 => 2,  34 => 4,  31 => 4,  28 => 4,);
    }
}
