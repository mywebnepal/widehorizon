<?php
namespace dipeshbanjade\application\Components;
use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Session;

class application extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'application form',
            'description' => 'this plugin if for online application form'
        ];
    }

    public function onSend()
    {
        $validation = Validator::make(
            [
                'name'           => Input::get('fname'),
                'email'         => Input::get('e_mail'),
                'message'       => Input::get('msg'),
                'address'       => Input::get('address'),
                'phone'         => Input::get('phone')
            ],
            [
                'name'    => 'required|min:4|max:100',
                'email'   => 'required|email',
                'message' => 'required|min:4',
                'address'  => 'required|min:6|max:300',
                'phone'    => 'required|min:7|max:13'

            ]

        );
        if ($validation->fails()){
            return ['#respon' => $this->renderPartial('application::messages', [
                'errorMsgs'   => $validation->messages()->all(),
                'fieldMsgs'   => $validation->messages()
            ])];
        }else{
            $vars =[
                'name'          => Input::get('fname'),
                'email'         => Input::get('e_mail'),
                'msg'           => Input::get('msg'),
                'address'       => Input::get('address'),
                'phone'         => Input::get('phone')
            ];
            Mail::send('dipeshbanjade.application::mail.message', $vars, function($message) {
                $message->to('dbsandesh@gmail.com', 'Admin Person');
                $message->subject('Online application');

                /*if (Iisset(nput::get('cv'))) {
                   $message->attach(Input::file('cv'));
                }*/
                

            });
            return ['#respon' => $this->renderPartial('application::messages', [
                'successMsg' => 'Your application has been submitted successfully',
            ])];
        }
    }
}