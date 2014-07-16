<?php

/* notification/admin.twig */
class __TwigTemplate_48e07cd4893320e6402c8fa8557f21a16f74a1bcbfdff081e5c4a77d97daa5fe extends Twig_Template
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
        echo "<div class=\"message ";
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        echo twig_escape_filter($this->env, $_class_, "html", null, true);
        echo " ai1ec-message\">
\t";
        // line 2
        if ((!array_key_exists("label", $context))) {
            // line 3
            echo "          ";
            if (isset($context["text_label"])) { $_text_label_ = $context["text_label"]; } else { $_text_label_ = null; }
            $context["label"] = $_text_label_;
            // line 4
            echo "\t";
        }
        // line 5
        echo "\t<h3>";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo twig_escape_filter($this->env, $_label_, "html", null, true);
        echo "</h3>

\t<p>";
        // line 7
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo $_message_;
        echo "</p>

\t";
        // line 9
        if (isset($context["persistent"])) { $_persistent_ = $context["persistent"]; } else { $_persistent_ = null; }
        if (($_persistent_ == true)) {
            // line 10
            echo "\t\t<div>
\t\t\t<input type=\"button\" class=\"button ai1ec-dismissable\"
\t\t\t\tdata-key=\"";
            // line 12
            if (isset($context["msg_key"])) { $_msg_key_ = $context["msg_key"]; } else { $_msg_key_ = null; }
            echo twig_escape_filter($this->env, $_msg_key_, "html", null, true);
            echo "\"
\t\t\t\tvalue=\"";
            // line 13
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Dismiss"), "html", null, true);
            echo "\">
\t\t</div>
\t\t<p></p>
\t";
        }
        // line 17
        echo "\t";
        if (isset($context["button"])) { $_button_ = $context["button"]; } else { $_button_ = null; }
        if ($_button_) {
            // line 18
            echo "\t\t<div>
\t\t\t<input type=\"button\" class=\"button ";
            // line 19
            if (isset($context["button"])) { $_button_ = $context["button"]; } else { $_button_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_button_, "class"), "html", null, true);
            echo "\"
\t\t\t\tvalue=\"";
            // line 20
            if (isset($context["button"])) { $_button_ = $context["button"]; } else { $_button_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_button_, "value"), "html", null, true);
            echo "\">
\t\t</div>
\t\t<p></p>
\t";
        }
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "notification/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  73 => 19,  70 => 18,  66 => 17,  59 => 13,  54 => 12,  50 => 10,  47 => 9,  41 => 7,  31 => 4,  27 => 3,  25 => 2,  78 => 20,  65 => 17,  58 => 14,  55 => 13,  52 => 12,  44 => 8,  39 => 7,  34 => 5,  29 => 5,  24 => 4,  19 => 1,);
    }
}
