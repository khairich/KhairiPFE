<?php

/* competence/Recherche.html.twig */
class __TwigTemplate_21b0e57d930e0df5f4907091326a9cdfa6fd5e6c772c3b7faf3726907c14b7d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competence/Recherche.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Competence</h1>

    <table>
        <tbody>
     

            <tr>
                <th>Skills</th>
                </tr>
              
                
                     ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "                     ";
            if (($this->getAttribute($context["i"], "id_user_id", array()) == $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : null), "id", array()))) {
                // line 17
                echo "                <tr>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "name", array()), "html", null, true);
                echo "</td>
            </tr>
                    ";
            }
            // line 21
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                
                
     
        </tbody>
    </table>

  
";
    }

    public function getTemplateName()
    {
        return "competence/Recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  60 => 21,  54 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "competence/Recherche.html.twig", "C:\\wamp\\www\\khairi_pfe\\app\\Resources\\views\\competence\\Recherche.html.twig");
    }
}
