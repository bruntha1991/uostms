<?php

/* uosuostmsBundle:Default:findttl.html.twig */
class __TwigTemplate_4508f8527fe981fa1317ef7b86cdd19fe054a87cb7cba4a57214fe81b157c200 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("uosuostms_fttlr");
        echo "\">
        
        
        
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
        <input type=\"date\" name=\"date\">
        <br>
          
        
              <button type=\"submit\" class=\"btn\">Search</button>
            </form>    
        
        ";
    }

    // line 34
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 35
        echo "
              <ul class=\"nav nav-list\">
              <li  class=\"nav-header\" ><b>Home</b></li>
              
              ";
        // line 39
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "student")) {
            echo "    
              
              <li class=\"nav-header\">Student</li>
              <li ><a  href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
            echo "\">Find Free Halls</a></li>
              
              ";
        }
        // line 46
        echo "              
              ";
        // line 47
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "lecturer")) {
            echo "   
              
              <li class=\"nav-header\">Lecturer</li>
              <li class=\"active\"><a  href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("uosuostms_fttl");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
            echo "\">Find All</a></li>    
              ";
        }
        // line 53
        echo "              </ul>   
              
";
    }

    public function getTemplateName()
    {
        return "uosuostmsBundle:Default:findttl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 53,  107 => 51,  103 => 50,  96 => 47,  93 => 46,  87 => 43,  83 => 42,  76 => 39,  70 => 35,  67 => 34,  35 => 5,  32 => 4,  29 => 3,);
    }
}
