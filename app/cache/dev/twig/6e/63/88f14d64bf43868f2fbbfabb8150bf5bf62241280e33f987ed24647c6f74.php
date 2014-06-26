<?php

/* uosuostmsBundle:Default:findttlr.html.twig */
class __TwigTemplate_6e6388f14d64bf43868f2fbbfabb8150bf5bf62241280e33f987ed24647c6f74 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("uosuostms_fttl");
        echo "\">
        
   ";
        // line 17
        if ((!array_key_exists("error", $context))) {
            echo "     
                
        <label for=\"timeslot\">Date&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "date"), "html", null, true);
            echo "</label>
        <label for=\"year\">Year&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
            // line 20
            echo twig_escape_filter($this->env, $this->getContext($context, "year"), "html", null, true);
            echo "</label>        
        <label for=\"hall\">Hall&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            // line 21
            echo twig_escape_filter($this->env, $this->getContext($context, "hall"), "html", null, true);
            echo "</label>
        
        <label for=\"module\">Module&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "module"), "html", null, true);
            echo "</label>
        
        
        
   ";
        }
        // line 27
        echo "     
              
              <button type=\"submit\" class=\"btn\">OK</button>
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
        if (($this->getContext($context, "job") == "student")) {
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
        if (($this->getContext($context, "job") == "lecturer")) {
            echo "   
              
              <li class=\"nav-header\">Lecturer</li>
              <li class=\"active\" ><a  href=\"";
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
        return "uosuostmsBundle:Default:findttlr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  131 => 51,  127 => 50,  121 => 47,  118 => 46,  112 => 43,  108 => 42,  102 => 39,  96 => 35,  93 => 34,  84 => 27,  76 => 23,  71 => 21,  67 => 20,  63 => 19,  58 => 17,  53 => 15,  49 => 13,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
