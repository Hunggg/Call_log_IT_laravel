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
                Route::get('tao-yeu-cau','Leader\CreateRequestController@index_hn')->name('crequest_leader_hn');
                Route::post('tao-yeu-cau','Leader\CreateRequestController@create_hn')->name('crequest_leader_hn');
                //edit,comment
                Route::get('sua/{id}','Leader\EditController@index_hn')->name('edit_leader_hn');
                Route::post('sua/{id}','Leader\EditController@edit_hn')->name('edit_leader_hn');
                
                Route::post('sua/{id}/ajax','Leader\EditController@ajax');
                Route::post('sua/{id}/comment-ajax','Leader\EditController@comment_ajax');
                
                Route::get('list-toi-yeu-cau','Leader\ShowIndividualRequestController@index_hn')->name('srequest_indi_leader_hn');
                Route::get('list-cong-viec-lien-quan','Leader\ShowRelevantRequestController@index_hn')->name('srequest_relev_leader_hn');
                Route::get('list-cong-viec-cua-team','Leader\ShowTeamRequestController@index_hn')->name('srequest_team_leader_hn');
                
            });
           /* Route leader DN */
            Route::group(['prefix'=>'DaNang','middleware'=>'it_dn'], function(){
                Route::get('/','Leader\LeaderController@index_dn')->name('leader_dn');
                // code Route leader DaNang here
                Route::get('tao-yeu-cau','Leader\CreateRequestController@index_dn')->name('crequest_leader_dn');
                Route::post('tao-yeu-cau','Leader\CreateRequestController@create_dn')->name('crequest_leader_dn');
                //edit,comment
                Route::get('sua/{id}','Leader\EditController@index_dn')->name('edit_leader_dn');
                Route::post('sua/{id}','Leader\EditController@edit_dn')->name('edit_leader_dn');
                
                Route::post('sua/{id}/ajax','Leader\EditController@ajax');
                Route::post('sua/{id}/comment-ajax','Leader\EditController@comment_ajax');
                
                Route::get('list-toi-yeu-cau','Leader\ShowIndividualRequestController@index_dn')->name('srequest_indi_leader_dn');
                Route::get('list-cong-viec-lien-quan','Leader\ShowRelevantRequestController@index_dn')->name('srequest_relev_leader_dn');
                Route::get('list-cong-viec-cua-team','Leader\ShowTeamRequestController@index_dn')->name('srequest_team_leader_dn');
               
            });
          
        });
       /* Route sub leader */
         Route::group(['prefix'=>'sub-leader','middleware'=>'issub_leader'], function(){
            
           /* Route subleader HN */
            Route::group(['prefix'=>'HaNoi','middleware'=>'it_hn'], function(){
                Route::get('/','Sub_Leader\Sub_LeaderController@index_hn')->name('sub_leader_hn');
                // code Route subleader HaNoi here
                Route::get('tao-yeu-cau','Sub_Leader\CreateRequestController@index_hn')->name('crequest_subleader_hn');
                Route::post('tao-yeu-cau','Sub_Leader\CreateRequestController@create_hn')->name('crequest_subleader_hn');
                //edit,comment
                Route::get('sua/{id}','Sub_Leader\EditController@index_hn')->name('edit_subleader_hn');
                Route::post('sua/{id}','Sub_Leader\EditController@edit_hn')->name('edit_subleader_hn');
                
                Route::post('sua/{id}/ajax','Sub_Leader\EditController@ajax');
                Route::post('sua/{id}/comment-ajax','Sub_Leader\EditController@comment_ajax');
                
                Route::get('list-toi-yeu-cau','Sub_Leader\ShowIndividualRequestController@index_hn')->name('srequest_indi_subleader_hn');
                Route::get('list-cong-viec-lien-quan','Sub_Leader\ShowRelevantRequestController@index_hn')->name('srequest_relev_subleader_hn');
                Route::get('list-cong-viec-cua-team','Sub_Leader\ShowTeamRequestController@index_hn')->name('srequest_team_subleader_hn');
            });
           /* Route subleader DN */
            Route::group(['prefix'=>'DaNang','middleware'=>'it_dn'], function(){
                Route::get('/','Sub_Leader\Sub_LeaderController@index_dn')->name('sub_leader_dn');
                // code Route subleader DaNang here
                Route::get('tao-yeu-cau','Sub_Leader\CreateRequestController@index_dn')->name('crequest_subleader_dn');
                Route::post('tao-yeu-cau','Sub_Leader\CreateRequestController@create_dn')->name('crequest_subleader_dn');
                //edit,comment
                Route::get('sua/{id}','Sub_Leader\EditController@index_dn')->name('edit_subleader_dn');
                Route::post('sua/{id}','Sub_Leader\EditController@edit_dn')->name('edit_subleader_dn');
                
                Route::post('sua/{id}/ajax','Sub_Leader\EditController@ajax');
                Route::post('sua/{id}/comment-ajax','Sub_Leader\EditController@comment_ajax');
                
                Route::get('list-toi-yeu-cau','Sub_Leader\ShowIndividualRequestController@index_dn')->name('srequest_indi_subleader_dn');
                Route::get('list-cong-viec-lien-quan','Sub_Leader\ShowRelevantRequestController@index_dn')->name('srequest_relev_subleader_dn');
                Route::get('list-cong-viec-cua-team','Sub_Leader\ShowTeamRequestController@index_dn')->name('srequest_team_subleader_dn');
            });
               
          
        });
        /* Route member */
         Route::group(['prefix'=>'member','middleware'=>'ismember'], function(){
            
           /* Route member HN */
            Route::group(['prefix'=>'HaNoi','middleware'=>'it_hn'], function(){
                Route::get('/','Member\MemberController@index_hn')->name('member_hn');
                // code Route member HaNoi here
                Route::get('tao-yeu-cau','Member\CreateRequestController@index_hn')->name('crequest_member_hn');
                Route::post('tao-yeu-cau','Member\CreateRequestController@create_hn')->name('crequest_member_hn');
                //edit,comment
                Route::get('sua/{id}','Member\EditController@index_hn')->name('edit_member_hn');
                Route::post('sua/{id}','Member\EditController@edit_hn')->name('edit_member_hn');
                
                //Route::post('sua/{id}/ajax','Member\EditController@ajax');
                Route::post('sua/{id}/comment-ajax','Member\EditController@comment_ajax');
                
                Route::get('list-toi-yeu-cau','Member\ShowIndividualRequestController@index_hn')->name('srequest_indi_member_hn');
                Route::get('list-cong-viec-lien-quan','Member\ShowRelevantRequestController@index_hn')->name('srequest_relev_member_hn');
                Route::get('list-toi-duoc-giao','Member\ShowAssignRequestController@index_hn')->name('srequest_assi_member_hn');
            });
           /* Route member DN */
            Route::group(['prefix'=>'DaNang','middleware'=>'it_dn'], function(){
                Route::get('/','Member\MemberController@index_dn')->name('member_dn');
                // code Route member DaNang here
                Route::get('tao-yeu-cau','Member\CreateRequestController@index_dn')->name('crequest_member_dn');
                Route::post('tao-yeu-cau','Member\CreateRequestController@create_dn')->name('crequest_member_dn');
                //edit,comment
                Route::get('sua/{id}','Member\EditController@index_dn')->name('edit_member_dn');
                Route::post('sua/{id}','Member\EditController@edit_dn')->name('edit_member_dn');
                
                //Route::post('sua/{id}/ajax','Member\EditController@ajax');
                Route::post('sua/{id}/comment-ajax','Member\EditController@comment_ajax');
                
                Route::get('list-toi-yeu-cau','Member\ShowIndividualRequestController@index_dn')->name('srequest_indi_member_dn');
                Route::get('list-cong-viec-lien-quan','Member\ShowRelevantRequestController@index_dn')->name('srequest_relev_member_dn');
                Route::get('list-toi-duoc-giao','Member\ShowAssignRequestController@index_dn')->name('srequest_assi_member_dn');
            });
               
          
        });
    });

?>