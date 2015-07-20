<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ea9ecfbf8f9afa15bd32775537104a93fa97e9c8e8b43631eebedcd5c167d68b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7d8c78c2165e414d4ad15f9a278f7de24f1d3a07c26de6600aae67056740b4e = $this->env->getExtension("native_profiler");
        $__internal_d7d8c78c2165e414d4ad15f9a278f7de24f1d3a07c26de6600aae67056740b4e->enter($__internal_d7d8c78c2165e414d4ad15f9a278f7de24f1d3a07c26de6600aae67056740b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d8c78c2165e414d4ad15f9a278f7de24f1d3a07c26de6600aae67056740b4e->leave($__internal_d7d8c78c2165e414d4ad15f9a278f7de24f1d3a07c26de6600aae67056740b4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e845f6bfcf3213e353c4d46c0d7fdc1ca0d7b1a5f0af7d12ba1c94571b8c7803 = $this->env->getExtension("native_profiler");
        $__internal_e845f6bfcf3213e353c4d46c0d7fdc1ca0d7b1a5f0af7d12ba1c94571b8c7803->enter($__internal_e845f6bfcf3213e353c4d46c0d7fdc1ca0d7b1a5f0af7d12ba1c94571b8c7803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e845f6bfcf3213e353c4d46c0d7fdc1ca0d7b1a5f0af7d12ba1c94571b8c7803->leave($__internal_e845f6bfcf3213e353c4d46c0d7fdc1ca0d7b1a5f0af7d12ba1c94571b8c7803_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ac5f4fd167173bece0ff3aeb14d512910eb29135c09587d1db5867d604b5053 = $this->env->getExtension("native_profiler");
        $__internal_9ac5f4fd167173bece0ff3aeb14d512910eb29135c09587d1db5867d604b5053->enter($__internal_9ac5f4fd167173bece0ff3aeb14d512910eb29135c09587d1db5867d604b5053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ac5f4fd167173bece0ff3aeb14d512910eb29135c09587d1db5867d604b5053->leave($__internal_9ac5f4fd167173bece0ff3aeb14d512910eb29135c09587d1db5867d604b5053_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9787f89adcc48861d4e0cf63bec942101929d845025b86f98a8c3586e662e9b = $this->env->getExtension("native_profiler");
        $__internal_e9787f89adcc48861d4e0cf63bec942101929d845025b86f98a8c3586e662e9b->enter($__internal_e9787f89adcc48861d4e0cf63bec942101929d845025b86f98a8c3586e662e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e9787f89adcc48861d4e0cf63bec942101929d845025b86f98a8c3586e662e9b->leave($__internal_e9787f89adcc48861d4e0cf63bec942101929d845025b86f98a8c3586e662e9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
