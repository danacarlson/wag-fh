<?php

/* partials/instagram-feed.html.twig */
class __TwigTemplate_196f889fc79efb861930d2cecf4642e91c2b9944914ff50198995951def64ef8 extends Twig_Template
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
        if (($context["feed"] ?? null)) {
            // line 2
            echo "<div class=\"instagram-feed carousel slide\" data-ride=\"carousel\">
  <div class=\"carousel-inner\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["feed"] ?? null), 0, ($context["count"] ?? null)));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "        <div class=\"carousel-item item ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "active";
                }
                echo "\">
            <a href=\"";
                // line 6
                echo $this->getAttribute($context["item"], "link", array());
                echo "\" target=\"_blank\">
                <img src=\"";
                // line 7
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "images", array()), "thumbnail", array()), "url", array());
                echo "\" alt=\"\">
            </a>
        </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/instagram-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  53 => 7,  49 => 6,  42 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if feed %}
<div class=\"instagram-feed carousel slide\" data-ride=\"carousel\">
  <div class=\"carousel-inner\">
    {% for item in feed|slice(0, count) %}
        <div class=\"carousel-item item {% if loop.first %}active{% endif %}\">
            <a href=\"{{ item.link }}\" target=\"_blank\">
                <img src=\"{{ item.images.thumbnail.url }}\" alt=\"\">
            </a>
        </div>
    {% endfor %}
  </div>
</div>
{% endif %}", "partials/instagram-feed.html.twig", "/Users/mattanddana/Documents/MAMPWebsites/user/plugins/instagram-feed/templates/partials/instagram-feed.html.twig");
    }
}
