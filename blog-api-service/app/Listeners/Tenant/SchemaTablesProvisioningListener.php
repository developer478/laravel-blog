<?php

namespace App\Listeners\Tenant;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SchemaTablesProvisioningListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $tenantPrefix = $event->user->id;
        
        \Log::info('=========[ SchemaTablesProvisioningListener ]============');
        $controller = app()->make('App\Http\Controllers\Tenant\ProvisionSchemaTables');
        $controller->up($tenantPrefix);
        
        return redirect()->action('App\Http\Controllers\Tenant\ProvisionSchemaTables@up', ['tenant' => $tenantPrefix]);


    }
}
