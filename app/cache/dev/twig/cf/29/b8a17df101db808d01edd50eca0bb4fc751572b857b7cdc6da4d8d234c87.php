<?php

/* OfflineBundle:Default:index.html.twig */
class __TwigTemplate_cf29b8a17df101db808d01edd50eca0bb4fc751572b857b7cdc6da4d8d234c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OfflineBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OfflineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"main-nav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div id=\"main-nav-background\">
            <img id=\"main-nav-logo\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/sabrus-menu-logo.png"), "html", null, true);
        echo "\"><a href=\"#\"></a>
            ";
        // line 8
        echo "        </div>
        <div  class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div id=\"mynav\" class=\"navbar-collapse collapse\">
                <ul id=\"main-nav-items\" class=\"nav navbar-nav\">
                    <li id=\"home-id\" class=\"active\"><a class=\"smoothScroll\" href=\"#home\"><span>Home</span></a></li>
                    <li><a class=\"smoothScroll\" href=\"#our-service\"><span>Our Service</span></a></li>
                    <li><a class=\"smoothScroll\" href=\"#team\"><span>The Team</span></a></li>
                    <li id=\"contact-id\"><a class=\"smoothScroll\" href=\"#contact\"><span>Contact</span></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div id=\"page-container\" class=\"container-liquid\" data-spy=\"scroll\" data-target=\"#mynav\">
        <div id=\"home\" class=\"col-xs-12 section1\">
            <div id=\"home-text\">
                We are cooking <br> something special <br> for you.<br>Coming soon!
            </div>
            <div class=\"countdown\">
                <div id=\"countdown-control\">
                    <div id=\"countdown-circle\">
                        <div id=\"date-countdown\">
                            <div class=\"days\"></div>
                            <div id=\"date-days\"><span>days</span></div>
                        </div>
                    </div>
                    <div id=\"time-countdown\">
                        <div id=\"time-hours\">
                            <div class=\"hours\"></div>
                            <div id=\"time-hours-div\"><span>hours</span></div>
                        </div>
                        <div id=\"time-minutes\">
                            <div class=\"minutes\"></div>
                            <div id=\"time-minutes-div\"><span>minutes</span></div>
                        </div>
                        <div id=\"time-seconds\">
                            <div class=\"seconds\"></div>
                            <div id=\"time-seconds-div\"><span>seconds</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"our-service\" class=\"col-xs-12 text-center section2\">
            <div class=\"arrow\"></div>
            <div id=\"top-bubbles\"></div>
            <div id=\"our-service-text\">Our Service</div>
            <div id=\"services\">
                <div id=\"guest-to-eat-col\">
                    <div id=\"guest-to-eat-img\"></div>
                    <div id=\"guest-to-eat-text\" class=\"services-text\">Enjoying homemade cuisine</div>
                </div>
                <div id=\"host-to-cook-col\" class=\"active\">
                    <div id=\"host-to-cook-img\"></div>
                    <div id=\"host-to-cook-text\" class=\"services-text\">Cooking amazing meals</div>
                </div>
                <div id=\"where-you-like-col\">
                    <div id=\"where-you-like-img\"></div>
                    <div id=\"where-you-like-text\" class=\"services-text\">Unique dining opportunities</div>
                </div>
                <div id=\"service-description\">
                    <p id=\"service-description-p\"></p>
                </div>
                <div id=\"bottom-bubbles\"></div>
            </div>
        </div>

        <div id=\"team\" class=\"col-xs-12 text-center section3\">
            <div class=\"arrow\"></div>
            <div id=\"the-team-img\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team-logo.png"), "html", null, true);
        echo "\"/></div>
            <div id=\"the-team-text\"><span>The Team</span></div>
            <div id=\"the-team-description\">
                <p>Our highest priority is to satisfy the Host, Guest and all the Sabrus Community through early and continuous delivery of valuable services. Simplicity is essential!
                    ...and we love good homemade food.
                </p>
            </div>
            <div id=\"team-members\">
                <div id=\"team-member-1\" class=\"team-member-info\">
                    <div class=\"member-role\">Founder</div>
                    <div class=\"team-member-img\">
                        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team-person.png"), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"member-name\">Patrik von Arx</div>
                    <div class=\"member-from\">from Paris</div>
                </div>
                <div id=\"team-member-2\" class=\"team-member-info\">
                    <div class=\"member-role\">Founder-CEO</div>
                    <div class=\"team-member-img\">
                        <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team-person.png"), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"member-name\">Pedro Torres</div>
                    <div class=\"member-from\">from Paris</div>
                </div>
                <div id=\"team-member-3\" class=\"team-member-info\">
                    <div class=\"member-role\">Designer</div>
                    <div class=\"team-member-img\">
                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team-person.png"), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"member-name\">Fidel A. Morales</div>
                    <div class=\"member-from\">from Paris</div>
                </div>
                <div id=\"team-member-4\" class=\"team-member-info\">
                    <div class=\"member-role\">Developer</div>
                    <div class=\"team-member-img\">
                        <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team-person.png"), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"member-name\">Jakob Wanner</div>
                    <div class=\"member-from\">from Paris</div>
                </div>
            </div>
        </div>

        <div id=\"contact\" class=\"col-xs-12 section4\">
            <div class=\"arrow\"></div>
            <div id=\"sabrus-contact-logo\"></div>
            <div class=\"col-xs-10 text-right\">
                <div id=\"contact-text\">
                    <span>Please, let us know some of your preferences and we will contact you as soon as Sabrus is done!</span>
                    <span> <div data-toggle=\"modal\" href=\"#modal-view\" style=\"display: inline-block\">>></div> </span>
                </div>
                <div id=\"contact-col\">
                    <div class=\"hp2\">Contact us</div>
                    <form class=\"form\" role=\"form\" action=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("send_user_feedback");
        echo "\" method=\"POST\">
                        <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"username\" placeholder=\"Name\">
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" placeholder=\"Email\">
                        <input type=\"submit\" id=\"btn-send\" class=\"btn btn-success\" value=\"Send\">
                        <input type=\"hidden\" id=\"user_from_hidden\" name=\"user_from_hidden\" >
                        <input type=\"hidden\" id=\"user_type_hidden\" name=\"user_type_hidden\" >
                        ";
        // line 145
        echo "                    </form>
                </div>
            </div>

            <div id=\"modal-view\" class=\"modal fade\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div id=\"modal-header-text\">We want to invite you to be part of the Sabrus Comunity!</div>
                        <li class=\"divider\"></li>
                        <div id=\"where-you-from-text\" class=\"modal-text\">Where are you from?</div>
                        <div id=\"where-you-from-div\">
                            <input type=\"text\" class=\"form-control\" id=\"where-you-from-input\" name=\"where-you-from-input\">
                        </div>
                        <div id=\"want-to-be-text\" class=\"modal-text\">Do you want to be</div>
                        <div id=\"want-to-be-images\">
                            <div id=\"host\">
                                <div id=\"host-img\"></div>
                                <div>Just a Host</div>
                            </div>
                            <div id=\"guest\">
                                <div id=\"guest-img\"></div>
                                <div>Just a Guest</div>
                            </div>
                            <div id=\"host-guest\">
                                <div id=\"host-guest-img\"></div>
                                <div>Host & Guest</div>
                            </div>
                        </div>
                        <input type=\"submit\" id=\"btn-save\" class=\"btn btn-success\" value=\"Save\">
                        <li class=\"divider\"></li>
                        <div id=\"modal-footer-text\">Thank you for your interest in Sabrus! We will keep in touch with you.</div>
                        ";
        // line 177
        echo "                            ";
        // line 178
        echo "                            ";
        // line 179
        echo "                            ";
        // line 180
        echo "                            ";
        // line 181
        echo "                                ";
        // line 182
        echo "                            ";
        // line 183
        echo "                            ";
        // line 184
        echo "                            ";
        // line 185
        echo "                                ";
        // line 186
        echo "                                    ";
        // line 187
        echo "                                    ";
        // line 188
        echo "                                ";
        // line 189
        echo "                                ";
        // line 190
        echo "                                    ";
        // line 191
        echo "                                    ";
        // line 192
        echo "                                ";
        // line 193
        echo "                                ";
        // line 194
        echo "                                    ";
        // line 195
        echo "                                    ";
        // line 196
        echo "                                ";
        // line 197
        echo "                            ";
        // line 198
        echo "                            ";
        // line 199
        echo "                            ";
        // line 200
        echo "                            ";
        // line 201
        echo "                        ";
        // line 202
        echo "                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OfflineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 202,  276 => 201,  274 => 200,  272 => 199,  270 => 198,  268 => 197,  266 => 196,  264 => 195,  262 => 194,  260 => 193,  258 => 192,  256 => 191,  254 => 190,  252 => 189,  250 => 188,  248 => 187,  246 => 186,  244 => 185,  242 => 184,  240 => 183,  238 => 182,  236 => 181,  234 => 180,  232 => 179,  230 => 178,  228 => 177,  195 => 145,  186 => 138,  165 => 120,  154 => 112,  143 => 104,  132 => 96,  118 => 85,  39 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
