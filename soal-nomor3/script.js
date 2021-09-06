let a = '';
let n = 5;
let m = (n-1); 
let tes = 1;



let dumbways = " dumbways".toUpperCase();
let nilai = 0;
for(i=1; i <= n; i++) {
    nilai++;
    a = a.trim();
    a = ' '.repeat(m) + a + (i > 1 ? ' ' : '') + dumbways[i];

    console.log(a);
    m--;
}






