<?php

/* trabajoBundle:perfilProfecional:index.html.twig */
class __TwigTemplate_d6f15ef8b0516a039ebb22fe24cbbbca2d9e1b0f0c6ae8ad4bb917619a528915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "trabajoBundle:perfilProfecional:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>perfilProfecional list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripciondeperfilprof</th>
                <th>Experienciasprofecionales</th>
                <th>Empresa</th>
                <th>Cargo</th>
                <th>Periodo</th>
                <th>A</th>
                <th>Funcionesylogrosdelcargo</th>
                <th>Institucion</th>
                <th>Estado</th>
                <th>Periodos</th>
                <th>Aa</th>
                <th>Conocimientos</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfilprofecional_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcionDePerfilprof", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "experienciasProfecionales", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "empresa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cargo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["entity"], "periodo", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "periodo", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["entity"], "a", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "a", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "funcionesYLogrosDelCargo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "institucion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["entity"], "periodos", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "periodos", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["entity"], "aa", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "aa", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "conocimientos", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfilprofecional_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfilprofecional_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("perfilprofecional_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "trabajoBundle:perfilProfecional:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 58,  145 => 53,  133 => 47,  127 => 44,  120 => 40,  114 => 39,  108 => 38,  104 => 37,  100 => 36,  96 => 35,  90 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  62 => 28,  59 => 27,  55 => 26,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>perfilProfecional list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Descripciondeperfilprof</th>*/
/*                 <th>Experienciasprofecionales</th>*/
/*                 <th>Empresa</th>*/
/*                 <th>Cargo</th>*/
/*                 <th>Periodo</th>*/
/*                 <th>A</th>*/
/*                 <th>Funcionesylogrosdelcargo</th>*/
/*                 <th>Institucion</th>*/
/*                 <th>Estado</th>*/
/*                 <th>Periodos</th>*/
/*                 <th>Aa</th>*/
/*                 <th>Conocimientos</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('perfilprofecional_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.descripcionDePerfilprof }}</td>*/
/*                 <td>{{ entity.experienciasProfecionales }}</td>*/
/*                 <td>{{ entity.empresa }}</td>*/
/*                 <td>{{ entity.cargo }}</td>*/
/*                 <td>{% if entity.periodo %}{{ entity.periodo|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if entity.a %}{{ entity.a|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.funcionesYLogrosDelCargo }}</td>*/
/*                 <td>{{ entity.institucion }}</td>*/
/*                 <td>{{ entity.estado }}</td>*/
/*                 <td>{% if entity.periodos %}{{ entity.periodos|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if entity.aa %}{{ entity.aa|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.conocimientos }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('perfilprofecional_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('perfilprofecional_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('perfilprofecional_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
