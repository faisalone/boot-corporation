<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // ── General ──────────────────────────────────
            ['key' => 'company_name',    'group' => 'general', 'label' => 'Company Name',    'type' => 'text',     'value_en' => 'BOOT CORPORATION',           'value_bn' => 'বুট কর্পোরেশন',                'value_cn' => 'BOOT公司',              'order' => 1],
            ['key' => 'company_tagline', 'group' => 'general', 'label' => 'Tagline',         'type' => 'text',     'value_en' => 'Chartered Accountants',      'value_bn' => 'চার্টার্ড অ্যাকাউন্ট্যান্ট', 'value_cn' => '特许会计师',             'order' => 2],
            ['key' => 'logo_image',      'group' => 'general', 'label' => 'Logo Image',      'type' => 'image',    'value_en' => '',  'value_bn' => '', 'value_cn' => '', 'order' => 3],
            ['key' => 'favicon',         'group' => 'general', 'label' => 'Favicon',         'type' => 'image',    'value_en' => '',  'value_bn' => '', 'value_cn' => '', 'order' => 4],

            // ── Hero Section ─────────────────────────────
            ['key' => 'hero_title',      'group' => 'hero', 'label' => 'Hero Title',         'type' => 'text',     'value_en' => 'Your Trusted Partner',       'value_bn' => 'আপনার বিশ্বস্ত অংশীদার',       'value_cn' => '您值得信赖的合作伙伴',   'order' => 1],
            ['key' => 'hero_subtitle',   'group' => 'hero', 'label' => 'Hero Subtitle',      'type' => 'textarea', 'value_en' => 'Expert Tax, Audit & Consulting Services', 'value_bn' => 'বিশেষজ্ঞ কর, নিরীক্ষা ও পরামর্শ সেবা', 'value_cn' => '专业税务、审计及咨询服务', 'order' => 2],
            ['key' => 'hero_btn_text',   'group' => 'hero', 'label' => 'Button Text',        'type' => 'text',     'value_en' => 'Our Services',               'value_bn' => 'আমাদের সেবা',                   'value_cn' => '我们的服务',             'order' => 3],
            ['key' => 'hero_btn_url',    'group' => 'hero', 'label' => 'Button Link',        'type' => 'url',      'value_en' => '/services',                  'value_bn' => '/services', 'value_cn' => '/services', 'order' => 4],

            // ── Contact Info ─────────────────────────────
            ['key' => 'phone_1',         'group' => 'contact', 'label' => 'Phone Number 1',  'type' => 'text',     'value_en' => '+880 1234 567890', 'value_bn' => '+880 1234 567890', 'value_cn' => '+880 1234 567890', 'order' => 1],
            ['key' => 'phone_2',         'group' => 'contact', 'label' => 'Phone Number 2',  'type' => 'text',     'value_en' => '+880 1234 567891', 'value_bn' => '+880 1234 567891', 'value_cn' => '+880 1234 567891', 'order' => 2],
            ['key' => 'email_1',         'group' => 'contact', 'label' => 'Email Address 1', 'type' => 'text',     'value_en' => 'info@bootcorp.com',     'value_bn' => 'info@bootcorp.com',    'value_cn' => 'info@bootcorp.com',    'order' => 3],
            ['key' => 'email_2',         'group' => 'contact', 'label' => 'Email Address 2', 'type' => 'text',     'value_en' => 'support@bootcorp.com',  'value_bn' => 'support@bootcorp.com', 'value_cn' => 'support@bootcorp.com', 'order' => 4],
            ['key' => 'address',         'group' => 'contact', 'label' => 'Office Address',  'type' => 'textarea', 'value_en' => '123 Business St, Dhaka 1000, Bangladesh', 'value_bn' => '১২৩ বিজনেস স্ট্রিট, ঢাকা ১০০০, বাংলাদেশ', 'value_cn' => '123 Business St, 达卡 1000, 孟加拉国', 'order' => 5],
            ['key' => 'map_embed_url',   'group' => 'contact', 'label' => 'Google Map URL',  'type' => 'url',      'value_en' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9074676394284!2d90.39165431498142!3d23.750881494620283', 'value_bn' => '', 'value_cn' => '', 'order' => 6],

            // ── Social Links ─────────────────────────────
            ['key' => 'social_linkedin', 'group' => 'social', 'label' => 'LinkedIn URL',     'type' => 'url', 'value_en' => 'https://linkedin.com/company/bootcorp', 'value_bn' => '', 'value_cn' => '', 'order' => 1],
            ['key' => 'social_facebook', 'group' => 'social', 'label' => 'Facebook URL',     'type' => 'url', 'value_en' => 'https://facebook.com/bootcorp',          'value_bn' => '', 'value_cn' => '', 'order' => 2],
            ['key' => 'social_twitter',  'group' => 'social', 'label' => 'Twitter / X URL',  'type' => 'url', 'value_en' => 'https://twitter.com/bootcorp',           'value_bn' => '', 'value_cn' => '', 'order' => 3],
            ['key' => 'social_youtube',  'group' => 'social', 'label' => 'YouTube URL',      'type' => 'url', 'value_en' => 'https://youtube.com/bootcorp',           'value_bn' => '', 'value_cn' => '', 'order' => 4],

            // ── Footer ──────────────────────────────────
            ['key' => 'footer_description', 'group' => 'footer', 'label' => 'Footer Text',      'type' => 'textarea', 'value_en' => 'Your trusted partner in tax, audit & consulting.', 'value_bn' => 'কর, নিরীক্ষা ও পরামর্শে আপনার বিশ্বস্ত অংশীদার।', 'value_cn' => '您在税务、审计和咨询方面值得信赖的合作伙伴。', 'order' => 1],
            ['key' => 'footer_copyright',   'group' => 'footer', 'label' => 'Copyright Text',   'type' => 'text',     'value_en' => '© 2025 BOOT CORPORATION. All rights reserved.', 'value_bn' => '© ২০২৫ বুট কর্পোরেশন। সর্বস্বত্ব সংরক্ষিত।', 'value_cn' => '© 2025 BOOT公司。版权所有。', 'order' => 2],

            // ── About Page ──────────────────────────────
            ['key' => 'about_motto',       'group' => 'about', 'label' => 'About Motto',       'type' => 'editor',   'value_en' => '', 'value_bn' => '', 'value_cn' => '', 'order' => 1],
            ['key' => 'about_core_values', 'group' => 'about', 'label' => 'Core Values',       'type' => 'editor',   'value_en' => '', 'value_bn' => '', 'value_cn' => '', 'order' => 2],
            ['key' => 'about_motto_image', 'group' => 'about', 'label' => 'Motto Section Image', 'type' => 'text',  'value_en' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80', 'value_bn' => '', 'value_cn' => '', 'order' => 3],
            ['key' => 'about_motto_items', 'group' => 'about', 'label' => 'Motto Items (JSON)', 'type' => 'textarea',
                'value_en' => '[{"letter":"B","title":"Build Relationship with Clients","description":"We prioritize creating lasting partnerships based on trust and mutual understanding."},{"letter":"O","title":"Own the Problems of Clients","description":"Your challenges become our challenges—we take full accountability."},{"letter":"O","title":"Operate and Resolve Problems","description":"We actively work towards finding effective and sustainable solutions."},{"letter":"T","title":"Transfer Assigned Works within Deadline","description":"We commit to delivering on time, every time, without compromising quality."}]',
                'value_bn' => '[{"letter":"B","title":"ক্লায়েন্টদের সাথে সম্পর্ক গড়া","description":"আমরা বিশ্বাস ও পারস্পরিক বোঝাপড়ার ভিত্তিতে দীর্ঘস্থায়ী অংশীদারিত্ব তৈরিকে অগ্রাধিকার দিই।"},{"letter":"O","title":"ক্লায়েন্টদের সমস্যা নিজের করে নেওয়া","description":"আপনার চ্যালেঞ্জ আমাদের চ্যালেঞ্জ—আমরা পূর্ণ দায়িত্ব নিই।"},{"letter":"O","title":"সমস্যা পরিচালনা ও সমাধান করা","description":"আমরা কার্যকর ও টেকসই সমাধান খুঁজে বের করতে সক্রিয়ভাবে কাজ করি।"},{"letter":"T","title":"নির্ধারিত সময়ের মধ্যে কাজ সম্পন্ন করা","description":"আমরা মানের সাথে আপোষ না করে সময়মতো ডেলিভারি দিতে প্রতিশ্রুতিবদ্ধ।"}]',
                'value_cn' => '[{"letter":"B","title":"与客户建立关系","description":"我们优先建立基于信任和相互理解的持久伙伴关系。"},{"letter":"O","title":"承担客户的问题","description":"您的挑战就是我们的挑战——我们承担全部责任。"},{"letter":"O","title":"运营并解决问题","description":"我们积极寻找有效且可持续的解决方案。"},{"letter":"T","title":"在截止日期内完成工作","description":"我们承诺每次都按时交付，不牺牲质量。"}]',
                'order' => 4],
            ['key' => 'about_core_values_items', 'group' => 'about', 'label' => 'Core Values (JSON)', 'type' => 'textarea',
                'value_en' => '[{"icon":"fa-solid fa-shield-halved","title":"Integrity","description":"We uphold the highest ethical standards in all our business dealings, maintaining honesty and transparency with our clients and stakeholders."},{"icon":"fa-solid fa-hands-holding-circle","title":"Responsibility","description":"We take full ownership of our commitments and are accountable for delivering exceptional results that meet and exceed expectations."},{"icon":"fa-solid fa-trophy","title":"Excellency","description":"We strive for excellence in every service we provide, continuously improving our skills and processes to deliver superior quality."},{"icon":"fa-solid fa-bullseye","title":"Result-Oriented","description":"We focus on achieving tangible outcomes that drive business success, measuring our performance by the value we create for clients."},{"icon":"fa-solid fa-clock","title":"Time-Bound","description":"We respect deadlines and understand the critical importance of timely delivery in helping our clients achieve their business objectives."},{"icon":"fa-solid fa-handshake","title":"Mutual Benefits (Win-Win)","description":"We believe in creating value for all parties involved, fostering partnerships where both clients and our organization grow together."}]',
                'value_bn' => '[{"icon":"fa-solid fa-shield-halved","title":"সততা","description":"আমরা আমাদের সকল ব্যবসায়িক লেনদেনে সর্বোচ্চ নৈতিক মান বজায় রাখি, ক্লায়েন্ট ও স্টেকহোল্ডারদের সাথে সততা ও স্বচ্ছতা বজায় রাখি।"},{"icon":"fa-solid fa-hands-holding-circle","title":"দায়িত্ব","description":"আমরা আমাদের প্রতিশ্রুতির পূর্ণ মালিকানা নিই এবং প্রত্যাশা পূরণ ও অতিক্রম করার ফলাফল প্রদানে দায়বদ্ধ।"},{"icon":"fa-solid fa-trophy","title":"উৎকর্ষতা","description":"আমরা প্রদত্ত প্রতিটি সেবায় উৎকর্ষতার জন্য চেষ্টা করি, উচ্চমানের মান বজায় রাখতে ক্রমাগত আমাদের দক্ষতা ও প্রক্রিয়া উন্নত করি।"},{"icon":"fa-solid fa-bullseye","title":"ফলাফলমুখী","description":"আমরা ব্যবসায়িক সাফল্য অর্জনে দৃশ্যমান ফলাফলের উপর মনোনিবেশ করি, ক্লায়েন্টদের জন্য আমরা যে মূল্য তৈরি করি তার দ্বারা আমাদের কর্মক্ষমতা পরিমাপ করি।"},{"icon":"fa-solid fa-clock","title":"সময়নিষ্ঠ","description":"আমরা সময়সীমাকে সম্মান করি এবং ক্লায়েন্টদের ব্যবসায়িক লক্ষ্য অর্জনে সময়মতো সেবা প্রদানের গুরুত্ব বুঝি।"},{"icon":"fa-solid fa-handshake","title":"পারস্পরিক সুবিধা (Win-Win)","description":"আমরা সকল পক্ষের জন্য মূল্য তৈরি করতে বিশ্বাস করি, যেখানে ক্লায়েন্ট এবং আমাদের সংগঠন একসাথে বৃদ্ধি পায়।"}]',
                'value_cn' => '[{"icon":"fa-solid fa-shield-halved","title":"诚信","description":"我们在所有业务交易中坚持最高的道德标准，对客户和利益相关者保持诚实和透明。"},{"icon":"fa-solid fa-hands-holding-circle","title":"责任","description":"我们完全承担我们的承诺，并对交付达到和超越期望的卓越成果负责。"},{"icon":"fa-solid fa-trophy","title":"卓越","description":"我们在提供的每项服务中追求卓越，不断提升技能和流程以提供优质服务。"},{"icon":"fa-solid fa-bullseye","title":"结果导向","description":"我们专注于实现推动业务成功的切实成果，通过为客户创造的价值来衡量我们的表现。"},{"icon":"fa-solid fa-clock","title":"守时","description":"我们尊重截止日期，理解及时交付对帮助客户实现业务目标的关键重要性。"},{"icon":"fa-solid fa-handshake","title":"互利共赢","description":"我们相信为所有相关方创造价值，促进客户和我们组织共同成长的伙伴关系。"}]',
                'order' => 5],

            // ── Schedule of Rates ────────────────────────
            ['key' => 'schedule_pdf',      'group' => 'schedule', 'label' => 'Schedule of Rates PDF', 'type' => 'file', 'value_en' => '', 'value_bn' => '', 'value_cn' => '', 'order' => 1],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
