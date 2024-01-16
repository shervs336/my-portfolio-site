<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category as Categories;

class Category extends Component
{
    use WithFileUploads;

    public $categories, $categoryId, $parent_id, $name, $updateCategpry = false, $addCategory = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteCategoryListner'=>'deleteCategory'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required',
        
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields(){
        $this->name = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->categories = Categories::select('id', 'parent_id', 'name')->get();
        return view('livewire.admin.categories.index');
    }

    /**
     * Open Add Blog form
     * @return void
     */
    public function addCategory()
    {
        $this->resetFields();
        $this->addCategory = true;
        $this->updateCategory = false;
    }

         /**
      * store the user inputted work data in the works table
      * @return void
      */
    public function storeCategory()
    {
        $this->validate();
        try {
            $path = '';
            if($this->name) {
                $path = $this->name->store('categories', 'public');
            }

            Categories::create([
                'name' => $this->name,
               
            ]);
            session()->flash('success','Categories Created Successfully!!');
            $this->resetFields();
            $this->addCategory = false;
        } catch (\Exception $ex) {
            session()->flash('error',$ex->getMessage());
        }
    }
 
        /**
     * show existing work data in edit work form
     * @param mixed $id
     * @return void
     */
    public function editCategory($id){
        try {
            $category = Categories::findOrFail($id);
            if( !$category) {
                session()->flash('error','Post not found');
            } else {
                $this->categoryId = $category->id;
                $this->parent_id = $category->parent_id;
                $this->name = $category->name;
                $this->updateCategory = true;
                $this->addCategory = false;              
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
 
    }

        /**
     * update the work data
     * @return void
     */
    public function updateCategory()
    {
        $this->validate();
        try {

            $lab=Labs::whereId($this->categoryId)->update([
                'parent_id' => $this->parent_id,
                'name' => $this->name,
            ]);
            dd($this->categoryId);
            session()->flash('success','Category Updated Successfully!!');
            $this->resetFields();
            $this->updateCategory = false;
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            session()->flash('success','Something goes wrong!!');
        }
    }

        /**
     * Cancel Add/Edit form and redirect to post listing page
     * @return void
     */
    public function cancelCategory()
    {
        $this->addCategory = false;
        $this->updateCategory = false;
        $this->resetFields();
    }
 
    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function deleteCategory($id)
    {
        try{
            Labs::find($id)->delete();
            session()->flash('success',"Category Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
}
