<?php

/* AppBundle:User:profile.html.twig */
class __TwigTemplate_6a3b862e0ce990c33c6d564e5952529f02fd51e99996d6348f85ad2fc3b1bb05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "AppBundle:User:profile.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:profile.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/profile.js"), "html", null, true);
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
        echo "    <div class=\"col-lg-10 box-default profile-box\">

        <div class=\"avatar\">
            ";
        // line 13
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()) == null)) {
            // line 14
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nick", array()), "html", null, true);
            echo "\">
            ";
        } else {
            // line 16
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())) . "_usermedia/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nick", array()), "html", null, true);
            echo "\">
            ";
        }
        // line 18
        echo "        </div>

        <div class=\"name-surname\">

            ";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
            // line 23
            echo "                <div class=\"buttons-following\">

                    ";
            // line 26
            echo "                    ";
            if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) == true)) {
                // line 27
                echo "                        <button class=\"btn btn-sm btn-disable disable\">
                            Follow you
                        </button>
                    ";
            } else {
                // line 31
                echo "                        <button class=\"btn btn-sm btn-disable disable\">
                            Does not follow you
                        </button>
                    ";
            }
            // line 35
            echo "
                    <button class=\"btn btn-sm btn-success btn-follow
                            ";
            // line 37
            if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) == true)) {
                // line 38
                echo "                                hidden
                            ";
            }
            // line 40
            echo "                            \" data-followed=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-ok-circle\" aria-hidden=\"true\"></span>
                        Follow
                    </button>

                    <button class=\"btn btn-sm btn-default btn-unfollow
                            ";
            // line 46
            if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) == false)) {
                // line 47
                echo "                                hidden
                            ";
            }
            // line 49
            echo "                            \" data-followed=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-remove-circle\" aria-hidden=\"true\"></span>
                        Stop following
                    </button>
                </div>
            ";
        }
        // line 55
        echo "
            <h2>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "surname", array()), "html", null, true);
        echo "</h2>
            <div class=\"clearfix\"></div>
            <span class=\"nickname\">
                ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nick", array()), "html", null, true);
        echo "
            </span>
        </div>

        <div class=\"bio\">
            ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bio", array()), "html", null, true);
        echo "
        </div>

        <div class=\"clearfix\"></div>

        <div id=\"user_stats\">

            ";
        // line 71
        $context["user_all_stats"] = $this->env->getExtension('AppBundle\Twig\UserStatsExtension')->userStatsFilter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        // line 72
        echo "
            <div class=\"center-block\">

                <div class=\"follow-data\">
                    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("follows_list_users", array("nick" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nick", array()), "type" => "following")), "html", null, true);
        echo "\">
                        <span class=\"label-stat\">
                            Following
                        </span>
                        <span class=\"number-stat\">
                            ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : $this->getContext($context, "user_all_stats")), "following", array()), "html", null, true);
        echo "
                        </span>
                    </a>
                </div>

                <div class=\"follow-data\">
                    <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("follows_list_users", array("nick" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nick", array()), "type" => "followers")), "html", null, true);
        echo "\">
                        <span class=\"label-stat\">
                            Followers
                        </span>
                        <span class=\"number-stat\">
                            ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : $this->getContext($context, "user_all_stats")), "followers", array()), "html", null, true);
        echo "
                        </span>
                    </a>
                </div>

                <div class=\"follow-data\">
                    <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nick", array()))), "html", null, true);
        echo "\">
                        <span class=\"label-stat\">
                            Publications
                        </span>
                        <span class=\"number-stat\">
                            ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : $this->getContext($context, "user_all_stats")), "publications", array()), "html", null, true);
        echo "
                        </span>
                    </a>
                </div>

                <div class=\"follow-data\">
                    <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_likes", array("nick" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nick", array()))), "html", null, true);
        echo "\">
                        <span class=\"label-stat\">
                            Likes
                        </span>
                        <span class=\"number-stat\">
                            ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : $this->getContext($context, "user_all_stats")), "likes", array()), "html", null, true);
        echo "
                        </span>
                    </a>
                </div>
                <div class=\"clearfix\"></div>

            </div>

        </div>

        <div id=\"user-publications\">
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : $this->getContext($context, "publications")));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 126
            echo "                <div class=\"col-lg-12 publication-item\">
                    <div class=\"avatar\">
                        ";
            // line 128
            if (($this->getAttribute($this->getAttribute($context["publication"], "user", array()), "image", array()) == null)) {
                // line 129
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "nick", array()), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 131
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array())) . "_usermedia/") . $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "nick", array()), "html", null, true);
                echo "\">
                        ";
            }
            // line 133
            echo "                    </div>

                    <div class=\"publication-item-content\">
                        <p>
                            <a class=\"pub-name-link\" href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "nick", array()))), "html", null, true);
            echo "\">
                                ";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "surname", array()), "html", null, true);
            echo "
                            </a>
                            -
                            ";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "nick", array()), "html", null, true);
            echo "
                            -
                            <span class=\"pub-date\">
                                ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute($context["publication"], "createdAt", array())), "html", null, true);
            echo "
                            </span>
                        </p>

                        <p>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "texto", array()), "html", null, true);
            echo "</p>

                        ";
            // line 150
            if (($this->getAttribute($this->getAttribute($context["publication"], "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 151
                echo "                            <span data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "id", array()), "html", null, true);
                echo "\" class=\"btn-delete-pub glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                        ";
            }
            // line 153
            echo "
                        ";
            // line 154
            if (($this->getAttribute($context["publication"], "document", array(), "any", true, true) && ($this->getAttribute($context["publication"], "document", array()) != null))) {
                // line 155
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array())) . "_usermedia/publications/documents/") . $this->getAttribute($context["publication"], "document", array()))), "html", null, true);
                echo "\"
                               class=\"btn-doc glyphicon glyphicon-save\" aria-hidden=\"true\" target=\"_blank\">
                            </a>
                        ";
            }
            // line 159
            echo "
                        ";
            // line 160
            if (($this->getAttribute($context["publication"], "image", array(), "any", true, true) && ($this->getAttribute($context["publication"], "image", array()) != null))) {
                // line 161
                echo "                            <span class=\"btn-img glyphicon glyphicon-picture\" aria-hidden=\"true\"></span>
                            <div class=\"clearfix\"></div>

                            <div class=\"pub-image\">
                                <img src=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array())) . "_usermedia/publications/images/") . $this->getAttribute($context["publication"], "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "image", array()), "html", null, true);
                echo "\">
                            </div>
                        ";
            }
            // line 168
            echo "
                    </div>
                    <div class=\"pull-right like\">
                        <span data-id=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "id", array()), "html", null, true);
            echo "\"
                              class=\"
                              ";
            // line 173
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["publication"]) == true)) {
                // line 174
                echo "                                  hidden
                              ";
            }
            // line 176
            echo "                              btn-like glyphicon glyphicon-heart-empty\"
                              aria-hidden=\"true\"
                              data-toggle=\"tooltip\"
                              data-placement=\"bottom\"
                              title=\"Like\">
                        </span>
                        <span data-id=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "id", array()), "html", null, true);
            echo "\"
                              class=\"
                              ";
            // line 184
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), $context["publication"]) == false)) {
                // line 185
                echo "                                  hidden
                              ";
            }
            // line 187
            echo "                              btn-dislike active glyphicon glyphicon-heart\"
                              aria-hidden=\"true\"
                              data-toggle=\"tooltip\"
                              data-placement=\"bottom\"
                              title=\"Dislike\">
                        </span>
                    </div>
                    <small class=\"pull-left\">";
            // line 194
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
        // line 199
        echo "
            <div class=\"navigation\">
                ";
        // line 201
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["publications"]) ? $context["publications"] : $this->getContext($context, "publications")));
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
        return "AppBundle:User:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 201,  418 => 199,  407 => 194,  398 => 187,  394 => 185,  392 => 184,  387 => 182,  379 => 176,  375 => 174,  373 => 173,  368 => 171,  363 => 168,  355 => 165,  349 => 161,  347 => 160,  344 => 159,  336 => 155,  334 => 154,  331 => 153,  325 => 151,  323 => 150,  318 => 148,  311 => 144,  305 => 141,  297 => 138,  293 => 137,  287 => 133,  279 => 131,  271 => 129,  269 => 128,  265 => 126,  261 => 125,  247 => 114,  239 => 109,  230 => 103,  222 => 98,  213 => 92,  205 => 87,  196 => 81,  188 => 76,  182 => 72,  180 => 71,  170 => 64,  162 => 59,  154 => 56,  151 => 55,  141 => 49,  137 => 47,  135 => 46,  125 => 40,  121 => 38,  119 => 37,  115 => 35,  109 => 31,  103 => 27,  100 => 26,  96 => 23,  94 => 22,  88 => 18,  80 => 16,  72 => 14,  70 => 13,  65 => 10,  59 => 9,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
    <script src=\"{{ asset('assets/js/custom/profile.js') }}\"></script>
{% endblock %}

{% block content %}
    <div class=\"col-lg-10 box-default profile-box\">

        <div class=\"avatar\">
            {% if user.image == null %}
                <img src=\"{{ asset('assets/images/default.png') }}\" alt=\"{{ user.nick }}\">
            {% else %}
                <img src=\"{{ asset('uploads/media/'~user.id~'_usermedia/'~user.image) }}\" alt=\"{{ user.nick }}\">
            {% endif %}
        </div>

        <div class=\"name-surname\">

            {% if app.user.id != user.id %}
                <div class=\"buttons-following\">

                    {# the user of the profile (user) follows the logged in user (app.user)?#}
                    {% if user|isfollow(app.user) == true %}
                        <button class=\"btn btn-sm btn-disable disable\">
                            Follow you
                        </button>
                    {% else %}
                        <button class=\"btn btn-sm btn-disable disable\">
                            Does not follow you
                        </button>
                    {% endif %}

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

            <h2>{{ user.name }} {{ user.surname }}</h2>
            <div class=\"clearfix\"></div>
            <span class=\"nickname\">
                {{ user.nick }}
            </span>
        </div>

        <div class=\"bio\">
            {{ user.bio }}
        </div>

        <div class=\"clearfix\"></div>

        <div id=\"user_stats\">

            {% set user_all_stats = user|user_stats %}

            <div class=\"center-block\">

                <div class=\"follow-data\">
                    <a href=\"{{ path('follows_list_users', {'nick': user.nick, 'type': 'following'}) }}\">
                        <span class=\"label-stat\">
                            Following
                        </span>
                        <span class=\"number-stat\">
                            {{ user_all_stats.following }}
                        </span>
                    </a>
                </div>

                <div class=\"follow-data\">
                    <a href=\"{{ path('follows_list_users', {'nick': user.nick, 'type': 'followers'}) }}\">
                        <span class=\"label-stat\">
                            Followers
                        </span>
                        <span class=\"number-stat\">
                            {{ user_all_stats.followers }}
                        </span>
                    </a>
                </div>

                <div class=\"follow-data\">
                    <a href=\"{{ path('user_profile', {'nick': user.nick}) }}\">
                        <span class=\"label-stat\">
                            Publications
                        </span>
                        <span class=\"number-stat\">
                            {{ user_all_stats.publications }}
                        </span>
                    </a>
                </div>

                <div class=\"follow-data\">
                    <a href=\"{{ path('user_likes', {'nick': user.nick}) }}\">
                        <span class=\"label-stat\">
                            Likes
                        </span>
                        <span class=\"number-stat\">
                            {{ user_all_stats.likes }}
                        </span>
                    </a>
                </div>
                <div class=\"clearfix\"></div>

            </div>

        </div>

        <div id=\"user-publications\">
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

            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}", "AppBundle:User:profile.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/User/profile.html.twig");
    }
}
