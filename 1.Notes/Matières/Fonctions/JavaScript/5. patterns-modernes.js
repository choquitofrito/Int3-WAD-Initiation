// Patterns Modernes des Fonctions JavaScript

// 1. Destructuration dans les paramètres
function configurer({ port = 8080, host = 'localhost', protocol = 'http' } = {}) {
    console.log(`${protocol}://${host}:${port}`);
}

configurer({ port: 3000 }); // http://localhost:3000

// 2. Rest parameters et Spread operator
function sum(...numbers) {
    return numbers.reduce((total, num) => total + num, 0);
}

const numbers = [1, 2, 3];
console.log(sum(...numbers)); // 6

// 3. Curryfication
const multiply = (a) => (b) => a * b;
const multiplyByTwo = multiply(2);
console.log(multiplyByTwo(4)); // 8

// 4. Composition de fonctions
const compose = (...fns) => x => fns.reduceRight((y, f) => f(y), x);
const addOne = x => x + 1;
const double = x => x * 2;
const addOneThenDouble = compose(double, addOne);
console.log(addOneThenDouble(3)); // 8

// 5. Memoization
function memoize(fn) {
    const cache = new Map();
    return (...args) => {
        const key = JSON.stringify(args);
        if (cache.has(key)) return cache.get(key);
        const result = fn.apply(this, args);
        cache.set(key, result);
        return result;
    };
}

const expensiveOperation = memoize((n) => {
    console.log('Calculating...');
    return n * 2;
});

// 6. Pipeline operator (proposition TC39)
// Simulation avec une fonction
const pipe = (...fns) => x => fns.reduce((y, f) => f(y), x);
const processData = pipe(
    addOne,
    double,
    String
);
console.log(processData(3)); // "8"

// 7. Fonctions génératrices
function* numberGenerator() {
    yield 1;
    yield 2;
    yield 3;
}

const gen = numberGenerator();
console.log([...gen]); // [1, 2, 3]

// 8. Fonctions asynchrones génératrices
async function* asyncNumberGenerator() {
    for (let i = 0; i < 3; i++) {
        await new Promise(resolve => setTimeout(resolve, 1000));
        yield i;
    }
}

// Utilisation avec for await...of
async function useGenerator() {
    for await (const num of asyncNumberGenerator()) {
        console.log(num);
    }
}

// 9. Partial Application
const partial = (fn, ...args) => (...moreArgs) => fn(...args, ...moreArgs);
const add = (a, b, c) => a + b + c;
const add5and10 = partial(add, 5, 10);
console.log(add5and10(15)); // 30

// 10. Point-free style
const filter = pred => arr => arr.filter(pred);
const map = fn => arr => arr.map(fn);
const isEven = n => n % 2 === 0;
const processNumbers = pipe(
    filter(isEven),
    map(double)
);
console.log(processNumbers([1, 2, 3, 4])); // [4, 8]
