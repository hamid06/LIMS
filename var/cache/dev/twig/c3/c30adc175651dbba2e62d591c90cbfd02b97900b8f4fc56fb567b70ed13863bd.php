<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ea9202d688dec056c27c2d52fe0eb9aa0317049173def2449b0568500de0be15 extends Twig_Template
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
        $__internal_d3327c8d8bc2af967555642f1b808056f524ce1b8b3cb327dd6fcfe2191b5b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3327c8d8bc2af967555642f1b808056f524ce1b8b3cb327dd6fcfe2191b5b22->enter($__internal_d3327c8d8bc2af967555642f1b808056f524ce1b8b3cb327dd6fcfe2191b5b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d3327c8d8bc2af967555642f1b808056f524ce1b8b3cb327dd6fcfe2191b5b22->leave($__internal_d3327c8d8bc2af967555642f1b808056f524ce1b8b3cb327dd6fcfe2191b5b22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
