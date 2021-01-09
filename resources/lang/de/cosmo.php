<?php
return [
/**
 * @TranslationFile GERMAN
 * @authors Morgan, Zeo
 * @helpers [
        https://morgan-lee.cc - English / Base Translations
        https://zeodev.cc - Dutch
    ],
 * @file cosmo.php
 * @version 1.0.0

 * Welcome Translator!
 * Thank you for being one of the very few people willing to translate our new addon Cosmo.
 * This translation file is the only one you'll need to translate, as everything you need is located below.
 * Please take your time to ensure everything is correct and appropriate.
 * Upon sending this file back to the authors, please make sure to add your name next to the @helpers property so you can be properly credited.
 * With any notification messages and or success messages, please feel free to come up with your own slogan as long as it sends the same message.
 * if you see a string with a comment next to it, that's to give you more context.
 * Any string with a :variable name is referring to the variable passed into the message. (LEAVE THE VARIABLES)

 * How to translate
 * You'll see two strings, please only translate the string on the right side of the arrow as seen below
 * 'search' => 'ENTER YOUR TRANSLATION HERE',
 * Please also make sure that all of the strings you edit end with a comma (,)
 * If you need to use an apostrophe (') please escape it with a backslash (\) as seen below
 * 'example' => 'You\'re awesome!',
 **/

// TRANSLATIONS START //
    'navbar' => [
        'profile' => 'Profil',
        'visit_profile' => 'Visit and update your profile!',

        'management' => 'Management',
        'manage_cosmo' => 'Manage Cosmo as an Administrator.',

        'logout' => 'Abmelden',
        'login' => 'Anmelden',

        'welcome_back' => 'Willkommen zurück :username',
        'notifications' => 'Benachrichtigungen'
    ],


    'core' => [
        'home' => 'Startseite',
        'staff' => 'Team',
        'threads' => 'Threads',
        'browse_threads' => 'Browse All Threads',
        'viewing_thread' => 'Viewing Thread',
        'forums' => 'Forum',
        'terms' => 'Allgemeine Geschäftsbedingungen',
        'store' => 'Store',
        'success' => 'Erfolg!',
        'failed' => 'Fehler!',
        'checkout' => 'Kasse',
        'users' => 'Benutzer',
        'board' => 'Board',
        'edit' => 'Bearbeiten',

        'licensed_to' => 'Lizensiert für :licensee',
        'created_by' => 'Erstellt von :author',

        'theme_specific' => [
            'group_members' => 'Gruppen Mitglieder',
            'online_members' => 'Online Members',
            'in-game_members' => 'In-Game Members',
            'join_steam-group' => 'Trete unserer Steam-Gruppe bei',
            'players_online' => 'Spieler Online',
            'join_servers' => 'Trete unsere <span>Server</span> bei',
            'join_discord' => 'Trete unseren <span>Discord</span> bei',
        ]
    ],

    'store' => [
        'browse_packages' => 'Siehe dir unsere Pakete für :server an!', // broken? :server doesnt get changed
        'checkout' => 'Zur Kasse',
        'permanent' => 'Permanent',
        'non-permanent' => 'Nicht Permanent',
        'login_to-checkout' => 'Anmelden um zur Kasse gehen zu können',

        'coupon-code' => 'Rabatt Code',
        'enter_coupon-code' => 'Gebe dein Rabatt Code ein',
        'gift-purchase' => 'Als Geschenk kaufen',
        'enter_steamId' => 'SteamID Eingeben',

        'finalize_purchase' => 'Kauf Fertigstellen',
        'tos_agree' => 'Beim Kauf stimmst du unseren <a href="'.route('store.tos').'">Allgemeinen Geschäftsbedingungen</a> zu.', // Translate around the link
        'checkout_with-paypal' => 'Mit PayPal Bezahlen',

        'complete_purchase' => 'Kauf Fertigstellen',
        'checking_out-package' => 'You are checking out :package', //"You are checking out package: VIP"
        'package_price' => 'Paket Preis',

        'sub-total' => 'Sub Totals',
        'total' => 'Total: :sign:price',
        'servers' => 'Server',

        'monthly_goal' => 'Monatliches Spenden ziel',
        'table' => [
            'top_donations' => 'Top Spenden',
            'recent_donations' => 'Kürzliche Spenden',
            'name' => 'Name',
            'amount' => 'Anzahl',
            'package' => 'Paket',
        ],

        'select_server' => 'Server Auswählen',

        'success' => [
            'success' => 'Bezahlung Erfolgreich!',
            'msg' => 'You will receive your package shortly...'
        ],
        'fail' => [
            'fail' => 'Bezahlung Fehlgeschlagen!',
            'msg' => 'Bezahlung fehlgeschlagen, Bitte versuche es später erneut.',
        ],

        'sale' => [
            'time-left' => 'Zeit Übrig: :time',
            'info' => '<b>Hurry</b> and grab our products on sale! <span>:percentage% OFF</span>',
            'go_to_store' => 'GO TO STORE',
        ],
    ],

    'forums' => [
        'polls' => 'Abstimmungen',
        'polls_desc' => 'Have your say in the community',
        'unanswered_polls' => 'Unanswered Poll(s)',

        'search' => 'Suche',
        'search_desc' => 'Durchsuche unser Forum!',

        'recent_activity' => 'Kürzliche Aktivität',
        'recent_desc' => 'Our Communities recent activity',

        'latest_threads' => 'Latest Threads',
        'latest_threads-desc' => 'Our communities latest threads',

        'latest_posts' => 'Latest Posts',
        'latest_posts-desc' => 'Our communities latest posts',

        'replies' => 'Antworten',

        'threads' => [
            'locked' => 'GESCHLOSSEN',
            'pinned' => 'ANGEPINNT',

            'edit_thread' => 'Thread Bearbeiten',
            'editing_thread' => 'Thread Bearbeiten',
            'pin_thread' => 'Thread Anpinnen',
            'unpin_thread' => 'Thread Entpinnen',
            'lock_thread' => 'Thread Schließen',
            'unlock_thread' => 'Thread Öffnen',
            'move_thread' => 'Thread Verschieben',
            'delete_thread'=> 'Thread Löschen',

            'create_thread' => 'Thread Erstellen',
            'update_thread' => 'Thread Erstellen',
            'thread_title' => 'Thread Titel',
            'post_reply' => 'Post',

            'created_at' => 'Erstellt',

            'posted_by' => 'Von: ',

            'locked_no_reply' => 'Du kannst nicht länger auf diesen Thread antworten da dieser geschlossen wurde.',
        ],
        'posts' => [
            'editing_post' => 'Post Bearbeiten',
            'update_post' => 'Post Aktualisieren'
        ]
    ],

    'users' => [
        'search_users' => 'Benutzer Suchen...',
        'no_users-found' => 'Keine Benutzer gefunden',

        'pills' => [
            'home'=> 'Über',
            'comments' => 'Kommentare',
            'threads' => 'Threads',
            'achievements' => 'Erfolge',
            'edit' => 'Profil Bearbeiten',
        ],

        'welcome_to_profile' => 'Welcome to my profile!',

        'user_joined' => 'User Joined',
        'comment' => 'Kommentieren',
        'editing_comment' => 'Kommentar bearbeiten',

        'edit' => [
            'display_name' => 'Angezeigter Name',
            'avatar_image' => 'Avatar',
            'background_image' => 'Hintergrundbild',
            'biography' => 'Biography',
            'signature' => 'Signatur',
            'sync_steam' => 'Mit Steam Synchronisieren',
            'sync_discord' => 'Mit Discord Synchronisieren',
        ],

        'achievements' => [
            'unlock_more' => 'Mehr Freischalten...',
            'default' => 'To unlock more achievements, continue to use the forums and other features.',
            'achievement_unlocked' => 'This achievement was unlocked' // "This achievement was unlocked" 1 day ago
        ],
    ],

    'actions' => [
        'close' => 'Schließen',
        'save_changes' => 'Änderungen Speichern',
        'go_back' => 'Zurück',
        'submit' => 'Senden',
        'post' => 'Post',
        'create' => 'Erstellen',
        'update' => 'Aktualisieren',
        'delete' => 'Löschen'
    ],

    'notifications' => [
        'new_notif' => 'NEU',
        'notifications' => 'Benachrichtigungen',
        'mark_all_as_read' => 'Alle als gelesen markieren',
        'delete_all' => 'Alle löschen',
        'no_notifications' => 'Du hast keine Benachrichtigungen',

        'reply_to_thread' => ':username hat auf dein Thread geantwortet',
        'unlocked_achievement' => 'You have unlocked the achievement: :achievement',
        'profile_comment' => ':username hat auf dein Profil kommentiert!',
        'profile_like' => ':username has :state your profile!',
        'thread_action' => ':admin has :action your thread: :title',
        'manage' => 'Manage your outstanding Notifications',
    ],

    'toastr_alerts' => [
        'marked_notifications' => 'You have marked all of your notifications as read!',
        'cleared_notifications' => 'You have cleared all of your notifications!',

        'update_post' => 'Successfully updated post',
        'delete_post' => 'Successfully deleted post',

        'create_thread' => 'Successfully created new thread',
        'update_thread' => 'Successfully updated thread',
        'delete_thread' => 'Successfully delete thread!',
        'pin_thread' => 'Successfully pinned thead!',
        'unpin_thread' => 'Successfully unpinned thead!',
        'lock_thread' => 'Successfully locked thead!',
        'unlock_thread' => 'Successfully unlocked thead!',
        'move_thread' => 'Successfully moved thread!',

        'application_cache' => 'Cleared application cache!',

        'create_board' => 'Successfully created board',
        'update_board' => 'Successfully updated board',
        'delete_board' => 'Successfully delete board!',
        'move_board' => 'Successfully sorted the boards!',

        'create_category' => 'Successfully created new category',
        'update_category' => 'Successfully updated category',
        'delete_category' => 'Successfully delete category!',

        'create_poll' => 'Successfully started a new poll',
        'update_poll' => 'Successfully updated the poll',
        'delete_poll' => 'Successfully delete the poll!',
        'open_poll' => 'Successfully set the status of the poll to open!',
        'close_poll' => 'Successfully set the status of the poll to closed!',

        'update_configurations' => 'Successfully updated all general configurations!',
        'update_meta' => 'Successfully updated all meta configurations!',
        'update_integration' => 'Successfully updated all integration configurations!',
        'update_theme' => 'Successfully updated global theme!',
        'update_settings' => 'Successfully updated all store configurations!',
        'update_tos' => 'Successfully updated Terms Of Service!',

        'create_role' => 'Successfully created a new role',
        'update_role' => 'Successfully updated role!',
        'delete_role' => 'Successfully deleted role!',

        'update_user' => 'Successfully updated user!',

        'create_feature' => 'Successfully created a new feature!',
        'update_feature' => 'Successfully updated feature!',
        'delete_feature' => 'Successfully deleted feature!',

        'create_footer-link' => 'Successfully created a new footer link!',
        'update_footer-link' => 'Successfully updated footer link!',
        'delete_footer-link' => 'Successfully deleted footer link!',

        'create_nav-link' => 'Successfully created a new navigation link!',
        'update_nav-link' => 'Successfully updated navigation link!',
        'delete_nav-link' => 'Successfully deleted navigation link',

        'create_server' => 'Successfully created a new server!',
        'update_server' => 'Successfully updated server!',
        'delete_server' => 'Successfully deleted server!',

        'create_coupon' => 'Successfully created a new coupon code!',
        'update_coupon' => 'Successfully updated coupon code!',
        'delete_coupon' => 'Successfully deleted coupon code!',

        'invalid_coupon-code' => 'This coupon code is invalid!',
        'unusable_coupon-code' => 'This coupon code can\'t be used on this package!',
        'invalid_gift-steamId' => 'This SteamID is invalid!',

        'create_package' => 'Successfully created a new store package!',
        'update_package' => 'Successfully updated package!',
        'delete_package' => 'Successfully deleted package!',

        'create_sale' => 'Successfully added a new store sale',
        'update_sale' => 'Successfully updated store sale!',
        'delete_sale' => 'Successfully deleted store sale!',

        'create_comment' => 'Successfully posted comment!',
        'update_comment' => 'Successfully updated comment!',
        'delete_comment' => 'Successfully deleted comment!',

        'like_own_profile' => 'Sorry, you can\'t like your own profile :)',
        'remove_like' => 'Successfully removed like for :username\'s profile!',
        'create_like' => 'Successfully liked :username\'s profile!',

        'update_profile' => 'Successfully updated profile!',
    ],


    'management' => [
        'navigation' => [
            'dashboard' => 'Dashboard',

            'general' => 'General',
            'configuration' => 'Konfiguration',
            'meta' => 'Meta',
            'users' => 'Benutzer',
            'roles' => 'Rollen',

            'index' => 'Index',
            'components' => [
                'components' => 'Components',
                'nav-links' => 'Nav Links',
                'features' => 'Features',
                'servers' => 'Server',
                'integrations' => 'Integration',
                'footer-links' => 'Footer Links'
            ],
            'theme' => 'Theme',

            'forums' => 'Forum',
            'categories' => 'Kategorien',
            'boards' => 'Boards',
            'polls' => 'Abstimmungen',

            'store' => 'Store',
            'settings' => 'Einstellungen',
            'packages' => [
                'packages' => 'Pakete',
                'create' => 'Erstellen',
                'manage' => 'Bearbeiten'
            ],
            'coupon_code' => 'Rabatt Code',
            'sales' => 'Angebote',
            'tos' => 'AGB',
            'transactions' => 'Transaktionen',
            'profile' => 'Profil',
            'exit_management' => 'Management Verlassen',
            'logout' => 'Abmelden',
        ],

        'core' => [
            'clear_cache' => 'Cache Leeren',
            'check_for_updates' => 'Nach Aktualisierungen prüfen',

            'dashboard_title' => 'Dashboard',
            'dashboard_small' => 'Seiten Statistiken',

            'configurations_title' => 'Einstellungen',
            'configurations_small' => 'Manage Configuration',

            'meta_title' => 'Meta',
            'meta_small' => 'Manage Site Meta',

            'users_title' => 'Benutzer',
            'users_small' => 'Manage Users',
            'users_search' => 'Search Users...',
            'users_role' => 'Rolle',

            'create_new_role' => 'Neue Rolle erstellen',
            'roles_role-name' => 'Rollen Name',
            'roles_role-display' => 'Rollen Anzeigename',
            'roles_role-color' => 'Rollen Farbe',

            'create_new_nav' => 'Create new link',
            'nav_name' => 'Link Name',
            'nav_icon' => 'Link Icon',
            'nav_color' => 'Link Color',
            'nav_url' => 'Link URL',
            'nav_category' => 'Link Category',

            'create_new_feature' => 'Create new feature',
            'feature_name' => 'Feature Name',
            'feature_icon' => 'Feature Icon',
            'feature_color' => 'Feature Color',
            'feature_content' => 'Feature Content',

            'create_new_server' => 'Neuen Server erstellen',
            'server_name' => 'Server Name',
            'server_icon' => 'Server Icon',
            'server_color' => 'Server Farbe',
            'server_image' => 'Server Bild',
            'server_ip' => 'Server IP',
            'server_port' => 'Server Port',
            'server_description' => 'Server Beschreibugn',

            'enable_steam-group_statistics' => 'Enable Steam Group Statistics',
            'enable_discord-widget' => 'Enable Discord Widget',
            'enable_widget-bot' => 'Enable Widget Bot',
            'enable_discord-sync' => 'Enable Discord Sync',

            'create_new_link' => 'Neuen Link erstellen',
            'link_name' => 'Link Name',
            'link_url' => 'Link URL',
            'link_category' => 'Link Kategorie',

            'theme_title' => 'Theme',
            'theme_small' => 'Manage Themes',

            'create_new_category' => 'Neue Kategorie erstellen',
            'category_name' => 'Name der Kategorie',
            'category_desc' => 'Beschreibung der Kategorie',

            'create_new_board' => 'Create new board',
            'board_name' => 'Board Name',
            'board_icon' => 'Board Icon',
            'board_color' => 'Board Color',
            'board_desc' => 'Board Description',
            'board_category' => 'Board Category',
            'board_permission_roles' => 'Roles with access',

            'create_new_poll' => 'Create new poll',
            'poll_title' => 'Poll Title',
            'poll_description' => 'Poll Description',
            'poll_icon' => 'Poll Icon',
            'poll_answers' => 'Poll Answers',
            'poll_answer' => 'Poll Answer',

            'store_settings_title' => 'Store Settings',
            'store_settings_small' => 'Manage Store Settings',

            'enable_monthly_goal' => 'Enable Monthly Goal',
            'monthly_goal' => 'Monthly Goal',
            'display_top_recent-donations' => 'Display Top & Recent Donations',

            'paypal_client_id' => 'PayPal Client ID',
            'paypal_client_secret' => 'PayPal Client Secret',
            'paypal_webhook_id' => 'PayPal Webhook ID',

            'enable_chargeback-bans' => 'Aktiviere Chargeback-Ban',
            'chargeback-ban' => '<code>Enable chargeback bans</code> - When a user tries to initiate a charge back via paypal, we will automatically ban the user from accessing your website.',

            'package_title' => 'Pakete',
            'package_small' => 'Paket Erstellen',
            'create_new_package' => 'Erstelle ein neues Paket.',
            'package_name' => 'Paket Name',
            'package_price' => 'Paket Preis',
            'package_image' => 'Paket Bild',
            'package_servers' => 'Server',
            'package_category' => 'Kategorie',
            'package_description' => 'Paket Beschreibung',

            'create_new_coupon' => 'Create new coupon',
            'coupon_code' => 'Coupon Code',
            'coupon_percentage' => 'Percentage',
            'coupon_packages' => 'Packages',
            'coupon_packages_info' => 'These are the packages this code can be used on',
            'coupon_package_use-amt' => 'Use Amount',
            'coupon_package_use-amt_info' => 'The amount of time the coupon can be used. 0 for unlimited',
            'coupon_package_start-date' => 'Start Date',
            'coupon_package_start-date_info' => 'The coupon will become active once this date passes',
            'coupon_package_end-date' => 'Expiration Date',
            'coupon_package_end-date_info' => 'After this date, the coupon will not be able to get used again',

            'create_new_sale' => 'Neues Angebot erstellen',
            'sale_title' => 'Angebot Titel',
            'sale_percentage' => 'Angebot Prozent',
            'sale_packages' => 'Pakete im Angebot',
            'sale_start-date' => 'Start-Datum',
            'sale_end-date' => 'End-Datum',

            'update_terms' => 'Update Terms Of Service',
        ],

        'save_configurations' => 'Einstellungen Speichern',

    ]
];
