<?php

/* DoctrineMongoDBBundle:Collector:mongodb.html.twig */
class __TwigTemplate_be64861316fae46ad628e620b3bc23e09878588bb35533155b8452eec701b918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b35b40da2cf11b97285a8101defda033718c33f6c66551245f81f703aaa4182 = $this->env->getExtension("native_profiler");
        $__internal_3b35b40da2cf11b97285a8101defda033718c33f6c66551245f81f703aaa4182->enter($__internal_3b35b40da2cf11b97285a8101defda033718c33f6c66551245f81f703aaa4182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b35b40da2cf11b97285a8101defda033718c33f6c66551245f81f703aaa4182->leave($__internal_3b35b40da2cf11b97285a8101defda033718c33f6c66551245f81f703aaa4182_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_525d2dd3f48cce23076016078d93462364c51f7c3f49feb2b225f286537a867c = $this->env->getExtension("native_profiler");
        $__internal_525d2dd3f48cce23076016078d93462364c51f7c3f49feb2b225f286537a867c->enter($__internal_525d2dd3f48cce23076016078d93462364c51f7c3f49feb2b225f286537a867c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
        <span class=\"sf-toolbar-status\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 14)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_525d2dd3f48cce23076016078d93462364c51f7c3f49feb2b225f286537a867c->leave($__internal_525d2dd3f48cce23076016078d93462364c51f7c3f49feb2b225f286537a867c_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8897235a1ff11cb3015adc6995a1c8b7bd2f298bf92f36297dce6a5392127bf = $this->env->getExtension("native_profiler");
        $__internal_f8897235a1ff11cb3015adc6995a1c8b7bd2f298bf92f36297dce6a5392127bf->enter($__internal_f8897235a1ff11cb3015adc6995a1c8b7bd2f298bf92f36297dce6a5392127bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Mongo\" /></span>
    <strong>Doctrine MongoDB</strong>
    <span class=\"count\">
        <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_f8897235a1ff11cb3015adc6995a1c8b7bd2f298bf92f36297dce6a5392127bf->leave($__internal_f8897235a1ff11cb3015adc6995a1c8b7bd2f298bf92f36297dce6a5392127bf_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44640c3e1be737f8ebf992672ce6957f8a6f20281792a4723dafbc3039465710 = $this->env->getExtension("native_profiler");
        $__internal_44640c3e1be737f8ebf992672ce6957f8a6f20281792a4723dafbc3039465710->enter($__internal_44640c3e1be737f8ebf992672ce6957f8a6f20281792a4723dafbc3039465710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <h2>Queries</h2>

    ";
        // line 30
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()))) {
            // line 31
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 35
            echo "        <ul class=\"alt\">
            ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 37
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                    <div>
                        <code>";
                // line 39
                echo twig_escape_filter($this->env, $context["query"], "html", null, true);
                echo "</code>
                    </div>
                </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </ul>
    ";
        }
        
        $__internal_44640c3e1be737f8ebf992672ce6957f8a6f20281792a4723dafbc3039465710->leave($__internal_44640c3e1be737f8ebf992672ce6957f8a6f20281792a4723dafbc3039465710_prof);

    }

    public function getTemplateName()
    {
        return "DoctrineMongoDBBundle:Collector:mongodb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 43,  141 => 39,  135 => 37,  118 => 36,  115 => 35,  109 => 31,  107 => 30,  103 => 28,  97 => 27,  86 => 22,  80 => 18,  74 => 17,  66 => 14,  60 => 11,  56 => 9,  53 => 8,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
