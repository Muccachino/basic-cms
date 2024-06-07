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

/* forgot-password.html */
class __TwigTemplate_c39efe3660d51c33fa83b57375b5e866 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "forgot-password.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Reset Password";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    ";
        // line 8
        if ((($context["sent"] ?? null) == false)) {
            // line 9
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "forgot-password\" class=\"w-full grid\" method=\"post\">
        <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"email\">Enter Your E-Mail Address</label>
        <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
               id=\"email\" name=\"email\" type=\"email\">
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600 w-1/2 mt-4\" type=\"submit\">Send Email to
            reset Password
        </button>
    </form>
    ";
        } else {
            // line 18
            yield "    <p class=\"text-center text-lg\">An Email has been sent to your E-mail Address. Please check your inbox.</p>
    ";
        }
        // line 20
        yield "</main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forgot-password.html";
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
        return array (  83 => 20,  79 => 18,  66 => 9,  64 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}Reset Password{% endblock %}

{% block content %}

<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    {% if sent == false %}
    <form action=\"{{doc_root}}forgot-password\" class=\"w-full grid\" method=\"post\">
        <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"email\">Enter Your E-Mail Address</label>
        <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
               id=\"email\" name=\"email\" type=\"email\">
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600 w-1/2 mt-4\" type=\"submit\">Send Email to
            reset Password
        </button>
    </form>
    {% else %}
    <p class=\"text-center text-lg\">An Email has been sent to your E-mail Address. Please check your inbox.</p>
    {% endif %}
</main>

{% endblock %}", "forgot-password.html", "C:\\xampp\\htdocs\\cms_system\\templates\\forgot-password.html");
    }
}
