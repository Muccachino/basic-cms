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

/* user.html */
class __TwigTemplate_2165ce9b352c06cefb7c82cf67fc9268 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "user.html", 1);
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
<main class=\"container mx-auto mt-10 mb-10\">
    <section>
        <h1 class=\"text-3xl text-center\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 10), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
        <p class=\"text-center text-gray-500\">Joined: ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 11), "d M. Y"), "html", null, true);
        yield "</p>
        ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 12)) {
            // line 13
            yield "        <img alt=\"Profile Picture\" class=\"mx-auto\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 13), "html", null, true);
            yield "\">
        ";
        } else {
            // line 15
            yield "        <img alt=\"No Image available\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "img/placeholder.jpg\">
        ";
        }
        // line 17
        yield "    </section>
    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('articles', $context, $blocks);
        // line 23
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
        yield from         $this->loadTemplate("article-list.html", "user.html", 20)->unwrap()->yield($context);
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
        return "user.html";
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
        return array (  124 => 21,  122 => 20,  119 => 19,  115 => 18,  108 => 23,  106 => 18,  103 => 17,  97 => 15,  89 => 13,  87 => 12,  83 => 11,  77 => 10,  72 => 7,  68 => 6,  58 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}

{% block title %}{{ category.name }}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}

<main class=\"container mx-auto mt-10 mb-10\">
    <section>
        <h1 class=\"text-3xl text-center\">{{user.forename}} {{user.surname}}</h1>
        <p class=\"text-center text-gray-500\">Joined: {{user.joined|date('d M. Y')}}</p>
        {% if user.profile_pic %}
        <img alt=\"Profile Picture\" class=\"mx-auto\" src=\"{{doc_root}}uploads/{{user.profile_pic}}\">
        {% else %}
        <img alt=\"No Image available\" src=\"{{doc_root}}img/placeholder.jpg\">
        {% endif %}
    </section>
    {% block articles %}
    <section class=\"flex flex-wrap p-8\" id=\"content\">
        {% include 'article-list.html' %}
    </section>
    {% endblock %}
</main>

{% endblock %}", "user.html", "C:\\xampp\\htdocs\\cms_system\\templates\\user.html");
    }
}
