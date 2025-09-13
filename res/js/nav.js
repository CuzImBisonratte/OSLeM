// Add this to your main page
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function () {
        // Remove active from all links
        document.querySelectorAll('.nav-link').forEach(l => l.removeAttribute('data-active'));
        // Add active to clicked link
        this.setAttribute('data-active', 'active');
    });
});