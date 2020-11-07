





{{-- header.blade.php --}}<br>

<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script><br><br>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

<script><br>
    ClassicEditor<br>
        .create( document.querySelector( '#editor' ) )<br>
        .catch( error => {<br>
            console.error( error );<br>
        } );<br>
</script><br>



<br><br>

{{-- form.blade.php --}}<br>
<div<br>
            class="form-textarea w-full"<br>
            x-data<br>
            x-init="<br>
                console.log($refs.myIdentifierHere)<br>
                ClassicEditor.create($refs.myIdentifierHere)<br>
                .then( function(editor){<br>
                    editor.model.document.on('change:data', () => {<br>
                    $dispatch('input', editor.getData())<br>
                    })<br>
                })<br>
                .catch( error => {<br>
                    console.error( error );<br>
                } );<br>
            "<br>
            wire:ignore<br>
            wire:key="myIdentifierHere"<br>
            x-ref="myIdentifierHere"<br>
            wire:model.debounce.9999999ms="componentCode">{!! $componentCode !!}</div>
