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
                
                Route::get('tao-yeu-cau','Leader\CreateRequestController@index_hn')->name('crequest_leader_hn');
                Route::post('tao-yeu-cau','Leader\CreateRequestController@create_hn')->name('crequest_leader_hn');
               
                //edit,comment
                Route::get('sua/{id}','Leader\EditController@index_hn')->name('edit_leader_hn');
                Route::post('sua/{id}','Leader\EditController@edit_hn')->name('edit_leader_hn'); 
                Route::post('sua/{id}/ajax','Leader\EditController@ajax');
                Route::post('sua/{id}/comment-ajax','Leader\EditController@comment_ajax');
                

                // ROUTE VIỆC TÔI YÊU CẦU HN
                Route::get('list-toi-yeu-cau','Leader\ShowIndividualRequestController@index_hn')->name('srequest_indi_leader_hn');
                Route::get('list-toi-yeu-cau/new','Leader\ShowIndividualRequestController@new_hn')->name('srequest_indi_new_leader_hn');
                Route::get('list-toi-yeu-cau/inprogress','Leader\ShowIndividualRequestController@inprogress_hn')->name('srequest_indi_inprogress_leader_hn');
                Route::get('list-toi-yeu-cau/resolved','Leader\ShowIndividualRequestController@resolved_hn')->name('srequest_indi_resolved_leader_hn');
                Route::get('list-toi-yeu-cau/outofdate','Leader\ShowIndividualRequestController@outofdate_hn')->name('srequest_indi_outofdate_leader_hn');

                //ROUTE CÔNG VIỆC LIÊN QUAN HN
                Route::get('list-cong-viec-lien-quan','Leader\ShowRelevantRequestController@index_hn')->name('srequest_relev_leader_hn');
                Route::get('list-cong-viec-lien-quan/new','Leader\ShowRelevantRequestController@new_hn')->name('srequest_relev_new_leader_hn');
                Route::get('list-cong-viec-lien-quan/inprogress','Leader\ShowRelevantRequestController@inprogress_hn')->name('srequest_relev_inprogress_leader_hn');
                Route::get('list-cong-viec-lien-quan/resolved','Leader\ShowRelevantRequestController@resolved_hn')->name('srequest_relev_resolved_leader_hn');
                Route::get('list-cong-viec-lien-quan/outofdate','Leader\ShowRelevantRequestController@outofdate_hn')->name('srequest_relev_outofdate_leader_hn');
              
                
                //ROUTE CÔNG VIỆC CỦA TEAM HN
                Route::get('list-cong-viec-cua-team','Leader\ShowTeamRequestController@index_hn')->name('srequest_team_leader_hn');
                Route::get('list-cong-viec-cua-team/new','Leader\ShowTeamRequestController@new_hn')->name('srequest_team_new_leader_hn');
                Route::get('list-cong-viec-cua-team/inprogress','Leader\ShowTeamRequestController@inprogress_hn')->name('srequest_team_inprogress_leader_hn');
                Route::get('list-cong-viec-cua-team/resolved','Leader\ShowTeamRequestController@resolved_hn')->name('srequest_team_resolved_leader_hn');
                Route::get('list-cong-viec-cua-team/outofdate','Leader\ShowTeamRequestController@outofdate_hn')->name('srequest_team_outofdate_leader_hn');
            
                //ROUTE CÔNG VIỆC CỦA BPIT DN
                Route::get('list-cong-viec-cua-teamHN','Leader\ShowTeamDHController@index_hn')->name('srequest_teamHN_leader_hn');
                Route::get('list-cong-viec-cua-teamHN/new','Leader\ShowTeamDHController@new_hn')->name('srequest_teamHN_new_leader_hn');
                Route::get('list-cong-viec-cua-teamHN/inprogress','Leader\ShowTeamDHController@inprogress_hn')->name('srequest_teamHN_inprogress_leader_hn');
                Route::get('list-cong-viec-cua-teamHN/feedback','Leader\ShowTeamDHController@feedback_hn')->name('srequest_teamHN_resolved_leader_hn');
                Route::get('list-cong-viec-cua-teamHN/outofdate','Leader\ShowTeamDHController@outofdate_hn')->name('srequest_teamHN_outofdate_leader_hn');
                Route::get('list-cong-viec-cua-teamHN/closed','Leader\ShowTeamDHController@closed_hn')->name('srequest_teamHN_closed_leader_hn');
            
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
                
                // ROUTE VIỆC TÔI YÊU CẦU DN
                Route::get('list-toi-yeu-cau','Leader\ShowIndividualRequestController@index_dn')->name('srequest_indi_leader_dn');
                
                Route::get('list-toi-yeu-cau/new','Leader\ShowIndividualRequestController@new_dn')->name('srequest_indi_new_leader_dn');
                Route::get('list-toi-yeu-cau/inprogress','Leader\ShowIndividualRequestController@inprogress_dn')->name('srequest_indi_inprogress_leader_dn');
                Route::get('list-toi-yeu-cau/resolved','Leader\ShowIndividualRequestController@resolved_dn')->name('srequest_indi_resolved_leader_dn');
                Route::get('list-toi-yeu-cau/outofdate','Leader\ShowIndividualRequestController@outofdate_dn')->name('srequest_indi_outofdate_leader_dn');
                
                
               
               //ROUTE CÔNG VIỆC LIÊN QUAN HN
               Route::get('list-cong-viec-lien-quan','Leader\ShowRelevantRequestController@index_dn')->name('srequest_relev_leader_dn');
               Route::get('list-cong-viec-lien-quan/new','Leader\ShowRelevantRequestController@new_dn')->name('srequest_relev_new_leader_dn');
               Route::get('list-cong-viec-lien-quan/inprogress','Leader\ShowRelevantRequestController@inprogress_dn')->name('srequest_relev_inprogress_leader_dn');
               Route::get('list-cong-viec-lien-quan/resolved','Leader\ShowRelevantRequestController@resolved_dn')->name('srequest_relev_resolved_leader_dn');
               Route::get('list-cong-viec-lien-quan/outofdate','Leader\ShowRelevantRequestController@outofdate_dn')->name('srequest_relev_outofdate_leader_dn');
          
               //ROUTE CÔNG VIỆC CỦA BPIT DN
                Route::get('list-cong-viec-cua-teamDN','Leader\ShowTeamDHController@index_dn')->name('srequest_teamDN_leader_dn');
                Route::get('list-cong-viec-cua-teamDN/new','Leader\ShowTeamDHController@new_dn')->name('srequest_teamDN_new_leader_dn');
                Route::get('list-cong-viec-cua-teamDN/inprogress','Leader\ShowTeamDHController@inprogress_dn')->name('srequest_teamDN_inprogress_leader_dn');
                Route::get('list-cong-viec-cua-teamDN/feedback','Leader\ShowTeamDHController@feedback_dn')->name('srequest_teamDN_resolved_leader_dn');
                Route::get('list-cong-viec-cua-teamDN/outofdate','Leader\ShowTeamDHController@outofdate_dn')->name('srequest_teamDN_outofdate_leader_dn');
                Route::get('list-cong-viec-cua-teamDN/closed','Leader\ShowTeamDHController@closed_dn')->name('srequest_teamDN_closed_leader_dn');
                
                
                //ROUTE CÔNG VIỆC CỦA TEAM DN
                Route::get('list-cong-viec-cua-team','Leader\ShowTeamRequestController@index_dn')->name('srequest_team_leader_dn');
                Route::get('list-cong-viec-cua-team/new','Leader\ShowTeamRequestController@new_dn')->name('srequest_team_new_leader_dn');
                Route::get('list-cong-viec-cua-team/inprogress','Leader\ShowTeamRequestController@inprogress_dn')->name('srequest_team_inprogress_leader_dn');
                Route::get('list-cong-viec-cua-team/resolved','Leader\ShowTeamRequestController@resolved_dn')->name('srequest_team_resolved_leader_dn');
                Route::get('list-cong-viec-cua-team/outofdate','Leader\ShowTeamRequestController@outofdate_dn')->name('srequest_team_outofdate_leader_dn');
               
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
            
                // ROUTE VIỆC TÔI YÊU CẦU HN
                Route::get('list-toi-yeu-cau','Sub_Leader\ShowIndividualRequestController@index_hn')->name('srequest_indi_subleader_hn');
                Route::get('list-toi-yeu-cau/new','Sub_Leader\ShowIndividualRequestController@new_hn')->name('srequest_indi_new_subleader_hn');
                Route::get('list-toi-yeu-cau/inprogress','Sub_Leader\ShowIndividualRequestController@inprogress_hn')->name('srequest_indi_inprogress_subleader_hn');
                Route::get('list-toi-yeu-cau/resolved','Sub_Leader\ShowIndividualRequestController@resolved_hn')->name('srequest_indi_resolved_subleader_hn');
                Route::get('list-toi-yeu-cau/outofdate','Sub_Leader\ShowIndividualRequestController@outofdate_hn')->name('srequest_indi_outofdate_subleader_hn');

                //ROUTE CÔNG VIỆC LIÊN QUAN HN
                Route::get('list-cong-viec-lien-quan','Sub_Leader\ShowRelevantRequestController@index_hn')->name('srequest_relev_subleader_hn');
                Route::get('list-cong-viec-lien-quan/new','Sub_Leader\ShowRelevantRequestController@new_hn')->name('srequest_relev_new_subleader_hn');
                Route::get('list-cong-viec-lien-quan/inprogress','Sub_Leader\ShowRelevantRequestController@inprogress_hn')->name('srequest_relev_inprogress_subleader_hn');
                Route::get('list-cong-viec-lien-quan/resolved','Sub_Leader\ShowRelevantRequestController@resolved_hn')->name('srequest_relev_resolved_subleader_hn');
                Route::get('list-cong-viec-lien-quan/outofdate','Sub_Leader\ShowRelevantRequestController@outofdate_hn')->name('srequest_relev_outofdate_subleader_hn');
              
                
                //ROUTE CÔNG VIỆC CỦA TEAM HN
                Route::get('list-cong-viec-cua-team','Sub_Leader\ShowTeamRequestController@index_hn')->name('srequest_team_subleader_hn');
                Route::get('list-cong-viec-cua-team/new','Sub_Leader\ShowTeamRequestController@new_hn')->name('srequest_team_new_subleader_hn');
                Route::get('list-cong-viec-cua-team/inprogress','Sub_Leader\ShowTeamRequestController@inprogress_hn')->name('srequest_team_inprogress_subleader_hn');
                Route::get('list-cong-viec-cua-team/resolved','Sub_Leader\ShowTeamRequestController@resolved_hn')->name('srequest_team_resolved_subleader_hn');
                Route::get('list-cong-viec-cua-team/outofdate','Sub_Leader\ShowTeamRequestController@outofdate_hn')->name('srequest_team_outofdate_subleader_hn');
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
                
               // ROUTE VIỆC TÔI YÊU CẦU dn
               Route::get('list-toi-yeu-cau','Sub_Leader\ShowIndividualRequestController@index_dn')->name('srequest_indi_subleader_dn');
               Route::get('list-toi-yeu-cau/new','Sub_Leader\ShowIndividualRequestController@new_dn')->name('srequest_indi_new_subleader_dn');
               Route::get('list-toi-yeu-cau/inprogress','Sub_Leader\ShowIndividualRequestController@inprogress_dn')->name('srequest_indi_inprogress_subleader_dn');
               Route::get('list-toi-yeu-cau/resolved','Sub_Leader\ShowIndividualRequestController@resolved_dn')->name('srequest_indi_resolved_subleader_dn');
               Route::get('list-toi-yeu-cau/outofdate','Sub_Leader\ShowIndividualRequestController@outofdate_dn')->name('srequest_indi_outofdate_subleader_dn');

               //ROUTE CÔNG VIỆC LIÊN QUAN dn
               Route::get('list-cong-viec-lien-quan','Sub_Leader\ShowRelevantRequestController@index_dn')->name('srequest_relev_subleader_dn');
               Route::get('list-cong-viec-lien-quan/new','Sub_Leader\ShowRelevantRequestController@new_dn')->name('srequest_relev_new_subleader_dn');
               Route::get('list-cong-viec-lien-quan/inprogress','Sub_Leader\ShowRelevantRequestController@inprogress_dn')->name('srequest_relev_inprogress_subleader_dn');
               Route::get('list-cong-viec-lien-quan/resolved','Sub_Leader\ShowRelevantRequestController@resolved_dn')->name('srequest_relev_resolved_subleader_dn');
               Route::get('list-cong-viec-lien-quan/outofdate','Sub_Leader\ShowRelevantRequestController@outofdate_dn')->name('srequest_relev_outofdate_subleader_dn');
             
               
               //ROUTE CÔNG VIỆC CỦA TEAM dn
               Route::get('list-cong-viec-cua-team','Sub_Leader\ShowTeamRequestController@index_dn')->name('srequest_team_subleader_dn');
               Route::get('list-cong-viec-cua-team/new','Sub_Leader\ShowTeamRequestController@new_dn')->name('srequest_team_new_subleader_dn');
               Route::get('list-cong-viec-cua-team/inprogress','Sub_Leader\ShowTeamRequestController@inprogress_dn')->name('srequest_team_inprogress_subleader_dn');
               Route::get('list-cong-viec-cua-team/resolved','Sub_Leader\ShowTeamRequestController@resolved_dn')->name('srequest_team_resolved_subleader_dn');
               Route::get('list-cong-viec-cua-team/outofdate','Sub_Leader\ShowTeamRequestController@outofdate_dn')->name('srequest_team_outofdate_subleader_dn');
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
                
                // ROUTE công việc tôi yêu cầu
                Route::get('list-toi-yeu-cau','Member\ShowIndividualRequestController@index_hn')->name('srequest_indi_member_hn');
                Route::get('list-toi-yeu-cau/new','Member\ShowIndividualRequestController@new_hn')->name('srequest_indi_new_member_hn');
                Route::get('list-toi-yeu-cau/inprogress','Member\ShowIndividualRequestController@inprogress_hn')->name('srequest_indi_inprogress_member_hn');
                Route::get('list-toi-yeu-cau/resolved','Member\ShowIndividualRequestController@resolved_hn')->name('srequest_indi_resolved_member_hn');
                Route::get('list-toi-yeu-cau/outofdate','Member\ShowIndividualRequestController@outofdate_hn')->name('srequest_indi_outofdate_member_hn');
                
                // ROUTE CÔNG VIỆC LIÊN QUAN
                Route::get('list-cong-viec-lien-quan','Member\ShowRelevantRequestController@index_hn')->name('srequest_relev_member_hn');
                Route::get('list-cong-viec-lien-quan/new','Member\ShowRelevantRequestController@new_hn')->name('srequest_relev_new_member_hn');
                Route::get('list-cong-viec-lien-quan/inprogress','Member\ShowRelevantRequestController@inprogress_hn')->name('srequest_relev_inprogress_member_hn');
                Route::get('list-cong-viec-lien-quan/resolved','Member\ShowRelevantRequestController@resolved_hn')->name('srequest_relev_resolved_member_hn');
                Route::get('list-cong-viec-lien-quan/outofdate','Member\ShowRelevantRequestController@outofdate_hn')->name('srequest_relev_outofdate_member_hn');
               
               
               //ROUTE CÔNG VIỆC TÔI ĐƯỢC GIAO
                Route::get('list-toi-duoc-giao','Member\ShowAssignRequestController@index_hn')->name('srequest_assi_member_hn');
                Route::get('list-toi-duoc-giao/new','Member\ShowAssignRequestController@new_hn')->name('srequest_assi_new_member_hn');
                Route::get('list-toi-duoc-giao/inprogress','Member\ShowAssignRequestController@inprogress_hn')->name('srequest_assi_inprogress_member_hn');
                Route::get('list-toi-duoc-giao/resolved','Member\ShowAssignRequestController@resolved_hn')->name('srequest_assi_resolved_member_hn');
                Route::get('list-toi-duoc-giao/outofdate','Member\ShowAssignRequestController@outofdate_hn')->name('srequest_assi_outofdate_member_hn');

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
                
                // ROUTE công việc tôi yêu cầu
                Route::get('list-toi-yeu-cau','Member\ShowIndividualRequestController@index_dn')->name('srequest_indi_member_dn');
                Route::get('list-toi-yeu-cau/new','Member\ShowIndividualRequestController@new_dn')->name('srequest_indi_new_member_dn');
                Route::get('list-toi-yeu-cau/inprogress','Member\ShowIndividualRequestController@inprogress_dn')->name('srequest_indi_inprogress_member_dn');
                Route::get('list-toi-yeu-cau/resolved','Member\ShowIndividualRequestController@resolved_dn')->name('srequest_indi_resolved_member_dn');
                Route::get('list-toi-yeu-cau/outofdate','Member\ShowIndividualRequestController@outofdate_dn')->name('srequest_indi_outofdate_member_dn');
                
                // ROUTE CÔNG VIỆC LIÊN QUAN
                Route::get('list-cong-viec-lien-quan','Member\ShowRelevantRequestController@index_dn')->name('srequest_relev_member_dn');
                Route::get('list-cong-viec-lien-quan/new','Member\ShowRelevantRequestController@new_dn')->name('srequest_relev_new_member_dn');
                Route::get('list-cong-viec-lien-quan/inprogress','Member\ShowRelevantRequestController@inprogress_dn')->name('srequest_relev_inprogress_member_dn');
                Route::get('list-cong-viec-lien-quan/resolved','Member\ShowRelevantRequestController@resolved_dn')->name('srequest_relev_resolved_member_dn');
                Route::get('list-cong-viec-lien-quan/outofdate','Member\ShowRelevantRequestController@outofdate_dn')->name('srequest_relev_outofdate_member_dn');
               
               
               //ROUTE CÔNG VIỆC TÔI ĐƯỢC GIAO
                Route::get('list-toi-duoc-giao','Member\ShowAssignRequestController@index_dn')->name('srequest_assi_member_dn');
                Route::get('list-toi-duoc-giao/new','Member\ShowAssignRequestController@new_dn')->name('srequest_assi_new_member_dn');
                Route::get('list-toi-duoc-giao/inprogress','Member\ShowAssignRequestController@inprogress_dn')->name('srequest_assi_inprogress_member_dn');
                Route::get('list-toi-duoc-giao/resolved','Member\ShowAssignRequestController@resolved_dn')->name('srequest_assi_resolved_member_dn');
                Route::get('list-toi-duoc-giao/outofdate','Member\ShowAssignRequestController@outofdate_dn')->name('srequest_assi_outofdate_member_dn');
            });
               
          
        });
    });

?>