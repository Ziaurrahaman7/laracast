<?php 
namespace App\Services;
use MailchimpMarketing\ApiClient;

class Newslatter{
    public function __construct(protected ApiClient $client, protected string $foo)
    {

    }

    public function subscribe(string $email, string $list = null){
        $list ??= config('services.mailchimp.list.subscribers');
     return $this->client()->lists->addListMember($list,[
            "email_address" => $email,
            "status" => "subscribed",
        ]);    
    }

    protected function client(){
        // $mailchimp = new ApiClient();

      return  $this->client->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14'
        ]);
    }

}

