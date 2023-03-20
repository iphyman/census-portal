<?php

namespace App\DataTables;

use App\Models\Department;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DepartmentsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('created_at', function ($query) {
                return $query->created_at;
            })
            ->editColumn('updated_at', function ($query) {
                return $query->updated_at;
            })
            ->addColumn('action', function ($query) {
                return '<div class="btn-group">
                <a href="' . route('department.edit', ['id' => $query->id]) . '" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                </a>
                <form class="btn btn-danger" action="' . route('department.destroy', ['id' => $query->id]) . '" method="POST">
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
    public function query(Department $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('departments-table')
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
            Column::make('description'),
            Column::make('created_at'),
            Column::make('updated_at'),
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
        return 'Departments_' . date('YmdHis');
    }
}