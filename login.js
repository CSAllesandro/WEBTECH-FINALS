var users = [
    {
        username:"yawa",
        password:"yawa123"
    },
    {
        username:"awit",
        password:"awit123"
    },
    {
        username:"fk",
        password:"fk123"
    }
]

function getData() {

    var username = document.getElementById("User").value
    var password = document.getElementById("Pass").value

    for(i=0; i<users.length; i++){
        if(username == users[i].username && password == users[i].password){
            alert("Login Connected")
            break;
        }else{
            alert("Access Denied")
        }
    }
}