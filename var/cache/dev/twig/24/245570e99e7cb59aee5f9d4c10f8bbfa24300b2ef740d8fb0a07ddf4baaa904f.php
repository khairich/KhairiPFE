<?php

/* AppBundle:User:users.html.twig */
class __TwigTemplate_09ac546c2779aedc8aa7b3c106f2957792534ba22a80e54ead915edca3e6fa26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "AppBundle:User:users.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:users.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/buttons-follow.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/users.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <div class=\"col-lg-12 box-default\">
            <h1>People</h1>
            <div class=\"count\">
                <span class=\"label label-primary\">
                    Total ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "getTotalItemCount", array()), "html", null, true);
        echo "
                </span>
            </div>

            <hr>

            <div class=\"box-content box-users\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "                    <div class=\"col-lg-12 user-item\">
                        <div class=\"avatar\">
                            ";
            // line 25
            if (($this->getAttribute($context["user"], "image", array()) == null)) {
                // line 26
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nick", array()), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 28
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($context["user"], "id", array())) . "_usermedia/") . $this->getAttribute($context["user"], "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nick", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 30
            echo "                        </div>

                        <div class=\"user-item-content\">
                            <p>
                                <a class=\"user_link\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($context["user"], "nick", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "surname", array()), "html", null, true);
            echo "
                                </a> - ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nick", array()), "html", null, true);
            echo "
                            </p>
                            <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "bio", array()), "html", null, true);
            echo "</p>
                        </div>

                        ";
            // line 41
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute($context["user"], "id", array()))) {
                // line 42
                echo "                            <div class=\"pull-right buttons-following\">
                                <button class=\"btn btn-sm btn-success btn-follow
                                        ";
                // line 44
                if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["user"]) == true)) {
                    // line 45
                    echo "                                            hidden
                                        ";
                }
                // line 47
                echo "                                        \" data-followed=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                    <span class=\"glyphicon glyphicon-ok-circle\" aria-hidden=\"true\"></span>
                                    Follow
                                </button>

                                <button class=\"btn btn-sm btn-default btn-unfollow
                                        ";
                // line 53
                if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["user"]) == false)) {
                    // line 54
                    echo "                                            hidden
                                        ";
                }
                // line 56
                echo "                                        \" data-followed=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                    <span class=\"glyphicon glyphicon-remove-circle\" aria-hidden=\"true\"></span>
                                    Stop following
                                </button>
                            </div>
                        ";
            }
            // line 62
            echo "
                        <div class=\"clearfix\"></div>
                        <hr>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>

            <div class=\"navigation\">
                ";
        // line 70
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
        return "AppBundle:User:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 70,  183 => 67,  173 => 62,  163 => 56,  159 => 54,  157 => 53,  147 => 47,  143 => 45,  141 => 44,  137 => 42,  135 => 41,  129 => 38,  124 => 36,  118 => 35,  114 => 34,  108 => 30,  100 => 28,  92 => 26,  90 => 25,  86 => 23,  82 => 22,  72 => 15,  65 => 10,  59 => 9,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
    <script src=\"{{ asset('assets/js/custom/buttons-follow.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom/users.js') }}\"></script>
{% endblock %}

{% block content %}
    <div class=\"container\">
        <div class=\"col-lg-12 box-default\">
            <h1>People</h1>
            <div class=\"count\">
                <span class=\"label label-primary\">
                    Total {{ users.getTotalItemCount }}
                </span>
            </div>

            <hr>

            <div class=\"box-content box-users\">
                {% for user in users %}
                    <div class=\"col-lg-12 user-item\">
                        <div class=\"avatar\">
                            {% if user.image == null %}
                                <img src=\"{{ asset('assets/images/default.png') }}\" alt=\"{{ user.nick }}\">
                            {% else %}
                                <img src=\"{{ asset('uploads/media/'~user.id~'_usermedia/'~user.image) }}\" alt=\"{{ user.nick }}\">
                            {% endif %}
                        </div>

                        <div class=\"user-item-content\">
                            <p>
                                <a class=\"user_link\" href=\"{{ path('user_profile', {'nick': user.nick}) }}\">
                                    {{ user.name }} {{ user.surname }}
                                </a> - {{ user.nick }}
                            </p>
                            <p>{{ user.bio }}</p>
                        </div>

                        {% if app.user.id != user.id %}
                            <div class=\"pull-right buttons-following\">
                                <button class=\"btn btn-sm btn-success btn-follow
                                        {% if app.user|isfollow(user) == true %}
                                            hidden
                                        {% endif %}
                                        \" data-followed=\"{{ user.id }}\">
                                    <span class=\"glyphicon glyphicon-ok-circle\" aria-hidden=\"true\"></span>
                                    Follow
                                </button>

                                <button class=\"btn btn-sm btn-default btn-unfollow
                                        {% if app.user|isfollow(user) == false %}
                                            hidden
                                        {% endif %}
                                        \" data-followed=\"{{ user.id }}\">
                                    <span class=\"glyphicon glyphicon-remove-circle\" aria-hidden=\"true\"></span>
                                    Stop following
                                </button>
                            </div>
                        {% endif %}

                        <div class=\"clearfix\"></div>
                        <hr>
                    </div>
                {% endfor %}
            </div>

            <div class=\"navigation\">
                {{ knp_pagination_render(users) }}
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}", "AppBundle:User:users.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/User/users.html.twig");
    }
}
