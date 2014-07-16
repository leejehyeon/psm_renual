<?php

/* base_page.twig */
class __TwigTemplate_62ab8c5908bdf5f57983105b602608d62b068292db57c17e070f37666a2031ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wrap\">
\t";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->screen_icon(), "html", null, true);
        echo "
\t<h2>";
        // line 3
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</h2>
\t<div id=\"poststuff\">
\t\t<form method=\"post\" action=\"";
        // line 5
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo twig_escape_filter($this->env, $_action_, "html", null, true);
        echo "\">
\t\t\t";
        // line 6
        if (isset($context["nonce"])) { $_nonce_ = $context["nonce"]; } else { $_nonce_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->wp_nonce_field($this->getAttribute($_nonce_, "action"), $this->getAttribute($_nonce_, "name"), $this->getAttribute($_nonce_, "referrer")), "html", null, true);
        echo "
\t\t\t<div class=\"metabox-holder\">
\t\t\t\t";
        // line 8
        $this->displayBlock('layout', $context, $blocks);
        // line 9
        echo "\t\t\t</div>
\t\t</form>
\t</div>";
        // line 12
        echo "</div>";
    }

    // line 8
    public function block_layout($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  46 => 9,  38 => 6,  33 => 5,  27 => 3,  23 => 2,  20 => 1,  58 => 13,  54 => 8,  47 => 8,  44 => 8,  41 => 6,  39 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
