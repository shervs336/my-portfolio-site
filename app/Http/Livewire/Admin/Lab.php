<?php

namespace App\Http\Livewire\Admin;

use App\Models\Lab as Labs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Lab extends Component
{
    use WithFileUploads;

    public $labs;

    public $labId;

    public $title;

    public $excerpt;

    public $main_image;

    public $link;

    public $updateLab = false;

    public $addLab = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteLabListner' => 'deleteLab',
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required',

    ];

    /**
     * Reseting all inputted fields
     *
     * @return void
     */
    public function resetFields()
    {
        $this->title = '';
        $this->excerpt = '';
        $this->main_image = '';
        $this->link = '';
    }

    /**
     * render the post data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->labs = Labs::select('id', 'title', 'excerpt', 'main_image', 'link')->get();

        return view('livewire.admin.labs.index');
    }

    /**
     * Open Add Blog form
     *
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
     *
     * @return void
     */
    public function storeLab()
    {
        $this->validate();
        try {
            $path = '';
            if ($this->main_image) {
                $path = $this->main_image->store('labs', 'public');
            }

            Labs::create([
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'main_image' => $path ? $path : null,
                'link' => $this->link,
            ]);
            session()->flash('success', 'Labs Created Successfully!!');
            $this->resetFields();
            $this->addLab = false;
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
    public function editLab($id)
    {
        try {
            $lab = Labs::findOrFail($id);
            if (! $lab) {
                session()->flash('error', 'Post not found');
            } else {
                $this->labId = $lab->id;
                $this->title = $lab->title;
                $this->excerpt = $lab->excerpt;
                $this->main_image = $lab->main_image;
                $this->link = $lab->link;
                $this->updateLab = true;
                $this->addLab = false;
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
    public function updateLab()
    {
        $this->validate();
        try {

            $lab = Labs::whereId($this->labId)->update([
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'main_image' => $this->main_image,
                'link' => $this->link,
            ]);
            dd($this->labId);
            session()->flash('success', 'Blog Updated Successfully!!');
            $this->resetFields();
            $this->updateLab = false;
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            session()->flash('success', 'Something goes wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to post listing page
     *
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
     *
     * @param  mixed  $id
     * @return void
     */
    public function deleteLab($id)
    {
        try {
            Labs::find($id)->delete();
            session()->flash('success', 'Labs Deleted Successfully!!');
        } catch (\Exception $e) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }
}
