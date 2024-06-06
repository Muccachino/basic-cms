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

/* login.html */
class __TwigTemplate_e93c0158c6157f0b2bbc9f190e4ffb44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'description' => [$this, 'block_description'],
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
        $this->parent = $this->loadTemplate("layout.html", "login.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " Log In to IT-News ";
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
        <h1 class=\"text-4xl text-blue-500 mb-8\">Login</h1>
    </header>

    <form action=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "login.php\" class=\"w-1/3 grid\" method=\"post\">
        ";
        // line 14
        if (($context["errors"] ?? null)) {
            // line 15
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
        ";
        }
        // line 17
        yield "
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"mail\">E-Mail</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"mail\" name=\"mail\" type=\"email\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 22), "html", null, true);
        yield "</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"password\" name=\"password\" type=\"password\">
            <span class=\"text-red-500\">";
        // line 29
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 29);
        yield "</span>
        </div>

        <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "forgot-password.php\">Reset your password</a>
        <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600 m-5\" type=\"submit\">Login</button>
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
        return "login.html";
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
        return array (  104 => 32,  98 => 29,  88 => 22,  84 => 21,  78 => 17,  74 => 15,  72 => 14,  68 => 13,  60 => 7,  56 => 6,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}


{% block description %} Log In to IT-News {% endblock %}

{% block content %}

<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Login</h1>
    </header>

    <form action=\"{{doc_root}}login.php\" class=\"w-1/3 grid\" method=\"post\">
        {% if errors %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
        {% endif %}

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"mail\">E-Mail</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"mail\" name=\"mail\" type=\"email\" value=\"{{email}}\">
            <span class=\"text-red-500\">{{errors.email}}</span>
        </div>

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"password\" name=\"password\" type=\"password\">
            <span class=\"text-red-500\">{{errors.password|raw}}</span>
        </div>

        <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}forgot-password.php\">Reset your password</a>
        <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600 m-5\" type=\"submit\">Login</button>
    </form>
</main>

{% endblock %}", "login.html", "C:\\xampp\\htdocs\\cms_system\\templates\\login.html");
    }
}
