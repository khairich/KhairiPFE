<?php

/* AppBundle:PrivateMessage:sended.html.twig */
class __TwigTemplate_c2f9fc129bedfc7a0c9c08a38e02e3496aefeb2695a811a3d58509ce1a3a16d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "AppBundle:PrivateMessage:sended.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:PrivateMessage:sended.html.twig"));

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
        <div id=\"new-private-message\" class=\"col-lg-12 box-default\">
            <h1 class=\"box-header\">Inbox</h1>

            <div class=\"col-lg-6\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("private_message_index");
        echo "\" class=\"btn btn-warning\">
                    Received messages
                </a>
            </div>

            <div class=\"col-lg-6\">
                <h4>Sent messages</h4>
                <hr />

                <div class=\"box-content\">
                    ";
        // line 19
        $this->loadTemplate("AppBundle:PrivateMessage:_private_messages_list.html.twig", "AppBundle:PrivateMessage:sended.html.twig", 19)->display($context);
        // line 20
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
        return "AppBundle:PrivateMessage:sended.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  60 => 19,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
        <div id=\"new-private-message\" class=\"col-lg-12 box-default\">
            <h1 class=\"box-header\">Inbox</h1>

            <div class=\"col-lg-6\">
                <a href=\"{{ path('private_message_index') }}\" class=\"btn btn-warning\">
                    Received messages
                </a>
            </div>

            <div class=\"col-lg-6\">
                <h4>Sent messages</h4>
                <hr />

                <div class=\"box-content\">
                    {% include 'AppBundle:PrivateMessage:_private_messages_list.html.twig' %}
                </div>

            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}", "AppBundle:PrivateMessage:sended.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/PrivateMessage/sended.html.twig");
    }
}
