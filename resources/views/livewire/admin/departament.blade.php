<div>
    <x-container>
        <div class="flex justify-end mb-4">
            <x-button light label="Registrar Carrera" flat icon="squares-plus" wire:click='showDepartamentDrawer' />
        </div>
        <livewire:departament-table />
    </x-container>

    <x-drawer wire:model='showIngDepartamentDrawer'>
        @if ($isEditMode)
            <x-slot name="title">
                Actualizar Carrera
            </x-slot>
        @else
            <x-slot name="title">
                Registrar Carrera
            </x-slot>
        @endif
        <x-input label="Nombre" wire:model='form.name' />
        <div class="flex justify-end mt-4">
            @if ($isEditMode)
                <x-button label="Actualizar" warning wire:click='update' />
            @else
                <x-button label="Registrar" wire:click='save' />
            @endif
        </div>
    </x-drawer>

</div>
