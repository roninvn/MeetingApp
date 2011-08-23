<?php

/* MeetingAppCoreBundle:Default:index.html.twig */
class __TwigTemplate_c3119d7b2c91a8750977d59e4340826d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "MeetingAppCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
