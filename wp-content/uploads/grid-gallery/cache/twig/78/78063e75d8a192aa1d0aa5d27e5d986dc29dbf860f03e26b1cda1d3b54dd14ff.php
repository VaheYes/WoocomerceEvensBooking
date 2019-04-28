<?php

/* @galleries/settings.twig */
class __TwigTemplate_9572b59e4e82738c77770e91cb693e288d1d983356194462a422ce18b26f57e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/settings.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'gallery_preview_figure_attributes' => array($this, 'block_gallery_preview_figure_attributes'),
            'gallery_preview_image_attributes' => array($this, 'block_gallery_preview_image_attributes'),
            'settginsFigCaption' => array($this, 'block_settginsFigCaption'),
            'content' => array($this, 'block_content'),
            'proHiddenSettings' => array($this, 'block_proHiddenSettings'),
            'area' => array($this, 'block_area'),
            'galleryTypeSelectorItems' => array($this, 'block_galleryTypeSelectorItems'),
            'openByLink' => array($this, 'block_openByLink'),
            'browserUrlTooltipHide' => array($this, 'block_browserUrlTooltipHide'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'mosaicImagesCount' => array($this, 'block_mosaicImagesCount'),
            'mosaicGalleryImageCountText' => array($this, 'block_mosaicGalleryImageCountText'),
            'socialSharing' => array($this, 'block_socialSharing'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupLinkedImageText' => array($this, 'block_popupLinkedImageText'),
            'disableSourceImageForLi' => array($this, 'block_disableSourceImageForLi'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'lazyload' => array($this, 'block_lazyload'),
            'preload' => array($this, 'block_preload'),
            'attributes' => array($this, 'block_attributes'),
            'additionalCaptionSettings' => array($this, 'block_additionalCaptionSettings'),
            'post' => array($this, 'block_post'),
            'captionSettingsType' => array($this, 'block_captionSettingsType'),
            'overlaySettings' => array($this, 'block_overlaySettings'),
            'backgroundImageForHoverEffect' => array($this, 'block_backgroundImageForHoverEffect'),
            'backgroundColorForShowOnHover' => array($this, 'block_backgroundColorForShowOnHover'),
            'icons' => array($this, 'block_icons'),
            'proCaptionAndIconSettings' => array($this, 'block_proCaptionAndIconSettings'),
            'exifCaptionSettings' => array($this, 'block_exifCaptionSettings'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'watermark' => array($this, 'block_watermark'),
            'form' => array($this, 'block_form'),
            'captionEffectInPro' => array($this, 'block_captionEffectInPro'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
            'icon_wrap_item_class' => array($this, 'block_icon_wrap_item_class'),
            'settingsOtherPro' => array($this, 'block_settingsOtherPro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        // line 19
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left; padding-top: 20px;\">
        ";
        // line 38
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["gallery"] ?? null), "title", array());
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions and icons")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories and Pagination")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"water-m-tab\">
            <i class=\"fa fa-fw fa-certificate\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Watermark")), "html", null, true);
        echo "</span>
        </a>
        ";
        // line 70
        $this->displayBlock('tabs', $context, $blocks);
        // line 71
        echo "    </h2>
";
    }

    // line 70
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 74
    public function block_preview($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        if ($this->getAttribute(($context["settings"] ?? null), "watermark", array(), "any", true, true)) {
            // line 76
            echo "        ";
            $context["settingsWatermark"] = twig_array_merge($this->getAttribute(($context["settings"] ?? null), "watermark", array()), array("galleryId" => $this->getAttribute(($context["gallery"] ?? null), "id", array())));
            // line 77
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_attachment_settings')->getCallable(), array("watermark", ($context["settingsWatermark"] ?? null))), "html", null, true);
            echo "
    ";
        }
        // line 79
        echo "    ";
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/settings.twig", 79);
        // line 80
        echo "    ";
        $context["attachment"] = $this->loadTemplate("@galleries/helpers/attachment.twig", "@galleries/settings.twig", 80);
        // line 81
        echo "\t";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 81);
        // line 82
        echo "
\t";
        // line 83
        ob_start();
        // line 84
        echo "\t\t";
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 86
        echo "\t";
        $context["var_figcaption_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 87
        echo "\t";
        // line 88
        echo "\t";
        ob_start();
        // line 89
        echo "\t\t<div class=\"sggFigCaptionIconsEntry ggSettingsDisplNone

\t\t\thi-icon-wrap ";
        // line 91
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), 0, (($context["length"] ?? null) - 1)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
        echo "\">

\t\t\t";
        // line 93
        $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "video", array()))) ? ("fa-youtube-play") : ("fa-vimeo"));
        // line 94
        echo "\t\t\t";
        ob_start();
        // line 95
        echo "\t\t\t\t";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()))) {
            // line 96
            echo "\t\t\t\t\tmargin-left:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
            echo "px;
\t\t\t\t\tmargin-right:";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
            echo "px;
\t\t\t\t";
        }
        // line 99
        echo "\t\t\t";
        $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 100
        echo "\t\t\t<a href=\"#\" class=\"hi-icon gg-icon-video fa ";
        echo twig_escape_filter($this->env, ($context["videoIcon"] ?? null), "html", null, true);
        echo "\" style=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
\t\t\t<a href=\"#\" class=\"hi-icon gg-icon-link fa fa-link\" style=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
\t\t\t<a href=\"#\" class=\"hi-icon gg-icon-popup fa fa-expand\" style=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
\t\t</div>
\t";
        $context["simpleIconsEntryVal"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 105
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">
                ";
        // line 116
        echo "
                <li title=\"";
        // line 117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>
                        ";
        // line 120
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>
                        ";
        // line 128
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>
                        ";
        // line 135
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>
        ";
        // line 140
        if ( !twig_test_empty($this->getAttribute(($context["gallery"] ?? null), "photos", array()))) {
            // line 141
            echo "            <div style=\"
            ";
            // line 142
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width", array())))) {
                // line 143
                echo "                width:";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width", array()) + 40), "html", null, true);
                echo "px;
            ";
            }
            // line 145
            echo "            margin: 10px auto;
            max-width: 330px;
            clear:both;
            \">
                <figure
\t\t\t\t\t";
            // line 150
            $this->displayBlock('gallery_preview_figure_attributes', $context, $blocks);
            // line 156
            echo "\t\t\t\t\t>
\t\t\t\t\t";
            // line 157
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 158
            echo "
                    ";
            // line 159
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0)) {
                // line 160
                echo "                        ";
                $context["width"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array());
                // line 161
                echo "                    ";
            }
            // line 162
            echo "
                    ";
            // line 163
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0)) {
                // line 164
                echo "                        ";
                $context["height"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array());
                // line 165
                echo "                    ";
            }
            // line 166
            echo "
                    ";
            // line 167
            if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3"))) {
                // line 168
                echo "                        ";
                $context["crop"] = 1;
                // line 169
                echo "                    ";
            } else {
                // line 170
                echo "                        ";
                $context["height"] = null;
                // line 171
                echo "                    ";
            }
            // line 172
            echo "
                    ";
            // line 173
            if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                // line 174
                echo "                        ";
                $context["cropQuality"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "cropQuality", array());
                // line 175
                echo "                    ";
            } else {
                // line 176
                echo "                        ";
                $context["cropQuality"] = null;
                // line 177
                echo "                    ";
            }
            // line 178
            echo "                    <img
\t\t\t\t\t\t";
            // line 179
            $this->displayBlock('gallery_preview_image_attributes', $context, $blocks);
            // line 195
            echo "\t\t\t\t\t\t/>
\t\t\t\t\t";
            // line 196
            ob_start();
            // line 197
            echo "\t\t\t\t\t\t<figcaption style=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div style=\"display: table; height: 100%; width: 100%;\" class=\"sggFigcaptionCaptionWrapper\">
\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
\t\t\t\t\t\t\t\t\t<span ";
            // line 200
            if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                echo "dir=\"rtl\" class=\"ggRtlClass\"";
            }
            echo ">Gallery by Supsystic</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 203
            echo twig_escape_filter($this->env, ($context["simpleIconsEntryVal"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t";
            // line 205
            echo twig_escape_filter($this->env, ($context["var_figcaption_after"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t";
            $context["figcaptionBlockFree"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 207
            echo "
\t\t\t\t\t";
            // line 208
            $this->displayBlock('settginsFigCaption', $context, $blocks);
            // line 211
            echo "                </figure>
            </div>
        ";
        } else {
            // line 214
            echo "            <div style=\"clear: both;\"></div>
            <h2 style=\"text-align: center;\">
                ";
            // line 216
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
            </h2>
        ";
        }
        // line 220
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
\t\t\t<div class=\"shortcode\">";
        // line 224
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo "
\t\t\t\t<input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "config", array()), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly>
\t\t\t\t";
        // line 226
        echo $context["form"]->getshow_tooltip("sgg-shortcode");
        echo "
\t\t\t</div>
\t\t\t<div class=\"shortcode\">";
        // line 228
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo "
\t\t\t\t<input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute(($context["gallery"] ?? null), "id", array())) . "]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly>
\t\t\t\t";
        // line 230
        echo $context["form"]->getshow_tooltip("sgg-php-code");
        echo "
\t\t\t</div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\" class=\"gg-preview-bottom-bar\">
\t\t\t<a class=\"button button-primary\" target=\"_blank\"
\t\t\t   href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-fw fa-eye\"></i>
\t\t\t\t";
        // line 241
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
\t\t\t</a>

            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i> ";
        // line 244
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
\t\t\t<a class=\"button\" id=\"ggCreateClone\" href=\"#\" target=\"_blank\" data-url=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("_wpnonce" => ($context["_wpnonce"] ?? null))), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-clone\"></i>
\t\t\t\t";
        // line 247
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone")), "html", null, true);
        echo "
\t\t\t</a>
        </div>
\t\t<div class=\"gg-sett-preview-other-plugin\">
\t\t\t<label for=\"enableForMembership\" class=\"gg-sett-plugin-member-lbl\">";
        // line 251
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable for Membership:")), "html", null, true);
        echo "</label>
\t\t\t";
        // line 252
        if (($this->getAttribute(($context["pageOptions"] ?? null), "isMembershipPluginActive", array()) == "true")) {
            // line 253
            echo "\t\t\t\t<select id=\"enableForMembership\" style=\"width: auto;\" name=\"plugins[membership][enable]\" ";
            echo twig_escape_filter($this->env, ($context["disableMembershipOpt"] ?? null), "html", null, true);
            echo " >
\t\t\t\t\t<option value=\"0\" ";
            // line 254
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "plugins", array()), "membership", array()), "enable", array()) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t";
            // line 255
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t\t<option value=\"1\" ";
            // line 257
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "plugins", array()), "membership", array()), "enable", array()) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t";
            // line 258
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t</select>
\t\t\t";
        } else {
            // line 262
            echo "\t\t\t\t<div class=\"gg-membership-plug-info\">
\t\t\t\t\t";
            // line 263
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Membership by Supsystic to use this feature. ")), "html", null, true);
            echo "
\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pageOptions"] ?? null), "membershipInstallUrl", array()), "html", null, true);
            echo "\">Install</a>
\t\t\t\t\t";
            // line 265
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" plugin from your admin area, or visit it's official page on Wordpress.org ")), "html", null, true);
            echo "
\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pageOptions"] ?? null), "membershipInstallWpUrl", array()), "html", null, true);
            echo "\">here</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 269
        echo "\t\t</div>
    </div>
\t<input type=\"hidden\" id=\"ggMsgCloningGallery\" value=\"";
        // line 271
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cloning gallery...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgServerInternalError\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Server internal error")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImgOptimizationErrorOcured\" value=\"";
        // line 273
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery image optimization error ocured.")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggIoParams\" value=\"";
        // line 274
        echo twig_escape_filter($this->env, ($context["ioServiceParams"] ?? null), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggCdnParams\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, ($context["cdnServiceParams"] ?? null), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOptimized\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimized")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgTransfer\" value=\"";
        // line 277
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfered")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOf\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImages\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryImageOptimizing\" value=\"";
        // line 280
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Image optimizing...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryTransferToCnd\" value=\"";
        // line 281
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tranfer images to CDN")), "html", null, true);
        echo "\"/>

\t<div id=\"ggCloneModalWndId\" style=\"display: none;\">
\t\t<label for=\"ggCloneTypeSelector\">";
        // line 284
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type:")), "html", null, true);
        echo "</label>
\t\t";
        // line 285
        echo $context["form"]->getselect("CloneTypeSelector", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone with images")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone without images"))), 0, array("style" => "width: auto;", "id" => "ggCloneTypeSelector"));
        // line 293
        echo "
\t</div>

";
    }

    // line 84
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 85
        echo "\t\t";
    }

    // line 150
    public function block_gallery_preview_figure_attributes($context, array $blocks = array())
    {
        // line 151
        echo "\t\t\t\t\t\tclass=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\"
\t\t\t\t\t\t";
        // line 152
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 153
            echo "\t\t\t\t\t\t\tdata-thumb-overlay-personal=\"1\"
\t\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t";
    }

    // line 179
    public function block_gallery_preview_image_attributes($context, array $blocks = array())
    {
        // line 180
        echo "\t\t\t\t\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), ($context["width"] ?? null), ($context["height"] ?? null), ($context["crop"] ?? null), ($context["cropQuality"] ?? null))), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute(($context["gallery"] ?? null), "title", array())), "html", null, true);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["gallery"] ?? null), "title", array());
        echo "\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\tmax-width: 290px; max-height: 290px;
\t\t\t\t\t\t\t\t";
        // line 183
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())))) {
            // line 184
            echo "\t\t\t\t\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 186
            echo "\t\t\t\t\t\t\t\t\twidth: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array())))) {
            // line 189
            echo "\t\t\t\t\t\t\t\t\theight: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 191
            echo "\t\t\t\t\t\t\t\t\theight: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 193
        echo "\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t";
    }

    // line 208
    public function block_settginsFigCaption($context, array $blocks = array())
    {
        // line 209
        echo "\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ($context["figcaptionBlockFree"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t";
    }

    // line 298
    public function block_content($context, array $blocks = array())
    {
        // line 299
        echo "    ";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 299);
        // line 300
        echo "    ";
        $context["f"] = $this;
        // line 301
        echo "
\t<div class=\"gg-wraper-anchor-nav-links\" style=\"display: none;\">
\t\t<a href=\"#gg-anl-main\" class=\"gg-anchor-nav-links\">";
        // line 303
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Type")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-mosaic-image-count-text-wrapper\" class=\"gg-anchor-nav-links ggSettingsDisplNone\" id=\"gg-anl-mosaic-settings-link\">";
        // line 304
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Count Settings")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-soc-share\" class=\"gg-anchor-nav-links\">";
        // line 305
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-load-more\" class=\"gg-anchor-nav-links\" id=\"gg-anl-load-more-link\">";
        // line 306
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load More")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-cust-button\" class=\"gg-anchor-nav-links\">";
        // line 307
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons")), "html", null, true);
        echo "</a>
        <a href=\"#gg-anl-horiz-scroll\" class=\"gg-anchor-nav-links\">";
        // line 308
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-border-type\" class=\"gg-anchor-nav-links\">";
        // line 309
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-shadow\" class=\"gg-anchor-nav-links\">";
        // line 310
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-popup\" class=\"gg-anchor-nav-links\">";
        // line 311
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lightbox")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-lazyload\" class=\"gg-anchor-nav-links\">";
        // line 312
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("LazyLoad")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-preloader\" class=\"gg-anchor-nav-links\">";
        // line 313
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loader")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-attributes\" class=\"gg-anchor-nav-links\">";
        // line 314
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Attributes")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-caption-add-sett\" class=\"gg-anchor-nav-links\">";
        // line 315
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption Transformations")), "html", null, true);
        echo "</a>
\t</div>
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 317
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">
        ";
        // line 318
        echo $context["form"]->getopen("post", $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()), "_wpnonce" => ($context["_wpnonce"] ?? null))), "method"), array("id" => "form-settings", "class" => "form-gall-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 319
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "previewImage", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortto]\" type=\"hidden\" value=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortto", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortby]\" type=\"hidden\" value=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()), "html", null, true);
        echo "\"/>
\t\t";
        // line 323
        echo $context["form"]->gethidden("plugins[membership][enable]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "plugins", array()), "membership", array()), "enable", array()), array("id" => "hiddenInpMembershipEnableVal"));
        echo "
\t\t";
        // line 324
        $this->displayBlock('proHiddenSettings', $context, $blocks);
        // line 325
        echo "
        <div data-tab=\"area\">
            ";
        // line 327
        $this->displayBlock('area', $context, $blocks);
        // line 505
        echo "
            ";
        // line 506
        $this->displayBlock('mosaicImagesCount', $context, $blocks);
        // line 508
        echo "
\t\t\t";
        // line 509
        $this->displayBlock('mosaicGalleryImageCountText', $context, $blocks);
        // line 511
        echo "
            ";
        // line 512
        $this->displayBlock('socialSharing', $context, $blocks);
        // line 683
        echo "
            <div class=\"load-more-button-preview\" id=\"gg-anl-load-more\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 686
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 688
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 691
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\" id=\"gg-anl-cust-button\">
                <table class=\"form-table\">
                    <thead>
                        ";
        // line 701
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")),         // line 702
$context["form"]->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>

\t\t\t";
        // line 708
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 776
        echo "
            ";
        // line 777
        $this->displayBlock('border', $context, $blocks);
        // line 810
        echo "
            ";
        // line 811
        $this->displayBlock('shadow', $context, $blocks);
        // line 880
        echo "
            ";
        // line 881
        $this->displayBlock('popup', $context, $blocks);
        // line 1248
        echo "
\t\t\t";
        // line 1249
        $this->displayBlock('lazyload', $context, $blocks);
        // line 1282
        echo "
            ";
        // line 1283
        $this->displayBlock('preload', $context, $blocks);
        // line 1336
        echo "
            ";
        // line 1337
        $this->displayBlock('attributes', $context, $blocks);
        // line 1351
        echo "
\t\t\t";
        // line 1352
        $this->displayBlock('additionalCaptionSettings', $context, $blocks);
        // line 1382
        echo "\t\t\t";
        echo $context["form"]->gethidden("adminPage[slimScrollStartPos]", (($this->getAttribute($this->getAttribute(        // line 1384
($context["settings"] ?? null), "adminPage", array(), "any", false, true), "slimScrollStartPos", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "adminPage", array(), "any", false, true), "slimScrollStartPos", array()), 0)) : (0)), array("id" => "slimScrollStartPos"));
        // line 1386
        echo "
        </div>

        ";
        // line 1389
        $this->displayBlock('post', $context, $blocks);
        // line 1407
        echo "
\t\t<div data-tab=\"overlay\">
\t\t\t";
        // line 1410
        echo "\t\t\t";
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-disappear" => "Disappear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "revolving-door-original-left" => "Revolving Door Original Left", "revolving-door-original-right" => "Revolving Door Original Right", "revolving-door-original-top" => "Revolving Door Original Top", "revolving-door-original-bottom" => "Revolving Door Original Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Skwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phosphorus Rotate", "phophorus-offset" => "Phosphorus Offset", "phophorus-scale" => "Phosphorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube", "show-on-hover" => "Show on Hover", "swing" => "Swing");
        // line 1446
        echo "\t\t\t";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 1453
        echo "\t\t\t";
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1454
        echo "\t\t\t";
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) ? ("true") : ("false"));
        // line 1455
        echo "
            ";
        // line 1456
        $this->displayBlock('captionSettingsType', $context, $blocks);
        // line 1486
        echo "\t\t\t";
        echo $context["form"]->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1488
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array()), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"));
        // line 1490
        echo "
\t\t\t";
        // line 1491
        echo         // line 1492
$context["form"]->gethidden("icons[effect]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), array("id" => "iconsEffectName"));
        // line 1493
        echo "

\t\t\t<div class=\"ggCaptionBuilderWrap\">
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"captions-icons\">
\t\t\t\t\t";
        // line 1497
        $this->displayBlock('overlaySettings', $context, $blocks);
        // line 1740
        echo "
\t\t\t\t\t";
        // line 1741
        $this->displayBlock('icons', $context, $blocks);
        // line 1880
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"caption-builder\">
\t\t\t\t\t";
        // line 1882
        $this->displayBlock('proCaptionAndIconSettings', $context, $blocks);
        // line 1884
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"exit-info\">
\t\t\t\t\t";
        // line 1886
        $this->displayBlock('exifCaptionSettings', $context, $blocks);
        // line 1903
        echo "\t\t\t\t</div>
\t\t\t</div>
        </div>

        ";
        // line 1907
        $this->displayBlock('categories', $context, $blocks);
        // line 1940
        echo "
        ";
        // line 1941
        $this->displayBlock('watermark', $context, $blocks);
        // line 1954
        echo "
        ";
        // line 1955
        $this->displayBlock('form', $context, $blocks);
        // line 1957
        echo "
        ";
        // line 1958
        echo $context["form"]->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 1960
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">
                    ";
        // line 1963
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 1967
        echo twig_escape_filter($this->env, $this->getAttribute(($context["preset"] ?? null), "title", array()), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 1968
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 1972
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>
                ";
        // line 1974
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute(($context["preset"] ?? null), "title", array())), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 1976
        echo twig_escape_filter($this->env, $this->getAttribute(($context["preset"] ?? null), "id", array()), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 1979
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 1981
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">
                    ";
        // line 1988
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">
                    ";
        // line 1992
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 1997
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1999
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
\t\t\t<div class=\"popupPlacementTypeWrapper\">
\t\t\t\t";
        // line 2002
        $context["popupPlacementType"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "placementType", array()) == null)) ? (0) : ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "placementType", array())));
        // line 2003
        echo "\t\t\t\t<h4>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("How to fit image in lightbox")), "html", null, true);
        echo "</h4>
\t\t\t\t";
        // line 2004
        echo ((((((((        // line 2005
$context["form"]->getradio("popup[placementType]", "0", twig_array_merge(array("id" => "popupPlacementTypeFts", "class" => "popupPlacementTypeRadio"), (((        // line 2008
($context["popupPlacementType"] ?? null) == 0)) ? (array("checked" => "checked")) : (array())))) .         // line 2010
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Fit To Screen")), "popupPlacementTypeFts")) . "<br/>") .         // line 2014
$context["form"]->getradio("popup[placementType]", "1", twig_array_merge(array("id" => "popupPlacementTypeFw", "class" => "popupPlacementTypeRadio"), (((        // line 2017
($context["popupPlacementType"] ?? null) == 1)) ? (array("checked" => "checked")) : (array()))))) .         // line 2019
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Fit Width")), "popupPlacementTypeFw")) . "<br/>") .         // line 2023
$context["form"]->getradio("popup[placementType]", "2", twig_array_merge(array("id" => "popupPlacementTypeSo", "class" => "popupPlacementTypeRadio"), (((        // line 2026
($context["popupPlacementType"] ?? null) == 2)) ? (array("checked" => "checked")) : (array()))))) .         // line 2028
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Original")), "popupPlacementTypeSo")) . "<br/>");
        // line 2033
        echo "
\t\t\t</div>
            <div>
                ";
        // line 2036
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 2045
        echo "
                ";
        // line 2046
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 2047
            echo "                    ";
            $context["bigImageThemes"] = twig_array_merge(($context["bigImageThemes"] ?? null), array("theme_1_pro" => "Fullscreen popup"));
            // line 2048
            echo "                ";
        }
        // line 2049
        echo "
                ";
        // line 2050
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bigImageThemes"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 2051
            echo "                    <div class=\"grid-gallery-caption ";
            if (($context["value"] == $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "theme", array()))) {
                echo "gg-active";
            }
            echo "\">
                        <img data-name=\"";
            // line 2052
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-val=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 2053
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => $context["value"]), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"
                             title=\"";
            // line 2054
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 2056
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
\t\t\t\t\t\t<div class=\"gg-selected-theme\">
\t\t\t\t\t\t\t<div class=\"gg-selected-theme-txt\">";
            // line 2059
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(("Selected " . $context["name"]))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2063
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 2067
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
                ";
        // line 2069
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["effects"] ?? null));
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
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 2070
            echo "                    ";
            if (($context["type"] == "direction-aware")) {
                // line 2071
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 2079
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 2082
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 2085
$context["type"], array(0 => "show-on-hover", 1 => "fade-in", 2 => "grow", 3 => "shrink", 4 => "rotate-z", 5 => "square-to-circle"))) {
                // line 2086
                echo "\t\t\t\t\t\t";
                $this->displayBlock('captionEffectInPro', $context, $blocks);
                // line 2103
                echo "                    ";
            } elseif (($context["type"] == "3d-cube")) {
                // line 2104
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 2115
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                // line 2117
                echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span ";
                // line 2119
                if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                    echo "dir=\"rtl\" class=\"ggRtlClass\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 2125
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } else {
                // line 2129
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 2130
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 2131
                echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span ";
                // line 2134
                if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                    echo "dir=\"rtl\" class=\"ggRtlClass\"";
                }
                echo " style=\"display:table-cell;font-size:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                // line 2139
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            }
            // line 2143
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2144
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
\t\t\t\t";
        // line 2145
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) != "1")) {
            // line 2146
            echo "\t\t\t\t\t<div class=\"captions-effect-with-icons\" data-confirm=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
            echo "\">
\t\t\t\t\t\t<h3>Captions effects with icons</h3>
\t\t\t\t\t\t";
            // line 2148
            $this->displayBlock('iconsEffects', $context, $blocks);
            // line 2172
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 2174
        echo "            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 2177
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 2179
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">
                ";
        // line 2182
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 2254
        echo "

                ";
        // line 2256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shadowPresets"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 2257
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 2258
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "\" data-offset-y=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "\" data-blur=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "\" data-color=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow: ";
            // line 2259
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 2260
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "name", array()), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">
                            ";
            // line 2263
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2267
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\" style=\"display:none\">
                <p>";
        // line 2290
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 2294
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"import-gallery-loading\">
                <p>";
        // line 2297
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loading gallery list...")), "html", null, true);
        echo "</p>
            </div>
        </div>

\t\t<div id=\"videoUrlAddDialog\" title=\"";
        // line 2301
        echo "Add video url";
        echo "\" style=\"display:none;\" data-gallery-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t\t<div class=\"sggVideoUrlAddWr\">
\t\t\t\t<div class=\"sggTableRow\">
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t<div class=\"sggDlgVideoTypeH3\">";
        // line 2305
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video type:")), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t";
        // line 2308
        echo ((((        // line 2309
$context["form"]->getradio("sggDlgVideoType", "youtube", array("id" => "sggDlgYoutubeVideoType", "class" => "sggDlgVideoTypeRadio", "checked" => "checked")) .         // line 2314
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Youtube url")), "sggDlgYoutubeVideoType")) . "<br/>") .         // line 2318
$context["form"]->getradio("sggDlgVideoType", "vimeo", array("id" => "sggDlgVimeoVideoType", "class" => "sggDlgVideoTypeRadio"))) .         // line 2323
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Vimeo url")), "sggDlgVimeoVideoType"));
        // line 2327
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sggTableRow\">
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t<div class=\"sggDlgVideoTypeH3\">";
        // line 2332
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video url:")), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t";
        // line 2335
        echo         // line 2336
$context["form"]->getinput("text", "sggDlgUrlVideoValue", "", array("id" => "sggDlgUrlVideoInp", "class" => ""));
        // line 2342
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sggTableRow sggAduHiden\" id=\"sggAduErrorText\"></div>
\t\t\t</div>
\t\t</div>

        ";
        // line 2349
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/settings.twig", 2349);
        // line 2350
        echo "        <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
            ";
        // line 2351
        echo $context["importTypes"]->getshow(400, $this->getAttribute(($context["gallery"] ?? null), "id", array()));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 2354
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 2355
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 2356
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>

        <div class=\"loader-dialog-preview\" title=\"";
        // line 2360
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 2362
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>

    ";
        // line 2369
        $this->displayBlock('modals', $context, $blocks);
        // line 2425
        echo "
\t";
        // line 2426
        $this->displayBlock('settingsOtherPro', $context, $blocks);
    }

    // line 324
    public function block_proHiddenSettings($context, array $blocks = array())
    {
    }

    // line 327
    public function block_area($context, array $blocks = array())
    {
        // line 328
        echo "                <table class=\"form-table\" name=\"area\" id=\"gg-anl-main\">
                    <thead>
\t\t\t\t\t\t";
        // line 330
        $this->displayBlock('galleryTypeSelectorItems', $context, $blocks);
        // line 349
        echo "
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
        // line 353
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        echo "
        \t\t\t\t\t\t\t";
        // line 354
        echo $context["form"]->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 360
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                        ";
        // line 364
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), (((((((((((((        // line 365
$context["form"]->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array()), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $context["form"]->getspan("", "px")) .         // line 366
$context["form"]->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 368
$context["form"]->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array()), 768)) : (768)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 369
$context["form"]->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 371
$context["form"]->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 372
($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array()), 320)) : (320)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 373
$context["form"]->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")), "responsive-columns");
        echo "

                        ";
        // line 377
        echo "
    \t\t\t\t\t";
        // line 378
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")),         // line 379
$context["form"]->getinput("text", "title", $this->getAttribute(($context["gallery"] ?? null), "title", array()), array("style" => array("width" => "232px;"))), "title");
        // line 380
        echo "

\t\t\t\t\t\t";
        // line 382
        echo $context["form"]->getrow($this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Gallery alignment"), "method"),         // line 383
$context["form"]->getselect("area[position]", array(0 => "Left", 1 => "Center", 2 => "Right"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "position", array()), 1)) : (1)), array("style" => "width: 100px;")), "gallery-align");
        echo "


\t\t\t\t\t\t";
        // line 386
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between images")), (        // line 387
$context["form"]->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()), array("style" => array("width" => "140px;"))) .         // line 388
$context["form"]->getspan("", "pixels")), "distance");
        echo "

                        ";
        // line 390
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), (        // line 391
$context["form"]->getinput("number", "area[width]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width", array()), array("style" => array("width" => "140px"))) .         // line 392
$context["form"]->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width_unit", array()), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        echo "

                        ";
        // line 395
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Full screen width")),         // line 396
$context["form"]->getcheckbox("fullscreen", "1", (($this->getAttribute(        // line 399
($context["settings"] ?? null), "fullscreen", array())) ? (array("checked" => "checked")) : (array()))), "full-screen-width");
        // line 402
        echo "

                        ";
        // line 404
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), (        // line 405
$context["form"]->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "padding", array()), 0)) : (0)), array("style" => array("width" => "140px"))) . $context["form"]->getspan("", "pixels")), "area-padding");
        echo "

                        ";
        // line 412
        echo "
                        ";
        // line 413
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), (        // line 414
$context["form"]->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), array("style" => array("width" => "140px"))) .         // line 415
$context["form"]->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-width");
        echo "


                        ";
        // line 418
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), (        // line 419
$context["form"]->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), array("style" => array("width" => "140px"))) .         // line 420
$context["form"]->getselect("area[photo_height_unit]", array(0 => "pixels"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-height");
        echo "

                        ";
        // line 422
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), (        // line 423
$context["form"]->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()), array("style" => array("width" => "140px"))) .         // line 424
$context["form"]->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "border-radius");
        echo "

                        ";
        // line 427
        echo "                        ";
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 439
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")),         // line 440
$context["form"]->getselect("thumbnail[cropQuality]",         // line 442
($context["qualityList"] ?? null), (($this->getAttribute($this->getAttribute(        // line 443
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100"))), "cropQuality");
        // line 446
        echo "

                        ";
        // line 448
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Display only first image")),         // line 449
$context["form"]->getcheckbox("displayFirstPhoto", "on", ((($this->getAttribute(        // line 452
($context["settings"] ?? null), "displayFirstPhoto", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "display-first-photo", null, "display-first-photo-row");
        // line 457
        echo "

                        ";
        // line 459
        $this->displayBlock('openByLink', $context, $blocks);
        // line 467
        echo "
\t\t\t\t\t\t";
        // line 468
        $this->displayBlock('browserUrlTooltipHide', $context, $blocks);
        // line 477
        echo "
\t\t\t\t\t\t";
        // line 478
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable image title")),         // line 479
$context["form"]->getcheckbox("disableImageTitle", 1, ((($this->getAttribute(        // line 482
($context["settings"] ?? null), "disableImageTitle", array()) == 1)) ? (array("checked" => "checked")) : (array()))), null, null, null);
        // line 485
        echo "

                        ";
        // line 487
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 489
        echo "
\t\t\t\t\t\t";
        // line 490
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use these settings by default")),         // line 491
$context["form"]->getcheckbox("defaultsettings", "1", (($this->getAttribute(        // line 494
($context["settings"] ?? null), "defaultsettings", array())) ? (array("checked" => "checked")) : (array()))), "default-settings");
        // line 497
        echo "



                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 330
    public function block_galleryTypeSelectorItems($context, array $blocks = array())
    {
        // line 331
        echo "\t\t\t\t\t\t\t";
        $context["galleryTypeObj"] = array(0 => array("value" => "0", "title" => "Fixed"), 1 => array("value" => "1", "title" => "Vertical"), 2 => array("value" => "2", "title" => "Horizontal"), 3 => array("value" => "3", "title" => "Fixed Columns"), 4 => array("value" => "4", "title" => (("Mosaic(" . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Available in Pro"))) . ")"), "disabled" => 1));
        // line 338
        echo "
\t\t\t\t\t\t\t";
        // line 339
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")),         // line 340
$context["form"]->getselectWithElem("area[grid]",         // line 342
($context["galleryTypeObj"] ?? null), $this->getAttribute($this->getAttribute(        // line 343
($context["settings"] ?? null), "area", array()), "grid", array()), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
        // line 347
        echo "
\t\t\t\t\t\t";
    }

    // line 459
    public function block_openByLink($context, array $blocks = array())
    {
        // line 460
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open by link in popup")), "utm_source=plugin&utm_medium=open-by-link&utm_campaign=gallery", "open-by-link",         // line 463
$context["form"]->getcheckbox("openByLink", "on", array("disabled" => "disabled")));
        // line 465
        echo "
                        ";
    }

    // line 468
    public function block_browserUrlTooltipHide($context, array $blocks = array())
    {
        // line 469
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide browser url tooltip on image hover")), "utm_source=plugin&utm_medium=browser-url-tooltip-hide&utm_campaign=gallery", "browserUrlTooltipHideFree",         // line 472
$context["form"]->getcheckbox("browserUrlTooltipHideFree", "on", array("disabled" => "disabled")));
        // line 474
        echo "

\t\t\t\t\t\t";
    }

    // line 487
    public function block_disableRightClick($context, array $blocks = array())
    {
        // line 488
        echo "                        ";
    }

    // line 506
    public function block_mosaicImagesCount($context, array $blocks = array())
    {
        // line 507
        echo "            ";
    }

    // line 509
    public function block_mosaicGalleryImageCountText($context, array $blocks = array())
    {
        // line 510
        echo "\t\t\t";
    }

    // line 512
    public function block_socialSharing($context, array $blocks = array())
    {
        // line 513
        echo "                <table class=\"form-table\" id=\"gg-anl-soc-share\">
                    <thead>
                    ";
        // line 515
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), (((        // line 516
$context["form"]->getradio("socialSharing[enabled]", true, twig_array_merge(array("id" => "social-sharing-enable"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array())))) .         // line 517
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "social-sharing-enable")) .         // line 518
$context["form"]->getradio("socialSharing[enabled]", false, twig_array_merge(array("id" => "social-sharing-disable"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) ? (array()) : (array("checked" => "checked")))))) .         // line 519
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "social-sharing-disable")), "social-sharing", true);
        echo "
                    </thead>
                    <tbody style=\"display: none;\">
                    ";
        // line 522
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "pluginInstalled", array())) {
            // line 523
            echo "                        ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "projectsList", array()))) {
                // line 524
                echo "

                            ";
                // line 526
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Buttons Project")),                 // line 527
$context["form"]->getselect("socialSharing[projectId]", $this->getAttribute($this->getAttribute(                // line 528
($context["settings"] ?? null), "socialSharing", array()), "projectsList", array()), $this->getAttribute($this->getAttribute(                // line 529
($context["settings"] ?? null), "socialSharing", array()), "projectId", array()), array("style" => "width: 200px")), "social-buttons-project");
                // line 531
                echo "

                            ";
                // line 534
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social setup")),                 // line 535
$context["form"]->getbutton("button-social-setup", "Show social setup", array("class" => "button button-primary")), "social-setup-dialog", false);
                // line 536
                echo "


                            ";
                // line 539
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Sharing")),                 // line 540
$context["form"]->getcheckbox("socialSharing[gallerySharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 543
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "gallery-social-sharing", "h4");
                // line 547
                echo "

                            ";
                // line 549
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 550
$context["form"]->getselect("socialSharing[gallerySharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "all" => "top and bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 556
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "gallery-sharing-buttons-position");
                // line 558
                echo "

                            ";
                // line 560
                echo $context["form"]->getrow("",                 // line 561
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", "0", array("checked" => "checked")), "image-sharing-hidden");
                echo "

                            ";
                // line 563
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "enabled", array());
                // line 564
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Sharing")),                 // line 565
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", true, (((                // line 568
($context["enabled"] ?? null) != "0")) ? (array("checked" => "checked")) : (array()))), "image-social-sharing", "h4");
                // line 572
                echo "

                            ";
                // line 574
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 575
$context["form"]->getselect("socialSharing[imageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 582
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "image-sharing-buttons-position");
                // line 584
                echo "

                            ";
                // line 586
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 587
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 593
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-horizontal");
                // line 595
                echo "

                            ";
                // line 597
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 598
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 604
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-vertical");
                // line 606
                echo "

                            ";
                // line 608
                echo $context["form"]->getrow("",                 // line 609
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", "0", array("checked" => "checked")), "popup-sharing-hidden");
                echo "

                            ";
                // line 611
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array());
                // line 612
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Sharing")),                 // line 613
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", true, (((                // line 616
($context["enabled"] ?? null) != "0")) ? (array("checked" => "checked")) : (array()))), "popup-social-sharing", "h4");
                // line 620
                echo "

                            ";
                // line 622
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 623
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 630
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "popup-sharing-buttons-position");
                // line 632
                echo "

                            ";
                // line 634
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 635
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 641
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-horizontal");
                // line 643
                echo "

                            ";
                // line 645
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 646
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 652
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-vertical");
                // line 654
                echo "

                        ";
            } else {
                // line 657
                echo "                            <tr>
                                <td colspan=\"2\">
                                    <span>";
                // line 659
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no Social Sharing projects for now.")), "html", null, true);
                echo " </span>
                                    <a href=\"/wp-admin/admin.php?page=supsystic-social-sharing&module=projects&action=add\"
                                       target=\"_blank\" rel=\"noopener noreferrer\"
                                    >";
                // line 662
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create your first project")), "html", null, true);
                echo "</a>
                                    <span> ";
                // line 663
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("then just reload page with your Gallery settings, and you will see list with available Social Projects for your Gallery.")), "html", null, true);
                echo "</span>
                                </td>
                            </tr>
                        ";
            }
            // line 667
            echo "                    ";
        } else {
            // line 668
            echo "                        <tr>
                            <td colspan=\"2\">
                                <span>";
            // line 670
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Social Share Buttons by Supsystic to use this feature.")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/wp-admin/plugin-install.php?tab=search&type=term&s=Social+Share+Buttons+by+Supsystic\"
                                >";
            // line 672
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Install plugin")), "html", null, true);
            echo "</a>
                                <span> ";
            // line 673
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("from your admin area, or visit it's official page on Wordpress.org")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://wordpress.org/plugins/social-share-buttons-by-supsystic/\"> ";
            // line 674
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("here.")), "html", null, true);
            echo "</a>
                            </td>

                        </tr>
                    ";
        }
        // line 679
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 708
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 709
        echo "\t\t\t\t<table class=\"form-table\" id=\"gg-anl-horiz-scroll\">
\t\t\t\t\t<thead>
\t\t\t\t\t";
        // line 711
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 712
        echo "\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), (((        // line 713
$context["form"]->getradio("horizontalScroll[enabled]", "true", twig_array_merge(array("id" => "horizontal-scroll-enable"), ((($context["horizontalScrollEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 714
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) .         // line 715
$context["form"]->getradio("horizontalScroll[enabled]", "false", twig_array_merge(array("id" => "horizontal-scroll-disable"), ((($context["horizontalScrollEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 716
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        echo "
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 719
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")),         // line 720
$context["form"]->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array()), "color", array()), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        echo "

\t\t\t\t\t";
        // line 722
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")),         // line 723
$context["form"]->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 737
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "transparency", array()), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 738
        echo "

\t\t\t\t\t";
        // line 740
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mouse Wheel Scroll Step")),         // line 741
$context["form"]->gettext("horizontalScroll[mouseWheelStep]", (($this->getAttribute($this->getAttribute(        // line 743
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "mouseWheelStep", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "mouseWheelStep", array()), 20)) : (20)), array()), "hscroll-mouse-wheel");
        // line 747
        echo "

\t\t\t\t\t";
        // line 749
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Touch Scroll Step")),         // line 750
$context["form"]->gettext("horizontalScroll[touchStep]", (($this->getAttribute($this->getAttribute(        // line 752
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "touchStep", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "touchStep", array()), 200)) : (200)), array()), "hscroll-touch-gest");
        // line 756
        echo "

\t\t\t\t\t";
        // line 758
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive Mode")),         // line 759
$context["form"]->getselect("horizontalScroll[responsiveMode]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("None")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("One by One"))), (($this->getAttribute($this->getAttribute(        // line 764
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "responsiveMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "responsiveMode", array()), "0")) : ("0")), array("style" => "width: auto")), "hScrollResponsiveMode");
        // line 768
        echo "

\t\t\t\t\t";
        // line 770
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 772
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"separator\"></div>
\t\t\t";
    }

    // line 770
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
        // line 771
        echo "\t\t\t\t\t";
    }

    // line 777
    public function block_border($context, array $blocks = array())
    {
        // line 778
        echo "                <table class=\"form-table\" name=\"border\" id=\"gg-anl-border-type\">
                    <thead>
                        ";
        // line 795
        echo "
                        ";
        // line 796
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), (        // line 797
$context["form"]->getselect("thumbnail[border][type]", ($context["borderTypes"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()), array("style" => "width: auto;")) .         // line 798
$context["form"]->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
        echo "

                        ";
        // line 800
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")),         // line 801
$context["form"]->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
        echo "

                        ";
        // line 803
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), (        // line 804
$context["form"]->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .         // line 805
$context["form"]->getspan("", "pixels")), "border-width");
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 811
    public function block_shadow($context, array $blocks = array())
    {
        // line 812
        echo "                <table class=\"form-table\" name=\"shadow\" id=\"gg-anl-shadow\">
                    <thead>
                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">
                                    ";
        // line 817
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 818
        echo $context["form"]->getshow_tooltip("sgg-t-shadow");
        echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" ";
        // line 822
        if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 823
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
        echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\" ";
        // line 824
        if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) != "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 825
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">
                                ";
        // line 832
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow effect preset")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 833
        echo $context["form"]->getshow_tooltip("sgg-t-shadow-eff-preset");
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">
                                    ";
        // line 837
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">
                                ";
        // line 844
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        echo "
                                ";
        // line 845
        echo $context["form"]->getshow_tooltip("when-mouse-is-over");
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\" ";
        // line 849
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 850
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\" ";
        // line 852
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 853
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\" ";
        // line 855
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 856
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>

                        ";
        // line 862
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")),         // line 863
$context["form"]->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "overlay", array()), array("style" => "width: auto;")), "overlay-type");
        echo "

                        ";
        // line 865
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")),         // line 866
$context["form"]->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "color", array()), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        echo "

                        ";
        // line 868
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")),         // line 869
$context["form"]->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "blur", array()), array("style" => array("width" => "auto"))), "shadow-blur");
        echo "

                        ";
        // line 871
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")),         // line 872
$context["form"]->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "x", array()), array("style" => array("width" => "auto"))), "shadow-x");
        echo "

                        ";
        // line 874
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")),         // line 875
$context["form"]->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "y", array()), array("style" => array("width" => "auto"))), "shadow-y");
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 881
    public function block_popup($context, array $blocks = array())
    {
        // line 882
        echo "                <table class=\"form-table\" id=\"gg-anl-popup\">
                    <thead>
                        ";
        // line 885
        echo "                        ";
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 886
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), (((        // line 887
$context["form"]->getradio("box[enabled]", "true", twig_array_merge(array("id" => "box-enable"), ((        // line 890
($context["popUpEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 892
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) .         // line 896
$context["form"]->getradio("box[enabled]", "false", twig_array_merge(array("id" => "box-disable"), ((        // line 899
($context["popUpEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 901
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 905
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 909
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), ((        // line 910
$context["form"]->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) .         // line 915
$context["form"]->gethidden("box[type]", $this->getAttribute($this->getAttribute(        // line 917
($context["settings"] ?? null), "box", array()), "type", array()))) .         // line 919
$context["form"]->gethidden("box[theme]", $this->getAttribute($this->getAttribute(        // line 921
($context["settings"] ?? null), "box", array()), "theme", array()), array("id" => "bigImageTheme"))), "sgg-t-popup-theme");
        // line 924
        echo "

                        ";
        // line 927
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable popup border")),         // line 928
$context["form"]->getcheckbox("popup[border][enable]", "on", ((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 931
($context["settings"] ?? null), "popup", array()), "border", array()), "enable", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "popup-border-enable");
        // line 934
        echo "

                        ";
        // line 936
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop up border type")),         // line 937
$context["form"]->getselect("popup[border][type]", ($context["borderTypes"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "type", array()), array("style" => "width: auto;")), "border-type-popup");
        // line 938
        echo "

                        ";
        // line 940
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop up border color")),         // line 941
$context["form"]->getinput("text", "popup[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color-popup");
        echo "

                        ";
        // line 943
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop up border width")), (        // line 944
$context["form"]->getinput("number", "popup[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .         // line 945
$context["form"]->getspan("", "pixels")), "border-width-popup");
        echo "

                        ";
        // line 948
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")),         // line 949
$context["form"]->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute(        // line 952
($context["settings"] ?? null), "box", array()), "mobile", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 955
        echo "

                        ";
        // line 958
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Text")),         // line 959
$context["form"]->getselect("box[imageText]", array("data-caption" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), (($this->getAttribute($this->getAttribute(        // line 967
($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array()), "data-description")) : ("data-description")), array("style" => "width: 150px")), "popup-image-text");
        // line 970
        echo "

                        ";
        // line 973
        echo "                        ";
        $this->displayBlock('popupLinkedImageText', $context, $blocks);
        // line 998
        echo "
\t\t\t\t\t\t";
        // line 1000
        echo "\t\t\t\t\t\t";
        $this->displayBlock('disableSourceImageForLi', $context, $blocks);
        // line 1019
        echo "
                        ";
        // line 1021
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")),         // line 1022
$context["form"]->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute(        // line 1025
($context["settings"] ?? null), "box", array()), "captions", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 1028
        echo "

\t\t\t\t\t\t";
        // line 1030
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide long captions")),         // line 1031
$context["form"]->getcheckbox("hideLongTooltipTitles", "on", ((($this->getAttribute(        // line 1034
($context["settings"] ?? null), "hideLongTooltipTitles", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "hide-long-tooltip-titles");
        // line 1036
        echo "

                        ";
        // line 1039
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 1040
$context["form"]->gettext("box[background]", $this->getAttribute($this->getAttribute(        // line 1042
($context["settings"] ?? null), "box", array()), "background", array()), array("class" => "gg-color-picker")), "box-background");
        // line 1046
        echo "

                        ";
        // line 1049
        echo "\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background transparency")),         // line 1050
$context["form"]->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 1065
($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 1068
        echo "

                        ";
        // line 1071
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")),         // line 1072
$context["form"]->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute(        // line 1075
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), array("style" => "width: auto")), "slideshow", "h4");
        // line 1080
        echo "

                        ";
        // line 1083
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")),         // line 1084
$context["form"]->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute(        // line 1087
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"), "sgg-t-popup-slide-show-speed");
        // line 1091
        echo "

                        ";
        // line 1094
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")),         // line 1095
$context["form"]->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 1098
($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array()), "true")) : ("true")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 1103
        echo "

                        ";
        // line 1106
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")),         // line 1107
$context["form"]->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 1110
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"), "sgg-t-popup-slideshow-autostart");
        // line 1114
        echo "

                        ";
        // line 1117
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), (((        // line 1118
$context["form"]->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute(        // line 1121
($context["settings"] ?? null), "box", array()), "popupwidth", array()), array("style" => array("width" => "60px"))) .         // line 1124
$context["form"]->getspan("", "x")) .         // line 1125
$context["form"]->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute(        // line 1128
($context["settings"] ?? null), "box", array()), "popupheight", array()), array("style" => array("width" => "60px")))) .         // line 1131
$context["form"]->getspan("", "pixels")), "box-popupsize");
        // line 1133
        echo "


                        ";
        // line 1137
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable browser history")),         // line 1139
$context["form"]->getcheckbox("box[disableHistory]", "true", ((($this->getAttribute($this->getAttribute(        // line 1142
($context["settings"] ?? null), "box", array()), "disableHistory", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableHistory");
        // line 1145
        echo "

                        ";
        // line 1148
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable change url")),         // line 1150
$context["form"]->getcheckbox("box[disableChangeUrl]", "true", ((($this->getAttribute($this->getAttribute(        // line 1153
($context["settings"] ?? null), "box", array()), "disableChangeUrl", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableChangeUrl");
        // line 1156
        echo "

                        ";
        // line 1159
        echo "                        ";
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 1239
        echo "                    </tbody>
                </table>
\t\t\t\t";
        // line 1241
        echo $context["form"]->gethidden("popup[placementType]", (($this->getAttribute($this->getAttribute(        // line 1243
($context["settings"] ?? null), "popup", array(), "any", false, true), "placementType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "placementType", array()), 0)) : (0)), array("id" => "popupPlacementTypeHidden"));
        // line 1245
        echo "
                <div class=\"separator\"></div>
            ";
    }

    // line 973
    public function block_popupLinkedImageText($context, array $blocks = array())
    {
        // line 974
        echo "                            <tr>
                                <th scope=\"row\">
                                    <label style=\"margin: 0 !important;\">
                                        ";
        // line 977
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Linked Image Text")), "html", null, true);
        echo "
                                        ";
        // line 978
        echo $context["form"]->getshow_tooltip("popupLinkedImageTextPro");
        echo "
                                        <br />
                                        <label><a href=\"";
        // line 980
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                    </label>
                                </th>
                                <td>
                                    ";
        // line 984
        echo $context["form"]->getselect("box[linkedImageTextFree]", array("data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), "data-title", array("style" => "width: 150px", "disabled" => "", "id" => "ptsLinkTextChoose"));
        // line 994
        echo "
                                </td>
                            </tr>
                        ";
    }

    // line 1000
    public function block_disableSourceImageForLi($context, array $blocks = array())
    {
        // line 1001
        echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label style=\"margin: 0 !important;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1004
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable source image for Linked Images")), "html", null, true);
        echo "
                                        ";
        // line 1005
        echo $context["form"]->getshow_tooltip("disableSourceImageForLiPro");
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<label><a href=\"";
        // line 1007
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
        // line 1011
        echo $context["form"]->getcheckbox("box[disableSourceImageForLiFree]", "1", array("disabled" => "disabled"));
        // line 1015
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
    }

    // line 1159
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 1160
        echo "                            ";
        // line 1161
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", (((        // line 1164
$context["form"]->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1166
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array()), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) .         // line 1169
$context["form"]->getspan("", "x")) .         // line 1170
$context["form"]->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1172
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array()), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) .         // line 1175
$context["form"]->getspan("", "pixels")));
        // line 1176
        echo "

                            ";
        // line 1179
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay",         // line 1182
$context["form"]->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1185
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array()), "false")) : ("false")), array("disabled" => "")));
        // line 1188
        echo "

                            ";
        // line 1191
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd",         // line 1194
$context["form"]->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1201
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array()), "0")) : ("0")), array("disabled" => "")));
        // line 1204
        echo "

\t\t\t\t\t\t\t";
        // line 1206
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show rotate button")), "utm_source=plugin&utm_medium=popup_show_rotate_btn&utm_campaign=gallery", "box[freeSRB]",         // line 1209
$context["form"]->getcheckbox("box[freeSRB]", 1, array("disabled" => "")));
        // line 1214
        echo "

\t\t\t\t\t\t\t";
        // line 1216
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show details button")), "utm_source=plugin&utm_medium=popup_show_details_button&utm_campaign=gallery", "box[freeSLB]",         // line 1219
$context["form"]->getcheckbox("box[freeSLB]", 1, array("disabled" => "")));
        // line 1224
        echo "



\t\t\t\t\t\t\t";
        // line 1228
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show On hover thumbnail")), "utm_source=plugin&utm_medium=popup_show_thumbnail_on_hover&utm_campaign=gallery", "box[freeSTFOH]",         // line 1231
$context["form"]->getcheckbox("box[freeSTFOH]", 1, array("disabled" => "")));
        // line 1236
        echo "

                        ";
    }

    // line 1249
    public function block_lazyload($context, array $blocks = array())
    {
        // line 1250
        echo "\t\t\t\t<table class=\"form-table\" id=\"gg-anl-lazyload\">
\t\t\t\t\t<thead>
\t\t\t\t\t";
        // line 1253
        echo "\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lazy Load")), (((        // line 1254
$context["form"]->getradio("lazyload[enabled]", "1", twig_array_merge(array("id" => "lazyLoadEnabled"), ((($this->getAttribute($this->getAttribute(        // line 1257
($context["settings"] ?? null), "lazyload", array()), "enabled", array()) == "1")) ? (array("checked" => "checked")) : (array())))) .         // line 1259
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "lazyLoadEnabled")) .         // line 1263
$context["form"]->getradio("lazyload[enabled]", "0", twig_array_merge(array("id" => "lazyLoadDisabled"), ((($this->getAttribute($this->getAttribute(        // line 1266
($context["settings"] ?? null), "lazyload", array()), "enabled", array()) == "1")) ? (array()) : (array("checked" => "checked")))))) .         // line 1268
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "lazyLoadDisabled")), "sgg-t-lazyload-enable", true, "sggLazyLoadEnableRow");
        // line 1275
        echo "
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 1278
        echo twig_escape_filter($this->env, (($context["pluginUrl"] ?? null) . "/assets/img/loading.gif"), "html", null, true);
        echo "\" name=\"lazyload[defaultImgUrl]\"/>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
    }

    // line 1283
    public function block_preload($context, array $blocks = array())
    {
        // line 1284
        echo "                <table class=\"form-table\" name=\"preload\" id=\"gg-anl-preloader\">
                    <thead>
                        ";
        // line 1286
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1287
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), (((        // line 1288
$context["form"]->getradio("preload[enabled]", "true", twig_array_merge(array("id" => "preload-enable"), ((($context["preloadEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 1289
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) .         // line 1290
$context["form"]->getradio("preload[enabled]", "false", twig_array_merge(array("id" => "preload-disable"), ((($context["preloadEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1291
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        echo "
                    </thead>
                ";
        // line 1293
        if ( !$this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 1294
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 1298
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1300
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 1304
            echo $context["form"]->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>
                        ";
            // line 1307
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>
                        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 1317
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 1321
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            echo "
                                    ";
            // line 1322
            echo $context["form"]->getshow_tooltip("chooseIconPro");
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1324
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 1328
            echo $context["form"]->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            echo "
                                ";
            // line 1329
            echo twig_escape_filter($this->env, ($context["piconImg"] ?? null), "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>
                ";
        }
        // line 1334
        echo "                </table>
            ";
    }

    // line 1337
    public function block_attributes($context, array $blocks = array())
    {
        // line 1338
        echo "                <table class=\"form-table\" name=\"attributes\" id=\"gg-anl-attributes\">
                    <thead>
                    \t";
        // line 1340
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Attributes")), "utm_source=plugin&utm_campaign=gallery", "customAttributes", (((        // line 1343
$context["form"]->getradio("attributes[enabled]", "true", array("id" => "attributes-enable", "disabled" => "disabled")) .         // line 1344
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "attributes-enable")) .         // line 1345
$context["form"]->getradio("attributes[enabled]", "false", array("id" => "attributes-disable", "checked" => "checked", "disabled" => "disabled"))) .         // line 1346
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "attributes-disable")), true, 1);
        // line 1347
        echo "
                    </thead>
                </table>
            ";
    }

    // line 1352
    public function block_additionalCaptionSettings($context, array $blocks = array())
    {
        // line 1353
        echo "\t\t\t\t<table class=\"form-table\" name=\"captionAdditSett\" id=\"gg-anl-caption-add-sett\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t";
        // line 1355
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thumbnail transformations")), "utm_source=plugin&utm_medium=additinalCaptionSettings&utm_campaign=gallery", "additionalCaptionSettingInPro", (((        // line 1358
$context["form"]->getradio("captionEffectSettings[Enable]", 1, array("id" => "captEffSettEnable", "class" => "captAdditEffectSettEnbl", "disabled" => "disabled")) .         // line 1363
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "captEffSettEnable")) .         // line 1367
$context["form"]->getradio("captionEffectSettings[Enable]", 0, array("id" => "captEffDisable", "class" => "captAdditEffectSettEnbl", "checked" => "checked", "disabled" => "disabled"))) .         // line 1372
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "captEffDisable")), true, 1);
        // line 1378
        echo "
\t\t\t\t\t</thead>
\t\t\t\t</table>
\t\t\t";
    }

    // line 1389
    public function block_post($context, array $blocks = array())
    {
        // line 1390
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1392
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts layout")), "html", null, true);
        echo "
                    ";
        // line 1393
        echo $context["form"]->getshow_tooltip("postsLayoutPro");
        echo "
                    </br>
                    <a class=\"button get-pro\" target=\"_blank\"
                       href=\"";
        // line 1396
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 39\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1401
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 1402
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.gif\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1456
    public function block_captionSettingsType($context, array $blocks = array())
    {
        // line 1457
        echo "\t\t\t\t<table class=\"form-table captions-settings-type\" name=\"captionSettingsType\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 1459
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use Caption Builder")), "utm_source=plugin&utm_medium=caption_settings_type&utm_campaign=gallery", "caption-settings-type-pro", (((        // line 1462
$context["form"]->getradio("captionBuilder[enabled]", 1, array("id" => "ggsShowUserCaptionBuilder", "class" => "ggUserCaptionBuilderCl", "disabled" => "disabled")) .         // line 1467
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "ggsShowUserCaptionBuilder")) .         // line 1471
$context["form"]->getradio("captionBuilder[enabled]", 0, array("id" => "ggsHideUserCaptionBuilder", "class" => "ggUserCaptionBuilderCl", "disabled" => "disabled", "checked" => "checked"))) .         // line 1476
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "ggsHideUserCaptionBuilder")), "useCaptionBuilder", true);
        // line 1482
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
    }

    // line 1497
    public function block_overlaySettings($context, array $blocks = array())
    {
        // line 1498
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"captions\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t";
        // line 1501
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), (((        // line 1502
$context["form"]->getradio("thumbnail[overlay][enabled]", "true", twig_array_merge(array("id" => "showCaptions"), ((        // line 1505
($context["enableCaptions"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 1507
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) .         // line 1511
$context["form"]->getradio("thumbnail[overlay][enabled]", "false", twig_array_merge(array("id" => "hideCaptions"), ((        // line 1514
($context["enableCaptions"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1516
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "sgg-ci-caption-enable", true, "useCaptions");
        // line 1521
        echo "

\t\t\t\t\t\t\t";
        // line 1524
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")),         // line 1525
$context["form"]->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")), "chooseEffect");
        // line 1531
        echo "

\t\t\t\t\t\t\t";
        // line 1534
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('backgroundImageForHoverEffect', $context, $blocks);
        // line 1549
        echo "
\t\t\t\t\t\t\t";
        // line 1551
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('backgroundColorForShowOnHover', $context, $blocks);
        // line 1564
        echo "
\t\t\t\t\t\t\t";
        // line 1566
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")),         // line 1567
$context["form"]->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1570
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array()), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 1574
        echo "

\t\t\t\t\t\t\t";
        // line 1577
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")),         // line 1578
$context["form"]->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))),         // line 1581
($context["polaroidIsEnable"] ?? null), array("style" => "width: auto;", "class" => "polaroid-effect-class")), "polaroid-effect", "h4");
        // line 1586
        echo "

\t\t\t\t\t\t\t";
        // line 1589
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")),         // line 1590
$context["form"]->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1593
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 1597
        echo "

\t\t\t\t\t\t\t";
        // line 1600
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")),         // line 1601
$context["form"]->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1604
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 1608
        echo "

\t\t\t\t\t\t\t";
        // line 1611
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")),         // line 1612
$context["form"]->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1615
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width", null, "polaroid-fram-width-row");
        // line 1621
        echo "

\t\t\t\t\t\t\t";
        // line 1624
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 1625
$context["form"]->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1627
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), array("class" => "gg-color-picker")), "overlay-background");
        // line 1631
        echo "

\t\t\t\t\t\t\t";
        // line 1634
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")),         // line 1635
$context["form"]->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1637
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 1641
        echo "

\t\t\t\t\t\t\t";
        // line 1644
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")),         // line 1645
$context["form"]->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1648
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array()), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 1652
        echo "

\t\t\t\t\t\t\t";
        // line 1655
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), (        // line 1656
$context["form"]->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1659
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), array("style" => array("width" => "140px"))) .         // line 1662
$context["form"]->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1665
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 1669
        echo "

\t\t\t\t\t\t\t";
        // line 1672
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")),         // line 1673
$context["form"]->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1676
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), array("style" => "width: auto;")), "text-align");
        // line 1680
        echo "

\t\t\t\t\t\t\t";
        // line 1683
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")),         // line 1684
$context["form"]->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1687
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), array("style" => "width: auto;")), "overlay-position");
        // line 1691
        echo "

\t\t\t\t\t\t\t";
        // line 1694
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")),         // line 1695
$context["form"]->getselectv("thumbnail[overlay][font_family]",         // line 1697
($context["fontList"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1698
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), array("style" => "width: auto;")), "font-family");
        // line 1702
        echo "


\t\t\t\t\t\t\t";
        // line 1706
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title")),         // line 1707
$context["form"]->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute(        // line 1710
($context["settings"] ?? null), "thumbnail", array()), "tooltip", array()), array("style" => "width: auto;")), "tooltip");
        // line 1714
        echo "

\t\t\t\t\t\t\t";
        // line 1717
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Always show captions on mobile")),         // line 1718
$context["form"]->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1721
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false"))), "ismobile");
        // line 1724
        echo "

\t\t\t\t\t\t\t";
        // line 1727
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable captions on mobile")),         // line 1728
$context["form"]->getselect("thumbnail[isDisableMobileCaption]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1731
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false"))), "isDisableMobileCaption");
        // line 1734
        echo "
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t";
    }

    // line 1534
    public function block_backgroundImageForHoverEffect($context, array $blocks = array())
    {
        // line 1535
        echo "\t\t\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on hover")), "utm_source=plugin&utm_medium=hover_caption_image_bg&utm_campaign=gallery", "overlay-effect-image-on-hover-enable",         // line 1538
$context["form"]->getselect("thumbnail[overlay][imageOnHoverEnable]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable"))), "0", array("disabled" => "disabled")));
        // line 1547
        echo "
\t\t\t\t\t\t\t";
    }

    // line 1551
    public function block_backgroundColorForShowOnHover($context, array $blocks = array())
    {
        // line 1552
        echo "\t\t\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color for \"Show on hover\"")), "utm_source=plugin&utm_medium=caption-show-on-hover&utm_campaign=gallery", "backgroundColorForShowOnHoverFree",         // line 1555
$context["form"]->getselect("thumbnail[overlay][backgroundFoShowOnHover]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), 0, array("disabled" => "disabled")));
        // line 1562
        echo "
\t\t\t\t\t\t\t";
    }

    // line 1741
    public function block_icons($context, array $blocks = array())
    {
        // line 1742
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"icons\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t";
        // line 1744
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 1745
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons")), (((        // line 1746
$context["form"]->getradio("icons[enabled]", "true", twig_array_merge(array("id" => "icons-enable"), ((($context["iconsEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 1747
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) .         // line 1748
$context["form"]->getradio("icons[enabled]", "false", twig_array_merge(array("id" => "icons-disable"), ((($context["iconsEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1749
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        // line 1750
        echo "
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 1753
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation effects")),         // line 1754
$context["form"]->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")), "ci-icons-animation-effects");
        // line 1756
        echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1760
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1761
        echo $context["form"]->getshow_tooltip("ci-icons-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1765
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), "html", null, true);
        echo "\" name=\"icons[color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsHoverColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1771
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1772
        echo $context["form"]->getshow_tooltip("ci-icons-hover-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1776
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1782
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1783
        echo $context["form"]->getshow_tooltip("ci-icons-bg-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1787
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), "html", null, true);
        echo "\" name=\"icons[background]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundHoverColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1793
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1794
        echo $context["form"]->getshow_tooltip("ci-icons-hover-bg-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1798
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsSize\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1804
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1805
        echo $context["form"]->getshow_tooltip("ci-icons-hover-size");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1809
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsMargin\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1815
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1816
        echo $context["form"]->getshow_tooltip("ci-icons-distance");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 1820
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlay\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1826
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1827
        echo $context["form"]->getshow_tooltip("ci-icons-show-overlay");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"true\" ";
        // line 1832
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()), "true");
        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1833
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"false\" ";
        // line 1835
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()), "false");
        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1836
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1844
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1845
        echo $context["form"]->getshow_tooltip("ci-icons-overlay-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 1849
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_color", array()), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayTransparency\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1855
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1856
        echo $context["form"]->getshow_tooltip("ci-icons-overlay-transparency");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 1861
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 0);
        echo ">0%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1862
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 1);
        echo ">10%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1863
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 2);
        echo ">20%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 1864
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 3);
        echo ">30%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\" ";
        // line 1865
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 4);
        echo ">40%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\" ";
        // line 1866
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 5);
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\" ";
        // line 1867
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 6);
        echo ">60%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"7\" ";
        // line 1868
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 7);
        echo ">70%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"8\" ";
        // line 1869
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 8);
        echo ">80%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"9\" ";
        // line 1870
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 9);
        echo ">90%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"10\" ";
        // line 1871
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 10);
        echo ">100%</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 1875
        echo $this->getAttribute($this, "showFewIconsBy", array(0 => ($context["settings"] ?? null), 1 => ($context["form"] ?? null), 2 => 0), "method");
        echo "
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t";
    }

    // line 1882
    public function block_proCaptionAndIconSettings($context, array $blocks = array())
    {
        // line 1883
        echo "\t\t\t\t\t";
    }

    // line 1886
    public function block_exifCaptionSettings($context, array $blocks = array())
    {
        // line 1887
        echo "\t\t\t\t\t<table class=\"form-table\" name=\"captions\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h1 style=\"line-height: 1;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1892
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show EXIF data")), "html", null, true);
        echo "
                                        ";
        // line 1893
        echo $context["form"]->getshow_tooltip("showExifDataPro");
        echo "</br>
\t\t\t\t\t\t\t\t\t\t<a class=\"button get-pro\" href=\"";
        // line 1894
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=exif-data&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1895
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("GetPRO for 39\$")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t";
    }

    // line 1907
    public function block_categories($context, array $blocks = array())
    {
        // line 1908
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1910
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
        echo "
                    ";
        // line 1911
        echo $context["form"]->getshow_tooltip("categoriesPro");
        echo "</br>
                    </br>
                    <a class=\"button get-pro\" target=\"_blank\"
                       href=\"";
        // line 1914
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1918
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img style=\"max-width:600px;\" src=\"";
        // line 1919
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.gif\" />
                    </a>
                </div>
                ";
        // line 1922
        $this->displayBlock('pagination', $context, $blocks);
        // line 1938
        echo "            </div>
        ";
    }

    // line 1922
    public function block_pagination($context, array $blocks = array())
    {
        // line 1923
        echo "                    <h1 style=\"line-height: 1;\">
                        ";
        // line 1924
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pagination")), "html", null, true);
        echo "
                        ";
        // line 1925
        echo $context["form"]->getshow_tooltip("paginationPro");
        echo "</br>
                        </br>
                        <a class=\"button get-pro\" target=\"_blank\"
                           href=\"";
        // line 1928
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 1932
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                                <img src=\"";
        // line 1933
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.gif\" />
                            </a>
                        </div>
                    </div>
                ";
    }

    // line 1941
    public function block_watermark($context, array $blocks = array())
    {
        // line 1942
        echo "            <div data-tab=\"water-m-tab\">
                <h1 style=\"line-height: 1em;\">
                    <a class=\"button get-pro\" target=\"_blank\"
                       href=\"";
        // line 1945
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO for 39\$</a>
                </h1>
                <div>
                    <a href=\"";
        // line 1948
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 1949
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/water_m_pro-min.png\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1955
    public function block_form($context, array $blocks = array())
    {
        // line 1956
        echo "        ";
    }

    // line 2086
    public function block_captionEffectInPro($context, array $blocks = array())
    {
        // line 2087
        echo "\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption available-in-pro\" data-grid-gallery-type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
        // line 2088
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=caption-show-on-hover&utm_campaign=gallery")), "html", null, true);
        echo "\" class=\"caption-available-in-pro-link\">
\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
        // line 2089
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t\t\t<figcaption style=\"";
        // line 2090
        echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:table;width:100%;height:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span ";
        // line 2093
        if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
            echo "dir=\"rtl\" class=\"ggRtlClass\"";
        }
        echo " style=\"display:table-cell;font-size:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo ";padding:10px;vertical-align:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
        echo ";\">Caption</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t<div class=\"get-in-pro-element\">
\t\t\t\t\t\t\t\t\t\t";
        // line 2098
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pro Feature")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t";
    }

    // line 2148
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 2149
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["iconsWithCaptionsEffects"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 2150
            echo "\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 2151
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"dialog-image\"/>
\t\t\t\t\t\t\t\t\t<figcaption style=\"";
            // line 2152
            echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t<div class=\"caption-with-";
            // line 2158
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
            // line 2160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\tvertical-align:";
            // line 2161
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\tCaption
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t";
            // line 2167
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2171
        echo "\t\t\t\t\t\t";
    }

    // line 2369
    public function block_modals($context, array $blocks = array())
    {
        // line 2370
        echo "        <div id=\"iconsPreview\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">
            ";
        // line 2372
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 2389
        echo "            ";
        ob_start();
        // line 2390
        echo "                ";
        $this->displayBlock('icon_wrap_item_class', $context, $blocks);
        // line 2393
        echo "            ";
        $context["var_icon_wrap_item_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 2394
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["iconsEffects"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 2395
            echo "                <div class=\"hi-icon-wrap ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["name"], 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo " holderjs\" style=\"display: inline-block; padding: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "padding", array()), "html", null, true);
            echo "; width: 150px; height: 150px; background-color: #434A52; background-repeat: no-repeat; overflow: hidden;\">
                    <a href=\"#\" class=\"hi-icon ";
            // line 2396
            echo twig_escape_filter($this->env, ($context["var_icon_wrap_item_class"] ?? null), "html", null, true);
            echo "\" data-effect=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-effect-base=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["name"], 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . $context["name"]), "html", null, true);
            echo "\" style=\"\">Select</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2399
        echo "        </div>
\t\t<style id=\"sggSettingsIconSizeStyle\">
\t\t\t.hi-icon {
\t\t\t\twidth: ";
        // line 2402
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
\t\t\t\theight: ";
        // line 2403
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
\t\t\t}
\t\t</style>
\t\t<style id=\"sggSettingsIconColorStyle\">
\t\t\t.hi-icon {color: ";
        // line 2407
        echo twig_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()) / 10))), "html", null, true);
        echo " !important;}
\t\t</style>
\t\t<style id=\"sggSettingsIconBgColorStyle\">
\t\t\t.hi-icon { background: ";
        // line 2410
        echo twig_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "bgTransparency", array()) / 10))), "html", null, true);
        echo " !important; }
\t\t</style>
\t\t<style id=\"sggSettingHiIconHoverColorStyle\">
\t\t\t.hi-icon:hover { color: ";
        // line 2413
        echo twig_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()) / 10))), "html", null, true);
        echo " !important; }
\t\t</style>
\t\t<style id=\"sggSettingHiIconHoverBgStyle\">
\t\t\t.hi-icon:hover { background: ";
        // line 2416
        echo twig_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "bgTransparency", array()) / 10))), "html", null, true);
        echo " !important; }
\t\t</style>
\t\t<style id=\"sggSettingHiIconBeforeFontSizeStyle\">
\t\t\t.hi-icon:before {
\t\t\t\tfont-size: ";
        // line 2420
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important;
\t\t\t\tline-height: ";
        // line 2421
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
\t\t\t}
\t\t</style>
    ";
    }

    // line 2390
    public function block_icon_wrap_item_class($context, array $blocks = array())
    {
        // line 2391
        echo "\t\t\t\t\ticon-fullscreen
                ";
    }

    // line 2426
    public function block_settingsOtherPro($context, array $blocks = array())
    {
        // line 2427
        echo "\t";
    }

    // line 2
    public function getlabel($__label__ = null, $__for__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, ($context["for"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 2430
    public function getshowFewIconsBy($__settings__ = null, $__form__ = null, $__isCaptionBuilder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "settings" => $__settings__,
            "form" => $__form__,
            "isCaptionBuilder" => $__isCaptionBuilder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2431
            echo "
\t";
            // line 2432
            $context["isShowRow"] = 0;
            // line 2433
            echo "\t";
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) == 1) && (($context["isCaptionBuilder"] ?? null) == 1))) {
                // line 2434
                echo "\t\t";
                $context["isShowRow"] = 1;
                // line 2435
                echo "\t";
            } elseif ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) != 1) && (($context["isCaptionBuilder"] ?? null) != 1))) {
                // line 2436
                echo "\t\t";
                $context["isShowRow"] = 1;
                // line 2437
                echo "\t";
            }
            // line 2438
            echo "
\t";
            // line 2439
            if ((($context["isShowRow"] ?? null) == 1)) {
                // line 2440
                echo "\t\t";
                echo $this->getAttribute(                // line 2441
($context["form"] ?? null), "row", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show few icons by")), 1 => $this->getAttribute(                // line 2443
($context["form"] ?? null), "select", array(0 => "icons[showFewIcons]", 1 => array("default" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default")), "params" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("By params"))), 2 => (($this->getAttribute($this->getAttribute(                // line 2449
($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array()), "default")) : ("default")), 3 => array("style" => "width: auto;", "id" => "showFewIconsSel")), "method"), 2 => "capt-showt-few-icons-by", 3 => "h4"), "method");
                // line 2455
                echo "
\t\t";
                // line 2456
                echo $this->getAttribute(                // line 2457
($context["form"] ?? null), "row", array(0 => "", 1 => ((((($this->getAttribute(                // line 2459
($context["form"] ?? null), "checkbox", array(0 => "icons[isVideoIcon]", 1 => "1", 2 => twig_array_merge(array("id" => "showVideoIconInp", "class" => "sggCheckboxInOneRow"), ((($this->getAttribute($this->getAttribute(                // line 2462
($context["settings"] ?? null), "icons", array()), "isVideoIcon", array()) == 1)) ? (array("checked" => "checked")) : (array())))), "method") . $this->getAttribute(                // line 2463
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show video icon, if exists")), 1 => "showVideoIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")) . $this->getAttribute(                // line 2468
($context["form"] ?? null), "checkbox", array(0 => "icons[isLinkIcon]", 1 => "1", 2 => twig_array_merge(array("id" => "showLinkIconInp", "class" => "sggCheckboxInOneRow"), ((($this->getAttribute($this->getAttribute(                // line 2471
($context["settings"] ?? null), "icons", array()), "isLinkIcon", array()) == 1)) ? (array("checked" => "checked")) : (array())))), "method")) . $this->getAttribute(                // line 2472
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show link icon, if exists")), 1 => "showLinkIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")) . $this->getAttribute(                // line 2477
($context["form"] ?? null), "checkbox", array(0 => "icons[isPopupIcon]", 1 => "1", 2 => twig_array_merge(array("id" => "showPopupIconInp", "class" => "sggCheckboxInOneRow"), ((($this->getAttribute($this->getAttribute(                // line 2480
($context["settings"] ?? null), "icons", array()), "isPopupIcon", array()) == 1)) ? (array("checked" => "checked")) : (array())))), "method")) . $this->getAttribute(                // line 2481
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show popup")), 1 => "showPopupIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")), 2 => "capt-showv-few-icons-by", 3 => null, 4 => "sggFewIconsShowingRow"), "method");
                // line 2490
                echo "
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3756 => 2490,  3754 => 2481,  3753 => 2480,  3752 => 2477,  3751 => 2472,  3750 => 2471,  3749 => 2468,  3748 => 2463,  3747 => 2462,  3746 => 2459,  3745 => 2457,  3744 => 2456,  3741 => 2455,  3739 => 2449,  3738 => 2443,  3737 => 2441,  3735 => 2440,  3733 => 2439,  3730 => 2438,  3727 => 2437,  3724 => 2436,  3721 => 2435,  3718 => 2434,  3715 => 2433,  3713 => 2432,  3710 => 2431,  3696 => 2430,  3676 => 3,  3663 => 2,  3659 => 2427,  3656 => 2426,  3651 => 2391,  3648 => 2390,  3640 => 2421,  3636 => 2420,  3629 => 2416,  3623 => 2413,  3617 => 2410,  3611 => 2407,  3604 => 2403,  3600 => 2402,  3595 => 2399,  3580 => 2396,  3571 => 2395,  3566 => 2394,  3563 => 2393,  3560 => 2390,  3557 => 2389,  3555 => 2372,  3550 => 2370,  3547 => 2369,  3543 => 2171,  3533 => 2167,  3524 => 2161,  3520 => 2160,  3515 => 2158,  3506 => 2152,  3502 => 2151,  3497 => 2150,  3492 => 2149,  3489 => 2148,  3480 => 2098,  3465 => 2093,  3459 => 2090,  3455 => 2089,  3451 => 2088,  3446 => 2087,  3443 => 2086,  3439 => 1956,  3436 => 1955,  3427 => 1949,  3423 => 1948,  3417 => 1945,  3412 => 1942,  3409 => 1941,  3400 => 1933,  3396 => 1932,  3389 => 1928,  3383 => 1925,  3379 => 1924,  3376 => 1923,  3373 => 1922,  3368 => 1938,  3366 => 1922,  3360 => 1919,  3356 => 1918,  3349 => 1914,  3343 => 1911,  3339 => 1910,  3335 => 1908,  3332 => 1907,  3320 => 1895,  3316 => 1894,  3312 => 1893,  3308 => 1892,  3301 => 1887,  3298 => 1886,  3294 => 1883,  3291 => 1882,  3282 => 1875,  3275 => 1871,  3271 => 1870,  3267 => 1869,  3263 => 1868,  3259 => 1867,  3252 => 1866,  3248 => 1865,  3244 => 1864,  3240 => 1863,  3236 => 1862,  3232 => 1861,  3224 => 1856,  3220 => 1855,  3211 => 1849,  3204 => 1845,  3200 => 1844,  3189 => 1836,  3185 => 1835,  3180 => 1833,  3176 => 1832,  3168 => 1827,  3164 => 1826,  3155 => 1820,  3148 => 1816,  3144 => 1815,  3135 => 1809,  3128 => 1805,  3124 => 1804,  3115 => 1798,  3108 => 1794,  3104 => 1793,  3095 => 1787,  3088 => 1783,  3084 => 1782,  3075 => 1776,  3068 => 1772,  3064 => 1771,  3055 => 1765,  3048 => 1761,  3044 => 1760,  3038 => 1756,  3036 => 1754,  3035 => 1753,  3030 => 1750,  3028 => 1749,  3027 => 1748,  3026 => 1747,  3025 => 1746,  3023 => 1745,  3021 => 1744,  3017 => 1742,  3014 => 1741,  3009 => 1562,  3007 => 1555,  3005 => 1552,  3002 => 1551,  2997 => 1547,  2995 => 1538,  2993 => 1535,  2990 => 1534,  2981 => 1734,  2979 => 1731,  2978 => 1728,  2976 => 1727,  2972 => 1724,  2970 => 1721,  2969 => 1718,  2967 => 1717,  2963 => 1714,  2961 => 1710,  2960 => 1707,  2958 => 1706,  2953 => 1702,  2951 => 1698,  2950 => 1697,  2949 => 1695,  2947 => 1694,  2943 => 1691,  2941 => 1687,  2940 => 1684,  2938 => 1683,  2934 => 1680,  2932 => 1676,  2931 => 1673,  2929 => 1672,  2925 => 1669,  2923 => 1665,  2922 => 1662,  2921 => 1659,  2920 => 1656,  2918 => 1655,  2914 => 1652,  2912 => 1648,  2911 => 1645,  2909 => 1644,  2905 => 1641,  2903 => 1637,  2902 => 1635,  2900 => 1634,  2896 => 1631,  2894 => 1627,  2893 => 1625,  2891 => 1624,  2887 => 1621,  2885 => 1615,  2884 => 1612,  2882 => 1611,  2878 => 1608,  2876 => 1604,  2875 => 1601,  2873 => 1600,  2869 => 1597,  2867 => 1593,  2866 => 1590,  2864 => 1589,  2860 => 1586,  2858 => 1581,  2857 => 1578,  2855 => 1577,  2851 => 1574,  2849 => 1570,  2848 => 1567,  2846 => 1566,  2843 => 1564,  2840 => 1551,  2837 => 1549,  2834 => 1534,  2830 => 1531,  2828 => 1525,  2826 => 1524,  2822 => 1521,  2820 => 1516,  2819 => 1514,  2818 => 1511,  2817 => 1507,  2816 => 1505,  2815 => 1502,  2813 => 1501,  2809 => 1498,  2806 => 1497,  2799 => 1482,  2797 => 1476,  2796 => 1471,  2795 => 1467,  2794 => 1462,  2793 => 1459,  2789 => 1457,  2786 => 1456,  2777 => 1402,  2773 => 1401,  2765 => 1396,  2759 => 1393,  2755 => 1392,  2751 => 1390,  2748 => 1389,  2741 => 1378,  2739 => 1372,  2738 => 1367,  2737 => 1363,  2736 => 1358,  2735 => 1355,  2731 => 1353,  2728 => 1352,  2721 => 1347,  2719 => 1346,  2718 => 1345,  2717 => 1344,  2716 => 1343,  2715 => 1340,  2711 => 1338,  2708 => 1337,  2703 => 1334,  2695 => 1329,  2691 => 1328,  2684 => 1324,  2679 => 1322,  2675 => 1321,  2669 => 1317,  2659 => 1307,  2653 => 1304,  2646 => 1300,  2641 => 1298,  2635 => 1294,  2633 => 1293,  2628 => 1291,  2627 => 1290,  2626 => 1289,  2625 => 1288,  2623 => 1287,  2621 => 1286,  2617 => 1284,  2614 => 1283,  2606 => 1278,  2601 => 1275,  2599 => 1268,  2598 => 1266,  2597 => 1263,  2596 => 1259,  2595 => 1257,  2594 => 1254,  2592 => 1253,  2588 => 1250,  2585 => 1249,  2579 => 1236,  2577 => 1231,  2576 => 1228,  2570 => 1224,  2568 => 1219,  2567 => 1216,  2563 => 1214,  2561 => 1209,  2560 => 1206,  2556 => 1204,  2554 => 1201,  2553 => 1194,  2551 => 1191,  2547 => 1188,  2545 => 1185,  2544 => 1182,  2542 => 1179,  2538 => 1176,  2536 => 1175,  2535 => 1172,  2534 => 1170,  2533 => 1169,  2532 => 1166,  2531 => 1164,  2529 => 1161,  2527 => 1160,  2524 => 1159,  2517 => 1015,  2515 => 1011,  2508 => 1007,  2503 => 1005,  2499 => 1004,  2494 => 1001,  2491 => 1000,  2484 => 994,  2482 => 984,  2475 => 980,  2470 => 978,  2466 => 977,  2461 => 974,  2458 => 973,  2452 => 1245,  2450 => 1243,  2449 => 1241,  2445 => 1239,  2442 => 1159,  2438 => 1156,  2436 => 1153,  2435 => 1150,  2433 => 1148,  2429 => 1145,  2427 => 1142,  2426 => 1139,  2424 => 1137,  2419 => 1133,  2417 => 1131,  2416 => 1128,  2415 => 1125,  2414 => 1124,  2413 => 1121,  2412 => 1118,  2410 => 1117,  2406 => 1114,  2404 => 1110,  2403 => 1107,  2401 => 1106,  2397 => 1103,  2395 => 1098,  2394 => 1095,  2392 => 1094,  2388 => 1091,  2386 => 1087,  2385 => 1084,  2383 => 1083,  2379 => 1080,  2377 => 1075,  2376 => 1072,  2374 => 1071,  2370 => 1068,  2368 => 1065,  2367 => 1050,  2365 => 1049,  2361 => 1046,  2359 => 1042,  2358 => 1040,  2356 => 1039,  2352 => 1036,  2350 => 1034,  2349 => 1031,  2348 => 1030,  2344 => 1028,  2342 => 1025,  2341 => 1022,  2339 => 1021,  2336 => 1019,  2333 => 1000,  2330 => 998,  2327 => 973,  2323 => 970,  2321 => 967,  2320 => 959,  2318 => 958,  2314 => 955,  2312 => 952,  2311 => 949,  2309 => 948,  2304 => 945,  2303 => 944,  2302 => 943,  2297 => 941,  2296 => 940,  2292 => 938,  2290 => 937,  2289 => 936,  2285 => 934,  2283 => 931,  2282 => 928,  2280 => 927,  2276 => 924,  2274 => 921,  2273 => 919,  2272 => 917,  2271 => 915,  2270 => 910,  2268 => 909,  2263 => 905,  2261 => 901,  2260 => 899,  2259 => 896,  2258 => 892,  2257 => 890,  2256 => 887,  2254 => 886,  2251 => 885,  2247 => 882,  2244 => 881,  2235 => 875,  2234 => 874,  2229 => 872,  2228 => 871,  2223 => 869,  2222 => 868,  2217 => 866,  2216 => 865,  2211 => 863,  2210 => 862,  2201 => 856,  2195 => 855,  2190 => 853,  2184 => 852,  2179 => 850,  2173 => 849,  2166 => 845,  2162 => 844,  2152 => 837,  2145 => 833,  2141 => 832,  2131 => 825,  2125 => 824,  2121 => 823,  2115 => 822,  2108 => 818,  2104 => 817,  2097 => 812,  2094 => 811,  2085 => 805,  2084 => 804,  2083 => 803,  2078 => 801,  2077 => 800,  2072 => 798,  2071 => 797,  2070 => 796,  2067 => 795,  2063 => 778,  2060 => 777,  2056 => 771,  2053 => 770,  2046 => 772,  2044 => 770,  2040 => 768,  2038 => 764,  2037 => 759,  2036 => 758,  2032 => 756,  2030 => 752,  2029 => 750,  2028 => 749,  2024 => 747,  2022 => 743,  2021 => 741,  2020 => 740,  2016 => 738,  2014 => 737,  2013 => 723,  2012 => 722,  2007 => 720,  2006 => 719,  2000 => 716,  1999 => 715,  1998 => 714,  1997 => 713,  1995 => 712,  1993 => 711,  1989 => 709,  1986 => 708,  1979 => 679,  1971 => 674,  1967 => 673,  1963 => 672,  1958 => 670,  1954 => 668,  1951 => 667,  1944 => 663,  1940 => 662,  1934 => 659,  1930 => 657,  1925 => 654,  1923 => 652,  1922 => 646,  1921 => 645,  1917 => 643,  1915 => 641,  1914 => 635,  1913 => 634,  1909 => 632,  1907 => 630,  1906 => 623,  1905 => 622,  1901 => 620,  1899 => 616,  1898 => 613,  1896 => 612,  1894 => 611,  1889 => 609,  1888 => 608,  1884 => 606,  1882 => 604,  1881 => 598,  1880 => 597,  1876 => 595,  1874 => 593,  1873 => 587,  1872 => 586,  1868 => 584,  1866 => 582,  1865 => 575,  1864 => 574,  1860 => 572,  1858 => 568,  1857 => 565,  1855 => 564,  1853 => 563,  1848 => 561,  1847 => 560,  1843 => 558,  1841 => 556,  1840 => 550,  1839 => 549,  1835 => 547,  1833 => 543,  1832 => 540,  1831 => 539,  1826 => 536,  1824 => 535,  1822 => 534,  1818 => 531,  1816 => 529,  1815 => 528,  1814 => 527,  1813 => 526,  1809 => 524,  1806 => 523,  1804 => 522,  1798 => 519,  1797 => 518,  1796 => 517,  1795 => 516,  1794 => 515,  1790 => 513,  1787 => 512,  1783 => 510,  1780 => 509,  1776 => 507,  1773 => 506,  1769 => 488,  1766 => 487,  1760 => 474,  1758 => 472,  1756 => 469,  1753 => 468,  1748 => 465,  1746 => 463,  1744 => 460,  1741 => 459,  1736 => 347,  1734 => 343,  1733 => 342,  1732 => 340,  1731 => 339,  1728 => 338,  1725 => 331,  1722 => 330,  1711 => 497,  1709 => 494,  1708 => 491,  1707 => 490,  1704 => 489,  1702 => 487,  1698 => 485,  1696 => 482,  1695 => 479,  1694 => 478,  1691 => 477,  1689 => 468,  1686 => 467,  1684 => 459,  1680 => 457,  1678 => 452,  1677 => 449,  1676 => 448,  1672 => 446,  1670 => 443,  1669 => 442,  1668 => 440,  1666 => 439,  1663 => 427,  1658 => 424,  1657 => 423,  1656 => 422,  1651 => 420,  1650 => 419,  1649 => 418,  1643 => 415,  1642 => 414,  1641 => 413,  1638 => 412,  1633 => 405,  1632 => 404,  1628 => 402,  1626 => 399,  1625 => 396,  1623 => 395,  1618 => 392,  1617 => 391,  1616 => 390,  1611 => 388,  1610 => 387,  1609 => 386,  1603 => 383,  1602 => 382,  1598 => 380,  1596 => 379,  1595 => 378,  1592 => 377,  1587 => 373,  1586 => 372,  1585 => 371,  1584 => 369,  1583 => 368,  1582 => 366,  1581 => 365,  1580 => 364,  1573 => 360,  1564 => 354,  1560 => 353,  1554 => 349,  1552 => 330,  1548 => 328,  1545 => 327,  1540 => 324,  1536 => 2426,  1533 => 2425,  1531 => 2369,  1521 => 2362,  1516 => 2360,  1509 => 2356,  1505 => 2355,  1501 => 2354,  1495 => 2351,  1490 => 2350,  1488 => 2349,  1479 => 2342,  1477 => 2336,  1476 => 2335,  1470 => 2332,  1463 => 2327,  1461 => 2323,  1460 => 2318,  1459 => 2314,  1458 => 2309,  1457 => 2308,  1451 => 2305,  1442 => 2301,  1435 => 2297,  1429 => 2294,  1422 => 2290,  1397 => 2267,  1387 => 2263,  1381 => 2260,  1371 => 2259,  1361 => 2258,  1358 => 2257,  1354 => 2256,  1350 => 2254,  1348 => 2182,  1342 => 2179,  1337 => 2177,  1332 => 2174,  1328 => 2172,  1326 => 2148,  1320 => 2146,  1318 => 2145,  1315 => 2144,  1301 => 2143,  1294 => 2139,  1279 => 2134,  1273 => 2131,  1269 => 2130,  1264 => 2129,  1257 => 2125,  1244 => 2119,  1239 => 2117,  1234 => 2115,  1219 => 2104,  1216 => 2103,  1213 => 2086,  1211 => 2085,  1205 => 2082,  1199 => 2079,  1187 => 2071,  1184 => 2070,  1167 => 2069,  1162 => 2067,  1156 => 2063,  1146 => 2059,  1140 => 2056,  1135 => 2054,  1129 => 2053,  1123 => 2052,  1116 => 2051,  1112 => 2050,  1109 => 2049,  1106 => 2048,  1103 => 2047,  1101 => 2046,  1098 => 2045,  1096 => 2036,  1091 => 2033,  1089 => 2028,  1088 => 2026,  1087 => 2023,  1086 => 2019,  1085 => 2017,  1084 => 2014,  1083 => 2010,  1082 => 2008,  1081 => 2005,  1080 => 2004,  1075 => 2003,  1073 => 2002,  1067 => 1999,  1062 => 1997,  1054 => 1992,  1047 => 1988,  1037 => 1981,  1032 => 1979,  1026 => 1976,  1021 => 1974,  1016 => 1972,  1009 => 1968,  1005 => 1967,  998 => 1963,  992 => 1960,  987 => 1958,  984 => 1957,  982 => 1955,  979 => 1954,  977 => 1941,  974 => 1940,  972 => 1907,  966 => 1903,  964 => 1886,  960 => 1884,  958 => 1882,  954 => 1880,  952 => 1741,  949 => 1740,  947 => 1497,  941 => 1493,  939 => 1492,  938 => 1491,  935 => 1490,  933 => 1488,  931 => 1486,  929 => 1456,  926 => 1455,  923 => 1454,  920 => 1453,  917 => 1446,  914 => 1410,  910 => 1407,  908 => 1389,  903 => 1386,  901 => 1384,  899 => 1382,  897 => 1352,  894 => 1351,  892 => 1337,  889 => 1336,  887 => 1283,  884 => 1282,  882 => 1249,  879 => 1248,  877 => 881,  874 => 880,  872 => 811,  869 => 810,  867 => 777,  864 => 776,  862 => 708,  853 => 702,  852 => 701,  840 => 692,  836 => 691,  828 => 688,  823 => 686,  818 => 683,  816 => 512,  813 => 511,  811 => 509,  808 => 508,  806 => 506,  803 => 505,  801 => 327,  797 => 325,  795 => 324,  791 => 323,  787 => 322,  783 => 321,  779 => 320,  775 => 319,  771 => 318,  767 => 317,  762 => 315,  758 => 314,  754 => 313,  750 => 312,  746 => 311,  742 => 310,  738 => 309,  734 => 308,  730 => 307,  726 => 306,  722 => 305,  718 => 304,  714 => 303,  710 => 301,  707 => 300,  704 => 299,  701 => 298,  694 => 209,  691 => 208,  686 => 193,  682 => 191,  676 => 189,  673 => 188,  669 => 186,  663 => 184,  661 => 183,  650 => 180,  647 => 179,  643 => 155,  639 => 153,  637 => 152,  634 => 151,  631 => 150,  627 => 85,  624 => 84,  617 => 293,  615 => 285,  611 => 284,  605 => 281,  601 => 280,  597 => 279,  593 => 278,  589 => 277,  585 => 276,  581 => 275,  577 => 274,  573 => 273,  569 => 272,  565 => 271,  561 => 269,  555 => 266,  551 => 265,  547 => 264,  543 => 263,  540 => 262,  533 => 258,  527 => 257,  522 => 255,  516 => 254,  511 => 253,  509 => 252,  505 => 251,  498 => 247,  493 => 245,  489 => 244,  483 => 241,  478 => 239,  466 => 230,  462 => 229,  458 => 228,  453 => 226,  447 => 225,  443 => 224,  437 => 220,  430 => 216,  426 => 214,  421 => 211,  419 => 208,  416 => 207,  411 => 205,  406 => 203,  398 => 200,  391 => 197,  389 => 196,  386 => 195,  384 => 179,  381 => 178,  378 => 177,  375 => 176,  372 => 175,  369 => 174,  367 => 173,  364 => 172,  361 => 171,  358 => 170,  355 => 169,  352 => 168,  350 => 167,  347 => 166,  344 => 165,  341 => 164,  339 => 163,  336 => 162,  333 => 161,  330 => 160,  328 => 159,  325 => 158,  323 => 157,  320 => 156,  318 => 150,  311 => 145,  305 => 143,  303 => 142,  300 => 141,  298 => 140,  290 => 135,  280 => 128,  275 => 126,  266 => 120,  261 => 118,  257 => 117,  254 => 116,  248 => 105,  242 => 102,  238 => 101,  231 => 100,  228 => 99,  223 => 97,  218 => 96,  215 => 95,  212 => 94,  210 => 93,  203 => 91,  199 => 89,  196 => 88,  194 => 87,  191 => 86,  188 => 84,  186 => 83,  183 => 82,  180 => 81,  177 => 80,  174 => 79,  168 => 77,  165 => 76,  162 => 75,  159 => 74,  154 => 70,  149 => 71,  147 => 70,  142 => 68,  134 => 63,  126 => 58,  118 => 53,  110 => 48,  99 => 42,  92 => 40,  84 => 38,  81 => 19,  79 => 18,  76 => 17,  72 => 1,  70 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/settings.twig", "/var/www/html/tours/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/settings.twig");
    }
}
