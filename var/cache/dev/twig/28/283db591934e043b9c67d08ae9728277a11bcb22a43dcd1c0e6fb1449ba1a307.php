<?php

/* AppBundle:Layouts:layout.html.twig */
class __TwigTemplate_73506a18741a4bfa0f52109d490b80875d5716de4896177af93c9bff0a9d3b1b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layouts:layout.html.twig"));

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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_publications");
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
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
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()) == null)) {
                // line 109
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()), "html", null, true);
                echo "\">
                                            ";
            } else {
                // line 111
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) . "_usermedia/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()), "html", null, true);
                echo "\">
                                            ";
            }
            // line 113
            echo "                                        </div>

                                        ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
            echo "
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li>
                                            <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nick", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " SOCIAL NETWORK ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "            <script type=\"text/javascript\">
                var URL = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 164
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 165
        echo "                Content default
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  359 => 165,  353 => 164,  344 => 18,  340 => 17,  336 => 16,  332 => 15,  327 => 13,  324 => 12,  318 => 11,  309 => 9,  305 => 8,  300 => 7,  294 => 6,  282 => 5,  266 => 167,  264 => 164,  258 => 160,  249 => 158,  245 => 157,  235 => 149,  216 => 133,  206 => 126,  197 => 120,  187 => 115,  183 => 113,  175 => 111,  167 => 109,  165 => 108,  150 => 96,  139 => 88,  133 => 84,  131 => 83,  127 => 81,  114 => 71,  105 => 65,  96 => 59,  93 => 58,  83 => 51,  73 => 44,  70 => 43,  68 => 42,  57 => 34,  41 => 20,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <title>{% block title %} SOCIAL NETWORK {% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.cosmo.min.css') }}\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\" type=\"text/css\">
        {% endblock %}
        {% block javascripts %}
            <script type=\"text/javascript\">
                var URL = \"{{ app.request.getSchemeAndHttpHost() }}/app_dev.php\";
            </script>
            <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery-ias.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/custom/common.js') }}\"></script>
        {% endblock %}
    </head>

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
                         <a class=\"navbar-brand\" href=\"{{ path(\"app_homepage\") }}\">
                             <span class=\"glyphicon glyphicon-cloud\" aria-hidden=\"true\"></span>
                             Home
                         </a>
                     </div>!-->

                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            {% if app.user == null %}
                                <li>
                                    <a href=\"{{ path(\"login\") }}\">
                                        <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>
                                        &nbsp;
                                        SignIn
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path(\"register\") }}\">
                                        <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                        &nbsp;
                                        SignUp
                                    </a>
                                </li>
                            {% else %}
                                <li>
                                    <a href=\"{{ path(\"home_publications\") }}\">
                                        <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span>
                                        &nbsp; Home
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path(\"user_list\") }}\">
                                        <span class=\"glyphicon glyphicon-list\" aria-hidden=\"true\"></span>
                                        &nbsp; People
                                    </a>
                                </li>
                                <li>
                                    <form action=\"{{ path('user_search') }}\" class=\"navbar-form navbar-left\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Search people\" name=\"search\">
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-default\">
                                            <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                                        </button>
                                    </form>
                                </li>
                            {% endif %}
                        </ul>

                        {% if app.user != null %}

                            <ul class=\"nav navbar-nav navbar-right\">

                                <li>
                                    <a href=\"{{ path(\"private_message_index\") }}\">
                                        <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span>
                                        &nbsp; Inbox
                                        <span class=\"label label-success label-notifications-msg\"></span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"{{ path(\"notifications_page\") }}\">
                                        <span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span>
                                        &nbsp; Notifications
                                        <span class=\"label label-success label-notifications\"></span>
                                    </a>
                                </li>



                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <div class=\"avatar\">
                                            {% if app.user.image == null %}
                                                <img src=\"{{ asset('assets/images/default.png') }}\" alt=\"{{ app.user.nick }}\">
                                            {% else %}
                                                <img src=\"{{ asset('uploads/media/'~app.user.id~'_usermedia/'~app.user.image) }}\" alt=\"{{ app.user.nick }}\">
                                            {% endif %}
                                        </div>

                                        {{ app.user.name }} {{ app.user.surname }}
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li>
                                            <a href=\"{{ path('user_profile', {'nick': app.user.nick}) }}\">
                                                <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                                &nbsp; My profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path(\"user_edit\") }}\">
                                                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                                                &nbsp; My Data
                                            </a>
                                        </li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li>
                                            <a href=\"{{ path(\"logout\") }}\">
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

                        {% endif %}
                    </div>

                </div>
            </nav>
        </header>
        <section id=\"content\">
            <div class=\"container\">
                <div class=\"col-lg-11\">
                    {% for message in app.session.flashbag().get('status') %}
                        <div class=\"alert alert-success\">{{ message }}</div>
                    {% endfor %}
                    <div id=\"ajax-notifications\" class=\"alert alert-success hidden\"></div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
            {% block content %}
                Content default
            {% endblock %}
        </section>
        <footer class=\"col-lg-12\">
            <hr>
            <div class=\"container\">
                <center> <p class=\"text-muted\">**Khairi PFE SocialNetwork**</p></center>
            </div>
        </footer>
    </body>

</html>", "AppBundle:Layouts:layout.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/Layouts/layout.html.twig");
    }
}
