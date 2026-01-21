/**
 * JavaScript untuk Aplikasi Laravel Blade
 * File ini berisi fungsi-fungsi umum yang digunakan di seluruh aplikasi
 */

document.addEventListener('DOMContentLoaded', function() {
    console.log('Aplikasi Laravel Blade siap!');
    
    // Auto-hide alerts setelah 5 detik
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    });
});

/**
 * Fungsi untuk menampilkan pesan toast/notification
 * @param {string} message - Pesan yang akan ditampilkan
 * @param {string} type - Tipe notifikasi (success, error, warning, info)
 */
function showNotification(message, type = 'info') {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
    alertDiv.setAttribute('role', 'alert');
    
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    const mainElement = document.querySelector('main');
    const container = mainElement.querySelector('.container');
    
    if (container) {
        container.insertBefore(alertDiv, container.firstChild);
        
        // Auto-hide setelah 5 detik
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alertDiv);
            bsAlert.close();
        }, 5000);
    }
}

/**
 * Fungsi untuk confirm dialog sebelum melakukan aksi
 * @param {string} message - Pesan konfirmasi
 * @param {function} onConfirm - Callback jika dikonfirmasi
 */
function confirmAction(message, onConfirm) {
    if (confirm(message)) {
        onConfirm();
    }
}
