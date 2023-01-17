<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ArticleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ArticleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Article::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/article');
        CRUD::setEntityNameStrings('article', 'articles');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addClause('where', 'user_id', '=', backpack_user()->id);

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
        CRUD::setValidation(ArticleRequest::class);

        CRUD::addField([
            'name'  => 'user_id',
            'type'  => 'hidden',
            'default' => backpack_user()->id,
            'visibleInTable' => false,
        ]);

        CRUD::field('category_id');
        CRUD::field('title');
        CRUD::field('slug');

        CRUD::addField([
            'name'  => 'content',
            'type' => 'summernote'
        ]);
        
        CRUD::field('image');
        CRUD::addField([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'enum',
            'options' => [
                'DRAFT' => 'Is Draft',
                'PUBLISHED' => 'Is Published'
            ]
        ]);
        CRUD::addField([
            'name'  => 'published_at',
            'type'  => 'datetime',
            'default' => date("Y-m-d H:i:s")
        ]);
        CRUD::addField(['name' => 'featured', 'type' => 'switch']); 


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
}
