<?php

/* MathildeJobeetBundle:Job:show.html.twig */
class __TwigTemplate_ac11f242fe4903b943dfa83d1bcf83c40dc8f50a188b09005af6befe8c2d3b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MathildeJobeetBundle:Job:show.html.twig", 1);
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
        echo "<h1>Job</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>How_to_apply</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "token", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_public</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ispublic", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_activated</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "isactivated", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expires_at</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "expiresat", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("mathilde_job");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mathilde_job_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MathildeJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 86,  162 => 82,  154 => 77,  144 => 70,  137 => 66,  130 => 62,  123 => 58,  116 => 54,  109 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Job</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ entity.type }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Company</th>*/
/*                 <td>{{ entity.company }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Logo</th>*/
/*                 <td>{{ entity.logo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Url</th>*/
/*                 <td>{{ entity.url }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Position</th>*/
/*                 <td>{{ entity.position }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Location</th>*/
/*                 <td>{{ entity.location }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ entity.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>How_to_apply</th>*/
/*                 <td>{{ entity.howtoapply }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Token</th>*/
/*                 <td>{{ entity.token }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Is_public</th>*/
/*                 <td>{{ entity.ispublic }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Is_activated</th>*/
/*                 <td>{{ entity.isactivated }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ entity.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Expires_at</th>*/
/*                 <td>{{ entity.expiresat|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created_at</th>*/
/*                 <td>{{ entity.createdat|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated_at</th>*/
/*                 <td>{{ entity.updatedat|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('mathilde_job') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('mathilde_job_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
