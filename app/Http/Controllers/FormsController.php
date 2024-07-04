<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormsController extends Controller
{
    public function index()
    {
        $data['columns'] = [
            ['name' => 'Title'],
            ['name' => 'Terms'],
        ];
        $data['data'] = Forms::all();
        return view('forms.index', $data);
    }
    public function add(Request $request)
    {
        if ($request->isMethod('post')) :
            $rules = [
                'title' => 'required|string|max:255',
                'handle' => 'required|string|max:255',
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) :
                return redirect()->back()->withErrors($validator)->withInput();
            endif;

            $Forms = new Forms();
            $Forms = [
                'title' => $request->input('title'),
                'handle' => $request->input('handle'),
            ];
            Forms::insert($Forms);
//            return view('forms.edit',['title' => $request->input('title')]);
//            return redirect()->route('forms.edit')->with('title', $request->input('title'));
            return redirect()->route('forms.edit',$request->input('title'))->with('title', $request->input('title'));

        else :
            return view('forms.add');
        endif;
    }
    public function edit(Request $request)
    {
        $formId = $request->segment(count($request->segments()));
        $data['forms'] = Forms::where(['id' => $formId])->first();
        return view('forms.edit', $data);
    }
    public function table(Request $request)
    {
        return view('forms.table');
    }
    public function view()
    {
        return view('forms.view');
    }
}
