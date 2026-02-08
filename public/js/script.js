document.addEventListener('DOMContentLoaded', () => {
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            // Animate hamburger icon if needed
        });
    }

    // Optional: Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (mobileBtn && mobileMenu && !mobileBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }
    });

    // Mobile Dropdowns functionality
    // This assumes specific structure for mobile menu items with submenus
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');

    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            // Check if it's a link or just a toggle. If it has a href other than #, we might want to navigate
            // But for dropdown parents, usually prevent default.
            if (toggle.getAttribute('href') === '#' || toggle.getAttribute('href') === '') {
                e.preventDefault();
            }

            const dropdown = toggle.nextElementSibling;
            const icon = toggle.querySelector('.fa-chevron-down');

            if (dropdown) {
                dropdown.classList.toggle('hidden');
                if (icon) {
                    icon.classList.toggle('rotate-180');
                }
            }
        });
    });
});
