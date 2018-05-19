<?php

/* AppBundle:Notification:notifications.html.twig */
class __TwigTemplate_1e5c092e54f37a7492e1e2c6bb5656c3ed3c8e00f7339fb34707658c8005c53f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "AppBundle:Notification:notifications.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Notification:notifications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/notifications_page.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container\">

        <div id=\"notifications\" class=\"col-lg-12 box-default pull-left\">
            <h1 class=\"box-header\">Notifications</h1>
            <div class=\"box-content\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 15
            echo "                    <div class=\"col-lg-12 notification-item\">

                        <div class=\"alert alert-default\">
                            <span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></span>

                            ";
            // line 20
            $context["user_of_action"] = $this->env->getExtension('AppBundle\Twig\GetUserExtension')->getUserFilter($this->getAttribute($context["notification"], "typeId", array()));
            // line 21
            echo "
                            ";
            // line 22
            if (($this->getAttribute($context["notification"], "type", array()) == "follow")) {
                // line 23
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : $this->getContext($context, "user_of_action")), "nick", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : $this->getContext($context, "user_of_action")), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : $this->getContext($context, "user_of_action")), "surname", array()), "html", null, true);
                echo "
                                </a>
                                  is following you
                            ";
            }
            // line 28
            echo "
                            ";
            // line 29
            if (($this->getAttribute($context["notification"], "type", array()) == "like")) {
                // line 30
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : $this->getContext($context, "user_of_action")), "nick", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : $this->getContext($context, "user_of_action")), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : $this->getContext($context, "user_of_action")), "surname", array()), "html", null, true);
                echo "
                                </a>
                                  liked one of your posts
                            ";
            }
            // line 35
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
            <div class=\"navigation\">
                ";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        echo "
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Notification:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  128 => 39,  119 => 35,  110 => 31,  105 => 30,  103 => 29,  100 => 28,  91 => 24,  86 => 23,  84 => 22,  81 => 21,  79 => 20,  72 => 15,  68 => 14,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/custom/notifications_page.js') }}\"></script>
{% endblock %}

{% block content %}
    <div class=\"container\">

        <div id=\"notifications\" class=\"col-lg-12 box-default pull-left\">
            <h1 class=\"box-header\">Notifications</h1>
            <div class=\"box-content\">
                {% for notification in notifications %}
                    <div class=\"col-lg-12 notification-item\">

                        <div class=\"alert alert-default\">
                            <span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></span>

                            {% set user_of_action = notification.typeId|get_user %}

                            {% if notification.type == \"follow\" %}
                                <a href=\"{{ path('user_profile', {'nick': user_of_action.nick}) }}\">
                                    {{ user_of_action.name }} {{ user_of_action.surname }}
                                </a>
                                  is following you
                            {% endif %}

                            {% if notification.type == \"like\" %}
                                <a href=\"{{ path('user_profile', {'nick': user_of_action.nick}) }}\">
                                    {{ user_of_action.name }} {{ user_of_action.surname }}
                                </a>
                                  liked one of your posts
                            {% endif %}

                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"navigation\">
                {{ knp_pagination_render(notifications) }}
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}", "AppBundle:Notification:notifications.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/Notification/notifications.html.twig");
    }
}
