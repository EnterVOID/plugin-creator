<?php

return [
    'plugin' => [
        'name' => 'Creator',
        'description' => 'Front-end creator management.'
    ],
    'location' => [
        'label' => 'Location',
        'new' => 'New Location',
        'create_title' => 'Create Location',
        'update_title' => 'Edit Location',
        'preview_title' => 'Preview Location'
    ],
    'locations' => [
        'menu_label' => 'Locations',
        'menu_description' => 'Manage available creator countries and states.',
        'hide_disabled' => 'Hide disabled',
        'enabled_label' => 'Enabled',
        'enabled_help' => 'Disabled locations are not visible on the front-end.',
        'enable_or_disable_title' => "Enable or Disable Locations",
        'enable_or_disable' => 'Enable or disable',
        'selected_amount' => 'Locations selected: :amount',
        'enable_success' => 'Successfully enabled those locations.',
        'disable_success' => 'Successfully disabled those locations.',
        'disable_confirm' => 'Are you sure?',
        'list_title' => 'Manage Locations',
        'delete_confirm' => 'Do you really want to delete this location?',
        'return_to_list' => 'Return to locations list'
    ],
    'creators' => [
        'menu_label' => 'Creators',
        'all_creators' => 'All Creators',
        'new_creator' => 'New Creator',
        'list_title' => 'Manage Creators',
        'activating' => 'Activating...',
        'activate_warning_title' => 'Creator not activated!',
        'activate_warning_desc' => 'This creator has not been activated and will be unable to sign in.',
        'activate_confirm' => 'Do you really want to activate this creator?',
        'active_manually' => 'Activate this creator manually',
        'delete_confirm' => 'Do you really want to delete this creator?',
        'activated_success' => 'Creator has been activated successfully!',
        'return_to_list' => 'Return to creators list',
        'delete_selected_empty' => 'There are no selected creators to delete.',
        'delete_selected_confirm' => 'Delete the selected creators?',
        'delete_selected_success' => 'Successfully deleted the selected creators.',
    ],
    'settings' => [
        'creators' => 'Creators',
        'menu_label' => 'Creator settings',
        'menu_description' => 'Manage creator based settings.',
        'activation_tab' => 'Activation',
        'location_tab' => 'Location',
        'signin_tab' => 'Sign in',
        'activate_mode' => 'Activation mode',
        'activate_mode_comment' => 'Select how a creator account should be activated.',
        'activate_mode_auto' => 'Automatic',
        'activate_mode_auto_comment' => 'Activated automatically upon registration.',
        'activate_mode_creator' => 'Creator',
        'activate_mode_creator_comment' => 'The creator activates their own account using mail.',
        'activate_mode_admin' => 'Administrator',
        'activate_mode_admin_comment' => 'Only an Administrator can activate a creator.',
        'welcome_template' => 'Welcome Template',
        'welcome_template_comment' => 'Mail template to send a creator when they are first activated.',
        'require_activation' => 'Sign in requires activation',
        'require_activation_comment' => 'Creators must have an activated account to sign in.',
        'default_country' => 'Default Country',
        'default_country_comment' => 'When a creator does not specify their location, select a default country to use.',
        'default_state' => 'Default State',
        'default_state_comment' => 'When a creator does not specify their location, select a default state to use.',
        'use_throttle' => 'Throttle attempts',
        'use_throttle_comment' => 'Repeat failed sign in attempts will temporarily suspend the creator.',
        'login_attribute' => 'Login attribute',
        'login_attribute_comment' => 'Select what creator detail should be used for signing in.',
        'no_mail_template' => 'Do not send a notification',
        'hint_templates' => 'You can customize mail templates by selecting Mail > Mail Templates from the settings menu.'
    ],
    'state' => [
        'label' => 'State',
        'name' => 'Name',
        'name_comment' => 'Enter the display name for this state.',
        'code' => 'Code',
        'code_comment' => 'Enter a unique code to identify this state.'
    ],
    'country' => [
        'label' => 'Country',
        'name' => 'Name',
        'code' => 'Code',
        'code_comment' => 'Enter a unique code to identify this country.',
        'enabled' => 'Enabled'
    ],
    'creator' => [
        'label' => 'Creator',
        'id' => 'ID',
        'creatorname' => 'Creatorname',
        'name' => 'Name',
        'name_desc' => 'Your creator\'s name as you want it to appear on their profile.',
        'surname' => 'Surname',
        'gender' => 'Gender',
        'gender_desc' => 'Your creator\'s gender.',
        'created_at' => 'Created',
        'bio' => 'Bio',
        'bio_desc' => "A brief biography or explanation of your creator's history, creatoristics, etc.",
        'phone' => 'Phone',
        'company' => 'Company',
        'city' => 'City',
        'zip' => 'Zip',
        'street_addr' => 'Street Address',
        'country' => 'Country',
        'select_country' => '-- select country --',
        'state' => 'State',
        'select_state' => '-- select state --',
        'height' => 'Height',
        'height_desc' => 'Your creator\'s height.',
        'confirm_password' => 'Password Confirmation',
        'confirm_password_comment' => 'Enter the password again to confirm it.',
        'avatar' => 'Avatar',
        'design_sheet' => 'Design Sheet',
        'supplemental_art' => 'Supplemental Art',
        'details' => 'Details',
        'account' => 'Account',
        'images' => 'Images',
        'status' => [
            'name' => 'Status',
            'active' => 'Active',
            'retired' => 'Retired',
            'inactive' => 'Inactive',
            'killed' => 'Dead',
            'nauseous' => 'Nauseous (?)',
            'destroyed' => 'I don\'t think we use this one any more',
        ]
    ],
    'login' => [
        'attribute_email' => 'Email',
        'attribute_creatorname' => 'Creatorname'
    ],
    'account' => [
        'account' => 'Account',
        'account_desc' => 'Creator management form.',
        'redirect_to' => 'Redirect to',
        'redirect_to_desc' => 'Page name to redirect to after update, sign in or registration.',
        'code_param' => 'Activation Code Param',
        'code_param_desc' => 'The page URL parameter used for the registration activation code',
        'invalid_activation_code' => 'Invalid activation code supplied',
        'invalid_creator' => 'A creator was not found with the given credentials.',
        'success_activation' => 'Successfully activated your account.',
        'success_saved' => 'Settings successfully saved!',
        'login_first' => 'You must be logged in first!',
        'alredy_active' => 'Your account is already activated!',
        'activation_email_sent' => 'Activation email has been sent to your nominated email address.',
        'country' => 'Country',
        'state' => 'State',
        'sign_in' => 'Sign in',
        'register' => 'Register',
        'full_name' => 'Full Name',
        'email' => 'Email',
        'password' => 'Password',
        'register' => 'Register',
        'login' => 'Login',
        'address' => 'Address',
        'city_suburb' => 'City / Suburb',
        'postal_code' => 'Postal code',
        'new_password' => 'New Password',
        'new_password_confirm' => 'Confirm New Password'
    ],
    'reset_password' => [
        'reset_password' => 'Reset Password',
        'reset_password_desc' => 'Forgotten password form.',
        'code_param' => 'Reset Code Param',
        'code_param_desc' => 'The page URL parameter used for the reset code'
    ],
    'session' => [
        'session' => 'Session',
        'session_desc' => 'Adds the creator session to a page and can restrict page access.',
        'security_title' => 'Allow only',
        'security_desc' => 'Who is allowed to access this page.',
        'all' => 'All',
        'creators' => 'Creators',
        'guests' => 'Guests',
        'redirect_title' => 'Redirect to',
        'redirect_desc' => 'Page name to redirect if access is denied.',
        'logout' => 'You have been successfully logged out!'
    ]
];