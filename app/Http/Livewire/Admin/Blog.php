<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog as Blogs;

class Blog extends Component
{
    use WithFileUploads;

    public $blogs, $title, $excerpt, $content, $main_image, $meta_title, $meta_description, $updateBlog = false, $addBlog = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteBlogListner'=>'deleteBlog'
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
        $this->main_image = '';
        $this->meta_title = '';
        $this->meta_description = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->blogs = Blogs::select('id', 'title', 'excerpt', 'content', 'main_image', 'meta_title', 'meta_description')->get();
        return view('livewire.admin.blogs.index');
    }

    /**
     * Open Add Blog form
     * @return void
     */
    public function addBlog()
    {
        $this->resetFields();
        $this->addBlog = true;
        $this->updateBlog = false;
    }

         /**
      * store the user inputted work data in the works table
      * @return void
      */
    public function storeBlog()
    {
        $this->validate();
        try {
            $path = '';
            if($this->main_image) {
                $path = $this->main_image->store('blogs', 'public');
            }

            Blogs::create([
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'content' => $this->content,
                'main_image' => $path ? $path : NULL,
                'meta_title' => $this ->meta_title,
                'meta_description' => $this->meta_description,
            ]);
            session()->flash('success','Blog Created Successfully!!');
            $this->resetFields();
            $this->addBlog = false;
        } catch (\Exception $ex) {
            session()->flash('error',$ex->getMessage());
        }
    }
 
        /**
     * show existing work data in edit work form
     * @param mixed $id
     * @return void
     */
    public function editBlog($id){
        try {
            $work = Blogs::findOrFail($id);
            if( !$work) {
                session()->flash('error','Post not found');
            } else {
                $this->title = $blogs->title;
                $this->excerpt = $blogs->excerpt;
                $this->content = $blogs->content;
                $this->main_image = $blogs->main_image;
                $this->meta_title = $blogs->meta_title;
                $this->meta_description = $blogs->meta_description;
              
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
 
    }

        /**
     * update the work data
     * @return void
     */
    public function updateBlog()
    {
        $this->validate();
        try {
            Blogs::whereId($this->blogId)->update([
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'content' => $this->content,
                'main_image' => $this->main_image,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
            ]);
            session()->flash('success','Blog Updated Successfully!!');
            $this->resetFields();
            $this->updateBlog = false;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }
    }

        /**
     * Cancel Add/Edit form and redirect to post listing page
     * @return void
     */
    public function cancelBlog()
    {
        $this->addBlog = false;
        $this->updateBlog = false;
        $this->resetFields();
    }
 
    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function deleteBlog($id)
    {
        try{
            Blogs::find($id)->delete();
            session()->flash('success',"Blog Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
}
