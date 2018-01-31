/**
 * Created by rehellinen on 2017/10/18.
 */

$(function() {
    $("#file_upload").uploadify({
        'swf'             :    URL.swf_url,
        'uploader'       :    URL.video_url,
        'buttonText'     :   '视频上传',
        'fileTypeDesc'   :   '视频',
        'fileObjName'    :   'video',
        //'fileTypeExts'   :   '*.gif; *.jpg; *.png',
        'onUploadSuccess' : function(file, data, response) {
            if(response){
                var obj = JSON.parse(data);
                $("#upload_org_code_video").attr("src", obj.data);
                $("#upload_org_code_video").show();
                $("#file_upload_video").attr("value", obj.data);
            }
        }
    });
});