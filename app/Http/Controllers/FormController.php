<?php

namespace App\Http\Controllers;

use App\Forms\CustomForm;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilderTrait;

class FormController extends Controller
{
    use FormBuilderTrait;

    public function create()
    {
        $form = $this->form(CustomForm::class, [
            'method' => 'post',
            'client_validation' => false
        ]);

        return view('form', compact('form'));
    }

    public function store(Request $request)
    {
        $form = $this->form(CustomForm::class);

        $form->redirectIfNotValid();

        $values = $form->getFieldValues();

        ddd($form, $values, $request);

        // Do something....
    }
}
