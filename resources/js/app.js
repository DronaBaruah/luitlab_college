import './bootstrap';

// Fee Details Dropdown Toggle
document.addEventListener('DOMContentLoaded', function() {
    const toggleDropdown = function(headerClass, contentId) {
        const headers = document.querySelectorAll('h4');
        headers.forEach(header => {
            const icon = header.querySelector(`.${headerClass}`);
            if (icon) {
                header.style.cursor = 'pointer';
                header.addEventListener('click', function() {
                    const content = document.getElementById(contentId);
                    if (content) {
                        const isHidden = content.style.display === 'none';
                        content.style.display = isHidden ? 'block' : 'none';
                        icon.style.transform = isHidden ? 'rotate(180deg)' : 'rotate(0deg)';
                        icon.style.transition = 'transform 0.3s ease';
                    }
                });
            }
        });
    };

    toggleDropdown('hs', 'hs');
    toggleDropdown('tdc', 'tdc');
    toggleDropdown('bvoc', 'bvoc');
    toggleDropdown('add', 'add');
});
