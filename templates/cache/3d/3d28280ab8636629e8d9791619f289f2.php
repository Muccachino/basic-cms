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

/* admin/articles.html */
class __TwigTemplate_213e4c2d9b9b0cc89c3ecd8c5e81509b extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/articles.html", 1);
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
        <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/article\">Add
            a new
            Article</a></button>
    </header>

    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700\">
        <tr>
            <th class=\"px-6 py-3\">Image</th>
            <th class=\"px-6 py-3\">Title</th>
            <th class=\"px-6 py-3\">Created</th>
            <th class=\"px-6 py-3\">Category</th>
            <th class=\"px-6 py-3\">Published</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 37
            yield "        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">
                ";
            // line 39
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 39)) {
                // line 40
                yield "                <img alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_alt", [], "any", false, false, false, 40), "html", null, true);
                yield "\" class=\"mt-5\"
                     src=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 41), "html", null, true);
                yield "\">
                ";
            } else {
                // line 43
                yield "                <img alt=\"No image available\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "img/placeholder.php\">
                ";
            }
            // line 45
            yield "            </td>
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "created", [], "any", false, false, false, 47), "d M. Y"), "html", null, true);
            yield "</td>
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 49
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "published", [], "any", false, false, false, 49)) ? ("Yes") : ("No"));
            yield "</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/article/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51), "html", null, true);
            yield "\">Edit</a></td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/article-delete/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\">Delete</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
        return "admin/articles.html";
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
        return array (  184 => 56,  173 => 53,  166 => 51,  161 => 49,  157 => 48,  153 => 47,  149 => 46,  146 => 45,  140 => 43,  133 => 41,  128 => 40,  126 => 39,  122 => 37,  118 => 36,  97 => 18,  93 => 16,  87 => 14,  84 => 13,  78 => 11,  76 => 10,  71 => 7,  67 => 6,  57 => 4,  49 => 3,  38 => 1,);
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

        <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"{{doc_root}}admin/article\">Add
            a new
            Article</a></button>
    </header>

    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700\">
        <tr>
            <th class=\"px-6 py-3\">Image</th>
            <th class=\"px-6 py-3\">Title</th>
            <th class=\"px-6 py-3\">Created</th>
            <th class=\"px-6 py-3\">Category</th>
            <th class=\"px-6 py-3\">Published</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
        {% for article in articles %}
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">
                {% if article.image_file %}
                <img alt=\"{{article.image_alt}}\" class=\"mt-5\"
                     src=\"{{doc_root}}uploads/{{article.image_file}}\">
                {% else %}
                <img alt=\"No image available\" src=\"{{doc_root}}img/placeholder.php\">
                {% endif %}
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{article.title}}</td>
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{article.created|date('d M. Y')}}</td>
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{article.category}}</td>
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{article.published ? \"Yes\" : \"No\"}}</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/article/{{article.id}}\">Edit</a></td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/article-delete/{{article.id}}\">Delete</a></td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
</main>

{% endblock %}", "admin/articles.html", "C:\\xampp\\htdocs\\cms_system\\templates\\admin\\articles.html");
    }
}
