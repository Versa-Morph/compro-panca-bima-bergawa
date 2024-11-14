<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
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
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>
@stack('js-src')

@stack('js')
