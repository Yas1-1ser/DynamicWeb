document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("toggle-table-btn").addEventListener("click", function () {
        const table = document.getElementById("storage-table");
        table.style.display = table.style.display === "none" ? "table" : "none";
    });

    async function loadTableData() {
        try {
            const response = await fetch('/json/storage.json');
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            const data = await response.json();
            const tableBody = document.querySelector('#storage-table tbody');
            tableBody.innerHTML = '';

            data.products.forEach(product => {
                const row = `
                <tr>
                    <td>${product.name}</td>
                    <td>${product.category}</td>
                    <td>${product.price}</td>
                </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', row);
            });
        } catch (error) {
            console.error('Error loading table data:', error);
        }
    }

    loadTableData();
});