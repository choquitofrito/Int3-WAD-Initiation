// Async/Await en JavaScript

// 1. Fonctions asynchrones
async function getData() {
    try {
        const response = await fetch('https://api.example.com/data');
        const data = await response.json();
        return data;
    } catch (error) {
        console.error("Erreur:", error);
        throw error;
    }
}

// 2. Utilisation avec try/catch
async function processData() {
    try {
        const data = await getData();
        const processed = await traiterDonneesPromise(data);
        console.log("Données traitées:", processed);
    } catch (error) {
        console.error("Erreur lors du traitement:", error);
    }
}

// 3. Exécution parallèle avec async/await
async function getMultipleData() {
    try {
        // Exécution parallèle
        const [data1, data2] = await Promise.all([
            getData(),
            traiterDonneesPromise([1, 2, 3])
        ]);
        
        console.log("Résultats:", data1, data2);
    } catch (error) {
        console.error("Erreur:", error);
    }
}

// 4. Boucles asynchrones
async function processArray(array) {
    // Séquentiel
    for (const item of array) {
        await processItem(item);
    }
    
    // Parallèle
    const promises = array.map(item => processItem(item));
    const results = await Promise.all(promises);
}

// 5. IIFE asynchrone (Immediately Invoked Function Expression)
(async () => {
    try {
        const data = await getData();
        console.log(data);
    } catch (error) {
        console.error(error);
    }
})();

// 6. Méthodes de classe asynchrones
class DataProcessor {
    async fetchAndProcess() {
        const data = await getData();
        return await this.process(data);
    }
    
    async process(data) {
        return await traiterDonneesPromise(data);
    }
}

// 7. Gestion des timeouts
async function getDataWithTimeout(timeout) {
    const timeoutPromise = new Promise((_, reject) =>
        setTimeout(() => reject(new Error('Timeout')), timeout)
    );
    
    try {
        const result = await Promise.race([
            getData(),
            timeoutPromise
        ]);
        return result;
    } catch (error) {
        if (error.message === 'Timeout') {
            console.error('La requête a expiré');
        }
        throw error;
    }
}
