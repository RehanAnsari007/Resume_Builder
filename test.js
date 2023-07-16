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
    
    function addNewWE(){
        let newNode=document.createElement('textarea');
        newNode.classList.add('form-control');
        newNode.classList.add('Work-info');
        newNode.classList.add('mt-3');
        newNode.setAttribute('rows',3);
        newNode.setAttribute('placeholder',"Your Work Experience here");
        
        let WEOb=document.getElementById('WE');
        let WEAddbuttonOb=document.getElementById('weAddbutton');
        
        
        WEOb.insertBefore(newNode,WEAddbuttonOb);
        
        }