// Add this to your main page
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function () {
        // Remove active from all links
        document.querySelectorAll('.nav-link').forEach(l => l.removeAttribute('data-active'));
        // Add active to clicked link
        this.setAttribute('data-active', 'active');
        // Get the page from the tooltip attribute
        const page = this.getAttribute('data-tooltip');
        // Set page title
        document.title = `OSLeM - ${page}`;
        // Store page in sessionStorage (cleared when tab closes)
        sessionStorage.setItem('lastPage', this.getAttribute('href'));
    });
});

// On page load, check for lastPage in sessionStorage
window.addEventListener('load', () => {
    const lastPage = sessionStorage.getItem('lastPage');
    var link = document.querySelector('.nav-link[data-tooltip="Dashboard"]');
    if (lastPage) link = document.querySelector(`.nav-link[href="${lastPage}"]`);
    link.click();
});