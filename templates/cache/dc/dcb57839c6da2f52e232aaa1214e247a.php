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

/* admin/category-delete.html */
class __TwigTemplate_b67047d9643e2716735dc6c56422b2fd extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/category-delete.html", 1);
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
    <h1 class=\"text-4xl text-blue-500 mb-8\">Are you sure you want to delete the category ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "?</h1>
    <div class=\"flex justify-center items-center\">
        <form action=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/category-delete/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" method=\"post\">
            <input id=\"id\" name=\"id\" type=\"hidden\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
            <button class=\" text-white bg-pink-600 p-3 m-2 rounded-md\" type=\"submit\">Yes</button>
        </form>
        <form action=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/categories/\">
            <button class=\"text-white bg-blue-500 p-3 m-2 rounded-md \" type=\"submit\">No</button>
        </form>
    </div>

</main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/category-delete.html";
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
        return array (  92 => 15,  86 => 12,  80 => 11,  75 => 9,  71 => 7,  67 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html\" %}

{% block title %}{{category.name}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}

<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    <h1 class=\"text-4xl text-blue-500 mb-8\">Are you sure you want to delete the category {{category.name}}?</h1>
    <div class=\"flex justify-center items-center\">
        <form action=\"{{doc_root}}admin/category-delete/{{id}}\" method=\"post\">
            <input id=\"id\" name=\"id\" type=\"hidden\" value=\"{{id}}\">
            <button class=\" text-white bg-pink-600 p-3 m-2 rounded-md\" type=\"submit\">Yes</button>
        </form>
        <form action=\"{{doc_root}}admin/categories/\">
            <button class=\"text-white bg-blue-500 p-3 m-2 rounded-md \" type=\"submit\">No</button>
        </form>
    </div>

</main>

{% endblock %}", "admin/category-delete.html", "C:\\xampp\\htdocs\\cms_system\\templates\\admin\\category-delete.html");
    }
}
