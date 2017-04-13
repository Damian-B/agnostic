<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_4fd68a347223c088c3654449e24b35591b6fd49b46c08045019af19434cce7b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f416f59f1113fe79cfa587fca37134d8383a4ce8e88227862383baa726b78943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f416f59f1113fe79cfa587fca37134d8383a4ce8e88227862383baa726b78943->enter($__internal_f416f59f1113fe79cfa587fca37134d8383a4ce8e88227862383baa726b78943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ddc0232df5a4990e2f751c700f321d414559dd0fda9cab4d8eafaed2628d8ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc0232df5a4990e2f751c700f321d414559dd0fda9cab4d8eafaed2628d8ceb->enter($__internal_ddc0232df5a4990e2f751c700f321d414559dd0fda9cab4d8eafaed2628d8ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f416f59f1113fe79cfa587fca37134d8383a4ce8e88227862383baa726b78943->leave($__internal_f416f59f1113fe79cfa587fca37134d8383a4ce8e88227862383baa726b78943_prof);

        
        $__internal_ddc0232df5a4990e2f751c700f321d414559dd0fda9cab4d8eafaed2628d8ceb->leave($__internal_ddc0232df5a4990e2f751c700f321d414559dd0fda9cab4d8eafaed2628d8ceb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_533c65ed63cf856e21ad2cd5b2d0caa075c13cffd6430dd1aeb2daa6954a21ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533c65ed63cf856e21ad2cd5b2d0caa075c13cffd6430dd1aeb2daa6954a21ec->enter($__internal_533c65ed63cf856e21ad2cd5b2d0caa075c13cffd6430dd1aeb2daa6954a21ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_98a963be1e3b3373c252a8056e6fae4a6dd7a57be48046ea36a2b01cb8b8c408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a963be1e3b3373c252a8056e6fae4a6dd7a57be48046ea36a2b01cb8b8c408->enter($__internal_98a963be1e3b3373c252a8056e6fae4a6dd7a57be48046ea36a2b01cb8b8c408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_98a963be1e3b3373c252a8056e6fae4a6dd7a57be48046ea36a2b01cb8b8c408->leave($__internal_98a963be1e3b3373c252a8056e6fae4a6dd7a57be48046ea36a2b01cb8b8c408_prof);

        
        $__internal_533c65ed63cf856e21ad2cd5b2d0caa075c13cffd6430dd1aeb2daa6954a21ec->leave($__internal_533c65ed63cf856e21ad2cd5b2d0caa075c13cffd6430dd1aeb2daa6954a21ec_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0edc235508b0535bc5b7040973208932bdb6b0da1187e223e8ee12bd331fc40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0edc235508b0535bc5b7040973208932bdb6b0da1187e223e8ee12bd331fc40->enter($__internal_b0edc235508b0535bc5b7040973208932bdb6b0da1187e223e8ee12bd331fc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0cc9c3a3bde475eed02bd39e8c1d78a0f6a4f9a3b2cec3e702cbb7c576d71d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cc9c3a3bde475eed02bd39e8c1d78a0f6a4f9a3b2cec3e702cbb7c576d71d1->enter($__internal_b0cc9c3a3bde475eed02bd39e8c1d78a0f6a4f9a3b2cec3e702cbb7c576d71d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b0cc9c3a3bde475eed02bd39e8c1d78a0f6a4f9a3b2cec3e702cbb7c576d71d1->leave($__internal_b0cc9c3a3bde475eed02bd39e8c1d78a0f6a4f9a3b2cec3e702cbb7c576d71d1_prof);

        
        $__internal_b0edc235508b0535bc5b7040973208932bdb6b0da1187e223e8ee12bd331fc40->leave($__internal_b0edc235508b0535bc5b7040973208932bdb6b0da1187e223e8ee12bd331fc40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/agnostic/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
