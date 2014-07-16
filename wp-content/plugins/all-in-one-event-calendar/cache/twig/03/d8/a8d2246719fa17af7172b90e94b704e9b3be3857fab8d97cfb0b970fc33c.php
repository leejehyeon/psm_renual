<?php

/* event-single-footer.twig */
class __TwigTemplate_03d8a8d2246719fa17af7172b90e94b704e9b3be3857fab8d97cfb0b970fc33c extends Twig_Template
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
        echo "<footer class=\"ai1ec-event-footer\">
\t";
        // line 2
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if ((!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "ical_feed_url"), "method")))) {
            // line 3
            echo "\t\t<p class=\"ai1ec-source-link\">
\t\t\t";
            // line 4
            if (isset($context["text_calendar_feed"])) { $_text_calendar_feed_ = $context["text_calendar_feed"]; } else { $_text_calendar_feed_ = null; }
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, sprintf($_text_calendar_feed_, twig_escape_filter($this->env, strtr($this->getAttribute($_event_, "get", array(0 => "ical_feed_url"), "method"), array("http://" => "webcal://")), "html_attr")), "html", null, true);
            // line 10
            echo "
\t\t\t";
            // line 11
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            if ((!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "ical_source_url"), "method")))) {
                // line 12
                echo "\t\t\t\t<a href=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "ical_source_url"), "method"), "html_attr");
                echo "\"
\t\t\t\t\ttarget=\"_blank\">
\t\t\t\t\t";
                // line 14
                if (isset($context["text_view_post"])) { $_text_view_post_ = $context["text_view_post"]; } else { $_text_view_post_ = null; }
                echo twig_escape_filter($this->env, $_text_view_post_, "html", null, true);
                echo "
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-external-link\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 18
            echo "\t\t</p>
\t";
        }
        // line 20
        echo "</footer>
";
    }

    public function getTemplateName()
    {
        return "event-single-footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  53 => 18,  45 => 14,  38 => 12,  35 => 11,  32 => 10,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
