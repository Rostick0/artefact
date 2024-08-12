<script src="/assets/libs/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        xss_sanitization: false,
        extended_valid_elements: '*',
        cleanup: false,
        theme_advanced_disable: "code"
    });
</script>
