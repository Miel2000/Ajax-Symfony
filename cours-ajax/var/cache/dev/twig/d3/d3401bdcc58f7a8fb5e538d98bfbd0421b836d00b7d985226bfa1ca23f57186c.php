<?php

/* post/index.html.twig */
class __TwigTemplate_d171a677f017fec75db85f74557ff3f32abdb92f0cad127d3cb62a307d5b9d68 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Les articles !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
        <h1 class=\"my-3\">Nos articles</h1>
        ";
        // line 9
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 10
            echo "            <a href=\"/login\" class=\"my-2 btn btn-success\">Connexion</a>
        ";
        } else {
            // line 12
            echo "            <a href=\"/logout\" class=\"my-2 btn btn-danger\">Déconnexion</a>
        ";
        }
        // line 14
        echo "        <div class=\"row\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "                <div class=\"col-3 mb-3\">
                    <div class=\"border border-dark rounded p-2\">
                        <h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</h3>
                        <h3>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", array()), "html", null, true);
            echo "</h3>
                        <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "introduction", array()), "html", null, true);
            echo "</p>
                        <a href=\"#\" class=\"btn btn-primary\">Lire la suite</a>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_like", array("id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link js-like\">

                        ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "user", array()) && twig_get_attribute($this->env, $this->source, $context["post"], "isLikedByUser", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "user", array())), "method"))) {
                // line 25
                echo "                            <i class=\"fas fa-thumbs-up\"></i>
                        ";
            } else {
                // line 27
                echo "                            <i class=\"far fa-thumbs-up\"></i>
                        ";
            }
            // line 29
            echo "                        
                            <span class=\"js-likes\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "likes", array())), "html", null, true);
            echo "</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
        <script>

        function onClickBtnLike(event) {
        event.preventDefault();

        const url = this.href;

        console.log(url);
            // on chope la valeur ou est écrit le nomvre de like sur le site
        const spanCount = this.querySelector('span.js-likes');
            // on chope les smeyler liké ou pas liké
        const icone = this.querySelector('i');


        axios.get(url).then(function(response) {
            spanCount.textContent = response.data.likes;
            if (icone.classList.contains('fas')) {
                        icone.classList.replace('fas','far');
            } else { 
                        icone.classList.replace('far','fas');
            }
         
        }).catch(function(error){
            if(error.response.status === 403)
            {
                window.alert('vous ne pouvez pas liker un article sans être connecté');
            } else {
                window.alert('Une erreur s\\'est produite')
            }
        });

        }

        document.querySelectorAll('a.js-like').forEach(function(link) {
          
          // if status == 200 alors 

          // if status == 403 alors
      
          
           link.addEventListener('click', onClickBtnLike);


        });

        </script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  154 => 40,  142 => 36,  130 => 30,  127 => 29,  123 => 27,  119 => 25,  117 => 24,  112 => 22,  107 => 20,  103 => 19,  99 => 18,  95 => 16,  91 => 15,  88 => 14,  84 => 12,  80 => 10,  78 => 9,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Les articles !{% endblock %}

{% block body %}

    <div class=\"container\">
        <h1 class=\"my-3\">Nos articles</h1>
        {% if not is_granted('ROLE_USER') %}
            <a href=\"/login\" class=\"my-2 btn btn-success\">Connexion</a>
        {% else %}
            <a href=\"/logout\" class=\"my-2 btn btn-danger\">Déconnexion</a>
        {% endif %}
        <div class=\"row\">
            {% for post in posts %}
                <div class=\"col-3 mb-3\">
                    <div class=\"border border-dark rounded p-2\">
                        <h3>{{post.title}}</h3>
                        <h3>{{post.id}}</h3>
                        <p>{{post.introduction}}</p>
                        <a href=\"#\" class=\"btn btn-primary\">Lire la suite</a>
                        <a href=\"{{ path('post_like', { 'id' : post.id }) }}\" class=\"btn btn-link js-like\">

                        {% if app.user and post.isLikedByUser(app.user) %}
                            <i class=\"fas fa-thumbs-up\"></i>
                        {% else %}
                            <i class=\"far fa-thumbs-up\"></i>
                        {% endif %}
                        
                            <span class=\"js-likes\">{{ post.likes | length }}</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

   {% block javascripts %}
            <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
        <script>

        function onClickBtnLike(event) {
        event.preventDefault();

        const url = this.href;

        console.log(url);
            // on chope la valeur ou est écrit le nomvre de like sur le site
        const spanCount = this.querySelector('span.js-likes');
            // on chope les smeyler liké ou pas liké
        const icone = this.querySelector('i');


        axios.get(url).then(function(response) {
            spanCount.textContent = response.data.likes;
            if (icone.classList.contains('fas')) {
                        icone.classList.replace('fas','far');
            } else { 
                        icone.classList.replace('far','fas');
            }
         
        }).catch(function(error){
            if(error.response.status === 403)
            {
                window.alert('vous ne pouvez pas liker un article sans être connecté');
            } else {
                window.alert('Une erreur s\\'est produite')
            }
        });

        }

        document.querySelectorAll('a.js-like').forEach(function(link) {
          
          // if status == 200 alors 

          // if status == 403 alors
      
          
           link.addEventListener('click', onClickBtnLike);


        });

        </script>
   {% endblock %}", "post/index.html.twig", "C:\\wamp64\\www\\cours_ajax\\cours-ajax\\templates\\post\\index.html.twig");
    }
}
