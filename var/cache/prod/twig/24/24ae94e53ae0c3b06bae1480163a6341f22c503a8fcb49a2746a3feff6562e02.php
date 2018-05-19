<?php

/* AppBundle:User:profile.html.twig */
class __TwigTemplate_afce5ccd8ebce4607796af8ea923173b5a8a1429a87eb1000af4469717e26de5 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"col-lg-10 box-default profile-box\">

        <div class=\"avatar\">
            ";
        // line 13
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "image", array()) == null)) {
            // line 14
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()), "html", null, true);
            echo "\">
            ";
        } else {
            // line 16
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())) . "_usermedia/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "image", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()), "html", null, true);
            echo "\">
            ";
        }
        // line 18
        echo "        </div>

        <div class=\"name-surname\">

            ";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
            // line 23
            echo "                <div class=\"buttons-following\">

                    ";
            // line 26
            echo "                    ";
            if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter((isset($context["user"]) ? $context["user"] : null), $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) == true)) {
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
            if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), (isset($context["user"]) ? $context["user"] : null)) == true)) {
                // line 38
                echo "                                hidden
                            ";
            }
            // line 40
            echo "                            \" data-followed=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-ok-circle\" aria-hidden=\"true\"></span>
                        Follow
                    </button>

                    <button class=\"btn btn-sm btn-default btn-unfollow
                            ";
            // line 46
            if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), (isset($context["user"]) ? $context["user"] : null)) == false)) {
                // line 47
                echo "                                hidden
                            ";
            }
            // line 49
            echo "                            \" data-followed=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
        echo "</h2>
            <div class=\"clearfix\"></div>
            <span class=\"nickname\">
                ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()), "html", null, true);
        echo "
            </span>
        </div>

        <div class=\"bio\">
            ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "bio", array()), "html", null, true);
        echo "
        </div>

        <div class=\"clearfix\"></div>

        <div id=\"user_stats\">

            ";
        // line 71
        $context["user_all_stats"] = $this->env->getExtension('AppBundle\Twig\UserStatsExtension')->userStatsFilter((isset($context["user"]) ? $context["user"] : null));
        // line 72
        echo "
            <div class=\"center-block\">

                <div class=\"follow-data\">
                    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("follows_list_users", array("nick" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()), "type" => "following")), "html", null, true);
        echo "\">
                        <span class=\"label-stat\">
                            Following
                        </span>
                        <span class=\"number-stat\">
                            ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : null), "following", array()), "html", null, true);
        echo "
                        </span>
                    </a>
                </div>

                <div class=\"follow-data\">
                    <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("follows_list_users", array("nick" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()), "type" => "followers")), "html", null, true);
        echo "\">
                        <span class=\"label-stat\">
                            Followers
                        </span>
                        <span class=\"number-stat\">
                            ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : null), "followers", array()), "html", null, true);
        echo "
                        </span>
                    </a>
                </div>

                <div class=\"follow-data\">
                    <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()))), "html", null, true);
        echo "\">
                        <span class=\"label-stat\">
                            Publications
                        </span>
                        <span class=\"number-stat\">
                            ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : null), "publications", array()), "html", null, true);
        echo "
                        </span>
                    </a>
                </div>

                <div class=\"follow-data\">
                    <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_likes", array("nick" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()))), "html", null, true);
        echo "\">
                        <span class=\"label-stat\">
                            Likes
                        </span>
                        <span class=\"number-stat\">
                            ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : null), "likes", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : null));
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
            if (($this->getAttribute($this->getAttribute($context["publication"], "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
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
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), $context["publication"]) == true)) {
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
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), $context["publication"]) == false)) {
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["publications"]) ? $context["publications"] : null));
        echo "
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
";
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
        return array (  407 => 201,  403 => 199,  392 => 194,  383 => 187,  379 => 185,  377 => 184,  372 => 182,  364 => 176,  360 => 174,  358 => 173,  353 => 171,  348 => 168,  340 => 165,  334 => 161,  332 => 160,  329 => 159,  321 => 155,  319 => 154,  316 => 153,  310 => 151,  308 => 150,  303 => 148,  296 => 144,  290 => 141,  282 => 138,  278 => 137,  272 => 133,  264 => 131,  256 => 129,  254 => 128,  250 => 126,  246 => 125,  232 => 114,  224 => 109,  215 => 103,  207 => 98,  198 => 92,  190 => 87,  181 => 81,  173 => 76,  167 => 72,  165 => 71,  155 => 64,  147 => 59,  139 => 56,  136 => 55,  126 => 49,  122 => 47,  120 => 46,  110 => 40,  106 => 38,  104 => 37,  100 => 35,  94 => 31,  88 => 27,  85 => 26,  81 => 23,  79 => 22,  73 => 18,  65 => 16,  57 => 14,  55 => 13,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:User:profile.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/User/profile.html.twig");
    }
}
