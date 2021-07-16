<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use App\Doctor;
class SwitchConnections
{
    public function handle($request, Closure $next)
    {
        
        

        // Crear un manejador cURL
        $ch = curl_init('http://45.77.193.128:5984');

        // Ejecutar
        curl_exec($ch);

        // Comprueba el código de estado HTTP
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            
            if($http_code == 200){
                return $next($request);
            }else{
                $this->switchConnection();
                return $next($request);
            }
                
            }

    private function switchConnection()
    {
        
        $dbName = 'couchdb2';
        $con = \Config::set('database.default', $dbName);
               
    }
    
}
