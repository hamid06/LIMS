<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a7ad1ddab07f44048b3d4864419c89c4f117bef8d11c222bdf55e2fa2b06c410 extends Twig_Template
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
        $__internal_50cf80ddf2d1b2d05d7859b6bc211bcf30e00e5b9b3804ce1bee010fd56b8d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cf80ddf2d1b2d05d7859b6bc211bcf30e00e5b9b3804ce1bee010fd56b8d7f->enter($__internal_50cf80ddf2d1b2d05d7859b6bc211bcf30e00e5b9b3804ce1bee010fd56b8d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_50cf80ddf2d1b2d05d7859b6bc211bcf30e00e5b9b3804ce1bee010fd56b8d7f->leave($__internal_50cf80ddf2d1b2d05d7859b6bc211bcf30e00e5b9b3804ce1bee010fd56b8d7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
