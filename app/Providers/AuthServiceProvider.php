<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Anuncio' => 'App\Policies\AnuncioPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(){
        $this->registerPolicies();

        //traducción del e-mail de validación
        VerifyEmail::toMailUsing(function ($notifiable, $url){
           return (new MailMessage)
                    ->subject('Verificar email')
                    ->greeting('Hola')
                    ->salutation('Un saludo')
                    ->line('Haz clic en la siguiente línea para verificar tu email.')
                    ->action('Verificar email', $url);
        });
    }
}
