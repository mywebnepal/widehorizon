<?php
namespace dipeshbanjade\contactform\Components;
use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Session;

class contactform extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'contactus form',
            'description' => 'plugin for contact us form'
        ];
    }

    public function onSend()
    {
        $validation = Validator::make(
            [
                'name'           => Input::get('fname'),
                'email'         => Input::get('e_mail'),
                'message'       => Input::get('msg')
            ],
            [
                'name'    => 'required|min:4|max:100',
                'email'   => 'required|email',
                'message' => 'required|min:4'

            ]

        );
        if ($validation->fails()){
            return ['#respon' => $this->renderPartial('contactform::messages', [
                'errorMsgs'   => $validation->messages()->all(),
                'fieldMsgs'   => $validation->messages()
            ])];
        }else{
            $vars =[
                'name'          => Input::get('fname'),
                'email'         => Input::get('e_mail'),
                'msg'       => Input::get('msg')
            ];
            Mail::send('neptroxsolution.contactform::mail.message', $vars, function($message) {
                $message->to('dbsandesh@gmail.com', 'Admin Person');
                $message->subject('Wide Horizon');
            });
            return ['#respon' => $this->renderPartial('contactform::messages', [
                'successMsg' => 'Mail send successfully',
            ])];
        }
    }
}