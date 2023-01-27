<?php

return [
    /**
     * Alice Anume Configuration file.
     */


    /**
     * The email address to send mail messages from the website visitors
     */
    'mail_to' => env('MAIL_TO', 'okellostephenomoding@gmail.com'),

      /*
    |--------------------------------------------------------------------------
    | Standard Post Types
    |--------------------------------------------------------------------------
    */
    'standard_post_types' => [
        'news',
        'facility',
        'course',
        'team',
        'faq',
        'testimonial',
        'advertisement',
        'story',
        'notice',
        'story',
        'announcement'
    ],
    /**
     * Delete these
     */
    'unique_standard_post_types' => [
        'why_aamsnm', 'banner', 'privacy_policy'
    ],

    /**
     * Default Page Keys -- Yuur standard | Core Page Keys -- These pages have controllers
     */
    'page_keys' => [
        'contact',
        'about',
        'team',
        'news',
        'facility',
        'privacy_policy',
        'courses',
        'admission',
        'faqs',
        'why_us',
        'stories',
        'testimonial',
        'gallery'
    ],

    /**
     * Default Categories -- Your standard categorization for your posts
     */
    'categories' => [
        'School Facility',
        'IT Department',
        'Games & Sports',
        'Gallery',
        'Staff',
        'New Developments',
        'frequently asked question',
        'Students Testimonial',
        'Community Testimonial',
    ],

    /**
     * Default Options -- Store you key - value content in the options table
     */
    'options' => [
        'aamsnm_logo' => 'aamsnm/img/logo.jpg',
        'aamsnm_facebook' => null,
        'aamsnm_twitter' => null,
        'aamsnm_instagram' => null,
        'aamsnm_linkedin' => null,
        'aamsnm_email' => 'anume.nursing@ymail.com',
        'aamsnm_phone' => '+256 78251 5211',
        'aamsnm_whatsapp' => null,
        'aamsnm_map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127672.19227345142!2d32.85412942158062!3d0.32021876345015765!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1779268da3babd27%3A0x9f7a3f1ada1183d!2sAlice%20Anume%20Nursing%20School!5e0!3m2!1sen!2sug!4v1647688302320!5m2!1sen!2sug',
        'aamsnm_show_testimonials_on_homepage' => '0',
        'aamsnm_show_team_on_homepage' => '0',
        'aamsnm_show_contactinfo_on_header' => '1',
        'aamsnm_show_sociallinks_on_header' => '0'
    ],

    'option_rules' => [
        'aamsnm_facebook' => 'nullable|url',
        'aamsnm_twitter' => 'nullable|url',
        'aamsnm_instagram' => 'nullable|url',
        'aamsnm_linkedin' => 'nullable|url',
        'aamsnm_map' => 'nullable|url',
        'aamsnm_email' => 'nullable|email',
        'aamsnm_phone' => 'nullable'
    ]

];