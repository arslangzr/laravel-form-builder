<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Forms\Fields\Select2CustomField;

class CustomForm extends Form
{
    public function buildForm()
    {
        $this->add('title', 'text', [
            'label' => 'Post title',
            'rules' => ['required', 'alpha', 'min:4', 'max:255'],
        ]);
        $this->add('category', 'choice', [
            'label' => 'Post category',
            'choices' => [
                'books' => 'Books',
                'politics' => 'Politics'
            ],
            'empty_value' => '== Please Select ==',
            'rules' => ['required'],
        ]);
        $this->add('content', 'textarea', [
            'label' => 'Post content',
            'rules' => ['required'],
        ]);
        $this->add('published', 'checkbox', [
            'label' => 'Publish blog post',
            'value' => 1,
        ]);
        $this->add('send', 'submit', [
            'label' => 'Save',
            'attr' => ['class' => 'btn btn-primary'],
        ]);
    }
}
