<?php
$_['d_admin_menu'] = [
        0 => [
            'icon' => "fa-dashboard",
            'name' => "Dashboard",
            'lng_name' => "text_dashboard",
            'href' => "index.php?route=common/dashboard&token=",
            'children' => []
        ],
        1 => [
            'icon' => "fa-tags",
            'lng_name' => "text_catalog",
            'name' => "Catalog",
            'href' => "",
            'children' => [
                1 => [
                    'icon' => ">>",
                    'name' => "Categories",
                    'lng_name' => "text_category",
                    'href' => "index.php?route=catalog/category&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Products",
                    'lng_name' => "text_product",
                    'href' => "index.php?route=catalog/product&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Recurring Profiles",
                    'lng_name' => "text_recurring",
                    'href' => "index.php?route=catalog/recurring&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                4 => [
                    'icon' => ">>",
                    'name' => "Filters",
                    'lng_name' => "text_filter",
                    'href' => "index.php?route=catalog/filter&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                5 => [
                    'icon' => ">>",
                    'name' => "Attributes",
                    'lng_name' => "text_attribute",
                    'href' => "",
                    'children' => [
                        1 => [
                            'icon' => ">>",
                            'name' => "Attributes",
                            'lng_name' => "text_attribute",
                            'href' => "index.php?route=catalog/attribute&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Attribute Groups",
                            'lng_name' => "text_attribute_group",
                            'href' => "index.php?route=catalog/attribute_group&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ],
                    'is_visible' => 1
                ],
                6 => [
                    'icon' => ">>",
                    'name' => "Options",
                    'lng_name' => "text_option",
                    'href' => "index.php?route=catalog/option&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                7 => [
                    'icon' => ">>",
                    'name' => "Manufactures",
                    'lng_name' => "text_manufacturer",
                    'href' => "index.php?route=catalog/manufacturer&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                8 => [
                    'icon' => ">>",
                    'name' => "Downloads",
                    'lng_name' => "text_download",
                    'href' => "index.php?route=catalog/download&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                9 => [
                    'icon' => ">>",
                    'name' => "Reviews",
                    'lng_name' => "text_review",
                    'href' => "index.php?route=catalog/review&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                10 => [
                    'icon' => ">>",
                    'name' => "Information",
                    'lng_name' => "text_information",
                    'href' => "index.php?route=catalog/information&token=",
                    'children' => [],
                    'is_visible' => 1
                ],

            ]
        ],
        2 => [
            'icon' => "fa-puzzle-piece",
            'name' => "Extensions",
            'lng_name' => "text_extension",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Extension Installer",
                    'lng_name' => "text_installer",
                    'href' => "index.php?route=extension/installer&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Extensions",
                    'lng_name' => "text_extension",
                    'href' => "index.php?route=extension/extension&token=",
                    'children' => []
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Modifications",
                    'lng_name' => "text_modification",
                    'href' => "index.php?route=extension/modification&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Events",
                    'lng_name' => "text_event",
                    'href' => "index.php?route=extension/event&token=",
                    'children' => [],
                    'is_visible' => 1
                ],

            ]
        ],
        3 => [
            'icon' => "fa-television",
            'name' => "Design",
            'lng_name' => "text_design",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Layouts",
                    'lng_name' => "text_layout",
                    'href' => "index.php?route=design/layout&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Banners",
                    'lng_name' => "text_banner",
                    'href' => "index.php?route=design/banner&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
            ]
        ],
        4 => [
            'icon' => "fa-shopping-cart",
            'name' => "Sales",
            'lng_name' => "text_sale",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Orders",
                    'lng_name' => "text_order",
                    'href' => "index.php?route=sale/order&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Recurring Profiles",
                    'lng_name' => "text_recurring",
                    'href' => "index.php?route=sale/recurring&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Recurring Profiles",
                    'lng_name' => "text_return",
                    'href' => "index.php?route=sale/return&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Gift Vouchers",
                    'lng_name' => "text_voucher",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Gift Vouchers",
                            'lng_name' => "text_voucher",
                            'href' => "index.php?route=sale/voucher&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Voucher Themes",
                            'lng_name' => "text_voucher_theme",
                            'href' => "index.php?route=sale/voucher_theme&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ],
                    'is_visible' => 1
                ],
            ]
        ],
        5 => [
            'icon' => "fa-user",
            'name' => "Customers",
            'lng_name' => "text_customer",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Customers",
                    'lng_name' => "text_customer",
                    'href' => "index.php?route=customer/customer&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Customer Groups",
                    'lng_name' => "text_customer_group",
                    'href' => "index.php?route=customer/customer_group&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Custom Fields",
                    'lng_name' => "text_custom_field",
                    'href' => "index.php?route=customer/custom_field&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
            ]
        ],
        6 => [
            'icon' => "fa-share-alt",
            'name' => "Marketing",
            'lng_name' => "text_marketing",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Marketing",
                    'lng_name' => "text_marketing",
                    'href' => "index.php?route=marketing/marketing&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Affiliates",
                    'lng_name' => "text_affiliate",
                    'href' => "index.php?route=marketing/affiliate&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Coupons",
                    'lng_name' => "text_coupon",
                    'href' => "index.php?route=marketing/coupon&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Mail",
                    'lng_name' => "text_contact",
                    'href' => "index.php?route=marketing/contact&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
            ]
        ],
        7 => [
            'icon' => "fa-cog",
            'name' => "System",
            'lng_name' => "text_system",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Settings",
                    'lng_name' => "text_setting",
                    'href' => "index.php?route=setting/store&token=",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Users",
                    'lng_name' => "text_users",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Users",
                            'lng_name' => "text_users",
                            'href' => "index.php?route=user/user&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "User Groups",
                            'lng_name' => "text_user_group",
                            'href' => "index.php?route=user/user_permission&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "API",
                            'lng_name' => "text_api",
                            'href' => "index.php?route=user/api&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Localisation",
                    'lng_name' => "text_localisation",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Store Location",
                            'lng_name' => "text_location",
                            'href' => "index.php?route=localisation/location&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Languages",
                            'lng_name' => "text_language",
                            'href' => "index.php?route=localisation/language&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Currencies",
                            'lng_name' => "text_currency",
                            'href' => "index.php?route=localisation/currency&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        3 => [
                            'icon' => ">>",
                            'name' => "Stock Statuses",
                            'lng_name' => "text_stock_status",
                            'href' => "index.php?route=localisation/stock_status&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        4 => [
                            'icon' => ">>",
                            'name' => "Order Statuses",
                            'lng_name' => "text_order_status",
                            'href' => "index.php?route=localisation/order_status&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        5 => [
                            'icon' => ">>",
                            'name' => "Returns",
                            'lng_name' => "text_return",
                            'href' => "",
                            'children' => [
                                0 => [
                                    'icon' => ">>",
                                    'name' => "Return Statuses",
                                    'lng_name' => "text_return_status",
                                    'href' => "index.php?route=localisation/return_status&token=",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                                1 => [
                                    'icon' => ">>",
                                    'name' => "Return Actions",
                                    'lng_name' => "text_return_action",
                                    'href' => "index.php?route=localisation/return_action&token=",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                                2 => [
                                    'icon' => ">>",
                                    'name' => "Return Reasons",
                                    'lng_name' => "text_return_reason",
                                    'href' => "index.php?route=localisation/return_reason&token=",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                            ],
                            'is_visible' => 1
                        ],
                        6 => [
                            'icon' => ">>",
                            'name' => "Countries",
                            'lng_name' => "text_country",
                            'href' => "index.php?route=localisation/country&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        7 => [
                            'icon' => ">>",
                            'name' => "Zones",
                            'lng_name' => "text_zone",
                            'href' => "index.php?route=localisation/zone&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        8 => [
                            'icon' => ">>",
                            'name' => "Geo Zones",
                            'lng_name' => "text_geo_zone",
                            'href' => "index.php?route=localisation/geo_zone&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        9 => [
                            'icon' => ">>",
                            'name' => "Taxes",
                            'lng_name' => "text_tax",
                            'href' => "",
                            'children' => [
                                0 => [
                                    'icon' => ">>",
                                    'name' => "Taxs Classes",
                                    'lng_name' => "text_tax_class",
                                    'href' => "index.php?route=localisation/tax_class&token=",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                                1 => [
                                    'icon' => ">>",
                                    'name' => "Tax Rates",
                                    'lng_name' => "text_tax_rate",
                                    'href' => "index.php?route=localisation/tax_rate&token=",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                            ],
                        ],
                        10 => [
                            'icon' => ">>",
                            'name' => "Length Classes",
                            'lng_name' => "text_length_class",
                            'href' => "index.php?route=localisation/length_class&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        11 => [
                            'icon' => ">>",
                            'name' => "Weight Classes",
                            'lng_name' => "text_weight_class",
                            'href' => "index.php?route=localisation/weight_class&token=",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ],
                    'is_visible' => 1,
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Tools",
                    'lng_name' => "text_tools",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Uploads",
                            'lng_name' => "text_upload",
                            'href' => "index.php?route=tool/upload&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Backup / Restore",
                            'lng_name' => "text_backup",
                            'href' => "index.php?route=tool/backup&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        3 => [
                            'icon' => ">>",
                            'name' => "Error Logs",
                            'lng_name' => "text_log",
                            'href' => "index.php?route=tool/log&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ],
            ],
        ],
        8 => [
            'icon' => "fa-bar-chart-o",
            'name' => "Reports",
            'lng_name' => "text_reports",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Sales",
                    'lng_name' => "text_report_sale",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Orders",
                            'lng_name' => "text_report_sale_order",
                            'href' => "index.php?route=report/sale_order&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Tax",
                            'lng_name' => "text_report_sale_tax",
                            'href' => "index.php?route=report/sale_tax&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Shipping",
                            'lng_name' => "text_report_sale_shipping",
                            'href' => "index.php?route=report/sale_shipping&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        3 => [
                            'icon' => ">>",
                            'name' => "Returns",
                            'lng_name' => "text_report_sale_return",
                            'href' => "index.php?route=report/sale_return&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        4 => [
                            'icon' => ">>",
                            'name' => "Coupons",
                            'lng_name' => "text_report_sale_coupon",
                            'href' => "index.php?route=report/sale_coupon&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Products",
                    'lng_name' => "text_report_product",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Viewed",
                            'lng_name' => "text_report_product_viewed",
                            'href' => "index.php?route=report/product_viewed&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Orders",
                            'lng_name' => "text_report_product_purchased",
                            'href' => "index.php?route=report/product_purchased&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Customers",
                    'lng_name' => "text_report_customer",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Customers Online",
                            'lng_name' => "text_report_customer_online",
                            'href' => "index.php?route=report/customer_online&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Customer Activity",
                            'lng_name' => "text_report_customer_activity",
                            'href' => "index.php?route=report/customer_activity&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Customer Searches",
                            'lng_name' => "text_report_customer_search",
                            'href' => "index.php?route=report/customer_search&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        3 => [
                            'icon' => ">>",
                            'name' => "Orders",
                            'lng_name' => "text_report_customer_order",
                            'href' => "index.php?route=report/customer_order&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        4 => [
                            'icon' => ">>",
                            'name' => "Reward Points",
                            'lng_name' => "text_report_customer_reward",
                            'href' => "index.php?route=report/customer_reward&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        5 => [
                            'icon' => ">>",
                            'name' => "Credit",
                            'lng_name' => "text_report_customer_credit",
                            'href' => "index.php?route=report/customer_credit&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Marketing",
                    'lng_name' => "text_report_marketing",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Marketing",
                            'lng_name' => "text_report_marketing",
                            'href' => "index.php?route=report/marketing&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Affiliates",
                            'lng_name' => "text_report_affiliate",
                            'href' => "index.php?route=report/affiliate&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Affiliate Activity",
                            'lng_name' => "text_report_affiliate_activity",
                            'href' => "index.php?route=report/affiliate_activity&token=",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ]
            ],
        ]
];
