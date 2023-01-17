<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ApprovalRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Barryvdh\Debugbar\Facades\Debugbar;

/**
 * Class ArticleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UnapprovedArticleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation { show as traitShow; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Article::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/unapproved');
        CRUD::setEntityNameStrings('article', 'articles');

        $this->crud->allowAccess('approve');
        $this->crud->addButtonFromView('line', 'approve', 'approve', 'beginning');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // $this->crud->addClause('where', 'user_id', '=', backpack_user()->id);
        $this->crud->addClause('where', 'approved', '=', false);

        CRUD::column('title');
        // CRUD::column('slug');
        CRUD::column('content');
        
        $this->crud->addColumn([
            'label' => "Category", // Table column heading
            'type' => "select",
            'name' => 'CategoryID', // the column that contains the ID of that connected entity;
            'entity' => 'category', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => 'App\Models\Category' // foreign key model
        ]);

        $this->crud->setColumnDetails('CategoryID', ['attribute' => 'name']);
        
        CRUD::addColumn([
                'name'  => 'status',
                'label' => 'Status',
                'type'  => 'enum',
                'options' => [
                    'DRAFT' => 'Is Draft',
                    'PUBLISHED' => 'Is Published'
                ]
            ]);
        CRUD::addColumn([
            'name'  => 'published_at',
            'type'  => 'datetime',
            'default' => date("Y-m-d H:i:s")
        ]);
        CRUD::addColumn(['name' => 'featured','type'  => 'boolean']);
        CRUD::addColumn(['name' => 'approved','type'  => 'boolean']);

        $this->crud->denyAccess('create');
        $this->crud->denyAccess('update');

        

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ApprovalRequest::class);

        CRUD::addField([
            'name'  => 'user_id',
            'type'  => 'hidden',
            'default' => backpack_user()->id,
            'visibleInTable' => false,
        ]);

        CRUD::addField([
            'name'  => 'category_id',
            'attributes' => [
                'readonly'    => 'readonly',
                'disabled'    => 'disabled',
              ]
        ]);

        CRUD::addField([
            'name'  => 'title',
            'attributes' => [
                'readonly'    => 'readonly',
                'disabled'    => 'disabled',
              ]
        ]);

        CRUD::addField([
            'name'  => 'slug',
            'attributes' => [
                'readonly'    => 'readonly',
                'disabled'    => 'disabled',
              ]
        ]);

        CRUD::addField([
            'name'  => 'content',
            'type' => 'textarea',
            'attributes' => [
                'readonly'    => 'readonly',
                'disabled'    => 'disabled',
              ]
        ]);


        CRUD::addField([
            'name'  => 'image',
            'attributes' => [
                'readonly'    => 'readonly',
                'disabled'    => 'disabled',
              ]
        ]);

        CRUD::addField([
            'name'  => 'status',
            'label' => 'Status',
            'attributes' => [
                'readonly'    => 'readonly',
                'disabled'    => 'disabled',
              ]
        ]);

        CRUD::addField([
            'name'  => 'published_at',
            'attributes' => [
                'readonly'    => 'readonly',
                'disabled'    => 'disabled',
              ]
        ]);

        CRUD::addField([
            'name' => 'featured',
            'type' => 'switch',
            'attributes' => [
                'readonly'    => 'readonly',
                'disabled'    => 'disabled',
              ]
        ]);
        CRUD::addField(['name' => 'approved','type'  => 'switch']);


        $this->crud->denyAccess('create');
        $this->crud->denyAccess('update');

        // $this->crud->removeSaveActions(['save_and_new','save_and_preview','save_and_back']);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }


    public function show($id)
    {
        // custom logic before
        $content = $this->traitShow($id);
        $this->crud->removeButton('update');

        // custom logic after
        return $content;
    }
}
