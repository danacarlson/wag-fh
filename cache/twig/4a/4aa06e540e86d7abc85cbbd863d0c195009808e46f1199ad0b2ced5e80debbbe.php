<?php

/* modular/actions.html.twig */
class __TwigTemplate_cd81a48cc8a94c192bd1acf8a473d958b207720666030bcbf2f038e1d1420d22 extends Twig_Template
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
        echo " <section id=\"actions\" class=\"bg-light-gray\">
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
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "actions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 10
            echo "            <div class=\"col-md-3 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal";
            // line 11
            echo $this->getAttribute($context["actions"], "modalid", array());
            echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"";
            // line 17
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["actions"], "thumbnail", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive\" alt=\"\">
                </a>
                <div class=\"portfolio-caption\">
                    <h4>";
            // line 20
            echo $this->getAttribute($context["actions"], "title", array());
            echo "</h4>
                    <p class=\"text-muted\">";
            // line 21
            echo $this->getAttribute($context["actions"], "subtitle", array());
            echo "</p>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <div class=\"col-md-3 col-sm-6 portfolio-item view-all\">
            <a class=\"view-all-inner portfolio-link\" href=\"/actions\">
                <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                <h4>View All</h4>
            </a>
        </div>
    </div>
</div>
</section>


 ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "actions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 42
            echo "    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal";
            echo $this->getAttribute($context["actions"], "modalid", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>";
            // line 54
            echo $this->getAttribute($context["actions"], "title", array());
            echo "</h2>
                            <hr class=\"star-primary\">
                            <div ";
            // line 56
            if ($this->getAttribute($context["actions"], "imgextra", array())) {
                echo "class=\"modal-images\"";
            }
            echo ">
                                <img src=\"";
            // line 57
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["actions"], "img", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo $this->getAttribute($context["actions"], "alt", array());
            echo "\">
                                ";
            // line 58
            if ($this->getAttribute($context["actions"], "imgextra", array())) {
                // line 59
                echo "                                <img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["actions"], "imgextra", array()), array(), "array"), "url", array());
                echo "\" class=\"img-responsive img-centered\" alt=\"";
                echo $this->getAttribute($context["actions"], "altextra", array());
                echo "\">
                                ";
            }
            // line 61
            echo "                            </div>
                            <p>";
            // line 62
            echo $this->getAttribute($context["actions"], "description", array());
            echo "</p>
                            <ul class=\"list-inline item-details\">

                                <li>Date:
                                    <strong>";
            // line 66
            echo $this->getAttribute($context["actions"], "projectdate", array());
            echo "
                                    </strong>
                                </li>

                            </ul>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  136 => 62,  133 => 61,  125 => 59,  123 => 58,  117 => 57,  111 => 56,  106 => 54,  90 => 42,  86 => 41,  69 => 26,  58 => 21,  54 => 20,  48 => 17,  39 => 11,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <section id=\"actions\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row\">
        {% for actions in page.header.actions %}
            <div class=\"col-md-3 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal{{ actions.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"{{ page.media[actions.thumbnail].url }}\" class=\"img-responsive\" alt=\"\">
                </a>
                <div class=\"portfolio-caption\">
                    <h4>{{ actions.title }}</h4>
                    <p class=\"text-muted\">{{ actions.subtitle }}</p>
                </div>
            </div>

        {% endfor %}
        <div class=\"col-md-3 col-sm-6 portfolio-item view-all\">
            <a class=\"view-all-inner portfolio-link\" href=\"/actions\">
                <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                <h4>View All</h4>
            </a>
        </div>
    </div>
</div>
</section>


 {% for actions in page.header.actions %}
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal{{ actions.modalid }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>{{ actions.title }}</h2>
                            <hr class=\"star-primary\">
                            <div {%if actions.imgextra %}class=\"modal-images\"{% endif %}>
                                <img src=\"{{ page.media[actions.img].url }}\" class=\"img-responsive img-centered\" alt=\"{{ actions.alt }}\">
                                {% if actions.imgextra %}
                                <img src=\"{{ page.media[actions.imgextra].url }}\" class=\"img-responsive img-centered\" alt=\"{{ actions.altextra }}\">
                                {% endif %}
                            </div>
                            <p>{{ actions.description }}</p>
                            <ul class=\"list-inline item-details\">

                                <li>Date:
                                    <strong>{{ actions.projectdate }}
                                    </strong>
                                </li>

                            </ul>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endfor %}", "modular/actions.html.twig", "/Users/mattanddana/Documents/MAMPWebsites/user/themes/agency/templates/modular/actions.html.twig");
    }
}
