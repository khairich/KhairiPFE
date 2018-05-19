<?php

/* AppBundle:Notification:notifications.html.twig */
class __TwigTemplate_621a5401bb96ed0df03450a7fae604c969e9adc9aae83f3114565f326b0e3581 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/notifications_page.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"container\">

        <div id=\"notifications\" class=\"col-lg-12 box-default pull-left\">
            <h1 class=\"box-header\">Notifications</h1>
            <div class=\"box-content\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : null), "nick", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : null), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : null), "surname", array()), "html", null, true);
                echo "
                                </a>
                                  te está siguiendo
                            ";
            }
            // line 28
            echo "
                            ";
            // line 29
            if (($this->getAttribute($context["notification"], "type", array()) == "like")) {
                // line 30
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : null), "nick", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : null), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_of_action"]) ? $context["user_of_action"] : null), "surname", array()), "html", null, true);
                echo "
                                </a>
                                  I liked one of your posts
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["notifications"]) ? $context["notifications"] : null));
        echo "
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
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
        return array (  117 => 41,  113 => 39,  104 => 35,  95 => 31,  90 => 30,  88 => 29,  85 => 28,  76 => 24,  71 => 23,  69 => 22,  66 => 21,  64 => 20,  57 => 15,  53 => 14,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Notification:notifications.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/Notification/notifications.html.twig");
    }
}
