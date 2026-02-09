import './bootstrap';

// Partner profile tab switching
window.openProfileTab = function(evt, tabId) {
    const parentCard = evt.target.closest('.rounded-3xl') || evt.target.closest('section');
    
    // Hide all tab contents within this card
    parentCard.querySelectorAll('.tab-content').forEach(el => {
        el.classList.remove('block');
        el.classList.add('hidden');
        el.style.display = 'none';
    });
    
    // Reset all tab buttons
    parentCard.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('text-orange-600', 'font-bold', 'border-orange-500');
        btn.classList.add('text-slate-500', 'font-medium', 'border-transparent');
    });
    
    // Show selected tab content
    const target = document.getElementById(tabId);
    if (target) {
        target.classList.remove('hidden');
        target.classList.add('block');
        target.style.display = 'block';
    }
    
    // Activate selected tab button
    evt.currentTarget.classList.add('text-orange-600', 'font-bold', 'border-orange-500');
    evt.currentTarget.classList.remove('text-slate-500', 'font-medium', 'border-transparent');
};

// Mobile menu functionality
document.addEventListener('DOMContentLoaded', () => {
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (mobileBtn && mobileMenu && !mobileBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }
    });

    // Mobile Dropdowns functionality
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');

    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
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

    // Mobile Sub-Dropdowns functionality
    const mobileSubDropdownToggles = document.querySelectorAll('.mobile-sub-dropdown-toggle');

    mobileSubDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();

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
