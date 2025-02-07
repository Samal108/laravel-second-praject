@php
   if(DB::connection()->getpdo()){
    echo "suess full".DB::connection()->getDatabaseName();
   } 
@endphp