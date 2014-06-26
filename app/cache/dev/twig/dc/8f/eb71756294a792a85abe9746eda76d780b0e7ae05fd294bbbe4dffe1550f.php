<?php

/* uosuostmsBundle:Default:findsub.html.twig */
class __TwigTemplate_dc8feb71756294a792a85abe9746eda76d780b0e7ae05fd294bbbe4dffe1550f extends Twig_Template
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
    <form  method =\"POST\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("uosuostms_fsr");
        echo "\">
        
        <label for=\"year\">Select Year</label>
        <select name=\"year\">
        <option value=\"1\">1st Year</option>
        <option value=\"2\">2nd Year</option>
        <option value=\"3\">3rd Year</option>
        <option value=\"4\">4th Year</option>
        </select>
        <br>
        
        <label for=\"timeslot\">Select TimeSlot</label>
        
        <select name=\"timeslot\">
        <option value=\"1\">8am - 9am</option>
        <option value=\"2\">9am - 10am</option>
        <option value=\"3\">10am - 11am</option>
        <option value=\"4\">11am - 12pm</option>
        <option value=\"5\">12pm - 1pm</option>
        <option value=\"6\">1pm - 2pm</option>
        <option value=\"7\">2pm - 3pm</option>
        <option value=\"8\">3pm - 4pm</option>
        <option value=\"9\">4pm - 5pm</option>
        </select>
        <br>
        
        <label for=\"timeslot\">Select Date</label>
        <input type=\"date\" as = YYYY-MM-DD name=\"date\">
        <br>
              
              <button type=\"submit\" class=\"btn\">Search</button>
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
              <li class=\"active\"  ><a  href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
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
        return "uosuostmsBundle:Default:findsub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 59,  111 => 57,  107 => 56,  101 => 53,  98 => 52,  92 => 49,  88 => 48,  82 => 45,  76 => 41,  73 => 40,  35 => 5,  32 => 4,  29 => 3,);
    }
}
