<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_250f80e8c997af4fc592dff3d49f61d61182f7bc51d5c0a6f4b17e6a890ef71c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72193ff51f63adeb2b5e63cfb1b69250613e07ef267ce5663caa7633031c55ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72193ff51f63adeb2b5e63cfb1b69250613e07ef267ce5663caa7633031c55ea->enter($__internal_72193ff51f63adeb2b5e63cfb1b69250613e07ef267ce5663caa7633031c55ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72193ff51f63adeb2b5e63cfb1b69250613e07ef267ce5663caa7633031c55ea->leave($__internal_72193ff51f63adeb2b5e63cfb1b69250613e07ef267ce5663caa7633031c55ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f39a15dc29d5b852c58e9f5d451de1898d8500902ce910fe5c808cfec840d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f39a15dc29d5b852c58e9f5d451de1898d8500902ce910fe5c808cfec840d99->enter($__internal_4f39a15dc29d5b852c58e9f5d451de1898d8500902ce910fe5c808cfec840d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_4f39a15dc29d5b852c58e9f5d451de1898d8500902ce910fe5c808cfec840d99->leave($__internal_4f39a15dc29d5b852c58e9f5d451de1898d8500902ce910fe5c808cfec840d99_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}