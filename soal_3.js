function randomnum3(n) {
    if(n>=0){
        var arr=[n];
        while (n>1) {
        if (n % 2 === 0){
            n=n/2;
        }else{
            n=(3*n)+1;
        }
        arr.push(n);
        }
        //return arr; // use arr result on your own
        console.log(arr);
        console.log(arr.length);
    }else{
    console.log("negative not allowed");}
    }
    
    //getRandom(display(30),5);
    randomnum3(10)