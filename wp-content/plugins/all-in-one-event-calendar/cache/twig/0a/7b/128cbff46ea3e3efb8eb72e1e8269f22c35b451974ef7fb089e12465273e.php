<?php

/* theme-options/page.twig */
class __TwigTemplate_0a7b128cbff46ea3e3efb8eb72e1e8269f22c35b451974ef7fb089e12465273e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_page.twig");

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_layout($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"post-box-container left-side timely\">
\t";
        // line 4
        if (isset($context["metabox"])) { $_metabox_ = $context["metabox"]; } else { $_metabox_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute($_metabox_, "screen"), $this->getAttribute($_metabox_, "action"), $this->getAttribute($_metabox_, "object")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,);
    }
}
