<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog as Blogs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Blog extends Component
{
    use WithFileUploads;

    public $blogs;

    public $blogId;

    public $title;

    public $excerpt;

    public $content;

    public $slug;

    public $main_image;

    public $alt_image;

    public $meta_title;

    public $meta_description;

    public $published;

    public $updateBlog = false;

    public $addBlog = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteBlogListner' => 'deleteBlog',
        'contentChanged' => 'setContent',
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Reseting all inputted fields
     *
     * @return void
     */
    public function resetFields()
    {
        $this->title = '';
        $this->excerpt = '';
        $this->content = '';
        $this->slug = '';
        $this->main_image = '';
        $this->alt_image = '';
        $this->meta_title = '';
        $this->meta_description = '';
        $this->published = 0;
    }

    /**
     * render the post data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->blogs = Blogs::select('id', 'title', 'excerpt', 'content', 'slug', 'main_image', 'alt_image', 'meta_title', 'meta_description', 'published')->get();

        return view('livewire.admin.blogs.index');
    }

    /**
     * Open Add Blog form
     *
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
     *
     * @return void
     */
    public function storeBlog()
    {
        $this->validate();
        try {
            $path = '';
            if ($this->main_image) {
                $path = $this->main_image->store('blogs', 'public');
            }

            Blogs::create([
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'content' => $this->content,
                'slug' => $this->slug,
                'main_image' => $path ? $path : null,
                'alt_image' => $this->alt_image,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'published' => $this->published,
            ]);
            session()->flash('success', 'Blog Created Successfully!!');
            $this->resetFields();
            $this->addBlog = false;
        } catch (\Exception $ex) {
            session()->flash('error', $ex->getMessage());
        }
    }

    /**
     * show existing work data in edit work form
     *
     * @param  mixed  $id
     * @return void
     */
    public function editBlog($id)
    {
        try {
            $blog = Blogs::findOrFail($id);
            if (! $blog) {
                session()->flash('error', 'Post not found');
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
                $this->published = $blog->published;
                $this->updateBlog = true;
                $this->addBlog = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }

    }

    /**
     * update the work data
     *
     * @return void
     */
    public function updateBlog()
    {
        $this->validate();
        try {

            $blog = Blogs::whereId($this->blogId)->update([
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'content' => $this->content,
                'slug' => $this->slug,
                'main_image' => $this->main_image,
                'alt_image' => $this->alt_image,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'published' => $this->published,
            ]);

            session()->flash('success', 'Blog Updated Successfully!!');
            $this->resetFields();
            $this->updateBlog = false;
        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to post listing page
     *
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
     *
     * @param  mixed  $id
     * @return void
     */
    public function deleteBlog($id)
    {
        try {
            Blogs::find($id)->delete();
            session()->flash('success', 'Blog Deleted Successfully!!');
        } catch (\Exception $e) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }
}
