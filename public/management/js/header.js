document.addEventListener('DOMContentLoaded', function() {
    const enlaceLogout = document.getElementById('logoutLink');
    
    if ( enlaceLogout != null ) {
        enlaceLogout.addEventListener('click', function (event) {
            event.preventDefault();
            
            const formLogout = document.getElementById('logoutForm');
            formLogout.submit();
        });
    }
});