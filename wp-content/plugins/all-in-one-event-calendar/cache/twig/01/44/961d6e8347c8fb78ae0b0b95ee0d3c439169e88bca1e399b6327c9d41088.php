<?php

/* form-elements/textarea.twig */
class __TwigTemplate_0144961d6e8347c8fb78ae0b0b95ee0d3c439169e88bca1e399b6327c9d41088 extends Twig_Template
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
    }

    // line 1
    public function gettextarea($_id = null, $_name = "", $_value = "", $_attributes = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (($_name_ == "")) {
                // line 3
                echo "\t\t";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["id"] = $_name_;
                // line 4
                echo "\t";
            }
            // line 5
            echo "\t<textarea
\t\tname=\"";
            // line 6
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
\t\tid=\"";
            // line 7
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"
\t\tclass=\"ai1ec-form-control ";
            // line 8
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_attributes_, "class"), "html", null, true);
            echo "\"
\t\t";
            // line 9
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 10
                echo "\t\t\t";
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                if (($_attribute_ != "class")) {
                    // line 11
                    echo "\t\t\t\t";
                    if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                    echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                    echo "=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 13
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t>";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "</textarea>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "form-elements/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  55 => 13,  161 => 37,  156 => 36,  149 => 33,  133 => 29,  122 => 28,  114 => 27,  108 => 25,  72 => 20,  57 => 14,  51 => 12,  40 => 9,  56 => 14,  30 => 7,  183 => 31,  170 => 29,  150 => 25,  147 => 24,  144 => 32,  140 => 22,  136 => 21,  121 => 20,  109 => 17,  103 => 24,  93 => 14,  78 => 11,  68 => 18,  24 => 5,  104 => 35,  102 => 34,  98 => 32,  95 => 31,  88 => 26,  84 => 22,  77 => 19,  65 => 17,  63 => 8,  53 => 6,  48 => 11,  25 => 2,  91 => 30,  80 => 23,  75 => 25,  67 => 21,  62 => 20,  37 => 9,  22 => 2,  191 => 36,  185 => 35,  178 => 33,  165 => 28,  160 => 27,  155 => 26,  152 => 28,  148 => 26,  138 => 30,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 23,  89 => 14,  83 => 13,  73 => 11,  69 => 10,  64 => 9,  59 => 8,  49 => 6,  43 => 4,  35 => 2,  21 => 1,  45 => 10,  32 => 5,  19 => 1,  50 => 5,  46 => 5,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 7,  54 => 7,  47 => 4,  44 => 8,  41 => 9,  39 => 3,  34 => 6,  31 => 4,  28 => 4,);
    }
}
