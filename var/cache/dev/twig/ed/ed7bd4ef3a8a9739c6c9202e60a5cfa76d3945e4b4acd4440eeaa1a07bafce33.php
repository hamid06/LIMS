<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ca54c0094e308ac9cbfdc1848b086d68809375f736260225feb2085097ce4477 extends Twig_Template
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
        $__internal_661e4a136bb0b5241db55ff4b122cdcd9839bc8d0afedd5f568ceffbca4d2448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661e4a136bb0b5241db55ff4b122cdcd9839bc8d0afedd5f568ceffbca4d2448->enter($__internal_661e4a136bb0b5241db55ff4b122cdcd9839bc8d0afedd5f568ceffbca4d2448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_661e4a136bb0b5241db55ff4b122cdcd9839bc8d0afedd5f568ceffbca4d2448->leave($__internal_661e4a136bb0b5241db55ff4b122cdcd9839bc8d0afedd5f568ceffbca4d2448_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
