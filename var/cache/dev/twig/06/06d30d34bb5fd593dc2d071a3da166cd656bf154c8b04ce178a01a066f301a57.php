<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_87973131c15df77b5e247f733ad0b55fcaf197343cfd0589dc87ffa92e2174a8 extends Twig_Template
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
        $__internal_4d0269dfc00e20b6db8c1176cd49a795d4f0ac10b6e1b674ed3b26821921f996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0269dfc00e20b6db8c1176cd49a795d4f0ac10b6e1b674ed3b26821921f996->enter($__internal_4d0269dfc00e20b6db8c1176cd49a795d4f0ac10b6e1b674ed3b26821921f996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4d0269dfc00e20b6db8c1176cd49a795d4f0ac10b6e1b674ed3b26821921f996->leave($__internal_4d0269dfc00e20b6db8c1176cd49a795d4f0ac10b6e1b674ed3b26821921f996_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}