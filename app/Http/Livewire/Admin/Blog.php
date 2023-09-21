<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog as Blogs;

class Blog extends Component
{
    use WithFileUploads;

    public $blogs, $blogId, $title, $excerpt, $content, $slug, $main_image, $alt_image, $meta_title, $meta_description, $updateBlog = false, $addBlog = false;

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
        $this->blogs = Blogs::select('id', 'title', 'excerpt', 'content', 'slug', 'main_image', 'alt_image', 'meta_title', 'meta_description')->get();
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
                'slug' => $this->slug,
                'main_image' => $path ? $path : NULL,
                'alt_image' => $this->alt_image,
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
            $blog = Blogs::findOrFail($id);
            if( !$blog) {
                session()->flash('error','Post not found');
            } else {
                $this->blogId = $blog->id;
                $this->title = $blog->title;
                $this->excerpt = $blog->excerpt;
                $this->content = $blog->content;
                $this->slug = $blog->slug;
                $this->main_image = $blog->main_image;
                $this->alt_image = $blog->alt_image;
                $this->meta_title = $blog->meta_title;
                $this->meta_description = $blog->meta_description;
                $this->updateBlog = true;
                $this->addBlog = false;              
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

            $blog=Blogs::whereId($this->blogId)->update([
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'content' => $this->content,
                'slug' => $this->slug,
                'main_image' =>$this->main_image,
                'alt_image' => $this->alt_image,
                'meta_title' => $this ->meta_title,
                'meta_description' => $this->meta_description,
            ]);
            dd($this->blogId);
            session()->flash('success','Blog Updated Successfully!!');
            $this->resetFields();
            $this->updateBlog = false;
        } catch (\Exception $ex) {
            dd($ex->getMessage());
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
