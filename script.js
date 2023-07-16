function addNewEducationinfo(){
let newNode=document.createElement('textarea');
newNode.classList.add('form-control');
newNode.classList.add('Education-info');
newNode.classList.add('mt-3');
newNode.setAttribute('rows',2);
newNode.setAttribute('placeholder',"Your Education info here");

let EIOb=document.getElementById('EI');
let EIAddbuttonOb=document.getElementById('EIAddbutton');


EIOb.insertBefore(newNode,EIAddbuttonOb);

}
$(document).ready(function(){
    //group add limit
    var maxGroup = 3;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup" id="WE">'+$(".fieldGroupcopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });

    //remove fields group
    $("body").on("click",".Remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });




});

$(document).ready(function(){
    //group add limit
    var maxGroup = 2;
    
    //add more fields group
    $(".addMoreedu").click(function(){
        if($('body').find('.fieldGroup2').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup2" id="WE">'+$(".fieldGroup2copy").html()+'</div>';
            $('body').find('.fieldGroup2:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });

    //remove fields group
    $("body").on("click",".eduRemove",function(){ 
        $(this).parents(".fieldGroup2").remove();
    });
});