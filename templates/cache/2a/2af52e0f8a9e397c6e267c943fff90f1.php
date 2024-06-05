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

/* admin/layout.html */
class __TwigTemplate_04cad494cc586516bb15931c0ecff1f4 extends Template
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
    <script referrerpolicy=\"origin\"
            src=\"https://cdn.tiny.cloud/1/ifgutrgmovn393kg2ys4xkwq1vk7bpqk2hm9096eh2x5ao3i/tinymce/7/tinymce.min.js\"></script>
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "index.php\">
                <img alt=\"IT-Logo\" src=\"";
        // line 18
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

                    <li>
                        <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/articles.php\">Articles</a>
                    </li>
                    <li>
                        <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/categories.php\">Categories</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>

";
        // line 53
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 55
        yield "
<footer>
    <div class=\"mx-auto bg-slate-50  p-4\">
        &copy; edvgraz <?= date( 'Y' ); ?>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield " Admin-Area";
        return; yield '';
    }

    // line 7
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 53
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
        return "admin/layout.html";
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
        return array (  149 => 53,  141 => 7,  132 => 6,  118 => 55,  116 => 53,  104 => 44,  97 => 40,  72 => 18,  68 => 17,  57 => 9,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>{% block title %}{{title}} Admin-Area{% endblock %}</title>
    <meta content=\"{% block description %}{{description}}{% endblock %}\"
          name=\"description\">
    <link href=\"{{doc_root}}css/output.css\" rel=\"stylesheet\" type=\"text/css\">
    <script referrerpolicy=\"origin\"
            src=\"https://cdn.tiny.cloud/1/ifgutrgmovn393kg2ys4xkwq1vk7bpqk2hm9096eh2x5ao3i/tinymce/7/tinymce.min.js\"></script>
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"{{doc_root}}index.php\">
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

                    <li>
                        <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"{{doc_root}}admin/articles.php\">Articles</a>
                    </li>
                    <li>
                        <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"{{doc_root}}admin/categories.php\">Categories</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>

{% block content %}
{% endblock %}

<footer>
    <div class=\"mx-auto bg-slate-50  p-4\">
        &copy; edvgraz <?= date( 'Y' ); ?>
    </div>
</footer>
</body>
</html>

", "admin/layout.html", "C:\\xampp\\htdocs\\cms_system\\templates\\admin\\layout.html");
    }
}
