<div wire:ignore>
    <div class="max-w-3xl mx-auto mb-2">
        <div class="bg-white rounded-lg">

            <div class="flex flex-col space-y-10">
                <div>
                    <input type="text"
                              class="min-h-fit w-full rounded leading-tight text-gray-700 border focus:outline-none p-1 tagify-custom-class"
                              id="tagify"
                              name="tagify"
                              placeholder="{!! $placeholder !!}">
                </div>
            </div>
        </div>
    </div>

    <script>
        let value = `{!! $content !!}`

        var inputElem = document.querySelector('input#tagify') // the 'input' element which will be transformed into a Tagify component
        var tagify = new Tagify(inputElem, {
            // A list of possible tags. This setting is optional if you want to allow
            // any possible tag to be added without suggesting any to the user.
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        })

        if(value) {
            tagify.addTags(value.split(','));
        }

        inputElem.addEventListener('change', onChange)

        function onChange(e){
            // outputs a String
            @this.set('content', e.target.value);
            @this.emitUp('contentChanged', e.target.value);
        }
    </script>    
</div>