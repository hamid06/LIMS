<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c88cf097e80a02068dee48983cb171d86473caa10eee9bb086828d29d90faf4a extends Twig_Template
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
        $__internal_922bcc7690a74c720d3c82a977f4f6e7fb7a9003c0d43e3df254944e5a42a1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922bcc7690a74c720d3c82a977f4f6e7fb7a9003c0d43e3df254944e5a42a1b1->enter($__internal_922bcc7690a74c720d3c82a977f4f6e7fb7a9003c0d43e3df254944e5a42a1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_922bcc7690a74c720d3c82a977f4f6e7fb7a9003c0d43e3df254944e5a42a1b1->leave($__internal_922bcc7690a74c720d3c82a977f4f6e7fb7a9003c0d43e3df254944e5a42a1b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
