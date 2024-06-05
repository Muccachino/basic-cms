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

/* category.html */
class __TwigTemplate_bf5e4ecdce5e51403292e4c4406215b1 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "category.html", 1);
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
<aside class=\"flex justify-center items-center flex-col p-8\">
    <h1 class=\"text-4xl text-blue-500 mb-8\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
    <p class=\"text-gray-500\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
</aside>

";
        // line 13
        yield from $this->unwrap()->yieldBlock('articles', $context, $blocks);
        // line 18
        yield "

";
        return; yield '';
    }

    // line 13
    public function block_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "<section class=\"flex flex-wrap p-8\" id=\"content\">
    ";
        // line 15
        yield from         $this->loadTemplate("article-list.html", "category.html", 15)->unwrap()->yield($context);
        // line 16
        yield "</section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "category.html";
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
        return array (  104 => 16,  102 => 15,  99 => 14,  95 => 13,  88 => 18,  86 => 13,  80 => 10,  76 => 9,  72 => 7,  68 => 6,  58 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}

{% block title %}{{category.name}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}

<aside class=\"flex justify-center items-center flex-col p-8\">
    <h1 class=\"text-4xl text-blue-500 mb-8\">{{category.name}}</h1>
    <p class=\"text-gray-500\">{{category.description}}</p>
</aside>

{% block articles %}
<section class=\"flex flex-wrap p-8\" id=\"content\">
    {% include 'article-list.html' %}
</section>
{% endblock %}


{% endblock %}", "category.html", "C:\\xampp\\htdocs\\cms_system\\templates\\category.html");
    }
}
