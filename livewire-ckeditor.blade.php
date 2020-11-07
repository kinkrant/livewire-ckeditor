


{{-- header.blade.php --}}

<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>





{{-- form.blade.php --}}
<div
            class="form-textarea w-full"
            x-data
            x-init="
                console.log($refs.myIdentifierHere)
                ClassicEditor.create($refs.myIdentifierHere)
                .then( function(editor){
                    editor.model.document.on('change:data', () => {
                    $dispatch('input', editor.getData())
                    })
                })
                .catch( error => {
                    console.error( error );
                } );
            "
            wire:ignore
            wire:key="myIdentifierHere"
            x-ref="myIdentifierHere"
            wire:model.debounce.9999999ms="componentCode">{!! $componentCode !!}</div>