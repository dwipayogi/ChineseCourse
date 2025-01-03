import './bootstrap';
import Swal from 'sweetalert2'
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

var beli = document.querySelectorAll(".beli");

beli.forEach(function (button) {
    button.addEventListener("click", function () {
        Swal.fire({
            title: "Are you sure you want to enroll this course?",
            showDenyButton: true,
            confirmButtonText: "Yes",
            denyButtonText: `No`
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire("Enroll Success!", "Anda telah berhasil mendaftar di course ini!", "success");
            } else if (result.isDenied) {
                Swal.fire("Enrollment has cancelled", "", "warning");
            }
        });
    });
});