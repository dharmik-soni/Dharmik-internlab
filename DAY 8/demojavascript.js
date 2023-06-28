function alertExternal(){
    alert('Hello Guys')
}
function confirmExternal(){
    if(confirm('are you sure..')){
        alert('yess')
    }
    else{
        alert('Nooo')
    }
}
function promptExternal(){
    var fName = prompt('Enter Firstname here')
    var lName = prompt('Enter Lastname here')
     alert(fName+" "+lName)
}