<?php

/* timely-menu-icon.twig */
class __TwigTemplate_b5f76566f78b9f5a38cb701ec28864908b0bd5c65f4a7ea300147d10263b915c extends Twig_Template
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
        echo "<style type=\"text/css\" media=\"all\">
  @font-face {
    font-family: 'Timely Icons';
    src:url('";
        // line 4
        if (isset($context["admin_theme_font_url"])) { $_admin_theme_font_url_ = $context["admin_theme_font_url"]; } else { $_admin_theme_font_url_ = null; }
        echo twig_escape_filter($this->env, $_admin_theme_font_url_, "html", null, true);
        echo "timely-icons.eot');
    src:url('";
        // line 5
        if (isset($context["admin_theme_font_url"])) { $_admin_theme_font_url_ = $context["admin_theme_font_url"]; } else { $_admin_theme_font_url_ = null; }
        echo twig_escape_filter($this->env, $_admin_theme_font_url_, "html", null, true);
        echo "timely-icons.eot?#iefix') format('embedded-opentype'),
    url('";
        // line 6
        if (isset($context["admin_theme_font_url"])) { $_admin_theme_font_url_ = $context["admin_theme_font_url"]; } else { $_admin_theme_font_url_ = null; }
        echo twig_escape_filter($this->env, $_admin_theme_font_url_, "html", null, true);
        echo "timely-icons.svg#Timely-Icons') format('svg'),
    url('";
        // line 7
        if (isset($context["admin_theme_font_url"])) { $_admin_theme_font_url_ = $context["admin_theme_font_url"]; } else { $_admin_theme_font_url_ = null; }
        echo twig_escape_filter($this->env, $_admin_theme_font_url_, "html", null, true);
        echo "timely-icons.woff') format('woff'),
    url('";
        // line 8
        if (isset($context["admin_theme_font_url"])) { $_admin_theme_font_url_ = $context["admin_theme_font_url"]; } else { $_admin_theme_font_url_ = null; }
        echo twig_escape_filter($this->env, $_admin_theme_font_url_, "html", null, true);
        echo "timely-icons.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
  }
  ";
        // line 12
        if (isset($context["before_font_icons"])) { $_before_font_icons_ = $context["before_font_icons"]; } else { $_before_font_icons_ = null; }
        if ($_before_font_icons_) {
            // line 13
            echo "  #menu-posts-ai1ec_event > .menu-icon-post > div.wp-menu-image {
    background-image: url('";
            // line 14
            if (isset($context["admin_theme_img_url"])) { $_admin_theme_img_url_ = $context["admin_theme_img_url"]; } else { $_admin_theme_img_url_ = null; }
            echo twig_escape_filter($this->env, $_admin_theme_img_url_, "html", null, true);
            echo "/timely-admin-menu.png') !important;
  }
  ";
        } else {
            // line 17
            echo "  #menu-posts-ai1ec_event > .menu-icon-post > div.wp-menu-image:before {
    content:        '\\21' !important;
    display:        inline-block !important;
    font-family:    'Timely Icons' !important;
    font-style:     normal !important;
    font-weight:    normal !important;
    speak:          none !important;
    vertical-align: baseline !important;
    line-height:    16px !important;
  }
  ";
        }
        // line 28
        echo "</style>
";
    }

    public function getTemplateName()
    {
        return "timely-menu-icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  65 => 17,  58 => 14,  55 => 13,  52 => 12,  44 => 8,  39 => 7,  34 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
