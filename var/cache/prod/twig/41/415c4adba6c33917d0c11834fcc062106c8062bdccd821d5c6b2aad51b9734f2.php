<?php

/* AppBundle:Follow:followslist.html.twig */
class __TwigTemplate_78f5cbb85cda9c9e534b5d502d6352474941f6cd2b2e5bb0bbcc2113961753d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "AppBundle:Follow:followslist.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/users.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"container\">
        <div class=\"col-lg-12 box-default\">
            ";
        // line 11
        if (((isset($context["type"]) ? $context["type"] : null) == "following")) {
            // line 12
            echo "                <h1 class=\"box-header\">People who are following ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile_user"]) ? $context["profile_user"] : null), "nick", array()), "html", null, true);
            echo "</h1>
            ";
        } elseif ((        // line 13
(isset($context["type"]) ? $context["type"] : null) == "followers")) {
            // line 14
            echo "                <h1 class=\"box-header\">Followers of ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile_user"]) ? $context["profile_user"] : null), "nick", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 16
        echo "            <div class=\"count\">
                <span class=\"label label-primary\">
                    Total de personas ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["followslist"]) ? $context["followslist"] : null), "getTotalItemCount", array()), "html", null, true);
        echo "
                </span>
            </div>

            <hr>

            <div class=\"box-content box-users\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["followslist"]) ? $context["followslist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["follow"]) {
            // line 26
            echo "
                    ";
            // line 27
            if (((isset($context["type"]) ? $context["type"] : null) == "following")) {
                // line 28
                echo "                        ";
                $context["user"] = $this->getAttribute($context["follow"], "followed", array());
                // line 29
                echo "                    ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "followers")) {
                // line 30
                echo "                        ";
                $context["user"] = $this->getAttribute($context["follow"], "user", array());
                // line 31
                echo "                    ";
            }
            // line 32
            echo "

                    <div class=\"col-lg-12 user-item\">
                        <div class=\"avatar\">
                            ";
            // line 36
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "image", array()) == null)) {
                // line 37
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 39
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())) . "_usermedia/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 41
            echo "                        </div>

                        <div class=\"user-item-content\">
                            <p>
                                <a class=\"user_link\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
            echo "
                                </a> - ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nick", array()), "html", null, true);
            echo "
                            </p>
                            <p>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "bio", array()), "html", null, true);
            echo "</p>
                        </div>

                        ";
            // line 52
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
                // line 53
                echo "                            <div class=\"pull-right buttons-following\">
                                <button class=\"btn btn-sm btn-success btn-follow
                                        ";
                // line 55
                if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), (isset($context["user"]) ? $context["user"] : null)) == true)) {
                    // line 56
                    echo "                                            hidden
                                        ";
                }
                // line 58
                echo "                                        \" data-followed=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
                echo "\">
                                    <span class=\"glyphicon glyphicon-ok-circle\" aria-hidden=\"true\"></span>
                                    Seguir
                                </button>

                                <button class=\"btn btn-sm btn-default btn-unfollow
                                        ";
                // line 64
                if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), (isset($context["user"]) ? $context["user"] : null)) == false)) {
                    // line 65
                    echo "                                            hidden
                                        ";
                }
                // line 67
                echo "                                        \" data-followed=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
                echo "\">
                                    <span class=\"glyphicon glyphicon-remove-circle\" aria-hidden=\"true\"></span>
                                    Stop following
                                </button>
                            </div>
                        ";
            }
            // line 73
            echo "
                        <div class=\"clearfix\"></div>
                        <hr>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </div>

            <div class=\"navigation\">
                ";
        // line 81
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["followslist"]) ? $context["followslist"] : null));
        echo "
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Follow:followslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 81,  199 => 78,  189 => 73,  179 => 67,  175 => 65,  173 => 64,  163 => 58,  159 => 56,  157 => 55,  153 => 53,  151 => 52,  145 => 49,  140 => 47,  134 => 46,  130 => 45,  124 => 41,  116 => 39,  108 => 37,  106 => 36,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  86 => 27,  83 => 26,  79 => 25,  69 => 18,  65 => 16,  59 => 14,  57 => 13,  52 => 12,  50 => 11,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Follow:followslist.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/Follow/followslist.html.twig");
    }
}
