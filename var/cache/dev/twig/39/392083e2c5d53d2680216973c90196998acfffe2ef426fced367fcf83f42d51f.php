<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4b8144f055c89a44de5c469635e62803db8fcdc62c48638dc98efd2659f1a12c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79d6992b88692d6d06735783e6bc8977619358aa521ce7bd8c46c83d83089e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d6992b88692d6d06735783e6bc8977619358aa521ce7bd8c46c83d83089e7c->enter($__internal_79d6992b88692d6d06735783e6bc8977619358aa521ce7bd8c46c83d83089e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_add90a111051d14a71e8295dd0dd2cd5714df02dad61dbc54d3736b7fc5011dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add90a111051d14a71e8295dd0dd2cd5714df02dad61dbc54d3736b7fc5011dc->enter($__internal_add90a111051d14a71e8295dd0dd2cd5714df02dad61dbc54d3736b7fc5011dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79d6992b88692d6d06735783e6bc8977619358aa521ce7bd8c46c83d83089e7c->leave($__internal_79d6992b88692d6d06735783e6bc8977619358aa521ce7bd8c46c83d83089e7c_prof);

        
        $__internal_add90a111051d14a71e8295dd0dd2cd5714df02dad61dbc54d3736b7fc5011dc->leave($__internal_add90a111051d14a71e8295dd0dd2cd5714df02dad61dbc54d3736b7fc5011dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f450bc78b7f8362c316078bde37bfbc462eec4205cc1a4b49d43dddd1240113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f450bc78b7f8362c316078bde37bfbc462eec4205cc1a4b49d43dddd1240113->enter($__internal_2f450bc78b7f8362c316078bde37bfbc462eec4205cc1a4b49d43dddd1240113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_98b5e66c2c8df419ac5597ae3884b2d8be18450ad5adefa7f98c2934a05a0fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b5e66c2c8df419ac5597ae3884b2d8be18450ad5adefa7f98c2934a05a0fc0->enter($__internal_98b5e66c2c8df419ac5597ae3884b2d8be18450ad5adefa7f98c2934a05a0fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98b5e66c2c8df419ac5597ae3884b2d8be18450ad5adefa7f98c2934a05a0fc0->leave($__internal_98b5e66c2c8df419ac5597ae3884b2d8be18450ad5adefa7f98c2934a05a0fc0_prof);

        
        $__internal_2f450bc78b7f8362c316078bde37bfbc462eec4205cc1a4b49d43dddd1240113->leave($__internal_2f450bc78b7f8362c316078bde37bfbc462eec4205cc1a4b49d43dddd1240113_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d77ba48344cd3b75d46050f37acddfbd1317d2a078dd47ffa7e55e8286a59024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77ba48344cd3b75d46050f37acddfbd1317d2a078dd47ffa7e55e8286a59024->enter($__internal_d77ba48344cd3b75d46050f37acddfbd1317d2a078dd47ffa7e55e8286a59024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc3e72304ed8615ba46639152073c48ac261b0ad19b99479c6340b3f5197c44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3e72304ed8615ba46639152073c48ac261b0ad19b99479c6340b3f5197c44b->enter($__internal_fc3e72304ed8615ba46639152073c48ac261b0ad19b99479c6340b3f5197c44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc3e72304ed8615ba46639152073c48ac261b0ad19b99479c6340b3f5197c44b->leave($__internal_fc3e72304ed8615ba46639152073c48ac261b0ad19b99479c6340b3f5197c44b_prof);

        
        $__internal_d77ba48344cd3b75d46050f37acddfbd1317d2a078dd47ffa7e55e8286a59024->leave($__internal_d77ba48344cd3b75d46050f37acddfbd1317d2a078dd47ffa7e55e8286a59024_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f7f50651ce670b832952194f003f09766a7c9ef012dc3f9efaf5294eec0f9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f7f50651ce670b832952194f003f09766a7c9ef012dc3f9efaf5294eec0f9fb->enter($__internal_2f7f50651ce670b832952194f003f09766a7c9ef012dc3f9efaf5294eec0f9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e486816e20f4b8fd80652da5195d43d9939d6cf827e96c941e8a86744b2a02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e486816e20f4b8fd80652da5195d43d9939d6cf827e96c941e8a86744b2a02f->enter($__internal_1e486816e20f4b8fd80652da5195d43d9939d6cf827e96c941e8a86744b2a02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e486816e20f4b8fd80652da5195d43d9939d6cf827e96c941e8a86744b2a02f->leave($__internal_1e486816e20f4b8fd80652da5195d43d9939d6cf827e96c941e8a86744b2a02f_prof);

        
        $__internal_2f7f50651ce670b832952194f003f09766a7c9ef012dc3f9efaf5294eec0f9fb->leave($__internal_2f7f50651ce670b832952194f003f09766a7c9ef012dc3f9efaf5294eec0f9fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/learning/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
