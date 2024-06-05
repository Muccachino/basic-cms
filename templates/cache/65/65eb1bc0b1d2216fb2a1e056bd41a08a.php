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

/* admin/article.html */
class __TwigTemplate_abdec8191adcb85d8fa9e7ef9ee23aa9 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/article.html", 1);
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

<main class=\"p-10\">
    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">";
        // line 10
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 10)) ? ("Edit ") : ("New "));
        yield "Article</h2>
    ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 11)) {
            // line 12
            yield "    <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 12), "html", null, true);
            yield "</p>
    ";
        }
        // line 14
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/article.php?id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\"
          enctype=\"multipart/form-data\"
          method=\"POST\">
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"title\" name=\"title\" type=\"text\"
                   value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 22), "html", null, true);
        yield "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"summary\"
                    name=\"summary\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "summary", [], "any", false, false, false, 27), "html", null, true);
        yield "</textarea>
            <span class=\"text-red-500\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "summary", [], "any", false, false, false, 28), "html", null, true);
        yield "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"content\" name=\"content\"
                    rows=\"10\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 33), "html", null, true);
        yield "</textarea>
            <span class=\"text-red-500\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
        </div>
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category_id\">Category</label>
            <select class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"category_id\"
                    name=\"category_id\">
                <option>select category</option>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 43
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 43) == CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "category_id", [], "any", false, false, false, 43))) {
                // line 44
                yield "                <option selected value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 44), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44), "html", null, true);
                yield "</option>
                ";
            } else {
                // line 46
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 46), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46), "html", null, true);
                yield "</option>
                ";
            }
            // line 48
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "            </select>
            <span class=\"text-red-500\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "category", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
            <select class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"user_id\"
                    name=\"user_id\">
                <option>select user</option>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 57
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 57) == CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "user_id", [], "any", false, false, false, 57))) {
                // line 58
                yield "                <option selected value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 58), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "forename", [], "any", false, false, false, 58), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 58), "html", null, true);
                yield "</option>
                ";
            } else {
                // line 60
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "forename", [], "any", false, false, false, 60), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 60), "html", null, true);
                yield "</option>
                ";
            }
            // line 62
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "            </select>
            <span class=\"text-red-500\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "user", [], "any", false, false, false, 64), "html", null, true);
        yield "</span>
            ";
        // line 65
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 65)) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 65)))) {
            // line 66
            yield "            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_file\">Image</label>
            <input accept=\"image/jpeg, image/png\"
                   class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"image_file\" name=\"image_file\"
                   type=\"file\">
            <span class=\"text-red-500\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "image_file", [], "any", false, false, false, 71), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 73
            yield "            <img alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 73), "html", null, true);
            yield "\" class=\"w-full h-auto\"
                 src=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 74), "html", null, true);
            yield "\"/>
            <span>Alt Text: ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 75), "html", null, true);
            yield "</span>
            <a class=\"text-blue-500\" href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/alt-text-edit.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 76), "html", null, true);
            yield "\">Edit Alt Text</a>
            <a class=\"text-red-500\" href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/img-delete.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 77), "html", null, true);
            yield "\">Delete Image</a>
            ";
        }
        // line 79
        yield "            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"image_alt\" name=\"image_alt\" type=\"text\"
                   value=\"";
        // line 82
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 82)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 82), "html", null, true)) : (yield ""));
        yield "\">
            <span class=\"text-red-500\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "image_alt", [], "any", false, false, false, 83), "html", null, true);
        yield "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
            ";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "published", [], "any", false, false, false, 85)) {
            // line 86
            yield "            <input checked
                   class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"published\" name=\"published\"
                   type=\"checkbox\">
            ";
        } else {
            // line 91
            yield "            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"published\" name=\"published\"
                   type=\"checkbox\">
            ";
        }
        // line 95
        yield "        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Save</button>
    </form>
</main>

<script>
    tinymce.init({
        selector: \"#content\",
        menubar: false,
        toolbar: \"bold italic underline link\",
        plugins: \"link\",
        link_title: false
    })
</script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/article.html";
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
        return array (  292 => 95,  286 => 91,  279 => 86,  277 => 85,  272 => 83,  268 => 82,  263 => 79,  256 => 77,  250 => 76,  246 => 75,  240 => 74,  235 => 73,  230 => 71,  223 => 66,  221 => 65,  217 => 64,  214 => 63,  208 => 62,  198 => 60,  188 => 58,  185 => 57,  181 => 56,  172 => 50,  169 => 49,  163 => 48,  155 => 46,  147 => 44,  144 => 43,  140 => 42,  129 => 34,  125 => 33,  117 => 28,  113 => 27,  105 => 22,  101 => 21,  88 => 14,  82 => 12,  80 => 11,  76 => 10,  71 => 7,  67 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html\" %}

{% block title %}{{category.name}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}


<main class=\"p-10\">
    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">{{article.id ? 'Edit ' : 'New ' }}Article</h2>
    {% if (errors.issue) %}
    <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{errors.issue}}</p>
    {% endif %}
    <form action=\"{{doc_root}}admin/article.php?id={{id}}\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\"
          enctype=\"multipart/form-data\"
          method=\"POST\">
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"title\" name=\"title\" type=\"text\"
                   value=\"{{article.title}}\">
            <span class=\"text-red-500\">{{errors.title}}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"summary\"
                    name=\"summary\">{{article.summary}}</textarea>
            <span class=\"text-red-500\">{{errors.summary}}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"content\" name=\"content\"
                    rows=\"10\">{{article.content}}</textarea>
            <span class=\"text-red-500\">{{errors.content}}</span>
        </div>
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category_id\">Category</label>
            <select class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"category_id\"
                    name=\"category_id\">
                <option>select category</option>
                {% for category in categories %}
                {% if (category.id == article.category_id) %}
                <option selected value=\"{{category.id}}\">{{category.name}}</option>
                {% else %}
                <option value=\"{{category.id}}\">{{category.name}}</option>
                {% endif %}
                {% endfor %}
            </select>
            <span class=\"text-red-500\">{{errors.category}}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
            <select class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"user_id\"
                    name=\"user_id\">
                <option>select user</option>
                {% for user in users %}
                {% if (user.id == article.user_id) %}
                <option selected value=\"{{user.id}}\">{{user.forename}} {{user.surname}}</option>
                {% else %}
                <option value=\"{{user.id}}\">{{user.forename}} {{user.surname}}</option>
                {% endif %}
                {% endfor %}
            </select>
            <span class=\"text-red-500\">{{errors.user}}</span>
            {% if (article.image_file is null or article.image_file is empty) %}
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_file\">Image</label>
            <input accept=\"image/jpeg, image/png\"
                   class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"image_file\" name=\"image_file\"
                   type=\"file\">
            <span class=\"text-red-500\">{{errors.image_file}}</span>
            {% else %}
            <img alt=\"{{article.image_alt}}\" class=\"w-full h-auto\"
                 src=\"{{doc_root}}uploads/{{article.image_file}}\"/>
            <span>Alt Text: {{article.image_alt}}</span>
            <a class=\"text-blue-500\" href=\"{{doc_root}}admin/alt-text-edit.php?id={{article.id}}\">Edit Alt Text</a>
            <a class=\"text-red-500\" href=\"{{doc_root}}admin/img-delete.php?id={{article.id}}\">Delete Image</a>
            {% endif %}
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"image_alt\" name=\"image_alt\" type=\"text\"
                   value=\"{{article.image_alt ?? ''}}\">
            <span class=\"text-red-500\">{{errors.image_alt}}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
            {% if article.published %}
            <input checked
                   class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"published\" name=\"published\"
                   type=\"checkbox\">
            {% else %}
            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"published\" name=\"published\"
                   type=\"checkbox\">
            {% endif %}
        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Save</button>
    </form>
</main>

<script>
    tinymce.init({
        selector: \"#content\",
        menubar: false,
        toolbar: \"bold italic underline link\",
        plugins: \"link\",
        link_title: false
    })
</script>

{% endblock %}", "admin/article.html", "C:\\xampp\\htdocs\\cms_system\\templates\\admin\\article.html");
    }
}
