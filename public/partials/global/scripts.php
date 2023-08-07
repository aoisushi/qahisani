<!-- Custom Scripts -->
<script src="script/script.js"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- Date/Time Picker Bug Fix -->
<script>
    function updateDatePlaceholder(inputElement) {
        if (inputElement.value) {
            inputElement.setAttribute('placeholder', '');
        } else {
            inputElement.setAttribute('placeholder', 'Select Date');
        }
    }
    function updateTimePlaceholder(inputElement) {
        if (inputElement.value) {
            inputElement.setAttribute('placeholder', '');
        } else {
            inputElement.setAttribute('placeholder', 'Select Date');
        }
    }
</script>