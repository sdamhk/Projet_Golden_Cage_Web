<?php

/* MyAppProjetFinalBundle::layout.html.twig */
class __TwigTemplate_8888155bd10574a366ad6f00d1f1d3995833cef74976fa3fe13fc759838deb64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "
<div class=\"wrap\">\t
  <div class=\"header\">
\t<div class=\"logo\">
\t\t<a href=\"index.html\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MyAppProjetFinal/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t</div>
\t<div class=\"clear\"></div>
  </div>
  <div class=\"banner\">
\t<div class=\"lsidebar span_1_of_3\">
\t\t<div class=\"login-title\">
           <h2 class=\"title\">Se connecter</h2>
\t\t\t\t<div id=\"loginbox\" class=\"loginbox\">
\t\t\t\t\t<form action=\"\" method=\"post\" name=\"login\" id=\"login-form\">
\t\t\t\t\t  <fieldset class=\"input\">
\t\t\t\t\t    <p id=\"login-form-username\">
\t\t\t\t\t      <label for=\"modlgn_username\">Email</label>
\t\t\t\t\t      <input id=\"modlgn_username\" type=\"text\" name=\"username\" class=\"inputbox\" size=\"18\" autocomplete=\"off\">
\t\t\t\t\t    </p>
\t\t\t\t\t    <p id=\"login-form-password\">
\t\t\t\t\t      <label for=\"modlgn_passwd\">Mot de passe</label>
\t\t\t\t\t      <input id=\"modlgn_passwd\" type=\"password\" name=\"password\" class=\"inputbox\" size=\"18\" autocomplete=\"off\">
\t\t\t\t\t    </p>
\t\t\t\t\t    <p id=\"login-form-remember\">
\t\t\t\t\t      <label for=\"modlgn_remember\" class=\"checkbox\">Se souvenir de moi</label>
\t\t\t\t\t      <input id=\"modlgn_remember\" type=\"checkbox\" name=\"remember\" class=\"checkbox\" value=\"yes\" autocomplete=\"off\">
\t\t\t\t\t    </p>
\t\t\t\t\t    <input type=\"submit\" name=\"Submit\" class=\"button\" value=\"Se connecter maintenant\">
\t\t\t\t\t\t<input type=\"submit\" name=\"Submit\" class=\"button\" value=\"S'inscrire\">
\t\t\t\t\t  </fieldset>
\t\t\t\t\t </form>
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"right-box\">
\t\t\t\t <div class=\"right-box-grid\">
\t\t\t\t\t\t<div class=\"right-box-grid-img\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MyAppProjetFinal/images/pic6.jpg"), "html", null, true);
        echo "\" title=\"img\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right-box-grid-info\">
\t\t\t\t\t\t\t<span>Wedding Ring</span>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed in reprehenderit adipisicing elit,</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t<a href=\"#\" class=\"link2\">Read More</a>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t <div class=\"right-box-grid\">
\t\t\t\t\t\t<div class=\"right-box-grid-img\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MyAppProjetFinal/images/pic7.jpg"), "html", null, true);
        echo "\" title=\"img\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right-box-grid-info\">
\t\t\t\t\t\t\t<span>Wedding Flowers</span>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed in reprehenderit adipisicing elit,</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t<a href=\"#\" class=\"link2\">Read More</a>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t <div class=\"right-box-grid\">
\t\t\t\t\t\t<div class=\"right-box-grid-img\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MyAppProjetFinal/images/pic8.jpg"), "html", null, true);
        echo "\" title=\"img\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right-box-grid-info\">
\t\t\t\t\t\t\t<span>Wedding Dress</span>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed in reprehenderit adipisicing elit,</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t<a href=\"#\" class=\"link2\">Read More</a>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"head\">
\t\t   \t\t   <h2>News &amp; Events</h2>
\t\t    </div>
\t\t    <div class=\"news\">
\t\t           \t\t<div class=\"right-box-grid1\">
\t\t\t\t\t\t\t<span>02 March 2013</span>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidun Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunLorem ipsum dolor sit</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link2\">Read More</a>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t <div class=\"right-box-grid1\">
\t\t\t\t\t\t\t<span>02 March 2013</span>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidun Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link2\">Read More</a>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t <div class=\"right-box-grid1\">
\t\t\t\t\t\t\t<span>02 March 2013</span>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunLorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link2\">Read More</a>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t     </div> 
\t\t</div>
\t\t<div class=\"cont span_2_of_3\">
\t\t\t\t\t<div class=\"banner-img\">
\t\t\t\t\t  <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MyAppProjetFinal/images/banner1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"active\"><a href=\"index.html\">Home</a></li> 
\t\t\t\t\t\t\t <li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t <li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t  <li><a href=\"gallery.html\">Gallery</a></li>
\t\t\t\t\t\t\t <li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t <div class=\"clear\"></div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"welcome-text\">
\t\t\t\t       <h4>Welcome....</h4>
\t\t\t\t       <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidu</h5>
\t\t\t\t\t   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
\t\t\t\t\t   <a href=\"#\" class=\"link1\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"heading\">
\t\t\t\t\t\t<h3>Success Stories</h3>
\t\t\t\t\t</div>
\t\t\t<div class=\"content-grids\">
                            ";
        // line 137
        $this->displayBlock('content', $context, $blocks);
        // line 138
        echo "\t\t\t\t
\t\t\t </div>
\t\t\t</div>\t
\t\t\t<div class=\"clear\"></div>\t\t\t
\t\t </div>
\t<div class=\"footer\">
    \t<ul class=\"footermenu\">
        \t<li><a href=\"index.html\">Home</a></li>
            <li><a href=\"about.html\">About</a></li>
            <li><a href=\"services.html\">Services</a></li>
            <li><a href=\"gallery.html\">Gallery</a></li>
          \t<li><a href=\"contact.html\">Contact</a></li>
        </ul>
\t\t<div class=\"footer-right\">
\t\t\t<div class=\"copy\">
\t\t\t\t<p>All rights Reserved | Design by <a href=\"http://w3layouts.com\">W3Layouts</a></p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"clear\"></div>
\t</div>
</div>";
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <link href='http://fonts.googleapis.com/css?family=Noticia+Text' rel='stylesheet' type='text/css'>
    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MyAppProjetFinal/css/style.css"), "html", null, true);
        echo "\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MyAppProjetFinal/js/jquery-v1.7.1.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MyAppProjetFinal/js/jquery-hover-effect.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        //Image Hover
jQuery(document).ready(function(){
jQuery(function() {
\tjQuery('ul.da-thumbs > li').hoverdir();
});
});
</script>
";
    }

    // line 137
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MyAppProjetFinalBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 137,  207 => 8,  203 => 7,  198 => 5,  194 => 4,  191 => 3,  188 => 2,  164 => 138,  162 => 137,  137 => 115,  97 => 78,  82 => 66,  67 => 54,  32 => 22,  26 => 18,  24 => 2,  21 => 1,);
    }
}
