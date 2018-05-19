<?php

/* AppBundle:PrivateMessage:index_private_message.html.twig */
class __TwigTemplate_88a5619e4eac9a0c968d50329a9418feb052ec5ca429d48d294dd779b5f0631f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "AppBundle:PrivateMessage:index_private_message.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:PrivateMessage:index_private_message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"col-lg-12 box-default\">
            <h1 class=\"box-header\">Private messaging</h1>
            <div id=\"new-private-message\" class=\"col-lg-6\">
                <h4>Send new message</h4>
                ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("enctype" => "multipart/form-data"));
        echo "

                ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <br>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("private_message_sended");
        echo "\" class=\"btn btn-warning\">Sent messages</a>
            </div>

            <div class=\"col-lg-6\">
                <h4>Received messages</h4>
                <hr />

                <div class=\"box-content\">
                    ";
        // line 21
        $this->loadTemplate("AppBundle:PrivateMessage:_private_messages_list.html.twig", "AppBundle:PrivateMessage:index_private_message.html.twig", 21)->display($context);
        // line 22
        echo "                </div>

            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:PrivateMessage:index_private_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  68 => 21,  57 => 13,  52 => 11,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layouts:layout.html.twig\" %}

{% block content %}
    <div class=\"container\">
        <div class=\"col-lg-12 box-default\">
            <h1 class=\"box-header\">Private messaging</h1>
            <div id=\"new-private-message\" class=\"col-lg-6\">
                <h4>Send new message</h4>
                {{ form_start(form, {'enctype':'multipart/form-data'}) }}

                {{ form_end(form) }}
                <br>
                <a href=\"{{ path('private_message_sended') }}\" class=\"btn btn-warning\">Sent messages</a>
            </div>

            <div class=\"col-lg-6\">
                <h4>Received messages</h4>
                <hr />

                <div class=\"box-content\">
                    {% include 'AppBundle:PrivateMessage:_private_messages_list.html.twig' %}
                </div>

            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}", "AppBundle:PrivateMessage:index_private_message.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/PrivateMessage/index_private_message.html.twig");
    }
}
