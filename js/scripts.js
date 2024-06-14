document.addEventListener('DOMContentLoaded', () => {
    const addButton = document.getElementById('addBtn');
    addButton.addEventListener('click', () => {
        window.location.href = 'add.php';
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.querySelector('.search');
    const tableRows = document.querySelectorAll('tbody tr');
    const noResultsRow = document.querySelector('.no-results');

    searchInput.addEventListener('input', function () {
        const searchValue = this.value.toLowerCase();
        let hasVisibleRows = false;

        tableRows.forEach(row => {
            if (row.classList.contains('no-results')) return;

            const cellText = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            if (cellText.includes(searchValue)) {
                row.style.display = '';
                hasVisibleRows = true;
            } else {
                row.style.display = 'none';
            }
        });

        if (!hasVisibleRows) {
            noResultsRow.style.display = '';
        } else {
            noResultsRow.style.display = 'none';
        }
    });
});