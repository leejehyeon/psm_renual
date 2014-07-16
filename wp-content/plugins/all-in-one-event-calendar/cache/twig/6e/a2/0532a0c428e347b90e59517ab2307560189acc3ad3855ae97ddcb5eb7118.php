<?php

/* form-elements/select.twig */
class __TwigTemplate_6ea20532a0c428e347b90e59517ab2307560189acc3ad3855ae97ddcb5eb7118 extends Twig_Template
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
    public function getselect($_id = null, $_name = "", $_attributes = array(), $_options = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "attributes" => $_attributes,
            "options" => $_options,
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
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["name"] = $_id_;
                // line 4
                echo "\t";
            }
            // line 5
            echo "\t<select
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
            echo "\t\t>
\t\t";
            // line 15
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 16
                echo "\t\t\t";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->env->getExtension('ai1ec')->is_string($_key_)) {
                    // line 17
                    echo "\t\t\t\t<optgroup label=\"";
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "\">
\t\t\t\t\t";
                    // line 18
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_option_);
                    foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                        // line 19
                        echo "\t\t\t\t\t\t<option
\t\t\t\t\t\t\tvalue=\"";
                        // line 20
                        if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_opt_, "value"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t";
                        // line 21
                        if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_opt_, "args"));
                        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                            // line 22
                            echo "\t\t\t\t\t\t\t";
                            if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                            echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                            echo "=\"";
                            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                            echo twig_escape_filter($this->env, $_value_, "html", null, true);
                            echo "\"
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 24
                        echo "\t\t\t\t\t\t>";
                        if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_opt_, "text"), "html", null, true);
                        echo "</option>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "\t\t\t\t</optgroup>
\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t<option
\t\t\t\t\tvalue=\"";
                    // line 29
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_option_, "value"), "html", null, true);
                    echo "\"
\t\t\t\t";
                    // line 30
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_option_, "args"));
                    foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                        // line 31
                        echo "\t\t\t\t\t";
                        if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                        echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                        echo "=\"";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $_value_, "html", null, true);
                        echo "\"
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "\t\t\t\t>";
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_option_, "text"), "html", null, true);
                    echo "</option>
\t\t\t";
                }
                // line 35
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t</select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "form-elements/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 36,  185 => 35,  178 => 33,  165 => 31,  160 => 30,  155 => 29,  152 => 28,  148 => 26,  138 => 24,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 15,  89 => 14,  83 => 13,  73 => 11,  69 => 10,  64 => 9,  59 => 8,  49 => 6,  43 => 4,  35 => 2,  21 => 1,  45 => 6,  32 => 3,  19 => 1,  50 => 12,  46 => 5,  38 => 5,  33 => 5,  27 => 2,  23 => 2,  20 => 1,  58 => 13,  54 => 7,  47 => 7,  44 => 8,  41 => 6,  39 => 3,  34 => 4,  31 => 3,  28 => 2,);
    }
}
