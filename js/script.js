// console.log('ok');

// Ref

document.getElementById('add')


const arrayPrice = [];

let sum = 0;



function addToChart(price) {
    // console.log('ok');

    let sum = 0;
    let priceC = price;
    arrayPrice.push(priceC);

    for (let i = 0; i < arrayPrice.length; i++) {
        sum += arrayPrice[i];
    }
    console.log(arrayPrice)
    console.log(sum);


}