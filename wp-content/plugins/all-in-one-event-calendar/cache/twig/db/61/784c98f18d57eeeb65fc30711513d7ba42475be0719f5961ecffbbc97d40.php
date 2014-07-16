<?php

/* setting/enabled-views.twig */
class __TwigTemplate_db61784c98f18d57eeeb65fc30711513d7ba42475be0719f5961ecffbbc97d40 extends Twig_Template
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
        echo "<div class=\"ai1ec-admin-view-settings ai1ec-form-group\">
\t<label class=\"ai1ec-control-label ai1ec-col-sm-5\">";
        // line 2
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo twig_escape_filter($this->env, $_label_, "html", null, true);
        echo "</label>
\t<div class=\"ai1ec-col-sm-7\">
\t\t<table class=\"ai1ec-table ai1ec-table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th>";
        // line 8
        if (isset($context["text_enabled"])) { $_text_enabled_ = $context["text_enabled"]; } else { $_text_enabled_ = null; }
        echo twig_escape_filter($this->env, $_text_enabled_, "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 9
        if (isset($context["text_default"])) { $_text_default_ = $context["text_default"]; } else { $_text_default_ = null; }
        echo twig_escape_filter($this->env, $_text_default_, "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 13
        if (isset($context["views"])) { $_views_ = $context["views"]; } else { $_views_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_views_);
        foreach ($context['_seq'] as $context["view"] => $context["args"]) {
            // line 14
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 16
            if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_args_, "longname"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"ai1ec-control-table-column\">
\t\t\t\t\t\t\t<input class=\"checkbox ai1ec-toggle-view\" type=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"view_";
            // line 20
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            echo twig_escape_filter($this->env, $_view_, "html", null, true);
            echo "_enabled\" value=\"1\"
\t\t\t\t\t\t\t\t";
            // line 21
            if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_args_, "enabled"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"ai1ec-control-table-column\">
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-default-view\" type=\"radio\"
\t\t\t\t\t\t\t\tname=\"default_calendar_view\" value=\"";
            // line 25
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            echo twig_escape_filter($this->env, $_view_, "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 26
            if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_args_, "default"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['view'], $context['args'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/enabled-views.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  80 => 26,  75 => 25,  67 => 21,  62 => 20,  37 => 9,  22 => 2,  191 => 36,  185 => 35,  178 => 33,  165 => 31,  160 => 30,  155 => 29,  152 => 28,  148 => 26,  138 => 24,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 15,  89 => 14,  83 => 13,  73 => 11,  69 => 10,  64 => 9,  59 => 8,  49 => 6,  43 => 4,  35 => 2,  21 => 1,  45 => 13,  32 => 8,  19 => 1,  50 => 14,  46 => 5,  38 => 5,  33 => 5,  27 => 2,  23 => 2,  20 => 1,  58 => 13,  54 => 16,  47 => 7,  44 => 8,  41 => 6,  39 => 3,  34 => 4,  31 => 3,  28 => 2,);
    }
}
