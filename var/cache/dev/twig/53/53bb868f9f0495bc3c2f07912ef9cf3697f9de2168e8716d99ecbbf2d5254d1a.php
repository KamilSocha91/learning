<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b5286de2838c44ea9daa7273cc68bfe87a1e057c0d8864448ac5e9f386a7c43e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_098cbebec440ce9292162b002df6fa2c615ba496e0b4bee051e9b744e7118f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098cbebec440ce9292162b002df6fa2c615ba496e0b4bee051e9b744e7118f26->enter($__internal_098cbebec440ce9292162b002df6fa2c615ba496e0b4bee051e9b744e7118f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3840a9a61d204e502a9c593c9904f25820e8e78e2ae1fcc52423f7d58d5d44e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3840a9a61d204e502a9c593c9904f25820e8e78e2ae1fcc52423f7d58d5d44e6->enter($__internal_3840a9a61d204e502a9c593c9904f25820e8e78e2ae1fcc52423f7d58d5d44e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_098cbebec440ce9292162b002df6fa2c615ba496e0b4bee051e9b744e7118f26->leave($__internal_098cbebec440ce9292162b002df6fa2c615ba496e0b4bee051e9b744e7118f26_prof);

        
        $__internal_3840a9a61d204e502a9c593c9904f25820e8e78e2ae1fcc52423f7d58d5d44e6->leave($__internal_3840a9a61d204e502a9c593c9904f25820e8e78e2ae1fcc52423f7d58d5d44e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cac8873d075f6274883ec6e7a791f3e556e69af7c57ac53e0100c8360e0cff5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac8873d075f6274883ec6e7a791f3e556e69af7c57ac53e0100c8360e0cff5c->enter($__internal_cac8873d075f6274883ec6e7a791f3e556e69af7c57ac53e0100c8360e0cff5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f92e6c64f56cd78e4f024c5876ac8ac9cc85836f4679b51d2d8956235478e3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92e6c64f56cd78e4f024c5876ac8ac9cc85836f4679b51d2d8956235478e3f0->enter($__internal_f92e6c64f56cd78e4f024c5876ac8ac9cc85836f4679b51d2d8956235478e3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f92e6c64f56cd78e4f024c5876ac8ac9cc85836f4679b51d2d8956235478e3f0->leave($__internal_f92e6c64f56cd78e4f024c5876ac8ac9cc85836f4679b51d2d8956235478e3f0_prof);

        
        $__internal_cac8873d075f6274883ec6e7a791f3e556e69af7c57ac53e0100c8360e0cff5c->leave($__internal_cac8873d075f6274883ec6e7a791f3e556e69af7c57ac53e0100c8360e0cff5c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f5b59b75e348124c7ceb42e24dba48918223cb4406978c777b18a2c23e78a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5b59b75e348124c7ceb42e24dba48918223cb4406978c777b18a2c23e78a11->enter($__internal_2f5b59b75e348124c7ceb42e24dba48918223cb4406978c777b18a2c23e78a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5949872186f0eac22418fa9c94050b18fcaef7bb36618c31aaf0a771cbbaad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5949872186f0eac22418fa9c94050b18fcaef7bb36618c31aaf0a771cbbaad4->enter($__internal_c5949872186f0eac22418fa9c94050b18fcaef7bb36618c31aaf0a771cbbaad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5949872186f0eac22418fa9c94050b18fcaef7bb36618c31aaf0a771cbbaad4->leave($__internal_c5949872186f0eac22418fa9c94050b18fcaef7bb36618c31aaf0a771cbbaad4_prof);

        
        $__internal_2f5b59b75e348124c7ceb42e24dba48918223cb4406978c777b18a2c23e78a11->leave($__internal_2f5b59b75e348124c7ceb42e24dba48918223cb4406978c777b18a2c23e78a11_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7d0b9d010d2d47070c3246a0936a169d7d8a6a0f565041036fb647036ac48aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d0b9d010d2d47070c3246a0936a169d7d8a6a0f565041036fb647036ac48aa->enter($__internal_a7d0b9d010d2d47070c3246a0936a169d7d8a6a0f565041036fb647036ac48aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_349062309acab9ecf9f00ea43e979e697b335dd238753888bfc53e1376d58cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349062309acab9ecf9f00ea43e979e697b335dd238753888bfc53e1376d58cc6->enter($__internal_349062309acab9ecf9f00ea43e979e697b335dd238753888bfc53e1376d58cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_349062309acab9ecf9f00ea43e979e697b335dd238753888bfc53e1376d58cc6->leave($__internal_349062309acab9ecf9f00ea43e979e697b335dd238753888bfc53e1376d58cc6_prof);

        
        $__internal_a7d0b9d010d2d47070c3246a0936a169d7d8a6a0f565041036fb647036ac48aa->leave($__internal_a7d0b9d010d2d47070c3246a0936a169d7d8a6a0f565041036fb647036ac48aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/learning/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
