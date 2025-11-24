document.addEventListener("DOMContentLoaded", function () {
    const successMessage = document.querySelector(
        'meta[name="alert-success"]'
    )?.content;
    const errorMessage = document.querySelector(
        'meta[name="alert-error"]'
    )?.content;

    if (successMessage) {
        Swal.fire({
            icon: "success",
            title: "Berhasil!",
            text: successMessage,
            width: 450, // <<< UBAH DI SINI
            showConfirmButton: false,
            timer: 2000,
        });
    }

    if (errorMessage) {
        Swal.fire({
            icon: "error",
            title: "Gagal!",
            text: errorMessage,
            width: 450, // <<< UBAH DI SINI
            showConfirmButton: true,
        });
    }
});
