<?php

/* uosuostmsBundle:Default:findsubr.html.twig */
class __TwigTemplate_17a2564b4123825c4b39c6f691de05c792c9685147eece60660896e88194aef8 extends Twig_Template
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

    <form  method =\"POST\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
        echo "\">
        
   ";
        // line 17
        if ((!array_key_exists("error", $context))) {
            echo "     
        
        <label for=\"year\">Year&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
            // line 19
            if (isset($context["year"])) { $_year_ = $context["year"]; } else { $_year_ = null; }
            echo twig_escape_filter($this->env, $_year_, "html", null, true);
            echo "</label>        
        
             
        
        <label for=\"timeslot\">Date&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
            // line 23
            if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
            echo twig_escape_filter($this->env, $_date_, "html", null, true);
            echo "</label>
        
        <label for=\"hall\">Hall&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            // line 25
            if (isset($context["hall"])) { $_hall_ = $context["hall"]; } else { $_hall_ = null; }
            echo twig_escape_filter($this->env, $_hall_, "html", null, true);
            echo "</label>
        
        <label for=\"module\">Module&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            // line 27
            if (isset($context["module"])) { $_module_ = $context["module"]; } else { $_module_ = null; }
            echo twig_escape_filter($this->env, $_module_, "html", null, true);
            echo "</label>
        
        <label for=\"lecturer\">Lecturer &nbsp;:   &nbsp;&nbsp; ";
            // line 29
            if (isset($context["lecturer"])) { $_lecturer_ = $context["lecturer"]; } else { $_lecturer_ = null; }
            echo twig_escape_filter($this->env, $_lecturer_, "html", null, true);
            echo "</label>
        
   ";
        }
        // line 31
        echo "     
              
              <button type=\"submit\" class=\"btn\">OK</button>
            </form>    
        
        ";
    }

    // line 38
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 39
        echo "
              <ul class=\"nav nav-list\">
              <li  class=\"nav-header\" ><b>Home</b></li>
              
              ";
        // line 43
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "student")) {
            echo "    
              
              <li class=\"nav-header\">Student</li>
              <li class=\"active\" ><a   href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
            echo "\">Find Free Halls</a></li>
              
              ";
        }
        // line 50
        echo "              
              ";
        // line 51
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "lecturer")) {
            echo "   
              
              <li class=\"nav-header\">Lecturer</li>
              <li ><a  href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("uosuostms_fttl");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
            echo "\">Find All</a></li>    
              ";
        }
        // line 57
        echo "              </ul>   
              
";
    }

    public function getTemplateName()
    {
        return "uosuostmsBundle:Default:findsubr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 57,  146 => 55,  142 => 54,  135 => 51,  132 => 50,  126 => 47,  122 => 46,  115 => 43,  109 => 39,  106 => 38,  97 => 31,  90 => 29,  84 => 27,  78 => 25,  72 => 23,  64 => 19,  59 => 17,  54 => 15,  50 => 13,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
