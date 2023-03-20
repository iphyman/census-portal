<?php

namespace App\DataTables;

use App\Models\State;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class StatesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('land_area', function ($query) {
                return $query->land_area . 'KM2';
            })
            ->addColumn('action', function ($query) {
                return '<div class="btn-group">
                <a href="' . route('state.edit', ['id' => $query->id]) . '" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                </a>
                <form class="btn btn-danger" action="' . route('state.destroy', ['id' => $query->id]) . '" method="POST">
                ' . csrf_field() . '
                ' . method_field("DELETE") . '
                <button type="submit" class="btn btn-danger m-0 p-0"
                    onclick="return confirm(\'Are You Sure You Want to Delete This?\')">
                    <i class="bi bi-trash3-fill"></i>
                </button>
                </form>
                </div>
                ';
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(State $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('states-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1, 'asc')
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('capital'),
            Column::make('demonym'),
            Column::make('land_area'),
            Column::make('postal_code'),
            Column::make('iso_code'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'States_' . date('YmdHis');
    }
}