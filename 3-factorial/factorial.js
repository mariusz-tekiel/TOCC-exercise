// To calulate factorial of given number I use the recursive function

function factorial(num){
    if(num<0){
        return;
    }
    if(num===0){
        return 1;
    }

    return(num*factorial(num-1))
}

console.log(factorial(6)); // 720