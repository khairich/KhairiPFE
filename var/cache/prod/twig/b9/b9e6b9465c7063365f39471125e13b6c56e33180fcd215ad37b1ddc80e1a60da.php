<?php

/* AppBundle:PrivateMessage:_private_messages_list.html.twig */
class __TwigTemplate_f96da97758b01538e2f69ab40a8e4f1943a1d38ba649d580bdc476ce232e8bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["private_messages"]) ? $context["private_messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "    <div class=\"col-lg-12 publication-item\">
        <div class=\"avatar\">
            ";
            // line 4
            if (($this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "image", array()) == null)) {
                // line 5
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "nick", array()), "html", null, true);
                echo "\">
            ";
            } else {
                // line 7
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "id", array())) . "_usermedia/") . $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "nick", array()), "html", null, true);
                echo "\">
            ";
            }
            // line 9
            echo "        </div>

        <div class=\"publication-item-content\">
            <p>
                <a class=\"pub-name-link\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "nick", array()))), "html", null, true);
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "surname", array()), "html", null, true);
            echo "
                </a>
                -
                ";
            // line 17
            if (((isset($context["type"]) ? $context["type"] : null) == "sended")) {
                // line 18
                echo "                    To
                    <a style=\"font-weight: bold;\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute($context["message"], "receiver", array()), "nick", array()))), "html", null, true);
                echo "\">
                        ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "receiver", array()), "nick", array()), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "nick", array()), "html", null, true);
                echo "
                ";
            }
            // line 25
            echo "                -
                <span class=\"pub-date\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute($context["message"], "createdAt", array())), "html", null, true);
            echo "
                </span>
            </p>

            <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
            echo "</p>

            ";
            // line 33
            if (($this->getAttribute($context["message"], "file", array(), "any", true, true) && ($this->getAttribute($context["message"], "file", array()) != null))) {
                // line 34
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "id", array())) . "_usermedia/pmessages/documents/") . $this->getAttribute($context["message"], "file", array()))), "html", null, true);
                echo "\"
                   class=\"btn-doc glyphicon glyphicon-save\" aria-hidden=\"true\" target=\"_blank\">
                </a>
            ";
            }
            // line 38
            echo "
            ";
            // line 39
            if (($this->getAttribute($context["message"], "image", array(), "any", true, true) && ($this->getAttribute($context["message"], "image", array()) != null))) {
                // line 40
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute($context["message"], "emitter", array()), "id", array())) . "_usermedia/pmessages/images/") . $this->getAttribute($context["message"], "image", array()))), "html", null, true);
                echo "\"
                   class=\"btn-image glyphicon glyphicon-picture\" aria-hidden=\"true\" target=\"_blank\">
                </a>
            ";
            }
            // line 44
            echo "
        </div>

        <div class=\"clearfix\"></div>
        <hr />
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
<div class=\"navigation\">
    ";
        // line 53
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["private_messages"]) ? $context["private_messages"] : null));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "AppBundle:PrivateMessage:_private_messages_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 53,  135 => 51,  123 => 44,  115 => 40,  113 => 39,  110 => 38,  102 => 34,  100 => 33,  95 => 31,  88 => 27,  84 => 25,  78 => 23,  72 => 20,  68 => 19,  65 => 18,  63 => 17,  55 => 14,  51 => 13,  45 => 9,  37 => 7,  29 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:PrivateMessage:_private_messages_list.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/PrivateMessage/_private_messages_list.html.twig");
    }
}
