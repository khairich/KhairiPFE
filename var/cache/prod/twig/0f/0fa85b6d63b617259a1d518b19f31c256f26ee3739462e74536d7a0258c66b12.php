<?php

/* @App/Layouts/custom_pagination.html.twig */
class __TwigTemplate_54982e5ee85729fe5776313005caeb57fee92625acbcbede900851e36a02deed extends Twig_Template
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
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 2
            echo "    <ul class=\"pagination\">

    ";
            // line 4
            if (array_key_exists("previous", $context)) {
                // line 5
                echo "        <li>
            <a class=\"prev_link\" rel=\"prev\" href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 9
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            if (((isset($context["startPage"]) ? $context["startPage"] : null) > 1)) {
                // line 15
                echo "        <li>
            <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 18
                if (((isset($context["startPage"]) ? $context["startPage"] : null) == 3)) {
                    // line 19
                    echo "            <li>
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 22
(isset($context["startPage"]) ? $context["startPage"] : null) != 2)) {
                    // line 23
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 30
                echo "        ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : null))) {
                    // line 31
                    echo "            <li>
                <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 35
                    echo "            <li class=\"active\">
                <span>";
                    // line 36
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 39
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > (isset($context["endPage"]) ? $context["endPage"] : null))) {
                // line 43
                echo "        ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 1))) {
                    // line 44
                    echo "            ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 2))) {
                        // line 45
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 49
                        echo "                <li>
                    <a href=\"";
                        // line 50
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 53
                    echo "        ";
                }
                // line 54
                echo "        <li>
            <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["pageCount"]) ? $context["pageCount"] : null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : null), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 58
            echo "
    ";
            // line 59
            if (array_key_exists("next", $context)) {
                // line 60
                echo "        <li>
            <a class=\"next_link\" rel=\"next\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 64
                echo "        <li class=\"disabled\">
            <span>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 68
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@App/Layouts/custom_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 68,  179 => 65,  176 => 64,  168 => 61,  165 => 60,  163 => 59,  160 => 58,  152 => 55,  149 => 54,  146 => 53,  138 => 50,  135 => 49,  129 => 45,  126 => 44,  123 => 43,  121 => 42,  118 => 41,  111 => 39,  105 => 36,  102 => 35,  94 => 32,  91 => 31,  88 => 30,  84 => 29,  81 => 28,  78 => 27,  72 => 23,  70 => 22,  65 => 20,  62 => 19,  60 => 18,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  41 => 10,  38 => 9,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Layouts/custom_pagination.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle\\Resources\\views\\Layouts\\custom_pagination.html.twig");
    }
}
