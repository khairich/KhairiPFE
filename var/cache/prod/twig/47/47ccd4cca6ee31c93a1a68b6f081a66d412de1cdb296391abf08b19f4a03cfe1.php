<?php

/* @App/User/login.html.twig */
class __TwigTemplate_da74e02fc8affb25b1a165fe28c0d3806e2ed513226fae531c4661edb3280330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "@App/User/login.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-lg-4 box-form\">
        <h2>SignIn</h2>
        <hr>
        <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"POST\">
            <label>Email</label>
            <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" class=\"form-control\">

            <label>Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\">

            <input type=\"submit\" value=\"Submit\" class=\"btn btn-success\">
            <input type=\"hidden\" name=\"_target_path\" value=\"/home\">
        </form>

    </div>
";
    }

    public function getTemplateName()
    {
        return "@App/User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/User/login.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle\\Resources\\views\\User\\login.html.twig");
    }
}
