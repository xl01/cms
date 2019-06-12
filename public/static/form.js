/**
 * 异步表单提交类
 */
function FormHelper(){
    //上传触发按钮
    this.button='';
    //上传的表单
    this.form='';
    //表单提交url地址
    this.url='';
    //跳转的url地址
    this.tourl='';
}
FormHelper.prototype={
    
    init:function(){
        if(this.checkData()==false){
            return;
        }
        this.bindEvent();
    },
    checkData(){
        //校验数据
        if(this.button !='' && this.form !='' && this.url != '' && this.tourl !=''){
            return true;
        }
        return false;
    },
    bindEvent(){
        var that=this;
        $(that.button).on({click:function(){
            var data=$(that.form).serializeArray();
            postData={};
            $(data).each(function(i){
                postData[this.name]=this.value;
            });
            // console.log(postData);
            //将数据post给服务器
            $.post(that.url,postData,function(res){
                if(res.status==1){
                    //成功
                    return dialog.success(res.message,that.tourl);
                }else if(res.status==0){
                    return dialog.error(res.message);
                }
            },'json');

        }
        });
    }
}