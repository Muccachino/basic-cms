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

/* register.html */
class __TwigTemplate_8be03624179e576d65a7251612288473 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "register.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Register";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Register</h1>
    </header>

    <form action=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "register\" class=\"w-2/3 grid\" method=\"post\">
        ";
        // line 13
        if (($context["errors"] ?? null)) {
            // line 14
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
        ";
        }
        // line 16
        yield "
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"forename\">Forename</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"forename\" name=\"forename\" type=\"text\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 20), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "forename", [], "any", false, false, false, 21), "html", null, true);
        yield "</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"surname\">Surname</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"surname\" name=\"surname\" type=\"text\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 27), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "surname", [], "any", false, false, false, 28), "html", null, true);
        yield "</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"mail\">Email-Address</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"mail\" name=\"mail\" type=\"email\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 34), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 35), "html", null, true);
        yield "</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"password\" name=\"password\" type=\"password\">
            <span class=\"text-red-500\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 42), "html", null, true);
        yield "</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"confirm\">Confirm Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"confirm\" name=\"confirm\" type=\"password\">
            <span class=\"text-red-500\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm", [], "any", false, false, false, 49), "html", null, true);
        yield "</span>
        </div>
        <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Register</button>
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
        return "register.html";
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
        return array (  134 => 49,  124 => 42,  114 => 35,  110 => 34,  101 => 28,  97 => 27,  88 => 21,  84 => 20,  78 => 16,  74 => 14,  72 => 13,  68 => 12,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}

{% block title %}Register{% endblock %}

{% block content %}

<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Register</h1>
    </header>

    <form action=\"{{doc_root}}register\" class=\"w-2/3 grid\" method=\"post\">
        {% if errors %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
        {% endif %}

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"forename\">Forename</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"forename\" name=\"forename\" type=\"text\" value=\"{{user.forename}}\">
            <span class=\"text-red-500\">{{errors.forename}}</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"surname\">Surname</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"surname\" name=\"surname\" type=\"text\" value=\"{{user.surname}}\">
            <span class=\"text-red-500\">{{errors.surname}}</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"mail\">Email-Address</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"mail\" name=\"mail\" type=\"email\" value=\"{{user.email}}\">
            <span class=\"text-red-500\">{{errors.email}}</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"password\" name=\"password\" type=\"password\">
            <span class=\"text-red-500\">{{errors.password}}</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"confirm\">Confirm Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"confirm\" name=\"confirm\" type=\"password\">
            <span class=\"text-red-500\">{{errors.confirm}}</span>
        </div>
        <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Register</button>
    </form>
</main>

{% endblock %}", "register.html", "C:\\xampp\\htdocs\\cms_system\\templates\\register.html");
    }
}
