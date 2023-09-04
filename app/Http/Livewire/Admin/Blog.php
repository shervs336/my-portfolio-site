<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog as Blogs;

class Blog extends Component
{
    use WithFileUploads;

    public $blogs, $title, $caption, $workId, $overlayColor, $backgroundImagePath, $logoImagePath, $websiteLink, $updateBlog = false, $addBlog = false;

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
        'caption' => 'required',
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields(){
        $this->title = '';
        $this->caption = '';
        $this->overlayColor = 'blue-500';
        $this->website_link = '';
        $this->backgroundImagePath = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->works = Blogs::select('id', 'title', 'caption', 'website_link')->get();
        return view('livewire.admin.works.index');
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
            if($this->backgroundImagePath) {
                $path = $this->backgroundImagePath->store('works', 'public');
            }

            Blogs::create([
                'title' => $this->title,
                'caption' => $this->caption,
                'overlay_color' => $this->overlayColor,
                'background_image_path' => $path ? $path : NULL,
                'website_link' => $this->websiteLink,
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
                $this->title = $work->title;
                $this->caption = $work->caption;
                $this->backgroundImagePath = $work->background_image_path;
                $this->overlayColor = $work->overlay_color;
                $this->websiteLink = $work->website_link;
                $this->workId = $work->id;
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
            Blogs::whereId($this->workId)->update([
                'title' => $this->title,
                'caption' => $this->caption,
                'overlay_color' => $this->overlayColor,
                'background_image_path' => $this->backgroundImagePath,
                'website_link' => $this->websiteLink,
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
