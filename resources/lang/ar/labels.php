<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'الكل',
        'yes' => 'نعم',
        'no' => 'لا',
        'custom' => 'مخصص',
        'actions' => 'إجراءات',
        'active' => 'Active',
        'buttons' => [
            'save' => 'حفظ',
            'update' => 'تحديث',
        ],
        'hide' => 'إخفاء',
        'inactive' => 'Inactive',
        'none' => 'لا شيء',
        'show' => 'إظاهر',
        'toggle_navigation' => 'تبديل شريط التنقل',
    ],

    'backend' => [
        'none' => 'لا يوجد',

        'access' => [
            'roles' => [
                'create' => 'إنشاء دور جديد',
                'edit' => 'تعديل دور',
                'management' => 'إدارة الأدوار',

                'table' => [
                    'number_of_users' => 'عدد المستخدمين',
                    'permissions' => 'الصلاحيات',
                    'role' => 'الدور',
                    'sort' => 'الترتيب',
                    'total' => 'مجموع الدور|مجموع الأدوار',
                ],
            ],

            'users' => [
                'active' => 'المستخدمون النشطون',
                'all_permissions' => 'جميع الصلاحيات',
                'change_password' => 'تغيير كلمة المرور',
                'change_password_for' => 'تغيير كلمة المرور للمستخدم :user',
                'create' => 'إنشاء مستخدم جديد',
                'deactivated' => 'المستخدمون المعطلون',
                'deleted' => 'المستخدمون المحذوفون',
                'edit' => 'تعديل المستخدم',
                'management' => 'إدارة المستخدمين',
                'no_permissions' => 'بدون صلاحيات',
                'no_roles' => 'بدون أي أدوار.',
                'permissions' => 'صلاحيات',

                'table' => [
                    'confirmed' => 'مؤكد',
                    'created' => 'تم الإنشاء',
                    'email' => 'البريد الإلكتروني',
                    'id' => 'ID',
                    'last_updated' => 'آخر تحديث',
                    'name' => 'الإسم',
                    'no_deactivated' => 'لا يوجد أي مستخدمين معطلين',
                    'no_deleted' => 'لا يوحد أي مستخدمين محذوفين',
                    'roles' => 'الأدوار',
                    'social' => 'Social',
                    'total' => 'مجموع المستخدم|مجموع المستخدمين',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],

        ],

        'stats' => [
            'members' => 'إحصائيات الأعضاء',
            'members-count' => 'عدد الأعضاء',
            'member' => 'عضو',
            'categories' => 'إحصائيات الأقسام',
            'categories-count' => 'عدد الأقسام',
            'category' => 'قسم',
            'places' => 'إحصائيات الأماكن',
            'places-count' => 'عدد الأماكن',
            'place' => 'مكان',
            'feeds' => 'إحصائيات المواضيع',
            'feeds-count' => 'عدد المواضيع',
            'feed' => 'موضوع',
            'sponsors' => 'إحصائيات الرعاة',
            'sponsors-count' => 'عدد الرعاة',
            'sponsor' => 'راعى',
            'messages' => 'إحصائيات الرسائل',
            'messages-count' => 'عدد الرسائل',
            'message' => 'رسالة',
        ],

        'members' => [
            'management' => 'إدارة الأعضاء',
            'create' => 'إنشاء عضو جديد',
            'edit' => 'تعديل عضو',
            'first_name' => 'الإسم الأول',
            'last_name' => 'الإسم الأخير',
            'email' => 'البريد الإلكترونى',
            'password' => 'كلمة السر',
            'avatar' => 'صورة العضو',
            'gender' => 'النوع',
            'date_of_birth' => 'تاريخ الميلاد',
            'phone' => 'رقم الهاتف',
            'status' => 'الحالة',
            'active' => 'مفعل',
            'city' => 'المدينة',
            'area' => 'المنطقة',
            'search-history' => 'سجل بحث الأماكن',
            'member_name' => 'إسم العضو',
            'in-active' => 'غير مفعل',
            'show-history' => 'عرض السجل',
            'choose-status' => 'إختر الحالة',
            'choose-gender' => 'إختر النوع',
            'male' => 'ذكر',
            'female' => 'أنثى',
        ],

        'cities' => [
            'management' => 'إدارة المدن',
            'create' => 'إنشاء مدينة جديدة',
            'edit' => 'تعديل مدينة',
            'name' => 'الإسم',
            'ar_name' => 'الإسم بالعربى',
            'en_name' => 'الإسم بالإنجليزى',
        ],

        'areas' => [
            'management' => 'إدارة المناطق',
            'create' => 'إنشاء منطقة جديدة',
            'edit' => 'تعديل منطقة',
            'city' => 'المدينة',
            'name' => 'الإسم',
            'ar_name' => 'الإسم بالعربى',
            'en_name' => 'الإسم بالإنجليزى',
        ],

        'categories' => [
            'management' => 'إدارة الأقسام',
            'create' => 'إنشاء قسم جديد',
            'edit' => 'تعديل قسم',
            'image' => 'الصورة',
            'name' => 'الإسم',
            'ar_name' => 'الإسم بالعربى',
            'en_name' => 'الإسم بالإنجليزى',

        ],

        'home-sliders' => [
            'management' => 'إدارة سلايدر الرئيسية',
            'create' => 'إنشاء سلايد جديد',
            'edit' => 'تعديل سلايد',
            'image' => 'الصورة',
            'category' => 'القسم',
        ],

        'features' => [
            'management' => 'إدارة مميزات الأماكن',
            'create' => 'إنشاء ميزة جديدة',
            'edit' => 'تعديل ميزة',
            'image' => 'الصورة',
            'name' => 'الإسم',
        ],

        'places' => [
            'management' => 'إدارة الأماكن',
            'create' => 'إنشاء مكان جديد',
            'edit' => 'تعديل مكان',
            'image' => 'الصورة',
            'name' => 'الإسم',
            'phone' => 'رقم الهاتف',
            'location' => 'العنوان',
            'category' => 'القسم',
            'place_image' => 'لوجو المكان',
            'images' => 'صور المكان',
            'start_work_time' => 'ميعاد بداية العمل',
            'end_work_time' => 'ميعاد إنتهاء العمل',
            'features' => 'المميزات',
            'lat' => 'إحداثى نقطة العرض',
            'lng' => 'إحداثى نقطة الطول',
            'map' => 'تحديد موقع المكان على الخريطة',
            'ar_location' => 'العنوان بالعربى',
            'en_location' => 'العنوان بالإنجليزى',
            'ar_bio' => 'وصف المكان بالعربى',
            'en_bio' => 'وصف المكان بالإنجليزى',
            'ar_name' => 'إسم المكان بالعربى',
            'en_name' => 'إسم المكان بالإنجليزى',
            'reviews' => 'عرض المراجعات',
            'ordering' => 'ترتيب العرض',
            'show-reviews' => 'عرض المراحعات',

        ],

        'help-and-support' => [
            'management' => 'إدارة المساعدة والدعم',
            'create' => 'إنشاء مساعدة أو دعم جديدة/جديد',
            'edit' => 'تعديل مساعدة أو دعم',
            'type' => 'النوع',
            'title' => 'العنوان',
            'ar_title' => 'العنوان بالعربى',
            'en_title' => 'العنوان بالإنجليزى',
            'ar_body' => 'المحتوى بالعربى',
            'en_body' => 'المحتوى بالإنجليزى',
        ],

        'feeds' => [
            'management' => 'إدارة المواضيع',
            'create' => 'إنشاء موضوع جديد',
            'edit' => 'تعديل موضوع',
            'feed_image' => 'صورة الغلاف',
            'images' => 'صور الموضوع',
            'image' => 'الصورة',
            'title' => 'العنوان',
            'ar_title' => 'العنوان بالعربى',
            'en_title' => 'العنوان بالإنجليزى',
            'ar_body' => 'المحتوى بالعربى',
            'en_body' => 'المحتوى بالإنجليزى',
        ],

        'faqs' => [
            'management' => 'إدارة الأسئلة الشائعة',
            'create' => 'إنشاء سؤال جديد',
            'edit' => 'تعديل موضوع',
            'question' => 'السؤال',
            'ar_question' => 'السؤال بالعربى',
            'en_question' => 'السؤال بالإنجليزى',
            'ar_answer' => 'الإجابة بالعربى',
            'en_answer' => 'الإجابة بالإنجليزى',
        ],

        'sponsor-sliders' => [
            'management' => 'إدارة الرعاة',
            'create' => 'إنشاء راعى جديد',
            'edit' => 'تعديل راعى',
            'image' => 'اللوجو',
            'link' => 'الرابط',
        ],

        'settings' => [
            'management' => 'إدارة الإعدادات',
            'index' => 'الإعدادات',
            'phone' => 'رقم هاتف الدعم'
        ],

        'notifications' => [
            'management' => 'إدارة الإشعارات',
            'create' => 'إنشاء إشعار جديد',
            'edit' => 'عرض الإشعار',
            'notification' => 'نص الإشعار',
            'members' => 'الأعضاء',
            'gender' => 'النوع',
            'member_name' => 'إسم العضو',
            'member_gender' => 'النوع',
            'member_email' => 'البريد الإلكترونى',
            'member_phone' => 'رقم الهاتف',
        ],


        'messages' => [
            'management' => 'إدارة الرسائل',
            'edit' => 'عرض الرسالة',
            'name' => 'إسم المٌرسل',
            'email' => 'بريد المٌرسل',
            'phone' => 'رقم هاتف المٌرسل',
            'message' => 'نص الرسالة'
        ],

        'place-member-reviews' => [
            'edit' => 'عرض المراجعات',
            'is_liked' => 'الإعجاب',
            'rate' => 'التقييم',
            'feedback' => 'المراجعة',
            'status' => 'التحكم فى العرض',
            'show' => 'إظهار',
            'hide' => 'حجب',
        ]

    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'تسجيل الدخول',
            'login_button' => 'تسجيل الدخول',
            'login_with' => 'تسجيل الدخول بواسطة :social_media',
            'register_box_title' => 'تسجيل',
            'register_button' => 'تسجيل',
            'remember_me' => 'تذكرني',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'forgot_password' => 'نسيت كلمة مرورك؟',
            'reset_password_box_title' => 'إعادة تعيين كلمة المرور',
            'reset_password_button' => 'إعادة تعيين كلمة المرور',
            'send_password_reset_link_button' => 'إرسال رابط إعادة تعيين كلمة المرور',
        ],

        'user' => [
            'passwords' => [
                'change' => 'تغيير كلمة المرور',
            ],

            'profile' => [
                'avatar' => 'الصورة الشخصية',
                'created_at' => 'تم الإنشاء في',
                'edit_information' => 'تعديل البيانات',
                'email' => 'البريد الإلكتروني',
                'last_updated' => 'آخر تحديث تم في',
                'name' => 'الإسم',
                'update_information' => 'تحديث البيانات',
            ],
        ],
    ],
];
