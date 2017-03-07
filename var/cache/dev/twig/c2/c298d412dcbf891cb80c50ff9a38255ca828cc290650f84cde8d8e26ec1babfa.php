<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a0d790ecf25307beda1bbe870f7ba578194ed9714430c86516a765244ebac2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_77e54eb0a579ac4ba4feff7973acdb3455458c798e4abed2e7ae50ded3c61b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e54eb0a579ac4ba4feff7973acdb3455458c798e4abed2e7ae50ded3c61b30->enter($__internal_77e54eb0a579ac4ba4feff7973acdb3455458c798e4abed2e7ae50ded3c61b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f906244af6a5a75173a9e2cdc3627cdfc71e5bc3265da3c9f4cac9bfe358fcd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f906244af6a5a75173a9e2cdc3627cdfc71e5bc3265da3c9f4cac9bfe358fcd8->enter($__internal_f906244af6a5a75173a9e2cdc3627cdfc71e5bc3265da3c9f4cac9bfe358fcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77e54eb0a579ac4ba4feff7973acdb3455458c798e4abed2e7ae50ded3c61b30->leave($__internal_77e54eb0a579ac4ba4feff7973acdb3455458c798e4abed2e7ae50ded3c61b30_prof);

        
        $__internal_f906244af6a5a75173a9e2cdc3627cdfc71e5bc3265da3c9f4cac9bfe358fcd8->leave($__internal_f906244af6a5a75173a9e2cdc3627cdfc71e5bc3265da3c9f4cac9bfe358fcd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25628662eaf84bef86ed97cd703c4eadd321bcb94f6bb5b9ce9e25a24cf4cabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25628662eaf84bef86ed97cd703c4eadd321bcb94f6bb5b9ce9e25a24cf4cabc->enter($__internal_25628662eaf84bef86ed97cd703c4eadd321bcb94f6bb5b9ce9e25a24cf4cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_643f51fb5a9cb7080716e40d8afc6dd276d11d7fbe8c6eb7e0e8d9e5f4dff111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643f51fb5a9cb7080716e40d8afc6dd276d11d7fbe8c6eb7e0e8d9e5f4dff111->enter($__internal_643f51fb5a9cb7080716e40d8afc6dd276d11d7fbe8c6eb7e0e8d9e5f4dff111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_643f51fb5a9cb7080716e40d8afc6dd276d11d7fbe8c6eb7e0e8d9e5f4dff111->leave($__internal_643f51fb5a9cb7080716e40d8afc6dd276d11d7fbe8c6eb7e0e8d9e5f4dff111_prof);

        
        $__internal_25628662eaf84bef86ed97cd703c4eadd321bcb94f6bb5b9ce9e25a24cf4cabc->leave($__internal_25628662eaf84bef86ed97cd703c4eadd321bcb94f6bb5b9ce9e25a24cf4cabc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe5917d34059b9987404459fac8979c992f91deeb9b93c0e283c229accbed8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5917d34059b9987404459fac8979c992f91deeb9b93c0e283c229accbed8e3->enter($__internal_fe5917d34059b9987404459fac8979c992f91deeb9b93c0e283c229accbed8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2a8fd59c0cb3a0b31c7e7c1d04fdb8c69f8fbdb3ccb822a5f9154ef003ca0b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8fd59c0cb3a0b31c7e7c1d04fdb8c69f8fbdb3ccb822a5f9154ef003ca0b94->enter($__internal_2a8fd59c0cb3a0b31c7e7c1d04fdb8c69f8fbdb3ccb822a5f9154ef003ca0b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2a8fd59c0cb3a0b31c7e7c1d04fdb8c69f8fbdb3ccb822a5f9154ef003ca0b94->leave($__internal_2a8fd59c0cb3a0b31c7e7c1d04fdb8c69f8fbdb3ccb822a5f9154ef003ca0b94_prof);

        
        $__internal_fe5917d34059b9987404459fac8979c992f91deeb9b93c0e283c229accbed8e3->leave($__internal_fe5917d34059b9987404459fac8979c992f91deeb9b93c0e283c229accbed8e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_574ecc8557a6ea00e69cfab7e9c5183433df894bd92faedd4644d4f8b51270f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574ecc8557a6ea00e69cfab7e9c5183433df894bd92faedd4644d4f8b51270f8->enter($__internal_574ecc8557a6ea00e69cfab7e9c5183433df894bd92faedd4644d4f8b51270f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_454e4316e82b462ced29d84778855e9e77e659fbb3835cea646f64b1c072975f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454e4316e82b462ced29d84778855e9e77e659fbb3835cea646f64b1c072975f->enter($__internal_454e4316e82b462ced29d84778855e9e77e659fbb3835cea646f64b1c072975f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_454e4316e82b462ced29d84778855e9e77e659fbb3835cea646f64b1c072975f->leave($__internal_454e4316e82b462ced29d84778855e9e77e659fbb3835cea646f64b1c072975f_prof);

        
        $__internal_574ecc8557a6ea00e69cfab7e9c5183433df894bd92faedd4644d4f8b51270f8->leave($__internal_574ecc8557a6ea00e69cfab7e9c5183433df894bd92faedd4644d4f8b51270f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/learning/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
