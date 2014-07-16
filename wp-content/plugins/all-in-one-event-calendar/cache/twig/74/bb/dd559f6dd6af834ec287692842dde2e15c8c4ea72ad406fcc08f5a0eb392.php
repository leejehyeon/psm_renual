<?php

/* setting/bootstrap_tabs.twig */
class __TwigTemplate_74bbdd559f6dd6af834ec287692842dde2e15c8c4ea72ad406fcc08f5a0eb392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bootstrap_tabs.twig");

        $this->blocks = array(
            'extra_html' => array($this, 'block_extra_html'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extra_html($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $context["__internal_cf549d5ff7328fe72d7ca7a83164a4df738091445d71a86b57b81f69bd89f01d"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 4
        echo "  <div class=\"ai1ec-text-right\">
    ";
        // line 5
        if (isset($context["submit"])) { $_submit_ = $context["submit"]; } else { $_submit_ = null; }
        echo $context["__internal_cf549d5ff7328fe72d7ca7a83164a4df738091445d71a86b57b81f69bd89f01d"]->getbutton($this->getAttribute($_submit_, "id"), $this->getAttribute($_submit_, "id"), $this->getAttribute($_submit_, "value"), "submit", $this->getAttribute($_submit_, "args"));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "setting/bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  55 => 13,  161 => 37,  156 => 36,  149 => 33,  133 => 29,  122 => 28,  114 => 27,  108 => 25,  72 => 20,  57 => 13,  51 => 11,  40 => 9,  56 => 14,  30 => 7,  183 => 31,  170 => 29,  150 => 25,  147 => 24,  144 => 32,  140 => 22,  136 => 21,  121 => 20,  109 => 17,  103 => 24,  93 => 14,  78 => 11,  68 => 18,  24 => 5,  104 => 35,  102 => 34,  98 => 32,  95 => 31,  88 => 26,  84 => 22,  77 => 19,  65 => 17,  63 => 8,  53 => 6,  48 => 11,  25 => 2,  91 => 30,  80 => 23,  75 => 25,  67 => 21,  62 => 20,  37 => 5,  22 => 2,  191 => 36,  185 => 35,  178 => 33,  165 => 28,  160 => 27,  155 => 26,  152 => 28,  148 => 26,  138 => 30,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 23,  89 => 14,  83 => 13,  73 => 11,  69 => 10,  64 => 9,  59 => 8,  49 => 6,  43 => 4,  35 => 2,  21 => 1,  45 => 9,  32 => 5,  19 => 1,  50 => 5,  46 => 5,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 7,  54 => 7,  47 => 4,  44 => 8,  41 => 9,  39 => 3,  34 => 4,  31 => 3,  28 => 2,);
    }
}
