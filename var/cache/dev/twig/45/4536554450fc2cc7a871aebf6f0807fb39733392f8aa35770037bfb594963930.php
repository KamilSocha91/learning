<?php

/* ::base.html.twig */
class __TwigTemplate_7d47fc7ab4e04bf01c47e817b6494a8c8fa6d1db35796a1a418fc6149054305c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_728168b8a88cf5640b74068c6df9d703152cd84ef454fd61ee13bc57ee50b78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728168b8a88cf5640b74068c6df9d703152cd84ef454fd61ee13bc57ee50b78c->enter($__internal_728168b8a88cf5640b74068c6df9d703152cd84ef454fd61ee13bc57ee50b78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_3fc9ff4a384f5d13bfb6acafad31559eac0315a14872a20fadf8e56e89802c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc9ff4a384f5d13bfb6acafad31559eac0315a14872a20fadf8e56e89802c9c->enter($__internal_3fc9ff4a384f5d13bfb6acafad31559eac0315a14872a20fadf8e56e89802c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_dashboard_homepage");
        echo "\">Dashboard</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course");
        echo "\">Course</a></li>
                </ul>
                <ul class=\"user\">
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_dashboard_homepage");
        echo "\">login</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course");
        echo "\">logout</a></li>
                </ul>
            </nav>
        </header>

        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "        
    </body>
</html>
";
        
        $__internal_728168b8a88cf5640b74068c6df9d703152cd84ef454fd61ee13bc57ee50b78c->leave($__internal_728168b8a88cf5640b74068c6df9d703152cd84ef454fd61ee13bc57ee50b78c_prof);

        
        $__internal_3fc9ff4a384f5d13bfb6acafad31559eac0315a14872a20fadf8e56e89802c9c->leave($__internal_3fc9ff4a384f5d13bfb6acafad31559eac0315a14872a20fadf8e56e89802c9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3fe881cac70c1d456024524ed9bd09b4c9884164531a539ab8928d208f5b391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fe881cac70c1d456024524ed9bd09b4c9884164531a539ab8928d208f5b391->enter($__internal_d3fe881cac70c1d456024524ed9bd09b4c9884164531a539ab8928d208f5b391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8be0049b4906f1c1a7b9bde1cd06829cba7eb3a34883626ece582df2972b439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8be0049b4906f1c1a7b9bde1cd06829cba7eb3a34883626ece582df2972b439->enter($__internal_c8be0049b4906f1c1a7b9bde1cd06829cba7eb3a34883626ece582df2972b439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8be0049b4906f1c1a7b9bde1cd06829cba7eb3a34883626ece582df2972b439->leave($__internal_c8be0049b4906f1c1a7b9bde1cd06829cba7eb3a34883626ece582df2972b439_prof);

        
        $__internal_d3fe881cac70c1d456024524ed9bd09b4c9884164531a539ab8928d208f5b391->leave($__internal_d3fe881cac70c1d456024524ed9bd09b4c9884164531a539ab8928d208f5b391_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6904751d20ce333bf2385e468f9c5c7287acbb284386f6fc9d22a21aea954c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6904751d20ce333bf2385e468f9c5c7287acbb284386f6fc9d22a21aea954c2->enter($__internal_c6904751d20ce333bf2385e468f9c5c7287acbb284386f6fc9d22a21aea954c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a7dbc40df64759654f3a3598f871a8d0cf80f85cacc7d4b85fc7c88c44116c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dbc40df64759654f3a3598f871a8d0cf80f85cacc7d4b85fc7c88c44116c8d->enter($__internal_a7dbc40df64759654f3a3598f871a8d0cf80f85cacc7d4b85fc7c88c44116c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ba136f2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ba136f2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/ba136f2_master_1.css");
            // line 10
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "ba136f2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ba136f2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/ba136f2.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        ";
        
        $__internal_a7dbc40df64759654f3a3598f871a8d0cf80f85cacc7d4b85fc7c88c44116c8d->leave($__internal_a7dbc40df64759654f3a3598f871a8d0cf80f85cacc7d4b85fc7c88c44116c8d_prof);

        
        $__internal_c6904751d20ce333bf2385e468f9c5c7287acbb284386f6fc9d22a21aea954c2->leave($__internal_c6904751d20ce333bf2385e468f9c5c7287acbb284386f6fc9d22a21aea954c2_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_27378c48142f7a1e1260b2556f6f04ab1e7eaef3fed53b346b294753c3017f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27378c48142f7a1e1260b2556f6f04ab1e7eaef3fed53b346b294753c3017f62->enter($__internal_27378c48142f7a1e1260b2556f6f04ab1e7eaef3fed53b346b294753c3017f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53f66af683d1d98a96acfc5e88e59d9e29dcd56c2263da20cd48aa4c798801b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f66af683d1d98a96acfc5e88e59d9e29dcd56c2263da20cd48aa4c798801b5->enter($__internal_53f66af683d1d98a96acfc5e88e59d9e29dcd56c2263da20cd48aa4c798801b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53f66af683d1d98a96acfc5e88e59d9e29dcd56c2263da20cd48aa4c798801b5->leave($__internal_53f66af683d1d98a96acfc5e88e59d9e29dcd56c2263da20cd48aa4c798801b5_prof);

        
        $__internal_27378c48142f7a1e1260b2556f6f04ab1e7eaef3fed53b346b294753c3017f62->leave($__internal_27378c48142f7a1e1260b2556f6f04ab1e7eaef3fed53b346b294753c3017f62_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_419a4372137a383c5b46445c63dbe6f0663e84a3da77c07c806ef04ee8c0045c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419a4372137a383c5b46445c63dbe6f0663e84a3da77c07c806ef04ee8c0045c->enter($__internal_419a4372137a383c5b46445c63dbe6f0663e84a3da77c07c806ef04ee8c0045c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_55856baf497e4d0c166da355bcfb6ffb10ce88c8c1384213c4dc80f79111ad57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55856baf497e4d0c166da355bcfb6ffb10ce88c8c1384213c4dc80f79111ad57->enter($__internal_55856baf497e4d0c166da355bcfb6ffb10ce88c8c1384213c4dc80f79111ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_55856baf497e4d0c166da355bcfb6ffb10ce88c8c1384213c4dc80f79111ad57->leave($__internal_55856baf497e4d0c166da355bcfb6ffb10ce88c8c1384213c4dc80f79111ad57_prof);

        
        $__internal_419a4372137a383c5b46445c63dbe6f0663e84a3da77c07c806ef04ee8c0045c->leave($__internal_419a4372137a383c5b46445c63dbe6f0663e84a3da77c07c806ef04ee8c0045c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 31,  149 => 29,  139 => 12,  125 => 10,  120 => 7,  111 => 6,  93 => 5,  80 => 32,  78 => 31,  75 => 30,  73 => 29,  65 => 24,  61 => 23,  55 => 20,  51 => 19,  41 => 13,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            {% stylesheets
                '../app/Resources/public/css/master.css'
            %}
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset_url }}\"/>
            {% endstylesheets %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href=\"{{ path('app_dashboard_homepage') }}\">Dashboard</a></li>
                    <li><a href=\"{{ path('course') }}\">Course</a></li>
                </ul>
                <ul class=\"user\">
                    <li><a href=\"{{ path('app_dashboard_homepage') }}\">login</a></li>
                    <li><a href=\"{{ path('course') }}\">logout</a></li>
                </ul>
            </nav>
        </header>

        {% block body %}{% endblock %}

    {% block javascripts %}{% endblock %}
        
    </body>
</html>
", "::base.html.twig", "/var/learning/app/Resources/views/base.html.twig");
    }
}
