<?php

/* actions.html.twig */
class __TwigTemplate_ca20a2dd38d32065c13d7abf23a647a005a1b9559c8eaade5767fece8310978f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "actions.html.twig", 1);
        $this->blocks = array(
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 7
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">";
        // line 18
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "actionlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 28
            echo "                    ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", array()), "http")) {
                // line 29
                echo "                        ";
                $context["domain"] = "";
                // line 30
                echo "                            ";
            } elseif ($this->getAttribute($context["link"], "url", array())) {
                // line 31
                echo "                            ";
                $context["domain"] = "";
                // line 32
                echo "                                ";
            } else {
                // line 33
                echo "                                ";
                $context["domain"] = ($context["base_url_absolute"] ?? null);
                // line 34
                echo "                                ";
            }
            // line 35
            echo "                                <li><a class=\"page-scroll\" href=\"";
            echo ($context["domain"] ?? null);
            echo $this->getAttribute($context["link"], "url", array());
            echo "\" ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", array()), "http")) {
                echo "target=\"_blank\"";
            }
            echo ">";
            echo $this->getAttribute($context["link"], "title", array());
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "<div class=\"container\" id=\"page-actions\">
    <div class=\"row\" >
        <div class=\"col-sm-offset-1 col-sm-10 text-center\">
            <h2>WAG Actions</h2>
        </div>
    </div>
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "actions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 53
            echo "    <div class=\"row wag-action\">

        <div class=\"col-lg-8 col-lg-offset-2\">
            <div>
                <h4>";
            // line 57
            echo $this->getAttribute($context["actions"], "title", array());
            echo "</h4>
                <hr class=\"star-primary\">
                ";
            // line 59
            if ($this->getAttribute($context["actions"], "imgextra", array())) {
                // line 60
                echo "                <div class=\"row\">
                    <div class=\"col-sm-offset-2 col-sm-4\">
                        <img src=\"/user/pages/01.home/_actions/";
                // line 62
                echo $this->getAttribute($context["actions"], "img", array());
                echo "\" class=\"img-responsive img-centered\" alt=\"";
                echo $this->getAttribute($context["actions"], "alt", array());
                echo "\">
                    </div>
                    <div class=\"col-sm-4\">
                        <img src=\"/user/pages/01.home/_actions/";
                // line 65
                echo $this->getAttribute($context["actions"], "imgextra", array());
                echo "\" class=\"img-responsive img-centered\" alt=\"";
                echo $this->getAttribute($context["actions"], "altextra", array());
                echo "\">
                    </div>
                </div>
                ";
            } elseif ($this->getAttribute(            // line 68
$context["actions"], "img", array())) {
                // line 69
                echo "                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <img src=\"/user/pages/01.home/_actions/";
                // line 71
                echo $this->getAttribute($context["actions"], "img", array());
                echo "\" class=\"img-responsive img-centered\" alt=\"";
                echo $this->getAttribute($context["actions"], "alt", array());
                echo "\">
                    </div>
                </div>
                ";
            }
            // line 75
            echo "                <p>";
            echo $this->getAttribute($context["actions"], "description", array());
            echo "</p>
                <ul class=\"list-inline item-details\">

                    <li>Date:
                        <strong>";
            // line 79
            echo $this->getAttribute($context["actions"], "projectdate", array());
            echo "
                        </strong>
                    </li>

                </ul>
            </div>
        </div>


    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "</div>
    ";
        // line 91
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
";
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 4,  199 => 91,  196 => 90,  179 => 79,  171 => 75,  162 => 71,  158 => 69,  156 => 68,  148 => 65,  140 => 62,  136 => 60,  134 => 59,  129 => 57,  123 => 53,  119 => 52,  111 => 46,  108 => 45,  98 => 37,  82 => 35,  79 => 34,  76 => 33,  73 => 32,  70 => 31,  67 => 30,  64 => 29,  61 => 28,  57 => 27,  45 => 18,  32 => 7,  29 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}


{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

{% block header_navigation %}
<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">{{site.title}}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                {% for link in site.actionlinks %}
                    {% if link.url | contains('http') %}
                        {% set domain = '' %}
                            {% elseif link.url %}
                            {% set domain = '' %}
                                {% else %}
                                {% set domain = base_url_absolute %}
                                {% endif %}
                                <li><a class=\"page-scroll\" href=\"{{ domain }}{{ link.url }}\" {% if link.url | contains('http') %}target=\"_blank\"{% endif %}>{{ link.title }}</a></li>
                            {% endfor %}
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
{% endblock %}

{% block content %}
<div class=\"container\" id=\"page-actions\">
    <div class=\"row\" >
        <div class=\"col-sm-offset-1 col-sm-10 text-center\">
            <h2>WAG Actions</h2>
        </div>
    </div>
    {% for actions in page.header.actions %}
    <div class=\"row wag-action\">

        <div class=\"col-lg-8 col-lg-offset-2\">
            <div>
                <h4>{{ actions.title }}</h4>
                <hr class=\"star-primary\">
                {%if actions.imgextra %}
                <div class=\"row\">
                    <div class=\"col-sm-offset-2 col-sm-4\">
                        <img src=\"/user/pages/01.home/_actions/{{ actions.img }}\" class=\"img-responsive img-centered\" alt=\"{{ actions.alt }}\">
                    </div>
                    <div class=\"col-sm-4\">
                        <img src=\"/user/pages/01.home/_actions/{{ actions.imgextra }}\" class=\"img-responsive img-centered\" alt=\"{{ actions.altextra }}\">
                    </div>
                </div>
                {% elseif actions.img %}
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <img src=\"/user/pages/01.home/_actions/{{ actions.img }}\" class=\"img-responsive img-centered\" alt=\"{{ actions.alt }}\">
                    </div>
                </div>
                {% endif %}
                <p>{{ actions.description }}</p>
                <ul class=\"list-inline item-details\">

                    <li>Date:
                        <strong>{{ actions.projectdate }}
                        </strong>
                    </li>

                </ul>
            </div>
        </div>


    </div>
    {% endfor %}
</div>
    {{ page.content }}
{% endblock %}
", "actions.html.twig", "/Users/mattanddana/Documents/MAMPWebsites/user/themes/agency/templates/actions.html.twig");
    }
}
