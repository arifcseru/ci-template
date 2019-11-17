// fileChangeAction(this,'#profilePicUploadedImage','#applicantInfo_profilePic')
function fileChangeAction(element,imageDiv,valueField) {
	var fileToLoad = element.files[0];

	var fileReader = new FileReader();

	fileReader.onload = function(fileLoadedEvent) {
		var srcData = fileLoadedEvent.target.result; // <--- data: base64
                $(imageDiv).show();
		$(imageDiv+' img').attr('src', srcData);
		$(valueField).val(srcData);
	}
	fileReader.readAsDataURL(fileToLoad);
}
//fileClearAction('#profilePicUploadedImage','#applicantInfo_profilePic','#applicantInfo_profilePic_file')
function fileClearAction(imageDiv,valueField,file){
    $(imageDiv).hide();
    $(valueField).val('');
    $(file).val(null);
    return false;
}

function commonScreenRenderer(url, containerId) {
    $('#loadingDiv').show();
    $.ajax({
        url : url,
        type : "GET",
        data : {

        },
        success : function(data) {
            if (data.indexOf("<html lang=")!=-1){
                console.log(data);
                location.href="/login";
                
                $(containerId).html(data);
                $('#loadingDiv').hide();
                
            }else{
                $(containerId).html(data);
                $('#loadingDiv').hide();
            }   
        },
        error : function() {
                $('#loadingDiv').hide();
                console.log('Error to render screen');
                //location.href="/";
        }
    });
}
function loadCommonPopupDialog(title, containerId, url, height, width) {
    $('#loadingDiv').show();
    $(containerId).html('');
    $(containerId).dialog({
        autoOpen : true,
        title : title,
        height : height,
        width : width,
        modal : true,
        open : function() {
            $.ajax({
                    url : url,
                    type : "GET",
                    data : {

                    },
                    success : function(data) {
                            $('#loadingDiv').hide();
                            $(containerId).css("z-index","24000");
                            $(containerId).html(data);

                    },
                    error : function(){
                            $('#loadingDiv').hide();
                    }
            });
            $('#loadingDiv').hide();
        }
    });
}
function loadDependentDropdownList(parentElement,childElement,controllerName){
    var parentId =  $(parentElement).val();
    if ( parentId !=undefined && parentId !="") {
        var url = "/common/"+controllerName+"/"+parentId;
        $.ajax({
                type : "GET",
                url : url,
                data : {

                },
                contentType : "application/json",
                success : function(childList) {
                        $(childElement+" option").remove();
                        $(childElement).append('<option value="">-Select--</option>');
                    $.each(childList, function(){
                        $(childElement).append('<option value="'+ this.value +'">'+ this.label +'</option>');
                     });
                },
                error : function(err) {
                        console.log(err);
                }
        });
    }
}

