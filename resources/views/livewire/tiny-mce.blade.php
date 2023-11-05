<div>
    <script>
        tinymce.init({
            selector: "textarea.tinymce",
            menubar: false,
            statusbar: true,
            height: "159px",

            paste_data_images: true,

            plugins: [
                "advlist lists link preview hr paste table",
            ],

            toolbar: "styleselect bold italic bullist | blockquote hr | alignleft aligncenter alignright underline alignjustify | link unlink table",

            autosave_interval: "30s",
            browser_spellcheck: true,
            style_formats: [
                {title: "Header 1", format: "h1"},
                {title: "Header 2", format: "h2"},
                {title: "Header 3", format: "h3"},
                {title: "Header 4", format: "h4"},
                {title: "Header 5", format: "h5"},
                {title: "Header 6", format: "h6"},
                {title: "paragraph", format: "p"},
            ],

        });
    </script>    

    <div class="max-w-3xl mx-auto mb-2">
        <div class="bg-white rounded-lg p-5">

            <div class="flex flex-col space-y-10">
                <div wire:ignore>
                    <textarea wire:model="content"
                              class="min-h-fit h-48 tinymce"
                              name="content"
                              id="content"></textarea>
                </div>
            </div>
        </div>
    </div>

</div>