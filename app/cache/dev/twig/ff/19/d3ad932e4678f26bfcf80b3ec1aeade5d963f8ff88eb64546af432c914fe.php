<?php

/* uosuostmsBundle:Default:findfreer.html.twig */
class __TwigTemplate_ff19d3ad932e4678f26bfcf80b3ec1aeade5d963f8ff88eb64546af432c914fe extends Twig_Template
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
                        <th>Year</th>
                        <th>Module</th>
                        
                        <th>Hall</th>

                    </tr>
                </thead>
                <tbody>
        ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 30
                echo "                        <tr>
                            
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "year"), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "module"), "html", null, true);
                echo "</td>
                            
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
                echo "</td>
                        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    </tbody>
                </table>  
";
        }
        // line 41
        echo "        <form  method =\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
        echo "\">
                    
              <button type=\"submit\" class=\"btn\">OK</button>
            </form>
        
        ";
    }

    // line 48
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 49
        echo "
              <ul class=\"nav nav-list\">
              <li  class=\"nav-header\" ><b>Home</b></li>
              
              ";
        // line 53
        if (($this->getContext($context, "job") == "student")) {
            echo "    
              
              <li class=\"nav-header\">Student</li>
              <li ><a  href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
            echo "\">Search Timetable </a></li>
              <li  ><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
            echo "\">Find Free Halls</a></li>
              
              ";
        }
        // line 60
        echo "              
              ";
        // line 61
        if (($this->getContext($context, "job") == "lecturer")) {
            echo "   
              
              <li class=\"nav-header\">Lecturer</li>
              <li ><a  href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("uosuostms_fttl");
            echo "\">Search Timetable </a></li>
              <li class=\"active\" ><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
            echo "\">Find All</a></li>    
              ";
        }
        // line 67
        echo "              </ul>   
              
";
    }

    public function getTemplateName()
    {
        return "uosuostmsBundle:Default:findfreer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 67,  150 => 65,  146 => 64,  140 => 61,  137 => 60,  131 => 57,  127 => 56,  121 => 53,  115 => 49,  112 => 48,  101 => 41,  96 => 38,  87 => 35,  82 => 33,  78 => 32,  74 => 30,  70 => 29,  54 => 15,  52 => 14,  49 => 13,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
