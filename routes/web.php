<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

Route::get('/mail', function () {
  Mail::raw('Teste', function(Message $message){
      $message->to('teste@teste.com')->subject('teste01')
      ->from('admin@sysRH.com');
  });
  echo 'enviado com sucesso';
});
