<x-app-layout title="Contact Us">

    <x-page-header
        title="Contact Us"
        subtitle="Ready to take your business to the next level? Get in touch with us today."
        image="https://images.unsplash.com/photo-1423666639041-f140481d836a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2074&q=80"
    />

    <!-- Content -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16">

                <!-- Contact Info & Map -->
                <div class="space-y-12">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                            <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-slate-800 mb-2">Phone</h3>
                            <p class="text-slate-600">+880 2 48814429</p>
                            <p class="text-slate-600">+880 1711 535 555</p>
                        </div>
                        <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                            <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-slate-800 mb-2">Email</h3>
                            <p class="text-slate-600">info@bootcorporation.com.bd</p>
                            <p class="text-slate-600">hanif@bootcorporation.com.bd</p>
                        </div>
                    </div>

                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-800 mb-2">Location</h3>
                                <p class="text-slate-600 leading-relaxed">
                                    Flat - D1 (1st floor) House - 35, Road - 114<br>
                                    Gulshan - 2, Dhaka - 1212, Bangladesh
                                </p>
                            </div>
                        </div>
                        <div class="w-full h-64 bg-slate-200 rounded-xl overflow-hidden relative">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.605630630733!2d90.41999931536306!3d23.79155548456913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a40b84ec8d%3A0x6b772422b7c4d8e5!2sHanif%20%26%20Arif%2C%20Chartered%20Accountants!5e0!3m2!1sen!2sbd!4v1645000000000!5m2!1sen!2sbd"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-slate-100">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">Send us a Message</h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="relative">
                                <input type="text" id="name" name="name"
                                    class="peer w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all placeholder-transparent"
                                    placeholder="Name" required>
                                <label for="name"
                                    class="absolute left-4 -top-2.5 bg-white px-1 text-sm text-slate-500 transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-orange-500">Your Name</label>
                            </div>
                            <div class="relative">
                                <input type="email" id="email" name="email"
                                    class="peer w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all placeholder-transparent"
                                    placeholder="Email" required>
                                <label for="email"
                                    class="absolute left-4 -top-2.5 bg-white px-1 text-sm text-slate-500 transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-orange-500">Email Address</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="relative">
                                <input type="tel" id="phone" name="phone"
                                    class="peer w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all placeholder-transparent"
                                    placeholder="Phone">
                                <label for="phone"
                                    class="absolute left-4 -top-2.5 bg-white px-1 text-sm text-slate-500 transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-orange-500">Phone Number</label>
                            </div>
                            <div class="relative">
                                <input type="text" id="subject" name="subject"
                                    class="peer w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all placeholder-transparent"
                                    placeholder="Subject">
                                <label for="subject"
                                    class="absolute left-4 -top-2.5 bg-white px-1 text-sm text-slate-500 transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-orange-500">Subject</label>
                            </div>
                        </div>
                        <div class="relative">
                            <textarea id="message" name="message" rows="5"
                                class="peer w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all placeholder-transparent"
                                placeholder="Message" required></textarea>
                            <label for="message"
                                class="absolute left-4 -top-2.5 bg-white px-1 text-sm text-slate-500 transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-orange-500">Your Message</label>
                        </div>
                        <button type="submit"
                            class="w-full py-4 bg-orange-500 hover:bg-orange-600 text-white font-bold rounded-lg shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
