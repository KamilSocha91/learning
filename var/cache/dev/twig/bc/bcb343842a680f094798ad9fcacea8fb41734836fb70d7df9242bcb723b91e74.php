<?php

/* AppCourseBundle:Course:course.html.twig */
class __TwigTemplate_f3947e00c75c0ccf9f99c5ac373f56086c0f7ecd57bc5314d05768819b7901cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppCourseBundle:Course:course.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8739e4197f4fe3a62407dcfd9c4ebe1eb16e270008b690768d98d7be12411b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8739e4197f4fe3a62407dcfd9c4ebe1eb16e270008b690768d98d7be12411b63->enter($__internal_8739e4197f4fe3a62407dcfd9c4ebe1eb16e270008b690768d98d7be12411b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCourseBundle:Course:course.html.twig"));

        $__internal_77fa116f74db393592b9ff648cbfd244b2b25b79d7a8979cfd3c822761e435b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fa116f74db393592b9ff648cbfd244b2b25b79d7a8979cfd3c822761e435b9->enter($__internal_77fa116f74db393592b9ff648cbfd244b2b25b79d7a8979cfd3c822761e435b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCourseBundle:Course:course.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8739e4197f4fe3a62407dcfd9c4ebe1eb16e270008b690768d98d7be12411b63->leave($__internal_8739e4197f4fe3a62407dcfd9c4ebe1eb16e270008b690768d98d7be12411b63_prof);

        
        $__internal_77fa116f74db393592b9ff648cbfd244b2b25b79d7a8979cfd3c822761e435b9->leave($__internal_77fa116f74db393592b9ff648cbfd244b2b25b79d7a8979cfd3c822761e435b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_127cba8b1c378002b6a52670bd81da1f4286f2e33cbcb21af49059fabfe2656b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127cba8b1c378002b6a52670bd81da1f4286f2e33cbcb21af49059fabfe2656b->enter($__internal_127cba8b1c378002b6a52670bd81da1f4286f2e33cbcb21af49059fabfe2656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30bb1ff285ba78ffe7b0bbc472796f600b8dfdb8e5c05f4682808454ff932324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bb1ff285ba78ffe7b0bbc472796f600b8dfdb8e5c05f4682808454ff932324->enter($__internal_30bb1ff285ba78ffe7b0bbc472796f600b8dfdb8e5c05f4682808454ff932324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.title"), "html", null, true);
        
        $__internal_30bb1ff285ba78ffe7b0bbc472796f600b8dfdb8e5c05f4682808454ff932324->leave($__internal_30bb1ff285ba78ffe7b0bbc472796f600b8dfdb8e5c05f4682808454ff932324_prof);

        
        $__internal_127cba8b1c378002b6a52670bd81da1f4286f2e33cbcb21af49059fabfe2656b->leave($__internal_127cba8b1c378002b6a52670bd81da1f4286f2e33cbcb21af49059fabfe2656b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa479a5165c5b53382e2cd30016972745f82a534fcb7b97a343b9c1d3309dab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa479a5165c5b53382e2cd30016972745f82a534fcb7b97a343b9c1d3309dab2->enter($__internal_fa479a5165c5b53382e2cd30016972745f82a534fcb7b97a343b9c1d3309dab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_672dbb31a3de00853ab1194aeac905e1474eed7253a81edeb0eb5d1983654cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672dbb31a3de00853ab1194aeac905e1474eed7253a81edeb0eb5d1983654cde->enter($__internal_672dbb31a3de00853ab1194aeac905e1474eed7253a81edeb0eb5d1983654cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div ng-app=\"courseApp\">
\t\t<aside ng-controller=\"courseCtrl\">
\t\t\t
\t\t</aside>
\t    <section ng-controller=\"questionCtrl\">
";
        // line 49
        echo "\t    </section>

\t\t<div style=\"clear: both;\"></div>
\t</div>
";
        
        $__internal_672dbb31a3de00853ab1194aeac905e1474eed7253a81edeb0eb5d1983654cde->leave($__internal_672dbb31a3de00853ab1194aeac905e1474eed7253a81edeb0eb5d1983654cde_prof);

        
        $__internal_fa479a5165c5b53382e2cd30016972745f82a534fcb7b97a343b9c1d3309dab2->leave($__internal_fa479a5165c5b53382e2cd30016972745f82a534fcb7b97a343b9c1d3309dab2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e9939304584b3add72b7729a92cd0b421baacff7fd4994fc0b9029af3bcb002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9939304584b3add72b7729a92cd0b421baacff7fd4994fc0b9029af3bcb002->enter($__internal_0e9939304584b3add72b7729a92cd0b421baacff7fd4994fc0b9029af3bcb002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b0846f98801177105e639f7a3677742f92eac093ee4c458bcd1de1fb2e1598e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0846f98801177105e639f7a3677742f92eac093ee4c458bcd1de1fb2e1598e->enter($__internal_7b0846f98801177105e639f7a3677742f92eac093ee4c458bcd1de1fb2e1598e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    ";
        // line 58
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "39c92c4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_39c92c4_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/39c92c4_angular.min_1.js");
            // line 64
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "39c92c4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_39c92c4_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/39c92c4_controller_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "39c92c4_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_39c92c4_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/39c92c4_directives_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "39c92c4_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_39c92c4_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/39c92c4_services_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "39c92c4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_39c92c4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/39c92c4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_7b0846f98801177105e639f7a3677742f92eac093ee4c458bcd1de1fb2e1598e->leave($__internal_7b0846f98801177105e639f7a3677742f92eac093ee4c458bcd1de1fb2e1598e_prof);

        
        $__internal_0e9939304584b3add72b7729a92cd0b421baacff7fd4994fc0b9029af3bcb002->leave($__internal_0e9939304584b3add72b7729a92cd0b421baacff7fd4994fc0b9029af3bcb002_prof);

    }

    public function getTemplateName()
    {
        return "AppCourseBundle:Course:course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 64,  108 => 58,  104 => 57,  99 => 56,  90 => 55,  76 => 49,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}{{ 'layout.title'|trans }}{% endblock %}

{% block body %}
\t<div ng-app=\"courseApp\">
\t\t<aside ng-controller=\"courseCtrl\">
\t\t\t
\t\t</aside>
\t    <section ng-controller=\"questionCtrl\">
{# \t    \t<div class=\"top__left\">
\t\t\t<div  class=\"top__left-top\">
\t\t\t\t\t<header><h1>Tree</h1></header>

\t\t\t\t\t<div class=\"btn\">
\t\t\t\t\t\t<input name=\"jsonFile\" type=\"file\" accept=\".json\" on-read-file=\"getFile(\$fileContent)\"/>
\t\t\t    \t\t<button class=\"btn__save\" ng-click=\"save(data)\">Save Tree</button>
\t\t\t    \t\t<button class=\"btn__load\" ng-click=\"new()\">New</button>
\t\t\t    \t</div>

\t\t\t\t\t<ul>
\t\t\t\t\t    <li ng-repeat=\"data in tree\" ng-show=\"tree.error == null\" ng-include=\"'tree_item'\" style=\"cursor:default;\">
\t\t\t\t\t    \t<element ng-bind=\"data\"></element>
\t\t\t\t\t    </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div  class=\"top__left-bottom\">
\t\t\t\t\t<header><h1>Database</h1></header>

\t\t\t\t\t<ul ng-hide=\"showList\">
\t\t\t\t\t\t{% for data in list %}
\t\t\t\t\t\t\t<li> Tree id. {{data.id}} <button class=\"btn__load\" ng-click=\"load({{data.id}})\">Load</button></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li ng-repeat=\"data in list\"> Tree id. <element ng-bind=\"data.id\"></element>
\t\t\t\t\t\t\t<button class=\"btn__load\" ng-click=\"load(data.id)\">Load</button> 
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"top__right\">
\t\t\t\t<header><h1>JSON</h1></header>
\t\t\t\t\t<pre ng-bind=\"tree|json\"></pre>
\t\t\t</div> #}
\t    </section>

\t\t<div style=\"clear: both;\"></div>
\t</div>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
\t<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    {% javascripts 
    \t'../app/Resources/vendor/angular/angular.min.js'
        '@AppCourseBundle/Resources/js/controller.js'
        '@AppCourseBundle/Resources/js/directives.js'
        '@AppCourseBundle/Resources/js/services.js'
    %}
    <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
{% endblock %}", "AppCourseBundle:Course:course.html.twig", "/var/learning/src/App/CourseBundle/Resources/views/Course/course.html.twig");
    }
}
