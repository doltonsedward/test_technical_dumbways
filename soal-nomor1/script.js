let loveBird = 6969;
let jmlhYangMati;
let waktu = 21;


for (let i = 1; i <= waktu; i++) {
    jmlhYangMati = loveBird * 0.111;
    loveBird -= jmlhYangMati;
}

console.log(Math.floor(loveBird));
