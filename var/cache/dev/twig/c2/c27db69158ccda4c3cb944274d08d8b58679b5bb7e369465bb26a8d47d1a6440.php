<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c7c3271ac81b132d8a9088fca2ddb15b315b92d57076c7e777864cc93d112ec1 extends Twig_Template
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
        $__internal_f8924e7083af7ca48b96ef3cf2d5bcc89633b872ea7c06df449a93b7f351bda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8924e7083af7ca48b96ef3cf2d5bcc89633b872ea7c06df449a93b7f351bda3->enter($__internal_f8924e7083af7ca48b96ef3cf2d5bcc89633b872ea7c06df449a93b7f351bda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f8924e7083af7ca48b96ef3cf2d5bcc89633b872ea7c06df449a93b7f351bda3->leave($__internal_f8924e7083af7ca48b96ef3cf2d5bcc89633b872ea7c06df449a93b7f351bda3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
