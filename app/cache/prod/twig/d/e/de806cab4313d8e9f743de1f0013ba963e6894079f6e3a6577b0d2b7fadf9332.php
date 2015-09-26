<?php

/* MathildeJobeetBundle:Job:show.html.twig */
class __TwigTemplate_ac11f242fe4903b943dfa83d1bcf83c40dc8f50a188b09005af6befe8c2d3b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MathildeJobeetBundle::layout.html.twig", "MathildeJobeetBundle:Job:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mathildejobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div id=\"job\">
        <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "type", array()), "html", null, true);
        echo "</small>
        </h3>
 
        ";
        // line 21
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo", array())) {
            // line 22
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo", array()), "html", null, true);
            echo "\"
                        alt=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company", array()), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 29
        echo " 
        <div class=\"description\">
            ";
        // line 31
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array()), "html", null, true));
        echo "
        </div>
 
        <h4>How to apply?</h4>
 
        <p class=\"how_to_apply\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply", array()), "html", null, true);
        echo "</p>
 
        <div class=\"meta\">
            <small>posted on ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>
 
        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mathilde_job_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </div>
    </div>
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
        return array (  126 => 43,  119 => 39,  113 => 36,  105 => 31,  101 => 29,  94 => 25,  90 => 24,  86 => 23,  83 => 22,  81 => 21,  75 => 18,  71 => 17,  66 => 15,  62 => 14,  59 => 13,  56 => 12,  50 => 9,  45 => 8,  42 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'MathildeJobeetBundle::layout.html.twig' %}*/
/*  */
/* {% block title %}*/
/*     {{ entity.company }} is looking for a {{ entity.position }}*/
/* {% endblock %}*/
/*  */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/mathildejobeet/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block content %}*/
/*     <div id="job">*/
/*         <h1>{{ entity.company }}</h1>*/
/*         <h2>{{ entity.location }}</h2>*/
/*         <h3>*/
/*             {{ entity.position }}*/
/*             <small> - {{ entity.type }}</small>*/
/*         </h3>*/
/*  */
/*         {% if entity.logo %}*/
/*             <div class="logo">*/
/*                 <a href="{{ entity.url }}">*/
/*                     <img src="/uploads/jobs/{{ entity.logo }}"*/
/*                         alt="{{ entity.company }} logo" />*/
/*                 </a>*/
/*             </div>*/
/*         {% endif %}*/
/*  */
/*         <div class="description">*/
/*             {{ entity.description|nl2br }}*/
/*         </div>*/
/*  */
/*         <h4>How to apply?</h4>*/
/*  */
/*         <p class="how_to_apply">{{ entity.howtoapply }}</p>*/
/*  */
/*         <div class="meta">*/
/*             <small>posted on {{ entity.createdat|date('m/d/Y') }}</small>*/
/*         </div>*/
/*  */
/*         <div style="padding: 20px 0">*/
/*             <a href="{{ path('mathilde_job_edit', { 'id': entity.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
