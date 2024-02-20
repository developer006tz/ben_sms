@php $editing = isset($teacher) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            :value="old('name', ($editing ? $teacher->name : ''))"
            maxlength="255"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.password
            name="password"
            label="Password"
            maxlength="255"
            placeholder="Password"
            :required="!$editing"
        ></x-inputs.password>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="subjectname"
            label="Subjectname"
            :value="old('subjectname', ($editing ? $teacher->subjectname : ''))"
            maxlength="255"
            placeholder="Subjectname"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
