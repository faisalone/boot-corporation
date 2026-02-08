<x-app-layout title="Photo Gallery">

    <x-page-header
        title="Photo Gallery"
        subtitle="Glimpses of our life at BOOT CORPORATION, events, and community engagements."
    />

    <!-- Gallery Grid -->
    <div class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="group relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer">
                <img src="https://images.unsplash.com/photo-1515168816992-d2043a145575?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80"
                    alt="Office event" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <h3 class="text-white font-semibold text-lg">Annual General Meeting 2025</h3>
                </div>
            </div>

            <div class="group relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer">
                <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80"
                    alt="Team meeting" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <h3 class="text-white font-semibold text-lg">Strategic Planning Session</h3>
                </div>
            </div>

            <div class="group relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80"
                    alt="Conference" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <h3 class="text-white font-semibold text-lg">Tax Summit 2025</h3>
                </div>
            </div>

            <div class="group relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer">
                <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80"
                    alt="Office" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <h3 class="text-white font-semibold text-lg">Team Workshop</h3>
                </div>
            </div>

            <div class="group relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1184&q=80"
                    alt="Community" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <h3 class="text-white font-semibold text-lg">CSR Activity</h3>
                </div>
            </div>

            <div class="group relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80"
                    alt="Office" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <h3 class="text-white font-semibold text-lg">Our New Office</h3>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
