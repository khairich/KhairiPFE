<?php

/* @App/Publication/home.html.twig */
class __TwigTemplate_4613ecd8b3b705b5f416151bc85cddebaad9d0a6e32513f7f35275fb4bf53c51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "@App/Publication/home.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/home.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"container\">

        <div id=\"timeline\" class=\"col-lg-7 box-default pull-left\">
            <h1 class=\"box-header\">Timeline</h1>
            <div class=\"box-content\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : null));
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
            if (($this->getAttribute($this->getAttribute($context["publication"], "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["publication"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
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
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), $context["publication"]) == true)) {
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
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), $context["publication"]) == false)) {
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["publications"]) ? $context["publications"] : null));
        echo "
                </div>
            </div>
        </div>

        <div id=\"user-card\" class=\"col-lg-4 box-default pull-left\">
            <div class=\"avatar\">
                ";
        // line 97
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()) == null)) {
            // line 98
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()), "html", null, true);
            echo "\">
                ";
        } else {
            // line 100
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) . "_usermedia/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()), "html", null, true);
            echo "\">
                ";
        }
        // line 102
        echo "            </div>

            <div class=\"name-surname\">
                <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()))), "html", null, true);
        echo "\">
                    ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "surname", array()), "html", null, true);
        echo "
                </a>
                <div class=\"clearfix\"></div>
                <span class=\"nickname\">
                    ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()), "html", null, true);
        echo "
                </span>
            </div>

            <div class=\"clearfix\"></div>

            ";
        // line 116
        $context["user_all_stats"] = $this->env->getExtension('AppBundle\Twig\UserStatsExtension')->userStatsFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()));
        // line 117
        echo "
            <div class=\"follow-data\">
                <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("follows_list_users", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()), "type" => "following")), "html", null, true);
        echo "\">
                    <span class=\"label-stat\">
                        Following
                    </span>
                    <span class=\"number-stat\">
                        ";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : null), "following", array()), "html", null, true);
        echo "
                    </span>
                </a>
            </div>

            <div class=\"follow-data\">
                <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("follows_list_users", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()), "type" => "followers")), "html", null, true);
        echo "\">
                    <span class=\"label-stat\">
                        Followers
                    </span>
                    <span class=\"number-stat\">
                        ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : null), "followers", array()), "html", null, true);
        echo "
                    </span>
                </a>
            </div>

            <div class=\"follow-data\">
                <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()))), "html", null, true);
        echo "\">
                    <span class=\"label-stat\">
                        Publications
                    </span>
                    <span class=\"number-stat\">
                        ";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : null), "publications", array()), "html", null, true);
        echo "
                    </span>
                </a>
            </div>

            <div class=\"follow-data\">
                <a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_likes", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()))), "html", null, true);
        echo "\">
                    <span class=\"label-stat\">
                        like
                    </span>
                    <span class=\"number-stat\">
                        ";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_all_stats"]) ? $context["user_all_stats"] : null), "likes", array()), "html", null, true);
        echo "
                    </span>
                </a>
            </div>

        </div>

        <div id=\"new-publication\" class=\"col-lg-4 box-default pull-left\">
            <h1 class=\"box-header\">Create publication</h1>

            ";
        // line 167
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => "", "method" => "POST"));
        echo "
            ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            ";
        // line 169
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@App/Publication/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 169,  351 => 168,  347 => 167,  334 => 157,  326 => 152,  317 => 146,  309 => 141,  300 => 135,  292 => 130,  283 => 124,  275 => 119,  271 => 117,  269 => 116,  260 => 110,  251 => 106,  247 => 105,  242 => 102,  234 => 100,  226 => 98,  224 => 97,  214 => 90,  210 => 88,  199 => 83,  190 => 76,  186 => 74,  184 => 73,  179 => 71,  171 => 65,  167 => 63,  165 => 62,  160 => 60,  155 => 57,  147 => 54,  141 => 50,  139 => 49,  136 => 48,  128 => 44,  126 => 43,  123 => 42,  117 => 40,  115 => 39,  110 => 37,  103 => 33,  97 => 30,  89 => 27,  85 => 26,  79 => 22,  71 => 20,  63 => 18,  61 => 17,  57 => 15,  53 => 14,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Publication/home.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle\\Resources\\views\\Publication\\home.html.twig");
    }
}
