<?php

/* subscribe-buttons.twig */
class __TwigTemplate_99f12812760a4aa34960ba0180190ddc0a89014c35547a62abad608f77810299 extends Twig_Template
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
        echo "<div class=\"ai1ec-subscribe-container ai1ec-btn-group ai1ec-pull-left\">
\t<button
\t\ttype=\"button\"
\t\tclass=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-sm ai1ec-dropdown-toggle
\t\t\tai1ec-subscribe ";
        // line 5
        if (isset($context["button_classes"])) { $_button_classes_ = $context["button_classes"]; } else { $_button_classes_ = null; }
        echo twig_escape_filter($this->env, $_button_classes_, "html", null, true);
        echo "\"
\t\tdata-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-icon-rss ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t";
        // line 8
        if (isset($context["subscribe_label"])) { $_subscribe_label_ = $context["subscribe_label"]; } else { $_subscribe_label_ = null; }
        if ((!twig_test_empty($_subscribe_label_))) {
            // line 9
            echo "\t\t\t";
            if (isset($context["subscribe_label"])) { $_subscribe_label_ = $context["subscribe_label"]; } else { $_subscribe_label_ = null; }
            echo twig_escape_filter($this->env, $_subscribe_label_, "html", null, true);
            echo "
\t\t";
        } else {
            // line 11
            echo "\t\t\t";
            if (isset($context["is_filtered"])) { $_is_filtered_ = $context["is_filtered"]; } else { $_is_filtered_ = null; }
            if ($_is_filtered_) {
                // line 12
                echo "\t\t\t\t";
                if (isset($context["text_filtered"])) { $_text_filtered_ = $context["text_filtered"]; } else { $_text_filtered_ = null; }
                echo twig_escape_filter($this->env, $_text_filtered_, "html", null, true);
                echo "
\t\t\t";
            } else {
                // line 14
                echo "\t\t\t\t";
                if (isset($context["text_subscribe"])) { $_text_subscribe_ = $context["text_subscribe"]; } else { $_text_subscribe_ = null; }
                echo twig_escape_filter($this->env, $_text_subscribe_, "html", null, true);
                echo "
\t\t\t";
            }
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "\t\t<span class=\"ai1ec-caret\"></span>
\t</button>
\t";
        // line 19
        if (isset($context["export_url"])) { $_export_url_ = $context["export_url"]; } else { $_export_url_ = null; }
        if (isset($context["url_args"])) { $_url_args_ = $context["url_args"]; } else { $_url_args_ = null; }
        $context["url"] = (strtr($_export_url_, array("webcal://" => "http://")) . $_url_args_);
        // line 20
        echo "\t<ul class=\"ai1ec-dropdown-menu\" role=\"menu\">
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t   target=\"_blank\"
\t\t\t   data-placement=\"left\"
\t\t\t   href=\"";
        // line 25
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $_url_, "html_attr");
        echo "\"
\t\t\t   title=\"";
        // line 26
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "title"), "timely"), "html", null, true);
        echo "\" >
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-lg ai1ec-fa-fw ai1ec-icon-timely\"></i>
\t\t\t\t";
        // line 28
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "label"), "timely"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t   target=\"_blank\"
\t\t\t   data-placement=\"left\"
\t\t\t   href=\"http://www.google.com/calendar/render?cid=";
        // line 35
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, twig_urlencode_filter($_url_), "html_attr");
        echo "\"
\t\t\t   title=\"";
        // line 36
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "title"), "google"), "html", null, true);
        echo "\" >
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-google ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 38
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "label"), "google"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t   target=\"_blank\"
\t\t\t   data-placement=\"left\"
\t\t\t   href=\"";
        // line 45
        if (isset($context["export_url_no_html"])) { $_export_url_no_html_ = $context["export_url_no_html"]; } else { $_export_url_no_html_ = null; }
        if (isset($context["url_args"])) { $_url_args_ = $context["url_args"]; } else { $_url_args_ = null; }
        echo twig_escape_filter($this->env, ($_export_url_no_html_ . $_url_args_), "html_attr");
        echo "\"
\t\t\t   title=\"";
        // line 46
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "title"), "outlook"), "html", null, true);
        echo "\" >
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-windows ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 48
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "label"), "outlook"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t   target=\"_blank\"
\t\t\t   data-placement=\"left\"
\t\t\t   href=\"";
        // line 55
        if (isset($context["export_url_no_html"])) { $_export_url_no_html_ = $context["export_url_no_html"]; } else { $_export_url_no_html_ = null; }
        if (isset($context["url_args"])) { $_url_args_ = $context["url_args"]; } else { $_url_args_ = null; }
        echo twig_escape_filter($this->env, ($_export_url_no_html_ . $_url_args_), "html_attr");
        echo "\"
\t\t\t   title=\"";
        // line 56
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "title"), "apple"), "html", null, true);
        echo "\" >
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-apple ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 58
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "label"), "apple"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t";
        // line 62
        if (isset($context["export_url_no_html"])) { $_export_url_no_html_ = $context["export_url_no_html"]; } else { $_export_url_no_html_ = null; }
        $context["export_url_no_html_http"] = strtr($_export_url_no_html_, array("webcal://" => "http://"));
        // line 63
        echo "\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t   data-placement=\"left\"
\t\t\t   href=\"";
        // line 65
        if (isset($context["export_url_no_html_http"])) { $_export_url_no_html_http_ = $context["export_url_no_html_http"]; } else { $_export_url_no_html_http_ = null; }
        if (isset($context["url_args"])) { $_url_args_ = $context["url_args"]; } else { $_url_args_ = null; }
        echo twig_escape_filter($this->env, ($_export_url_no_html_http_ . $_url_args_), "html_attr");
        echo "\"
\t\t\t   title=\"";
        // line 66
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "title"), "plaintext"), "html", null, true);
        echo "\" >
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-calendar ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 68
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_text_, "label"), "plaintext"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "subscribe-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  178 => 66,  168 => 63,  165 => 62,  157 => 58,  151 => 56,  145 => 55,  134 => 48,  105 => 36,  89 => 28,  83 => 26,  71 => 20,  67 => 19,  63 => 17,  60 => 16,  46 => 12,  42 => 11,  365 => 130,  360 => 127,  356 => 123,  352 => 122,  349 => 121,  346 => 120,  343 => 118,  341 => 117,  338 => 115,  335 => 114,  332 => 113,  324 => 109,  319 => 108,  313 => 106,  307 => 104,  304 => 103,  301 => 102,  298 => 101,  290 => 97,  285 => 96,  279 => 94,  273 => 92,  270 => 91,  267 => 90,  264 => 89,  254 => 86,  246 => 85,  243 => 84,  240 => 83,  237 => 82,  228 => 78,  223 => 77,  215 => 76,  212 => 75,  209 => 74,  206 => 73,  198 => 69,  193 => 68,  185 => 67,  182 => 66,  179 => 65,  174 => 62,  172 => 65,  167 => 60,  162 => 59,  154 => 58,  150 => 56,  142 => 52,  138 => 50,  135 => 49,  132 => 48,  128 => 46,  125 => 45,  122 => 45,  119 => 43,  116 => 42,  111 => 38,  104 => 37,  100 => 35,  97 => 35,  90 => 28,  86 => 27,  78 => 25,  70 => 19,  62 => 16,  59 => 15,  51 => 11,  47 => 9,  43 => 8,  27 => 3,  57 => 20,  53 => 14,  45 => 14,  38 => 12,  35 => 9,  32 => 8,  28 => 4,  25 => 5,  22 => 2,  19 => 1,);
    }
}
