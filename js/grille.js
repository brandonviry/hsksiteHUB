// function code(nb){
//     return String.fromCharCode(('a'.charCodeAt(0))+nb);
// }

function code(nb){
    return ('a'.charCodeAt(0))+nb;
}

function grille(x,y,origine) {
    // let piece =["roi","dame","fous","cavaliers","tours","fous","cavaliers","tours","pions","pions","pions","pions","pions","pions","pions","pions"];
    let piece =["R","D","F","C","T","F","C","T","P","P","P","P","P","P","P","P"];
    let taille =  piece.length
    for (let i =taille ; i < taille+100; i++) {
       piece[i] = "";
    }



  
    
    let grille = "";
    let nbN = 0;
    for (let zone = 0; zone < x; zone++) {
        grille+="<div style=\"display:flex;flex-wrap:nowrap;\">";
        for (let elt = 0; elt < y; elt++) {
            let lapiece = piece[alea(0,piece.length-1)];
            if(lapiece ==""){
                grille+="<div class=\"case\"><span  class=\"piece\">"+lapiece+"</span></div>";
            }
            else{
                grille+="<div id=\""+code(nbN)+"\"class=\"case\"><span  class=\"piece\">"+lapiece+"</span></div>";
                nbN++;
            }
           
            
        }
        grille+="</div>";
    }
    document.getElementsByTagName(origine)[0].innerHTML = grille;
    console.log(piece);
}

function alea(min, max) { 
    return( Math.floor(Math.random() * (max - min) + min)); 
    
}
function inn(lst,elt){
    for (let index = 0; index < lst.length; index++) {
        if (lst[index] == elt) {
            return true;     
        }
        
    }
    return false;
}
function lstAlea(nb, min, max) {
    let lst = [];
    let actu=0;
    while(actu < nb)
    {   let tempomega =  alea( min, max);
        while(inn(lst,tempomega))
       { 
        tempomega =  alea( min, max);
        
       }
       lst[actu] = tempomega;
        actu++;
    }

    return lst;
}


const pageWidth  = document.documentElement.scrollWidth;
const pageHeight = document.documentElement.scrollHeight;
let nbPagesH = pageHeight/50;
let nbPagesW = pageWidth/50;
console.log(nbPagesH, nbPagesW);
grille(nbPagesH,nbPagesW,"section");

document.getElementById('dialog').style.width = pageWidth/ 4 ;
document.getElementById('dialog').style.height = pageHeight/ 4 ;

console.log(lstAlea(10, 0, 10));
