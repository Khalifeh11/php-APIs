var xInput = document.getElementById("xInput");
var yInput = document.getElementById("yInput");
const result = document.getElementById("result");




const button = document.getElementById("button");
button.addEventListener("click", function (e) {
  e.preventDefault();   
  fetchComputeAPI();
});

async function fetchComputeAPI() {
    try{    
        const response = await fetch(
            `http://localhost/php-assignment/APIs/computeAPI.php?x=${xInput.value}&y=${yInput.value}`,
        );
        const data = await response.json();
        console.log(data);
        if (data.x == "Invalid"){
            alert("Invalid x input")
        }if (data.y == "Invalid"){
            alert("Invalid y input")
        }else{
            result.textContent = data.compute
        }
        return data   
    }catch(error){
        console.log(error);
        throw "fetchComputeApi Error"
    }
   
}

const palindromeString = document.getElementById("palindrome-string");
const palindromeButton = document.getElementById("palindrome-button");
const palindromeResult = document.getElementById("palindrome-result");

palindromeButton.addEventListener("click", function(e){
    e.preventDefault();
    fetchPalindromeAPI();
})

async function fetchPalindromeAPI() {
    try{    
        const response = await fetch(
            `http://localhost/php-assignment/APIs/PalindromAPI.php?string=${palindromeString.value}`,
        );
        const data = await response.json();
        console.log(data);
        if (data.palindrome == "Invalid"){
            alert("Invalid input");
        }else{
            palindromeResult.textContent = data.palindrome;
        }
        return data   
    }catch(error){
        console.log(error);
        throw "fetch palindrome API Error"
    }
   
}


const stringToTrim = document.getElementById("trim-string");
const trimButton = document.getElementById("trim-button");
const trimResult = document.getElementById("trim-result");

trimButton.addEventListener("click", function(e){
    e.preventDefault();
    fetchTrimApi();
})


async function fetchTrimApi() {
    try{    
        const response = await fetch(
            `http://localhost/php-assignment/APIs/spaceRemoverAPI.php?string=${stringToTrim.value}`,
        );
        const data = await response.json();
        console.log(data);
        if (data.newString == "Invalid"){
            alert("Invalid input");
        }else{
            trimResult.textContent = data.newString;    
        }
        return data   
    }catch(error){
        console.log(error);
        throw "space remover api Error"
    }
   
}

const passwordInput = document.getElementById("password-input");
const passwordButton = document.getElementById("password-button");
const passwordCheck = document.getElementById("password-checker");

passwordButton.addEventListener("click", function(e){
    e.preventDefault();
    fetchPasswordApi();
})


async function fetchPasswordApi() {
    try{
        //fetching response object
        const response = await fetch(
            `http://localhost/php-assignment/APIs/passwordAPI.php?password=${passwordInput.value}`,
        );
        // turning response object into json 
        const data = await response.json();
        console.log(data);
        //in passwordAPI.php if password input length < 8 viable password = 1
        if (data.viablePassword == false && passwordInput.value.length < 8){
            alert("password should contain at least 8 characters");
        }else if(data.viablePassword == true){
            passwordCheck.textContent = "Success";
        }else{
            alert("Password should contain at least 1 digit and 1 alphabet");
        }
        return data
    //catching in case of response error
    }catch(error){
        console.log(error);
        throw "password api Error"
    }
   
}




