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

/* admin/categories.html */
class __TwigTemplate_d65f09da400279c851511cc8e41970f4 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/categories.html", 1);
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
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</p>
        ";
        }
        // line 13
        yield "        ";
        if (($context["success"] ?? null)) {
            // line 14
            yield "        <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "</p>
        ";
        }
        // line 16
        yield "
        <h1 class=\"text-4xl text-blue-500 mb-8\">Categories</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a
                href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/category\">Add a new
            Category</a></button>
    </header>

    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700\">
        <tr>
            <th class=\"px-6 py-3\">Name</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 33
            yield "        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/category/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "\">Edit</a></td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/category-delete/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\">Delete</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        </tbody>
    </table>
</main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/categories.html";
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
        return array (  144 => 41,  133 => 38,  126 => 36,  121 => 34,  118 => 33,  114 => 32,  98 => 19,  93 => 16,  87 => 14,  84 => 13,  78 => 11,  76 => 10,  71 => 7,  67 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html\" %}

{% block title %}{{category.name}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}

<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        {% if error %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{error}}</p>
        {% endif %}
        {% if success %}
        <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">{{success}}</p>
        {% endif %}

        <h1 class=\"text-4xl text-blue-500 mb-8\">Categories</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a
                href=\"{{doc_root}}admin/category\">Add a new
            Category</a></button>
    </header>

    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700\">
        <tr>
            <th class=\"px-6 py-3\">Name</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
        {% for category in categories %}
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{category.name}}</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/category/{{category.id}}\">Edit</a></td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/category-delete/{{category.id}}\">Delete</a></td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
</main>

{% endblock %}", "admin/categories.html", "C:\\xampp\\htdocs\\cms_system\\templates\\admin\\categories.html");
    }
}
