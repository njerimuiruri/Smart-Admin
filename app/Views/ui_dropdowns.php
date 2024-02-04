<!DOCTYPE html>
<!-- 
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.5.1
Author: Sunnyat A.
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0?ref=myorange
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Dropdowns - UI Components - SmartAdmin v4.5.1
        </title>
        <meta name="description" content="Dropdowns">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="stylesheet" media="screen, print" href="css/theme-demo.css">
    </head>
    <!-- BEGIN Body -->
    <!-- Possible Classes

		* 'header-function-fixed'         - header is in a fixed at all times
		* 'nav-function-fixed'            - left panel is fixed
		* 'nav-function-minify'			  - skew nav to maximize space
		* 'nav-function-hidden'           - roll mouse on edge to reveal
		* 'nav-function-top'              - relocate left pane to top
		* 'mod-main-boxed'                - encapsulates to a container
		* 'nav-mobile-push'               - content pushed on menu reveal
		* 'nav-mobile-no-overlay'         - removes mesh on menu reveal
		* 'nav-mobile-slide-out'          - content overlaps menu
		* 'mod-bigger-font'               - content fonts are bigger for readability
		* 'mod-high-contrast'             - 4.5:1 text contrast ratio
		* 'mod-color-blind'               - color vision deficiency
		* 'mod-pace-custom'               - preloader will be inside content
		* 'mod-clean-page-bg'             - adds more whitespace
		* 'mod-hide-nav-icons'            - invisible navigation icons
		* 'mod-disable-animation'         - disables css based animations
		* 'mod-hide-info-card'            - hides info card from left panel
		* 'mod-lean-subheader'            - distinguished page header
		* 'mod-nav-link'                  - clear breakdown of nav links

		>>> more settings are described inside documentation page >>>
	-->
    <body class="mod-bg-1 mod-nav-link ">
        <!-- DOC: script to save and load page settings -->
        <script>
            /**
             *	This script should be placed right after the body tag for fast execution 
             *	Note: the script is written in pure javascript and does not depend on thirdparty library
             **/
            'use strict';

            var classHolder = document.getElementsByTagName("BODY")[0],
                /** 
                 * Load from localstorage
                 **/
                themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                {},
                themeURL = themeSettings.themeURL || '',
                themeOptions = themeSettings.themeOptions || '';
            /** 
             * Load theme options
             **/
            if (themeSettings.themeOptions)
            {
                classHolder.className = themeSettings.themeOptions;
                console.log("%c✔ Theme settings loaded", "color: #148f32");
            }
            else
            {
                console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
            }
            if (themeSettings.themeURL && !document.getElementById('mytheme'))
            {
                var cssfile = document.createElement('link');
                cssfile.id = 'mytheme';
                cssfile.rel = 'stylesheet';
                cssfile.href = themeURL;
                document.getElementsByTagName('head')[0].appendChild(cssfile);

            }
            else if (themeSettings.themeURL && document.getElementById('mytheme'))
            {
                document.getElementById('mytheme').href = themeSettings.themeURL;
            }
            /** 
             * Save to localstorage 
             **/
            var saveSettings = function()
            {
                themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
                {
                    return /^(nav|header|footer|mod|display)-/i.test(item);
                }).join(' ');
                if (document.getElementById('mytheme'))
                {
                    themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                };
                localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
            }
            /** 
             * Reset settings
             **/
            var resetSettings = function()
            {
                localStorage.setItem("themeSettings", "");
            }

        </script>
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                <aside class="page-sidebar">
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2">SeedProject</span>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <!-- BEGIN PRIMARY NAVIGATION -->
                    <nav id="js-primary-nav" class="primary-nav" role="navigation">
                        <div class="nav-filter">
                            <div class="position-relative">
                                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                    <i class="fal fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info-card">
                            <img src="img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                            <div class="info-card-text">
                                <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        Dr. Codex Lantern
                                    </span>
                                </a>
                                <span class="d-inline-block text-truncate text-truncate-sm">Toronto, Canada</span>
                            </div>
                            <img src="img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
                            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                                <i class="fal fa-angle-down"></i>
                            </a>
                        </div>
                        <ul id="js-nav-menu" class="nav-menu">
                            <li>
                                <a href="#" title="Application Intel" data-filter-tags="application intel">
                                    <i class="fal fa-info-circle"></i>
                                    <span class="nav-link-text" data-i18n="nav.application_intel">Application Intel</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="intel_introduction" title="Introduction" data-filter-tags="application intel introduction">
                                            <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Introduction</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="intel_privacy" title="Privacy" data-filter-tags="application intel privacy">
                                            <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Privacy</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="Theme Settings" data-filter-tags="theme settings">
                                    <i class="fal fa-cog"></i>
                                    <span class="nav-link-text" data-i18n="nav.theme_settings">Theme Settings</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="settings_how_it_works" title="How it works" data-filter-tags="theme settings how it works">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">How it works</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="settings_layout_options" title="Layout Options" data-filter-tags="theme settings layout options">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_layout_options">Layout Options</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="settings_theme_modes" title="Theme Modes (beta)" data-filter-tags="theme settings theme modes (beta)">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_theme_modes_(beta)">Theme Modes (beta)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="settings_skin_options" title="Skin Options" data-filter-tags="theme settings skin options">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_skin_options">Skin Options</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="settings_saving_db" title="Saving to Database" data-filter-tags="theme settings saving to database">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_saving_to_database">Saving to Database</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-title">Tools & Components</li>
                            <li class="active open">
                                <a href="#" title="UI Components" data-filter-tags="ui components">
                                    <i class="fal fa-window"></i>
                                    <span class="nav-link-text" data-i18n="nav.ui_components">UI Components</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="ui_alerts" title="Alerts" data-filter-tags="ui components alerts">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_alerts">Alerts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_accordion" title="Accordions" data-filter-tags="ui components accordions">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_accordions">Accordions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_badges" title="Badges" data-filter-tags="ui components badges">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_badges">Badges</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_breadcrumbs" title="Breadcrumbs" data-filter-tags="ui components breadcrumbs">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_breadcrumbs">Breadcrumbs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_buttons" title="Buttons" data-filter-tags="ui components buttons">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_buttons">Buttons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_button_group" title="Button Group" data-filter-tags="ui components button group">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_button_group">Button Group</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_cards" title="Cards" data-filter-tags="ui components cards">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_cards">Cards</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_carousel" title="Carousel" data-filter-tags="ui components carousel">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_carousel">Carousel</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_collapse" title="Collapse" data-filter-tags="ui components collapse">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_collapse">Collapse</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="ui_dropdowns" title="Dropdowns" data-filter-tags="ui components dropdowns">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_dropdowns">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_list_filter" title="List Filter" data-filter-tags="ui components list filter">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_list_filter">List Filter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_modal" title="Modal" data-filter-tags="ui components modal">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_modal">Modal</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_navbars" title="Navbars" data-filter-tags="ui components navbars">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_navbars">Navbars</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_panels" title="Panels" data-filter-tags="ui components panels">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_panels">Panels</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_pagination" title="Pagination" data-filter-tags="ui components pagination">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_pagination">Pagination</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_popovers" title="Popovers" data-filter-tags="ui components popovers">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_popovers">Popovers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_progress_bars" title="Progress Bars" data-filter-tags="ui components progress bars">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_progress_bars">Progress Bars</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_scrollspy" title="ScrollSpy" data-filter-tags="ui components scrollspy">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_scrollspy">ScrollSpy</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_side_panel" title="Side Panel" data-filter-tags="ui components side panel">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_side_panel">Side Panel</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_spinners" title="Spinners" data-filter-tags="ui components spinners">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_spinners">Spinners</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_tabs_pills" title="Tabs & Pills" data-filter-tags="ui components tabs & pills">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_tabs_&_pills">Tabs & Pills</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_toasts" title="Toasts" data-filter-tags="ui components toasts">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_toasts">Toasts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_tooltips" title="Tooltips" data-filter-tags="ui components tooltips">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_tooltips">Tooltips</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="Utilities" data-filter-tags="utilities">
                                    <i class="fal fa-bolt"></i>
                                    <span class="nav-link-text" data-i18n="nav.utilities">Utilities</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="utilities_borders" title="Borders" data-filter-tags="utilities borders">
                                            <span class="nav-link-text" data-i18n="nav.utilities_borders">Borders</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_clearfix" title="Clearfix" data-filter-tags="utilities clearfix">
                                            <span class="nav-link-text" data-i18n="nav.utilities_clearfix">Clearfix</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_color_pallet" title="Color Pallet" data-filter-tags="utilities color pallet">
                                            <span class="nav-link-text" data-i18n="nav.utilities_color_pallet">Color Pallet</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_display_property" title="Display Property" data-filter-tags="utilities display property">
                                            <span class="nav-link-text" data-i18n="nav.utilities_display_property">Display Property</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_fonts" title="Fonts" data-filter-tags="utilities fonts">
                                            <span class="nav-link-text" data-i18n="nav.utilities_fonts">Fonts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_flexbox" title="Flexbox" data-filter-tags="utilities flexbox">
                                            <span class="nav-link-text" data-i18n="nav.utilities_flexbox">Flexbox</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_helpers" title="Helpers" data-filter-tags="utilities helpers">
                                            <span class="nav-link-text" data-i18n="nav.utilities_helpers">Helpers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_position" title="Position" data-filter-tags="utilities position">
                                            <span class="nav-link-text" data-i18n="nav.utilities_position">Position</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_responsive_grid" title="Responsive Grid" data-filter-tags="utilities responsive grid">
                                            <span class="nav-link-text" data-i18n="nav.utilities_responsive_grid">Responsive Grid</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_sizing" title="Sizing" data-filter-tags="utilities sizing">
                                            <span class="nav-link-text" data-i18n="nav.utilities_sizing">Sizing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_spacing" title="Spacing" data-filter-tags="utilities spacing">
                                            <span class="nav-link-text" data-i18n="nav.utilities_spacing">Spacing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="utilities_typography" title="Typography" data-filter-tags="utilities typography fonts headings bold lead colors sizes link text states list styles truncate alignment">
                                            <span class="nav-link-text" data-i18n="nav.utilities_typography">Typography</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
                                            <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Menu child</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item">
                                                    <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Sublevel Item</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" title="Another Item" data-filter-tags="utilities menu child another item">
                                                    <span class="nav-link-text" data-i18n="nav.utilities_menu_child_another_item">Another Item</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="disabled">
                                        <a href="javascript:void(0);" title="Disabled item" data-filter-tags="utilities disabled item">
                                            <span class="nav-link-text" data-i18n="nav.utilities_disabled_item">Disabled item</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="Font Icons" data-filter-tags="font icons">
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.font_icons">Font Icons</span>
                                    <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">7,500+</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" title="FontAwesome" data-filter-tags="font icons fontawesome">
                                            <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome">FontAwesome Pro</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="icons_fontawesome_light" title="Light" data-filter-tags="font icons fontawesome light">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_light">Light</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="icons_fontawesome_regular" title="Regular" data-filter-tags="font icons fontawesome regular">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_regular">Regular</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="icons_fontawesome_solid" title="Solid" data-filter-tags="font icons fontawesome solid">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_solid">Solid</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="icons_fontawesome_duotone" title="Duotone" data-filter-tags="font icons fontawesome duotone">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_duotone">Duotone</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="icons_fontawesome_brand" title="Brand" data-filter-tags="font icons fontawesome brand">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_brand">Brand</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="NextGen Icons" data-filter-tags="font icons nextgen icons">
                                            <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons">NextGen Icons</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="icons_nextgen_general" title="General" data-filter-tags="font icons nextgen icons general">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_general">General</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="icons_nextgen_base" title="Base" data-filter-tags="font icons nextgen icons base">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_base">Base</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Stack Icons" data-filter-tags="font icons stack icons">
                                            <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons">Stack Icons</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="icons_stack_showcase" title="Showcase" data-filter-tags="font icons stack icons showcase">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_showcase">Showcase</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="icons_stack_generate?layers=3" title="Generate Stack" data-filter-tags="font icons stack icons generate stack">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_generate_stack">Generate Stack</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="Tables" data-filter-tags="tables">
                                    <i class="fal fa-th-list"></i>
                                    <span class="nav-link-text" data-i18n="nav.tables">Tables</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="tables_basic" title="Basic Tables" data-filter-tags="tables basic tables">
                                            <span class="nav-link-text" data-i18n="nav.tables_basic_tables">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables_generate_style" title="Generate Table Style" data-filter-tags="tables generate table style">
                                            <span class="nav-link-text" data-i18n="nav.tables_generate_table_style">Generate Table Style</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="Form Stuff" data-filter-tags="form stuff">
                                    <i class="fal fa-edit"></i>
                                    <span class="nav-link-text" data-i18n="nav.form_stuff">Form Stuff</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="form_basic_inputs" title="Basic Inputs" data-filter-tags="form stuff basic inputs">
                                            <span class="nav-link-text" data-i18n="nav.form_stuff_basic_inputs">Basic Inputs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form_checkbox_radio" title="Checkbox & Radio" data-filter-tags="form stuff checkbox & radio">
                                            <span class="nav-link-text" data-i18n="nav.form_stuff_checkbox_&_radio">Checkbox & Radio</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form_input_groups" title="Input Groups" data-filter-tags="form stuff input groups">
                                            <span class="nav-link-text" data-i18n="nav.form_stuff_input_groups">Input Groups</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form_validation" title="Validation" data-filter-tags="form stuff validation">
                                            <span class="nav-link-text" data-i18n="nav.form_stuff_validation">Validation</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-title">Plugins & Addons</li>
                            <li>
                                <a href="#" title="Plugins" data-filter-tags="plugins">
                                    <i class="fal fa-shield-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.plugins">Core Plugins</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="plugins_faq" title="Plugins FAQ" data-filter-tags="plugins plugins faq">
                                            <span class="nav-link-text" data-i18n="nav.plugins_plugins_faq">Plugins FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plugins_waves" title="Waves" data-filter-tags="plugins waves">
                                            <span class="nav-link-text" data-i18n="nav.plugins_waves">Waves</span>
                                            <span class="dl-ref label bg-primary-400 ml-2">9 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plugins_pacejs" title="PaceJS" data-filter-tags="plugins pacejs">
                                            <span class="nav-link-text" data-i18n="nav.plugins_pacejs">PaceJS</span>
                                            <span class="dl-ref label bg-primary-500 ml-2">13 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plugins_smartpanels" title="SmartPanels" data-filter-tags="plugins smartpanels">
                                            <span class="nav-link-text" data-i18n="nav.plugins_smartpanels">SmartPanels</span>
                                            <span class="dl-ref label bg-primary-600 ml-2">9 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plugins_bootbox" title="BootBox" data-filter-tags="plugins bootbox alert sound">
                                            <span class="nav-link-text" data-i18n="nav.plugins_bootbox">BootBox</span>
                                            <span class="dl-ref label bg-primary-600 ml-2">15 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plugins_slimscroll" title="Slimscroll" data-filter-tags="plugins slimscroll">
                                            <span class="nav-link-text" data-i18n="nav.plugins_slimscroll">Slimscroll</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">5 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plugins_throttle" title="Throttle" data-filter-tags="plugins throttle">
                                            <span class="nav-link-text" data-i18n="nav.plugins_throttle">Throttle</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">1 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plugins_navigation" title="Navigation" data-filter-tags="plugins navigation">
                                            <span class="nav-link-text" data-i18n="nav.plugins_navigation">Navigation</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">2 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plugins_i18next" title="i18next" data-filter-tags="plugins i18next">
                                            <span class="nav-link-text" data-i18n="nav.plugins_i18next">i18next</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">10 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plugins_appcore" title="App.Core" data-filter-tags="plugins app.core">
                                            <span class="nav-link-text" data-i18n="nav.plugins_app.core">App.Core</span>
                                            <span class="dl-ref label bg-success-700 ml-2">14 KB</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-title">Layouts & Apps</li>
                            <li>
                                <a href="#" title="Pages" data-filter-tags="pages">
                                    <i class="fal fa-plus-circle"></i>
                                    <span class="nav-link-text" data-i18n="nav.pages">Page Views</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="page_chat" title="Chat" data-filter-tags="pages chat">
                                            <span class="nav-link-text" data-i18n="nav.pages_chat">Chat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_contacts" title="Contacts" data-filter-tags="pages contacts">
                                            <span class="nav-link-text" data-i18n="nav.pages_contacts">Contacts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Forum" data-filter-tags="pages forum">
                                            <span class="nav-link-text" data-i18n="nav.pages_forum">Forum</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="page_forum_list" title="List" data-filter-tags="pages forum list">
                                                    <span class="nav-link-text" data-i18n="nav.pages_forum_list">List</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_forum_threads" title="Threads" data-filter-tags="pages forum threads">
                                                    <span class="nav-link-text" data-i18n="nav.pages_forum_threads">Threads</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_forum_discussion" title="Discussion" data-filter-tags="pages forum discussion">
                                                    <span class="nav-link-text" data-i18n="nav.pages_forum_discussion">Discussion</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Inbox" data-filter-tags="pages inbox">
                                            <span class="nav-link-text" data-i18n="nav.pages_inbox">Inbox</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="page_inbox_general" title="General" data-filter-tags="pages inbox general">
                                                    <span class="nav-link-text" data-i18n="nav.pages_inbox_general">General</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_inbox_read" title="Read" data-filter-tags="pages inbox read">
                                                    <span class="nav-link-text" data-i18n="nav.pages_inbox_read">Read</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_inbox_write" title="Write" data-filter-tags="pages inbox write">
                                                    <span class="nav-link-text" data-i18n="nav.pages_inbox_write">Write</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="page_invoice" title="Invoice (printable)" data-filter-tags="pages invoice (printable)">
                                            <span class="nav-link-text" data-i18n="nav.pages_invoice_(printable)">Invoice (printable)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Authentication" data-filter-tags="pages authentication">
                                            <span class="nav-link-text" data-i18n="nav.pages_authentication">Authentication</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="page_forget" title="Forget Password" data-filter-tags="pages authentication forget password">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_forget_password">Forget Password</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_locked" title="Locked Screen" data-filter-tags="pages authentication locked screen">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_locked_screen">Locked Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_login" title="Login" data-filter-tags="pages authentication login">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_login">Login</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_login_alt" title="Login Alt" data-filter-tags="pages authentication login alt">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_login_alt">Login Alt</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_register" title="Register" data-filter-tags="pages authentication register">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_register">Register</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_confirmation" title="Confirmation" data-filter-tags="pages authentication confirmation">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_confirmation">Confirmation</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Error Pages" data-filter-tags="pages error pages">
                                            <span class="nav-link-text" data-i18n="nav.pages_error_pages">Error Pages</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="page_error" title="General Error" data-filter-tags="pages error pages general error">
                                                    <span class="nav-link-text" data-i18n="nav.pages_error_pages_general_error">General Error</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_error_404" title="Server Error" data-filter-tags="pages error pages server error">
                                                    <span class="nav-link-text" data-i18n="nav.pages_error_pages_server_error">Server Error</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_error_announced" title="Announced Error" data-filter-tags="pages error pages announced error">
                                                    <span class="nav-link-text" data-i18n="nav.pages_error_pages_announced_error">Announced Error</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="page_profile" title="Profile" data-filter-tags="pages profile">
                                            <span class="nav-link-text" data-i18n="nav.pages_profile">Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_search" title="Search Results" data-filter-tags="pages search results">
                                            <span class="nav-link-text" data-i18n="nav.pages_search_results">Search Results</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="filter-message js-filter-message bg-success-600"></div>
                    </nav>
                    <!-- END PRIMARY NAVIGATION -->
                    <!-- NAV FOOTER -->
                    <div class="nav-footer shadow-top">
                        <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
                            <i class="ni ni-chevron-right"></i>
                            <i class="ni ni-chevron-right"></i>
                        </a>
                        <ul class="list-table m-auto nav-footer-buttons">
                            <li>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                                    <i class="fal fa-comments"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                                    <i class="fal fa-life-ring"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                                    <i class="fal fa-phone"></i>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- END NAV FOOTER -->
                </aside>
                <!-- END Left Aside -->
                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    <header class="page-header" role="banner">
                        <!-- we need this logo when user switches to nav-function-top -->
                        <div class="page-logo">
                            <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                                <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                                <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2">SeedProject</span>
                                <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                            </a>
                        </div>
                        <!-- DOC: nav menu layout change shortcut -->
                        <div class="hidden-md-down dropdown-icon-menu position-relative">
                            <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                                <i class="ni ni-menu"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                        <i class="ni ni-minify-nav"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                                        <i class="ni ni-lock-nav"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- DOC: mobile button appears during mobile width -->
                        <div class="hidden-lg-up">
                            <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                                <i class="ni ni-menu"></i>
                            </a>
                        </div>
                        <div class="search">
                            <form class="app-forms hidden-xs-down" role="search" action="page_search" autocomplete="off">
                                <input type="text" id="search-field" placeholder="Search for anything" class="form-control" tabindex="1">
                                <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
                                    <i class="fal fa-times"></i>
                                </a>
                            </form>
                        </div>
                        <div class="ml-auto d-flex">
                            <!-- activate app search icon (mobile) -->
                            <div class="hidden-sm-up">
                                <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                    <i class="fal fa-search"></i>
                                </a>
                            </div>
                            <!-- app settings -->
                            <div class="hidden-md-down">
                                <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                                    <i class="fal fa-cog"></i>
                                </a>
                            </div>
                            <!-- app shortcuts -->
                            <div>
                                <a href="#" class="header-icon" data-toggle="dropdown" title="My Apps">
                                    <i class="fal fa-cube"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated w-auto h-auto">
                                    <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top">
                                        <h4 class="m-0 text-center color-white">
                                            Quick Shortcut
                                            <small class="mb-0 opacity-80">User Applications & Addons</small>
                                        </h4>
                                    </div>
                                    <div class="custom-scroll h-100">
                                        <ul class="app-list">
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-2 icon-stack-3x color-primary-600"></i>
                                                        <i class="base-3 icon-stack-2x color-primary-700"></i>
                                                        <i class="ni ni-settings icon-stack-1x text-white fs-lg"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Services
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-2 icon-stack-3x color-primary-400"></i>
                                                        <i class="base-10 text-white icon-stack-1x"></i>
                                                        <i class="ni md-profile color-primary-800 icon-stack-2x"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Account
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-9 icon-stack-3x color-success-400"></i>
                                                        <i class="base-2 icon-stack-2x color-success-500"></i>
                                                        <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Security
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-18 icon-stack-3x color-info-700"></i>
                                                        <span class="position-absolute pos-top pos-left pos-right color-white fs-md mt-2 fw-400">28</span>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Calendar
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-7 icon-stack-3x color-info-500"></i>
                                                        <i class="base-7 icon-stack-2x color-info-700"></i>
                                                        <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Stats
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                        <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                        <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Messages
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-4 icon-stack-3x color-fusion-400"></i>
                                                        <i class="base-5 icon-stack-2x color-fusion-200"></i>
                                                        <i class="base-5 icon-stack-1x color-fusion-100"></i>
                                                        <i class="fal fa-keyboard icon-stack-1x color-info-50"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Notes
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                        <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                        <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                        <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Photos
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                        <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                        <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                        <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                        <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Maps
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-5 icon-stack-3x color-success-700 opacity-80"></i>
                                                        <i class="base-12 icon-stack-2x color-success-700 opacity-30"></i>
                                                        <i class="fal fa-comment-alt icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Chat
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-5 icon-stack-3x color-warning-600"></i>
                                                        <i class="base-7 icon-stack-2x color-warning-800 opacity-50"></i>
                                                        <i class="fal fa-phone icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Phone
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-6 icon-stack-3x color-danger-600"></i>
                                                        <i class="fal fa-chart-line icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Projects
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="w-100">
                                                <a href="#" class="btn btn-default mt-4 mb-2 pr-5 pl-5"> Add more apps </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- app message -->
                            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-messenger">
                                <i class="fal fa-globe"></i>
                                <span class="badge badge-icon">!</span>
                            </a>
                            <!-- app notification -->
                            <div>
                                <a href="#" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
                                    <i class="fal fa-bell"></i>
                                    <span class="badge badge-icon">11</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                                    <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                                        <h4 class="m-0 text-center color-white">
                                            11 New
                                            <small class="mb-0 opacity-80">User Notifications</small>
                                        </h4>
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs-clean" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-messages" data-i18n="drpdwn.messages">Messages</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-feeds" data-i18n="drpdwn.feeds">Feeds</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-events" data-i18n="drpdwn.events">Events</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-notification">
                                        <div class="tab-pane active p-3 text-center">
                                            <h5 class="mt-4 pt-4 fw-500">
                                                <span class="d-block fa-3x pb-4 text-muted">
                                                    <i class="ni ni-arrow-up text-gradient opacity-70"></i>
                                                </span> Select a tab above to activate
                                                <small class="mt-3 fs-b fw-400 text-muted">
                                                    This blank page message helps protect your privacy, or you can show the first message here automatically through
                                                    <a href="#">settings page</a>
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="tab-pane" id="tab-messages" role="tabpanel">
                                            <div class="custom-scroll h-100">
                                                <ul class="notification">
                                                    <li class="unread">
                                                        <a href="#" class="d-flex align-items-center">
                                                            <span class="status mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-c.png')"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Melissa Ayre <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-1">INBOX</span></span>
                                                                <span class="msg-a fs-sm">Re: New security codes</span>
                                                                <span class="msg-b fs-xs">Hello again and thanks for being part...</span>
                                                                <span class="fs-nano text-muted mt-1">56 seconds ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="unread">
                                                        <a href="#" class="d-flex align-items-center">
                                                            <span class="status mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-a.png')"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Adison Lee</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">2 minutes ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex align-items-center">
                                                            <span class="status status-success mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-b.png')"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Oliver Kopyuv</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">3 days ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex align-items-center">
                                                            <span class="status status-warning mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-e.png')"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Dr. John Cook PhD</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">2 weeks ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex align-items-center">
                                                            <span class="status status-success mr-2">
                                                                <!-- <img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-h.png" class="profile-image rounded-circle" alt="Sarah McBrook" /> -->
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-h.png')"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Sarah McBrook</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">3 weeks ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex align-items-center">
                                                            <span class="status status-success mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-m.png')"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Anothony Bezyeth</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">one month ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex align-items-center">
                                                            <span class="status status-danger mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-j.png')"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Lisa Hatchensen</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">one year ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-feeds" role="tabpanel">
                                            <div class="custom-scroll h-100">
                                                <ul class="notification">
                                                    <li class="unread">
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <span class="d-flex flex-column flex-1">
                                                                <span class="name d-flex align-items-center">Administrator <span class="badge badge-success fw-n ml-1">UPDATE</span></span>
                                                                <span class="msg-a fs-sm">
                                                                    System updated to version <strong>4.5.1</strong> <a href="docs_buildnotes">(patch notes)</a>
                                                                </span>
                                                                <span class="fs-nano text-muted mt-1">5 mins ago</span>
                                                            </span>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <div class="d-flex flex-column flex-1">
                                                                <span class="name">
                                                                    Adison Lee <span class="fw-300 d-inline">replied to your video <a href="#" class="fw-400"> Cancer Drug</a> </span>
                                                                </span>
                                                                <span class="msg-a fs-sm mt-2">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day...</span>
                                                                <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                                            </div>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-k.png" class="profile-image rounded-circle" alt="k" />-->
                                                            <div class="d-flex flex-column flex-1">
                                                                <span class="name">
                                                                    Troy Norman'<span class="fw-300">s new connections</span>
                                                                </span>
                                                                <div class="fs-sm d-flex align-items-center mt-2">
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                                    <div data-hasmore="+3" class="rounded-circle profile-image-md mr-1">
                                                                        <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                                    </div>
                                                                </div>
                                                                <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                                            </div>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle align-self-start mt-1" alt="k" />-->
                                                            <div class="d-flex flex-column flex-1">
                                                                <span class="name">Dr John Cook <span class="fw-300">sent a <span class="text-danger">new signal</span></span></span>
                                                                <span class="msg-a fs-sm mt-2">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</span>
                                                                <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                                            </div>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <div class="d-flex flex-column flex-1">
                                                                <span class="name">Lab Images <span class="fw-300">were updated!</span></span>
                                                                <div class="fs-sm d-flex align-items-center mt-1">
                                                                    <a href="#" class="mr-1 mt-1" title="Cell A-0012">
                                                                        <span class="d-block img-share" style="background-image:url('img/thumbs/pic-7.png'); background-size: cover;"></span>
                                                                    </a>
                                                                    <a href="#" class="mr-1 mt-1" title="Patient A-473 saliva">
                                                                        <span class="d-block img-share" style="background-image:url('img/thumbs/pic-8.png'); background-size: cover;"></span>
                                                                    </a>
                                                                    <a href="#" class="mr-1 mt-1" title="Patient A-473 blood cells">
                                                                        <span class="d-block img-share" style="background-image:url('img/thumbs/pic-11.png'); background-size: cover;"></span>
                                                                    </a>
                                                                    <a href="#" class="mr-1 mt-1" title="Patient A-473 Membrane O.C">
                                                                        <span class="d-block img-share" style="background-image:url('img/thumbs/pic-12.png'); background-size: cover;"></span>
                                                                    </a>
                                                                </div>
                                                                <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                                            </div>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-h.png" class="profile-image rounded-circle align-self-start mt-1" alt="k" />-->
                                                            <div class="d-flex flex-column flex-1">
                                                                <div class="name mb-2">
                                                                    Lisa Lamar<span class="fw-300"> updated project</span>
                                                                </div>
                                                                <div class="row fs-b fw-300">
                                                                    <div class="col text-left">
                                                                        Progress
                                                                    </div>
                                                                    <div class="col text-right fw-500">
                                                                        45%
                                                                    </div>
                                                                </div>
                                                                <div class="progress progress-sm d-flex mt-1">
                                                                    <span class="progress-bar bg-primary-500 progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></span>
                                                                </div>
                                                                <span class="fs-nano text-muted mt-1">2 hrs ago</span>
                                                                <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                    <a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-events" role="tabpanel">
                                            <div class="d-flex flex-column h-100">
                                                <div class="h-auto">
                                                    <table class="table table-bordered table-calendar m-0 w-100 h-100 border-0">
                                                        <tr>
                                                            <th colspan="7" class="pt-3 pb-2 pl-3 pr-3 text-center">
                                                                <div class="js-get-date h5 mb-2">[your date here]</div>
                                                            </th>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Sun</th>
                                                            <th>Mon</th>
                                                            <th>Tue</th>
                                                            <th>Wed</th>
                                                            <th>Thu</th>
                                                            <th>Fri</th>
                                                            <th>Sat</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted bg-faded">30</td>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>3</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td><i class="fal fa-birthday-cake mt-1 ml-1 position-absolute pos-left pos-top text-primary"></i> 6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>8</td>
                                                            <td>9</td>
                                                            <td class="bg-primary-300 pattern-0">10</td>
                                                            <td>11</td>
                                                            <td>12</td>
                                                            <td>13</td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>15</td>
                                                            <td>16</td>
                                                            <td>17</td>
                                                            <td>18</td>
                                                            <td>19</td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td>21</td>
                                                            <td>22</td>
                                                            <td>23</td>
                                                            <td>24</td>
                                                            <td>25</td>
                                                            <td>26</td>
                                                            <td>27</td>
                                                        </tr>
                                                        <tr>
                                                            <td>28</td>
                                                            <td>29</td>
                                                            <td>30</td>
                                                            <td>31</td>
                                                            <td class="text-muted bg-faded">1</td>
                                                            <td class="text-muted bg-faded">2</td>
                                                            <td class="text-muted bg-faded">3</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="flex-1 custom-scroll">
                                                    <div class="p-2">
                                                        <div class="d-flex align-items-center text-left mb-3">
                                                            <div class="width-5 fw-300 text-primary l-h-n mr-1 align-self-start fs-xxl">
                                                                15
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="d-flex flex-column">
                                                                    <span class="l-h-n fs-md fw-500 opacity-70">
                                                                        October 2020
                                                                    </span>
                                                                    <span class="l-h-n fs-nano fw-400 text-secondary">
                                                                        Friday
                                                                    </span>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <p>
                                                                        <strong>2:30PM</strong> - Doctor's appointment
                                                                    </p>
                                                                    <p>
                                                                        <strong>3:30PM</strong> - Report overview
                                                                    </p>
                                                                    <p>
                                                                        <strong>4:30PM</strong> - Meeting with Donnah V.
                                                                    </p>
                                                                    <p>
                                                                        <strong>5:30PM</strong> - Late Lunch
                                                                    </p>
                                                                    <p>
                                                                        <strong>6:30PM</strong> - Report Compression
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
                                        <a href="#" class="fs-xs fw-500 ml-auto">view all notifications</a>
                                    </div>
                                </div>
                            </div>
                            <!-- app user menu -->
                            <div>
                                <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                    <img src="img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                                    <!-- you can also add username next to the avatar with the codes below:
									<span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
									<i class="ni ni-chevron-down hidden-xs-down"></i> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                            </span>
                                            <div class="info-card-text">
                                                <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                                                <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-reset">
                                        <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
                                    </a>
                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                        <span data-i18n="drpdwn.settings">Settings</span>
                                    </a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                        <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                        <i class="float-right text-muted fw-n">F11</i>
                                    </a>
                                    <a href="#" class="dropdown-item" data-action="app-print">
                                        <span data-i18n="drpdwn.print">Print</span>
                                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                                    </a>
                                    <div class="dropdown-multilevel dropdown-multilevel-left">
                                        <div class="dropdown-item">
                                            Language
                                        </div>
                                        <div class="dropdown-menu">
                                            <a href="#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Français</a>
                                            <a href="#?lang=en" class="dropdown-item active" data-action="lang" data-lang="en">English (US)</a>
                                            <a href="#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Español</a>
                                            <a href="#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">Русский язык</a>
                                            <a href="#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">日本語</a>
                                            <a href="#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">中文</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item fw-500 pt-3 pb-3" href="page_login">
                                        <span data-i18n="drpdwn.page-logout">Logout</span>
                                        <span class="float-right fw-n">&commat;codexlantern</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- END Page Header -->
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
                    <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                            <li class="breadcrumb-item">UI Components</li>
                            <li class="breadcrumb-item active">Dropdowns</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Dropdowns
                                <small>
                                    Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary">
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 d-none d-sm-block">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">Basic overview</span>
                                        <br> Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made interactive with the included Bootstrap dropdown JavaScript plugin. They’re toggled by clicking, not by hovering; this is an intentional design decision. Dropdowns are built on a third party library, Popper.js, which provides dynamic positioning and viewport detection.
                                        <br>
                                        <br>
                                        Find more facts and uses at the bootstrap <a href="https://getbootstrap.com/docs/4.5/components/dropdowns/" target="_blank">official documentation</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- Kitchen Sink -->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Kitchen <span class="fw-300"><i>Sink example</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                A composition of all working elements
                                            </div>
                                            <div class="dropdown-menu d-block position-relative float-none" style="width: 14rem; z-index: 2">
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <span class="badge badge-success float-right ml-3">17</span>Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <span class="badge badge-pill badge-primary float-right ml-3">29</span>Another action</a>
                                                <a class="dropdown-item disabled" href="javascript:void(0)">Disabled link</a>
                                                <div class="dropdown-divider"></div>
                                                <h6 class="dropdown-header">Dropdown header</h6>
                                                <a class="dropdown-item active" href="javascript:void(0)">
                                                    <i class="ni ni-big-plus"></i> &nbsp;Has icon</a>
                                                <div class="dropdown-multilevel">
                                                    <div class="dropdown-item">
                                                        Multilevel
                                                    </div>
                                                    <div class="dropdown-menu">
                                                        <a href="javascript:void(0);" class="dropdown-item">Menu Item</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Another Item</a>
                                                        <a href="javascript:void(0);" class="dropdown-item disabled">Disabled</a>
                                                        <div class="dropdown-multilevel">
                                                            <div class="dropdown-item">
                                                                Second Level
                                                            </div>
                                                            <div class="dropdown-menu">
                                                                <a href="javascript:void(0);" class="dropdown-item">Menu Item</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">Another Item</a>
                                                                <div class="dropdown-multilevel dropdown-multilevel-left">
                                                                    <div class="dropdown-item">
                                                                        Third Level
                                                                    </div>
                                                                    <div class="dropdown-menu">
                                                                        <a href="javascript:void(0);" class="dropdown-item">Menu Item</a>
                                                                        <a href="javascript:void(0);" class="dropdown-item disabled">Disabled</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Links and buttons -->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Links <span class="fw-300"><i>& buttons</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Wrap the dropdown’s toggle (your button or link) and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Dropdowns can be triggered from <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> elements to better fit your potential needs.
                                            </div>
                                            <h5 class="frame-heading">
                                                Button
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo demo-h-spacing">
                                                    <div class="btn-group">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Dropdown button
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info rounded-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fal fa-plus"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger rounded-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fal fa-plus"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success btn-icon rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fal fa-plus"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Link
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo demo-h-spacing d-flex">
                                                    <div class="dropdown">
                                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Dropdown link
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-warning rounded-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fal fa-plus"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-primary rounded-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fal fa-plus"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-default btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fal fa-plus"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dropdown buttons -->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Dropdown <span class="fw-300"><i>buttons</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <h5 class="frame-heading">
                                                Variations
                                            </h5>
                                            <div class="frame-wrap w-100">
                                                <div class="demo">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dark</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Split button
                                            </h5>
                                            <div class="frame-wrap w-100 mb-0">
                                                <div class="demo">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success">Success</button>
                                                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">Info</button>
                                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger">Danger</button>
                                                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark">Dark</button>
                                                        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Multilevel -->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Multilevel <span class="fw-300"><i>dropdown</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Add multilevel menu by wrapping the child node selectors with <code>.dropdown-multilevel</code>, change direction of by adding <code>.dropdown-multilevel-left</code> (right by default)
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ni ni-energy mr-1"></i> Multilevel default
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <div class="dropdown-multilevel">
                                                        <div class="dropdown-item">
                                                            Multilevel
                                                        </div>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item">First level</a>
                                                            <div class="dropdown-multilevel">
                                                                <div class="dropdown-item">
                                                                    Second Level
                                                                </div>
                                                                <div class="dropdown-menu">
                                                                    <a href="javascript:void(0);" class="dropdown-item">Level two</a>
                                                                    <a href="javascript:void(0);" class="dropdown-item disabled">Disabled menu</a>
                                                                    <div class="dropdown-multilevel dropdown-multilevel-left">
                                                                        <div class="dropdown-item">
                                                                            Third Level (left)
                                                                        </div>
                                                                        <div class="dropdown-menu">
                                                                            <a href="javascript:void(0);" class="dropdown-item">Menu Item</a>
                                                                            <a href="javascript:void(0);" class="dropdown-item disabled">Disabled</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content -->
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Content <span class="fw-300"><i>types</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="demo demo-no-mb">
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Text
                                                    </button>
                                                    <div class="dropdown-menu p-4 text-muted" style="max-width: 200px; background-image: url(img/backgrounds/bg-4.png);">
                                                        <p>
                                                            Some example text that's free-flowing within the dropdown menu.
                                                        </p>
                                                        <p class="mb-0">
                                                            And this is more example text.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Forms
                                                    </button>
                                                    <div class="dropdown-menu dropdown-lg" style="background-image: url(img/backgrounds/bg-1.png);">
                                                        <form class="p-4" novalidate="">
                                                            <div class="form-group">
                                                                <label class="form-label" for="username">Username</label>
                                                                <input type="email" id="username" class="form-control" placeholder="your id or email" value="drlantern@gotbootstrap.com" required="">
                                                                <div class="invalid-feedback">No, you missed this one.</div>
                                                                <div class="help-block">Your unique username to app</div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="password">Password</label>
                                                                <input type="password" id="password" class="form-control" placeholder="password" value="password123" required="">
                                                                <div class="invalid-feedback">Sorry, you missed this one.</div>
                                                                <div class="help-block">Your password</div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                                                    <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-info btn-block">Sign in</button>
                                                        </form>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                                                        <a class="dropdown-item" href="#">Forgot password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sizing -->
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Sizing <span class="fw-300"><i>dropdowns</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Button dropdowns work with buttons of all sizes, including default and split dropdown buttons
                                            </div>
                                            <div class="demo mb-2">
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Large button
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group ml-2">
                                                    <button type="button" class="btn btn-lg btn-secondary">Large split button</button>
                                                    <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="demo mb-2">
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Default size
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group ml-2">
                                                    <button type="button" class="btn btn-secondary">Split button</button>
                                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="demo mb-2">
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Small button
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group ml-2">
                                                    <button type="button" class="btn btn-sm btn-secondary">Small split button</button>
                                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="demo mb-0">
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Extra small
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group ml-2">
                                                    <button type="button" class="btn btn-xs btn-secondary">Extra small</button>
                                                    <button type="button" class="btn btn-xs btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!-- No arrow -->
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            No <span class="fw-300"><i>arrow</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Remove directional arrow from dropdown button by adding <code>.no-arrow</code> to <code>.dropdown-toggle</code>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    No arrow
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">Action</button>
                                                    <button class="dropdown-item" type="button">Another action</button>
                                                    <button class="dropdown-item" type="button">Something else here</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Animated -->
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Animated <span class="fw-300"><i>dropdowns</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Add animations to dropdowns by adding <code>.dropdown-menu-animated</code>, <code>.fadeup</code>, <code>.fadedown</code>, <code>.faderight</code>, <code>.fadeleft</code> to <code>.dropdown-menu</code>
                                            </div>
                                            <div class="demo">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle bg-trans-gradient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Custom
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-animated">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle bg-brand-gradient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Fadeinup
                                                    </button>
                                                    <div class="dropdown-menu fadeinup">
                                                        <h6 class="dropdown-header">Fade in from bottom</h6>
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle bg-brand-gradient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Fadeindown
                                                    </button>
                                                    <div class="dropdown-menu fadeindown">
                                                        <h6 class="dropdown-header">Fade in from top</h6>
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle bg-brand-gradient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Fadeinright
                                                    </button>
                                                    <div class="dropdown-menu fadeinright">
                                                        <h6 class="dropdown-header">Fade in from right</h6>
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle bg-brand-gradient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Fadeinleft
                                                    </button>
                                                    <div class="dropdown-menu fadeinleft">
                                                        <h6 class="dropdown-header">Fade in from left</h6>
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Directions -->
                                <div id="panel-9" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Directional <span class="fw-300"><i>Arrows</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Trigger dropdown menus above elements by adding <code>.dropup</code>, <code>.dropright</code>, and <code>.dropleft</code> to the parent element.
                                            </div>
                                            <h5 class="frame-heading">
                                                Dropup
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo demo-no-mb">
                                                    <div class="btn-group dropup">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Dropup
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group dropup">
                                                        <button type="button" class="btn btn-secondary">
                                                            Split dropup
                                                        </button>
                                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Dropright
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo demo-no-mb">
                                                    <div class="btn-group dropright">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Dropright
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group dropright">
                                                        <button type="button" class="btn btn-secondary">
                                                            Split dropright
                                                        </button>
                                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Dropleft
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo demo-no-mb">
                                                    <div class="btn-group dropleft">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Dropleft
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <div class="btn-group dropleft" role="group">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropleft</span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-secondary">
                                                            Split dropleft
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Container -->
                                <div id="panel-10" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Container <span class="fw-300"><i>examples</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                You can add any content to dropdown containers and change its width by adding the class <code>.dropdown-sm</code>, <code>.dropdown-md</code>, <code>.dropdown-lg</code>, and <code>.dropdown-xl</code>
                                            </div>
                                            <div class="demo">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        dropdown-sm
                                                    </button>
                                                    <div class="dropdown-menu dropdown-sm">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else</button>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        dropdown-md
                                                    </button>
                                                    <div class="dropdown-menu dropdown-md">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        dropdown-lg
                                                    </button>
                                                    <div class="dropdown-menu dropdown-lg">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        dropdown-xl
                                                    </button>
                                                    <div class="dropdown-menu dropdown-xl">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Headers -->
                                <div id="panel-11" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Headers <span class="fw-300"><i>examples</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Customize <code>.dropdown-header</code> using utility classes. Change <a href="#" target="_blank">backgrounds</a>, <a href="#" target="_blank">colors</a>, and paddings using various <a href="#" target="_blank">helpers</a>
                                            </div>
                                            <div class="demo">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Custom header 1
                                                    </button>
                                                    <div class="dropdown-menu p-0">
                                                        <div class="dropdown-header bg-trans-gradient d-flex flex-row px-4 py-4 rounded-top text-white">
                                                            <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                                                <span class="mr-2">
                                                                    <img src="img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                                                </span>
                                                                <div class="info-card-text">
                                                                    <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                                                                    <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else</button>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Custom header 2
                                                    </button>
                                                    <div class="dropdown-menu p-0">
                                                        <div class="dropdown-header bg-brand-gradient d-flex flex-row px-4 py-4 rounded-top text-white">
                                                            <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                                                <span class="mr-2">
                                                                    <img src="img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                                                </span>
                                                                <div class="info-card-text">
                                                                    <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                                                                    <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else</button>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Custom header 3
                                                    </button>
                                                    <div class="dropdown-menu p-0">
                                                        <div class="dropdown-header bg-danger-900 bg-info-gradient d-flex flex-row px-4 py-4 rounded-top text-white">
                                                            <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                                                <span class="mr-2">
                                                                    <img src="img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                                                </span>
                                                                <div class="info-card-text">
                                                                    <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                                                                    <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Alignment -->
                                <div id="panel-12" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Menu <span class="fw-300"><i>alignment</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. Add <code>.dropdown-menu-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Right-aligned menu
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button">Action</button>
                                                    <button class="dropdown-item" type="button">Another action</button>
                                                    <button class="dropdown-item" type="button">Something else here</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Responsive alignment -->
                                <div id="panel-13" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Responsive <span class="fw-300"><i>alignment</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                If you want to use responsive alignment, disable dynamic positioning by adding the <code>data-display="static"</code> attribute and use the responsive variation classes. To align left/right the dropdown menu with the given breakpoint or larger, add <code>.dropdown-menu{-sm|-md|-lg|-xl}-right</code> or <code>.dropdown-menu{-sm|-md|-lg|-xl}-left</code>
                                            </div>
                                            <h5 class="frame-heading">
                                                Left-aligned but right aligned when large screen
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                                        Left aligned large screens
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-lg-right">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Right-aligned but left aligned when large screen
                                            </h5>
                                            <div class="frame-wrap mb-0">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                                        Right aligned large screens
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- this overlay is activated only when mobile menu is triggered -->
                    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                    <!-- BEGIN Page Footer -->
                    <footer class="page-footer" role="contentinfo">
                        <div class="d-flex align-items-center flex-1 text-muted">
                            <span class="hidden-md-down fw-700">2020 © SmartAdmin by&nbsp;<a href='https://www.gotbootstrap.com' class='text-primary fw-500' title='gotbootstrap.com' target='_blank'>gotbootstrap.com</a></span>
                        </div>
                        <div>
                            <ul class="list-table m-0">
                                <li><a href="intel_introduction" class="text-secondary fw-700">About</a></li>
                                <li class="pl-3"><a href="info_app_licensing" class="text-secondary fw-700">License</a></li>
                                <li class="pl-3"><a href="info_app_docs" class="text-secondary fw-700">Documentation</a></li>
                                <li class="pl-3 fs-xl"><a href="https://wrapbootstrap.com/user/MyOrange" class="text-secondary" target="_blank"><i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </footer>
                    <!-- END Page Footer -->
                    <!-- BEGIN Shortcuts -->
                    <div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <ul class="app-list w-auto h-auto p-0 text-left">
                                        <li>
                                            <a href="intel_introduction" class="app-list-item text-white border-0 m-0">
                                                <div class="icon-stack">
                                                    <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                                    <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                                                </div>
                                                <span class="app-list-name">
                                                    Home
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page_inbox_general" class="app-list-item text-white border-0 m-0">
                                                <div class="icon-stack">
                                                    <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                                    <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                </div>
                                                <span class="app-list-name">
                                                    Inbox
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="intel_introduction" class="app-list-item text-white border-0 m-0">
                                                <div class="icon-stack">
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                                    <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                                                </div>
                                                <span class="app-list-name">
                                                    Add More
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Shortcuts -->
                    <!-- BEGIN Color profile -->
                    <!-- this area is hidden and will not be seen on screens or screen readers -->
                    <!-- we use this only for CSS color refernce for JS stuff -->
                    <p id="js-color-profile" class="d-none">
                        <span class="color-primary-50"></span>
                        <span class="color-primary-100"></span>
                        <span class="color-primary-200"></span>
                        <span class="color-primary-300"></span>
                        <span class="color-primary-400"></span>
                        <span class="color-primary-500"></span>
                        <span class="color-primary-600"></span>
                        <span class="color-primary-700"></span>
                        <span class="color-primary-800"></span>
                        <span class="color-primary-900"></span>
                        <span class="color-info-50"></span>
                        <span class="color-info-100"></span>
                        <span class="color-info-200"></span>
                        <span class="color-info-300"></span>
                        <span class="color-info-400"></span>
                        <span class="color-info-500"></span>
                        <span class="color-info-600"></span>
                        <span class="color-info-700"></span>
                        <span class="color-info-800"></span>
                        <span class="color-info-900"></span>
                        <span class="color-danger-50"></span>
                        <span class="color-danger-100"></span>
                        <span class="color-danger-200"></span>
                        <span class="color-danger-300"></span>
                        <span class="color-danger-400"></span>
                        <span class="color-danger-500"></span>
                        <span class="color-danger-600"></span>
                        <span class="color-danger-700"></span>
                        <span class="color-danger-800"></span>
                        <span class="color-danger-900"></span>
                        <span class="color-warning-50"></span>
                        <span class="color-warning-100"></span>
                        <span class="color-warning-200"></span>
                        <span class="color-warning-300"></span>
                        <span class="color-warning-400"></span>
                        <span class="color-warning-500"></span>
                        <span class="color-warning-600"></span>
                        <span class="color-warning-700"></span>
                        <span class="color-warning-800"></span>
                        <span class="color-warning-900"></span>
                        <span class="color-success-50"></span>
                        <span class="color-success-100"></span>
                        <span class="color-success-200"></span>
                        <span class="color-success-300"></span>
                        <span class="color-success-400"></span>
                        <span class="color-success-500"></span>
                        <span class="color-success-600"></span>
                        <span class="color-success-700"></span>
                        <span class="color-success-800"></span>
                        <span class="color-success-900"></span>
                        <span class="color-fusion-50"></span>
                        <span class="color-fusion-100"></span>
                        <span class="color-fusion-200"></span>
                        <span class="color-fusion-300"></span>
                        <span class="color-fusion-400"></span>
                        <span class="color-fusion-500"></span>
                        <span class="color-fusion-600"></span>
                        <span class="color-fusion-700"></span>
                        <span class="color-fusion-800"></span>
                        <span class="color-fusion-900"></span>
                    </p>
                    <!-- END Color profile -->
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <!-- BEGIN Quick Menu -->
        <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
        <nav class="shortcut-menu d-none d-sm-block">
            <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
            <label for="menu_open" class="menu-open-button ">
                <span class="app-shortcut-icon d-block"></span>
            </label>
            <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
                <i class="fal fa-arrow-up"></i>
            </a>
            <a href="page_login" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
                <i class="fal fa-sign-out"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left" title="Full Screen">
                <i class="fal fa-expand"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left" title="Print page">
                <i class="fal fa-print"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left" title="Voice command">
                <i class="fal fa-microphone"></i>
            </a>
        </nav>
        <!-- END Quick Menu -->
        <!-- BEGIN Messenger -->
        <div class="modal fade js-modal-messenger modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right">
                <div class="modal-content h-100">
                    <div class="dropdown-header bg-trans-gradient d-flex align-items-center w-100">
                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                            <span class="mr-2">
                                <span class="rounded-circle profile-image d-block" style="background-image:url('img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                            </span>
                            <div class="info-card-text">
                                <a href="javascript:void(0);" class="fs-lg text-truncate text-truncate-lg text-white" data-toggle="dropdown" aria-expanded="false">
                                    Tracey Chang
                                    <i class="fal fa-angle-down d-inline-block ml-1 text-white fs-md"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Send Email</a>
                                    <a class="dropdown-item" href="#">Create Appointment</a>
                                    <a class="dropdown-item" href="#">Block User</a>
                                </div>
                                <span class="text-truncate text-truncate-md opacity-80">IT Director</span>
                            </div>
                        </div>
                        <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body p-0 h-100 d-flex">
                        <!-- BEGIN msgr-list -->
                        <div class="msgr-list d-flex flex-column bg-faded border-faded border-top-0 border-right-0 border-bottom-0 position-absolute pos-top pos-bottom">
                            <div>
                                <div class="height-4 width-3 h3 m-0 d-flex justify-content-center flex-column color-primary-500 pl-3 mt-2">
                                    <i class="fal fa-search"></i>
                                </div>
                                <input type="text" class="form-control bg-white" id="msgr_listfilter_input" placeholder="Filter contacts" aria-label="FriendSearch" data-listfilter="#js-msgr-listfilter">
                            </div>
                            <div class="flex-1 h-100 custom-scroll">
                                <div class="w-100">
                                    <ul id="js-msgr-listfilter" class="list-unstyled m-0">
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="tracey chang online">
                                                <div class="d-table-cell align-middle status status-success status-sm ">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Tracey Chang
                                                        <small class="d-block font-italic text-success fs-xs">
                                                            Online
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="oliver kopyuv online">
                                                <div class="d-table-cell align-middle status status-success status-sm ">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Oliver Kopyuv
                                                        <small class="d-block font-italic text-success fs-xs">
                                                            Online
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="dr john cook phd away">
                                                <div class="d-table-cell align-middle status status-warning status-sm ">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Dr. John Cook PhD
                                                        <small class="d-block font-italic fs-xs">
                                                            Away
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney online">
                                                <div class="d-table-cell align-middle status status-success status-sm ">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Ali Amdaney
                                                        <small class="d-block font-italic fs-xs text-success">
                                                            Online
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="sarah mcbrook online">
                                                <div class="d-table-cell align-middle status status-success status-sm">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Sarah McBrook
                                                        <small class="d-block font-italic fs-xs text-success">
                                                            Online
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                                <div class="d-table-cell align-middle status status-sm">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        oliver.kopyuv@gotbootstrap.com
                                                        <small class="d-block font-italic fs-xs">
                                                            Offline
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney busy">
                                                <div class="d-table-cell align-middle status status-danger status-sm">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-j.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        oliver.kopyuv@gotbootstrap.com
                                                        <small class="d-block font-italic fs-xs text-danger">
                                                            Busy
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                                <div class="d-table-cell align-middle status status-sm">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        oliver.kopyuv@gotbootstrap.com
                                                        <small class="d-block font-italic fs-xs">
                                                            Offline
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney inactive">
                                                <div class="d-table-cell align-middle">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-m.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        +714651347790
                                                        <small class="d-block font-italic fs-xs opacity-50">
                                                            Missed Call
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="filter-message js-filter-message"></div>
                                </div>
                            </div>
                            <div>
                                <a class="fs-xl d-flex align-items-center p-3">
                                    <i class="fal fa-cogs"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END msgr-list -->
                        <!-- BEGIN msgr -->
                        <div class="msgr d-flex h-100 flex-column bg-white">
                            <!-- BEGIN custom-scroll -->
                            <div class="custom-scroll flex-1 h-100">
                                <div id="chat_container" class="w-100 p-4">
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment">
                                        <div class="time-stamp text-center mb-2 fw-400">
                                            Jun 19
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-sent">
                                        <div class="chat-message">
                                            <p>
                                                Hey Tracey, did you get my files?
                                            </p>
                                        </div>
                                        <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                            3:00 pm
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-get">
                                        <div class="chat-message">
                                            <p>
                                                Hi
                                            </p>
                                            <p>
                                                Sorry going through a busy time in office. Yes I analyzed the solution.
                                            </p>
                                            <p>
                                                It will require some resource, which I could not manage.
                                            </p>
                                        </div>
                                        <div class="fw-300 text-muted mt-1 fs-xs">
                                            3:24 pm
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-sent chat-start">
                                        <div class="chat-message">
                                            <p>
                                                Okay
                                            </p>
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-sent chat-end">
                                        <div class="chat-message">
                                            <p>
                                                Sending you some dough today, you can allocate the resources to this project.
                                            </p>
                                        </div>
                                        <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                            3:26 pm
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-get chat-start">
                                        <div class="chat-message">
                                            <p>
                                                Perfect. Thanks a lot!
                                            </p>
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-get">
                                        <div class="chat-message">
                                            <p>
                                                I will have them ready by tonight.
                                            </p>
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-get chat-end">
                                        <div class="chat-message">
                                            <p>
                                                Cheers
                                            </p>
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment for timestamp -->
                                    <div class="chat-segment">
                                        <div class="time-stamp text-center mb-2 fw-400">
                                            Jun 20
                                        </div>
                                    </div>
                                    <!--  end .chat-segment for timestamp -->
                                </div>
                            </div>
                            <!-- END custom-scroll  -->
                            <!-- BEGIN msgr__chatinput -->
                            <div class="d-flex flex-column">
                                <div class="border-faded border-right-0 border-bottom-0 border-left-0 flex-1 mr-3 ml-3 position-relative shadow-top">
                                    <div class="pt-3 pb-1 pr-0 pl-0 rounded-0" tabindex="-1">
                                        <div id="msgr_input" contenteditable="true" data-placeholder="Type your message here..." class="height-10 form-content-editable"></div>
                                    </div>
                                </div>
                                <div class="height-8 px-3 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1 mr-1" data-toggle="tooltip" data-original-title="More options" data-placement="top">
                                        <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Attach files" data-placement="top">
                                        <i class="fal fa-paperclip color-fusion-300"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Insert photo" data-placement="top">
                                        <i class="fal fa-camera color-fusion-300"></i>
                                    </a>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0);" class="btn btn-info">Send</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END msgr__chatinput -->
                        </div>
                        <!-- END msgr -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Messenger -->
        <!-- BEGIN Page Settings -->
        <div class="modal fade js-modal-settings modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right modal-md">
                <div class="modal-content">
                    <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center w-100">
                        <h4 class="m-0 text-center color-white">
                            Layout Settings
                            <small class="mb-0 opacity-80">User Interface Settings</small>
                        </h4>
                        <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="settings-panel">
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        App Layout
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="fh">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="header-function-fixed"></a>
                                <span class="onoffswitch-title">Fixed Header</span>
                                <span class="onoffswitch-title-desc">header is in a fixed at all times</span>
                            </div>
                            <div class="list" id="nff">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-fixed"></a>
                                <span class="onoffswitch-title">Fixed Navigation</span>
                                <span class="onoffswitch-title-desc">left panel is fixed</span>
                            </div>
                            <div class="list" id="nfm">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-minify"></a>
                                <span class="onoffswitch-title">Minify Navigation</span>
                                <span class="onoffswitch-title-desc">Skew nav to maximize space</span>
                            </div>
                            <div class="list" id="nfh">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-hidden"></a>
                                <span class="onoffswitch-title">Hide Navigation</span>
                                <span class="onoffswitch-title-desc">roll mouse on edge to reveal</span>
                            </div>
                            <div class="list" id="nft">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-top"></a>
                                <span class="onoffswitch-title">Top Navigation</span>
                                <span class="onoffswitch-title-desc">Relocate left pane to top</span>
                            </div>
                            <div class="list" id="fff">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="footer-function-fixed"></a>
                                <span class="onoffswitch-title">Fixed Footer</span>
                                <span class="onoffswitch-title-desc">page footer is fixed</span>
                            </div>
                            <div class="list" id="mmb">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-main-boxed"></a>
                                <span class="onoffswitch-title">Boxed Layout</span>
                                <span class="onoffswitch-title-desc">Encapsulates to a container</span>
                            </div>
                            <div class="expanded">
                                <ul class="mb-3 mt-1">
                                    <li>
                                        <div class="bg-fusion-50" data-action="toggle" data-class="mod-bg-1"></div>
                                    </li>
                                    <li>
                                        <div class="bg-warning-200" data-action="toggle" data-class="mod-bg-2"></div>
                                    </li>
                                    <li>
                                        <div class="bg-primary-200" data-action="toggle" data-class="mod-bg-3"></div>
                                    </li>
                                    <li>
                                        <div class="bg-success-300" data-action="toggle" data-class="mod-bg-4"></div>
                                    </li>
                                    <li>
                                        <div class="bg-white border" data-action="toggle" data-class="mod-bg-none"></div>
                                    </li>
                                </ul>
                                <div class="list" id="mbgf">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-fixed-bg"></a>
                                    <span class="onoffswitch-title">Fixed Background</span>
                                </div>
                            </div>
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Mobile Menu
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="nmp">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-push"></a>
                                <span class="onoffswitch-title">Push Content</span>
                                <span class="onoffswitch-title-desc">Content pushed on menu reveal</span>
                            </div>
                            <div class="list" id="nmno">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-no-overlay"></a>
                                <span class="onoffswitch-title">No Overlay</span>
                                <span class="onoffswitch-title-desc">Removes mesh on menu reveal</span>
                            </div>
                            <div class="list" id="sldo">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-slide-out"></a>
                                <span class="onoffswitch-title">Off-Canvas <sup>(beta)</sup></span>
                                <span class="onoffswitch-title-desc">Content overlaps menu</span>
                            </div>
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Accessibility
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="mbf">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-bigger-font"></a>
                                <span class="onoffswitch-title">Bigger Content Font</span>
                                <span class="onoffswitch-title-desc">content fonts are bigger for readability</span>
                            </div>
                            <div class="list" id="mhc">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-high-contrast"></a>
                                <span class="onoffswitch-title">High Contrast Text (WCAG 2 AA)</span>
                                <span class="onoffswitch-title-desc">4.5:1 text contrast ratio</span>
                            </div>
                            <div class="list" id="mcb">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-color-blind"></a>
                                <span class="onoffswitch-title">Daltonism <sup>(beta)</sup> </span>
                                <span class="onoffswitch-title-desc">color vision deficiency</span>
                            </div>
                            <div class="list" id="mpc">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-pace-custom"></a>
                                <span class="onoffswitch-title">Preloader Inside</span>
                                <span class="onoffswitch-title-desc">preloader will be inside content</span>
                            </div>
                            <div class="list" id="mpi">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-panel-icon"></a>
                                <span class="onoffswitch-title">SmartPanel Icons (not Panels)</span>
                                <span class="onoffswitch-title-desc">smartpanel buttons will appear as icons</span>
                            </div>
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Global Modifications
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="mcbg">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-clean-page-bg"></a>
                                <span class="onoffswitch-title">Clean Page Background</span>
                                <span class="onoffswitch-title-desc">adds more whitespace</span>
                            </div>
                            <div class="list" id="mhni">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-nav-icons"></a>
                                <span class="onoffswitch-title">Hide Navigation Icons</span>
                                <span class="onoffswitch-title-desc">invisible navigation icons</span>
                            </div>
                            <div class="list" id="dan">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-disable-animation"></a>
                                <span class="onoffswitch-title">Disable CSS Animation</span>
                                <span class="onoffswitch-title-desc">Disables CSS based animations</span>
                            </div>
                            <div class="list" id="mhic">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-info-card"></a>
                                <span class="onoffswitch-title">Hide Info Card</span>
                                <span class="onoffswitch-title-desc">Hides info card from left panel</span>
                            </div>
                            <div class="list" id="mlph">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-lean-subheader"></a>
                                <span class="onoffswitch-title">Lean Subheader</span>
                                <span class="onoffswitch-title-desc">distinguished page header</span>
                            </div>
                            <div class="list" id="mnl">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-link"></a>
                                <span class="onoffswitch-title">Hierarchical Navigation</span>
                                <span class="onoffswitch-title-desc">Clear breakdown of nav links</span>
                            </div>
                            <div class="list" id="mdn">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-dark"></a>
                                <span class="onoffswitch-title">Dark Navigation</span>
                                <span class="onoffswitch-title-desc">Navigation background is darkend</span>
                            </div>
                            <hr class="mb-0 mt-4">
                            <div class="mt-4 d-table w-100 pl-5 pr-3">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Global Font Size
                                    </h5>
                                </div>
                            </div>
                            <div class="list mt-1">
                                <div class="btn-group btn-group-sm btn-group-toggle my-2" data-toggle="buttons">
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-sm" data-target="html">
                                        <input type="radio" name="changeFrontSize"> SM
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text" data-target="html">
                                        <input type="radio" name="changeFrontSize" checked=""> MD
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-lg" data-target="html">
                                        <input type="radio" name="changeFrontSize"> LG
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-xl" data-target="html">
                                        <input type="radio" name="changeFrontSize"> XL
                                    </label>
                                </div>
                                <span class="onoffswitch-title-desc d-block mb-0">Change <strong>root</strong> font size to effect rem
                                    values (resets on page refresh)</span>
                            </div>
                            <hr class="mb-0 mt-4">
                            <div class="mt-4 d-table w-100 pl-5 pr-3">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0 pr-2 d-flex">
                                        Theme colors
                                        <a href="#" class="ml-auto fw-400 fs-xs" data-toggle="popover" data-trigger="focus" data-placement="top" title="" data-html="true" data-content="The settings below uses <code>localStorage</code> to load the external <strong>CSS</strong> file as an overlap to the base css. Due to network latency and <strong>CPU utilization</strong>, you may experience a brief flickering effect on page load which may show the intial applied theme for a split second. Setting the prefered style/theme in the header will prevent this from happening." data-original-title="<span class='text-primary'><i class='fal fa-exclamation-triangle mr-1'></i> Heads up!</span>" data-template="<div class=&quot;popover bg-white border-white&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><h3 class=&quot;popover-header bg-transparent&quot;></h3><div class=&quot;popover-body fs-xs&quot;></div></div>"><i class="fal fa-info-circle mr-1"></i> more info</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="expanded theme-colors pl-5 pr-3">
                                <ul class="m-0">
                                    <li>
                                        <a href="#" id="myapp-0" data-action="theme-update" data-themesave data-theme="" data-toggle="tooltip" data-placement="top" title="Wisteria (base css)" data-original-title="Wisteria (base css)"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-1" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-1.css" data-toggle="tooltip" data-placement="top" title="Tapestry" data-original-title="Tapestry"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-2" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-2.css" data-toggle="tooltip" data-placement="top" title="Atlantis" data-original-title="Atlantis"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-3" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-3.css" data-toggle="tooltip" data-placement="top" title="Indigo" data-original-title="Indigo"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-4" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-4.css" data-toggle="tooltip" data-placement="top" title="Dodger Blue" data-original-title="Dodger Blue"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-5" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-5.css" data-toggle="tooltip" data-placement="top" title="Tradewind" data-original-title="Tradewind"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-6" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-6.css" data-toggle="tooltip" data-placement="top" title="Cranberry" data-original-title="Cranberry"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-7" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-7.css" data-toggle="tooltip" data-placement="top" title="Oslo Gray" data-original-title="Oslo Gray"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-8" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-8.css" data-toggle="tooltip" data-placement="top" title="Chetwode Blue" data-original-title="Chetwode Blue"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-9" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-9.css" data-toggle="tooltip" data-placement="top" title="Apricot" data-original-title="Apricot"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-10" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-10.css" data-toggle="tooltip" data-placement="top" title="Blue Smoke" data-original-title="Blue Smoke"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-11" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-11.css" data-toggle="tooltip" data-placement="top" title="Green Smoke" data-original-title="Green Smoke"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-12" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-12.css" data-toggle="tooltip" data-placement="top" title="Wild Blue Yonder" data-original-title="Wild Blue Yonder"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-13" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-13.css" data-toggle="tooltip" data-placement="top" title="Emerald" data-original-title="Emerald"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-14" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-14.css" data-toggle="tooltip" data-placement="top" title="Supernova" data-original-title="Supernova"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-15" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-15.css" data-toggle="tooltip" data-placement="top" title="Hoki" data-original-title="Hoki"></a>
                                    </li>
                                </ul>
                            </div>
                            <hr class="mb-0 mt-4">
                            <div class="mt-4 d-table w-100 pl-5 pr-3">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0 pr-2 d-flex">
                                        Theme Modes (beta)
                                        <a href="#" class="ml-auto fw-400 fs-xs" data-toggle="popover" data-trigger="focus" data-placement="top" title="" data-html="true" data-content="This is a brand new technique we are introducing which uses CSS variables to infiltrate color options. While this has been working nicely on modern browsers without much issues, some users <strong>may still face issues on Internet Explorer </strong>. Until these issues are resolved or Internet Explorer improves, this feature will remain in Beta" data-original-title="<span class='text-primary'><i class='fal fa-question-circle mr-1'></i> Why beta?</span>" data-template="<div class=&quot;popover bg-white border-white&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><h3 class=&quot;popover-header bg-transparent&quot;></h3><div class=&quot;popover-body fs-xs&quot;></div></div>"><i class="fal fa-question-circle mr-1"></i> why beta?</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="pl-5 pr-3 py-3">
                                <div class="ie-only alert alert-warning d-none">
                                    <h6>Internet Explorer Issue</h6>
                                    This particular component may not work as expected in Internet Explorer. Please use with caution.
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-4 pr-2 text-center">
                                        <div id="skin-default" data-action="toggle-replace" data-replaceclass="mod-skin-light mod-skin-dark" data-class="" data-toggle="tooltip" data-placement="top" title="" class="d-flex bg-white border border-primary rounded overflow-hidden text-success js-waves-on" data-original-title="Default Mode" style="height: 80px">
                                            <div class="bg-primary-600 bg-primary-gradient px-2 pt-0 border-right border-primary"></div>
                                            <div class="d-flex flex-column flex-1">
                                                <div class="bg-white border-bottom border-primary py-1"></div>
                                                <div class="bg-faded flex-1 pt-3 pb-3 px-2">
                                                    <div class="py-3" style="background:url('img/demo/s-1.png') top left no-repeat;background-size: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        Default
                                    </div>
                                    <div class="col-4 px-1 text-center">
                                        <div id="skin-light" data-action="toggle-replace" data-replaceclass="mod-skin-dark" data-class="mod-skin-light" data-toggle="tooltip" data-placement="top" title="" class="d-flex bg-white border border-secondary rounded overflow-hidden text-success js-waves-on" data-original-title="Light Mode" style="height: 80px">
                                            <div class="bg-white px-2 pt-0 border-right border-"></div>
                                            <div class="d-flex flex-column flex-1">
                                                <div class="bg-white border-bottom border- py-1"></div>
                                                <div class="bg-white flex-1 pt-3 pb-3 px-2">
                                                    <div class="py-3" style="background:url('img/demo/s-1.png') top left no-repeat;background-size: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        Light
                                    </div>
                                    <div class="col-4 pl-2 text-center">
                                        <div id="skin-dark" data-action="toggle-replace" data-replaceclass="mod-skin-light" data-class="mod-skin-dark" data-toggle="tooltip" data-placement="top" title="" class="d-flex bg-white border border-dark rounded overflow-hidden text-success js-waves-on" data-original-title="Dark Mode" style="height: 80px">
                                            <div class="bg-fusion-500 px-2 pt-0 border-right"></div>
                                            <div class="d-flex flex-column flex-1">
                                                <div class="bg-fusion-600 border-bottom py-1"></div>
                                                <div class="bg-fusion-300 flex-1 pt-3 pb-3 px-2">
                                                    <div class="py-3 opacity-30" style="background:url('img/demo/s-1.png') top left no-repeat;background-size: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        Dark
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-0 mt-4">
                            <div class="pl-5 pr-3 py-3 bg-faded">
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <a href="#" class="btn btn-outline-danger fw-500 btn-block" data-action="app-reset">Reset Settings</a>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <a href="#" class="btn btn-danger fw-500 btn-block" data-action="factory-reset">Factory Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div> <span id="saving"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Settings -->
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
    </body>
    <!-- END Body -->
</html>
