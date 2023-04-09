<x-layouts.author variant="1">
    @push('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    @endpush
    <div class="container mx-auto mt-6 grid gap-6">
        <div class="flex">
            <input type="text" name="title" autofocus class="focus:outline-none text-4xl font-semibold flex-1" placeholder="Title...">
        </div>
        <div>
            <div id="editor" class=""></div>
            <textarea name="body" style="display:none" id="hiddenArea"></textarea>
        </div>
    </div>
    @push('scripts')
        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <!-- Initialize Quill editor -->
        <script>
            var toolbarOptions = [
                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                ['blockquote', 'code-block'],
    
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction
    
                [{ 'color': [] }],          // dropdown with defaults from theme
                ['clean']                                         // remove formatting button
            ];
     
            var quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: toolbarOptions
                },
                placeholder: 'Write...',
            });
    
            quill.on('text-change', function(range, oldRange, source) {
                document.getElementById('hiddenArea').value = quill.root.innerHTML;
            });
        </script>
    @endpush
</x-layouts.author>