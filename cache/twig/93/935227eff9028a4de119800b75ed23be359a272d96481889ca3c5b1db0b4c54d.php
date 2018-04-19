<?php

/* modular/about.html.twig */
class __TwigTemplate_4bbc4ef2c7aa7f95a1e9b2c2a13eb207c801b9bcd6e0b3cb603aec6a8014a416 extends Twig_Template
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
        echo "<section id=\"about\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-offset-1 col-sm-10 text-center\">
            ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"row text-center\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "about", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 10
            echo "            <div class=\"col-md-6 group-photo\">
                ";
            // line 11
            if ($this->getAttribute($context["about"], "image", array())) {
                // line 12
                echo "                    <img src=\"";
                echo $this->getAttribute($context["about"], "image", array());
                echo "\">
                ";
            }
            // line 14
            echo "                ";
            if ($this->getAttribute($context["about"], "caption", array())) {
                // line 15
                echo "                    <p class=\"text-muted\">";
                echo $this->getAttribute($context["about"], "caption", array());
                echo "</p>
                ";
            }
            // line 17
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  56 => 17,  50 => 15,  47 => 14,  41 => 12,  39 => 11,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"about\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-offset-1 col-sm-10 text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row text-center\">
        {% for about in page.header.about %}
            <div class=\"col-md-6 group-photo\">
                {% if about.image %}
                    <img src=\"{{ about.image }}\">
                {% endif %}
                {% if about.caption %}
                    <p class=\"text-muted\">{{ about.caption }}</p>
                {% endif %}
            </div>
        {% endfor %}
    </div>
</div>
</section>
", "modular/about.html.twig", "/Users/mattanddana/Documents/MAMPWebsites/user/themes/agency/templates/modular/about.html.twig");
    }
}
