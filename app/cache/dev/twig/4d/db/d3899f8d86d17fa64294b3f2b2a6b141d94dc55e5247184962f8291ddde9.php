<?php

/* uosuostmsBundle:Default:hall.html.twig */
class __TwigTemplate_4ddbd3899f8d86d17fa64294b3f2b2a6b141d94dc55e5247184962f8291ddde9 extends Twig_Template
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
        // line 7
        $context["asset_base"] = "@uosuostmsBundle/Resources/public/img/slide-02.jpg";
        // line 8
        echo "        
        ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f7f8055_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f7f8055_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_slide-02_1.jpg");
            // line 11
            echo "    <img src='//files/images/slide-01.jpg'/>
";
        } else {
            // asset "f7f8055"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f7f8055") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src='//files/images/slide-01.jpg'/>
";
        }
        unset($context["asset_url"]);
        // line 13
        echo "        
    
    
        <form  method =\"POST\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
        echo "\">
                    
              <button type=\"submit\" class=\"btn\">OK</button>
            </form>
        
        ";
    }

    // line 23
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 24
        echo "
              <ul class=\"nav nav-list\">
              <li  class=\"nav-header\" ><b>Home</b></li>
              
              ";
        // line 28
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "student")) {
            echo "    
              
              <li class=\"nav-header\">Student</li>
              <li ><a  href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
            echo "\">Search Timetable </a></li>
              <li class=\"active\" ><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
            echo "\">Find Free Halls</a></li>
              
              ";
        }
        // line 35
        echo "              
              ";
        // line 36
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "lecturer")) {
            echo "   
              
              <li class=\"nav-header\">Lecturer</li>
              <li ><a  href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("uosuostms_fttl");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
            echo "\">Find All</a></li>    
              ";
        }
        // line 42
        echo "              </ul>   
              
";
    }

    public function getTemplateName()
    {
        return "uosuostmsBundle:Default:hall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  111 => 40,  107 => 39,  100 => 36,  97 => 35,  91 => 32,  87 => 31,  80 => 28,  74 => 24,  71 => 23,  61 => 16,  56 => 13,  46 => 11,  42 => 9,  39 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
