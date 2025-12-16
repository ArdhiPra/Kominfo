const buttons = document.querySelectorAll(".tab-btn");
const contents = document.querySelectorAll(".tab-content");

buttons.forEach((btn) => {
    btn.addEventListener("click", function () {
        // reset semua tombol
        buttons.forEach((b) => {
            b.classList.remove("btn-warning", "text-white");
            b.classList.add("btn-light");
        });

        // tombol yang aktif
        this.classList.remove("btn-light");
        this.classList.add("btn-warning", "text-white");

        // sembunyikan semua konten
        contents.forEach((c) => c.classList.add("d-none"));

        // tampilkan konten sesuai tombol
        const target = this.getAttribute("data-target");
        document.getElementById(target).classList.remove("d-none");
    });
});
