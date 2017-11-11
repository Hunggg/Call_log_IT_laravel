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
         Route::group(['prefix'=>'sub-leader','middleware'=>'issub_leader'], function(){
            
           
               Route::get('/','Sub_Leader\Sub_LeaderController@index')->name('sub_leader');
               
               //add route here
               
          
        });
        /* Route member */
         Route::group(['prefix'=>'member','middleware'=>'member'], function(){
            
           
               Route::get('/','Member\MemberController@index')->name('member');
               
               //add route here
               
          
        });
    });

?>