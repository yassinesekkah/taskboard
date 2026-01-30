
document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('backlogSearchInput');
    const form = document.getElementById('backlogSearchForm');

    if (!input || !form) return;

    let timeout = null;

    input.addEventListener('input', () => {
        clearTimeout(timeout);

        timeout = setTimeout(() => {
            form.submit();
        }, 400);
    });

    if (input.value.trim() !== '') {
        input.focus();
    }    
    
        const val = input.value;
        input.value = '';
        input.value = val;
});





