  
    const input = document.getElementById('searchInput');
    const form = document.getElementById('searchForm');

    let timeout = null;

    input.addEventListener('input', function () {
        clearTimeout(timeout);

        timeout = setTimeout(() => {
            form.submit();
        }, 400); // debounce
    });

