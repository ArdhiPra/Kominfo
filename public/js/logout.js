document.addEventListener("DOMContentLoaded", function () {
    // Desktop logout
    const logoutButton = document.getElementById("logoutButton");
    const logoutForm = document.getElementById("logoutForm");

    if (logoutButton && logoutForm) {
        logoutButton.addEventListener("click", function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Yakin ingin logout?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Logout",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    logoutForm.submit();
                }
            });
        });
    }

    // Mobile logout
    const logoutButtonMobile = document.getElementById("logoutButtonMobile");
    const logoutFormMobile = document.getElementById("logoutFormMobile");

    if (logoutButtonMobile && logoutFormMobile) {
    logoutButtonMobile.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Yakin ingin logout?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Logout",
            cancelButtonText: "Batal",
            customClass: {
                popup: 'swal-logout-popup',
                title: 'swal-logout-title',
                confirmButton: 'swal-logout-confirm',
                cancelButton: 'swal-logout-cancel'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                logoutFormMobile.submit();
            }
        });
    });
}
});
