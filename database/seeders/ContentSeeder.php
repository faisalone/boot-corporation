<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\Publication;
use App\Models\Service;
use App\Models\Slide;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedSlides();
        $this->seedPartners();
        $this->seedServices();
        $this->seedPhotos();
        $this->seedPublications();
        $this->seedMenus();
    }

    private function seedSlides(): void
    {
        $slides = [
            ['title_en' => 'Padma Bridge',       'title_bn' => 'পদ্মা সেতু',          'title_cn' => '帕德马大桥',     'image' => 'images/padma-bridge-aecom-header.jpg', 'order' => 1],
            ['title_en' => 'Ruppur Power Plant',  'title_bn' => 'রূপপুর পারমাণবিক বিদ্যুৎ কেন্দ্র', 'title_cn' => '鲁普尔核电站', 'image' => 'images/ruppur-power-plant.jpg', 'order' => 2],
            ['title_en' => 'Metro Rail',          'title_bn' => 'মেট্রো রেল',          'title_cn' => '地铁',          'image' => 'images/metro_rail.png',                 'order' => 3],
            ['title_en' => "Cox's Bazar",         'title_bn' => 'কক্সবাজার',           'title_cn' => '科克斯巴扎尔',   'image' => 'images/cox-bazar.jpg',                  'order' => 4],
            ['title_en' => 'Sundarban',           'title_bn' => 'সুন্দরবন',            'title_cn' => '孙德尔本斯',     'image' => 'images/sundarban.jpg',                  'order' => 5],
        ];

        foreach ($slides as $slide) {
            Slide::updateOrCreate(['title_en' => $slide['title_en']], array_merge($slide, ['is_active' => true]));
        }
    }

    private function seedPartners(): void
    {
        Partner::updateOrCreate(['email' => 'muharebmalik@gmail.com'], [
            'name_en'        => 'Muraheb Malik Chowdhury',
            'name_bn'        => 'মুরাহেব মালিক চৌধুরী',
            'name_cn'        => 'Muraheb Malik Chowdhury',
            'designation_en' => 'Partner',
            'designation_bn' => 'অংশীদার',
            'designation_cn' => '合伙人',
            'credentials'    => 'FCA (ICAB, ICAEW), FCCA',
            'email'          => 'muharebmalik@gmail.com',
            'linkedin'       => 'https://linkedin.com/in/muhareb-malik-chowdhury',
            'photo'          => 'images/partners/1.png',
            'bio_en'         => '<h4>Professional Expertise</h4>
<ul>
<li><strong>Taxation:</strong> Specializes in strategic tax planning and advisory services for a diverse portfolio of clients</li>
<li><strong>Audit &amp; Assurance:</strong> Conducts audits for projects funded by local and international NGOs to promote transparency and responsible fund usage</li>
<li><strong>Core Approach:</strong> Combines expertise and innovation with a client-focused service model to ensure financial well-being across various sectors</li>
</ul>
<h4>Certifications &amp; Education</h4>
<ul>
<li>Fellow Member of the Institute of Chartered Accountants in Bangladesh (ICAB)</li>
<li>Fellow Member of the Institute of Chartered Accountants in England &amp; Wales (ICAEW)</li>
<li>Fellow Member of the Association of Chartered Certified Accountants (ACCA)</li>
<li>BSc (Hons) in Applied Accounting from Oxford Brookes University, England</li>
</ul>
<h4>Professional Service</h4>
<ul>
<li>Partner of Masih Muhith Haque &amp; Co. (RSM in Bangladesh) and Director of RSM Bangladesh Consulting Limited</li>
<li>International Contact Partner for RSM in Bangladesh</li>
<li>Member: ACCA Bangladesh Member Advisory Committee (MAC)</li>
<li>Chairman: Future Member Development Sub-Committee of the ACCA Bangladesh MAC</li>
<li>Qualified as a Chartered Accountant with ICAEW in 2009 at the age of 24</li>
</ul>',
            'bio_bn' => '<h4>পেশাদার দক্ষতা</h4>
<ul>
<li><strong>কর:</strong> বিভিন্ন ক্লায়েন্টদের জন্য কৌশলগত কর পরিকল্পনা ও পরামর্শ সেবায় বিশেষজ্ঞ</li>
<li><strong>অডিট ও নিশ্চয়তা:</strong> স্বচ্ছতা ও দায়িত্বশীল তহবিল ব্যবহার নিশ্চিত করতে স্থানীয় ও আন্তর্জাতিক এনজিও-দের অর্থায়িত প্রকল্পের অডিট পরিচালনা করেন</li>
<li><strong>মূল পদ্ধতি:</strong> বিভিন্ন খাতে আর্থিক সুস্থতা নিশ্চিত করতে দক্ষতা ও উদ্ভাবনকে ক্লায়েন্ট-কেন্দ্রিক সেবা মডেলের সাথে সমন্বিত করেন</li>
</ul>
<h4>সনদ ও শিক্ষা</h4>
<ul>
<li>বাংলাদেশ চার্টার্ড অ্যাকাউন্ট্যান্টস ইনস্টিটিউট (ICAB) এর ফেলো সদস্য</li>
<li>ইংল্যান্ড ও ওয়েলসের চার্টার্ড অ্যাকাউন্ট্যান্টস ইনস্টিটিউট (ICAEW) এর ফেলো সদস্য</li>
<li>অ্যাসোসিয়েশন অব চার্টার্ড সার্টিফাইড অ্যাকাউন্ট্যান্টস (ACCA) এর ফেলো সদস্য</li>
<li>অক্সফোর্ড ব্রুকস ইউনিভার্সিটি, ইংল্যান্ড থেকে ফলিত হিসাববিজ্ঞানে বিএসসি (অনার্স)</li>
</ul>
<h4>পেশাদার সেবা</h4>
<ul>
<li>মাসিহ মুহিত হক অ্যান্ড কোং (বাংলাদেশে RSM) এর অংশীদার এবং RSM বাংলাদেশ কনসাল্টিং লিমিটেডের পরিচালক</li>
<li>বাংলাদেশে RSM-এর আন্তর্জাতিক যোগাযোগ অংশীদার</li>
<li>সদস্য: ACCA বাংলাদেশ মেম্বার অ্যাডভাইজরি কমিটি (MAC)</li>
<li>চেয়ারম্যান: ACCA বাংলাদেশ MAC-এর ফিউচার মেম্বার ডেভেলপমেন্ট সাব-কমিটি</li>
<li>২৪ বছর বয়সে ২০০৯ সালে ICAEW-তে চার্টার্ড অ্যাকাউন্ট্যান্ট হিসেবে যোগ্যতা অর্জন</li>
</ul>',
            'bio_cn' => '<h4>专业能力</h4>
<ul>
<li><strong>税务：</strong>专注于为多元化客户组合提供战略税务规划和咨询服务</li>
<li><strong>审计与鉴证：</strong>为本地和国际非政府组织资助的项目进行审计，促进透明度和负责任的资金使用</li>
<li><strong>核心方法：</strong>将专业知识和创新与以客户为中心的服务模式相结合，确保各行业的财务健康</li>
</ul>
<h4>资格认证与教育</h4>
<ul>
<li>孟加拉国特许会计师协会（ICAB）院士</li>
<li>英格兰及威尔士特许会计师协会（ICAEW）院士</li>
<li>特许公认会计师公会（ACCA）院士</li>
<li>英国牛津布鲁克斯大学应用会计学理学学士（荣誉）</li>
</ul>
<h4>专业服务</h4>
<ul>
<li>Masih Muhith Haque & Co.（孟加拉国RSM）合伙人及RSM孟加拉国咨询有限公司董事</li>
<li>孟加拉国RSM国际联络合伙人</li>
<li>成员：ACCA孟加拉国会员顾问委员会（MAC）</li>
<li>主席：ACCA孟加拉国MAC未来会员发展小组委员会</li>
<li>2009年24岁时取得ICAEW特许会计师资格</li>
</ul>',
            'is_active' => true,
            'order'   => 1,
        ]);
    }

    private function seedServices(): void
    {
        $services = [
            [
                'slug'       => 'registration',
                'title_en'   => 'Registration & Permits',
                'title_bn'   => 'নিবন্ধন ও অনুমতি',
                'title_cn'   => '注册与许可',
                'icon'       => 'fa-solid fa-file-signature',
                'image'      => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2072&q=80',
                'summary_en' => 'Simplified solutions for all your business registration and licensing needs.',
                'summary_bn' => 'আপনার ব্যবসার নিবন্ধন ও লাইসেন্সিং প্রয়োজনের জন্য সরলীকৃত সমাধান।',
                'summary_cn' => '为您的所有商业注册和许可需求提供简化的解决方案。',
                'content_en' => '<p>Initiating the registrations and permits is a vital journey for businesses. At BOOT CORPORATION, we excel in simplifying this complicated process, providing a suite of comprehensive registration and permits services meticulously crafted to meet your unique requirements.</p>
<h4>Registering a Limited Liability Company</h4>
<p>Limited Liability Company must register with the Registrar of Joint Stock Companies and Firms (RJSC) in Bangladesh. In the process of incorporating a company, our dedicated services involve engaging in comprehensive discussions. We actively contribute to the preparation of the Memorandum and Articles of Association, including other necessary documents and prescribed forms.</p>
<h4>Permission for a Branch or Liaison Office</h4>
<p>We assist foreign companies in establishing Branch or Liaison offices in Bangladesh through BIDA and other relevant authorities.</p>
<h4>Trade License</h4>
<p>Assistance in obtaining and renewing trade licenses from local authorities, ensuring your business operates legally within its jurisdiction.</p>
<h4>Tax &amp; VAT Registration</h4>
<p>Complete support for Business Identification Number (BIN) and Taxpayer Identification Number (TIN) registration processes.</p>',
                'content_bn' => '', 'content_cn' => '',
                'order' => 1,
            ],
            [
                'slug'       => 'bookkeeping',
                'title_en'   => 'Bookkeeping & Payroll',
                'title_bn'   => 'হিসাবরক্ষণ ও বেতন',
                'title_cn'   => '簿记与薪资',
                'icon'       => 'fa-solid fa-calculator',
                'image'      => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2072&q=80',
                'summary_en' => 'Accurate financial records and streamlined payroll processing for your peace of mind.',
                'summary_bn' => 'সঠিক আর্থিক রেকর্ড এবং সুশৃঙ্খল বেতন প্রক্রিয়াকরণ।',
                'summary_cn' => '准确的财务记录和简化的薪资处理。',
                'content_en' => '<p>We offer professional bookkeeping and payroll solutions to ensure financial transparency and compliance. Our team assists you in meticulously maintaining books of accounts, preparing financial statements, and delivering comprehensive management reporting to help you make informed decisions.</p>
<h4>Bookkeeping</h4>
<p>Recording daily financial transactions, maintaining ledgers, and reconciling bank statements to ensure your financial data is accurate and up-to-date.</p>
<h4>Payroll Processing</h4>
<p>Complete payroll management including salary calculation, tax deductions, payslip generation, and compliance with local labor laws.</p>
<h4>Financial Reporting</h4>
<p>Preparation of monthly, quarterly, and annual financial statements in accordance with International Financial Reporting Standards (IFRS) and Bangladesh Financial Reporting Standards (BFRS).</p>
<h4>CFO Services</h4>
<p>Strategic financial guidance, budgeting, and forecasting services to help you navigate complex financial challenges and drive growth.</p>',
                'content_bn' => '', 'content_cn' => '',
                'order' => 2,
            ],
            [
                'slug'       => 'audit',
                'title_en'   => 'Audit & Assurance',
                'title_bn'   => 'নিরীক্ষা ও নিশ্চয়তা',
                'title_cn'   => '审计与鉴证',
                'icon'       => 'fa-solid fa-magnifying-glass-chart',
                'image'      => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
                'summary_en' => 'Independent and objective assurance services to enhance the reliability of your information.',
                'summary_bn' => 'আপনার তথ্যের নির্ভরযোগ্যতা বাড়াতে স্বাধীন ও নিরপেক্ষ নিশ্চয়তা সেবা।',
                'summary_cn' => '独立客观的鉴证服务，提高您信息的可靠性。',
                'content_en' => '<p>We provide comprehensive audit and assurance services that go beyond compliance. Our approach is designed to provide you with insights into your business, helping you manage risk and improve performance.</p>
<h4>Statutory Audit</h4>
<p>Independent examination of financial information to ensure accuracy and compliance with applicable laws and regulations.</p>
<h4>Internal Audit</h4>
<p>Evaluation of internal controls, risk management, and governance processes to improve operational efficiency.</p>
<h4>Special Purpose Audit</h4>
<p>Tailored audits for specific requirements, such as donor-funded projects, due diligence, or fraud investigation.</p>',
                'content_bn' => '', 'content_cn' => '',
                'order' => 3,
            ],
            [
                'slug'       => 'tax',
                'title_en'   => 'Income Tax, VAT & Transfer Pricing',
                'title_bn'   => 'আয়কর, ভ্যাট ও ট্রান্সফার প্রাইসিং',
                'title_cn'   => '所得税、增值税和转让定价',
                'icon'       => 'fa-solid fa-receipt',
                'image'      => 'https://images.unsplash.com/photo-1628109559962-16f315286595?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
                'summary_en' => 'Navigating the complexities of tax regulations to minimize liability and ensure compliance.',
                'summary_bn' => 'কর বিধিমালার জটিলতা নেভিগেট করে দায় কমানো ও সম্মতি নিশ্চিত করা।',
                'summary_cn' => '驾驭税务法规的复杂性，最大限度地减少责任并确保合规。',
                'content_en' => '<p>Our tax experts provide strategic advice and practical solutions to help you manage your tax obligations efficiently. We cover all aspects of Income Tax, Value Added Tax (VAT), and Transfer Pricing (TP).</p>
<h4>Corporate &amp; Personal Tax</h4>
<p>Tax planning, preparation and filing of returns for companies and individuals, ensuring compliance and optimizing tax positions.</p>
<h4>Value Added Tax (VAT)</h4>
<p>Assistance with VAT registration, monthly return filing, record keeping, and advisory on VAT implications for business transactions.</p>
<h4>Transfer Pricing (TP)</h4>
<p>Advisory and compliance services related to Transfer Pricing regulations, including documentation and TP study reports.</p>',
                'content_bn' => '', 'content_cn' => '',
                'order' => 4,
            ],
            [
                'slug'       => 'consultancy',
                'title_en'   => 'Secretarial & Consultancy',
                'title_bn'   => 'সচিবালয় ও পরামর্শ',
                'title_cn'   => '秘书与咨询',
                'icon'       => 'fa-solid fa-handshake',
                'image'      => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80',
                'summary_en' => 'Expert corporate secretarial services to ensure your business remains compliant and agile.',
                'summary_bn' => 'আপনার ব্যবসাকে সম্মত ও চতুর রাখতে বিশেষজ্ঞ কর্পোরেট সচিবালয় সেবা।',
                'summary_cn' => '专业的公司秘书服务，确保您的企业合规灵活。',
                'content_en' => '<p>We offer a wide range of corporate secretarial and management consultancy services to support your business lifecycle, from formation to winding up.</p>
<h4>RJSC Returns Filing</h4>
<p>Preparation and filing of annual returns, forms for change in directors, share transfers, and other statutory compliances with the RJSC.</p>
<h4>Share Transfer &amp; Allotment</h4>
<p>Advising on and executing share transfers, allotments, and issuance of share certificates in compliance with the Companies Act.</p>
<h4>Winding Up Services</h4>
<p>Assistance with the voluntary winding up of companies, ensuring all legal and procedural requirements are met.</p>',
                'content_bn' => '', 'content_cn' => '',
                'order' => 5,
            ],
        ];

        foreach ($services as $svc) {
            Service::updateOrCreate(['slug' => $svc['slug']], array_merge($svc, ['is_active' => true]));
        }
    }

    private function seedPhotos(): void
    {
        $photos = [
            ['title_en' => 'Annual General Meeting 2025', 'title_bn' => 'বার্ষিক সাধারণ সভা ২০২৫', 'title_cn' => '2025年年度股东大会', 'image' => 'https://images.unsplash.com/photo-1515168816992-d2043a145575?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80', 'order' => 1],
            ['title_en' => 'Strategic Planning Session',  'title_bn' => 'কৌশলগত পরিকল্পনা সভা',       'title_cn' => '战略规划会议',       'image' => 'https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80', 'order' => 2],
            ['title_en' => 'Tax Summit 2025',             'title_bn' => 'কর সম্মেলন ২০২৫',            'title_cn' => '2025年税务峰会',    'image' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80', 'order' => 3],
            ['title_en' => 'Team Workshop',               'title_bn' => 'টিম ওয়ার্কশপ',              'title_cn' => '团队研讨会',         'image' => 'https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80', 'order' => 4],
            ['title_en' => 'CSR Activity',                'title_bn' => 'সিএসআর কার্যক্রম',           'title_cn' => '企业社会责任活动',    'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1184&q=80', 'order' => 5],
            ['title_en' => 'Our New Office',              'title_bn' => 'আমাদের নতুন অফিস',           'title_cn' => '我们的新办公室',      'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80', 'order' => 6],
        ];

        foreach ($photos as $photo) {
            Photo::updateOrCreate(['title_en' => $photo['title_en']], array_merge($photo, ['is_active' => true]));
        }
    }

    private function seedPublications(): void
    {
        $pubs = [
            [
                'title_en'     => 'Finance Act 2025: Key Highlights',
                'title_bn'     => 'অর্থ আইন ২০২৫: মূল বিষয়সমূহ',
                'title_cn'     => '2025年财政法案：重点概述',
                'summary_en'   => 'A comprehensive overview of the changes in the Finance Act 2025 and its implications for businesses and individuals in Bangladesh.',
                'summary_bn'   => 'অর্থ আইন ২০২৫-এর পরিবর্তন এবং বাংলাদেশে ব্যবসা ও ব্যক্তিদের উপর এর প্রভাবের একটি বিস্তৃত পর্যালোচনা।',
                'summary_cn'   => '2025年财政法案变化及其对孟加拉国企业和个人影响的全面概述。',
                'category'     => 'Tax Update',
                'published_at' => '2025-07-10',
                'order'        => 1,
            ],
            [
                'title_en'     => 'Navigating New Financial Reporting Standards',
                'title_bn'     => 'নতুন আর্থিক প্রতিবেদন মান নেভিগেট করা',
                'title_cn'     => '解读新财务报告标准',
                'summary_en'   => 'Understanding the latest amendments to International Financial Reporting Standards (IFRS) and how they impact your financial statements.',
                'summary_bn'   => 'আন্তর্জাতিক আর্থিক প্রতিবেদন মান (IFRS) এর সর্বশেষ সংশোধনী বোঝা।',
                'summary_cn'   => '了解国际财务报告准则(IFRS)的最新修订及其对财务报表的影响。',
                'category'     => 'Audit Insight',
                'published_at' => '2025-05-22',
                'order'        => 2,
            ],
            [
                'title_en'     => 'BOOT CORPORATION Quarterly: Q1 2025',
                'title_bn'     => 'বুট কর্পোরেশন ত্রৈমাসিক: প্রথম প্রান্তিক ২০২৫',
                'title_cn'     => 'BOOT公司季刊：2025年第一季度',
                'summary_en'   => 'Our quarterly newsletter featuring updates on the firm, compliance deadlines, and expert commentary on the economic landscape.',
                'summary_bn'   => 'আমাদের ত্রৈমাসিক নিউজলেটার যেখানে ফার্মের আপডেট, সম্মতি সময়সীমা এবং অর্থনৈতিক পরিস্থিতি সম্পর্কে বিশেষজ্ঞ মন্তব্য রয়েছে।',
                'summary_cn'   => '我们的季度通讯，包含公司更新、合规截止日期和经济形势的专家评论。',
                'category'     => 'Newsletter',
                'published_at' => '2025-04-05',
                'order'        => 3,
            ],
        ];

        foreach ($pubs as $pub) {
            Publication::updateOrCreate(['title_en' => $pub['title_en']], array_merge($pub, ['is_active' => true]));
        }
    }

    private function seedMenus(): void
    {
        $home = Menu::updateOrCreate(['title_en' => 'Home'], [
            'title_bn' => 'হোম', 'title_cn' => '首页',
            'route_name' => 'index', 'target' => '_self', 'icon' => 'fa-solid fa-house', 'is_active' => true, 'order' => 1,
        ]);

        $about = Menu::updateOrCreate(['title_en' => 'About'], [
            'title_bn' => 'আমাদের সম্পর্কে', 'title_cn' => '关于我们',
            'route_name' => 'about', 'target' => '_self', 'icon' => 'fa-solid fa-building', 'is_active' => true, 'order' => 2,
        ]);

        $services = Menu::updateOrCreate(['title_en' => 'Services'], [
            'title_bn' => 'সেবাসমূহ', 'title_cn' => '服务',
            'route_name' => 'service.index', 'target' => '_self', 'icon' => 'fa-solid fa-briefcase', 'is_active' => true, 'order' => 3,
        ]);

        // Service sub-items
        $serviceItems = [
            ['title_en' => 'Registration & Permits', 'title_bn' => 'নিবন্ধন ও অনুমতি',       'title_cn' => '注册与许可',           'url' => '/services/registration', 'order' => 1],
            ['title_en' => 'Bookkeeping & Payroll',   'title_bn' => 'হিসাবরক্ষণ ও বেতন',       'title_cn' => '簿记与薪资',           'url' => '/services/bookkeeping',   'order' => 2],
            ['title_en' => 'Audit & Assurance',       'title_bn' => 'নিরীক্ষা ও নিশ্চয়তা',    'title_cn' => '审计与鉴证',           'url' => '/services/audit',         'order' => 3],
            ['title_en' => 'Income Tax, VAT & TP',    'title_bn' => 'আয়কর, ভ্যাট ও টিপি',    'title_cn' => '所得税、增值税和转让定价', 'url' => '/services/tax',          'order' => 4],
            ['title_en' => 'Secretarial & Consultancy','title_bn' => 'সচিবালয় ও পরামর্শ',     'title_cn' => '秘书与咨询',           'url' => '/services/consultancy',   'order' => 5],
        ];
        foreach ($serviceItems as $item) {
            Menu::updateOrCreate(['title_en' => $item['title_en']], array_merge($item, [
                'parent_id' => $services->id, 'target' => '_self', 'is_active' => true,
            ]));
        }

        $resources = Menu::updateOrCreate(['title_en' => 'Resources'], [
            'title_bn' => 'রিসোর্স', 'title_cn' => '资源',
            'url' => '#', 'target' => '_self', 'icon' => 'fa-solid fa-folder-open', 'is_active' => true, 'order' => 4,
        ]);

        // Useful Links sub-group
        $usefulLinks = Menu::updateOrCreate(['title_en' => 'Useful Links'], [
            'title_bn' => 'দরকারী লিংক', 'title_cn' => '有用链接',
            'parent_id' => $resources->id, 'url' => '#', 'target' => '_self', 'icon' => 'fa-solid fa-link', 'is_active' => true, 'order' => 1,
        ]);

        $links = [
            ['title_en' => 'ICAB',                    'url' => 'https://www.icab.org.bd/',                   'icon' => 'fa-solid fa-landmark',           'order' => 1],
            ['title_en' => 'National Board of Revenue (NBR)', 'url' => 'https://nbr.gov.bd/',                'icon' => 'fa-solid fa-building-columns',   'order' => 2],
            ['title_en' => 'BIDA',                    'url' => 'http://bida.gov.bd/',                        'icon' => 'fa-solid fa-globe',              'order' => 3],
            ['title_en' => 'BEPZA',                   'url' => 'https://www.bepza.gov.bd/',                  'icon' => 'fa-solid fa-industry',           'order' => 4],
            ['title_en' => 'BEZA',                    'url' => 'https://www.beza.gov.bd/',                   'icon' => 'fa-solid fa-city',               'order' => 5],
            ['title_en' => 'Bangladesh Bank',         'url' => 'https://www.bb.org.bd/',                     'icon' => 'fa-solid fa-university',         'order' => 6],
            ['title_en' => 'RJSC',                    'url' => 'http://www.roc.gov.bd/',                     'icon' => 'fa-solid fa-file-contract',      'order' => 7],
            ['title_en' => 'The Financial Express',   'url' => 'https://thefinancialexpress.com.bd/',        'icon' => 'fa-solid fa-newspaper',          'order' => 8],
            ['title_en' => 'The Daily Star',          'url' => 'https://www.thedailystar.net/',              'icon' => 'fa-solid fa-newspaper',          'order' => 9],
        ];
        foreach ($links as $link) {
            Menu::updateOrCreate(['title_en' => $link['title_en']], array_merge($link, [
                'parent_id' => $usefulLinks->id, 'target' => '_blank', 'is_active' => true,
                'title_bn' => $link['title_en'], 'title_cn' => $link['title_en'],
            ]));
        }

        Menu::updateOrCreate(['title_en' => 'Photo Gallery'], [
            'title_bn' => 'ফটো গ্যালারি', 'title_cn' => '照片库',
            'parent_id' => $resources->id, 'route_name' => 'gallery', 'target' => '_self', 'icon' => 'fa-solid fa-images', 'is_active' => true, 'order' => 2,
        ]);
        Menu::updateOrCreate(['title_en' => 'Publications'], [
            'title_bn' => 'প্রকাশনা', 'title_cn' => '出版物',
            'parent_id' => $resources->id, 'route_name' => 'publications', 'target' => '_self', 'icon' => 'fa-solid fa-book', 'is_active' => true, 'order' => 3,
        ]);

        Menu::updateOrCreate(['title_en' => 'Schedule of Rate'], [
            'title_bn' => 'রেটের তালিকা', 'title_cn' => '费率表',
            'route_name' => 'schedule-of-rate', 'target' => '_self', 'icon' => 'fa-solid fa-file-invoice-dollar', 'is_active' => true, 'order' => 5,
        ]);

        Menu::updateOrCreate(['title_en' => 'Contact'], [
            'title_bn' => 'যোগাযোগ', 'title_cn' => '联系我们',
            'route_name' => 'contact', 'target' => '_self', 'icon' => 'fa-solid fa-phone', 'is_active' => true, 'order' => 6,
        ]);
    }
}
