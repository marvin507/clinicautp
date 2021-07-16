<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use App\Doctor;
class SwitchConnections
{
    public function handle($request, Closure $next)
    {
        
        $Host="45.77.193.128";

        exec("ping -n 1 " . $Host, $output, $result);

        if ($result == 0)

        return $next($request);

        else

        $this->switchConnection();
        return $next($request);
        
    }

    private function test(){
        
            
     }

    private function switchConnection()
    {
        
        $dbName = 'couchdb2';
        $con = \Config::set('database.default', $dbName);
               
    }
    
}
