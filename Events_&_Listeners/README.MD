// command
```
php artisan make:mail WelcomeNewUserMail --markdown emails.new-welcome
```
// command
```
php artisan make:event NewCustomerHasRegisteredEvent
```
// NewCustomerHasRegisteredEvent.php
```
class NewCustomerHasRegisteredEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $customer;
    public function __construct($customer)
    {
        $this->customer = $customer;
    }
}
```
// CustomerController.php
```
use App\Events\NewCustomerHasRegisteredEvent;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Support\Facades\Mail;;

public function store()
{
  event(new NewCustomerHasRegisteredEvent($customer));
}
```
// EventServiceProvider.php
```
use App\Events\NewCustomerHasRegisteredEvent;

protected $listen = [
        NewCustomerHasRegisteredEvent::class => [
            \App\Listeners\WelcomeNewCustomerListener::class,
            \App\Listeners\RegisterCustomerToNewsletter::class,
            \App\Listeners\NotifyAdminViaSlack::class,
        ],
    ];
```
// Command
```
php artisan event:generate
```

// WelcomeNewCustomerListener.php
```
use App\Mail|WelcomeNewUserMail;
use Illuminate\Support\Facades\Mail;

public function handle($event)
{
  Mail::to($event->customer->email)->semd(new WelcomeNewUserMail());
}
```
