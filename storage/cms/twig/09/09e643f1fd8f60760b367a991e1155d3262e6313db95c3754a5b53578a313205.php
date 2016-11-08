<?php

/* /home/ubuntu/workspace/themes/gkodev-creative/layouts/default.htm */
class __TwigTemplate_99965aadb3210bcee9be6de4169532bdddb4d0fa2ec9c668ea18d46ac709f993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Creative - Start Bootstrap Theme</title>
    ";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "    
    <link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/font-awesome/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/app.css", 4 => "assets/css/custom.css"));
        // line 22
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href>
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\">

    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Студия Красоты Тайпаковых</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">О компании</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Услуги</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#portfolio\">Портфолио</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Контакты</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">+7702345678</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
       ";
        // line 81
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 82
        echo "    </header>

    <section class=\"bg-primary\" id=\"about\">
        ";
        // line 85
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("separator_one"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 86
        echo "    </section>
    
     <section class=\"no-padding\" id=\"portfolio\">
        ";
        // line 89
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("portfolio"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 90
        echo "    </section>
    
    <section id=\"services\">
        ";
        // line 93
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 94
        echo "    </section>

    <aside class=\"bg-dark\">
        ";
        // line 97
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("separator_two"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 98
        echo "    </aside>

    <section id=\"contact\">
       ";
        // line 101
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contact"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 102
        echo "    </section>
    ";
        // line 103
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("modals"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 104
        echo "        <!-- Scripts -->
    <script src=\"";
        // line 105
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascripts/jquery.js", 1 => "assets/javascripts/bootstrap.js", 2 => "assets/javascripts/jquery.easing.min.js", 3 => "assets/javascripts/jquery.fittext.js", 4 => "assets/javascripts/wow.min.js", 5 => "assets/javascripts/creative.js"));
        // line 113
        echo "\"></script>
    
    ";
        // line 115
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 116
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 117
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/gkodev-creative/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 117,  174 => 116,  167 => 115,  163 => 113,  161 => 105,  158 => 104,  154 => 103,  151 => 102,  147 => 101,  142 => 98,  138 => 97,  133 => 94,  129 => 93,  124 => 90,  120 => 89,  115 => 86,  111 => 85,  106 => 82,  102 => 81,  41 => 22,  39 => 15,  36 => 14,  33 => 13,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Creative - Start Bootstrap Theme</title>
    {% styles %}
    
    <link href=\"{{ [
\t\t'assets/css/bootstrap.min.css',
\t\t'assets/font-awesome/css/font-awesome.min.css',
\t\t'assets/css/animate.min.css',
\t\t'assets/css/app.css',
\t\t'assets/css/custom.css'
\t\t
    ]|theme }}\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href>
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\">

    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Студия Красоты Тайпаковых</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">О компании</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Услуги</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#portfolio\">Портфолио</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Контакты</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">+7702345678</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
       {% partial \"header\" %}
    </header>

    <section class=\"bg-primary\" id=\"about\">
        {% partial \"separator_one\" %}
    </section>
    
     <section class=\"no-padding\" id=\"portfolio\">
        {% partial \"portfolio\" %}
    </section>
    
    <section id=\"services\">
        {% partial \"services\" %}
    </section>

    <aside class=\"bg-dark\">
        {% partial \"separator_two\" %}
    </aside>

    <section id=\"contact\">
       {% partial \"contact\" %}
    </section>
    {% partial \"modals\" %}
        <!-- Scripts -->
    <script src=\"{{ [
        'assets/javascripts/jquery.js',
        'assets/javascripts/bootstrap.js',
        'assets/javascripts/jquery.easing.min.js',
        'assets/javascripts/jquery.fittext.js',
        'assets/javascripts/wow.min.js',
        'assets/javascripts/creative.js'
        
    ]|theme }}\"></script>
    
    {% framework extras %}
    {% scripts %}

</body>

</html>";
    }
}
