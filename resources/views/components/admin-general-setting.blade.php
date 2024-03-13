@if ($boxType == 'text' || $boxType == 'password')
    <div
        class="flex justify-between items-center mt-7 ml-36 mr-80 max-[1000px]:mr-10 max-[1000px]:ml-10 max-[480px]:flex-col max-[480px]:items-start">
        <label class=" text-xl">{{ $label }}</label>
        <input type="{{ $boxType }}" value="{{ $labelValue }}" name="{{ $name }}"
            class="w-96 remove-name disabled:opacity-75 ins-name max-[630px]:w-60 max-[480px]:w-full">
    </div>
@elseif ($boxType == 'select')
    <div
        class="flex justify-between items-center mt-7 ml-36 mr-80 max-[1000px]:mr-10 max-[1000px]:ml-10 max-[480px]:flex-col max-[480px]:items-start">
        <label class=" text-xl">{{ $label }}</label>
        <select name="{{ $name }}"
            class="w-96 remove-name disabled:opacity-75 ins-name max-[630px]:w-60 max-[480px]:w-full">
            <option value="{{ $labelValue }}" selected>{{ $labelValue }}</option>
            <option value="UTC+0">UTC+0</option>
        </select>
    </div>
@elseif ($boxType == 'textArea')
    <div
        class="flex justify-between items-center mt-7 ml-36 mr-80 max-[1000px]:mr-10 max-[1000px]:ml-10 max-[480px]:flex-col max-[480px]:items-start">
        <label class=" text-xl">{{ $label }}</label>
        <textarea name="{{ $name }}"
            class="w-96 remove-name disabled:opacity-75 ins-name max-[630px]:w-60 max-[480px]:w-full">{{ $labelValue }}</textarea>
    </div>
@elseif($boxType == 'not-editable')
    <div
        class="flex justify-between items-center mt-7 ml-36 mr-80 max-[1000px]:mr-10 max-[1000px]:ml-10 max-[480px]:flex-col max-[480px]:items-start">
        <label class=" text-xl">{{ $label }}</label>
        <input type="text" value="{{ $labelValue }}" name="{{ $name }}"
            class="w-96 remove-name disabled:opacity-75 not-ins-name max-[630px]:w-60 max-[480px]:w-full">
    </div>
@elseif ($boxType == 'profile')
    <div
        class="flex justify-between items-center mt-7 ml-36 mr-80 max-[1000px]:mr-10 max-[1000px]:ml-10 max-[480px]:flex-col max-[480px]:items-start">
        <label class=" text-xl">{{ $label }}</label>
        <div class="flex items-center max-[480px]:w-full">
            <div class="max-[480px]:w-full">
                <input type="file" value="{{ $labelValue }}" name="{{ $name }}"
                    class="w-96 remove-name pl-20 disabled:opacity-75 ins-name max-[630px]:w-60 max-[480px]:w-full max-[480px]:pl-3">
            </div>
            @if ($labelValue == null)
                <img class="w-16 h-16 rounded-full bg-blue-300"
                    src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
            @else
                <img class="w-16 h-16 rounded-full bg-blue-300" src="{{ asset('storage/images/' . $labelValue) }}">
            @endif
        </div>
    </div>
@endif

</form>
