@php $editing = isset($schoolowner) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="schoolname"
            label="Schoolname"
            :value="old('schoolname', ($editing ? $schoolowner->schoolname : ''))"
            maxlength="255"
            placeholder="Schoolname"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
