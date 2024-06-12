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

/* comment-list.html */
class __TwigTemplate_d19d08934603eea5efefecd3338a905c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<h3 class=\"text-2xl text-blue-500 mb-4 mt-8\">Comments</h3>

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 4
            yield "
<p class=\"text-sm mb-2\">";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "created", [], "any", false, false, false, 5), "d M. Y"), "html", null, true);
            yield "</p>
<p class=\"text-gray-500 p-2\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 6), "html", null, true);
            yield "</p>

<p class=\"credit text-xs mt-5 mb-5\">
    Posted by
    <a class=\"text-pink-400\" href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "user/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user_id", [], "any", false, false, false, 10), "html", null, true);
            yield "\">
        ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 11), "html", null, true);
            yield "
    </a>
</p>

";
            // line 15
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 15) == CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user_id", [], "any", false, false, false, 15))) {
                // line 16
                yield "
<p class=\"edit mt-4\">
    <a class=\"text-white bg-pink-600 hover:bg-blue-600 p-2 rounded-md mt-2\"
       href=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "edit-comment/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 19), "html", null, true);
                yield "\">Edit</a>
</p>

";
            }
            // line 23
            yield "
<hr class=\"my-12 mt-4 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10\"/>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
<form action=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "article/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 28), "html", null, true);
        yield "\" class=\"flex flex-col mt-8\" method=\"post\">
    <div>
    <textarea
            class=\"block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
            id=\"content\" name=\"content\" placeholder=\"Add a comment\"
            rows=\"4\"></textarea>
        <span class=\"text-red-500\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
    </div>

    <input id=\"article_id\" name=\"article_id\" type=\"hidden\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
        yield "\">
    <input id=\"user_id\" name=\"user_id\" type=\"hidden\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_user"] ?? null), "html", null, true);
        yield "\">
    <button class=\"text-white bg-pink-600 hover:bg-blue-600 p-2 rounded-md mt-2 w-1/2\">Add Comment</button>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "comment-list.html";
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
        return array (  122 => 38,  118 => 37,  112 => 34,  101 => 28,  98 => 27,  89 => 23,  80 => 19,  75 => 16,  73 => 15,  66 => 11,  60 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 class=\"text-2xl text-blue-500 mb-4 mt-8\">Comments</h3>

{% for comment in comments %}

<p class=\"text-sm mb-2\">{{comment.created|date('d M. Y')}}</p>
<p class=\"text-gray-500 p-2\">{{comment.content}}</p>

<p class=\"credit text-xs mt-5 mb-5\">
    Posted by
    <a class=\"text-pink-400\" href=\"{{doc_root}}user/{{comment.user_id}}\">
        {{comment.author}}
    </a>
</p>

{% if (session.id == comment.user_id) %}

<p class=\"edit mt-4\">
    <a class=\"text-white bg-pink-600 hover:bg-blue-600 p-2 rounded-md mt-2\"
       href=\"{{doc_root}}edit-comment/{{comment.id}}\">Edit</a>
</p>

{% endif %}

<hr class=\"my-12 mt-4 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10\"/>

{% endfor %}

<form action=\"{{doc_root}}article/{{article.id}}\" class=\"flex flex-col mt-8\" method=\"post\">
    <div>
    <textarea
            class=\"block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
            id=\"content\" name=\"content\" placeholder=\"Add a comment\"
            rows=\"4\"></textarea>
        <span class=\"text-red-500\">{{errors.content}}</span>
    </div>

    <input id=\"article_id\" name=\"article_id\" type=\"hidden\" value=\"{{article.id}}\">
    <input id=\"user_id\" name=\"user_id\" type=\"hidden\" value=\"{{current_user}}\">
    <button class=\"text-white bg-pink-600 hover:bg-blue-600 p-2 rounded-md mt-2 w-1/2\">Add Comment</button>
</form>
", "comment-list.html", "C:\\xampp\\htdocs\\cms_system\\templates\\comment-list.html");
    }
}
