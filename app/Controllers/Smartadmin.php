<?php

namespace App\Controllers;

class Smartadmin extends BaseController
{
    public function blank()
    {
        return view('blank');
    }

    public function form_basic_inputs()
    {
        return view('form_basic_inputs');
    }
    public function form_checkbox_radio()
    {
        return view('form_checkbox_radio');
    }
    public function form_input_groups()
    {
        return view('form_input_groups');
    }
    public function form_validation()
    {
        return view('form_validation');
    }
    public function icons_fontawesome_brand()
    {
        return view('icons_fontawesome_brand');
    }
    public function icons_fontawesome_regular()
    {
        return view('icons_fontawesome_regular');
    }
    public function icons_fontawesome_solid()
    {
        return view('icons_fontawesome_solid');
    }
    public function icons_fontawesome_light()
    {
        return view('icons_fontawesome_light');
    }
    public function icons_fontawesome_duotone()
    {
        return view('icons_fontawesome_duotone');
    }
    public function icons_nextgen_base()
    {
        return view('icons_nextgen_base');
    }
    public function icons_nextgen_general()
    {
        return view('icons_nextgen_general');
    }
    public function icons_stack_general()
    {
        return view('icons_stack_general');
    }
    public function icons_stack_generate()
    {
        return view('icons_stack_generate');
    }
    public function icons_stack_showcase()
    {
        return view('icons_stack_showcase');
    }
    public function icons_webfonts_faq()
    {
        return view('icons_webfonts_faq');
    }
    public function intel_introduction()
    {
        return view('intel_introduction');
    }
    public function intel_privacy()
    {
        return view('intel_privacy');
    }
    public function page_chat()
    {
        return view('page_chat');
    }
    public function page_confirmation()
    {
        return view('page_confirmation');
    }
    public function page_contacts()
    {
        return view('page_contacts');
    }
    public function page_error_404()
    {
        return view('page_error_404');
    }
    public function page_error_announced()
    {
        return view('page_error_announced');
    }
    public function page_error()
    {
        return view('page_error');
    }
    public function page_forget()
    {
        return view('page_forget');
    }
    public function page_forum_discussion()
    {
        return view('page_forum_discussion');
    }
    public function page_forum_list()
    {
        return view('page_forum_list');
    }
    public function page_forum_threads()
    {
        return view('page_forum_threads');
    }
    public function page_inbox_general()
    {
        return view('page_inbox_general');
    }
    public function page_inbox_read()
    {
        return view('page_inbox_read');
    }
    public function page_inbox_write()
    {
        return view('page_inbox_write');
    }
    public function page_invoice()
    {
        return view('page_invoice');
    }
    public function page_locked()
    {
        return view('page_locked');
    }
    public function page_login()
    {
        return view('page_login');
    }
    public function page_login_alt()
    {
        return view('page_login_alt');
    }
    public function page_profile()
    {
        return view('page_profile');
    }
    public function page_projects()
    {
        return view('page_projects');
    }
    public function page_register()
    {
        return view('page_register');
    }
    public function page_search()
    {
        return view('page_search');
    }
    public function plugins_appcore()
    {
        return view('plugins_appcore');
    }
    public function plugins_bootbox()
    {
        return view('plugins_bootbox');
    }
    public function plugins_faq()
    {
        return view('plugins_faq');
    }
    public function plugins_i18next()
    {
        return view('plugins_i18next');
    }
    public function plugins_navigation()
    {
        return view('plugins_navigation');
    }
    public function plugins_pacejs()
    {
        return view('plugins_pacejs');
    }
    public function plugins_slimscroll()
    {
        return view('plugins_slimscroll');
    }
    public function plugins_smartpanels()
    {
        return view('plugins_smartpanels');
    }
    public function plugins_throttle()
    {
        return view('plugins_throttle');
    }
    public function plugins_waves()
    {
        return view('plugins_waves');
    }
    public function settings_how_it_works()
    {
        return view('settings_how_it_works');
    }
    public function settings_layout_options()
    {
        return view('settings_layouts_options');
    }
    public function settings_saving_db()
    {
        return view('settings_saving_db');
    }
    public function settings_skin_options()
    {
        return view('settings_skin_options');
    }
    public function settings_theme_modes()
    {
        return view('settings_theme_modes');
    }
    public function tables_basic()
    {
        return view('tables_basic');
    }
    public function tables_generate_style()
    {
        return view('tables_generate_style');
    }
    public function ui_accordion()
    {
        return view('ui_accordion');
    }
    public function ui_alerts()
    {
        return view('ui_alerts');
    }
    public function ui_badges()
    {
        return view('ui_badges');
    }
    public function ui_breadcrumbs()
    {
        return view('ui_breadcrumbs');
    }
    public function ui_button_group()
    {
        return view('ui_button_group');
    }
    public function ui_buttons()
    {
        return view('ui_buttons');
    }
    public function ui_cards()
    {
        return view('ui_cards');
    }
    public function ui_carousel()
    {
        return view('ui_carousel');
    }
    public function ui_collapse()
    {
        return view('ui_collapse');
    }
    public function ui_dropdowns()
    {
        return view('ui_dropdowns');
    }
    public function ui_list_filter()
    {
        return view('ui_list_filter');
    }
    public function ui_modal()
    {
        return view('ui_modal');
    }
    public function ui_navbars()
    {
        return view('ui_navbars');
    }
    public function ui_pagination()
    {
        return view('ui_pagination');
    }
    public function ui_panels()
    {
        return view('ui_panels');
    }
    public function ui_popovers()
    {
        return view('ui_popovers');
    }
    public function ui_progress_bars()
    {
        return view('ui_progress_bars');
    }
    public function ui_scrollspy()
    {
        return view('ui_scrollspy');
    }
    public function ui_side_panel()
    {
        return view('ui_side_panel');
    }
    public function ui_spinners()
    {
        return view('ui_spinners');
    }
    public function ui_tabs_accordions()
    {
        return view('ui_tabs_accordions');
    }
    public function ui_tabs_pills()
    {
        return view('ui_tabs_pills');
    }
    public function ui_toasts()
    {
        return view('ui_toasts');
    }
    public function ui_tooltips_popovers()
    {
        return view('ui_tooltips_popovers');
    }
    public function ui_tooltips()
    {
        return view('ui_tooltips');
    }
    public function utilities_borders()
    {
        return view('utilities_borders');
    }
    public function utilities_clearfix()
    {
        return view('utilities_clearfix');
    }
    public function utilities_color_pallet()
    {
        return view('utilities_color_pallet');
    }
    public function utilities_display_property()
    {
        return view('utilities_display_property');
    }
    public function utilities_flexbox()
    {
        return view('utilities_flexbox');
    }
    public function utilities_fonts()
    {
        return view('utilities_fonts');
    }
    public function utilities_helpers()
    {
        return view('utilities_helpers');
    }
    public function utilities_position()
    {
        return view('utilities_position');
    }
    public function utilities_responsive_grid()
    {
        return view('utilities_responsive_grid');
    }
    public function utilities_sizing()
    {
        return view('utilities_sizing');
    }
    public function utilities_spacing()
    {
        return view('utilities_spacing');
    }
    public function utilities_typography()
    {
        return view('utilities_typography');
    }




}
