<?php

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_2b6aa30b70664dbdcedca1109976896d0ee45772758cf883589104901607c63c extends Twig_Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 2
        $context["pagemedia"] = $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.admin.pagemedia"), "method");
        // line 3
        $context["pagemedia_settings"] = array("resolution" => array("min" => array("width" => (($this->getAttribute(        // line 6
($context["pagemedia"] ?? null), "res_min_width", array())) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_min_width", array())) : (null)), "height" => (($this->getAttribute(        // line 7
($context["pagemedia"] ?? null), "res_min_height", array())) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_min_height", array())) : (null))), "max" => array("width" => (($this->getAttribute(        // line 10
($context["pagemedia"] ?? null), "res_max_width", array())) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_max_width", array())) : (null)), "height" => (($this->getAttribute(        // line 11
($context["pagemedia"] ?? null), "res_max_height", array())) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_max_height", array())) : (null)))), "resizeWidth" => (($this->getAttribute(        // line 14
($context["pagemedia"] ?? null), "resize_width", array())) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_width", array())) : (null)), "resizeHeight" => (($this->getAttribute(        // line 15
($context["pagemedia"] ?? null), "resize_height", array())) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_height", array())) : (null)), "resizeQuality" => (($this->getAttribute(        // line 16
($context["pagemedia"] ?? null), "resize_quality", array())) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_quality", array())) : (0.8)));
        // line 18
        echo "
";
        // line 19
        if ($this->getAttribute(($context["context"] ?? null), "folderExists", array())) {
            // line 20
            echo "<div class=\"form-field grid vertical ";
            if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            }
            echo "\">
    <div class=\"form-label\">
        <label>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        ";
            // line 25
            $context["uploadLimit"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "system", array()), "media", array()), "upload_limit", array()) / 1024) / 1024);
            // line 26
            echo "        ";
            $context["dropzoneSettings"] = twig_array_merge(array("maxFileSize" => ($context["uploadLimit"] ?? null)), ($context["pagemedia_settings"] ?? null));
            // line 27
            echo "        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/media/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
            echo ".json\"
             data-media-local=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
            echo "\"
             data-media-path=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["context"] ?? null), "relativePagePath", array())), "html", null, true);
            echo "\"
             data-dropzone-options=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropzoneSettings"] ?? null)), "html_attr");
            echo "\"
             data-dropzone-field=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"></div>

        ";
            // line 35
            if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0")) {
                // line 36
                echo "        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null));
                echo "\" />
        ";
            }
            // line 38
            echo "    </div>
</div>
";
        } else {
            // line 41
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            echo "
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  100 => 41,  95 => 38,  87 => 36,  85 => 35,  80 => 33,  76 => 32,  72 => 31,  66 => 30,  60 => 29,  56 => 27,  53 => 26,  51 => 25,  45 => 22,  37 => 20,  35 => 19,  32 => 18,  30 => 16,  29 => 15,  28 => 14,  27 => 11,  26 => 10,  25 => 7,  24 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? field.default : value) %}
{% set pagemedia = config.get('plugins.admin.pagemedia') %}
{% set pagemedia_settings = {
    resolution: {
        min: {
            width: pagemedia.res_min_width ?: null,
            height: pagemedia.res_min_height ?: null
        },
        max: {
            width: pagemedia.res_max_width ?: null,
            height: pagemedia.res_max_height ?: null
        }
    },
    resizeWidth: pagemedia.resize_width ?: null,
    resizeHeight: pagemedia.resize_height ?: null,
    resizeQuality: pagemedia.resize_quality ?: 0.8
} %}

{% if context.folderExists %}
<div class=\"form-field grid vertical {% if field.classes is defined %}{{ field.classes }}{% endif %}\">
    <div class=\"form-label\">
        <label>{{ field.label|tu }}</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        {% set uploadLimit = grav.config.system.media.upload_limit / 1024 / 1024 %}
        {% set dropzoneSettings = { maxFileSize: uploadLimit }|merge(pagemedia_settings) %}
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"{{ base_url }}/media/{{ admin.route|trim('/') }}.json\"
             data-media-local=\"{{ base_url_relative_frontend|rtrim('/') }}/{{ admin.route|trim('/') }}\"
             data-media-path=\"{{ url(context.relativePagePath) }}\"
             data-dropzone-options=\"{{ dropzoneSettings|json_encode|e('html_attr') }}\"
             data-dropzone-field=\"{{ (scope ~ field.name)|fieldName }}\"></div>

        {% if admin.session.expert == '0' %}
        <input type=\"hidden\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ value|e }}\" />
        {% endif %}
    </div>
</div>
{% else %}
<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            {{ \"PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED\"|tu }}
        </div>
    </div>
</div>
{% endif %}
", "forms/fields/pagemedia/pagemedia.html.twig", "/Users/mattanddana/Documents/MAMPWebsites/user/plugins/admin/themes/grav/templates/forms/fields/pagemedia/pagemedia.html.twig");
    }
}
