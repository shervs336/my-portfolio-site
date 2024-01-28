<?php

namespace App\Http\Livewire\Admin;

use App\Models\Work as Works;
use Livewire\Component;
use Livewire\WithFileUploads;

class Work extends Component
{
    use WithFileUploads;

    public $works;

    public $title;

    public $caption;

    public $workId;

    public $overlayColor;

    public $backgroundImagePath;

    public $logoImagePath;

    public $websiteLink;

    public $updateWork = false;

    public $addWork = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteWorkListner' => 'deleteWork',
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
     *
     * @return void
     */
    public function resetFields()
    {
        $this->title = '';
        $this->caption = '';
        $this->overlayColor = 'blue-500';
        $this->websiteLink = '';
        $this->backgroundImagePath = '';
    }

    /**
     * render the post data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->works = Works::select('id', 'title', 'caption', 'website_link')->get();

        return view('livewire.admin.works.index');
    }

    /**
     * Open Add Work form
     *
     * @return void
     */
    public function addWork()
    {
        $this->resetFields();
        $this->addWork = true;
        $this->updateWork = false;
    }

    /**
     * store the user inputted work data in the works table
     *
     * @return void
     */
    public function storeWork()
    {
        $this->validate();
        try {
            $path = '';
            if ($this->backgroundImagePath) {
                $path = $this->backgroundImagePath->store('works', 'public');
            }

            Works::create([
                'title' => $this->title,
                'caption' => $this->caption,
                'overlay_color' => $this->overlayColor,
                'background_image_path' => $path ? $path : null,
                'website_link' => $this->websiteLink,
            ]);
            session()->flash('success', 'Work Created Successfully!!');
            $this->resetFields();
            $this->addWork = false;
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
    public function editWork($id)
    {
        try {
            $work = Works::findOrFail($id);
            if (! $work) {
                session()->flash('error', 'Post not found');
            } else {
                $this->title = $work->title;
                $this->caption = $work->caption;
                $this->backgroundImagePath = $work->background_image_path;
                $this->overlayColor = $work->overlay_color;
                $this->websiteLink = $work->website_link;
                $this->workId = $work->id;
                $this->updateWork = true;
                $this->addWork = false;
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
    public function updateWork()
    {
        $this->validate();
        try {
            Works::whereId($this->workId)->update([
                'title' => $this->title,
                'caption' => $this->caption,
                'overlay_color' => $this->overlayColor,
                'background_image_path' => $this->backgroundImagePath,
                'website_link' => $this->websiteLink,
            ]);
            session()->flash('success', 'Work Updated Successfully!!');
            $this->resetFields();
            $this->updateWork = false;
        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to post listing page
     *
     * @return void
     */
    public function cancelWork()
    {
        $this->addWork = false;
        $this->updateWork = false;
        $this->resetFields();
    }

    /**
     * delete specific post data from the posts table
     *
     * @param  mixed  $id
     * @return void
     */
    public function deleteWork($id)
    {
        try {
            Works::find($id)->delete();
            session()->flash('success', 'Work Deleted Successfully!!');
        } catch (\Exception $e) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }
}
