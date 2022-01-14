<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/catalog_theme/templates/page.html.twig */
class __TwigTemplate_00d07d917492444fdbbfdb6616be0a9486fc619adf07ca15028995e34395ed8d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
      ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
      ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
      ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "    </header>
    ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 50)) {
            // line 51
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 52, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 57
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 57)) {
            // line 58
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 65
            echo "    ";
        }
        // line 66
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "    </div>
    ";
        // line 95
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 95) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 95)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 95))) {
            // line 96
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 97, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
          ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
          ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 104
        echo "    <footer class=\"site-footer\">
      ";
        // line 105
        $this->displayBlock('footer', $context, $blocks);
        // line 122
        echo "    </footer>
  </div>
</div>
";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 8) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 8)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 8))) {
            // line 9
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 9, $this->source), "html", null, true);
            echo ">
            ";
            // line 10
            if (($context["container_navbar"] ?? null)) {
                // line 11
                echo "            <div class=\"container\">
              ";
            }
            // line 13
            echo "
              ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
              ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 15)) {
                // line 16
                echo "                <div class=\"form-inline navbar-form float-right\">
                  ";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 20
            echo "              ";
            if (($context["container_navbar"] ?? null)) {
                // line 21
                echo "            </div>
            ";
            }
            // line 23
            echo "          </nav>
        ";
        }
        // line 25
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 25, $this->source), "html", null, true);
        echo ">
          ";
        // line 26
        if (($context["container_navbar"] ?? null)) {
            // line 27
            echo "          <div class=\"container\">
            ";
        }
        // line 29
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
            ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 30) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 30))) {
            // line 31
            echo "              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
                ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
                ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 34)) {
                // line 35
                echo "                  <div class=\"form-inline navbar-form float-right\">
                    ";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 39
            echo "              </div>
            ";
        }
        // line 41
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 42
            echo "              <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 44
        echo "            ";
        if (($context["container_navbar"] ?? null)) {
            // line 45
            echo "          </div>
          ";
        }
        // line 47
        echo "        </nav>
      ";
    }

    // line 58
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 60, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 67
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 68, $this->source), "html", null, true);
        echo "\">
          ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            <main";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 71, $this->source), "html", null, true);
        echo ">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
              </section>
            </main>
            ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 77)) {
            // line 78
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 78, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 84
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 84)) {
            // line 85
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 85, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 91
        echo "          </div>
        </div>
      ";
    }

    // line 105
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 106, $this->source), "html", null, true);
        echo "\">
          ";
        // line 107
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 107) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 107)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 107)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 107))) {
            // line 108
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
              ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
              ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
              ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 115
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 115)) {
            // line 116
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 120
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/catalog_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 120,  364 => 117,  361 => 116,  358 => 115,  352 => 112,  348 => 111,  344 => 110,  340 => 109,  337 => 108,  335 => 107,  330 => 106,  326 => 105,  320 => 91,  313 => 87,  307 => 85,  304 => 84,  297 => 80,  291 => 78,  289 => 77,  283 => 74,  277 => 71,  272 => 69,  267 => 68,  263 => 67,  255 => 61,  251 => 60,  248 => 59,  244 => 58,  239 => 47,  235 => 45,  232 => 44,  228 => 42,  225 => 41,  221 => 39,  215 => 36,  212 => 35,  210 => 34,  206 => 33,  202 => 31,  200 => 30,  195 => 29,  191 => 27,  189 => 26,  184 => 25,  180 => 23,  176 => 21,  173 => 20,  167 => 17,  164 => 16,  162 => 15,  158 => 14,  155 => 13,  151 => 11,  149 => 10,  144 => 9,  141 => 8,  137 => 7,  130 => 122,  128 => 105,  125 => 104,  118 => 100,  114 => 99,  110 => 98,  106 => 97,  103 => 96,  101 => 95,  98 => 94,  96 => 67,  93 => 66,  90 => 65,  87 => 58,  84 => 57,  77 => 53,  73 => 52,  70 => 51,  68 => 50,  65 => 49,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/catalog_theme/templates/page.html.twig", "/var/www/artem/web/themes/custom/catalog_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 7, "if" => 50);
        static $filters = array("t" => 3, "escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
