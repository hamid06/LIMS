<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b67264900b3de7d68a0cdbf35369f51e655e6fa38d94bc93e9d787e8ed77db58 extends Twig_Template
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
        $__internal_b32015e466c63c457bc32e55aafa0191bd63cd8571e851c7d82a526b9dc5199a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32015e466c63c457bc32e55aafa0191bd63cd8571e851c7d82a526b9dc5199a->enter($__internal_b32015e466c63c457bc32e55aafa0191bd63cd8571e851c7d82a526b9dc5199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b32015e466c63c457bc32e55aafa0191bd63cd8571e851c7d82a526b9dc5199a->leave($__internal_b32015e466c63c457bc32e55aafa0191bd63cd8571e851c7d82a526b9dc5199a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
