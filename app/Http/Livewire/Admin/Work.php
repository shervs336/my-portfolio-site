<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Work as Works;

class Work extends Component
{
    public $works, $title, $caption, $workId, $overlayColor, $backgroundImagePath, $logoImagePath, $websiteLink, $updateWork = false, $addWork = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteWorkListner'=>'deleteWork'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required',
        'caption' => 'required'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields(){
        $this->title = '';
        $this->caption = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->works = Works::select('id', 'title', 'caption', 'website_link')->get();
        return view('livewire.admin.works.index');
    }

    /**
     * Open Add Work form
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
      * @return void
      */
    public function storeWork()
    {
        $this->validate();
        try {
            Works::create([
                'title' => $this->title,
                'caption' => $this->caption
            ]);
            session()->flash('success','Work Created Successfully!!');
            $this->resetFields();
            $this->addWork = false;
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
    }

        /**
     * show existing work data in edit work form
     * @param mixed $id
     * @return void
     */
    public function editWork($id){
        try {
            $work = Works::findOrFail($id);
            if( !$work) {
                session()->flash('error','Post not found');
            } else {
                $this->title = $work->title;
                $this->caption = $work->caption;
                $this->workId = $work->id;
                $this->updateWork = true;
                $this->addWork = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
 
    }

        /**
     * update the work data
     * @return void
     */
    public function updateWork()
    {
        $this->validate();
        try {
            Works::whereId($this->workId)->update([
                'title' => $this->title,
                'caption' => $this->caption
            ]);
            session()->flash('success','Work Updated Successfully!!');
            $this->resetFields();
            $this->updateWork = false;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }
    }

        /**
     * Cancel Add/Edit form and redirect to post listing page
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
     * @param mixed $id
     * @return void
     */
    public function deleteWork($id)
    {
        try{
            Works::find($id)->delete();
            session()->flash('success',"Work Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
}
