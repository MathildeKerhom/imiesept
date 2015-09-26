<?php

/* MathildeJobeetBundle:Job:index.html.twig */
class __TwigTemplate_8f8f8831d1217a160f33e04eb88877cae84f037a7033ab0b88ea0192c630e255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MathildeJobeetBundle::layout.html.twig", "MathildeJobeetBundle:Job:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MathildeJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mathildejobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"jobs\">
        <table class=\"jobs\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                    <td class=\"location\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
                    <td class=\"position\">
\t\t\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mathilde_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
                    </td>
                    <td class=\"company\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MathildeJobeetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  87 => 19,  81 => 16,  77 => 15,  72 => 13,  67 => 12,  50 => 11,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'MathildeJobeetBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/mathildejobeet/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div id="jobs">*/
/*         <table class="jobs">*/
/*             {% for entity in entities %}*/
/*                 <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                     <td class="location">{{ entity.location }}</td>*/
/*                     <td class="position">*/
/* 						<a href="{{ path('mathilde_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug}) }}">*/
/* 						{{ entity.position }}*/
/* 						</a>*/
/*                     </td>*/
/*                     <td class="company">{{ entity.company }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
/* */
