<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d1c86431bdbf3e565f7fdff85cc5892dd6a58ec8a6b2514a06b01eef6f9b72d7 extends Twig_Template
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
        $__internal_366f561ebcd258d8e2315357bc0628fb2bc47f7230699d755c943ad14b3b9111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366f561ebcd258d8e2315357bc0628fb2bc47f7230699d755c943ad14b3b9111->enter($__internal_366f561ebcd258d8e2315357bc0628fb2bc47f7230699d755c943ad14b3b9111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_366f561ebcd258d8e2315357bc0628fb2bc47f7230699d755c943ad14b3b9111->leave($__internal_366f561ebcd258d8e2315357bc0628fb2bc47f7230699d755c943ad14b3b9111_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
