<?php

/* uosuostmsBundle:Default:fg3.html.twig */
class __TwigTemplate_d46959bab23f2ec35731da582c3f59a09c5af9625551e8ef843f4cdef27b9fe1 extends Twig_Template
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
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5a99088_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5a99088_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_DSC00109_1.jpg");
            // line 8
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "5a99088"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5a99088") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    
 ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "603698a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_603698a_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_DSC00111_1.jpg");
            // line 13
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "603698a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_603698a") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    
    ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5316921_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5316921_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_DSC00112_1.jpg");
            // line 18
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "5316921"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5316921") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bd3b794_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd3b794_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_DSC00113_1.jpg");
            // line 22
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "bd3b794"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd3b794") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 24
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c7bc212_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c7bc212_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_DSC00114_1.jpg");
            // line 26
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "c7bc212"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c7bc212") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 28
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5627966_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5627966_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_DSC00115_1.jpg");
            // line 30
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "5627966"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5627966") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 32
        echo "    
    
        <form  method =\"POST\" action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
        echo "\">
                    
              <button type=\"submit\" class=\"btn\">OK</button>
            </form>
        
        ";
    }

    // line 41
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 42
        echo "
              <ul class=\"nav nav-list\">
              <li  class=\"nav-header\" ><b>Home</b></li>
              
              ";
        // line 46
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "student")) {
            echo "    
              
              <li class=\"nav-header\">Student</li>
              <li ><a  href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("uosuostms_fs");
            echo "\">Search Timetable </a></li>
              <li class=\"active\" ><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("uosuostms_falll");
            echo "\">Find Free Halls</a></li>
              
              ";
        }
        // line 53
        echo "              
              ";
        // line 54
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        if (($_job_ == "lecturer")) {
            echo "   
              
              <li class=\"nav-header\">Lecturer</li>
              <li ><a  href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("uosuostms_fttl");
            echo "\">Search Timetable </a></li>
              <li ><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("uosuostms_ff");
            echo "\">Find All</a></li>    
              ";
        }
        // line 60
        echo "              </ul>   
              
";
    }

    public function getTemplateName()
    {
        return "uosuostmsBundle:Default:fg3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 60,  219 => 58,  215 => 57,  208 => 54,  205 => 53,  199 => 50,  195 => 49,  188 => 46,  182 => 42,  179 => 41,  169 => 34,  165 => 32,  149 => 30,  144 => 28,  128 => 26,  123 => 24,  107 => 22,  102 => 20,  86 => 18,  82 => 16,  79 => 15,  63 => 13,  59 => 11,  56 => 10,  40 => 8,  36 => 6,  32 => 4,  29 => 3,);
    }
}
