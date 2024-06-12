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

/* edit-comment.html */
class __TwigTemplate_d59dd498e0c8527bac3e6c7c03b5c79f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("layout.html", "edit-comment.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "
<main class=\"flex flex-col flex-wrap container mx-auto mb-10\">
    <section>
        <h1 class=\"text-2xl text-blue-500 mb-4 mt-8\">Current Comment</h1>

        <p class=\"text-sm mb-2\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "created", [], "any", false, false, false, 9), "d M. Y"), "html", null, true);
        yield "</p>
        <p class=\"text-gray-500 p-2\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "content", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>

    </section>

    <section>
        <h1 class=\"text-2xl text-blue-500 mb-4 mt-8\">New Comment</h1>
        <form action=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "edit-comment/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "\" class=\"flex flex-col mt-8\" method=\"post\">
            <div>
                <textarea
                        class=\"block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                        id=\"content\" name=\"content\" placeholder=\"New Comment\"
                        rows=\"4\"></textarea>
                <span class=\"text-red-500\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 22), "html", null, true);
        yield "</span>
            </div>

            <button class=\"text-white bg-pink-600 hover:bg-blue-600 p-2 rounded-md mt-2 w-1/2\">Save</button>
        </form>
    </section>
</main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "edit-comment.html";
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
        return array (  82 => 22,  71 => 16,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}

{% block content %}

<main class=\"flex flex-col flex-wrap container mx-auto mb-10\">
    <section>
        <h1 class=\"text-2xl text-blue-500 mb-4 mt-8\">Current Comment</h1>

        <p class=\"text-sm mb-2\">{{comment.created|date('d M. Y')}}</p>
        <p class=\"text-gray-500 p-2\">{{comment.content}}</p>

    </section>

    <section>
        <h1 class=\"text-2xl text-blue-500 mb-4 mt-8\">New Comment</h1>
        <form action=\"{{doc_root}}edit-comment/{{comment.id}}\" class=\"flex flex-col mt-8\" method=\"post\">
            <div>
                <textarea
                        class=\"block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                        id=\"content\" name=\"content\" placeholder=\"New Comment\"
                        rows=\"4\"></textarea>
                <span class=\"text-red-500\">{{errors.content}}</span>
            </div>

            <button class=\"text-white bg-pink-600 hover:bg-blue-600 p-2 rounded-md mt-2 w-1/2\">Save</button>
        </form>
    </section>
</main>

{% endblock %}", "edit-comment.html", "C:\\xampp\\htdocs\\cms_system\\templates\\edit-comment.html");
    }
}
