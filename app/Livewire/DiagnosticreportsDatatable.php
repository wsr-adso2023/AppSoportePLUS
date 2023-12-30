<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Support;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

class DiagnosticreportsDatatable extends DataTableComponent
{
    protected $model = Support::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Número de solicitud", "numerosolicitud")
                ->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->sortable(),

                ButtonGroupColumn::make('Accion')
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                        ->title(fn($row) => 'Reportar diagnóstico')
                        ->location(fn($row) => route('reports.show', $row))
                        ->attributes(function($row) {
                            return [
                                'class' => 'underline text-blue-500 hover:no-underline btn btn-primary btn-sm my-2',
                            ];
                        }),
                    
                ]),
        ];
    }
}
