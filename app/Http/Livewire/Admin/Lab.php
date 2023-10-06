<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog as Labs;

class Blog extends Component
{
    use WithFileUploads;

    public $labs, $labId, $title, $excerpt, $content, $slug, $main_image, $alt_image, $meta_title, $meta_description, $updateLab = false, $addLab = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteLabListner'=>'deleteLab'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields(){
        $this->title = '';
        $this->excerpt = '';
        $this->content = '';
        $this->slug = '';
        $this->main_image = '';
        $this->alt_image = '';
        $this->meta_title = '';
        $this->meta_description = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->labs = Labs::select('id', 'title', 'excerpt', 'content', 'slug', 'main_image', 'alt_image', 'meta_title', 'meta_description')->get();
        return view('livewire.admin.labs.index');
    }

    /**
     * Open Add Blog form
     * @return void
     */
    public function addLab()
    {
        $this->resetFields();
        $this->addLab = true;
        $this->updateLab = false;
    }

         /**
      * store the user inputted work data in the works table
      * @return void
      */
    public function storeLab()
    {
        $this->validate();
        try {
            $path = '';
            if($this->main_image) {
                $path = $this->main_image->store('labs', 'public');
            }

            Labs::create([
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'content' => $this->content,
                'slug' => $this->slug,
                'main_image' => $path ? $path : NULL,
                'alt_image' => $this->alt_image,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
            ]);
            session()->flash('success','Labs Created Successfully!!');
            $this->resetFields();
            $this->addLab = false;
        } catch (\Exception $ex) {
            session()->flash('error',$ex->getMessage());
        }
    }
 
        /**
     * show existing work data in edit work form
     * @param mixed $id
     * @return void
     */
    public function editLab($id){
        try {
            $lab = Labs::findOrFail($id);
            if( !$lab) {
                session()->flash('error','Post not found');
            } else {
                $this->blogId = $lab->id;
                $this->title = $lab->title;
                $this->excerpt = $lab->excerpt;
                $this->content = $lab->content;
                $this->slug = $lab->slug;
                $this->main_image = $lab->main_image;
                $this->alt_image = $lab->alt_image;
                $this->meta_title = $lab->meta_title;
                $this->meta_description = $lab->meta_description;
                $this->updateLab = true;
                $this->addLab = false;              
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
 
    }

        /**
     * update the work data
     * @return void
     */
    public function updateLab()
    {
        $this->validate();
        try {

            $lab=Labs::whereId($this->labId)->update([
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'content' => $this->content,
                'slug' => $this->slug,
                'main_image' =>$this->main_image,
                'alt_image' => $this->alt_image,
                'meta_title' => $this ->meta_title,
                'meta_description' => $this->meta_description,
            ]);
            dd($this->labId);
            session()->flash('success','Blog Updated Successfully!!');
            $this->resetFields();
            $this->updateLab = false;
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            session()->flash('success','Something goes wrong!!');
        }
    }

        /**
     * Cancel Add/Edit form and redirect to post listing page
     * @return void
     */
    public function cancelLab()
    {
        $this->addLab = false;
        $this->updateLab = false;
        $this->resetFields();
    }
 
    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function deleteLab($id)
    {
        try{
            Labs::find($id)->delete();
            session()->flash('success',"Labs Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
}
