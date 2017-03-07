<?php

/* AppDashboardBundle:Dashboard:index.html.twig */
class __TwigTemplate_93992726e036b2625695c9abb7058e99cefb5e3e79ce91187610add53eb7cdc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppDashboardBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa3845af5ccf523aa14eed5fcf0778511e4f05a4837b38086afd79ab6331e627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3845af5ccf523aa14eed5fcf0778511e4f05a4837b38086afd79ab6331e627->enter($__internal_fa3845af5ccf523aa14eed5fcf0778511e4f05a4837b38086afd79ab6331e627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppDashboardBundle:Dashboard:index.html.twig"));

        $__internal_476cfbe1fa0cca69ecd9b0b485e8213da1d2948a1761dcfa4d1122803307cb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476cfbe1fa0cca69ecd9b0b485e8213da1d2948a1761dcfa4d1122803307cb13->enter($__internal_476cfbe1fa0cca69ecd9b0b485e8213da1d2948a1761dcfa4d1122803307cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppDashboardBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa3845af5ccf523aa14eed5fcf0778511e4f05a4837b38086afd79ab6331e627->leave($__internal_fa3845af5ccf523aa14eed5fcf0778511e4f05a4837b38086afd79ab6331e627_prof);

        
        $__internal_476cfbe1fa0cca69ecd9b0b485e8213da1d2948a1761dcfa4d1122803307cb13->leave($__internal_476cfbe1fa0cca69ecd9b0b485e8213da1d2948a1761dcfa4d1122803307cb13_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69bfbcfdf24fb5abed7e998deffaab6c39ecf7257969b022424dd94b350ac4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bfbcfdf24fb5abed7e998deffaab6c39ecf7257969b022424dd94b350ac4e1->enter($__internal_69bfbcfdf24fb5abed7e998deffaab6c39ecf7257969b022424dd94b350ac4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b0391f9ed19aa374ee197bcbf6656d3dcaca00a4098cd7bb68787c3042cdabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0391f9ed19aa374ee197bcbf6656d3dcaca00a4098cd7bb68787c3042cdabd->enter($__internal_5b0391f9ed19aa374ee197bcbf6656d3dcaca00a4098cd7bb68787c3042cdabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppDashboardBundle:Dashboard:index";
        
        $__internal_5b0391f9ed19aa374ee197bcbf6656d3dcaca00a4098cd7bb68787c3042cdabd->leave($__internal_5b0391f9ed19aa374ee197bcbf6656d3dcaca00a4098cd7bb68787c3042cdabd_prof);

        
        $__internal_69bfbcfdf24fb5abed7e998deffaab6c39ecf7257969b022424dd94b350ac4e1->leave($__internal_69bfbcfdf24fb5abed7e998deffaab6c39ecf7257969b022424dd94b350ac4e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc9463874a35a20b1cf46698b1efd103bd49f10f4d561a6781bc48647e5af132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9463874a35a20b1cf46698b1efd103bd49f10f4d561a6781bc48647e5af132->enter($__internal_cc9463874a35a20b1cf46698b1efd103bd49f10f4d561a6781bc48647e5af132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_518af1b05c6a65c57d9ef8811519615b508289047d57b6be57c34be3dda12e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518af1b05c6a65c57d9ef8811519615b508289047d57b6be57c34be3dda12e6f->enter($__internal_518af1b05c6a65c57d9ef8811519615b508289047d57b6be57c34be3dda12e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Dashboard:index page</h1>
";
        
        $__internal_518af1b05c6a65c57d9ef8811519615b508289047d57b6be57c34be3dda12e6f->leave($__internal_518af1b05c6a65c57d9ef8811519615b508289047d57b6be57c34be3dda12e6f_prof);

        
        $__internal_cc9463874a35a20b1cf46698b1efd103bd49f10f4d561a6781bc48647e5af132->leave($__internal_cc9463874a35a20b1cf46698b1efd103bd49f10f4d561a6781bc48647e5af132_prof);

    }

    public function getTemplateName()
    {
        return "AppDashboardBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppDashboardBundle:Dashboard:index{% endblock %}

{% block body %}
<h1>Welcome to the Dashboard:index page</h1>
{% endblock %}
", "AppDashboardBundle:Dashboard:index.html.twig", "/var/learning/src/App/DashboardBundle/Resources/views/Dashboard/index.html.twig");
    }
}
