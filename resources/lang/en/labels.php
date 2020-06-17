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
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update',
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
    ],

    'backend' => [
        'none' => 'NONE',
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total',
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
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],
        ],

        'stats' => [
            'members' => 'Statistics of Members',
            'members-count' => 'Count of Members',
            'member' => 'Member',
            'categories' => 'Statistics of Categories',
            'categories-count' => 'Count of Categories',
            'category' => 'Category',
            'places' => 'Statistics of Places',
            'places-count' => 'Count of Places',
            'place' => 'Place',
            'feeds' => 'Statistics of Feeds',
            'feeds-count' => 'Count of Feeds',
            'feed' => 'Feed',
            'sponsors' => 'Statistics of Sponsors',
            'sponsors-count' => 'Count of Sponsors',
            'sponsor' => 'Sponsor',
            'messages' => 'Statistics of Messages',
            'messages-count' => 'Count of Messages',
            'message' => 'Message',
        ],

        'members' => [
            'management' => 'Members Management',
            'create' => 'Create a New Member',
            'edit' => 'Edit Member',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'avatar' => 'Profile Picture',
            'gender' => 'Gender',
            'date_of_birth' => 'Date of Birth',
            'phone' => 'Phone Number',
            'status' => 'Status',
            'active' => 'Active',
            'in-active' => 'In-Active',
            'search-history' => 'Search History',
            'show-history' => 'Show History',
            'city' => 'City',
            'area' => 'Area',
            'choose-status' => 'Choose Status',
            'choose-gender' => 'Choose Gender',
            'male' => 'Male',
            'female' => 'Female',
            'member_name' => 'Member Name',

        ],

        'cities' => [
            'management' => 'Cities Management',
            'create' => 'Create a New City',
            'edit' => 'Edit City',
            'name' => 'Name',
            'ar_name' => 'Name in AR',
            'en_name' => 'Name in EN',
        ],

        'areas' => [
            'management' => 'Areas Management',
            'create' => 'Create a New Area',
            'edit' => 'Edit Area',
            'city' => 'City',
            'name' => 'Name',
            'ar_name' => 'Name in AR',
            'en_name' => 'Name in EN',
        ],

        'categories' => [
            'management' => 'Categories Management',
            'create' => 'Create a New Category',
            'edit' => 'Edit Category',
            'image' => 'Image',
            'name' => 'Name',
            'ar_name' => 'Name in AR',
            'en_name' => 'Name in EN',

        ],

        'home-sliders' => [
            'management' => 'Home Sliders Management',
            'create' => 'Create a New Slider',
            'edit' => 'Edit Slider',
            'image' => 'Image',
            'category' => 'Category',
        ],

        'features' => [
            'management' => 'Features Management',
            'create' => 'Create a New Feature',
            'edit' => 'Edit Feature',
            'image' => 'Image',
            'name' => 'Name',
        ],

        'places' => [
            'management' => 'Places Management',
            'create' => 'Create a New Place',
            'edit' => 'Edit Place',
            'image' => 'Image',
            'name' => 'Name',
            'phone' => 'Phone Number',
            'location' => 'Location',
            'category' => 'Category',
            'place_image' => 'Place Logo',
            'images' => 'Place Images',
            'start_work_time' => 'Start Work Time',
            'end_work_time' => 'End Work Time',
            'features' => 'Features',
            'lat' => 'Latitude',
            'lng' => 'Longitude',
            'map' => 'Map',
            'ar_location' => 'Location in AR',
            'en_location' => 'Location in EN',
            'ar_bio' => 'Bio in AR',
            'en_bio' => 'Bio in EN',
            'ar_name' => 'Name in AR',
            'en_name' => 'Name in EN',
            'reviews' => 'Show Reviews',
            'ordering' => 'Show Ordering',
            'show-reviews' => 'Show Reviews',
        ],

        'help-and-support' => [
            'management' => 'Help and Support Management',
            'create' => 'Create a New Help/Support',
            'edit' => 'Edit Help/Support',
            'type' => 'Type',
            'title' => 'Title',
            'ar_title' => 'Title in AR',
            'en_title' => 'Title in EN',
            'ar_body' => 'Body in AR',
            'en_body' => 'Body in EN',
        ],

        'feeds' => [
            'management' => 'Feeds Management',
            'create' => 'Create a New Feed',
            'edit' => 'Edit Feed',
            'feed_image' => 'Cover Image',
            'images' => 'Feed Images',
            'image' => 'Image',
            'title' => 'Title',
            'ar_title' => 'Title in AR',
            'en_title' => 'Title in EN',
            'ar_body' => 'Body in AR',
            'en_body' => 'Body in EN',
        ],

        'faqs' => [
            'management' => 'FAQs Management',
            'create' => 'Create a New FAQ',
            'edit' => 'Edit FAQ',
            'question' => 'Question',
            'ar_question' => 'Question in AR',
            'en_question' => 'Question in EN',
            'ar_answer' => 'Answer in AR',
            'en_answer' => 'Answer in EN',
        ],

        'sponsor-sliders' => [
            'management' => 'Sponsor Sliders Management',
            'create' => 'Create a New Sponsor Slider',
            'edit' => 'Edit Sponsor Slider',
            'image' => 'Logo',
            'link' => 'Link',
        ],

        'settings' => [
            'management' => 'Settings Management',
            'index' => 'Settings',
            'phone' => 'Phone Number'
        ],

        'notifications' => [
            'management' => 'Notifications Management',
            'create' => 'Create a New Notification',
            'edit' => 'Show Notification',
            'notification' => 'Notification Body',
            'members' => 'Members',
            'gender' => 'Gender',
            'member_name' => 'Member Name',
            'member_gender' => 'Gender',
            'member_email' => 'Email',
            'member_phone' => 'Phone Number',
        ],


        'messages' => [
            'management' => 'Messages Management',
            'edit' => 'Show Message',
            'name' => 'Sender Name',
            'email' => 'Sender Email',
            'phone' => 'Sender Phone Number',
            'message' => 'Message'
        ],

        'place-member-reviews' => [
            'edit' => 'Show Feedbacks',
            'is_liked' => 'Favourite',
            'rate' => 'Rate',
            'feedback' => 'Feedback',
            'status' => 'Control Show/Hide',
            'show' => 'Show',
            'hide' => 'Hide',
        ]
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],
    ],
];
