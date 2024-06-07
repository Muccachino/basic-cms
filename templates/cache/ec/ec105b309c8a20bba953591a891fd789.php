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

/* search.html */
class __TwigTemplate_f457e3503bc1b4f115b97bb3b241a64d extends Template
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
            'articles' => [$this, 'block_articles'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "search.html", 1);
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
<main class=\"container mx-auto\">
    <section class=\"flex flex-col justify-center items-center p-10\">
        <h1 class=\"text-3xl font-bold mt-4\">Search Results</h1>
        <form action=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "search/\" class=\"mt-4\" method=\"GET\">
            <label class=\"sr-only\" for=\"search\">Search</label>
            <input class=\"border p-2\" id=\"search\" name=\"search\" type=\"text\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_term"] ?? null), "html", null, true);
        yield "\">
            <button class=\"bg-blue-500 text-white p-2\" type=\"submit\">Search</button>
        </form>
    </section>

    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('articles', $context, $blocks);
        // line 23
        yield "
    ";
        // line 24
        if ((($context["count"] ?? null) > ($context["per_page"] ?? null))) {
            // line 25
            yield "    <section class=\"flex justify-center items-center p-4\">
        <nav>
            <ul class=\"flex justify-center items-center\">
                ";
            // line 28
            if ((($context["current_page"] ?? null) > 1)) {
                // line 29
                yield "                <li class=\"m-2\">
                    <a class=\"p-2 bg-blue-500 text-white\"
                       href=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "search/?search=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_term"] ?? null), "html", null, true);
                yield "&per_page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["per_page"] ?? null), "html", null, true);
                yield "&offset=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["offset"] ?? null) - ($context["per_page"] ?? null)), "html", null, true);
                yield "\">Previous</a>
                </li>
                ";
            }
            // line 34
            yield "
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["total_pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                yield "                <li>
                    <a class=\"p-2 text-white ";
                // line 37
                yield ((($context["i"] == ($context["current_page"] ?? null))) ? ("bg-pink-600") : ("bg-blue-500"));
                yield "\"
                       href=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "search/?search=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_term"] ?? null), "html", null, true);
                yield "&per_page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["per_page"] ?? null), "html", null, true);
                yield "&offset=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["i"] - 1) * ($context["per_page"] ?? null)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "                ";
            if ((($context["current_page"] ?? null) < ($context["total_pages"] ?? null))) {
                // line 42
                yield "                <li class=\"m-2\">
                    <a class=\"p-2 bg-blue-500 text-white\"
                       href=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "search/?search=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_term"] ?? null), "html", null, true);
                yield "&per_page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["per_page"] ?? null), "html", null, true);
                yield "&offset=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["offset"] ?? null) + ($context["per_page"] ?? null)), "html", null, true);
                yield "\">Next</a>
                </li>
                ";
            }
            // line 47
            yield "            </ul>
        </nav>
    </section>
    ";
        }
        // line 51
        yield "</main>

";
        return; yield '';
    }

    // line 18
    public function block_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "    <section class=\"flex flex-wrap p-8\" id=\"content\">
        ";
        // line 20
        yield from         $this->loadTemplate("article-list.html", "search.html", 20)->unwrap()->yield($context);
        // line 21
        yield "    </section>
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "search.html";
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
        return array (  193 => 21,  191 => 20,  188 => 19,  184 => 18,  177 => 51,  171 => 47,  159 => 44,  155 => 42,  152 => 41,  135 => 38,  131 => 37,  128 => 36,  124 => 35,  121 => 34,  109 => 31,  105 => 29,  103 => 28,  98 => 25,  96 => 24,  93 => 23,  91 => 18,  83 => 13,  78 => 11,  72 => 7,  68 => 6,  58 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}

{% block title %}{{ category.name }}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}

<main class=\"container mx-auto\">
    <section class=\"flex flex-col justify-center items-center p-10\">
        <h1 class=\"text-3xl font-bold mt-4\">Search Results</h1>
        <form action=\"{{doc_root}}search/\" class=\"mt-4\" method=\"GET\">
            <label class=\"sr-only\" for=\"search\">Search</label>
            <input class=\"border p-2\" id=\"search\" name=\"search\" type=\"text\" value=\"{{search_term}}\">
            <button class=\"bg-blue-500 text-white p-2\" type=\"submit\">Search</button>
        </form>
    </section>

    {% block articles %}
    <section class=\"flex flex-wrap p-8\" id=\"content\">
        {% include 'article-list.html' %}
    </section>
    {% endblock %}

    {% if (count > per_page) %}
    <section class=\"flex justify-center items-center p-4\">
        <nav>
            <ul class=\"flex justify-center items-center\">
                {% if (current_page > 1) %}
                <li class=\"m-2\">
                    <a class=\"p-2 bg-blue-500 text-white\"
                       href=\"{{doc_root}}search/?search={{search_term}}&per_page={{per_page}}&offset={{offset - per_page}}\">Previous</a>
                </li>
                {% endif %}

                {% for i in 1..total_pages %}
                <li>
                    <a class=\"p-2 text-white {{ i == current_page ? 'bg-pink-600' : 'bg-blue-500' }}\"
                       href=\"{{doc_root}}search/?search={{search_term}}&per_page={{per_page}}&offset={{(i - 1) * per_page}}\">{{i}}</a>
                </li>
                {% endfor %}
                {% if (current_page < total_pages) %}
                <li class=\"m-2\">
                    <a class=\"p-2 bg-blue-500 text-white\"
                       href=\"{{doc_root}}search/?search={{search_term}}&per_page={{per_page}}&offset={{offset + per_page}}\">Next</a>
                </li>
                {% endif %}
            </ul>
        </nav>
    </section>
    {% endif %}
</main>

{% endblock %}", "search.html", "C:\\xampp\\htdocs\\cms_system\\templates\\search.html");
    }
}
