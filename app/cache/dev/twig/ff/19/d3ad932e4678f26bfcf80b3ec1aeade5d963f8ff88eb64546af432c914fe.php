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
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $_error_, "html", null, true);
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
                        <th>Lecturer</th>
                        
                        <th>Hall</th>

                    </tr>
                </thead>
                <tbody>
        ";
            // line 30
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_entities_);
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 31
                echo "                        <tr>
                            
                            <td>";
                // line 33
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "year"), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "module"), "html", null, true);
                echo "</td>
                            <td>";
                // line 35
                if (isset($context["lecturer"])) { $_lecturer_ = $context["lecturer"]; } else { $_lecturer_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lecturer_, "user_id"), "html", null, true);
                echo " </td>
                            <td><a href=\"";
                // line 36
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uosuostms_hall", array("hall" => $this->getAttribute($_entity_, "name"))), "html", null, true);
                echo "\">";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name"), "html", null, true);
                echo "</a></td>
                            
                        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    </tbody>
                </table>  
";
        }
        // line 43
        echo "              
              For reservations or any changes contact <br>
              Phone number : 045-3453019 <br>
              
              </br>
        <form  method =\"POST\" action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
        echo "\">
                    
              <button type=\"submit\" class=\"btn\">OK</button>
            </form>
        
        ";
    }

    // line 55
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 56
        echo "
              <ul class=\"nav nav-list\">
              <li  class=\"nav-header\" ><b>Home</b></li>
              
              ";
        // line 60
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "student")) {
            echo "    
              
              <li class=\"nav-header\">Student</li>
              <li ><a  href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
            echo "\">Search Timetable </a></li>
              <li  ><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
            echo "\">Find Free Halls</a></li>
              
              ";
        }
        // line 67
        echo "              
              ";
        // line 68
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "lecturer")) {
            echo "   
              
              <li class=\"nav-header\">Lecturer</li>
              <li ><a  href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("uosuostms_fttl");
            echo "\">Search Timetable </a></li>
              <li class=\"active\" ><a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
            echo "\">Find All</a></li>    
              ";
        }
        // line 74
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
        return array (  177 => 74,  172 => 72,  168 => 71,  161 => 68,  158 => 67,  152 => 64,  148 => 63,  141 => 60,  135 => 56,  132 => 55,  122 => 48,  115 => 43,  110 => 40,  96 => 36,  91 => 35,  86 => 34,  81 => 33,  77 => 31,  72 => 30,  55 => 15,  53 => 14,  50 => 13,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
