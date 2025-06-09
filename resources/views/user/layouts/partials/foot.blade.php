<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/jquery.carouselTicker.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }

    // Fungsi untuk mengubah bahasa berdasarkan pilihan
    function translateLanguage(lang) {
        var translateFrame = document.querySelector('.goog-te-combo');
        if (translateFrame) {
            translateFrame.value = lang; // Set bahasa yang dipilih
            translateFrame.dispatchEvent(new Event('change')); // Trigger event change
        }
    }
    $("#slide-logos").each(function () {
        $(this).carouselTicker({
            direction: "prev"
        });
    });
    $("#slide-service").each(function () {
        $(this).carouselTicker({
            direction: "prev"
        });
    });

    document.getElementById("quote-form").addEventListener("submit", function (e) {
        e.preventDefault(); // stop default form submit

        const form = this;
        const formData = new FormData(form);
        const queryString = new URLSearchParams(formData).toString();

        // Show loading alert
        Swal.fire({
            title: 'Sending...',
            text: 'Please wait while we process your request.',
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        fetch(`/send-email?${queryString}`)
            .then(response => {
                if (response.ok) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Your request has been sent.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                    form.reset(); // clear form
                } else {
                    throw new Error('Email send failed');
                }
            })
            .catch(error => {
                Swal.fire({
                    title: 'Oops!',
                    text: 'Something went wrong.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
    });

    </script>
    <script>
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>
@stack('js-src')

@stack('js')
