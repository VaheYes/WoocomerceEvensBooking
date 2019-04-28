<?php

/* @featuredplugins/index.twig */
class __TwigTemplate_f9d8b7e4de0ac53e160b711be3a01ec750191c57a952b4fd10e3601cd243a65b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@featuredplugins/index.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Featured Plugins")), "html", null, true);
        echo "</a>
    </nav>

";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "\t<section id=\"supsystic-featured-plugins\">
\t\t<div class=\"supsysticPageBundleContainer container-fluid\">
\t\t\t<div class=\"bundle-text col-md-7 col-xs-12\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get plugins bundle today and save over 80%", ($context["PPS_LANG_CODE"] ?? null))), "html", null, true);
        echo "</div>
\t\t\t<div class=\"bundle-btn col-md-5 col-xs-12\">
\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["bundleUrl"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-full btn-revert hvr-shutter-out-horizontal\" target=\"_blank\">
\t\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Check It out", ($context["PPS_LANG_CODE"] ?? null))), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<hr />
\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pluginsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "\t\t\t<div class=\"catitem col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t<div class=\"download-product-item\">
\t\t\t\t\t<div class=\"dp-thumb text-center\">
\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "img", array()), "html", null, true);
            echo "\" class=\"img-responsive wp-post-image\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "label", array()), "html", null, true);
            echo "\" />\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"dp-title\">
\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "label", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"dp-excerpt\">
\t\t\t\t\t\t<div class=\"dp-excerpt-wrapper\">
\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "desc", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"dp-buttons\">
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-full hvr-shutter-out-horizontal ";
            if (twig_test_empty($this->getAttribute($context["p"], "download", array()))) {
                echo "btn-center";
            }
            echo "\">
                            ";
            // line 44
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("More info")), "html", null, true);
            echo "
                        </a>
                        ";
            // line 46
            if ( !twig_test_empty($this->getAttribute($context["p"], "download", array()))) {
                // line 47
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "download", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-full btn-info hvr-shutter-out-horizontal\">
                                ";
                // line 48
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Download")), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 51
            echo "                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t</section>
";
    }

    public function getTemplateName()
    {
        return "@featuredplugins/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 55,  144 => 51,  138 => 48,  133 => 47,  131 => 46,  126 => 44,  118 => 43,  111 => 39,  103 => 34,  99 => 33,  90 => 29,  86 => 28,  81 => 25,  77 => 24,  69 => 19,  65 => 18,  60 => 16,  56 => 14,  53 => 13,  43 => 8,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@featuredplugins/index.twig", "/var/www/html/tours/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Featuredplugins/views/index.twig");
    }
}
