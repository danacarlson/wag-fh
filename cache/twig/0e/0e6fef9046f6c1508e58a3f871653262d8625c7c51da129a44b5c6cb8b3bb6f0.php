<?php

/* modular/resources.html.twig */
class __TwigTemplate_1f95f618a3fcb98d26106407ca7391a1eede8c260d7f9d79012ad142315be020 extends Twig_Template
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
        echo "<section id=\"resources\" class=\"resources\">
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
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
            // line 11
            echo "            <div class=\"col-sm-";
            if ($this->getAttribute($context["categories"], "group", array())) {
                echo "7";
            } else {
                echo "5";
            }
            echo "\">
              <h5>";
            // line 12
            echo $this->getAttribute($context["categories"], "header", array());
            echo "</h5>
              <ul class=\"";
            // line 13
            echo $this->getAttribute($context["categories"], "class", array());
            echo "\">
              ";
            // line 14
            if ($this->getAttribute($context["categories"], "group", array())) {
                // line 15
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categories"], "group", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 16
                    echo "                  <li><i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
                  <b class=\"subhead\">";
                    // line 17
                    echo $this->getAttribute($context["group"], "header", array());
                    echo "</b>
                      ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "contacts", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["contacts"]) {
                        // line 19
                        echo "                      <ul>
                        <li>";
                        // line 20
                        echo $this->getAttribute($context["contacts"], "name", array());
                        echo "</li>
                        <li><a href=\"tel:";
                        // line 21
                        echo $this->getAttribute($context["contacts"], "digits", array());
                        echo "\">";
                        echo $this->getAttribute($context["contacts"], "call", array());
                        echo "</a></li>
                        <li><a href=\"";
                        // line 22
                        echo $this->getAttribute($context["contacts"], "email", array());
                        echo "\">Email</a></li>
                      </ul>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contacts'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "              ";
            }
            // line 28
            echo "              ";
            if ($this->getAttribute($context["categories"], "links", array())) {
                // line 29
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categories"], "links", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["links"]) {
                    // line 30
                    echo "                  <li><a href=\"";
                    echo $this->getAttribute($context["links"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["links"], "name", array());
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['links'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "              ";
            }
            // line 33
            echo "              </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>

    <div class=\"row social-embeds\">
      <div class=\"col-sm-5\">
        <b class=\"subhead\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i> @WomensActionFH</b>
        <div class=\"inner-embed\">
          <a class=\"twitter-timeline\" href=\"https://twitter.com/WomensActionFH?ref_src=twsrc%5Etfw\">Tweets by WomensActionFH</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
        </div>
      </div>
      <div class=\"col-sm-5 col-sm-offset-1\">
        <b class=\"subhead\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> @womensactiongroupofforesthills</b>
        ";
        // line 47
        echo call_user_func_array($this->env->getFunction('instagram_feed')->getCallable(), array());
        echo "
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 47,  134 => 36,  126 => 33,  123 => 32,  112 => 30,  107 => 29,  104 => 28,  101 => 27,  94 => 25,  85 => 22,  79 => 21,  75 => 20,  72 => 19,  68 => 18,  64 => 17,  61 => 16,  56 => 15,  54 => 14,  50 => 13,  46 => 12,  37 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"resources\" class=\"resources\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        </div>
    </div>

    <div class=\"row\">
        {% for categories in page.header.categories %}
            <div class=\"col-sm-{% if categories.group %}7{% else %}5{% endif %}\">
              <h5>{{ categories.header }}</h5>
              <ul class=\"{{ categories.class }}\">
              {% if categories.group %}
                {% for group in categories.group %}
                  <li><i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
                  <b class=\"subhead\">{{ group.header }}</b>
                      {% for contacts in group.contacts %}
                      <ul>
                        <li>{{ contacts.name}}</li>
                        <li><a href=\"tel:{{ contacts.digits }}\">{{contacts.call}}</a></li>
                        <li><a href=\"{{ contacts.email }}\">Email</a></li>
                      </ul>
                      {% endfor %}
                  </li>
                {% endfor %}
              {% endif %}
              {% if categories.links %}
                {% for links in categories.links %}
                  <li><a href=\"{{ links.url }}\">{{ links.name }}</a></li>
                {% endfor %}
              {% endif %}
              </ul>
            </div>
        {% endfor %}
    </div>

    <div class=\"row social-embeds\">
      <div class=\"col-sm-5\">
        <b class=\"subhead\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i> @WomensActionFH</b>
        <div class=\"inner-embed\">
          <a class=\"twitter-timeline\" href=\"https://twitter.com/WomensActionFH?ref_src=twsrc%5Etfw\">Tweets by WomensActionFH</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
        </div>
      </div>
      <div class=\"col-sm-5 col-sm-offset-1\">
        <b class=\"subhead\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> @womensactiongroupofforesthills</b>
        {{ instagram_feed() }}
      </div>
    </div>
  </div>
</section>
", "modular/resources.html.twig", "/Users/mattanddana/Documents/MAMPWebsites/user/themes/agency/templates/modular/resources.html.twig");
    }
}
