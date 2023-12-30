<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Supplier;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

class SupplierDatatable extends DataTableComponent
{
    protected $model = Supplier::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombres", "name")
                ->sortable(),
            Column::make("Número identificación", "idnumber")
                ->sortable(),
            Column::make("Teléfono", "phone")
                ->sortable(),
            Column::make("Fecha de ingreso", "created_at")
                ->sortable(),
            Column::make("Fecha de actualización", "updated_at")
                ->sortable(),

                ButtonGroupColumn::make('Ver │ Editar')
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                        ->title(fn($row) => '')
                        ->location(fn($row) => route('suppliers.show', $row))
                        ->attributes(function($row) {
                            return [
                                'class' => 'bi bi-eye-fill underline text-blue-500 hover:no-underline btn btn-primary btn-sm my-2',
                            ];
                        }),
                    LinkColumn::make('Edit')
                        ->title(fn($row) => '')
                        ->location(fn($row) => route('suppliers.edit', $row))
                        ->attributes(function($row) {
                            return [
                                'target' => '_blank',
                                'class' => 'bi bi-pencil-square underline text-blue-500 hover:no-underline btn btn-primary btn-sm my-2',
                            ];
                        }),
                    ]),
        ];
    }
}
