<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* List.html.php */
class __TwigTemplate_1e4c4f4693a6750f329914a04e2c8acc91f01d2a6f926f0bf418e3441cc28864 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "List.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "List.html.php"));

        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://cdn.metroui.org.ua/v4/css/metro-all.min.css\">
    <link rel=\"stylesheet\" href=\"item.style.css\" type=\"text/css\">
    <title>Shopping Cart</title>
</head>
<body>
<div class=\"mr-20 mr-30-md mr-40-lg mr-50-xl ml-20 ml-30-md ml-40-lg ml-50-xl\">
    <table class=\"table\">
        <tr>
            <th>#</th>
            <th>Product</th>
            <th>Amount</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        foreach (\$items as \$item) {
            ?>
            <tr>
                <td class=\"text-center\"><?php echo \$item[0] ?></td>
                <td class=\"text-center\"><?php echo \$item[2] ?></td>
                <td class=\"text-center\"><?php echo \$item[1] ?></td>
                <td class=\"text-center\">
                    <a href=\"edit?id=<?php echo \$item[0] ?>\" class=\"button primary\">Edit</a>
                </td>
                <td class=\"text-center\">
                    <a href=\"delete?id=<?php echo \$item[0] ?>\" class=\"button alert\">X</a>
                </td>
            </tr>
        <?php } ?>


    </table>

    <form action=\"add\" method=\"post\">
        <label>Product</label>
        <input type=\"text\" data-role=\"input\" id=\"name\" name=\"name\">

        <label>Amount</label>
        <input type=\"text\" data-role=\"input\" id=\"amount\" name=\"amount\">

        <button type=\"submit\" class=\"button primary  mt-5\">Add to Cart</button>
    </form>

</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "List.html.php";
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://cdn.metroui.org.ua/v4/css/metro-all.min.css\">
    <link rel=\"stylesheet\" href=\"item.style.css\" type=\"text/css\">
    <title>Shopping Cart</title>
</head>
<body>
<div class=\"mr-20 mr-30-md mr-40-lg mr-50-xl ml-20 ml-30-md ml-40-lg ml-50-xl\">
    <table class=\"table\">
        <tr>
            <th>#</th>
            <th>Product</th>
            <th>Amount</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        foreach (\$items as \$item) {
            ?>
            <tr>
                <td class=\"text-center\"><?php echo \$item[0] ?></td>
                <td class=\"text-center\"><?php echo \$item[2] ?></td>
                <td class=\"text-center\"><?php echo \$item[1] ?></td>
                <td class=\"text-center\">
                    <a href=\"edit?id=<?php echo \$item[0] ?>\" class=\"button primary\">Edit</a>
                </td>
                <td class=\"text-center\">
                    <a href=\"delete?id=<?php echo \$item[0] ?>\" class=\"button alert\">X</a>
                </td>
            </tr>
        <?php } ?>


    </table>

    <form action=\"add\" method=\"post\">
        <label>Product</label>
        <input type=\"text\" data-role=\"input\" id=\"name\" name=\"name\">

        <label>Amount</label>
        <input type=\"text\" data-role=\"input\" id=\"amount\" name=\"amount\">

        <button type=\"submit\" class=\"button primary  mt-5\">Add to Cart</button>
    </form>

</div>
</body>
</html>", "List.html.php", "/var/www/inf17d/symfony/app/Resources/views/List.html.php");
    }
}
