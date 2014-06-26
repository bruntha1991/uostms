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
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getContext($context, "year"), "html", null, true);
            echo "</label>        
        
         <label for=\"timeslot\">TimeSlot&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;  ";
            // line 21
            echo twig_escape_filter($this->env, $this->getContext($context, "timeslot"), "html", null, true);
            echo "</label>      
        
        <label for=\"timeslot\">Date&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "date"), "html", null, true);
            echo "</label>
        
        <label for=\"hall\">Hall&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "hall"), "html", null, true);
            echo "</label>
        
        <label for=\"module\">Module&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            // line 27
            echo twig_escape_filter($this->env, $this->getContext($context, "module"), "html", null, true);
            echo "</label>
        
        <label for=\"lecturer\">Lecturer &nbsp;:   &nbsp;&nbsp; ";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "lecturer"), "html", null, true);
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
        if (($this->getContext($context, "job") == "student")) {
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
        if (($this->getContext($context, "job") == "lecturer")) {
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
        return array (  146 => 57,  141 => 55,  137 => 54,  131 => 51,  128 => 50,  122 => 47,  118 => 46,  112 => 43,  106 => 39,  103 => 38,  94 => 31,  88 => 29,  83 => 27,  78 => 25,  73 => 23,  68 => 21,  63 => 19,  58 => 17,  53 => 15,  49 => 13,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
