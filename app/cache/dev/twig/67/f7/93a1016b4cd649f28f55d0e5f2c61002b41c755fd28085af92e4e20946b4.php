<?php

/* uosuostmsBundle:Default:home.html.twig */
class __TwigTemplate_67f793a1016b4cd649f28f55d0e5f2c61002b41c755fd28085af92e4e20946b4 extends Twig_Template
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
        echo "<div class=\"span8\">
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b6e53c9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b6e53c9_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_home_1.jpg");
            // line 7
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "b6e53c9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b6e53c9") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 8
        echo "    
        
        ";
    }

    // line 12
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 13
        echo "
              <ul class=\"nav nav-list\">
              <li class=\"active\" class=\"nav-header\" ><b>Home</b></li>
              
              ";
        // line 17
        if (($this->getContext($context, "job") == "student")) {
            echo "    
              
              <li class=\"nav-header\">Student</li>
              <li ><a  href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
            echo "\">Find Free Halls</a></li>
              
              ";
        }
        // line 24
        echo "              
              ";
        // line 25
        if (($this->getContext($context, "job") == "lecturer")) {
            echo "   
              
              <li class=\"nav-header\">Lecturer</li>
              <li ><a  href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("uosuostms_fttl");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
            echo "\">Find All</a></li>    
              ";
        }
        // line 31
        echo "              </ul>   
              
";
    }

    public function getTemplateName()
    {
        return "uosuostmsBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  97 => 29,  93 => 28,  87 => 25,  84 => 24,  78 => 21,  74 => 20,  68 => 17,  62 => 13,  59 => 12,  53 => 8,  39 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
