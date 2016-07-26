<?php

/* trabajoBundle:datosDeUsuario:index.html.twig */
class __TwigTemplate_e4394c7a9d864c6fbbbe010e62b1e7dc83c08c7d7675227862861d6028440815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "trabajoBundle:datosDeUsuario:index.html.twig", 1);
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
        echo "<h1>datosDeUsuario list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apaterno</th>
                <th>Amaterno</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Codigopostal</th>
                <th>Direccion</th>
                <th>Licenciadeconducir</th>
                <th>Vehiculopropio</th>
                <th>Discapacidad</th>
                <th>Cargootitulodelcurriculum</th>
                <th>Descripcionbrevedesuperfil</th>
                <th>Experienciaprofecional</th>
                <th>Empresa</th>
                <th>Cargo</th>
                <th>Periodo</th>
                <th>A</th>
                <th>Funcionesylogrosdelcargo</th>
                <th>Institucion</th>
                <th>Estado</th>
                <th>Competenciasyhabilidades</th>
                <th>Puestodetrabajodeceado</th>
                <th>Salariominaceptado</th>
                <th>Disponibilidadparaviajar</th>
                <th>Discambiarderesidencia</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "            <tr>
                <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("datosdeusuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "aPaterno", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "aMaterno", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "celular", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigoPostal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "licenciaDeConducir", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "vehiculoPropio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "discapacidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cargoOTituloDelCurriculum", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcionBreveDeSuPerfil", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "experienciaProfecional", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "empresa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cargo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            if ($this->getAttribute($context["entity"], "periodo", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "periodo", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 58
            if ($this->getAttribute($context["entity"], "a", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "a", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "funcionesYLogrosDelCargo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "institucion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "competenciasYHabilidades", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "puestoDeTrabajoDeceado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "salarioMinAceptado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "disponibilidadParaViajar", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "disCambiarDeResidencia", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("datosdeusuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("datosdeusuario_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 79
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("datosdeusuario_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "trabajoBundle:datosDeUsuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 84,  206 => 79,  194 => 73,  188 => 70,  181 => 66,  177 => 65,  173 => 64,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  153 => 59,  147 => 58,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  97 => 46,  93 => 45,  89 => 44,  85 => 43,  81 => 42,  75 => 41,  72 => 40,  68 => 39,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>datosDeUsuario list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Apaterno</th>*/
/*                 <th>Amaterno</th>*/
/*                 <th>Telefono</th>*/
/*                 <th>Celular</th>*/
/*                 <th>Codigopostal</th>*/
/*                 <th>Direccion</th>*/
/*                 <th>Licenciadeconducir</th>*/
/*                 <th>Vehiculopropio</th>*/
/*                 <th>Discapacidad</th>*/
/*                 <th>Cargootitulodelcurriculum</th>*/
/*                 <th>Descripcionbrevedesuperfil</th>*/
/*                 <th>Experienciaprofecional</th>*/
/*                 <th>Empresa</th>*/
/*                 <th>Cargo</th>*/
/*                 <th>Periodo</th>*/
/*                 <th>A</th>*/
/*                 <th>Funcionesylogrosdelcargo</th>*/
/*                 <th>Institucion</th>*/
/*                 <th>Estado</th>*/
/*                 <th>Competenciasyhabilidades</th>*/
/*                 <th>Puestodetrabajodeceado</th>*/
/*                 <th>Salariominaceptado</th>*/
/*                 <th>Disponibilidadparaviajar</th>*/
/*                 <th>Discambiarderesidencia</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('datosdeusuario_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.nombre }}</td>*/
/*                 <td>{{ entity.aPaterno }}</td>*/
/*                 <td>{{ entity.aMaterno }}</td>*/
/*                 <td>{{ entity.telefono }}</td>*/
/*                 <td>{{ entity.celular }}</td>*/
/*                 <td>{{ entity.codigoPostal }}</td>*/
/*                 <td>{{ entity.direccion }}</td>*/
/*                 <td>{{ entity.licenciaDeConducir }}</td>*/
/*                 <td>{{ entity.vehiculoPropio }}</td>*/
/*                 <td>{{ entity.discapacidad }}</td>*/
/*                 <td>{{ entity.cargoOTituloDelCurriculum }}</td>*/
/*                 <td>{{ entity.descripcionBreveDeSuPerfil }}</td>*/
/*                 <td>{{ entity.experienciaProfecional }}</td>*/
/*                 <td>{{ entity.empresa }}</td>*/
/*                 <td>{{ entity.cargo }}</td>*/
/*                 <td>{% if entity.periodo %}{{ entity.periodo|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if entity.a %}{{ entity.a|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.funcionesYLogrosDelCargo }}</td>*/
/*                 <td>{{ entity.institucion }}</td>*/
/*                 <td>{{ entity.estado }}</td>*/
/*                 <td>{{ entity.competenciasYHabilidades }}</td>*/
/*                 <td>{{ entity.puestoDeTrabajoDeceado }}</td>*/
/*                 <td>{{ entity.salarioMinAceptado }}</td>*/
/*                 <td>{{ entity.disponibilidadParaViajar }}</td>*/
/*                 <td>{{ entity.disCambiarDeResidencia }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('datosdeusuario_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('datosdeusuario_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('datosdeusuario_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
