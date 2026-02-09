<x-app-layout title="About Us">

    <!-- Page Header -->
    <x-page-header
        title="About Us"
        subtitle="We are dedicated to fostering relationships, building personal connections, and delivering uncompromising excellence."
        image="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80"
    />

    <!-- Section 1: Our Motto -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-1 lg:order-1">
                    <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">Our Foundation</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-8">Our Motto is <span class="text-orange-600">BOOT</span></h2>
                    <div class="space-y-6">
                        <div class="flex gap-4 items-start group">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center shrink-0 shadow-lg group-hover:scale-110 transition-transform">
                                <span class="text-white font-bold text-xl">B</span>
                            </div>
                            <div class="pt-2">
                                <h3 class="text-lg font-bold text-slate-800 mb-1">Build Relationship with Clients</h3>
                                <p class="text-sm text-slate-600">We prioritize creating lasting partnerships based on trust and mutual understanding.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start group">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center shrink-0 shadow-lg group-hover:scale-110 transition-transform">
                                <span class="text-white font-bold text-xl">O</span>
                            </div>
                            <div class="pt-2">
                                <h3 class="text-lg font-bold text-slate-800 mb-1">Own the Problems of Clients</h3>
                                <p class="text-sm text-slate-600">Your challenges become our challenges—we take full accountability.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start group">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center shrink-0 shadow-lg group-hover:scale-110 transition-transform">
                                <span class="text-white font-bold text-xl">O</span>
                            </div>
                            <div class="pt-2">
                                <h3 class="text-lg font-bold text-slate-800 mb-1">Operate and Resolve Problems</h3>
                                <p class="text-sm text-slate-600">We actively work towards finding effective and sustainable solutions.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start group">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center shrink-0 shadow-lg group-hover:scale-110 transition-transform">
                                <span class="text-white font-bold text-xl">T</span>
                            </div>
                            <div class="pt-2">
                                <h3 class="text-lg font-bold text-slate-800 mb-1">Transfer Assigned Works within Deadline</h3>
                                <p class="text-sm text-slate-600">We commit to delivering on time, every time, without compromising quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-2 lg:order-2">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                        alt="Our Motto" class="w-full h-96 object-cover rounded-2xl shadow-2xl border border-slate-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Our Core Values -->
    <section class="py-24 bg-gradient-to-br from-slate-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">What Drives Us</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-4">Our Core Values</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">These principles guide every decision we make and every action we take.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Integrity -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fa-solid fa-shield-halved text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Integrity</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">We uphold the highest ethical standards in all our business dealings, maintaining honesty and transparency with our clients and stakeholders.</p>
                </div>

                <!-- Responsibility -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fa-solid fa-hands-holding-circle text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Responsibility</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">We take full ownership of our commitments and are accountable for delivering exceptional results that meet and exceed expectations.</p>
                </div>

                <!-- Excellency -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fa-solid fa-trophy text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Excellency</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">We strive for excellence in every service we provide, continuously improving our skills and processes to deliver superior quality.</p>
                </div>

                <!-- Result-Oriented -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fa-solid fa-bullseye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Result-Oriented</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">We focus on achieving tangible outcomes that drive business success, measuring our performance by the value we create for clients.</p>
                </div>

                <!-- Time-Bound -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fa-solid fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Time-Bound</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">We respect deadlines and understand the critical importance of timely delivery in helping our clients achieve their business objectives.</p>
                </div>

                <!-- Mutual Benefits (Win-Win) -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fa-solid fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Mutual Benefits (Win-Win)</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">We believe in creating value for all parties involved, fostering partnerships where both clients and our organization grow together.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Partner Profiles -->
    <section id="partners" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24">
                <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">Leadership</span>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-800 mt-3 mb-12">Our Partners</h2>
            </div>

            <!-- Partner 1 -->
            <div class="w-full mb-24 bg-white rounded-3xl border border-slate-200 p-8 lg:p-10 shadow-sm relative overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-start">
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col md:flex-row gap-6 md:items-start">
                             <div class="shrink-0">
                                <div class="w-32 h-32 rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                                    <img src="/images/partners/1.png"
                                    alt="Muhareb Malik Chowdhury" class="w-full h-full object-cover">
                                </div>
                             </div>
                             <div class="grow">
                                <h3 class="text-3xl font-bold text-slate-900 mb-2">Muraheb Malik Chowdhury</h3>
                                <div class="flex flex-wrap items-center gap-3 mb-3">
                                    <span class="text-orange-600 font-bold text-xs tracking-wide uppercase bg-orange-50 px-2 py-1 rounded">Partner</span>
                                    <span class="text-xs text-slate-400">|</span>
                                    <p class="text-sm text-slate-500 font-medium">FCA (ICAB, ICAEW), FCCA</p>
                                </div>
                                <div class="flex flex-wrap gap-3">
                                    <a href="mailto:muharebmalik@gmail.com" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-orange-600 transition-colors bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 hover:border-orange-200">
                                        <i class="fa-solid fa-envelope text-orange-500"></i> muharebmalik@gmail.com
                                    </a>
                                    <a href="https://linkedin.com/in/muhareb-malik-chowdhury" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-[#0077b5] transition-colors bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 hover:border-[#0077b5]">
                                        <i class="fa-brands fa-linkedin text-[#0077b5]"></i> LinkedIn
                                    </a>
                                </div>
                             </div>
                        </div>
                        <div class="mt-2">
                            <div class="rounded-t-xl border-b border-slate-200 flex flex-wrap gap-4 mb-4">
                                <button onclick="openProfileTab(event, 'h-expertise')" class="tab-btn pb-3 text-orange-600 font-bold text-sm border-b-2 border-orange-500 transition-all hover:text-orange-700">Professional Expertise</button>
                                <button onclick="openProfileTab(event, 'h-certifications')" class="tab-btn pb-3 text-slate-500 font-medium text-sm border-b-2 border-transparent hover:text-orange-500 transition-all">Certifications & Education</button>
                                <button onclick="openProfileTab(event, 'h-committees')" class="tab-btn pb-3 text-slate-500 font-medium text-sm border-b-2 border-transparent hover:text-orange-500 transition-all">Professional Service</button>
                                <button onclick="openProfileTab(event, 'h-philosophy')" class="tab-btn pb-3 text-slate-500 font-medium text-sm border-b-2 border-transparent hover:text-orange-500 transition-all">Personal Insights</button>
                            </div>
                            <div>
                                <div id="h-expertise" class="tab-content block animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-calculator text-orange-500 mt-1"></i><span><strong>Taxation:</strong> Specializes in strategic tax planning and advisory services for a diverse portfolio of clients</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-file-invoice text-orange-500 mt-1"></i><span><strong>Audit & Assurance:</strong> Conducts audits for projects funded by local and international NGOs to promote transparency and responsible fund usage</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-lightbulb text-orange-500 mt-1"></i><span><strong>Core Approach:</strong> Combines expertise and innovation with a client-focused service model to ensure financial well-being across various sectors</span></li>
                                    </ul>
                                </div>
                                <div id="h-certifications" class="tab-content hidden animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>Fellow Member of the Institute of Chartered Accountants in Bangladesh (ICAB)</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>Fellow Member of the Institute of Chartered Accountants in England & Wales (ICAEW)</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>Fellow Member of the Association of Chartered Certified Accountants (ACCA)</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>BSc (Hons) in Applied Accounting from Oxford Brookes University, England</span></li>
                                    </ul>
                                </div>
                                <div id="h-committees" class="tab-content hidden animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-users text-orange-500 mt-1"></i><span>Member: ACCA Bangladesh Member Advisory Committee (MAC)</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-user-tie text-orange-500 mt-1"></i><span>Chairman: Future Member Development Sub-Committee of the ACCA Bangladesh MAC</span></li>
                                    </ul>
                                </div>
                                <div id="h-philosophy" class="tab-content hidden animate-fade-in">
                                    <div class="space-y-4 text-sm text-slate-700">
                                        <p class="flex items-start gap-3"><i class="fa-solid fa-quote-left text-orange-500 mt-1 shrink-0"></i><span class="italic">"The team's success can be attributed to their shared sense of accountability and dedication."</span></p>
                                        <p class="leading-relaxed">Muraheb's commitment to self-improvement extends beyond professional expertise. He actively seeks opportunities to learn new things. He has a profound passion for networking and connecting with people across the industry.</p>
                                        <p class="leading-relaxed">On the weekends, you might find him indulging in sports, particularly Football and Cricket.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-indigo-50/50 rounded-2xl p-6 border border-indigo-100/50 sticky top-24">
                            <div class="flex items-center gap-3 mb-6 pb-4 border-b border-indigo-100">
                                <span class="w-10 h-10 rounded-lg bg-indigo-500 text-white flex items-center justify-center shadow-sm"><i class="fa-solid fa-star text-sm"></i></span>
                                <h4 class="font-bold text-slate-800 text-base uppercase tracking-wide">Professional Experience</h4>
                            </div>
                            <ul class="relative space-y-5">
                                <div class="absolute left-1.75top-2 bottom-2 w-0.5 bg-indigo-100"></div>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Partner of Masih Muhith Haque & Co. (RSM in Bangladesh) and Director of RSM Bangladesh Consulting Limited</p></li>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">International Contact Partner for RSM in Bangladesh</p></li>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Qualified as a Chartered Accountant with ICAEW in 2009 at the age of 24</p></li>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Brings a dynamic blend of expertise, innovation, and client-focused service to ensure financial well-being across various sectors</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
