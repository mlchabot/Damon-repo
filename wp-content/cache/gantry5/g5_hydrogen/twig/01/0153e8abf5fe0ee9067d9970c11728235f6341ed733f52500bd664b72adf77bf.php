<?php

/* @nucleus/layout/section.html.twig */
class __TwigTemplate_b049be9b1f58812d6dbfc77b9069794bc76bc03d58d2e39217fed0656b1f661a extends Twig_Template
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
        $context["tag_type"] = (($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array()), "section")) : ("section"));
        // line 2
        $context["attr_id"] = (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "id", array())) ? ($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "id", array())) : (("g-" . $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "id", array()))));
        // line 3
        $context["attr_class"] = $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "class", array());
        // line 4
        $context["attr_background"] = $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "background", array());
        // line 5
        $context["attr_extra"] = "";
        // line 6
        $context["boxed"] = $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "boxed", array());
        // line 7
        if ( !(null === (isset($context["boxed"]) ? $context["boxed"] : null))) {
            // line 8
            echo "    ";
            $context["boxed"] = (((trim((isset($context["boxed"]) ? $context["boxed"] : null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "body", array()), "layout", array()), "sections", array())) : ((isset($context["boxed"]) ? $context["boxed"] : null)));
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "extra", array())) {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 13
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 14
                    echo "        ";
                    $context["attr_extra"] = ((((((isset($context["attr_extra"]) ? $context["attr_extra"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                    // line 15
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        echo "
";
        // line 19
        ob_start();
        // line 20
        echo "    ";
        if ($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "children", array())) {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 22
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", array())) . ".html.twig"), "@nucleus/layout/section.html.twig", 22)->display(array_merge($context, array("segments" => $this->getAttribute($context["segment"], "children", array()))));
                // line 23
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
";
        // line 27
        if (trim((isset($context["html"]) ? $context["html"] : null))) {
            // line 28
            echo "    ";
            if (( !(null === (isset($context["boxed"]) ? $context["boxed"] : null)) && (((isset($context["boxed"]) ? $context["boxed"] : null) == 0) || ((isset($context["boxed"]) ? $context["boxed"] : null) == 2)))) {
                // line 29
                echo "        ";
                ob_start();
                // line 30
                echo "        <div class=\"g-container\">";
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 32
                echo "    ";
            }
            // line 33
            echo "
    ";
            // line 34
            ob_start();
            // line 35
            echo "    ";
            if (((isset($context["boxed"]) ? $context["boxed"] : null) == 2)) {
                $context["attr_class"] = ((isset($context["attr_class"]) ? $context["attr_class"] : null) . " g-flushed");
            }
            // line 36
            echo "    ";
            $context["attr_class"] = (((isset($context["attr_class"]) ? $context["attr_class"] : null)) ? (((" class=\"" . trim((isset($context["attr_class"]) ? $context["attr_class"] : null))) . "\"")) : (""));
            // line 37
            echo "    <";
            echo (isset($context["tag_type"]) ? $context["tag_type"] : null);
            echo " id=\"";
            echo (isset($context["attr_id"]) ? $context["attr_id"] : null);
            echo "\"";
            echo (isset($context["attr_class"]) ? $context["attr_class"] : null);
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
            echo ">
    ";
            // line 38
            if ((isset($context["attr_background"]) ? $context["attr_background"] : null)) {
                echo "<div class=\"section-background\" style=\"background-image: url(";
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc((isset($context["attr_background"]) ? $context["attr_background"] : null));
                echo ")\">";
            }
            // line 39
            echo "        ";
            echo (isset($context["html"]) ? $context["html"] : null);
            echo "
    ";
            // line 40
            if ((isset($context["attr_background"]) ? $context["attr_background"] : null)) {
                echo "</div>";
            }
            // line 41
            echo "    </";
            echo (isset($context["tag_type"]) ? $context["tag_type"] : null);
            echo ">
    ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 43
            echo "
    ";
            // line 44
            if (((isset($context["boxed"]) ? $context["boxed"] : null) == 1)) {
                // line 45
                echo "    <div class=\"g-container\">";
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "</div>
    ";
            } else {
                // line 47
                echo "    ";
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 47,  184 => 45,  182 => 44,  179 => 43,  173 => 41,  169 => 40,  164 => 39,  158 => 38,  148 => 37,  145 => 36,  140 => 35,  138 => 34,  135 => 33,  132 => 32,  126 => 30,  123 => 29,  120 => 28,  118 => 27,  115 => 26,  111 => 24,  97 => 23,  94 => 22,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  61 => 16,  55 => 15,  52 => 14,  47 => 13,  42 => 12,  40 => 11,  37 => 10,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@nucleus/layout/section.html.twig", "C:\\xampp\\htdocs\\damon2017\\wp-content\\themes\\g5_hydrogen\\custom\\engine\\templates\\layout\\section.html.twig");
    }
}
