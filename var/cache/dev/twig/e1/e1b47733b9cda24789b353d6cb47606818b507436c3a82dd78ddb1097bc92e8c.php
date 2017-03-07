<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ccd085ac78fe050aef51acebebaa83af0f3425a64186430df0a5e861d5d83aea extends Twig_Template
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
        $__internal_a88808e2ba87eb0ef63731f02690f1a41a8b3d017b166efd4b06e9abf70887f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88808e2ba87eb0ef63731f02690f1a41a8b3d017b166efd4b06e9abf70887f3->enter($__internal_a88808e2ba87eb0ef63731f02690f1a41a8b3d017b166efd4b06e9abf70887f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c917cf22b3df244dec70a20c2ace288fdfdd37db640f29aced928f9a6eeff2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c917cf22b3df244dec70a20c2ace288fdfdd37db640f29aced928f9a6eeff2fa->enter($__internal_c917cf22b3df244dec70a20c2ace288fdfdd37db640f29aced928f9a6eeff2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_a88808e2ba87eb0ef63731f02690f1a41a8b3d017b166efd4b06e9abf70887f3->leave($__internal_a88808e2ba87eb0ef63731f02690f1a41a8b3d017b166efd4b06e9abf70887f3_prof);

        
        $__internal_c917cf22b3df244dec70a20c2ace288fdfdd37db640f29aced928f9a6eeff2fa->leave($__internal_c917cf22b3df244dec70a20c2ace288fdfdd37db640f29aced928f9a6eeff2fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/learning/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
