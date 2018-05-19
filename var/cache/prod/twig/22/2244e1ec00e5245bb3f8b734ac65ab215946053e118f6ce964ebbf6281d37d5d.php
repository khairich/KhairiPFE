<?php

/* AppBundle:Layouts:layout.html.twig */
class __TwigTemplate_4d13c4fc9fd14cbbb965fba4058d88d5a8a434f5539d9d15149102265839a464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>

    <body>
        <header>
            <nav class=\"navbar navbar-inverse\">
                <div class=\"container-fluid\">

                    <!-- <div class=\"navbar-header\">
                         <button type=\"button\" class=\"navbar-toggle collapse\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                             <span class=\"sr-only\">Navigation</span>
                             <span class=\"icon-bar\"></span>
                             <span class=\"icon-bar\"></span>
                             <span class=\"icon-bar\"></span>
                         </button>
                         <a class=\"navbar-brand\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\">
                             <span class=\"glyphicon glyphicon-cloud\" aria-hidden=\"true\"></span>
                             Home
                         </a>
                     </div>!-->

                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            ";
        // line 42
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            // line 43
            echo "                                <li>
                                    <a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                                        <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>
                                        &nbsp;
                                        SignIn
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">
                                        <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                        &nbsp;
                                        SignUp
                                    </a>
                                </li>
                            ";
        } else {
            // line 58
            echo "                                <li>
                                    <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
            echo "\">
                                        <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span>
                                        &nbsp; Home
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
            echo "\">
                                        <span class=\"glyphicon glyphicon-list\" aria-hidden=\"true\"></span>
                                        &nbsp; People
                                    </a>
                                </li>
                                <li>
                                    <form action=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_search");
            echo "\" class=\"navbar-form navbar-left\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Search people\" name=\"search\">
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-default\">
                                            <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                                        </button>
                                    </form>
                                </li>
                            ";
        }
        // line 81
        echo "                        </ul>

                        ";
        // line 83
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 84
            echo "
                            <ul class=\"nav navbar-nav navbar-right\">

                                <li>
                                    <a href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("private_message_index");
            echo "\">
                                        <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span>
                                        &nbsp; Inbox
                                        <span class=\"label label-success label-notifications-msg\"></span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notifications_page");
            echo "\">
                                        <span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span>
                                        &nbsp; Notifications
                                        <span class=\"label label-success label-notifications\"></span>
                                    </a>
                                </li>



                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <div class=\"avatar\">
                                            ";
            // line 108
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()) == null)) {
                // line 109
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()), "html", null, true);
                echo "\">
                                            ";
            } else {
                // line 111
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) . "_usermedia/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()), "html", null, true);
                echo "\">
                                            ";
            }
            // line 113
            echo "                                        </div>

                                        ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "surname", array()), "html", null, true);
            echo "
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li>
                                            <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nick", array()))), "html", null, true);
            echo "\">
                                                <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                                &nbsp; My profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit");
            echo "\">
                                                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                                                &nbsp; My Data
                                            </a>
                                        </li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li>
                                            <a href=\"";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">
                                                <span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span>
                                                &nbsp; Log Out
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"\">
                                                <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                                                &nbsp; Help
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        ";
        }
        // line 149
        echo "                    </div>

                </div>
            </nav>
        </header>
        <section id=\"content\">
            <div class=\"container\">
                <div class=\"col-lg-11\">
                    ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 158
            echo "                        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                    <div id=\"ajax-notifications\" class=\"alert alert-success hidden\"></div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
            ";
        // line 164
        $this->displayBlock('content', $context, $blocks);
        // line 167
        echo "        </section>
        <footer class=\"col-lg-12\">
            <hr>
            <div class=\"container\">
                <center> <p class=\"text-muted\">**Khairi PFE SocialNetwork**</p></center>
            </div>
        </footer>
    </body>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " SOCIAL NETWORK ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.cosmo.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\">
        ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "            <script type=\"text/javascript\">
                var URL = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/app_dev.php\";
            </script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ias.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/common.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 164
    public function block_content($context, array $blocks = array())
    {
        // line 165
        echo "                Content default
            ";
    }

    public function getTemplateName()
    {
        return "AppBundle:Layouts:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 165,  329 => 164,  323 => 18,  319 => 17,  315 => 16,  311 => 15,  306 => 13,  303 => 12,  300 => 11,  294 => 9,  290 => 8,  285 => 7,  282 => 6,  276 => 5,  263 => 167,  261 => 164,  255 => 160,  246 => 158,  242 => 157,  232 => 149,  213 => 133,  203 => 126,  194 => 120,  184 => 115,  180 => 113,  172 => 111,  164 => 109,  162 => 108,  147 => 96,  136 => 88,  130 => 84,  128 => 83,  124 => 81,  111 => 71,  102 => 65,  93 => 59,  90 => 58,  80 => 51,  70 => 44,  67 => 43,  65 => 42,  54 => 34,  38 => 20,  35 => 11,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Layouts:layout.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/Layouts/layout.html.twig");
    }
}
