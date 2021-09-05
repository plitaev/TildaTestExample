function set_result(question_id,value) {
 $('#q'+question_id).val(value);
 
 $('.ref'+question_id).css('background','#ffffff');
 $('.ref'+question_id).css('color','#202020');
 $('#ref_'+question_id+'_'+value).css('background','#f5ddd5');
 $('#ref_'+question_id+'_'+value).css('border-color','#f5ddd5');
 
 $('.img'+question_id).attr('src','images/test_selector_0.png');
 $('#img_'+question_id+'_'+value).attr('src','images/test_selector_1.png');
 
 var q1=$('#q1').val();
 var q2=$('#q2').val();
 var q3=$('#q3').val();
 var q4=$('#q4').val();
 
 if (q1>0 && q2>0 && q3>0 && q4>0) {
    var qsum=0;
    qsum+=parseInt(q1);
    qsum+=parseInt(q2);
    qsum+=parseInt(q3);
    qsum+=parseInt(q4);
    
    console.log(qsum);
    
 } 
}