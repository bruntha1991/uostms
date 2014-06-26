<?php

/* uosuostmsBundle:Default:findalllr.html.twig */
class __TwigTemplate_a7041c50704c448777f943c5d0c4c50ef0ea6c95f2001f91274a945cd2809c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'sideMenu' => array($this, 'block_sideMenu'),
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
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"span6\">
";
        // line 5
        if (array_key_exists("error", $context)) {
            // line 6
            echo "              <br>
              <font color=\"red\">
              ";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
            echo "
              </font>
              </br>

    ";
        }
        // line 13
        echo "              
              ";
        // line 14
        if ((!array_key_exists("error", $context))) {
            // line 15
            echo "              

    
    <table class=\"table\">
                <thead>
                    <tr>                        
                        <th>Hall</th>
                    </tr>
                </thead>
                <tbody>
        ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 26
                echo "                        <tr>
                            <td><a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uosuostms_hall", array("hall" => $this->getAttribute($this->getContext($context, "entity"), "name"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
                echo "</a></td>
                        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </tbody>
                </table>  
";
        }
        // line 33
        echo "        <form  method =\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
        echo "\">
                    
              <button type=\"submit\" class=\"btn\">OK</button>
            </form>
        
        ";
    }

    // line 40
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 41
        echo "
              <ul class=\"nav nav-list\">
              <li  class=\"nav-header\" ><b>Home</b></li>
              
              ";
        // line 45
        if (($this->getContext($context, "job") == "student")) {
            echo "    
              
              <li class=\"nav-header\">Student</li>
              <li ><a  href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
            echo "\">Search Timetable </a></li>
              <li class=\"active\" ><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
            echo "\">Find Free Halls</a></li>
              
              ";
        }
        // line 52
        echo "              
              ";
        // line 53
        if (($this->getContext($context, "job") == "lecturer")) {
            echo "   
              
              <li class=\"nav-header\">Lecturer</li>
              <li ><a  href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("uosuostms_fttl");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
            echo "\">Find All</a></li>    
              ";
        }
        // line 59
        echo "              </ul>   
              
";
    }

    public function getTemplateName()
    {
        return "uosuostmsBundle:Default:findalllr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  138 => 57,  134 => 56,  128 => 53,  125 => 52,  119 => 49,  115 => 48,  109 => 45,  103 => 41,  100 => 40,  89 => 33,  84 => 30,  73 => 27,  70 => 26,  66 => 25,  54 => 15,  52 => 14,  49 => 13,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
