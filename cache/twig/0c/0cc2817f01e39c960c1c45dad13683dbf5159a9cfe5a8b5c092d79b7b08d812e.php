<?php

/* modular/header.html.twig */
class __TwigTemplate_e32543d416ab651aa62c098e2b59a3d46e932b87fbb6600aba73e6c6c9cd313d extends Twig_Template
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
        echo "<header>
  <div class=\"bg-image\"></div>
  <div class=\"container\">
    <div class=\"logo\">
      <img src=\"/user/themes/agency/img/wag-logo.png\" alt=\"Women's Action Group of Forest Hills\" />
    </div>
  </div>
</header>";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
  <div class=\"bg-image\"></div>
  <div class=\"container\">
    <div class=\"logo\">
      <img src=\"/user/themes/agency/img/wag-logo.png\" alt=\"Women's Action Group of Forest Hills\" />
    </div>
  </div>
</header>", "modular/header.html.twig", "/Users/mattanddana/Documents/MAMPWebsites/user/themes/agency/templates/modular/header.html.twig");
    }
}
