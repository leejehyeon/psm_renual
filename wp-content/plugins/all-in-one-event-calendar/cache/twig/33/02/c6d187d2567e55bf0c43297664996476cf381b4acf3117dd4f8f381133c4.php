<?php

/* setting/embedding.twig */
class __TwigTemplate_3302c6d187d2567e55bf0c43297664996476cf381b4acf3117dd4f8f381133c4 extends Twig_Template
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
        // line 2
        echo "<div class=\"ai1ec-col-sm-12\">
<div id=\"ai1ec-embedding\">
\t<div class=\"ai1ec-well ai1ec-prose\">
\t\t<p>";
        // line 5
        if (isset($context["text_insert_shortcode"])) { $_text_insert_shortcode_ = $context["text_insert_shortcode"]; } else { $_text_insert_shortcode_ = null; }
        echo $_text_insert_shortcode_;
        echo "</p>
\t\t<ul>
\t\t\t<li>";
        // line 7
        if (isset($context["text_month_view"])) { $_text_month_view_ = $context["text_month_view"]; } else { $_text_month_view_ = null; }
        echo $_text_month_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"monthly\"]</code></li>
\t\t\t<li>";
        // line 8
        if (isset($context["text_week_view"])) { $_text_week_view_ = $context["text_week_view"]; } else { $_text_week_view_ = null; }
        echo $_text_week_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"weekly\"]</code></li>
\t\t\t<li>";
        // line 9
        if (isset($context["text_day_view"])) { $_text_day_view_ = $context["text_day_view"]; } else { $_text_day_view_ = null; }
        echo $_text_day_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"oneday\"]</code></li>
\t\t\t<li>";
        // line 10
        if (isset($context["text_agenda_view"])) { $_text_agenda_view_ = $context["text_agenda_view"]; } else { $_text_agenda_view_ = null; }
        echo $_text_agenda_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"agenda\"]</code></li>

\t\t\t";
        // line 12
        if (isset($context["viewing_events_shortcodes"])) { $_viewing_events_shortcodes_ = $context["viewing_events_shortcodes"]; } else { $_viewing_events_shortcodes_ = null; }
        echo $_viewing_events_shortcodes_;
        echo "

\t\t\t<li><em>";
        // line 14
        if (isset($context["text_general_form"])) { $_text_general_form_ = $context["text_general_form"]; } else { $_text_general_form_ = null; }
        echo $_text_general_form_;
        echo "</em> ";
        if (isset($context["text_other_view"])) { $_text_other_view_ = $context["text_other_view"]; } else { $_text_other_view_ = null; }
        echo $_text_other_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"someother\"]</code></li>
\t\t\t<li>";
        // line 15
        if (isset($context["text_default_view"])) { $_text_default_view_ = $context["text_default_view"]; } else { $_text_default_view_ = null; }
        echo $_text_default_view_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec]</code></li>
\t\t</ul>
\t\t<p>
\t\t\t<span class=\"ai1ec-text-muted\">";
        // line 18
        if (isset($context["text_optional"])) { $_text_optional_ = $context["text_optional"]; } else { $_text_optional_ = null; }
        echo $_text_optional_;
        echo "</span>
\t\t\t";
        // line 19
        if (isset($context["text_filter_label"])) { $_text_filter_label_ = $context["text_filter_label"]; } else { $_text_filter_label_ = null; }
        echo $_text_filter_label_;
        echo "
\t\t</p>
\t\t<ul>
\t\t\t<li>";
        // line 22
        if (isset($context["text_filter_category"])) { $_text_filter_category_ = $context["text_filter_category"]; } else { $_text_filter_category_ = null; }
        echo $_text_filter_category_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_name=\"";
        if (isset($context["text_filter_category_1"])) { $_text_filter_category_1_ = $context["text_filter_category_1"]; } else { $_text_filter_category_1_ = null; }
        echo $_text_filter_category_1_;
        echo "\"]</code></li>
\t\t\t<li>";
        // line 23
        if (isset($context["text_filter_category_comma"])) { $_text_filter_category_comma_ = $context["text_filter_category_comma"]; } else { $_text_filter_category_comma_ = null; }
        echo $_text_filter_category_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_name=\"";
        if (isset($context["text_filter_category_2"])) { $_text_filter_category_2_ = $context["text_filter_category_2"]; } else { $_text_filter_category_2_ = null; }
        echo $_text_filter_category_2_;
        echo ",";
        if (isset($context["text_filter_category_3"])) { $_text_filter_category_3_ = $context["text_filter_category_3"]; } else { $_text_filter_category_3_ = null; }
        echo $_text_filter_category_3_;
        echo "\"]</code></li>
\t\t\t<li>";
        // line 24
        if (isset($context["text_filter_category_id"])) { $_text_filter_category_id_ = $context["text_filter_category_id"]; } else { $_text_filter_category_id_ = null; }
        echo $_text_filter_category_id_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 25
        if (isset($context["text_filter_category_id_comma"])) { $_text_filter_category_id_comma_ = $context["text_filter_category_id_comma"]; } else { $_text_filter_category_id_comma_ = null; }
        echo $_text_filter_category_id_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 27
        if (isset($context["text_filter_tag"])) { $_text_filter_tag_ = $context["text_filter_tag"]; } else { $_text_filter_tag_ = null; }
        echo $_text_filter_tag_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_name=\"";
        if (isset($context["text_filter_tag_1"])) { $_text_filter_tag_1_ = $context["text_filter_tag_1"]; } else { $_text_filter_tag_1_ = null; }
        echo $_text_filter_tag_1_;
        echo "\"]</code></li>
\t\t\t<li>";
        // line 28
        if (isset($context["text_filter_tag_comma"])) { $_text_filter_tag_comma_ = $context["text_filter_tag_comma"]; } else { $_text_filter_tag_comma_ = null; }
        echo $_text_filter_tag_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_name=\"";
        if (isset($context["text_filter_tag_2"])) { $_text_filter_tag_2_ = $context["text_filter_tag_2"]; } else { $_text_filter_tag_2_ = null; }
        echo $_text_filter_tag_2_;
        echo ",";
        if (isset($context["text_filter_tag_3"])) { $_text_filter_tag_3_ = $context["text_filter_tag_3"]; } else { $_text_filter_tag_3_ = null; }
        echo $_text_filter_tag_3_;
        echo "\"]</code></li>
\t\t\t<li>";
        // line 29
        if (isset($context["text_filter_tag_id"])) { $_text_filter_tag_id_ = $context["text_filter_tag_id"]; } else { $_text_filter_tag_id_ = null; }
        echo $_text_filter_tag_id_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 30
        if (isset($context["text_filter_tag_id_comma"])) { $_text_filter_tag_id_comma_ = $context["text_filter_tag_id_comma"]; } else { $_text_filter_tag_id_comma_ = null; }
        echo $_text_filter_tag_id_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 32
        if (isset($context["text_filter_post_id"])) { $_text_filter_post_id_ = $context["text_filter_post_id"]; } else { $_text_filter_post_id_ = null; }
        echo $_text_filter_post_id_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec post_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 33
        if (isset($context["text_filter_post_id_comma"])) { $_text_filter_post_id_comma_ = $context["text_filter_post_id_comma"]; } else { $_text_filter_post_id_comma_ = null; }
        echo $_text_filter_post_id_comma_;
        echo " <code class=\"ai1ec-autoselect\">[ai1ec post_id=\"1,2\"]</code></li>
\t\t</ul>
\t\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t\t<strong>";
        // line 36
        if (isset($context["text_warning"])) { $_text_warning_ = $context["text_warning"]; } else { $_text_warning_ = null; }
        echo $_text_warning_;
        echo "</strong>
\t\t\t";
        // line 37
        if (isset($context["text_single_calendar"])) { $_text_single_calendar_ = $context["text_single_calendar"]; } else { $_text_single_calendar_ = null; }
        echo $_text_single_calendar_;
        echo "
\t\t</div>
\t</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/embedding.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 37,  156 => 36,  149 => 33,  133 => 29,  122 => 28,  114 => 27,  108 => 25,  72 => 18,  57 => 14,  51 => 12,  40 => 9,  56 => 14,  30 => 7,  183 => 31,  170 => 29,  150 => 25,  147 => 24,  144 => 32,  140 => 22,  136 => 21,  121 => 20,  109 => 17,  103 => 24,  93 => 14,  78 => 11,  68 => 9,  24 => 5,  104 => 35,  102 => 34,  98 => 32,  95 => 31,  88 => 26,  84 => 22,  77 => 19,  65 => 15,  63 => 8,  53 => 6,  48 => 11,  25 => 2,  91 => 30,  80 => 23,  75 => 25,  67 => 21,  62 => 20,  37 => 9,  22 => 2,  191 => 36,  185 => 35,  178 => 33,  165 => 28,  160 => 27,  155 => 26,  152 => 28,  148 => 26,  138 => 30,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 23,  89 => 13,  83 => 13,  73 => 10,  69 => 10,  64 => 9,  59 => 8,  49 => 12,  43 => 3,  35 => 8,  21 => 1,  45 => 10,  32 => 8,  19 => 2,  50 => 5,  46 => 11,  38 => 7,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 7,  54 => 16,  47 => 4,  44 => 8,  41 => 8,  39 => 2,  34 => 4,  31 => 4,  28 => 4,);
    }
}
