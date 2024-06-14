function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');
    const overlay = document.getElementById('overlay');

    if (sidebar.style.width === '250px') {
        sidebar.style.width = '0';
        overlay.style.display = 'none';
        content.style.filter = 'none';
    } else {
        sidebar.style.width = '250px';
        overlay.style.display = 'block';
        content.style.filter = 'blur(2px)';
    }
}
