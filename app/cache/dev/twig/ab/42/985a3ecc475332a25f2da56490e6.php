<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ab42985a3ecc475332a25f2da56490e6 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => $this->getContext($context, 'status_code'), "message" => $this->getContext($context, 'status_text'))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
