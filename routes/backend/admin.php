<?php
    
    


    Route::get('login','Auth\LoginController@index')->name('login');
    Route::post('login','Auth\LoginController@login')->name('login');
    Route::get('logout','Auth\LogoutController@logout')->name('logout');
    
    Route::group(['middleware'=>'auth'], function(){
        /* Route leader */
        Route::group(['prefix'=>'leader','middleware'=>'isleader'], function(){
            
           
               Route::get('/','Leader\LeaderController@index')->name('leader');
               
               //add route here
               
          
        });
       /* Route sub leader */
        Route::group(['middleware'=>'issub_leader'], function(){
           Route::group(['prefix'=>'sub-leader'], function(){
               Route::get('/', function(){
                  echo 'middleware ok sub leader';
               })->name('sub_leader');
               
               //add route here
               
           });
        });
        /* Route member */
        Route::group(['middleware'=>'ismember'], function(){
           Route::group(['prefix'=>'member'], function(){
               Route::get('/', function(){
                   echo 'middleware ok';
               })->name('member');
               
               //add route here
               
           });
        });
    });

?>