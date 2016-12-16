<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_133175561398d9dbabb6e9598136df17c5774e35947684547c39609ab0ed955a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db2153db6cb449b25b8797ba7ad6021c1aee56913036c3ea4d6c1787e24f9f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2153db6cb449b25b8797ba7ad6021c1aee56913036c3ea4d6c1787e24f9f15->enter($__internal_db2153db6cb449b25b8797ba7ad6021c1aee56913036c3ea4d6c1787e24f9f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db2153db6cb449b25b8797ba7ad6021c1aee56913036c3ea4d6c1787e24f9f15->leave($__internal_db2153db6cb449b25b8797ba7ad6021c1aee56913036c3ea4d6c1787e24f9f15_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbb7399cfea876a08d0f77109e97b8c950b7effc89813f6b5d4342818e39bfd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb7399cfea876a08d0f77109e97b8c950b7effc89813f6b5d4342818e39bfd1->enter($__internal_fbb7399cfea876a08d0f77109e97b8c950b7effc89813f6b5d4342818e39bfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 3
        echo "
    <style>
        body{
            background-image: url(\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/boxed-bg2.png"), "html", null, true);
        echo "\")!important;
        }

    </style>
";
        
        $__internal_fbb7399cfea876a08d0f77109e97b8c950b7effc89813f6b5d4342818e39bfd1->leave($__internal_fbb7399cfea876a08d0f77109e97b8c950b7effc89813f6b5d4342818e39bfd1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_67cc8f69ebab6cb0871113867ff69edb54de4d1b37f982e57cec5cf22342ee4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cc8f69ebab6cb0871113867ff69edb54de4d1b37f982e57cec5cf22342ee4d->enter($__internal_67cc8f69ebab6cb0871113867ff69edb54de4d1b37f982e57cec5cf22342ee4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 14
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_67cc8f69ebab6cb0871113867ff69edb54de4d1b37f982e57cec5cf22342ee4d->leave($__internal_67cc8f69ebab6cb0871113867ff69edb54de4d1b37f982e57cec5cf22342ee4d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60caad91eb700a52765ae1a6ea75b0de5a9f1888b3bad4b4442374987d37aace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60caad91eb700a52765ae1a6ea75b0de5a9f1888b3bad4b4442374987d37aace->enter($__internal_60caad91eb700a52765ae1a6ea75b0de5a9f1888b3bad4b4442374987d37aace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 15
        echo "    <div class=\"login-wrapper \">
        <!-- START Login Background Pic Wrapper-->
        <div class=\"bg-pic\">
            <!-- START Background Pic-->
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/img/demo/lims1.jpg"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsE/img/demo/lims1.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/lims1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"lazy\">
            <!-- END Background Pic-->
            <!-- START Background Caption-->
            <div class=\"bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20\">
                <div class=\"col-lg-2\">
                    <img src=\"\" style=\"height: 200px; width: 200px;margin-left: 16px;\" data-src=\"\" data-src-retina=\"\" alt=\"\" class=\"\">
                </div>
                </br>
                <h2  style=\"font-family: Fertigo ;\" class=\"semi-bold text-white\" style=\"margin-left: 37px;\">
                    YYYYY vous offre une meilleure gestion pour votre Laboratoire</h2>
            </div>
            <!-- END Background Caption-->
        </div>
        <!-- END Login Background Pic Wrapper-->
        <!-- START Login Right Container-->
        <div class=\"login-container bg-white\">
            <div class=\"p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40\">
                <img src=\"\" alt=\"logo\" data-src=\"\" data-src-retina=\"\" width=\"350\" height=\"109\">
                <p class=\"p-t-35\">Se connecter à Votre application</p>


                ";
        // line 40
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 41
            echo "                    <div style=\"color: red\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 43
        echo "

                <form id=\"form-login\" class=\"p-t-15\" role=\"form\" action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                    ";
        // line 47
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 48
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 50
        echo "
                    <!-- START Form Control-->
                    <div class=\"form-group form-group-default input-group\">
                        <label for=\"username\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Email\" required=\"required\" />
                        <span  class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                    </div>
                    <!-- END Form Control-->
                    <!-- START Form Control-->
                    <div class=\"form-group form-group-default input-group\">
                        <label for=\"password\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"mot de passe\" />
                        <span class=\"input-group-addon\"><i class=\"fa fa-unlock-alt\"></i></span>
                    </div>
                    <!-- END Form Control-->

                    <div class=\"row\">
                        <div class=\"col-md-6 no-padding\">
                            <div class=\"checkbox check-warning\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>

                    <button type=\"submit\"  id=\"_submit\" name=\"_submit\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
        echo "\" class=\"btn btn-info btn-cons m-t-10 btn-animated from-left fa fa-unlock\" >
                        <span class=\"bold\">Se Connecter</span>
                    </button>

                </form>

                <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié</a><br>
                <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Activer mon Compte</a>

            </div>
        </div>
        <!-- END Login Right Container-->
    </div>

";
        
        $__internal_60caad91eb700a52765ae1a6ea75b0de5a9f1888b3bad4b4442374987d37aace->leave($__internal_60caad91eb700a52765ae1a6ea75b0de5a9f1888b3bad4b4442374987d37aace_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 82,  185 => 81,  176 => 75,  168 => 70,  155 => 60,  146 => 54,  142 => 53,  137 => 50,  131 => 48,  129 => 47,  124 => 45,  120 => 43,  114 => 41,  112 => 40,  84 => 19,  78 => 15,  65 => 14,  59 => 12,  47 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
{% block stylesheets %}

    <style>
        body{
            background-image: url(\"{{ asset(\"assets/img/boxed-bg2.png\") }}\")!important;
        }

    </style>
{% endblock stylesheets %}

{% block body %}
{% trans_default_domain 'FOSUserBundle' %}
    {% block fos_user_content %}
    <div class=\"login-wrapper \">
        <!-- START Login Background Pic Wrapper-->
        <div class=\"bg-pic\">
            <!-- START Background Pic-->
            <img src=\"{{asset('assetsE/img/demo/lims1.jpg')}}\" data-src=\"{{asset('assetsE/img/demo/lims1.jpg')}}\" data-src-retina=\"{{asset('assets/img/demo/lims1.jpg')}}\" alt=\"\" class=\"lazy\">
            <!-- END Background Pic-->
            <!-- START Background Caption-->
            <div class=\"bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20\">
                <div class=\"col-lg-2\">
                    <img src=\"\" style=\"height: 200px; width: 200px;margin-left: 16px;\" data-src=\"\" data-src-retina=\"\" alt=\"\" class=\"\">
                </div>
                </br>
                <h2  style=\"font-family: Fertigo ;\" class=\"semi-bold text-white\" style=\"margin-left: 37px;\">
                    YYYYY vous offre une meilleure gestion pour votre Laboratoire</h2>
            </div>
            <!-- END Background Caption-->
        </div>
        <!-- END Login Background Pic Wrapper-->
        <!-- START Login Right Container-->
        <div class=\"login-container bg-white\">
            <div class=\"p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40\">
                <img src=\"\" alt=\"logo\" data-src=\"\" data-src-retina=\"\" width=\"350\" height=\"109\">
                <p class=\"p-t-35\">Se connecter à Votre application</p>


                {% if error %}
                    <div style=\"color: red\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}


                <form id=\"form-login\" class=\"p-t-15\" role=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}

                    <!-- START Form Control-->
                    <div class=\"form-group form-group-default input-group\">
                        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Email\" required=\"required\" />
                        <span  class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                    </div>
                    <!-- END Form Control-->
                    <!-- START Form Control-->
                    <div class=\"form-group form-group-default input-group\">
                        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"mot de passe\" />
                        <span class=\"input-group-addon\"><i class=\"fa fa-unlock-alt\"></i></span>
                    </div>
                    <!-- END Form Control-->

                    <div class=\"row\">
                        <div class=\"col-md-6 no-padding\">
                            <div class=\"checkbox check-warning\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                            </div>
                        </div>
                    </div>

                    <button type=\"submit\"  id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-info btn-cons m-t-10 btn-animated from-left fa fa-unlock\" >
                        <span class=\"bold\">Se Connecter</span>
                    </button>

                </form>

                <a href=\"{{ path(\"fos_user_resetting_request\") }}\">Mot de passe oublié</a><br>
                <a href=\"{{ path('fos_user_registration_register') }}\" class=\"text-center\">Activer mon Compte</a>

            </div>
        </div>
        <!-- END Login Right Container-->
    </div>

{% endblock fos_user_content %}
{% endblock body %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\LIMS\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
