$(document).ready(function(){

    //delete_box
    var doc_height=$(document).height();
    var doc_width=$(document).width();
    $('#deletBlack').css({height:doc_height,width:doc_width});
    $('#delet').css({height:doc_height,width:doc_width});
    $('#newsNo').click(function(){
      $('#DeleteBox').hide(); 
      $('#DeleteBox1').hide(); 
    })
    $('.deleteBut').click(function(){
        $('#DeleteBox').show();
        window.Img=$(this).attr('alt');
        window.Id=$(this).attr('title');
        window.delButton=$(this);
    })
    //end Delete_box

    //Delete_menu
    $('#menuNo').click(function(){
      $('#menuDelete').hide();
    })
    $('.deleteMenu').click(function(){
        $('#menuDelete').show();
        window.menuImg=$(this).attr('alt');
        window.menuId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('.menuYes').click(function(){
        var deleteMenu=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/deleteMenu',
            data:{menuId:menuId,menuImg:menuImg},
            success:function(deleteMenu){
                if(deleteMenu==1){
                    delButton.parent().parent().fadeOut(500);
                    $('#menuDelete').hide();
                }
            }
        })
    })

    //Delete_menu_slider
    $('#slideNo').click(function(){
        $('#slidDelete').hide();
    })
    $('.deleteSlid').click(function(){
        $('#slidDelete').show();
        window.slidImg=$(this).attr('alt');
        window.slidId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('.slidYes').click(function(){
        var deleteSlid=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/deleteSlid',
            data:{slidId:slidId,slidImg:slidImg},
            success:function(deleteSlid){
                if(deleteSlid==1){
                    delButton.parent().fadeOut(500);
                    $('#slidDelete').hide();
                }
            }
        })
    })
    //Delete_menu_video
    $('#videoNo').click(function(){
        $('#videoDelete').hide();
    })
    $('.deleteVideo').click(function(){
        $('#videoDelete').show();
        window.videoId=$(this).attr('alt');
        window.delButton=$(this);
    })

    $('.videoYes').click(function(){
        var deleteVideo=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/deleteVideo',
            data:{videoId:videoId,},
            success:function(deleteVideo){
                if(deleteVideo==1){
                    delButton.parent().fadeOut(500);
                    $('#videoDelete').hide();
                }
            }
        })
    })
    //Delete_parent_menu
    $('#parentMenuNo').click(function(){
        $('#parentMenuDelete').hide();
    })
    $('.deleteParentMenu').click(function(){
        $('#parentMenuDelete').show();
        window.parentMenuImg=$(this).attr('alt');
        window.parentMenuId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('.parentMenuYes').click(function(){
        var deleteParentMenu=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/deleteParentMenu',
            data:{parentMenuId:parentMenuId,parentMenuImg:parentMenuImg},
            success:function(deleteParentMenu){
                if(deleteParentMenu==1){
                    delButton.parent().parent().fadeOut(500);
                    $('#parentMenuDelete').hide();
                }
            }
        })
    })

    //Delete_parent_menu_slide
    $('#parentSlideNo').click(function(){
        $('#parentSlideDelete').hide();
    })
    $('.deleteParentSlide').click(function(){
        $('#parentSlideDelete').show();
        window.parentSlideImg=$(this).attr('alt');
        window.parentSlideId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('.parentSlideYes').click(function(){
        var deleteParentSlide=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/deleteParentSlid',
            data:{parentSlideId:parentSlideId,parentSlideImg:parentSlideImg},
            success:function(deleteParentSlide){
                if(deleteParentSlide==1){
                    delButton.parent().fadeOut(500);
                    $('#parentSlideDelete').hide();
                }
            }
        })
    })

    //Delete_parent_video
    $('#parentVideoNo').click(function(){
        $('#parentVideo').hide();
    })
    $('.parentVideo').click(function(){
        $('#parentVideo').show();
        window.videoId=$(this).attr('alt');
        window.delButton=$(this);
    })

    $('.parentVideoYes').click(function(){
        var deleteVideo=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/deleteParentVideo',
            data:{videoId:videoId,},
            success:function(deleteVideo){
                if(deleteVideo==1){
                    delButton.parent().fadeOut(500);
                    $('#parentVideo').hide();
                }
            }
        })
    })

    //delete_box
     $('#boxNo').click(function(){
        $('#deleteboxes').hide();
    })
    $('.deletebox').click(function(){
        $('#deleteboxes').show();
        window.boxImg=$(this).attr('alt');
        window.boxId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('.boxYes').click(function(){
        var deletebox=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/boxDelete',
            data:{boxId:boxId,boxImg:boxImg},
            success:function(deletebox){
                if(deletebox=1){
                    delButton.parent().parent().fadeOut(500);
                    $('#deleteboxes').hide();
                    console.log(deletebox);
                }
            }
        })
    })

    //delete_parent_box
    $('#parentboxNo').click(function(){
        $('#parentbox').hide();
    })
    $('.parentBox').click(function(){
        $('#parentbox').show();
        window.parentBoxId=$(this).attr('alt');
        window.delButton=$(this);
    })

    $('.parentboxYes').click(function(){
        var parentbox=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/parentBoxDelete',
            data:{parentBoxId:parentBoxId,},
            success:function(parentbox){
                if(parentbox==1){
                    delButton.parent().fadeOut(500);
                    $('#parentbox').hide();
                }
            }
        })
    })

    //Delete_reclame
    $('#reclameNo').click(function(){
        $('#reclameDelete').hide();
    })
    $('.deleteReclame').click(function(){
        $('#reclameDelete').show();
        window.recId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('.reclameYes').click(function(){
        var deleteReclame=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/reclameDelete',
            data:{recId:recId,},
            success:function(deleteReclame){
                if(deleteReclame==1){
                    delButton.parent().parent().fadeOut(500);
                    $('#reclameDelete').hide();
                }
            }
        })
    })

    //Delete_Slider
    $('#No').click(function(){
        $('#boxDelete').hide();
    })
    $('.deleteSlid').click(function(){
        $('#boxDelete').show();
        window.slidImg=$(this).attr('alt');
        window.slidId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('#Yes').click(function(){
        var deleteSlid=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/slideDelete',
            data:{slidId:slidId,slidImg:slidImg},
            success:function(deleteSlid){
                if(deleteSlid==1){
                    delButton.parent().parent().fadeOut(500);
                    $('#boxDelete').hide();
                }
            }
        })
    })

    //Delete_Gallery
    $('#No').click(function(){
        $('#galleryDeleteView').hide();
    })
    $('.galleryDeleteButton').click(function(){
        $('#galleryDeleteView').show();
        window.galleryImg=$(this).attr('alt');
        window.galleryId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('.YesGallery').click(function(){
        var galleryDeleteButton=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/galleryDelete',
            data:{galleryId:galleryId,galleryImg:galleryImg},
            success:function(galleryDeleteButton){
                if(galleryDeleteButton==1){
                    delButton.parent().parent().fadeOut(500);
                    $('#galleryDeleteView').hide();
                }
            }
        })
    })

    //Delete_Partners
    $('#No').click(function(){
        $('#partnersDeleteView').hide();
    })
    $('.partnersDeleteButton').click(function(){
        $('#partnersDeleteView').show();
        window.partnersImg=$(this).attr('alt');
        window.partnersId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('.YesPartners').click(function(){
        var partnersDeleteButton=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/partnersDelete',
            data:{partnersId:partnersId,partnersImg:partnersImg},
            success:function(partnersDeleteButton){
                if(partnersDeleteButton==1){
                    delButton.parent().parent().fadeOut(500);
                    $('#partnersDeleteView').hide();
                }
            }
        })
    })

    //Delete_aboutGallery
    $('#No').click(function(){
        $('#aboutGalleryDeleteView').hide();
    })
    $('.aboutGalleryDeleteButton').click(function(){
        $('#aboutGalleryDeleteView').show();
        window.aboutGalleryImg=$(this).attr('alt');
        window.aboutGalleryId=$(this).attr('title');
        window.delButton=$(this);
    })

    $('.YesAboutGallery').click(function(){
        var aboutGalleryDeleteButton=0;
        $.ajax({
            type:'POST',
            url:'/SiteEdit/aboutGalleryDelete',
            data:{aboutGalleryId:aboutGalleryId,aboutGalleryImg:aboutGalleryImg},
            success:function(aboutGalleryDeleteButton){
                if(aboutGalleryDeleteButton==1){
                    delButton.parent().parent().fadeOut(500);
                    $('#aboutGalleryDeleteView').hide();
                }
            }
        })
    })

    $(".lang-change-admin .arm-click").click(function(){
        $('.arm-click').css({"background-color": "#444444", "color": "#ffffff"});
        $('.rus-click').css({"background-color": "transparent", "color": "#444444"});
        $('.eng-click').css({"background-color": "transparent", "color": "#444444"});
        $('.lang-arm').show();
        $('.lang-rus').hide();
        $('.lang-eng').hide();
    }) 
    $(".lang-change-admin .rus-click").click(function(){
        $('.arm-click').css({"background-color": "transparent", "color": "#444444"});
        $('.rus-click').css({"background-color": "#444444", "color": "#ffffff"});
        $('.eng-click').css({"background-color": "transparent", "color": "#444444"});
        $('.lang-arm').hide();
        $('.lang-rus').show();
        $('.lang-eng').hide();
    }) 
    $(".lang-change-admin .eng-click").click(function(){
        $('.arm-click').css({"background-color": "transparent", "color": "#444444"});
        $('.rus-click').css({"background-color": "transparent", "color": "#444444"});
        $('.eng-click').css({"background-color": "#444444", "color": "#ffffff"});
        $('.lang-arm').hide();
        $('.lang-rus').hide();
        $('.lang-eng').show();
    }) 


    //Opening_description_add
    $(".open").click(function(){
        $(".addmenu").slideToggle();
    });

    //Height_cols_left_and_right
    var height = $(window).height();
    $('.right_col').css('min-height',height+'px');
    $('.left_col').css('min-height',height+'px');

    //Redactor_description
    function tinyMceInit() {
        tinymce.init({
            selector: "textarea.TinyMCE",
            language: 'ru',
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor moxiemanager youtube"
            ],
            toolbar1: "styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | forecolor backcolor ",
            toolbar2: "link image insertfile media | pagebreak paste  hr spellchecker  visualblocks visualchars inserttime insertdate charmap searchreplace removeformat inserttable",
            toolbar3: " undo redo | print preview code fullscreen | youtube"
            // toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | youtube"
        });
    }
    tinyMceInit();
   
})

