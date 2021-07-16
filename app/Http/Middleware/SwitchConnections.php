<?php

namespace App\Http\Middleware;

use Closure;

class SwitchConnections
{
    public function handle($request, Closure $next)
    {
        
        $respuesta = exec('curl -o /dev/null -s -w "%{http_code}\n" 45.77.193.128:5984');
        
            if($respuesta == 200){
                return $next($request);
            }else{
                $this->switchConnection();
                return $next($request);
            }
                
        }
        
    private function switchConnection()
    {
        $dbName = 'couchdb2';
        \Config::set('database.default', $dbName);       
    }
    
}
