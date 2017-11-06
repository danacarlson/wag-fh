<?php

/* modular/form.html.twig */
class __TwigTemplate_a09baafcd7adee507588bf7cff10ee8804ac6c76b52ad1d3609909a35a35542a extends Twig_Template
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
        echo "<section id=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
        <ul>
          <li class=\"col-xs-4\"><a href=\"mailto:wag-fh@gmail.com\">wag-fh@gmail.com</a></li>
          <li class=\"col-xs-4\"><a href=\"https://twitter.com/womensactionfh?lang=en\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
          <li class=\"col-xs-4\"><a href=\"https://www.instagram.com/womensactiongroupofforesthills/?hl=en\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>


";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        {{ content }}
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
        <ul>
          <li class=\"col-xs-4\"><a href=\"mailto:wag-fh@gmail.com\">wag-fh@gmail.com</a></li>
          <li class=\"col-xs-4\"><a href=\"https://twitter.com/womensactionfh?lang=en\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
          <li class=\"col-xs-4\"><a href=\"https://www.instagram.com/womensactiongroupofforesthills/?hl=en\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>


", "modular/form.html.twig", "/Users/mattanddana/Documents/MAMPWebsites/user/themes/agency/templates/modular/form.html.twig");
    }
}
