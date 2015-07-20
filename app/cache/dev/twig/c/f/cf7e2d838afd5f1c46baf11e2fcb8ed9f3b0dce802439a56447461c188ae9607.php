<?php

/* base.html.twig */
class __TwigTemplate_cf7e2d838afd5f1c46baf11e2fcb8ed9f3b0dce802439a56447461c188ae9607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb9f803eb01292111e3a4bd4e5ff98bf7bf842d92ca953b32805e72204742dd9 = $this->env->getExtension("native_profiler");
        $__internal_eb9f803eb01292111e3a4bd4e5ff98bf7bf842d92ca953b32805e72204742dd9->enter($__internal_eb9f803eb01292111e3a4bd4e5ff98bf7bf842d92ca953b32805e72204742dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>

    <body id=\"";
        // line 31
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">


        ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 97
        echo "
        <div class=\"container body-container\">
            ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 154
        echo "        </div>

        ";
        // line 156
        $this->displayBlock('footer', $context, $blocks);
        // line 176
        echo "
        ";
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        // line 195
        echo "


    </body>
</html>
";
        
        $__internal_eb9f803eb01292111e3a4bd4e5ff98bf7bf842d92ca953b32805e72204742dd9->leave($__internal_eb9f803eb01292111e3a4bd4e5ff98bf7bf842d92ca953b32805e72204742dd9_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_39b96f469273d0532666496fc757fd4f8fa170a3407a3738827d3b4103c4875c = $this->env->getExtension("native_profiler");
        $__internal_39b96f469273d0532666496fc757fd4f8fa170a3407a3738827d3b4103c4875c->enter($__internal_39b96f469273d0532666496fc757fd4f8fa170a3407a3738827d3b4103c4875c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "RDF Demo";
        
        $__internal_39b96f469273d0532666496fc757fd4f8fa170a3407a3738827d3b4103c4875c->leave($__internal_39b96f469273d0532666496fc757fd4f8fa170a3407a3738827d3b4103c4875c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_586127ce97f6cd5c19731a5e33507cd216de74a1e2e3a48d7ea79fbe19687e4f = $this->env->getExtension("native_profiler");
        $__internal_586127ce97f6cd5c19731a5e33507cd216de74a1e2e3a48d7ea79fbe19687e4f->enter($__internal_586127ce97f6cd5c19731a5e33507cd216de74a1e2e3a48d7ea79fbe19687e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_586127ce97f6cd5c19731a5e33507cd216de74a1e2e3a48d7ea79fbe19687e4f->leave($__internal_586127ce97f6cd5c19731a5e33507cd216de74a1e2e3a48d7ea79fbe19687e4f_prof);

    }

    // line 31
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7b72ca93016ee36ed53f19dabb2c7cb7bd24ac5fbd2382638964726fe437de76 = $this->env->getExtension("native_profiler");
        $__internal_7b72ca93016ee36ed53f19dabb2c7cb7bd24ac5fbd2382638964726fe437de76->enter($__internal_7b72ca93016ee36ed53f19dabb2c7cb7bd24ac5fbd2382638964726fe437de76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_7b72ca93016ee36ed53f19dabb2c7cb7bd24ac5fbd2382638964726fe437de76->leave($__internal_7b72ca93016ee36ed53f19dabb2c7cb7bd24ac5fbd2382638964726fe437de76_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_152678c3f46a423de14a8fe5ee58f913087c081791986a1d69eaa99fb034e234 = $this->env->getExtension("native_profiler");
        $__internal_152678c3f46a423de14a8fe5ee58f913087c081791986a1d69eaa99fb034e234->enter($__internal_152678c3f46a423de14a8fe5ee58f913087c081791986a1d69eaa99fb034e234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">

                            <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                RDF Demo Application With Symfony 2
                            </a>
                            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("sf2.png"), "html", null, true);
        echo "\" style='float:right;'/>

                            <h1 style=\"color:yellow;font-size:52px;\">Demo With EasyRDF2</h1>



                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>


                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                ";
        // line 62
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 82
        echo "
                                ";
        // line 83
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 84
            echo "                                    <li>
                                        <a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i> Logout
                                        </a>
                                    </li>
                                ";
        }
        // line 90
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </header>

        ";
        
        $__internal_152678c3f46a423de14a8fe5ee58f913087c081791986a1d69eaa99fb034e234->leave($__internal_152678c3f46a423de14a8fe5ee58f913087c081791986a1d69eaa99fb034e234_prof);

    }

    // line 62
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_5907946b78bd47012a8c7806f035dfe3eefccd49253f1922c4f806d210d56a20 = $this->env->getExtension("native_profiler");
        $__internal_5907946b78bd47012a8c7806f035dfe3eefccd49253f1922c4f806d210d56a20->enter($__internal_5907946b78bd47012a8c7806f035dfe3eefccd49253f1922c4f806d210d56a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 63
        echo "                                    <li>
                                        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\"></i> Homepage
                                        </a>
                                    </li>

                                    ";
        // line 74
        echo "                                    ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 75
            echo "                                        <li>
                                            <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\"></i> Backend
                                            </a>
                                        </li>
                                    ";
        }
        // line 81
        echo "                                ";
        
        $__internal_5907946b78bd47012a8c7806f035dfe3eefccd49253f1922c4f806d210d56a20->leave($__internal_5907946b78bd47012a8c7806f035dfe3eefccd49253f1922c4f806d210d56a20_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9220c8b73c929e0c8a06584dbe35f79b8589e865cb84adb9b198799c320e8cb = $this->env->getExtension("native_profiler");
        $__internal_e9220c8b73c929e0c8a06584dbe35f79b8589e865cb84adb9b198799c320e8cb->enter($__internal_e9220c8b73c929e0c8a06584dbe35f79b8589e865cb84adb9b198799c320e8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 102
        $this->displayBlock('main', $context, $blocks);
        // line 103
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 106
        $this->displayBlock('sidebar', $context, $blocks);
        // line 151
        echo "                    </div>
                </div>
            ";
        
        $__internal_e9220c8b73c929e0c8a06584dbe35f79b8589e865cb84adb9b198799c320e8cb->leave($__internal_e9220c8b73c929e0c8a06584dbe35f79b8589e865cb84adb9b198799c320e8cb_prof);

    }

    // line 102
    public function block_main($context, array $blocks = array())
    {
        $__internal_444ac62c3e0145d09bbeb44a3a933b3cb75bf3e195cf39894675e70039dc4257 = $this->env->getExtension("native_profiler");
        $__internal_444ac62c3e0145d09bbeb44a3a933b3cb75bf3e195cf39894675e70039dc4257->enter($__internal_444ac62c3e0145d09bbeb44a3a933b3cb75bf3e195cf39894675e70039dc4257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_444ac62c3e0145d09bbeb44a3a933b3cb75bf3e195cf39894675e70039dc4257->leave($__internal_444ac62c3e0145d09bbeb44a3a933b3cb75bf3e195cf39894675e70039dc4257_prof);

    }

    // line 106
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d8a7d32cdb0b57035f58d62b2fdb0c2f3d1f25768b533998843daa4b18962850 = $this->env->getExtension("native_profiler");
        $__internal_d8a7d32cdb0b57035f58d62b2fdb0c2f3d1f25768b533998843daa4b18962850->enter($__internal_d8a7d32cdb0b57035f58d62b2fdb0c2f3d1f25768b533998843daa4b18962850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 107
        echo "                            <div class=\"section about\">
                                <div class=\"well well-lg\">
                                    <p>
                                        This is a <strong>demo application</strong> built in the
                                        Symfony Framework to illustrate the recommended way of
                                        developing Symfony applications.
                                    </p>
                                    <p>
                                        For more information, check out the
                                        <a href=\"http://symfony.com/doc\">Symfony Documentation</a>.
                                    </p>
                                </div>

                                <div class=\"well well-lg\">
                                    <p>
                                       <strong>Requirements</strong>

                                            <li>PHP 5.3 or higher</li>
                                            PDO-SQLite PHP extension enabled;
                                            and the usual Symfony application requirements.
                                    </p>
                                    <p>
                                        For more information, check out the
                                        <a href=\"http://symfony.com/doc\">Symfony Documentation</a>.
                                    </p>
                                </div>

                                  <div class=\"well well-lg\">
                                    <p>
                              If you have PHP 5.4 or higher, there is no need to configure a virtual host in your web server to access the application. Just use the built-in web server:

                                \$ cd symfony-demo/
                                \$ php app/console server:run

                                This command will start a web server for the Symfony application. Now you can access the application in your browser at http://localhost:8000.
                                    </p>
                                    <p>
                                        For more information, check out the
                                        <a href=\"http://symfony.com/doc\">Symfony Documentation</a>.
                                    </p>
                                </div>

                            </div>
                        ";
        
        $__internal_d8a7d32cdb0b57035f58d62b2fdb0c2f3d1f25768b533998843daa4b18962850->leave($__internal_d8a7d32cdb0b57035f58d62b2fdb0c2f3d1f25768b533998843daa4b18962850_prof);

    }

    // line 156
    public function block_footer($context, array $blocks = array())
    {
        $__internal_74de36dbcf43b4edeb73191814a185336ab6f051615acdf6b00aedd5743031e2 = $this->env->getExtension("native_profiler");
        $__internal_74de36dbcf43b4edeb73191814a185336ab6f051615acdf6b00aedd5743031e2->enter($__internal_74de36dbcf43b4edeb73191814a185336ab6f051615acdf6b00aedd5743031e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 157
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 161
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project LIG Grenoble</p>
                            <p>LIG License , Joseph Fourier University - GRENOBLE FRANCE</p>
                            <p>Developed by nadir.fouka@imag.fr ; Big DATA Developer At CNRS</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"http://symfony.com/blog\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_74de36dbcf43b4edeb73191814a185336ab6f051615acdf6b00aedd5743031e2->leave($__internal_74de36dbcf43b4edeb73191814a185336ab6f051615acdf6b00aedd5743031e2_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ec97ab1d932c3504e3c72d08f54c241dde4b6bad57829ddd1bbbd9e5f7f81ee = $this->env->getExtension("native_profiler");
        $__internal_7ec97ab1d932c3504e3c72d08f54c241dde4b6bad57829ddd1bbbd9e5f7f81ee->enter($__internal_7ec97ab1d932c3504e3c72d08f54c241dde4b6bad57829ddd1bbbd9e5f7f81ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "        ";
        // line 186
        echo "
            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

            <script>
                \$(document).ready(function() {
                    hljs.initHighlightingOnLoad();
                });
            </script>
        ";
        
        $__internal_7ec97ab1d932c3504e3c72d08f54c241dde4b6bad57829ddd1bbbd9e5f7f81ee->leave($__internal_7ec97ab1d932c3504e3c72d08f54c241dde4b6bad57829ddd1bbbd9e5f7f81ee_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 187,  380 => 186,  378 => 178,  372 => 177,  350 => 161,  344 => 157,  338 => 156,  288 => 107,  282 => 106,  271 => 102,  262 => 151,  260 => 106,  255 => 103,  253 => 102,  249 => 100,  243 => 99,  236 => 81,  228 => 76,  225 => 75,  222 => 74,  214 => 64,  211 => 63,  205 => 62,  192 => 90,  184 => 85,  181 => 84,  179 => 83,  176 => 82,  174 => 62,  152 => 43,  146 => 40,  139 => 35,  133 => 34,  122 => 31,  113 => 25,  110 => 24,  108 => 13,  102 => 12,  90 => 10,  78 => 195,  76 => 177,  73 => 176,  71 => 156,  67 => 154,  65 => 99,  61 => 97,  59 => 34,  53 => 31,  45 => 27,  43 => 12,  38 => 10,  32 => 6,);
    }
}
