<?php
    
    


    Route::get('login','Auth\LoginController@index')->name('login');
    Route::post('login','Auth\LoginController@login')->name('login');
    Route::get('logout','Auth\LogoutController@logout')->name('logout');
    
    Route::group(['middleware'=>'auth'], function(){
        /* Route leader */
        Route::group(['prefix'=>'leader','middleware'=>'isleader'], function(){
            /* Route leader HN */
            Route::group(['prefix'=>'HaNoi','middleware'=>'it_hn'], function(){
                Route::get('/','Leader\LeaderController@index_hn')->name('leader_hn');//home
                // code Route leader HaNoi here
                //C4,C5 
                //thiet ke 
                //1 home co leader HN (view create request,C4,C5)
                //2 click job in C4 -> edit->........
                //3 click job in C5 -> edit->.......
            });
           /* Route leader DN */
            Route::group(['prefix'=>'DaNang','middleware'=>'it_dn'], function(){
                Route::get('/','Leader\LeaderController@index_dn')->name('leader_dn');
                // code Route leader HaNoi here
            });
          
        });
       /* Route sub leader */
         Route::group(['prefix'=>'sub-leader','middleware'=>'issub_leader'], function(){
            
           /* Route subleader HN */
            Route::group(['prefix'=>'HaNoi','middleware'=>'it_hn'], function(){
                Route::get('/','Sub_Leader\Sub_LeaderController@index_hn')->name('sub_leader_hn');
                // code Route subleader HaNoi here
            });
           /* Route subleader DN */
            Route::group(['prefix'=>'DaNang','middleware'=>'it_dn'], function(){
                Route::get('/','Sub_Leader\Sub_LeaderController@index_dn')->name('sub_leader_dn');
                // code Route subleader HaNoi here
            });
               
          
        });
        /* Route member */
         Route::group(['prefix'=>'member','middleware'=>'member'], function(){
            
           /* Route member HN */
            Route::group(['prefix'=>'HaNoi','middleware'=>'it_hn'], function(){
                Route::get('/','Member\MemberController@index_hn')->name('member_hn');
                // code Route member HaNoi here
            });
           /* Route subleader DN */
            Route::group(['prefix'=>'DaNang','middleware'=>'it_dn'], function(){
                Route::get('/','Member\MemberController@index_dn')->name('member_dn');
                // code Route member HaNoi here
            });
               
          
        });
    });

?>