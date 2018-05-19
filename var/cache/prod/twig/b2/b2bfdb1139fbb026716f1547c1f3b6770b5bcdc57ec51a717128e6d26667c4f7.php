<?php

/* @App/Like/likeslist.html.twig */
class __TwigTemplate_eac5c2db2574eda2aeb279df6494d887c74f4cca586d68177b1ad3dc7c7ff476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "@App/Like/likeslist.html.twig", 1);
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
        echo "     <div class=\"container\">

         <div id=\"timeline\" class=\"col-lg-12 box-default pull-left\">
             <h1 class=\"box-header\">Publications that you like ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile_user"]) ? $context["profile_user"] : null), "nick", array()), "html", null, true);
        echo "</h1>

             <div class=\"count\">
                 <span class=\"label label-primary\">
                     Total : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["likeslist"]) ? $context["likeslist"] : null), "getTotalItemCount", array()), "html", null, true);
        echo "
                 </span>
             </div>

             <hr>

             <div class=\"box-content\">
                 ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["likeslist"]) ? $context["likeslist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
            // line 24
            echo "                     ";
            $context["publication"] = $this->getAttribute($context["like"], "publication", array());
            // line 25
            echo "                     <div class=\"col-lg-12 publication-item\">
                         <div class=\"avatar\">
                             ";
            // line 27
            if (($this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "image", array()) == null)) {
                // line 28
                echo "                                 <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "nick", array()), "html", null, true);
                echo "\">
                             ";
            } else {
                // line 30
                echo "                                 <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "id", array())) . "_usermedia/") . $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "nick", array()), "html", null, true);
                echo "\">
                             ";
            }
            // line 32
            echo "                         </div>

                         <div class=\"publication-item-content\">
                             <p>
                                 <a class=\"pub-name-link\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "nick", array()))), "html", null, true);
            echo "\">
                                     ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "surname", array()), "html", null, true);
            echo "
                                 </a>
                                 -
                                 ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "nick", array()), "html", null, true);
            echo "
                                 -
                                 <span class=\"pub-date\">
                                     ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "createdAt", array())), "html", null, true);
            echo "
                                 </span>
                             </p>

                             <p>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "texto", array()), "html", null, true);
            echo "</p>

                             ";
            // line 49
            if (($this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
                // line 50
                echo "                                 <span data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "id", array()), "html", null, true);
                echo "\" class=\"btn-delete-pub glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                             ";
            }
            // line 52
            echo "
                             ";
            // line 53
            if (($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "document", array(), "any", true, true) && ($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "document", array()) != null))) {
                // line 54
                echo "                                 <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "id", array())) . "_usermedia/publications/documents/") . $this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "document", array()))), "html", null, true);
                echo "\"
                                    class=\"btn-doc glyphicon glyphicon-save\" aria-hidden=\"true\" target=\"_blank\">
                                 </a>
                             ";
            }
            // line 58
            echo "
                             ";
            // line 59
            if (($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "image", array(), "any", true, true) && ($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "image", array()) != null))) {
                // line 60
                echo "                                 <span class=\"btn-img glyphicon glyphicon-picture\" aria-hidden=\"true\"></span>
                                 <div class=\"clearfix\"></div>

                                 <div class=\"pub-image\">
                                     <img src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array()), "id", array())) . "_usermedia/publications/images/") . $this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "image", array()), "html", null, true);
                echo "\">
                                 </div>
                             ";
            }
            // line 67
            echo "
                         </div>
                         <div class=\"pull-right like\">
                             <span data-id=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "id", array()), "html", null, true);
            echo "\"
                                   class=\"
                                   ";
            // line 72
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), (isset($context["publication"]) ? $context["publication"] : null)) == true)) {
                // line 73
                echo "                                        hidden
                                   ";
            }
            // line 75
            echo "                                   btn-like glyphicon glyphicon-heart-empty\"
                                   aria-hidden=\"true\"
                                   data-toggle=\"tooltip\"
                                   data-placement=\"bottom\"
                                   title=\"Like\">
                             </span>
                             <span data-id=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "id", array()), "html", null, true);
            echo "\"
                                   class=\"
                                   ";
            // line 83
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), (isset($context["publication"]) ? $context["publication"] : null)) == false)) {
                // line 84
                echo "                                        hidden
                                   ";
            }
            // line 86
            echo "                                   btn-dislike active glyphicon glyphicon-heart\"
                                   aria-hidden=\"true\"
                                   data-toggle=\"tooltip\"
                                   data-placement=\"bottom\"
                                   title=\"Unlike\">
                             </span>
                         </div>
                         <small class=\"pull-left\">";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LikeExtension')->numlikesFilter((isset($context["publication"]) ? $context["publication"] : null)), "html", null, true);
            echo " Likes</small>
                         <div class=\"clearfix\"></div>
                         <hr>
                     </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                 <div class=\"navigation\">
                     ";
        // line 100
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["likeslist"]) ? $context["likeslist"] : null));
        echo "
                 </div>
             </div>
         </div>

     </div>
";
    }

    public function getTemplateName()
    {
        return "@App/Like/likeslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 100,  228 => 98,  217 => 93,  208 => 86,  204 => 84,  202 => 83,  197 => 81,  189 => 75,  185 => 73,  183 => 72,  178 => 70,  173 => 67,  165 => 64,  159 => 60,  157 => 59,  154 => 58,  146 => 54,  144 => 53,  141 => 52,  135 => 50,  133 => 49,  128 => 47,  121 => 43,  115 => 40,  107 => 37,  103 => 36,  97 => 32,  89 => 30,  81 => 28,  79 => 27,  75 => 25,  72 => 24,  68 => 23,  58 => 16,  51 => 12,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Like/likeslist.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle\\Resources\\views\\Like\\likeslist.html.twig");
    }
}
