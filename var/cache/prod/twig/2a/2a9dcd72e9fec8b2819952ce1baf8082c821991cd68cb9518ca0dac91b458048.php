<?php

/* @App/PrivateMessage/index_private_message.html.twig */
class __TwigTemplate_3c4dab0d71ff08371ed0df3aae18f45fc6c3babe3a445a7d56278808d2e41cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "@App/PrivateMessage/index_private_message.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"col-lg-12 box-default\">
            <h1 class=\"box-header\">Private messaging</h1>
            <div id=\"new-private-message\" class=\"col-lg-6\">
                <h4>Send new message</h4>
                ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("enctype" => "multipart/form-data"));
        echo "

                ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                <br>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("private_message_sended");
        echo "\" class=\"btn btn-warning\">Sent messages</a>
            </div>

            <div class=\"col-lg-6\">
                <h4>Received messages</h4>
                <hr />

                <div class=\"box-content\">
                    ";
        // line 21
        $this->loadTemplate("AppBundle:PrivateMessage:_private_messages_list.html.twig", "@App/PrivateMessage/index_private_message.html.twig", 21)->display($context);
        // line 22
        echo "                </div>

            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@App/PrivateMessage/index_private_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  59 => 21,  48 => 13,  43 => 11,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/PrivateMessage/index_private_message.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle\\Resources\\views\\PrivateMessage\\index_private_message.html.twig");
    }
}
