function sendMsg(){
    
    let msg=document.getElementById('chatInput').value;
    console.log(msg)
    var b=document.getElementById('chatBody');
    var a = document.createElement("p");
    a.innerHTML = msg; 
    b.appendChild(a);
    
}