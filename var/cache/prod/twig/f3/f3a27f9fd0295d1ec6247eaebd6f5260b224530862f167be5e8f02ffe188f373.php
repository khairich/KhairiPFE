<?php

/* @App/User/users.html.twig */
class __TwigTemplate_ef100e33cf0425349cc677e32d3594837f96dc0b3a86825280e155c5f40b3dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "@App/User/users.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/users.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"container\">
        <div class=\"col-lg-12 box-default\">
            <h1>People</h1>
            <div class=\"count\">
                <span class=\"label label-primary\">
                    Total ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "getTotalItemCount", array()), "html", null, true);
        echo "
                </span>
            </div>

            <hr>

            <div class=\"box-content box-users\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute($context["user"], "id", array()))) {
                // line 42
                echo "                            <div class=\"pull-right buttons-following\">
                                <button class=\"btn btn-sm btn-success btn-follow
                                        ";
                // line 44
                if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), $context["user"]) == true)) {
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
                if (($this->env->getExtension('AppBundle\Twig\FollowExtension')->isfollowFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), $context["user"]) == false)) {
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["users"]) ? $context["users"] : null));
        echo "
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@App/User/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 70,  168 => 67,  158 => 62,  148 => 56,  144 => 54,  142 => 53,  132 => 47,  128 => 45,  126 => 44,  122 => 42,  120 => 41,  114 => 38,  109 => 36,  103 => 35,  99 => 34,  93 => 30,  85 => 28,  77 => 26,  75 => 25,  71 => 23,  67 => 22,  57 => 15,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/User/users.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle\\Resources\\views\\User\\users.html.twig");
    }
}
