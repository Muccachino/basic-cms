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

/* admin/category.html */
class __TwigTemplate_016033ff133bc37eda26fc981bdc8a49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/category.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "
<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    <form action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/category/";
        (((array_key_exists("id", $context) &&  !(null === ($context["id"] ?? null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true)) : (yield ""));
        yield "\" class=\"w-full grid\" method=\"POST\">
        <h2 class=\"text-3xl text-blue-500 mb-8\">";
        // line 10
        yield ((($context["id"] ?? null)) ? ("Edit ") : ("New "));
        yield "Category</h2>
        ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 11)) {
            // line 12
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 12), "html", null, true);
            yield "</p>
        ";
        }
        // line 14
        yield "
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"name\">Name</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"name\" name=\"name\" type=\"text\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"description\">Description</label>
            <textarea
                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    id=\"description\" name=\"description\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 26), "html", null, true);
        yield "</textarea>
            <span class=\"text-red-500\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true);
        yield "</span>
        </div>

        <div class=\"p-4\">
            ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "navigation", [], "any", false, false, false, 31)) {
            // line 32
            yield "            <input checked
                   class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            ";
        } else {
            // line 36
            yield "            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            ";
        }
        // line 39
        yield "            <label class=\"ms-2 text-sm font-medium text-gray-900\" for=\"navigation\">Navigation</label>
        </div>

        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Save</button>
    </form>
</main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/category.html";
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
        return array (  137 => 39,  132 => 36,  126 => 32,  124 => 31,  117 => 27,  113 => 26,  103 => 19,  99 => 18,  93 => 14,  87 => 12,  85 => 11,  81 => 10,  75 => 9,  71 => 7,  67 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html\" %}

{% block title %}{{category.name}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}

<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    <form action=\"{{doc_root}}admin/category/{{ id ?? ''}}\" class=\"w-full grid\" method=\"POST\">
        <h2 class=\"text-3xl text-blue-500 mb-8\">{{id ? \"Edit \" : \"New \"}}Category</h2>
        {% if (errors.issue) %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{errors.issue}}</p>
        {% endif %}

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"name\">Name</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"name\" name=\"name\" type=\"text\" value=\"{{category.name}}\">
            <span class=\"text-red-500\">{{errors.name}}</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"description\">Description</label>
            <textarea
                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    id=\"description\" name=\"description\">{{category.description}}</textarea>
            <span class=\"text-red-500\">{{errors.description}}</span>
        </div>

        <div class=\"p-4\">
            {% if category.navigation %}
            <input checked
                   class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            {% else %}
            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            {% endif %}
            <label class=\"ms-2 text-sm font-medium text-gray-900\" for=\"navigation\">Navigation</label>
        </div>

        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Save</button>
    </form>
</main>

{% endblock %}", "admin/category.html", "C:\\xampp\\htdocs\\cms_system\\templates\\admin\\category.html");
    }
}
