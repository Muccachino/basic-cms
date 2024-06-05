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

/* index.html */
class __TwigTemplate_9c41fcd3503a32a5a6e1d87bce7c790c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
";
        // line 7
        yield from $this->unwrap()->yieldBlock('articles', $context, $blocks);
        // line 12
        yield "
";
        return; yield '';
    }

    // line 7
    public function block_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "<section class=\"flex flex-wrap p-8\" id=\"content\">
    ";
        // line 9
        yield from         $this->loadTemplate("article-list.html", "index.html", 9)->unwrap()->yield($context);
        // line 10
        yield "</section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html";
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
        return array (  81 => 10,  79 => 9,  76 => 8,  72 => 7,  66 => 12,  64 => 7,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}

{% block title %}{{title}}{% endblock %}

{% block content %}

{% block articles %}
<section class=\"flex flex-wrap p-8\" id=\"content\">
    {% include 'article-list.html' %}
</section>
{% endblock %}

{% endblock %}", "index.html", "C:\\xampp\\htdocs\\cms_system\\templates\\index.html");
    }
}
