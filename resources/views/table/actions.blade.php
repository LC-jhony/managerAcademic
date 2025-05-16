<x-mini-button rounded icon="pencil" flat primary interaction="solid" wire:click="editDepartament({{ $row->id }})" />
<x-mini-button rounded icon="trash" flat red interaction="negative"
    x-on:click="$wireui.confirmDialog({
        title: '¿Estás seguro?',
        description: 'Esta acción no se puede deshacer',
        icon: 'error',
        iconColor: 'red',
        accept: {
            label: 'Sí, eliminar',
            color: 'negative',
            execute: () => $wire.confirmedDeleteDepartament({{ $row->id }})
        },
        reject: {
            label: 'Cancelar',
            color: 'secondary'
        }
    })" />
