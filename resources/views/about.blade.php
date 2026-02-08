<x-app-layout title="About Us">

    <x-slot:scripts>
        <script>
            function openProfileTab(evt, tabId) {
                const parentCard = evt.target.closest('.rounded-3xl') || evt.target.closest('section');
                parentCard.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
                parentCard.querySelectorAll('.tab-content').forEach(el => el.classList.remove('block'));
                parentCard.querySelectorAll('.tab-btn').forEach(btn => {
                    btn.classList.remove('text-orange-600', 'font-bold', 'border-orange-500');
                    btn.classList.add('text-slate-500', 'font-medium', 'border-transparent');
                });
                const target = document.getElementById(tabId);
                if (target) {
                    target.classList.remove('hidden');
                    target.classList.add('block');
                }
                evt.currentTarget.classList.add('text-orange-600', 'font-bold', 'border-orange-500');
                evt.currentTarget.classList.remove('text-slate-500', 'font-medium', 'border-transparent');
            }
        </script>
    </x-slot:scripts>

    <!-- Page Header -->
    <x-page-header
        title="About Us"
        subtitle="We are dedicated to fostering relationships, building personal connections, and delivering uncompromising excellence."
        image="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80"
    />

    <!-- Section 1: Our Goals -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <div class="grid grid-cols-2 gap-6 order-2 lg:order-1">
                    <div class="bg-slate-50 p-8 rounded-xl border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="w-10 h-10 text-orange-500 mb-4">
                            <i class="fa-solid fa-gem text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Excellence</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Delivering quality with high professional standards and consistency.</p>
                    </div>
                    <div class="bg-slate-50 p-8 rounded-xl border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="w-10 h-10 text-orange-500 mb-4">
                            <i class="fa-solid fa-fingerprint text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Tailored Approach</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Customized solutions specifically addressing your unique business needs.</p>
                    </div>
                    <div class="bg-slate-50 p-8 rounded-xl border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="w-10 h-10 text-orange-500 mb-4">
                            <i class="fa-solid fa-lightbulb text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Innovation</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Constantly adapting to new technologies and methodologies.</p>
                    </div>
                    <div class="bg-slate-50 p-8 rounded-xl border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="w-10 h-10 text-orange-500 mb-4">
                            <i class="fa-solid fa-user-graduate text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Development</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Fostering growth and continuous learning for our people and clients.</p>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">Our Purpose</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-6">Our Goals</h2>
                    <p class="text-sm text-slate-600 leading-relaxed mb-12">
                        Founded with a vision of excellence, we strive to set the standard in financial services. Our
                        "Chair-Level Council" is composed of reputable Chartered Accountants and consultants who
                        represent a perfect blend of youth and experience.
                    </p>
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                        alt="Our Goals Team" class="w-full h-64 object-cover rounded-2xl shadow-xl border border-slate-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: We Are Dedicated To -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">Our Commitment</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-12">We Are Dedicated To</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-4 p-4 bg-white border border-slate-100 rounded-xl shadow-sm">
                            <i class="fa-solid fa-check-circle text-orange-500 text-lg"></i>
                            <span class="font-bold text-sm text-slate-700">Uncompromising excellence in service delivery</span>
                        </li>
                        <li class="flex items-center gap-4 p-4 bg-white border border-slate-100 rounded-xl shadow-sm">
                            <i class="fa-solid fa-check-circle text-orange-500 text-lg"></i>
                            <span class="font-bold text-sm text-slate-700">Tailored solutions for unique needs</span>
                        </li>
                        <li class="flex items-center gap-4 p-4 bg-white border border-slate-100 rounded-xl shadow-sm">
                            <i class="fa-solid fa-check-circle text-orange-500 text-lg"></i>
                            <span class="font-bold text-sm text-slate-700">Innovative adaptability and technology adoption</span>
                        </li>
                        <li class="flex items-center gap-4 p-4 bg-white border border-slate-100 rounded-xl shadow-sm">
                            <i class="fa-solid fa-check-circle text-orange-500 text-lg"></i>
                            <span class="font-bold text-sm text-slate-700">Ethical stewardship and integrity</span>
                        </li>
                        <li class="flex items-center gap-4 p-4 bg-white border border-slate-100 rounded-xl shadow-sm">
                            <i class="fa-solid fa-check-circle text-orange-500 text-lg"></i>
                            <span class="font-bold text-sm text-slate-700">Cost monitoring and time-bound services</span>
                        </li>
                        <li class="flex items-center gap-4 p-4 bg-white border border-slate-100 rounded-xl shadow-sm">
                            <i class="fa-solid fa-check-circle text-orange-500 text-lg"></i>
                            <span class="font-bold text-sm text-slate-700">Contributing community and social economy</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                        alt="Dedication" class="w-full h-64 object-cover rounded-2xl shadow-xl border border-slate-100">
                    <div class="mt-8 relative">
                        <div class="w-12 h-1 bg-orange-500 mb-4"></div>
                        <p class="text-lg font-light leading-relaxed text-slate-600 italic">
                            "Our dedication goes beyond business. We exist to build trust, foster growth, and empower
                            our clients to achieve their sustainable financial goals through ethical and innovative
                            practices."
                        </p>
                    </div>
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
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                    alt="Hanif Ahmed" class="w-full h-full object-cover">
                                </div>
                             </div>
                             <div class="grow">
                                <h3 class="text-3xl font-bold text-slate-900 mb-2">Muhammad Abu Hanif Meah</h3>
                                <div class="flex flex-wrap items-center gap-3 mb-3">
                                    <span class="text-orange-600 font-bold text-xs tracking-wide uppercase bg-orange-50 px-2 py-1 rounded">Running Partner</span>
                                    <span class="text-xs text-slate-400">|</span>
                                    <p class="text-sm text-slate-500 font-medium">FCA, Associate Member (ICAEW), Fellow Member (ACCA)</p>
                                </div>
                                <div class="flex flex-wrap gap-3">
                                    <a href="mailto:hanif@bootcorp.com" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-orange-600 transition-colors bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 hover:border-orange-200">
                                        <i class="fa-solid fa-envelope text-orange-500"></i> hanif@bootcorp.com
                                    </a>
                                    <a href="https://linkedin.com/in/hanif-meah" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-[#0077b5] transition-colors bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 hover:border-[#0077b5]">
                                        <i class="fa-brands fa-linkedin text-[#0077b5]"></i> LinkedIn
                                    </a>
                                </div>
                             </div>
                        </div>
                        <div class="mt-2">
                            <div class="rounded-t-xl border-b border-slate-200 flex flex-wrap gap-4 mb-4">
                                <button onclick="openProfileTab(event, 'h-qualifications')" class="tab-btn pb-3 text-orange-600 font-bold text-sm border-b-2 border-orange-500 transition-all hover:text-orange-700">Qualifications</button>
                                <button onclick="openProfileTab(event, 'h-skills')" class="tab-btn pb-3 text-slate-500 font-medium text-sm border-b-2 border-transparent hover:text-orange-500 transition-all">Key Skills</button>
                                <button onclick="openProfileTab(event, 'h-positions')" class="tab-btn pb-3 text-slate-500 font-medium text-sm border-b-2 border-transparent hover:text-orange-500 transition-all">Key Positions</button>
                                <button onclick="openProfileTab(event, 'h-industry')" class="tab-btn pb-3 text-slate-500 font-medium text-sm border-b-2 border-transparent hover:text-orange-500 transition-all">Industry Experience</button>
                            </div>
                            <div class="min-h-37.5
                                <div id="h-qualifications" class="tab-content block animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>Fellow Chartered Accountant (FCA), ICAB (No-1659)</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>Associate Member, ICAEW</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>Fellow Member, ACCA (UK)</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>MBA, Accounting & Information Systems, University of Dhaka</span></li>
                                    </ul>
                                </div>
                                <div id="h-skills" class="tab-content hidden animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-orange-500 mt-1"></i><span>Corporate Tax & VAT Planning</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-orange-500 mt-1"></i><span>Transfer Pricing Strategy</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-orange-500 mt-1"></i><span>Statutory Audit & Assurance</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-orange-500 mt-1"></i><span>International Taxation</span></li>
                                    </ul>
                                </div>
                                <div id="h-positions" class="tab-content hidden animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-briefcase text-orange-500 mt-1"></i><span>Partner, BOOT CORPORATION</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-briefcase text-orange-500 mt-1"></i><span>Former Director at a Big 4 affiliate firm</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-briefcase text-orange-500 mt-1"></i><span>Strategic Advisor to listed MNCs</span></li>
                                    </ul>
                                </div>
                                <div id="h-industry" class="tab-content hidden animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-building text-slate-400 text-xs"></i><span>Telecommunications</span></li>
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-building text-slate-400 text-xs"></i><span>Banking & Finance</span></li>
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-building text-slate-400 text-xs"></i><span>Pharma & Healthcare</span></li>
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-building text-slate-400 text-xs"></i><span>FMCG & Manufacturing</span></li>
                                    </ul>
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
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Extensive experience working with regulatory bodies like Bangladesh Bank, BIDA, BEZA, and RJSC.</p></li>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Served in esteemed roles at prominent chartered accountancy and advisory firms in Bangladesh.</p></li>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Successfully led audit and assurance as well as business advisory services for a considerable duration.</p></li>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Responsible for handling flagship clients including Nokia Solutions, Novo Nordisk, and Unilever.</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partner 2 -->
            <div class="w-full bg-white rounded-3xl border border-slate-200 p-8 lg:p-10 shadow-sm relative overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-start">
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col md:flex-row gap-6 md:items-start">
                             <div class="shrink-0
                                <div class="w-32 h-32 rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                    alt="Arif Hossain" class="w-full h-full object-cover">
                                </div>
                             </div>
                             <div class="grow">
                                <h3 class="text-3xl font-bold text-slate-900 mb-2">Muhammad Ariful Haque</h3>
                                <div class="flex flex-wrap items-center gap-3 mb-3">
                                    <span class="text-orange-600 font-bold text-xs tracking-wide uppercase bg-orange-50 px-2 py-1 rounded">Partner</span>
                                    <span class="text-xs text-slate-400">|</span>
                                    <p class="text-sm text-slate-500 font-medium">FCA, CISA (ISACA, USA)</p>
                                </div>
                                <div class="flex flex-wrap gap-3">
                                    <a href="mailto:arif@bootcorp.com" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-orange-600 transition-colors bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 hover:border-orange-200">
                                        <i class="fa-solid fa-envelope text-orange-500"></i> arif@bootcorp.com
                                    </a>
                                    <a href="https://linkedin.com/in/ariful-haque" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-[#0077b5] transition-colors bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 hover:border-[#0077b5]">
                                        <i class="fa-brands fa-linkedin text-[#0077b5]"></i> LinkedIn
                                    </a>
                                </div>
                             </div>
                        </div>
                        <div class="mt-2">
                            <div class="rounded-t-xl border-b border-slate-200 flex flex-wrap gap-4 mb-4">
                                <button onclick="openProfileTab(event, 'a-qualifications')" class="tab-btn pb-3 text-orange-600 font-bold text-sm border-b-2 border-orange-500 transition-all hover:text-orange-700">Qualifications</button>
                                <button onclick="openProfileTab(event, 'a-skills')" class="tab-btn pb-3 text-slate-500 font-medium text-sm border-b-2 border-transparent hover:text-orange-500 transition-all">Key Skills</button>
                                <button onclick="openProfileTab(event, 'a-positions')" class="tab-btn pb-3 text-slate-500 font-medium text-sm border-b-2 border-transparent hover:text-orange-500 transition-all">Key Positions</button>
                                <button onclick="openProfileTab(event, 'a-industry')" class="tab-btn pb-3 text-slate-500 font-medium text-sm border-b-2 border-transparent hover:text-orange-500 transition-all">Industry Experience</button>
                            </div>
                            <div class="min-h-37.5
                                <div id="a-qualifications" class="tab-content block animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>Fellow Chartered Accountant (FCA), ICAB</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>Certified Information Systems Auditor (CISA)</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-graduation-cap text-orange-500 mt-1"></i><span>Expert in ERP Systems & Digital Auditing</span></li>
                                    </ul>
                                </div>
                                <div id="a-skills" class="tab-content hidden animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-orange-500 mt-1"></i><span>Info Systems Audit</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-orange-500 mt-1"></i><span>Business Process Re-engineering</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-orange-500 mt-1"></i><span>FDI Consultancy</span></li>
                                        <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-orange-500 mt-1"></i><span>IT Risk Management</span></li>
                                    </ul>
                                </div>
                                <div id="a-positions" class="tab-content hidden animate-fade-in">
                                    <ul class="space-y-3 text-sm text-slate-700">
                                        <li class="flex items-start gap-3 border-b border-slate-100 pb-2"><i class="fa-solid fa-briefcase text-orange-500 mt-1"></i><span>Partner, BOOT CORPORATION</span></li>
                                        <li class="flex items-start gap-3 border-b border-slate-100 pb-2"><i class="fa-solid fa-briefcase text-orange-500 mt-1"></i><span>Lead Consultant for Energy Sector FDI</span></li>
                                    </ul>
                                </div>
                                <div id="a-industry" class="tab-content hidden animate-fade-in">
                                    <ul class="grid grid-cols-2 gap-3 text-sm text-slate-700">
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-building text-slate-400 text-xs"></i><span>Energy & Power</span></li>
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-building text-slate-400 text-xs"></i><span>RMG & Textile</span></li>
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-building text-slate-400 text-xs"></i><span>Technology</span></li>
                                    </ul>
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
                                <div class="absolute left-1.75 top-2 bottom-2 w-0.5 bg-indigo-100"></div>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Specializes in information systems audit, business process re-engineering, and foreign direct investment (FDI).</p></li>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Leading major FDI projects in energy and textile sectors, facilitating large-scale investments.</p></li>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Deep understanding of the RMG sector providing specialized consultancy for unique industry challenges.</p></li>
                                <li class="relative pl-8"><div class="absolute left-0 top-1.5 w-4 h-4 rounded-full border-[3px] border-indigo-500 bg-white"></div><p class="text-[15px] text-slate-700 leading-relaxed font-medium">Expert in ERP implementation and IT risk management frameworks.</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Affiliations -->
    <section class="py-20 bg-slate-900 text-white border-t border-slate-800">
        <div class="container mx-auto px-6 text-center">
            <span class="text-orange-500 font-bold tracking-wider uppercase text-sm mb-2 block">Our Network</span>
            <h2 class="text-3xl font-bold mb-12">Professional Affiliations</h2>
            <div class="flex flex-wrap justify-center gap-12 items-center opacity-70 grayscale hover:grayscale-0 transition-all duration-500">
                <div class="text-2xl font-bold tracking-widest hover:text-white transition-colors">ICAB</div>
                <div class="h-8 w-px bg-slate-700"></div>
                <div class="text-2xl font-bold tracking-widest hover:text-white transition-colors">ICAEW</div>
                <div class="h-8 w-px bg-slate-700"></div>
                <div class="text-2xl font-bold tracking-widest hover:text-white transition-colors">ACCA</div>
                <div class="h-8 w-px bg-slate-700"></div>
                <div class="text-2xl font-bold tracking-widest hover:text-white transition-colors">ISACA</div>
                <div class="h-8 w-px bg-slate-700"></div>
                <div class="text-2xl font-bold tracking-widest hover:text-white transition-colors">NBR</div>
            </div>
            <p class="mt-12 text-slate-400 max-w-2xl mx-auto">
                We maintain active memberships and professional relationships with leading national and international
                accounting bodies, ensuring our practice adheres to global standards.
            </p>
        </div>
    </section>

</x-app-layout>
