<?php

interface BEYROUTH_OPTIONS {
    
    const   CUSTOM_HEADER_STYLE_TOGGLE              = 'custom_header_style_toggle',
            CUSTOM_HEADER_HEIGHT_CALC               = 'beyrouth_custom_header_height_unit',
            CUSTOM_HEADER_HEIGHT_PCT                = 'beyrouth_custom_header_height_percent',
            CUSTOM_HEADER_HEIGHT_PCT_MBL            = 'beyrouth_custom_header_height_percent_mbl',
            CUSTOM_HEADER_HEIGHT_PX                 = 'beyrouth_custom_header_height_pixels',
            CUSTOM_HEADER_HEIGHT_PX_MBL             = 'beyrouth_custom_header_height_pixels_mbl',
            CUSTOM_HEADER_PLX_INTENSITY             = 'parallax_layers_parallax_style',
            CUSTOM_HEADER_TEXTURE_IMG               = 'parallax_layers_texture_pattern',
            CUSTOM_HEADER_TEXTURE_OPAC              = 'parallax_layers_texture_layer_opacity',

            CUSTOM_HEADER_LOGO_HEIGHT               = 'beyrouth_custom_header_logo_height',
            CUSTOM_HEADER_LOGO_HEIGHT_MBL           = 'beyrouth_custom_header_logo_height_mbl',
            
            CUSTOM_HEADER_SHOW_TITLE                = 'custom_header_show_heading',
            CUSTOM_HEADER_TITLE_CONTENT             = 'custom_header_title_content',
            CUSTOM_HEADER_TITLE_FONT_FAMILY         = 'custom_header_title_font_family',
            CUSTOM_HEADER_TITLE_FONT_SIZE           = 'custom_header_title_font_size',
            CUSTOM_HEADER_TITLE_LETTER_GAP          = 'custom_header_title_letter_spacing',
            CUSTOM_HEADER_TITLE_ALL_CAPS            = 'custom_header_title_uppercase',
            CUSTOM_HEADER_TITLE_COLOR               = 'custom_header_title_color',
            
            CUSTOM_HEADER_SHOW_MENU                 = 'custom_header_show_menu',
            CUSTOM_HEADER_MENU_FONT_FAMILY          = 'custom_header_menu_font_family',
            CUSTOM_HEADER_MENU_FONT_SIZE            = 'custom_header_menu_font_size',
            CUSTOM_HEADER_MENU_LETTER_GAP           = 'custom_header_menu_letter_spacing',
            CUSTOM_HEADER_MENU_COLOR                = 'custom_header_menu_color',
            CUSTOM_HEADER_MENU_LINKS_GAP            = 'custom_header_menu_link_spacing',
            CUSTOM_HEADER_COLOR_LAYER_STYLE         = 'parallax_layers_include_color_layer',
            CUSTOM_HEADER_COLOR_LAYER_COLOR         = 'parallax_layers_single_color',
            CUSTOM_HEADER_COLOR_LAYER_OPACITY       = 'parallax_layers_single_color_opacity',
            
            CUSTOM_HEADER_SHOW_ON_POSTS             = 'custom_header_show_on_posts',
            CUSTOM_HEADER_SHOW_ON_PAGES             = 'custom_header_show_on_pages',
            CUSTOM_HEADER_SHOW_ON_FRONT             = 'custom_header_show_on_front',
            CUSTOM_HEADER_SHOW_ON_BLOG              = 'custom_header_show_on_blog',
            CUSTOM_HEADER_SHOW_ON_ARCHIVE           = 'custom_header_show_on_archive',
            CUSTOM_HEADER_SHOW_ON_SHOP              = 'custom_header_show_on_shop',
            CUSTOM_HEADER_MENU_BUTTONS              = 'custom_Header_menu_buttons',
            
            SOCIAL_HEADER_ALIGNMENT                 = 'custom_header_social_alignment',
            SOCIAL_HEADER_SHOW_SOCIAL               = 'custom_header_social_icons_toggle',
            SOCIAL_HEADER_SHOW_SCROLL_TAB           = 'custom_header_show_scroll_tab_toggle',
            
            GRADIENT_STYLE                          = 'parallax_layers_gradient_style',
            GRADIENT_OVERALL_OPACITY                = 'parallax_layers_gradient_overall_opacity',
            GRADIENT_LINEAR_DIRECTION               = 'parallax_layers_gradient_linear_direction',
            GRADIENT_START_COLOR                    = 'parallax_layers_gradient_start_color',
            GRADIENT_START_COLOR_OPACITY            = 'parallax_layers_gradient_start_color_opacity',
            GRADIENT_END_COLOR                      = 'parallax_layers_gradient_end_color',
            GRADIENT_END_COLOR_OPACITY              = 'parallax_layers_gradient_end_color_opacity',
            
            BLOG_LAYOUT_STYLE                       = 'blog_layout_style',
            BLOG_SHOW_DATE                          = 'blog_layout_show_date_posted',
            BLOG_SHOW_AUTHOR                        = 'blog_layout_show_author',
            BLOG_SHOW_CONTENT                       = 'blog_layout_show_content_excerpt',
            BLOG_SHOW_CATEGORY                      = 'blog_layout_show_categories',
            BLOG_SHOW_COMMENT_COUNT                 = 'blog_layout_show_comment_count',
            BLOG_EXCERPT_TRIM_NUM                   = 'blog_layout_excerpt_trim_words',
            BLOG_READ_MORE_TEXT                     = 'blog_layout_read_more_text',
            
            BLOG_LAYOUT_NUM_COLS                    = 'blog_layout_num_columns',
            BLOG_CARD_APPEARANCE                    = 'standard_blog_appearance_style',
            BLOG_CARD_BORDER_RADIUS                 = 'blog_layout_border_radius',
            BLOG_CARD_MOSAIC_GAP                    = 'mosaic_blog_gap_spacing',
            BLOG_CARD_FONT_SIZE_DSK                 = 'blog_title_font_size_dsk',
            BLOG_CARD_FONT_SIZE_MBL                 = 'blog_title_font_size_mbl',
            BLOG_META_FONT_SIZE                     = 'blog_meta_font_size',
            
            NAVBAR_STYLE                            = 'navbar_style',
            NAVBAR_HIDE_TAGLINE                     = 'navbar_hide_tagline',
            NAVBAR_SITE_TITLE_FONT_FAMILY           = 'navbar_site_title_font',
            NAVBAR_SITE_TITLE_FONT_SIZE             = 'navbar_site_title_font_size',
            NAVBAR_SITE_TITLE_LETTER_GAP            = 'navbar_site_title_spacing',
            NAVBAR_SITE_TITLE_ALL_CAPS              = 'navbar_site_title_uppercase',
            NAVBAR_TAGLINE_FONT_FAMILY              = 'navbar_site_tagline_font',
            NAVBAR_TAGLINE_FONT_SIZE                = 'navbar_site_tagline_font_size',
            NAVBAR_LINKS_FONT_FAMILY                = 'navbar_links_font',
            NAVBAR_LINKS_FONT_SIZE                  = 'navbar_links_font_size',
            NAVBAR_LINKS_GAP                        = 'navbar_links_gap_spacing',
            NAVBAR_HAS_SHADOW                       = 'style_a_box_shadow',
            
            NAVBAR_ALWAYS_SHOW_LOGO                 = 'style_a_always_show_logo',
            NAVBAR_LOGO_HORIZONTAL_PADDING          = 'style_a_logo_space',
            NAVBAR_LOGO_HEIGHT_DSK                  = 'navbar_banner_logo_height',
            NAVBAR_LOGO_HEIGHT_MBL                  = 'style_a_mobile_logo_height',
            NAVBAR_INITIAL_HEIGHT                   = 'style_a_collapse_height',
            NAVBAR_STICKY_HEIGHT                    = 'style_a_expand_height',
            NAVBAR_RIGHT_ALIGN_MENU                 = 'style_a_right_align_menu',
            NAVBAR_BOXED_CONTENT                    = 'style_a_boxed_navbar',
            NAVBAR_TRANSPARENT_MENU_BG              = 'navbar_banner_transparent_menu_toggle',
            NAVBAR_BRANDING_ALIGNMENT               = 'navbar_banner_logo_alignment',
            NAVBAR_MENU_ALIGNMENT                   = 'navbar_banner_menu_alignment',
            NAVBAR_BRANDING_SPACE_TOP_DSK           = 'navbar_banner_logo_top_spacing',
            NAVBAR_BRANDING_SPACE_BOTTOM_DSK        = 'navbar_banner_logo_bottom_spacing',
            NAVBAR_BRANDING_SPACE_TOP_MBL           = 'navbar_banner_logo_top_spacing_mbl',
            NAVBAR_BRANDING_SPACE_BOTTOM_MBL        = 'navbar_banner_logo_bottom_spacing_mbl',
            NAVBAR_FINAL_LINK_ACCENT                = 'navbar_final_link_accent',
            NAVBAR_FINAL_LINK_ROUNDED               = 'navbar_final_link_rounded',
            NAVBAR_FINAL_LINK_FILL                  = 'navbar_final_link_fill',
            
            VERT_NAVBAR_DISPLAY_SETTING             = 'beyrouth_vertical_navbar_display_setting',
            VERT_NAVBAR_TAB_BACKGROUND              = 'beyrouth_vertical_navbar_tab_background',
            VERT_NAVBAR_TAB_FOREGROUND              = 'beyrouth_vertical_navbar_tab_foreground',
    
            NAVBAR_SHOW_SOCIAL                      = 'navbar_show_social',
            SOCIAL_URL_1                            = 'social_icon_1_url',
            SOCIAL_ICON_1                           = 'social_icon_1_icon',
            SOCIAL_URL_2                            = 'social_icon_2_url',
            SOCIAL_ICON_2                           = 'social_icon_2_icon',
            SOCIAL_URL_3                            = 'social_icon_3_url',
            SOCIAL_ICON_3                           = 'social_icon_3_icon',
            SOCIAL_URL_4                            = 'social_icon_4_url',
            SOCIAL_ICON_4                           = 'social_icon_4_icon',
            SOCIAL_URL_5                            = 'social_icon_5_url',
            SOCIAL_ICON_5                           = 'social_icon_5_icon',
            
            NAVBAR_BG_STYLE                         = 'navbar_background_style',
            NAVBAR_BG_COLOR                         = 'navbar_background',
            NAVBAR_FG_COLOR                         = 'navbar_foreground',
            NAVBAR_MENU_BG_COLOR                    = 'navbar_banner_menu_background',
            NAVBAR_MENU_FG_COLOR                    = 'navbar_banner_menu_foreground',
            NAVBAR_BG_IMAGE                         = 'navbar_bg_image',
            NAVBAR_SOCIAL_BG_COLOR                  = 'navbar_social_drawer_background',
            NAVBAR_SOCIAL_FG_COLOR                  = 'navbar_social_link_foreground',
            NAVBAR_SOCIAL_FG_COLOR_HOVER            = 'navbar_social_link_foreground_hover',
            
            COLOR_SKIN_PRIMARY                      = 'skin_theme_primary',
            COLOR_SKIN_SECONDARY                    = 'skin_theme_secondary',
            
            FONT_PRIMARY                            = 'primary_font',
            FONT_SECONDARY                          = 'secondary_font',
            FONT_BODY_SIZE                          = 'body_font_size',
            FONT_HEADINGS_LETTER_GAP                = 'headings_letter_spacing',
            FONT_HEADINGS_LINE_HEIGHT               = 'headings_line_height',
            
            FOOTER_NUM_WIDGET_COLS                  = 'footer_num_columns',
            FOOTER_BORDER_TOP_THICKNESS             = 'prefooter_top_border_thickness',
            WIDGETS_TITLE_FONT_FAMILY               = 'prefooter_widget_title_font_family',
            WIDGETS_TITLE_FONT_SIZE                 = 'prefooter_widget_title_font_size',
            WIDGETS_TITLE_FONT_LETTER_GAP           = 'prefooter_widget_title_letter_spacing',
            WIDGETS_TITLE_ALL_CAPS                  = 'prefooter_widget_title_uppercase',
            
            FOOTER_BOXED_CONTENT                    = 'boxed_footer',
            FOOTER_CENTER_BRANDING                  = 'centered_footer_branding',
            FOOTER_SHOW_SOCIAL                      = 'footer_show_social',
            FOOTER_SHOW_BRANDING                    = 'footer_show_branding',
            FOOTER_SHOW_COPYRIGHT                   = 'footer_show_copyright',
            FOOTER_COPYRIGHT_TAGLINE                = 'footer_copyright_tagline',
            FOOTER_BRANDING_TYPE                    = 'footer_branding',
            FOOTER_ALTERNATE_LOGO                   = 'alternate_logo',
            FOOTER_ALTERNATE_LOGO_HEIGHT            = 'beyrouth_footer_logo_height',
            FOOTER_SITE_TITLE_FONT_SIZE             = 'footer_site_title_font_size',
            FOOTER_SITE_TITLE_ALL_CAPS              = 'footer_site_title_uppercase',
            FOOTER_COPYRIGHT_TAGLINE_FONT_SIZE      = 'footer_copyright_font_size',

            PRE_FOOTER_BG_COLOR                     = 'prefooter_background',
            PRE_FOOTER_FG_COLOR                     = 'prefooter_foreground',
            PRE_FOOTER_WIDGET_TITLE_COLOR           = 'prefooter_widget_title_color',
            FOOTER_BG_COLOR                         = 'footer_background',
            FOOTER_FG_COLOR                         = 'footer_foreground',
            
            WOO_SHOW_FEATURED_PRODUCTS              = 'show_featured_products',
            WOO_SHOW_FEATURED_PRODUCT_HEADING       = 'show_featured_product_header',
            WOO_FEATURED_PRODUCTS_NUM_COLS          = 'featured_products_num_columns',
            
            WOO_SLIDE_CART_TOGGLE                   = 'cart_drawer_toggle',
            WOO_SLIDE_CART_TAB_COLOR                = 'cart_drawer_tab_color',
            WOO_SLIDE_CART_TAB_ICON                 = 'cart_drawer_tab_icon',
            WOO_SLIDE_CART_TAB_POSITION             = 'cart_drawer_tab_location',
            
            HOMEPAGE_SHOW_CONTENT                   = 'homepage_show_content_toggle',
            SINGLE_POST_SHOW_NAVIGATION             = 'show_single_post_navigation',
            EASE_SCROLL_TOGGLE                      = 'ease_scroll_toggle',
    
            COMPANION_NOTICE_DISMISSED              = 'show_companion_notice',
            
            EDD_LAYOUT_STYLE                        = 'edd_store_layout_style';

}

interface BEYROUTH_DEFAULTS {
    
    const   CUSTOM_HEADER_STYLE_TOGGLE              = 'social',
            CUSTOM_HEADER_HEIGHT_CALC               = 'percent',
            CUSTOM_HEADER_HEIGHT_PCT                = 100,
            CUSTOM_HEADER_HEIGHT_PCT_MBL            = 40,
            CUSTOM_HEADER_HEIGHT_PX                 = 500,
            CUSTOM_HEADER_HEIGHT_PX_MBL             = 250,
            CUSTOM_HEADER_PLX_INTENSITY             = 'default',
            CUSTOM_HEADER_TEXTURE_IMG               = '',
            CUSTOM_HEADER_TEXTURE_OPAC              = .75,

            CUSTOM_HEADER_LOGO_HEIGHT               = 150,
            CUSTOM_HEADER_LOGO_HEIGHT_MBL           = 80,
    
            CUSTOM_HEADER_SHOW_TITLE                = true,
            CUSTOM_HEADER_TITLE_CONTENT             = 'both',
            CUSTOM_HEADER_TITLE_FONT_FAMILY         = 'secondary',
            CUSTOM_HEADER_TITLE_FONT_SIZE           = 65,
            CUSTOM_HEADER_TITLE_LETTER_GAP          = '.250',
            CUSTOM_HEADER_TITLE_ALL_CAPS            = true,
            CUSTOM_HEADER_TITLE_COLOR               = '#414141',
            
            CUSTOM_HEADER_SHOW_MENU                 = true,
            CUSTOM_HEADER_MENU_FONT_FAMILY          = 'primary',
            CUSTOM_HEADER_MENU_FONT_SIZE            = 14,
            CUSTOM_HEADER_MENU_LETTER_GAP           = '.100',
            CUSTOM_HEADER_MENU_COLOR                = '#ffffff',
            CUSTOM_HEADER_MENU_LINKS_GAP            = 16,
            CUSTOM_HEADER_COLOR_LAYER_STYLE         = 'single',
            CUSTOM_HEADER_COLOR_LAYER_COLOR         = '#fff',
            CUSTOM_HEADER_COLOR_LAYER_OPACITY       = .5,
            
            CUSTOM_HEADER_SHOW_ON_POSTS             = false,
            CUSTOM_HEADER_SHOW_ON_PAGES             = false,
            CUSTOM_HEADER_SHOW_ON_FRONT             = true,
            CUSTOM_HEADER_SHOW_ON_BLOG              = true,
            CUSTOM_HEADER_SHOW_ON_ARCHIVE           = true,
            CUSTOM_HEADER_SHOW_ON_SHOP              = false,
            CUSTOM_HEADER_MENU_BUTTONS              = true,
            
            SOCIAL_HEADER_ALIGNMENT                 = 'flex-start',
            SOCIAL_HEADER_SHOW_SOCIAL               = true,
            SOCIAL_HEADER_SHOW_SCROLL_TAB           = true,
            
            GRADIENT_STYLE                          = 'linear',
            GRADIENT_OVERALL_OPACITY                = 1,
            GRADIENT_LINEAR_DIRECTION               = 'right',
            GRADIENT_START_COLOR                    = '#00a0bc',
            GRADIENT_START_COLOR_OPACITY            = .85,
            GRADIENT_END_COLOR                      = '#000000',
            GRADIENT_END_COLOR_OPACITY              = 0.01,
            
            BLOG_LAYOUT_STYLE                       = 'blog_masonry',
            BLOG_SHOW_DATE                          = true,
            BLOG_SHOW_AUTHOR                        = true,
            BLOG_SHOW_CONTENT                       = true,
            BLOG_SHOW_CATEGORY                      = true,
            BLOG_SHOW_COMMENT_COUNT                 = true,
            BLOG_EXCERPT_TRIM_NUM                   = 30,
            BLOG_READ_MORE_TEXT                     = 'Read more',
            
            BLOG_LAYOUT_NUM_COLS                    = '3col',
            BLOG_CARD_APPEARANCE                    = 'flat',
            BLOG_CARD_BORDER_RADIUS                 = 0,
            BLOG_CARD_MOSAIC_GAP                    = 0,
            BLOG_CARD_FONT_SIZE_DSK                 = 32,
            BLOG_CARD_FONT_SIZE_MBL                 = 20,
            BLOG_META_FONT_SIZE                     = 12,
            
            NAVBAR_STYLE                            = 'vertical',
            NAVBAR_HIDE_TAGLINE                     = true,
            NAVBAR_SITE_TITLE_FONT_FAMILY           = 'secondary',
            NAVBAR_SITE_TITLE_FONT_SIZE             = 32,
            NAVBAR_SITE_TITLE_LETTER_GAP            = '.250',
            NAVBAR_SITE_TITLE_ALL_CAPS              = true,
            NAVBAR_TAGLINE_FONT_FAMILY              = 'secondary',
            NAVBAR_TAGLINE_FONT_SIZE                = 12,
            NAVBAR_LINKS_FONT_FAMILY                = 'primary',
            NAVBAR_LINKS_FONT_SIZE                  = 14,
            NAVBAR_LINKS_GAP                        = 30,
            NAVBAR_HAS_SHADOW                       = true,
    
            NAVBAR_ALWAYS_SHOW_LOGO                 = true,
            NAVBAR_LOGO_HORIZONTAL_PADDING          = 15,
            NAVBAR_LOGO_HEIGHT_DSK                  = 60,
            NAVBAR_LOGO_HEIGHT_MBL                  = 50,
            NAVBAR_INITIAL_HEIGHT                   = 75,
            NAVBAR_STICKY_HEIGHT                    = 50,
            NAVBAR_RIGHT_ALIGN_MENU                 = false,
            NAVBAR_BOXED_CONTENT                    = false,
            NAVBAR_TRANSPARENT_MENU_BG              = true,
            NAVBAR_BRANDING_ALIGNMENT               = 'left',
            NAVBAR_MENU_ALIGNMENT                   = 'left',
            NAVBAR_BRANDING_SPACE_TOP_DSK           = 60,
            NAVBAR_BRANDING_SPACE_BOTTOM_DSK        = 20,
            NAVBAR_BRANDING_SPACE_TOP_MBL           = 30,
            NAVBAR_BRANDING_SPACE_BOTTOM_MBL        = 15,
            NAVBAR_FINAL_LINK_ACCENT                = false,
            NAVBAR_FINAL_LINK_ROUNDED               = true,
            NAVBAR_FINAL_LINK_FILL                  = true,
            
            VERT_NAVBAR_DISPLAY_SETTING             = 'toggled',
            VERT_NAVBAR_TAB_BACKGROUND              = '#75dbb3',
            VERT_NAVBAR_TAB_FOREGROUND              = '#ffffff',
            
            NAVBAR_SHOW_SOCIAL                      = true,
            SOCIAL_URL_1                            = '',
            SOCIAL_ICON_1                           = '',
            SOCIAL_URL_2                            = '',
            SOCIAL_ICON_2                           = '',
            SOCIAL_URL_3                            = '',
            SOCIAL_ICON_3                           = '',
            SOCIAL_URL_4                            = '',
            SOCIAL_ICON_4                           = '',
            SOCIAL_URL_5                            = '',
            SOCIAL_ICON_5                           = '',
            
            NAVBAR_BG_STYLE                         = 'color',
            NAVBAR_BG_COLOR                         = '#ffffff',
            NAVBAR_FG_COLOR                         = '#141414',
            NAVBAR_MENU_BG_COLOR                    = '#ffffff',
            NAVBAR_MENU_FG_COLOR                    = '#141414',
            NAVBAR_BG_IMAGE                         = '',
            NAVBAR_SOCIAL_BG_COLOR                  = '#ffffff',
            NAVBAR_SOCIAL_FG_COLOR                  = '#141414',
            NAVBAR_SOCIAL_FG_COLOR_HOVER            = '#348aa7',
            
            COLOR_SKIN_PRIMARY                      = '#75dbb3',
            COLOR_SKIN_SECONDARY                    = '#007fa3',

            FONT_PRIMARY                            = 'Mukta Malar, sans-serif',
            FONT_SECONDARY                          = 'Abel, sans-serif',
            FONT_BODY_SIZE                          = 18,
            FONT_HEADINGS_LETTER_GAP                = '0.0',
            FONT_HEADINGS_LINE_HEIGHT               = '1',
            
            FOOTER_NUM_WIDGET_COLS                  = 3,
            FOOTER_BORDER_TOP_THICKNESS             = 10,
            WIDGETS_TITLE_FONT_FAMILY               = 'secondary',
            WIDGETS_TITLE_FONT_SIZE                 = 24,
            WIDGETS_TITLE_FONT_LETTER_GAP           = '.250',
            WIDGETS_TITLE_ALL_CAPS                  = true,
            
            FOOTER_BOXED_CONTENT                    = false,
            FOOTER_CENTER_BRANDING                  = false,
            FOOTER_SHOW_SOCIAL                      = false,
            FOOTER_SHOW_BRANDING                    = true,
            FOOTER_SHOW_COPYRIGHT                   = true,
            FOOTER_COPYRIGHT_TAGLINE                = '2018 Your Company',
            FOOTER_BRANDING_TYPE                    = 'site_title',
            FOOTER_ALTERNATE_LOGO                   = '',
            FOOTER_ALTERNATE_LOGO_HEIGHT            = 30,
            FOOTER_SITE_TITLE_FONT_SIZE             = 18,
            FOOTER_SITE_TITLE_ALL_CAPS              = true,
            FOOTER_COPYRIGHT_TAGLINE_FONT_SIZE      = 12,
            
            PRE_FOOTER_BG_COLOR                     = '#141414',
            PRE_FOOTER_FG_COLOR                     = '#ffffff',
            PRE_FOOTER_WIDGET_TITLE_COLOR           = '#ffffff',
            FOOTER_BG_COLOR                         = '#000000',
            FOOTER_FG_COLOR                         = '#ffffff',
            
            WOO_SHOW_FEATURED_PRODUCTS              = true,
            WOO_SHOW_FEATURED_PRODUCT_HEADING       = true,
            WOO_FEATURED_PRODUCTS_NUM_COLS          = 'two',
            
            WOO_SLIDE_CART_TOGGLE                   = true,
            WOO_SLIDE_CART_TAB_COLOR                = '#000000',
            WOO_SLIDE_CART_TAB_ICON                 = 'fa-shopping-cart',
            WOO_SLIDE_CART_TAB_POSITION             = 'bottom',

            HOMEPAGE_SHOW_CONTENT                   = true,
            SINGLE_POST_SHOW_NAVIGATION             = true,
            EASE_SCROLL_TOGGLE                      = true,
    
            COMPANION_NOTICE_DISMISSED              = false,
            
            EDD_LAYOUT_STYLE                        = 'edd_masonry';
    
}
