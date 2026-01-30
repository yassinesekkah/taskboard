
document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('backlogSearchInput');
    const form = document.getElementById('backlogSearchForm');
    const priority = document.getElementById('prioritySelect');

    if (!input || !form || !priority) return;

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

    priority.addEventListener('change', () => {
        form.submit();
    });
});





