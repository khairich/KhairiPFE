<?php

/* groupe/index.html.twig */
class __TwigTemplate_04205b52c772a049930d6060cc63f173071964399fcdd1433022e97e2db7205a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "groupe/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "groupe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Groupes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Symfony</th>
                <th>Java</th>
                <th>Angular</th>
                <th>Php</th>
                <th>Html</th>
                <th>C</th>
                <th>Ajax</th>
                <th>Css</th>
                <th>Linux</th>
                <th>J2ee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_show", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            if ($this->getAttribute($context["groupe"], "symfony", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["groupe"], "java", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["groupe"], "angular", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["groupe"], "pHP", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["groupe"], "html", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["groupe"], "c", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["groupe"], "ajax", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["groupe"], "css", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["groupe"], "linux", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["groupe"], "j2EE", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_show", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_edit", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\">Create a new groupe</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "groupe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 54,  176 => 49,  164 => 43,  158 => 40,  147 => 36,  139 => 35,  131 => 34,  123 => 33,  115 => 32,  107 => 31,  99 => 30,  91 => 29,  83 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Groupes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Symfony</th>
                <th>Java</th>
                <th>Angular</th>
                <th>Php</th>
                <th>Html</th>
                <th>C</th>
                <th>Ajax</th>
                <th>Css</th>
                <th>Linux</th>
                <th>J2ee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for groupe in groupes %}
            <tr>
                <td><a href=\"{{ path('groupe_show', { 'id': groupe.id }) }}\">{{ groupe.id }}</a></td>
                <td>{% if groupe.symfony %}Yes{% else %}No{% endif %}</td>
                <td>{% if groupe.java %}Yes{% else %}No{% endif %}</td>
                <td>{% if groupe.angular %}Yes{% else %}No{% endif %}</td>
                <td>{% if groupe.pHP %}Yes{% else %}No{% endif %}</td>
                <td>{% if groupe.html %}Yes{% else %}No{% endif %}</td>
                <td>{% if groupe.c %}Yes{% else %}No{% endif %}</td>
                <td>{% if groupe.ajax %}Yes{% else %}No{% endif %}</td>
                <td>{% if groupe.css %}Yes{% else %}No{% endif %}</td>
                <td>{% if groupe.linux %}Yes{% else %}No{% endif %}</td>
                <td>{% if groupe.j2EE %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('groupe_show', { 'id': groupe.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('groupe_edit', { 'id': groupe.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('groupe_new') }}\">Create a new groupe</a>
        </li>
    </ul>
{% endblock %}
", "groupe/index.html.twig", "C:\\wamp\\www\\khairi_pfe\\app\\Resources\\views\\groupe\\index.html.twig");
    }
}
