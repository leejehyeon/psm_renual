<?php

/* setting/twig_cache.twig */
class __TwigTemplate_db836fabdd6f1841ea90374366e4da6f946f62e23bf8a9570b7613a69281e07f extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
\t<ul class=\"ai1ec-fa-ul\">
\t\t<li id=\"ai1ec-cache-scan-success\" class=\"ai1ec-text-success";
        // line 3
        if (isset($context["cache_available"])) { $_cache_available_ = $context["cache_available"]; } else { $_cache_available_ = null; }
        if (($_cache_available_ == false)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-check-circle\"></i>
\t\t\t";
        // line 5
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo $this->getAttribute($_text_, "okcache");
        echo "
\t\t</li>
\t\t<li id=\"ai1ec-cache-scan-danger\" class=\"ai1ec-text-danger";
        // line 7
        if (isset($context["cache_available"])) { $_cache_available_ = $context["cache_available"]; } else { $_cache_available_ = null; }
        if (($_cache_available_ == true)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-times-circle\"></i>
\t\t\t";
        // line 9
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo $this->getAttribute($_text_, "nocache");
        echo "
\t\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs\" id=\"ai1ec-button-refresh\"
\t\t\t\tdata-loading-text=\"&lt;i class=&quot;ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh ai1ec-fa-spin&quot;&gt;&lt;/i&gt; ";
        // line 11
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_text_, "rescan"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh\"></i>
\t\t\t\t";
        // line 13
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo $this->getAttribute($_text_, "refresh");
        echo "
\t\t\t</button>
\t\t</li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/twig_cache.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  55 => 13,  161 => 37,  156 => 36,  149 => 33,  133 => 29,  122 => 28,  114 => 27,  108 => 25,  72 => 20,  57 => 13,  51 => 11,  40 => 9,  56 => 14,  30 => 7,  183 => 31,  170 => 29,  150 => 25,  147 => 24,  144 => 32,  140 => 22,  136 => 21,  121 => 20,  109 => 17,  103 => 24,  93 => 14,  78 => 11,  68 => 18,  24 => 5,  104 => 35,  102 => 34,  98 => 32,  95 => 31,  88 => 26,  84 => 22,  77 => 19,  65 => 17,  63 => 8,  53 => 6,  48 => 11,  25 => 2,  91 => 30,  80 => 23,  75 => 25,  67 => 21,  62 => 20,  37 => 7,  22 => 2,  191 => 36,  185 => 35,  178 => 33,  165 => 28,  160 => 27,  155 => 26,  152 => 28,  148 => 26,  138 => 30,  125 => 22,  120 => 21,  115 => 20,  112 => 19,  107 => 18,  101 => 17,  97 => 16,  92 => 23,  89 => 14,  83 => 13,  73 => 11,  69 => 10,  64 => 9,  59 => 8,  49 => 6,  43 => 4,  35 => 2,  21 => 1,  45 => 9,  32 => 5,  19 => 1,  50 => 5,  46 => 5,  38 => 8,  33 => 5,  27 => 2,  23 => 3,  20 => 1,  58 => 7,  54 => 7,  47 => 4,  44 => 8,  41 => 9,  39 => 3,  34 => 6,  31 => 5,  28 => 4,);
    }
}
