<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_52694fbb9a34699a2dac93d6a0bb0b0d962f07eda6c520111893ac69e220ec3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddd6c8fd01a52272b1c4261b45842578f78e7d9f1535fe531e316e69791a1a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd6c8fd01a52272b1c4261b45842578f78e7d9f1535fe531e316e69791a1a11->enter($__internal_ddd6c8fd01a52272b1c4261b45842578f78e7d9f1535fe531e316e69791a1a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_72e7e614323ace256702d0fd6573002b7a589795ea7f9825f637de5df846e402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e7e614323ace256702d0fd6573002b7a589795ea7f9825f637de5df846e402->enter($__internal_72e7e614323ace256702d0fd6573002b7a589795ea7f9825f637de5df846e402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddd6c8fd01a52272b1c4261b45842578f78e7d9f1535fe531e316e69791a1a11->leave($__internal_ddd6c8fd01a52272b1c4261b45842578f78e7d9f1535fe531e316e69791a1a11_prof);

        
        $__internal_72e7e614323ace256702d0fd6573002b7a589795ea7f9825f637de5df846e402->leave($__internal_72e7e614323ace256702d0fd6573002b7a589795ea7f9825f637de5df846e402_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15666aa76e28cb9335b482b1f335533a79531950d137c59f7d6650166a1ab96a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15666aa76e28cb9335b482b1f335533a79531950d137c59f7d6650166a1ab96a->enter($__internal_15666aa76e28cb9335b482b1f335533a79531950d137c59f7d6650166a1ab96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_125b9dd3ccc8ff72cfe9e228912b4b83d356ee94f7ced6a6a3c9dbd699bff49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125b9dd3ccc8ff72cfe9e228912b4b83d356ee94f7ced6a6a3c9dbd699bff49a->enter($__internal_125b9dd3ccc8ff72cfe9e228912b4b83d356ee94f7ced6a6a3c9dbd699bff49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_125b9dd3ccc8ff72cfe9e228912b4b83d356ee94f7ced6a6a3c9dbd699bff49a->leave($__internal_125b9dd3ccc8ff72cfe9e228912b4b83d356ee94f7ced6a6a3c9dbd699bff49a_prof);

        
        $__internal_15666aa76e28cb9335b482b1f335533a79531950d137c59f7d6650166a1ab96a->leave($__internal_15666aa76e28cb9335b482b1f335533a79531950d137c59f7d6650166a1ab96a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/learning/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
