<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            $spaUrl = "http://front.dewanhoster.my.id/email_verify_url/" . $url;
            // return $this->view('emails.orders.shipped');
            // bahlul lu
            // return view('admin.verify', [
            //     'verifies' => $spaUrl
            // ]);
            $mail = new MailMessage;
            return $mail->view('admin.verify', [
                'verifies' => $spaUrl
            ]);

            // return (new MailMessage)
            //     ->subject('Verify Email Addresss')
            //     ->line('Click the button below to verify your email address')
            //     ->action('Verify Email Address', $spaUrl);
        });
    }
}
