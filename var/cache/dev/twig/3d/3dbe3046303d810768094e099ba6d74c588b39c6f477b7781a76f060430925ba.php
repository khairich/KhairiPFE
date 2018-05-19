<?php

/* AppBundle:Publication:home.html.twig */
class __TwigTemplate_5f9d16eb13571385ddb096e17beb1055e20d8d0e7f33f7136448ef5ae1ca3088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "AppBundle:Publication:home.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Publication:home.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/home.js"), "html", null, true);
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

        <div id=\"timeline\" class=\"col-lg-7 box-default pull-left\">
            <h1 class=\"box-header\">Timeline</h1>
            <div class=\"box-content\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : $this->getContext($context, "publications")));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 15
            echo "                    <div class=\"col-lg-12 publication-item\">
                        <div class=\"avatar\">
                            ";
            // line 17
            if (($this->getAttribute($this->getAttribute($context["publication"], "user", array()), "image", array()) == null)) {
                // line 18
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "nick", array()), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 20
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array())) . "_usermedia/") . $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "nick", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 22
            echo "                        </div>

                        <div class=\"publication-item-content\">
                            <p>
                                <a class=\"pub-name-link\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "nick", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "surname", array()), "html", null, true);
            echo "
                                </a>
                                -
                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "nick", array()), "html", null, true);
            echo "
                                -
                                <span class=\"pub-date\">
                                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute($context["publication"], "createdAt", array())), "html", null, true);
            echo "
                                </span>
                            </p>

                            <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "texto", array()), "html", null, true);
            echo "</p>

                            ";
            // line 39
            if (($this->getAttribute($this->getAttribute($context["publication"], "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 40
                echo "                                <span data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "id", array()), "html", null, true);
                echo "\" class=\"btn-delete-pub glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                            ";
            }
            // line 42
            echo "
                            ";
            // line 43
            if (($this->getAttribute($context["publication"], "document", array(), "any", true, true) && ($this->getAttribute($context["publication"], "document", array()) != null))) {
                // line 44
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array())) . "_usermedia/publications/documents/") . $this->getAttribute($context["publication"], "document", array()))), "html", null, true);
                echo "\"
                                   class=\"btn-doc glyphicon glyphicon-save\" aria-hidden=\"true\" target=\"_blank\">
                                </a>
                            ";
            }
            // line 48
            echo "
                            ";
            // line 49
            if (($this->getAttribute($context["publication"], "image", array(), "any", true, true) && ($this->getAttribute($context["publication"], "image", array()) != null))) {
                // line 50
                echo "                                <span class=\"btn-img glyphicon glyphicon-picture\" aria-hidden=\"true\"></span>
                                <div class=\"clearfix\"></div>

                                <div class=\"pub-image\">
                                    <img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array())) . "_usermedia/publications/images/") . $this->getAttribute($context["publication"], "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "image", array()), "html", null, true);
                echo "\">
                                </div>
                            ";
            }
            // line 57
            echo "
                        </div>
                        <div class=\"pull-right like\">
                            <span data-id=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "id", array()), "html", null, true);
            echo "\"
                                  class=\"
                                  ";
            // line 62
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["publication"]) == true)) {
                // line 63
                echo "                                      hidden
                                  ";
            }
            // line 65
            echo "                                  btn-like glyphicon glyphicon-heart-empty\"
                                  aria-hidden=\"true\"
                                  data-toggle=\"tooltip\"
                                  data-placement=\"bottom\"
                                  title=\"Like\">
                            </span>
                            <span data-id=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "id", array()), "html", null, true);
            echo "\"
                                  class=\"
                                  ";
            // line 73
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["publication"]) == false)) {
                // line 74
                echo "                                      hidden
                                  ";
            }
            // line 76
            echo "                                  btn-dislike active glyphicon glyphicon-heart\"
                                  aria-hidden=\"true\"
                                  data-toggle=\"tooltip\"
                                  data-placement=\"bottom\"
                                  title=\"Dislike\">
                            </span>
                        </div>
                        <small class=\"pull-left\">";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LikeExtension')->numlikesFilter($context["publication"]), "html", null, true);
            echo " Likes</small>
                        <div class=\"clearfix\"></div>
                        <hr>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
                <div class=\"navigation\">
                    ";
        // line 90
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["publications"]) ? $context["publications"] : $this->getContext($context, "publications")));
        echo "
                </div>
            </div>
        </div>

        <div id=\"user-card\" class=\"col-lg-4 box-default pull-left\">
            <div class=\"avatar\">
                ";
        // line 97
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()) == null)) {
            // line 98
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()), "html", null, true);
            echo "\">
                ";
        } else {
            // line 100
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) . "_usermedia/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()), "html", null, true);
            echo "\">
                ";
        }
        // line 102
        echo "            </div>

            <div class=\"name-surname\">
                <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()))), "html", null, true);
        echo "\">
                    ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
        echo "
                </a>
                <div class=\"clearfix\"></div>
                <span class=\"nickname\">
                    ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()), "html", null, true);
        echo "
                </span>
            </div>

            <div class=\"clearfix\"></div>

            ";
        // line 116
        $context["user_all_stats"] = $this->env->getExtension('AppBundle\Twig\UserStatsExtension')->userStatsFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        // line 117
        echo "
            <div class=\"follow-data\">
                <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("follows_list_users", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()), "type" => "following")), "html", null, true);
        echo "\">
                    <span class=\"label-stat\">
                        Following
                    </span>
                    <span class=\"number-stat\">
                        ";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : $this->getContext($context, "user_all_stats")), "following", array()), "html", null, true);
        echo "
                    </span>
                </a>
            </div>

            <div class=\"follow-data\">
                <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("follows_list_users", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()), "type" => "followers")), "html", null, true);
        echo "\">
                    <span class=\"label-stat\">
                        Followers
                    </span>
                    <span class=\"number-stat\">
                        ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : $this->getContext($context, "user_all_stats")), "followers", array()), "html", null, true);
        echo "
                    </span>
                </a>
            </div>

            <div class=\"follow-data\">
                <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()))), "html", null, true);
        echo "\">
                    <span class=\"label-stat\">
                        Publications
                    </span>
                    <span class=\"number-stat\">
                        ";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : $this->getContext($context, "user_all_stats")), "publications", array()), "html", null, true);
        echo "
                    </span>
                </a>
            </div>

            <div class=\"follow-data\">
                <a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_likes", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()))), "html", null, true);
        echo "\">
                    <span class=\"label-stat\">
                        like
                    </span>
                    <span class=\"number-stat\">
                        ";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : $this->getContext($context, "user_all_stats")), "likes", array()), "html", null, true);
        echo "
                    </span>
                </a>
            </div>

        </div>

        <div id=\"new-publication\" class=\"col-lg-4 box-default pull-left\">
            <h1 class=\"box-header\">Create publication</h1>

            ";
        // line 167
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
            ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 169
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Publication:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 169,  366 => 168,  362 => 167,  349 => 157,  341 => 152,  332 => 146,  324 => 141,  315 => 135,  307 => 130,  298 => 124,  290 => 119,  286 => 117,  284 => 116,  275 => 110,  266 => 106,  262 => 105,  257 => 102,  249 => 100,  241 => 98,  239 => 97,  229 => 90,  225 => 88,  214 => 83,  205 => 76,  201 => 74,  199 => 73,  194 => 71,  186 => 65,  182 => 63,  180 => 62,  175 => 60,  170 => 57,  162 => 54,  156 => 50,  154 => 49,  151 => 48,  143 => 44,  141 => 43,  138 => 42,  132 => 40,  130 => 39,  125 => 37,  118 => 33,  112 => 30,  104 => 27,  100 => 26,  94 => 22,  86 => 20,  78 => 18,  76 => 17,  72 => 15,  68 => 14,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
    <script src=\"{{ asset('assets/js/custom/home.js') }}\"></script>
{% endblock %}

{% block content %}
    <div class=\"container\">

        <div id=\"timeline\" class=\"col-lg-7 box-default pull-left\">
            <h1 class=\"box-header\">Timeline</h1>
            <div class=\"box-content\">
                {% for publication in publications %}
                    <div class=\"col-lg-12 publication-item\">
                        <div class=\"avatar\">
                            {% if publication.user.image == null %}
                                <img src=\"{{ asset('assets/images/default.png') }}\" alt=\"{{ publication.user.nick }}\">
                            {% else %}
                                <img src=\"{{ asset('uploads/media/'~publication.user.id~'_usermedia/'~publication.user.image) }}\" alt=\"{{ publication.user.nick }}\">
                            {% endif %}
                        </div>

                        <div class=\"publication-item-content\">
                            <p>
                                <a class=\"pub-name-link\" href=\"{{ path('user_profile', {'nick': publication.user.nick}) }}\">
                                    {{ publication.user.name }} {{ publication.user.surname }}
                                </a>
                                -
                                {{ publication.user.nick }}
                                -
                                <span class=\"pub-date\">
                                    {{ publication.createdAt|long_time }}
                                </span>
                            </p>

                            <p>{{ publication.texto }}</p>

                            {% if (publication.user.id is defined) and (publication.user.id == app.user.id) %}
                                <span data-id=\"{{ publication.id }}\" class=\"btn-delete-pub glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                            {% endif %}

                            {% if(publication.document is defined) and (publication.document != null) %}
                                <a href=\"{{ asset('uploads/media/'~publication.user.id~'_usermedia/publications/documents/'~publication.document) }}\"
                                   class=\"btn-doc glyphicon glyphicon-save\" aria-hidden=\"true\" target=\"_blank\">
                                </a>
                            {% endif %}

                            {% if(publication.image is defined) and (publication.image != null) %}
                                <span class=\"btn-img glyphicon glyphicon-picture\" aria-hidden=\"true\"></span>
                                <div class=\"clearfix\"></div>

                                <div class=\"pub-image\">
                                    <img src=\"{{ asset('uploads/media/'~publication.user.id~'_usermedia/publications/images/'~publication.image) }}\" alt=\"{{ publication.image }}\">
                                </div>
                            {% endif %}

                        </div>
                        <div class=\"pull-right like\">
                            <span data-id=\"{{ publication.id }}\"
                                  class=\"
                                  {% if app.user|islike(publication) == true %}
                                      hidden
                                  {% endif %}
                                  btn-like glyphicon glyphicon-heart-empty\"
                                  aria-hidden=\"true\"
                                  data-toggle=\"tooltip\"
                                  data-placement=\"bottom\"
                                  title=\"Like\">
                            </span>
                            <span data-id=\"{{ publication.id }}\"
                                  class=\"
                                  {% if app.user|islike(publication) == false %}
                                      hidden
                                  {% endif %}
                                  btn-dislike active glyphicon glyphicon-heart\"
                                  aria-hidden=\"true\"
                                  data-toggle=\"tooltip\"
                                  data-placement=\"bottom\"
                                  title=\"Dislike\">
                            </span>
                        </div>
                        <small class=\"pull-left\">{{ publication|numlikes }} Likes</small>
                        <div class=\"clearfix\"></div>
                        <hr>
                    </div>
                {% endfor %}

                <div class=\"navigation\">
                    {{ knp_pagination_render(publications) }}
                </div>
            </div>
        </div>

        <div id=\"user-card\" class=\"col-lg-4 box-default pull-left\">
            <div class=\"avatar\">
                {% if app.user.image == null %}
                    <img src=\"{{ asset('assets/images/default.png') }}\" alt=\"{{ app.user.nick }}\">
                {% else %}
                    <img src=\"{{ asset('uploads/media/'~app.user.id~'_usermedia/'~app.user.image) }}\" alt=\"{{ app.user.nick }}\">
                {% endif %}
            </div>

            <div class=\"name-surname\">
                <a href=\"{{ path('user_profile', {'nick': app.user.nick}) }}\">
                    {{ app.user.name }} {{ app.user.surname }}
                </a>
                <div class=\"clearfix\"></div>
                <span class=\"nickname\">
                    {{ app.user.nick }}
                </span>
            </div>

            <div class=\"clearfix\"></div>

            {% set user_all_stats = app.user|user_stats %}

            <div class=\"follow-data\">
                <a href=\"{{ path('follows_list_users', {'nick': app.user.nick, 'type': 'following'}) }}\">
                    <span class=\"label-stat\">
                        Following
                    </span>
                    <span class=\"number-stat\">
                        {{ user_all_stats.following }}
                    </span>
                </a>
            </div>

            <div class=\"follow-data\">
                <a href=\"{{ path('follows_list_users', {'nick': app.user.nick, 'type': 'followers'}) }}\">
                    <span class=\"label-stat\">
                        Followers
                    </span>
                    <span class=\"number-stat\">
                        {{ user_all_stats.followers }}
                    </span>
                </a>
            </div>

            <div class=\"follow-data\">
                <a href=\"{{ path('user_profile', {'nick': app.user.nick}) }}\">
                    <span class=\"label-stat\">
                        Publications
                    </span>
                    <span class=\"number-stat\">
                        {{ user_all_stats.publications }}
                    </span>
                </a>
            </div>

            <div class=\"follow-data\">
                <a href=\"{{ path('user_likes', {'nick': app.user.nick}) }}\">
                    <span class=\"label-stat\">
                        like
                    </span>
                    <span class=\"number-stat\">
                        {{ user_all_stats.likes }}
                    </span>
                </a>
            </div>

        </div>

        <div id=\"new-publication\" class=\"col-lg-4 box-default pull-left\">
            <h1 class=\"box-header\">Create publication</h1>

            {{ form_start(form, {'action':'', 'method':'POST'}) }}
            {{ form_errors(form) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "AppBundle:Publication:home.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/Publication/home.html.twig");
    }
}
