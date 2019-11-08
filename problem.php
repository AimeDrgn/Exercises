//Suma primelor n numerere Recursivitate
function sumaRec($n){
    if($n==0){
        return 0;
    }else{
            return sumaRec($n - 1) + $n;
        }
    }
}

echo sumaRec(3);

//-------------------------------------
                            // Suma primelor n numere Pare/Impare - recursivitate
function sumaRecPare($n){
    if($n==0){
        return 0;
    }else{
        if($n%2==0) {
            return sumaRecPare($n - 2) + $n;
        }else{
            return sumaRecPare($n - 2) + $n;
        }
    }
}

echo sumaRecPare(3);
///--------------------------------------------------

function sumaNonRec($n){
    $sum=0;
    while($n>=1){
        $sum += $n;
        $n--;

    }return $sum;
}

echo sumaNonRec(12);
