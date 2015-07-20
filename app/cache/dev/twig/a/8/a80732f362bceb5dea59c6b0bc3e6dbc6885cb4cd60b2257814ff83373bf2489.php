<?php

/* default/_source_code.html.twig */
class __TwigTemplate_a80732f362bceb5dea59c6b0bc3e6dbc6885cb4cd60b2257814ff83373bf2489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c41ba9742c128f70502b41cb59c4756529635be78eb9eb1d60e1fc14883e4c1b = $this->env->getExtension("native_profiler");
        $__internal_c41ba9742c128f70502b41cb59c4756529635be78eb9eb1d60e1fc14883e4c1b->enter($__internal_c41ba9742c128f70502b41cb59c4756529635be78eb9eb1d60e1fc14883e4c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_source_code.html.twig"));

        // line 9
        echo "<div class=\"section source-code\">
    <p>
        Click on this button to show the source code of the <strong>Controller</strong>
        and <strong>template</strong> used to render this page.
    </p>

    <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\"></i> Show source code
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-code\"></i> Source code used to render this page</h4>
                </div>

                <div class=\"modal-body\">
                    ";
        // line 30
        if ((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller"))) {
            // line 31
            echo "                        <h3>Controller code <small class=\"pull-right\">";
            echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file_path", array()), $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "starting_line", array()));
            echo "</small></h3>
                        <pre><code class=\"php\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "source_code", array()), "html", null, true);
            echo "</code></pre>
                    ";
        } else {
            // line 34
            echo "                        <h3>Controller code</h3>
                        <pre><code>Not available</code></pre>
                    ";
        }
        // line 37
        echo "
                    <h3>Twig template code <small class=\"pull-right\">";
        // line 38
        echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "file_path", array()), $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "starting_line", array()));
        echo "</small></h3>
                    <pre><code class=\"twig\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "source_code", array()), "html", null, true);
        echo "</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_c41ba9742c128f70502b41cb59c4756529635be78eb9eb1d60e1fc14883e4c1b->leave($__internal_c41ba9742c128f70502b41cb59c4756529635be78eb9eb1d60e1fc14883e4c1b_prof);

    }

    public function getTemplateName()
    {
        return "default/_source_code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 39,  65 => 38,  62 => 37,  57 => 34,  52 => 32,  47 => 31,  45 => 30,  22 => 9,);
    }
}
