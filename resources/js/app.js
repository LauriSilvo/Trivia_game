//
fetch('/api/categories')
    .then(response => response.json())
    .then(categories => {
        console.log(categories);
    });
