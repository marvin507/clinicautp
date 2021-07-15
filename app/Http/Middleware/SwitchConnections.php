<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class SwitchConnections
{
    public function handle($request, Closure $next)
    {
        try{
            return $next($request);
        } catch (\Exception $e) { //Use a proper exception here, depending on which way/database you are connecting
            $this->switchConnection();
            return $next($request);
        }
    }

    private function switchConnection()
    {
        //here get all connections from config that applies
        //@todo use a better way to get those db names
        $dbNames = ['couchdb', 'couchdb2'];
        foreach($dbNames as $dbName) {
            try {
                \DB::connection($dbName)->getDatabaseName();
                \Config::set('database.default', $dbName);
                return;
            } catch (\Exception $e) {
                continue;
            }
        }
    }
}
