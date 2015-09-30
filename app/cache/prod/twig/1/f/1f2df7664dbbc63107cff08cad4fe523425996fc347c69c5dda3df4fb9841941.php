<?php

/* MathildeJobeetBundle::layout.html.twig */
class __TwigTemplate_5530315fe18eaabccdd30af7e5da7290bf74b4126fef3797b76442e0d7ce3c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mathildejobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("mathilde_job");
        echo "\">
                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mathildejobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                    </a></h1>
 
                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>Ask for people</h2>
                            <div>
                                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("mathilde_job_new");
        echo "\">Post a Job</a>
                            </div>
                        </div>
 
                        <div class=\"search\">
                            <h2>Ask for a job</h2>
                            <form action=\"\" method=\"get\">
                                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                                <input type=\"submit\" value=\"search\" />
                                <div class=\"help\">
                                    Enter some keywords (city, country, position, ...)
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 
           <div id=\"content\">
               ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "                   <div class=\"flash_notice\">
                       ";
            // line 50
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo " 
               ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 55
            echo "                   <div class=\"flash_error\">
                       ";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo " 
               <div class=\"content\">
                   ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "               </div>
           </div>
 
           <div id=\"footer\">
               <div class=\"content\">
                   <span class=\"symfony\">
                       <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mathildejobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                           powered by <a href=\"http://www.symfony.com/\">
                           <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mathildejobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                       </a>
                   </span>
                   <ul>
                       <li><a href=\"\">About Jobeet</a></li>
                       <li class=\"feed\"><a href=\"\">Full feed</a></li>
                       <li><a href=\"\">Jobeet API</a></li>
                       <li class=\"last\"><a href=\"\">Affiliates</a></li>
                   </ul>
               </div>
           </div>
       </div>
   </body>
</html> 
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "                Jobeet - Your best job board
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mathildejobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "                   ";
    }

    public function getTemplateName()
    {
        return "MathildeJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 62,  184 => 61,  180 => 14,  177 => 13,  170 => 11,  167 => 10,  162 => 6,  159 => 5,  140 => 71,  135 => 69,  127 => 63,  125 => 61,  121 => 59,  112 => 56,  109 => 55,  105 => 54,  102 => 53,  93 => 50,  90 => 49,  86 => 48,  64 => 29,  54 => 22,  50 => 21,  40 => 15,  37 => 13,  35 => 10,  31 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>*/
/*             {% block title %}*/
/*                 Jobeet - Your best job board*/
/*             {% endblock %}*/
/*         </title>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/mathildejobeet/css/main.css') }}" type="text/css" media="all" />*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('bundles/mathildejobeet/images/favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div id="container">*/
/*             <div id="header">*/
/*                 <div class="content">*/
/*                     <h1><a href="{{ path('mathilde_job') }}">*/
/*                         <img src="{{ asset('bundles/mathildejobeet/images/logo.jpg') }}" alt="Jobeet Job Board" />*/
/*                     </a></h1>*/
/*  */
/*                     <div id="sub_header">*/
/*                         <div class="post">*/
/*                             <h2>Ask for people</h2>*/
/*                             <div>*/
/*                                 <a href="{{ path('mathilde_job_new') }}">Post a Job</a>*/
/*                             </div>*/
/*                         </div>*/
/*  */
/*                         <div class="search">*/
/*                             <h2>Ask for a job</h2>*/
/*                             <form action="" method="get">*/
/*                                 <input type="text" name="keywords" id="search_keywords" />*/
/*                                 <input type="submit" value="search" />*/
/*                                 <div class="help">*/
/*                                     Enter some keywords (city, country, position, ...)*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*  */
/*            <div id="content">*/
/*                {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                    <div class="flash_notice">*/
/*                        {{ flashMessage }}*/
/*                    </div>*/
/*                {% endfor %}*/
/*  */
/*                {% for flashMessage in app.session.flashbag.get('error') %}*/
/*                    <div class="flash_error">*/
/*                        {{ flashMessage }}*/
/*                    </div>*/
/*                {% endfor %}*/
/*  */
/*                <div class="content">*/
/*                    {% block content %}*/
/*                    {% endblock %}*/
/*                </div>*/
/*            </div>*/
/*  */
/*            <div id="footer">*/
/*                <div class="content">*/
/*                    <span class="symfony">*/
/*                        <img src="{{ asset('bundles/mathildejobeet/images/jobeet-mini.png') }}" />*/
/*                            powered by <a href="http://www.symfony.com/">*/
/*                            <img src="{{ asset('bundles/mathildejobeet/images/symfony.gif') }}" alt="symfony framework" />*/
/*                        </a>*/
/*                    </span>*/
/*                    <ul>*/
/*                        <li><a href="">About Jobeet</a></li>*/
/*                        <li class="feed"><a href="">Full feed</a></li>*/
/*                        <li><a href="">Jobeet API</a></li>*/
/*                        <li class="last"><a href="">Affiliates</a></li>*/
/*                    </ul>*/
/*                </div>*/
/*            </div>*/
/*        </div>*/
/*    </body>*/
/* </html> */
/* */
