window.onload = function () {
    var eachList = document.getElementsByClassName('has-child-list');
    for(let i = 0; i < eachList.length; i++) {
      eachList[i].addEventListener("click", function(e) {
        var myparent = e.target.parentElement;
        if(myparent.getElementsByClassName('sub-menu')[0]){
            if(hasClass(myparent.getElementsByClassName('sub-menu')[0],'show')){
                removeClass(e.target,'black-down');
                removeClass(myparent.getElementsByClassName('sub-menu')[0],'show');
                addClass(myparent.getElementsByClassName('sub-menu')[0],'hide');
            }else{
                addClass(e.target,'black-down')    
                removeClass(myparent.getElementsByClassName('sub-menu')[0],'hide');
                addClass(myparent.getElementsByClassName('sub-menu')[0],'show');
            }
        } 
      });
    }
}
function addClass(el, className) {
    if (hasClass(el, className)) {
        return
    }
    let newClass = el.className.split(' ')
        newClass.push(className)
        el.className = newClass.join(' ')
}
function hasClass(el, className) {
    let reg = new RegExp('(^|\\s)' + className + '(\\s|$)')
    return reg.test(el.className)
}
function removeClass(el, className){
    if (!hasClass(el, className)) {
        return
    }
    let newClass = el.className.split(' ')
    newClass.forEach(function(val, index, newClass){
        if(val === className){
            newClass.splice(index,1);
        }
    }) 
    el.className = newClass.join(' ')
}