<?php

/* bootstrap_tabs.twig */
class __TwigTemplate_cbd36f87032d55c109bf45d5f6dd3d87b6ea4b2e6edcb249af215946ca238c1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'extra_html' => array($this, 'block_extra_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ($_stacked_) {
            echo "<div class=\"ai1ec-row\"><div class=\"ai1ec-col-sm-3\">";
        }
        // line 2
        echo "
<ul class=\"ai1ec-nav
\t";
        // line 4
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ($_stacked_) {
            // line 5
            echo "\t\tai1ec-nav-pills ai1ec-nav-stacked
\t";
        } else {
            // line 7
            echo "\t\tai1ec-nav-tabs
\t";
        }
        // line 8
        echo "\">

\t";
        // line 10
        if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tabs_);
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "name", array(), "any", true, true)) {
                // line 11
                echo "\t\t";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if ($this->getAttribute($_data_, "items", array(), "any", true, true)) {
                    // line 12
                    echo "\t\t\t<li class=\"ai1ec-dropdown\">
\t\t\t\t<a href=\"#\" data-toggle=\"ai1ec-dropdown\">
\t\t\t\t\t";
                    // line 14
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_data_, "name"), "html", null, true);
                    echo " <i class=\"ai1ec-fa ai1ec-fa-caret-down\"></i>
\t\t\t\t</a>
\t\t\t\t<ul class=\"ai1ec-dropdown-menu\">
\t\t\t\t\t";
                    // line 17
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "items"));
                    foreach ($context['_seq'] as $context["drop_id"] => $context["drop_name"]) {
                        // line 18
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#ai1ec-";
                        // line 19
                        if (isset($context["drop_id"])) { $_drop_id_ = $context["drop_id"]; } else { $_drop_id_ = null; }
                        echo twig_escape_filter($this->env, $_drop_id_, "html", null, true);
                        echo "\" data-toggle=\"ai1ec-tab\">
\t\t\t\t\t\t\t\t";
                        // line 20
                        if (isset($context["drop_name"])) { $_drop_name_ = $context["drop_name"]; } else { $_drop_name_ = null; }
                        echo twig_escape_filter($this->env, $_drop_name_, "html", null, true);
                        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['drop_id'], $context['drop_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t";
                } else {
                    // line 27
                    echo "\t\t\t<li>
\t\t\t\t<a href=\"#ai1ec-";
                    // line 28
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "\" data-toggle=\"ai1ec-tab\">";
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_data_, "name"), "html", null, true);
                    echo "</a>
\t\t\t</li>
\t\t";
                }
                // line 31
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
</ul>

";
        // line 35
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ($_stacked_) {
            echo "</div><div class=\"ai1ec-col-sm-9\">";
        }
        // line 36
        echo "
<div class=\"ai1ec-tab-content ";
        // line 37
        if (isset($context["content_class"])) { $_content_class_ = $context["content_class"]; } else { $_content_class_ = null; }
        echo twig_escape_filter($this->env, $_content_class_, "html", null, true);
        echo "\">
\t";
        // line 38
        if (isset($context["pre_tabs_markup"])) { $_pre_tabs_markup_ = $context["pre_tabs_markup"]; } else { $_pre_tabs_markup_ = null; }
        echo $_pre_tabs_markup_;
        echo "
\t";
        // line 39
        if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tabs_);
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            // line 40
            echo "\t\t<div class=\"ai1ec-tab-pane\" id=\"ai1ec-";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\">
\t\t\t";
            // line 41
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "elements"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 42
                echo "\t\t\t\t";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                echo $this->getAttribute($_element_, "html");
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>

";
        // line 48
        $this->displayBlock('extra_html', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        if (isset($context["stacked"])) { $_stacked_ = $context["stacked"]; } else { $_stacked_ = null; }
        if ($_stacked_) {
            echo "</div></div>";
        }
    }

    // line 48
    public function block_extra_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 48,  180 => 51,  177 => 50,  175 => 48,  171 => 46,  164 => 44,  154 => 42,  143 => 40,  128 => 37,  90 => 24,  79 => 20,  71 => 18,  66 => 17,  36 => 7,  29 => 4,  74 => 19,  55 => 12,  161 => 37,  156 => 36,  149 => 41,  133 => 38,  122 => 28,  114 => 27,  108 => 31,  72 => 20,  57 => 13,  51 => 11,  40 => 8,  56 => 14,  30 => 7,  183 => 31,  170 => 29,  150 => 25,  147 => 24,  144 => 32,  140 => 22,  136 => 21,  121 => 20,  109 => 17,  103 => 24,  93 => 14,  78 => 11,  68 => 18,  24 => 5,  104 => 35,  102 => 34,  98 => 28,  95 => 27,  88 => 26,  84 => 22,  77 => 19,  65 => 17,  63 => 8,  53 => 6,  48 => 11,  25 => 2,  91 => 30,  80 => 23,  75 => 25,  67 => 21,  62 => 20,  37 => 5,  22 => 2,  191 => 36,  185 => 35,  178 => 33,  165 => 28,  160 => 27,  155 => 26,  152 => 28,  148 => 26,  138 => 39,  125 => 36,  120 => 35,  115 => 32,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 23,  89 => 14,  83 => 13,  73 => 11,  69 => 10,  64 => 9,  59 => 14,  49 => 6,  43 => 4,  35 => 2,  21 => 1,  45 => 9,  32 => 5,  19 => 1,  50 => 5,  46 => 5,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 7,  54 => 7,  47 => 4,  44 => 10,  41 => 9,  39 => 3,  34 => 4,  31 => 3,  28 => 2,);
    }
}
