<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\BasicSchoolInfo;

class BasicSchoolInformation extends Component
{
    public $schoolName;
    public $SchoolPhone;
    public $email;
    public $facebookLink;
    public $websiteLink;
    public $linkedInLink;

    public function render()
    {
        return view('livewire.basic-school-information');
    }

    public function submit(Request $request)
    {
        $this->validate();
        BasicSchoolInfo::create([
            'school_name'=>$this->schoolName,
            'school_phone'=>$this->SchoolPhone,
            'email'=>$this->email,
            'facebook_link'=>$this->facebookLink,
            'website_link'=>$this->websiteLink,
            'linked_in_link'=>$this->linkedInLink
        ]);
        session()->flash('message', 'Basic Detail Added Successfully.');
        return redirect()->to('/');
    }

    protected function rules()
    {
        return [
            'schoolName'=>'required',
            'SchoolPhone'=>'required',
            'email'=>'required|email|unique:basic_school_infos',
            'facebookLink'=>'required',
            'websiteLink'=>'required',
            'linkedInLink'=>'required',
        ];
    }
}
