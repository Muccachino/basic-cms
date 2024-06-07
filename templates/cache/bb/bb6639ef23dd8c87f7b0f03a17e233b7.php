<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html */
class __TwigTemplate_ffea5017b5ffc8abffad088433994377 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"";
        // line 7
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        yield "\"
          name=\"description\">
    <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "css/output.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <nav class=\"log-in register bg-gray-100\">
        ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 14) == 0)) {
            // line 15
            yield "        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "login\">Login</a>
            </li>
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "register\">Register</a>
            </li>
        </ul>
        ";
        } else {
            // line 24
            yield "        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\"
                   href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "user/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 27), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "forename", [], "any", false, false, false, 27), "html", null, true);
            yield "</a>
            </li>
            ";
            // line 29
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 29) == "admin")) {
                // line 30
                yield "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "admin/index\">Admin</a>
            </li>
            ";
            }
            // line 34
            yield "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "logout\">Logout</a>
            </li>
            ";
        }
        // line 38
        yield "        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "index\">
                <img alt=\"IT-Logo\" src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "img/page-logo.png\" width=\"100\">
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">IT-News-Blog</span>
            </a>
        </div>
        <nav>
            <button aria-controls=\"navbar-default\" aria-expanded=\"false\"
                    class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\"
                    data-collapse-toggle=\"navbar-default\" type=\"button\">
                <span class=\"sr-only\">Open main menu</span>
                <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"none\" viewBox=\"0 0 17 14\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M1 1h15M1 7h15M1 13h15\" stroke=\"currentColor\" stroke-linecap=\"round\"
                          stroke-linejoin=\"round\"
                          stroke-width=\"2\"/>
                </svg>
            </button>
            <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-default\">
                <ul class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\"
                    id=\"menu\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 63
            yield "                    <li>
                        <a class=\"block py-2 px-3 bg-blue-700 rounded
                         ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 65) == ($context["section"] ?? null))) {
                yield "text-pink-600";
            } else {
                yield "md:text-blue-600";
            }
            // line 66
            yield "                          hover:text-pink-600 md:bg-transparent md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "category/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 67), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "seo_title", [], "any", false, false, false, 67), "html", null, true);
            yield "\">
                            ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 68), "html", null, true);
            yield "
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                    <li>
                        <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "search\">
                            <object class=\"pointer-events-none\" data=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "/img/material-search.svg\"
                                    type=\"image/svg+xml\">
                                <img alt=\"Search\" src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "img/material-search.png\">
                            </object>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
";
        // line 85
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 87
        yield "<footer class=\"mx-auto bg-slate-50 p-4 flex justify-around\">
    <div>
        &copy; edvgraz ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
    </div>
    <div>
        <a href=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "contact\">Contact</a>
    </div>
</footer>
</body>
</html>


";
        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "IT-News";
        return; yield '';
    }

    // line 7
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "All about IT and News from Software Development and Hardware";
        return; yield '';
    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  250 => 85,  242 => 7,  234 => 6,  221 => 92,  215 => 89,  211 => 87,  209 => 85,  197 => 76,  192 => 74,  188 => 73,  185 => 72,  175 => 68,  167 => 67,  164 => 66,  158 => 65,  154 => 63,  150 => 62,  128 => 43,  124 => 42,  118 => 38,  112 => 35,  109 => 34,  103 => 31,  100 => 30,  98 => 29,  89 => 27,  84 => 24,  77 => 20,  71 => 17,  67 => 15,  65 => 14,  57 => 9,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>{% block title %}IT-News{% endblock %}</title>
    <meta content=\"{% block description %}All about IT and News from Software Development and Hardware{% endblock %}\"
          name=\"description\">
    <link href=\"{{doc_root}}css/output.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <nav class=\"log-in register bg-gray-100\">
        {% if session.id == 0 %}
        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}login\">Login</a>
            </li>
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}register\">Register</a>
            </li>
        </ul>
        {% else %}
        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\"
                   href=\"{{doc_root}}user/{{session.id}}\">{{session.forename}}</a>
            </li>
            {% if session.role == 'admin' %}
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}admin/index\">Admin</a>
            </li>
            {% endif %}
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}logout\">Logout</a>
            </li>
            {% endif %}
        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"{{doc_root}}index\">
                <img alt=\"IT-Logo\" src=\"{{doc_root}}img/page-logo.png\" width=\"100\">
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">IT-News-Blog</span>
            </a>
        </div>
        <nav>
            <button aria-controls=\"navbar-default\" aria-expanded=\"false\"
                    class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\"
                    data-collapse-toggle=\"navbar-default\" type=\"button\">
                <span class=\"sr-only\">Open main menu</span>
                <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"none\" viewBox=\"0 0 17 14\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M1 1h15M1 7h15M1 13h15\" stroke=\"currentColor\" stroke-linecap=\"round\"
                          stroke-linejoin=\"round\"
                          stroke-width=\"2\"/>
                </svg>
            </button>
            <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-default\">
                <ul class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\"
                    id=\"menu\">
                    {% for link in navigation %}
                    <li>
                        <a class=\"block py-2 px-3 bg-blue-700 rounded
                         {% if (link.id == section) %}text-pink-600{% else %}md:text-blue-600{% endif %}
                          hover:text-pink-600 md:bg-transparent md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"{{doc_root}}category/{{link.id}}/{{ link.seo_title }}\">
                            {{ link.name }}
                        </a>
                    </li>
                    {% endfor %}
                    <li>
                        <a href=\"{{doc_root}}search\">
                            <object class=\"pointer-events-none\" data=\"{{doc_root}}/img/material-search.svg\"
                                    type=\"image/svg+xml\">
                                <img alt=\"Search\" src=\"{{doc_root}}img/material-search.png\">
                            </object>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
{% block content %}
{% endblock %}
<footer class=\"mx-auto bg-slate-50 p-4 flex justify-around\">
    <div>
        &copy; edvgraz {{ 'now'|date('Y') }}
    </div>
    <div>
        <a href=\"{{doc_root}}contact\">Contact</a>
    </div>
</footer>
</body>
</html>


", "layout.html", "C:\\xampp\\htdocs\\cms_system\\templates\\layout.html");
    }
}
