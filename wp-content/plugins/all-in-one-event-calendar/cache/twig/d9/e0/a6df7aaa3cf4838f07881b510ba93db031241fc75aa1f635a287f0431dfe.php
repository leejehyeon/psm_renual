<?php

/* recurrence.twig */
class __TwigTemplate_d9e0a6df7aaa3cf4838f07881b510ba93db031241fc75aa1f635a287f0431dfe extends Twig_Template
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
        if (isset($context["recurrence"])) { $_recurrence_ = $context["recurrence"]; } else { $_recurrence_ = null; }
        if ((!twig_test_empty($_recurrence_))) {
            // line 2
            echo "\t<div class=\"ai1ec-recurrence ai1ec-btn-group\">
\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs
\t\t\tai1ec-tooltip-trigger ai1ec-disabled ai1ec-text-muted\"
\t\t\tdata-html=\"true\"
\t\t\ttitle=\"";
            // line 6
            ob_start();
            // line 7
            echo "\t\t\t\t";
            if (isset($context["recurrence"])) { $_recurrence_ = $context["recurrence"]; } else { $_recurrence_ = null; }
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $_recurrence_), "html_attr");
            echo "
\t\t\t\t";
            // line 8
            if (isset($context["exclude"])) { $_exclude_ = $context["exclude"]; } else { $_exclude_ = null; }
            if ((!twig_test_empty($_exclude_))) {
                // line 9
                echo "\t\t\t\t\t";
                if (isset($context["exclude"])) { $_exclude_ = $context["exclude"]; } else { $_exclude_ = null; }
                echo twig_escape_filter($this->env, ((("<div class=\"ai1ec-recurrence-exclude\">" . Ai1ec_I18n::__("Excludes: ")) . $_exclude_) . "</div>"), "html_attr");
                echo "
\t\t\t\t";
            }
            // line 11
            echo "\t\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-repeat\"></i>
\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Repeats"), "html", null, true);
            echo "
\t\t</button>

\t\t";
            // line 16
            if (isset($context["edit_instance_url"])) { $_edit_instance_url_ = $context["edit_instance_url"]; } else { $_edit_instance_url_ = null; }
            if ((!twig_test_empty($_edit_instance_url_))) {
                // line 17
                echo "\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-tooltip-trigger
\t\t\t\tai1ec-text-muted\"
\t\t\t\ttitle=\"";
                // line 19
                if (isset($context["edit_instance_text"])) { $_edit_instance_text_ = $context["edit_instance_text"]; } else { $_edit_instance_text_ = null; }
                echo twig_escape_filter($this->env, $_edit_instance_text_, "html_attr");
                echo "\"
\t\t\t\thref=\"";
                // line 20
                if (isset($context["edit_instance_url"])) { $_edit_instance_url_ = $context["edit_instance_url"]; } else { $_edit_instance_url_ = null; }
                echo twig_escape_filter($this->env, $_edit_instance_url_, "html", null, true);
                echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i>
\t\t\t</a>
\t\t";
            }
            // line 24
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "recurrence.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  61 => 17,  58 => 16,  52 => 13,  39 => 9,  36 => 8,  30 => 7,  184 => 68,  178 => 66,  168 => 63,  165 => 62,  157 => 58,  151 => 56,  145 => 55,  134 => 48,  105 => 36,  89 => 28,  83 => 26,  71 => 20,  67 => 19,  63 => 17,  60 => 16,  46 => 11,  42 => 11,  365 => 130,  360 => 127,  356 => 123,  352 => 122,  349 => 121,  346 => 120,  343 => 118,  341 => 117,  338 => 115,  335 => 114,  332 => 113,  324 => 109,  319 => 108,  313 => 106,  307 => 104,  304 => 103,  301 => 102,  298 => 101,  290 => 97,  285 => 96,  279 => 94,  273 => 92,  270 => 91,  267 => 90,  264 => 89,  254 => 86,  246 => 85,  243 => 84,  240 => 83,  237 => 82,  228 => 78,  223 => 77,  215 => 76,  212 => 75,  209 => 74,  206 => 73,  198 => 69,  193 => 68,  185 => 67,  182 => 66,  179 => 65,  174 => 62,  172 => 65,  167 => 60,  162 => 59,  154 => 58,  150 => 56,  142 => 52,  138 => 50,  135 => 49,  132 => 48,  128 => 46,  125 => 45,  122 => 45,  119 => 43,  116 => 42,  111 => 38,  104 => 37,  100 => 35,  97 => 35,  90 => 28,  86 => 27,  78 => 24,  70 => 20,  62 => 16,  59 => 15,  51 => 11,  47 => 9,  43 => 8,  27 => 3,  57 => 20,  53 => 14,  45 => 14,  38 => 12,  35 => 9,  32 => 8,  28 => 6,  25 => 5,  22 => 2,  19 => 1,);
    }
}
