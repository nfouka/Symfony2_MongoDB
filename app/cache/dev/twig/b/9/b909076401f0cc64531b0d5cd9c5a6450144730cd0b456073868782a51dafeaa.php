<?php

/* MyAppBlogBundle:Default:index.html.twig */
class __TwigTemplate_b909076401f0cc64531b0d5cd9c5a6450144730cd0b456073868782a51dafeaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "MyAppBlogBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_610a7678847d56491284ba94f4e47278df01f09832f2b9e11c268ed8c281fd9a = $this->env->getExtension("native_profiler");
        $__internal_610a7678847d56491284ba94f4e47278df01f09832f2b9e11c268ed8c281fd9a->enter($__internal_610a7678847d56491284ba94f4e47278df01f09832f2b9e11c268ed8c281fd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_610a7678847d56491284ba94f4e47278df01f09832f2b9e11c268ed8c281fd9a->leave($__internal_610a7678847d56491284ba94f4e47278df01f09832f2b9e11c268ed8c281fd9a_prof);

    }

    // line 5
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6caf614d9428ea500e5357595500732d16c00d8f29c59fcb9c8e1fcb85ad935e = $this->env->getExtension("native_profiler");
        $__internal_6caf614d9428ea500e5357595500732d16c00d8f29c59fcb9c8e1fcb85ad935e->enter($__internal_6caf614d9428ea500e5357595500732d16c00d8f29c59fcb9c8e1fcb85ad935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_6caf614d9428ea500e5357595500732d16c00d8f29c59fcb9c8e1fcb85ad935e->leave($__internal_6caf614d9428ea500e5357595500732d16c00d8f29c59fcb9c8e1fcb85ad935e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_5917d69c2a173fb2af00df887d4eabbd3dced97fba0cb6b45046b7a3b7cc230d = $this->env->getExtension("native_profiler");
        $__internal_5917d69c2a173fb2af00df887d4eabbd3dced97fba0cb6b45046b7a3b7cc230d->enter($__internal_5917d69c2a173fb2af00df887d4eabbd3dced97fba0cb6b45046b7a3b7cc230d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
<h1>MongoDB request </h1>

<ul>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["products"]);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["products"]) {
            // line 13
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "   : <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["products"], "name", array()), "html", null, true);
            echo "</strong> : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["products"], "price", array()), "html", null, true);
            echo " </li>
     
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['products'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>

 
<h1>EasyRdf Basic Sparql Example</h1>

<ul>
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 23
            echo "        <li><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "label", array()), "html", null, true);
            echo "</strong></li>
         <li>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "country", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>


<p>Total number of countries: ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo " </p>

 
";
        
        $__internal_5917d69c2a173fb2af00df887d4eabbd3dced97fba0cb6b45046b7a3b7cc230d->leave($__internal_5917d69c2a173fb2af00df887d4eabbd3dced97fba0cb6b45046b7a3b7cc230d_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_679771ddf009ca7cd80db563faf4a31090fbd8c1099ee398145340fd2535b2a2 = $this->env->getExtension("native_profiler");
        $__internal_679771ddf009ca7cd80db563faf4a31090fbd8c1099ee398145340fd2535b2a2->enter($__internal_679771ddf009ca7cd80db563faf4a31090fbd8c1099ee398145340fd2535b2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 37
        echo $this->env->getExtension('app.source_code_extension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_679771ddf009ca7cd80db563faf4a31090fbd8c1099ee398145340fd2535b2a2->leave($__internal_679771ddf009ca7cd80db563faf4a31090fbd8c1099ee398145340fd2535b2a2_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 37,  146 => 35,  140 => 34,  129 => 29,  124 => 26,  116 => 24,  111 => 23,  107 => 22,  99 => 16,  77 => 13,  60 => 12,  54 => 8,  48 => 7,  36 => 5,  11 => 3,);
    }
}
