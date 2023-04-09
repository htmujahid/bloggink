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
            <div id="topics" class="mt-2"></div>
            <input type="text" name="topic" id="topic" placeholder="Comma separated list of topics..." class="focus:outline-none w-full mt-2 text-sm">
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

            var topic = document.getElementById('topic');
            var topics = document.getElementById('topics');
            var counter = 0;

            topic.addEventListener('paste', function(e) {
                e.preventDefault();
            });

            topic.addEventListener('keyup', function(e) {
                if (e.keyCode == 188 && topic.value.trim() != ',' && counter < 5) {
                    var value = topic.value.replace(',', '').trim();
                    topic.value = '';
                    var p = document.createElement('p');
                    p.classList.add('inline-block', 'bg-gray-200', 'rounded-full', 'px-3', 'py-1', 'text-sm', 'text-gray-700', 'mr-2');
                    p.innerHTML = value + '<span class="ml-2 cursor-pointer">x</span>';
                    topics.appendChild(p);
                    var input = document.createElement('input');
                    input.value = value;
                    input.setAttribute('type', 'hidden');
                    input.setAttribute('name', `topic-${counter+1}`);
                    topics.appendChild(input);
                    counter++;
                    if (counter == 5) {
                        topic.setAttribute('disabled', 'disabled');
                    }
                }
            });

            topics.addEventListener('click', function(e) {
                if (e.target.tagName == 'SPAN') {
                    counter--;
                    if (counter < 5) {
                        topic.removeAttribute('disabled');
                    }
                    e.target.parentNode.remove();
                }
            });

        </script>
    @endpush
</x-layouts.author>