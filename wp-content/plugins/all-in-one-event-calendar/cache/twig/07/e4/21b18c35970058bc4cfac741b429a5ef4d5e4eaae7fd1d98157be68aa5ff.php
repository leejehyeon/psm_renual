<?php

/* event-single.twig */
class __TwigTemplate_07e421b18c35970058bc4cfac741b429a5ef4d5e4eaae7fd1d98157be68aa5ff extends Twig_Template
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
        echo "<div class=\"timely ai1ec-single-event
\tai1ec-event-id-";
        // line 2
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "post_id"), "method"), "html", null, true);
        echo "
\t";
        // line 3
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if ($this->getAttribute($_event_, "is_multiday")) {
            echo "ai1ec-multiday";
        }
        // line 4
        echo "\t";
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if ($this->getAttribute($_event_, "is_allday")) {
            echo "ai1ec-allday";
        }
        echo "\">

<a id=\"ai1ec-event\"></a>

";
        // line 8
        if (isset($context["show_subscribe_buttons"])) { $_show_subscribe_buttons_ = $context["show_subscribe_buttons"]; } else { $_show_subscribe_buttons_ = null; }
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if (($_show_subscribe_buttons_ || (!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"))))) {
            // line 9
            echo "\t<div class=\"ai1ec-actions\">
\t\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t\t";
            // line 11
            if (isset($context["back_to_calendar"])) { $_back_to_calendar_ = $context["back_to_calendar"]; } else { $_back_to_calendar_ = null; }
            echo $_back_to_calendar_;
            echo "
\t\t</div>

\t\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t\t";
            // line 15
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            if ((!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method")))) {
                // line 16
                echo "\t\t\t\t<a href=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get", array(0 => "ticket_url"), "method"), "html_attr");
                echo "\" target=\"_blank\"
\t\t\t\t\tclass=\"ai1ec-tickets ai1ec-btn ai1ec-btn-sm ai1ec-btn-primary
\t\t\t\t\t\tai1ec-tooltip-trigger\"
\t\t\t\t\t\ttitle=\"";
                // line 19
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "tickets_url_label"), "method"), "html_attr");
                echo "\"
\t\t\t\t\t\tdata-placement=\"left\">
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket ai1ec-fa-fw\"></i>
\t\t\t\t\t<span class=\"ai1ec-hidden-xs\">
\t\t\t\t\t\t";
                // line 23
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_runtime", array(0 => "tickets_url_label"), "method"), "html", null, true);
                echo "
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if (isset($context["show_subscribe_buttons"])) { $_show_subscribe_buttons_ = $context["show_subscribe_buttons"]; } else { $_show_subscribe_buttons_ = null; }
            if ($_show_subscribe_buttons_) {
                // line 28
                echo "\t\t\t\t";
                if (isset($context["subscribe_url"])) { $_subscribe_url_ = $context["subscribe_url"]; } else { $_subscribe_url_ = null; }
                if (isset($context["subscribe_url_no_html"])) { $_subscribe_url_no_html_ = $context["subscribe_url_no_html"]; } else { $_subscribe_url_no_html_ = null; }
                if (isset($context["text_add_calendar"])) { $_text_add_calendar_ = $context["text_add_calendar"]; } else { $_text_add_calendar_ = null; }
                if (isset($context["subscribe_buttons_text"])) { $_subscribe_buttons_text_ = $context["subscribe_buttons_text"]; } else { $_subscribe_buttons_text_ = null; }
                $this->env->loadTemplate("subscribe-buttons.twig")->display(array_merge($context, array("button_classes" => "ai1ec-btn-dropdown", "export_url" => $_subscribe_url_, "export_url_no_html" => $_subscribe_url_no_html_, "subscribe_label" => $_text_add_calendar_, "text" => $_subscribe_buttons_text_)));
                // line 35
                echo "\t\t\t";
            }
            // line 36
            echo "\t\t\t";
            if (isset($context["extra_buttons"])) { $_extra_buttons_ = $context["extra_buttons"]; } else { $_extra_buttons_ = null; }
            if ($_extra_buttons_) {
                // line 37
                echo "\t\t\t\t";
                if (isset($context["extra_buttons"])) { $_extra_buttons_ = $context["extra_buttons"]; } else { $_extra_buttons_ = null; }
                echo $_extra_buttons_;
                echo "
\t\t\t";
            }
            // line 39
            echo "\t\t</div>
\t</div>
";
        }
        // line 42
        echo "
";
        // line 43
        if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
        if (twig_test_empty($_map_)) {
            // line 44
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-3";
            // line 45
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-9";
            // line 46
            echo "\t<div class=\"ai1ec-event-details ai1ec-clearfix\">
";
        } else {
            // line 48
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-4 ai1ec-col-md-5";
            // line 49
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-8 ai1ec-col-md-7";
            // line 50
            echo "\t<div class=\"ai1ec-event-details ai1ec-row\">
\t\t<div class=\"ai1ec-map ai1ec-col-sm-5 ai1ec-col-sm-push-7\">
\t\t\t";
            // line 52
            if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
            echo $_map_;
            echo "
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-7 ai1ec-col-sm-pull-5\">
";
        }
        // line 56
        echo "
\t<div class=\"ai1ec-time ai1ec-row\">
\t\t<div class=\"ai1ec-field-label ";
        // line 58
        if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
        echo twig_escape_filter($this->env, $_col1_, "html", null, true);
        echo "\">";
        if (isset($context["text_when"])) { $_text_when_ = $context["text_when"]; } else { $_text_when_ = null; }
        echo twig_escape_filter($this->env, $_text_when_, "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-field-value ";
        // line 59
        if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
        echo twig_escape_filter($this->env, $_col2_, "html", null, true);
        echo "\">
\t\t\t";
        // line 60
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo $this->env->getExtension('ai1ec')->timespan($_event_);
        echo "
\t\t\t";
        // line 61
        $this->env->loadTemplate("recurrence.twig")->display($context);
        // line 62
        echo "\t\t</div>
\t</div>

\t";
        // line 65
        if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
        if ((!twig_test_empty($_location_))) {
            // line 66
            echo "\t\t<div class=\"ai1ec-location ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 67
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo "\">";
            if (isset($context["text_where"])) { $_text_where_ = $context["text_where"]; } else { $_text_where_ = null; }
            echo twig_escape_filter($this->env, $_text_where_, "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 68
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo "\">
\t\t\t\t";
            // line 69
            if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
            echo $_location_;
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 73
        echo "
\t";
        // line 74
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        if (((!twig_test_empty($this->getAttribute($_event_, "get", array(0 => "cost"), "method"))) || $this->getAttribute($_event_, "is_free"))) {
            // line 75
            echo "\t\t<div class=\"ai1ec-cost ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 76
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo "\">";
            if (isset($context["text_cost"])) { $_text_cost_ = $context["text_cost"]; } else { $_text_cost_ = null; }
            echo twig_escape_filter($this->env, $_text_cost_, "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 77
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo "\">
\t\t\t\t";
            // line 78
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            if (isset($context["text_free"])) { $_text_free_ = $context["text_free"]; } else { $_text_free_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_event_, "is_free")) ? ($_text_free_) : ($this->getAttribute($_event_, "get", array(0 => "cost"), "method"))), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 82
        echo "
\t";
        // line 83
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        if ((!twig_test_empty($_contact_))) {
            // line 84
            echo "\t\t<div class=\"ai1ec-contact ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 85
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo "\">";
            if (isset($context["text_contact"])) { $_text_contact_ = $context["text_contact"]; } else { $_text_contact_ = null; }
            echo twig_escape_filter($this->env, $_text_contact_, "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 86
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo "\">";
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $_contact_;
            echo "</div>
\t\t</div>
\t";
        }
        // line 89
        echo "
\t";
        // line 90
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        if ((!twig_test_empty($_categories_))) {
            // line 91
            echo "\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 92
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 94
            if (isset($context["text_categories"])) { $_text_categories_ = $context["text_categories"]; } else { $_text_categories_ = null; }
            echo twig_escape_filter($this->env, $_text_categories_, "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 96
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 97
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            echo $_categories_;
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 101
        echo "
\t";
        // line 102
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ((!twig_test_empty($_tags_))) {
            // line 103
            echo "\t\t<div class=\"ai1ec-tags ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 104
            if (isset($context["col1"])) { $_col1_ = $context["col1"]; } else { $_col1_ = null; }
            echo twig_escape_filter($this->env, $_col1_, "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 106
            if (isset($context["text_tags"])) { $_text_tags_ = $context["text_tags"]; } else { $_text_tags_ = null; }
            echo twig_escape_filter($this->env, $_text_tags_, "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 108
            if (isset($context["col2"])) { $_col2_ = $context["col2"]; } else { $_col2_ = null; }
            echo twig_escape_filter($this->env, $_col2_, "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 109
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            echo $_tags_;
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 113
        echo "
";
        // line 114
        if (isset($context["map"])) { $_map_ = $context["map"]; } else { $_map_ = null; }
        if (twig_test_empty($_map_)) {
            // line 115
            echo "\t</div>";
        } else {
            // line 117
            echo "\t\t</div>";
            // line 118
            echo "\t</div>";
        }
        // line 120
        echo "
";
        // line 121
        if (isset($context["hide_featured_image"])) { $_hide_featured_image_ = $context["hide_featured_image"]; } else { $_hide_featured_image_ = null; }
        if ((!$_hide_featured_image_)) {
            // line 122
            echo "\t";
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            if (twig_test_empty($this->getAttribute($_event_, "get_runtime", array(0 => "content_img_url"), "method"))) {
                // line 123
                echo "\t\t";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo $this->env->getExtension('ai1ec')->avatar($_event_, array(0 => "post_thumbnail", 1 => "location_avatar", 2 => "category_avatar"), "timely alignleft", false);
                // line 127
                echo "
\t";
            }
        }
        // line 130
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 130,  360 => 127,  356 => 123,  352 => 122,  349 => 121,  346 => 120,  343 => 118,  341 => 117,  338 => 115,  335 => 114,  332 => 113,  324 => 109,  319 => 108,  313 => 106,  307 => 104,  304 => 103,  301 => 102,  298 => 101,  290 => 97,  285 => 96,  279 => 94,  273 => 92,  270 => 91,  267 => 90,  264 => 89,  254 => 86,  246 => 85,  243 => 84,  240 => 83,  237 => 82,  228 => 78,  223 => 77,  215 => 76,  212 => 75,  209 => 74,  206 => 73,  198 => 69,  193 => 68,  185 => 67,  182 => 66,  179 => 65,  174 => 62,  172 => 61,  167 => 60,  162 => 59,  154 => 58,  150 => 56,  142 => 52,  138 => 50,  135 => 49,  132 => 48,  128 => 46,  125 => 45,  122 => 44,  119 => 43,  116 => 42,  111 => 39,  104 => 37,  100 => 36,  97 => 35,  90 => 28,  86 => 27,  78 => 23,  70 => 19,  62 => 16,  59 => 15,  51 => 11,  47 => 9,  43 => 8,  27 => 3,  57 => 20,  53 => 18,  45 => 14,  38 => 12,  35 => 11,  32 => 4,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
